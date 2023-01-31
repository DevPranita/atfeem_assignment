<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Dashboard</title>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Dashboard</a>
        <div class="form-inline">
          <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('logout')}}">Logout</a>
        </div>
      </nav>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
              <h4>Welcome, {{$user->first_name}} {{$user->last_name}}</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="container">        
        <div class="table-responsive mt-5">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Address</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">City</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              @foreach($all_data as $row)
              <tr>
                <th scope="row">{{$row['id']}}</th>
                <td>{{$row['first_name']}}</td>
                <td>{{$row['last_name']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['contact']}}</td>
                <td>{{$row['address']}}</td>
                <td>{{$row['countries']['name']}}</td>
                <td>{{$row['states']['name']}}</td>
                <td>{{$row['cities']['name']}}</td>
                <td>{{$row['username']}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
  </body>
</html>