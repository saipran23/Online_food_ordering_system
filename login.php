<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurent</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Define functions outside of $(document).ready()
        function showRegisterForm() {
            $('#login-container').css('display', 'none');
            $('#register-container').css('display', 'block');
        }

        function showLoginForm() {
            $('#login-container').css('display', 'block');
            $('#register-container').css('display', 'none');
        }

        // Ready function
        $(document).ready(function(){
            // Your other jQuery code here
        });
    </script>

    <style>
        body{
            background-color:rgba(0, 255, 128, 0.247);
        }
        #navbar{
            background-color: #b2744c;
            font-family: 'Roboto', sans-serif;
          }
          .navbar-nav{
            margin-left: 50px;
          }
          .nav-item .nav-link{
            color: black;
            margin-left: 10px;
            font-weight: bold;
            transition: 0.5s;
          }
          .nav-item .nav-link-login{
            color: black;
            margin-left: 10px;
            font-weight: bold;
            transition: 0.5s;
          }
          .nav-item .nav-link:hover{
            background: #f7f5f2;
            border-radius: 5px;
            color: black;
          }
          .nav-item .nav-link-login:hover{
            background: #f7f5f2;
            border-radius: 5px;
            color: black;
          }
        .coffee-logo{
            padding:20px;
            height:400px;
            width:300px;
        }
        .container {
        width: 300px;
        margin: 50px auto;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .container {
            width: 300px;
            margin: 50px auto;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .message {
            text-align: center;
            display: none;
        }
        .register-form {
            display: none;
        }

        .message {
        text-align: center;
        display: none;
        }
    </style>
</head>
<body>
  <div class="all-content">
   
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="logo"><img src="./images/logo2.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallary">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blogs">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
          
          
          
        </ul>
         
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>
</div>


<div class="container-fluid">
    <div class="content"> 
        <div class="row">
            <div class="col-6 main-content">
                <div class="container" id="login-container">
                    <form id="login-form" action="login_check.php" method="POST" >
                        <h2>Login</h2>
                        <div class="form-group" >
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <input type="submit" value="Login" name="submit">
                        <p>Don't have an account? <a href="#" onclick="showRegisterForm()">Register here</a></p>
                    </form>
                </div>
                <div class="container register-form" id="register-container"  style="display: none;">
                    <form id="register-form" action="register_check.php" method="POST">
                        <h2>Register</h2>
                        <div class="form-group">
                            <label for="new-username">Username:</label>
                            <input type="text" id="new-username" name="new-username" required>
                        </div>
                        <div class="form-group">
                            <label for="new-email">Email:</label>
                            <input type="email" id="new-email" name="new-email" required>
                        </div>
                        <div class="form-group">
                            <label for="new-password">Password:</label>
                            <input type="password" id="new-password" name="new-password" required>
                        </div>
                        <div class="form-group">
                            <label for="new-location">location:</label>
                            <input type="text" id="new-location" name="new-location" required>
                        </div>
                        <input type="submit" value="Register">
                        <p>Already have an account? <a href="#" onclick="showLoginForm()">Login here</a></p>
                    </form>
                </div>
                <div class="message" id="message">
                    <h2>Login Successful</h2>
                    <!-- Add link to homepage or redirect user -->
                    <a href="index.php">Click Here to go Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
