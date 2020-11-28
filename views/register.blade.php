<html>
<head>
	<title>Staff Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
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
 
 <form action="/register" method="POST">
		 @csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label><b>Name :</b></label>
					<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
				</div>
				<div class="form-group">
					<label><b>Password :</b></label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control">
				</div>
				<div class="form-group">
					<label><b>Email :</b></label>
					<input type="text" name="email" placeholder="Enter Email Id" class="form-control">
				</div>
                 <input type="submit" name="Register"  value="Register"class="btn btn-success">
                  </div>
                 				<div class="col-md-4">
					<div class="col-md-4">
					</div>
				</div>
			</div>
		</div>
	
</form>
	</body>
	</html>