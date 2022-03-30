<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    .registration-header{
    text-align: center;
    padding-top: 30px;
    }

    .registration-form{
    padding-left: 400px;
    padding-right: 400px;
    }
    </style>
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="https://i.ibb.co/MCsQMf4/cover.png" alt="" width="365" height="150" class="d-inline-block align-text-top">
                
              </a>
            </div>
          </nav>

    </div>

    <div class="container">
        <h1 class="registration-header">Registration</h1>
        <hr>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
    <div class="registration-form ">
    <form action="{{route('register-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                    <label for="userType">Choose User Type:</label>
                    <br>
                        <select name="userType" id="userType">
                            <option value="">Choose One</option>
                            <option value="student">Learner</option>
                            <option value="faculty">Instructor</option>
                        </select>
                        <br>
                        <span class="text-danger">@error('userType') {{$message}} @enderror</span>
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        <br>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    <a href="login">Already Have an Account? Login Here...</a>
                </form>
          </div>
    </div>
          

    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>