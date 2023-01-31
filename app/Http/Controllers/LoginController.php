<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Countries;
use App\Models\States;
use App\Models\Cities;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Str, Validator, DB, Mail;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "username"=> 'required',            
            "password"=>'required',            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $username = $request->username;
        $password =  $request->password;
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->route('home');
        }else{
            return redirect()->route('login_view')->withErrors(['wrong_credentials'=>'Wrong username or password'])->withInput();
        }
    }

    public function register()
    {
        $countries = Countries::all();
        return view('registration',['countries'=>$countries]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "first_name"=>'required',            
            "last_name"=>'required',            
            "email"=> 'required|string|email|unique:users,email',            
            "contact"=>'required',            
            "address"=>'required',            
            "country"=>'required',            
            "state"=>'required',            
            "city"=>'required',            
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();     
        }

        $password = Str::random(8);
        DB::beginTransaction();
        try{
          $new_user = User::create([
              'first_name' => $request->first_name,
              'last_name' => $request->last_name,
              'email' => $request->email,
              'contact' => $request->contact,
              'address' => $request->address,
              'country' => $request->country,
              'state' => $request->state,
              'city' => $request->city,
              'username' => strstr($request->email, '@', true),
              'password' => Hash::make($password),
              'pass' => $password,
          ]);
          $this->basic_email($new_user);
          DB::commit();
          return redirect()->route('register')->with(['message'=>'Registration Completed. Please check your mail id for credentials']);
        } catch (\Exception $e) {
          DB::rollback();
          return redirect()->route('register')->withErrors(['error_message'=>$e->getMessage()]);            
        }
    }

    public function logout()
    { 
        \Session::flush();        
        \Auth::logout();
        return redirect()->route('login_view');
    }

    public function basic_email($user) 
    {
        $url = url('/').'/login';
        $data = array('name'=>$user->first_name.' '.$user->last_name, 'username'=>$user->username, 'password'=>$user->pass, 'url' => $url);
        Mail::send(['text'=>'mail'], $data, function($message) use ($user) {
            $message->to($user->email, $user->first_name.' '.$user->last_name)->subject('Registration Completed');
            $message->from('pranitagaikwad123@gmail.com',env('APP_NAME'));
        });
        return true;
   }
}
