<?php
session_start();
if(isset($_SESSION['log']))
{
if(isset($_GET['uname']) && isset($_GET['password']) )
{
	$uname=$_GET['uname'];
	$password=$_GET['password'];
	$con= odbc_connect("customer", "", "");

	$sql="select * from Customer_info where email='".$uname."'";
	$result=odbc_exec($con,$sql);
	while($row=odbc_fetch_array($result)){
		echo ""
	}
?>

<html>
<head>
	<title>Welcome</title>
</head>
<body>
	
	<h1 style="text-align:center;"> Welcome to Home Page</h1>

</body>
</html>
<?php
}
else{
	echo "Invalid request";
	header("refresh:2;url=index.php");
}
?>