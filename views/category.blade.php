<html>

<head>
	<title>Admin Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

</style>
	
</head>
<body>

	 <center>
<h1><p style="color:green">WELCOME TO OUR INSTITUTE</p></h1></center>
<div class="topnav">
  <a class="active" href="/admindashboard">Home</a>
  <a  href="/category">Create Category</a>
  <a href="">View Report</a>
  <a href="/adminlogin">Logout</a>
  </div></center>
  <form action=""  method="">
    <center>
    <table>
      <h3 class="text-center text-info">Create A Category</h3>
      <tr>
        <td>Type of Category</td>
        <td><input type="text" name="category" ></td>
      </tr>
      
       <tr>
        <td>
      <input type="submit" name="submit"  value="CREATE"  class="btn btn-success" onclick="return confirm('Category Created Successfully')"></td>
  </tr>
</table>
</center>
  </form>
</body>
</html>
