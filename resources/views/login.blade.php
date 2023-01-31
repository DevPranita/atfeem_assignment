<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h2 class="text-success" style="text-align: center;" >Login</h2>
            </div>
            <div class="card-body">
              <form id="login" method="post" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" value="{{old('username')}}" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>
                      <p class="text-danger">{{ $errors->first('username') }}</p>
                    </strong>
                  </span>
                  @endif                
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password" placeholder="Password">
                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>
                      <p class="text-danger">{{ $errors->first('password') }}</p>
                    </strong>
                  </span>
                  @endif
                  @if ($errors->has('wrong_credentials'))
                  <span class="help-block">
                    <strong>
                      <p class="text-danger">{{ $errors->first('wrong_credentials') }}</p>
                    </strong>
                  </span>
                  @endif
                </div>
                <div class="form-group mt-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('register')}}">Create an account</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>