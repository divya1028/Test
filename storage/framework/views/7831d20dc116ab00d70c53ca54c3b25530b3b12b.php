<html>
<head>
	<title>Guest Lecture Form</title>
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
	<form action="/guestlecture" method="POST"  enctype="multipart/form-data">
		 <?php echo csrf_field(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label><b>Name :</b></label>
					<input type="text" name="name" placeholder="Enter name " class="form-control">
				</div>
				<div class="form-group">
					<label><b>Email :</b></label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control">
				</div>

                    <label><b>Category:</b></label>
                 <select name="category"><option value="Workshop">Workshop</option>
						<option value="Guestlecture">GuestLecture</option>
					</select>
				     </tr>
				<div class="form-group">
					<label><b>Title :</b></label>
					<input type="text" name="title" placeholder="Enter Title" class="form-control">
				</div>
				<div class="form-group">
					<label><b>From Date :</b></label>
					<input type="date" name="fromdate" placeholder="Date From" class="form-control">
				</div>
				<div class="form-group">
					<label><b>To Date :</b></label>
					<input type="date" name="todate" placeholder="To Date" class="form-control">
				</div>
				<div class="form-group">
					<label><b>Organization:</b></label>
					<input type="text" name="organization" placeholder="Enter Organization" class="form-control">
				</div>
				<div class="form-group">
					<label><b>Venue  :</b></label>
					<input type="text" name="venue" placeholder="Enter Venue" class="form-control">
				</div>
				<div class="form-group">
					<label><b>File To Upload:</b></label>
					<input type="file" name="file">
				</div>
                 <input type="submit" name="submit" class="btn btn-success">
                  </div>
                 				<div class="col-md-4">
					<div class="col-md-4">
					</div>
				</div>
			</div>
		</div>
	
</form>
	</body>
	</html><?php /**PATH C:\Users\Hp\task\resources\views/guestlecture.blade.php ENDPATH**/ ?>