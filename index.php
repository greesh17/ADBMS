<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<style>
		html{
			background:url('Zoom_Background 12 - Beach Sunset.jpg') no-repeat center center fixed;
	        -webkit-background-size:cover;
	        -moz-background-size:cover;
	        -o-background-size:cover;
	        background-size:cover;}
	</style>
</head>
<script>
	function createnewaccount(){
		document.forms['Login'].action='registration.php';
		document.forms['Login'].submit();
	}
</script>	
<body>
	<h1  style="text-align:center;">Login Page</h1>
	<div id ="middle"></div>
	<form name="Login" style="text-align:center;" action="login.php" method="GET">
		Enter username:<input type="text" name="uname"><br><br>
		Enter password:<input type="password" name="password"><br><br>
		<input type="submit" name="action" action="login.php" value="Login">
		<input type="button" name="register" value="SignUp" onclick="createnewaccount();">
	</form>

</body>
</html>