<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
    <style>
    .login-header{
    text-align: center;
    padding-top: 30px;
    }

    .login-form{
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
        <h1 class="login-header">Login</h1>
        <hr>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
    <div class="login-form">
            <form>
                <div class="">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="registration">Don't have an account? Registration here...</a><br><br>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
          </div>
    </div>
          

   
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>