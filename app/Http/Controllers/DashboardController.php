<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Countries;
use App\Models\States;
use App\Models\Cities;
use Str;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $all_data = User::with('countries','cities','states')->get();
        return view('dashboard',['user'=>$user, 'all_data' => $all_data]);
    }

    public function getState(Request $request)
    {
        $data =[];
        if(isset($request->country_id) && !empty($request->country_id))
        {
            $state = States::where('country_id', $request->country_id)->get();
            $data['state'] = $state;
        }
        return response()->json($data);
    }

    public function getCity(Request $request)
    {
        $data =[];
        if(isset($request->state_id) && !empty($request->state_id))
        {
            $city = Cities::where('state_id', $request->state_id)->get();
            $data['city'] = $city;
        }  
        return response()->json($data);  
    }
}
