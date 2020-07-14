<?php
	$con= odbc_connect("customer", "", "");
  odbc_autocommit($con,FALSE);
	if(isset($_GET['uname'])){
		$uname   = $_GET['uname'];
	$sql="Delete from Login_details where Username='".$uname."'";
	$result=odbc_exec($con,$sql);

if(!odbc_error()){
        odbc_commit($con);
        echo"Transaction Commit is successfull !! <br>";
      }
      else{
        odbc_rollback($con);
        echo"Transaction Rollback is performed <br>";
        echo"Please try again";
        header("refresh:2;url=home.php");
      }
	}
?>

<html>
<head>
  <title>Welcome</title>
</head>
<body>
  
  <h1 style="text-align:center;"> Deleting User Details</h1>
  <h4 style="text-align:center;">Please provide neccessary details to Fetch required data !!</h4>
    <div id ="middle"></div>
    <form name="fetch" style="text-align:center;" action="delete.php" method="GET">
    <label for="uname"><b>Email*</b></label>
          <input class="form-control" type="text" name="uname" required>
    <input type="submit" name="fetch" action="delete.php" value="Delete">
  </body>
  </html>
