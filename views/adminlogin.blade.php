<html>
<head>
    <title>AdminLogin</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
</style>


<!------ Include the above in your HEAD tag ---------->

<body>
    <center>
<h1><p style="color:green">WELCOME TO OUR INSTITUTE</p></h1></center>
<div class="topnav">
  &nbsp;&nbsp;<a class="active" href="/frontend">Home</a>
  &nbsp;&nbsp;<a  href="/aboutus">About Us</a>
   &nbsp;&nbsp;<a href="/login">Login</a>
   &nbsp;&nbsp;<a href="/register">Register</a>
   &nbsp;&nbsp;<a href="/adminlogin">AdminLogin</a>

 <div>
<br>

    <div id="login">
        <h3 class="text-center text-white pt-5">AdminLog</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Admin Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email Id:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <br><br>
                           <a href="admindashboard" name="submit" class="registerbtn" onclick="return confirm('You Logged In As Admin')">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
