<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Registation</title>
  </head>
  <body>
    <div class="container mt-5">
      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif
      @if(session()->has('error_message'))
        <div class="alert alert-danger">
              {{ session()->get('error_message') }}
        </div>
      @endif
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h2 class="text-success" style="text-align: center;" >Registration</h2>
            </div>
            <div class="card-body">
              <form method="post" id="register-form" action="{{route('register_store')}}">
                @csrf
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-4 col-form-label">User Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" value="{{old('first_name')}}" placeholder="First name" id="first_name" name="first_name">
                    @if ($errors->has('first_name'))
                    <span class="help-block">
                      <strong>
                        <p class="text-danger">{{ $errors->first('first_name') }}</p>
                      </strong>
                    </span>
                    @endif
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Last name" id="last_name" name="last_name" value="{{old('last_name')}}">
                    @if ($errors->has('last_name'))
                    <span class="help-block">
                      <strong>
                        <p class="text-danger">{{ $errors->first('last_name') }}</p>
                      </strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group row mt-2" style="display:none;">
                  <label for="password" class="col-sm-4 col-form-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                      </strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group row mt-2">
                  <label for="contact" class="col-sm-4 col-form-label">Contact Number</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="contact" id="contact" placeholder="contact" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  maxlength="10" value="{{old('contact')}}">
                  </div>
                  @if ($errors->has('contact'))
                  <span class="help-block">
                    <strong>
                      <p class="text-danger">{{ $errors->first('contact') }}</p>
                    </strong>
                  </span>
                  @endif
                </div>
                <div class="form-group row mt-2">
                  <label for="email" class="col-sm-4 col-form-label">Email ID</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Id" value="{{old('email')}}">
                    @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                      </strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group row mt-2">
                  <label for="address" class="col-sm-4 col-form-label">Address</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="address" id="address">@if(!empty(old('address'))){{old('address')}} @endif
                    </textarea>
                  </div>
                  @if ($errors->has('address'))
                  <span class="help-block">
                    <strong>
                      <p class="text-danger">{{ $errors->first('address') }}</p>
                    </strong>
                  </span>
                  @endif
                </div>
                <div class="form-group row mt-2">
                  <div class="col-md-5 col-lg-4 mg-t-20 mt-10">
                    <label >Country </label> 
                    <select id="country_id" class="form-control" name="country">
                      <option value="">Select Country</option>
                      @foreach($countries as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                    </select>
                    @if ($errors->has('country'))
                    <span class="help-block">
                      <strong>
                        <p class="text-danger">{{ $errors->first('country') }}</p>
                      </strong>
                    </span>
                    @endif
                  </div>
                  <div class="col-md-5 col-lg-4 mg-t-20 mt-10">
                    <label >State </label> 
                    <select id="state_id" class="form-control" name="state">
                      <option>Select State</option>
                    </select>
                    @if ($errors->has('state'))
                    <span class="help-block">
                      <strong>
                        <p class="text-danger">{{ $errors->first('state') }}</p>
                      </strong>
                    </span>
                    @endif
                  </div>
                  <div class="col-md-5 col-lg-4 mg-t-20 mt-10">
                    <label >City </label> 
                    <select id="city_id" class="form-control"  name="city">
                      <option>Select City</option>
                    </select>
                    @if ($errors->has('city'))
                    <span class="help-block">
                      <strong>
                        <p class="text-danger">{{ $errors->first('city') }}</p>
                      </strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group mt-2">
                  <a href="{{route('login_view')}}" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>
if ($("#register-form").length > 0) {
  $("#register-form").validate({
    rules: {                      
      first_name: {
        required: true,
        maxlength: 50
      },
      last_name: {
        required: true,
      },
      email: {
        required: true,
        email : true
      },
      contact: {
        required: true,
      },
      address: {
        required: true,
      },
      country: {
        required: true,
      },
      state: {
        required: true,
      },
      city: {
        required: true,
      },
    },
    messages: {
      first_name: {
        required: "Please Enter first_name",
      },
      last_name: {
        required: "Please Enter last_name",
      },
      email: {
        required: "Please Enter email",
        email : "Please Enter valid email",
      },
      contact: {
        required: "Please Enter contact number",
      },
      address: {
        required: "Please Enter address",
      },
      country: {
        required: "Please select country",
      },
      state: {
        required: "Please select state",
      },
      city: {
        required: "Please select city",
      },
    },
  })
} 
</script>

<script type="text/javascript">
  $( "#country_id" ).change(function() {
    var country_id = $(this).val();
    $('#state_id').html('');
    $('#city_id').html('');
    if(country_id != '')
    {
      $.ajax({
        type: "POST",
        url: "{{route('getState')}}",
        dataType : 'json',
        data: {
          "_token": "{{ csrf_token() }}",
          'country_id':country_id,
        },  
        success: function (data) {
          $('#state_id').html('<option value="">Select State</option>'); 
          $('#city_id').html('<option value="">Select City</option>'); 
          $.each(data.state,function(key,value){
            $("#state_id").append('<option value="'+value.id+'">'+value.name+'</option>');
          });
        },
      });
    }
  });

  $("#state_id" ).change(function() {
    var state_id = $(this).val();
    $('#city_id').html('');

    if(state_id != '')
    {
      $.ajax({
        type: "POST",
        url: "{{route('getCity')}}",
        dataType : 'json',
        data: {
          "_token": "{{ csrf_token() }}",
          'state_id':state_id,
        },  
        success: function (data) { 
          $('#city_id').html('<option value="">Select City</option>'); 
          $.each(data.city,function(key,value){
            $("#city_id").append('<option value="'+value.id+'">'+value.name+'</option>');
          });
        },
      }); 
    }
  });
</script>
<style type="text/css">
  .error{
    color: red;
  }
</style>