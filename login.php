<?php
session_start();
if(isset($_GET['uname']) && isset($_GET['password']) )
{
	$uname=$_GET['uname'];
	$password=$_GET['password'];
	$con= odbc_connect("customer", "", "");

	$sql="select * from Login_details where Username='".$uname."' and password='".$password."'";
	$result=odbc_exec($con,$sql);
	$count=odbc_fetch_row($result);
	if($count==1)
	{
		echo "Login Successful <br> Please Wait";
		$_SESSION['log']=1;
        header("refresh:2;url=home.php");
	}
	elseif($count==null)
	{
		echo "Invalid user";
		header("refresh:2;url=index.php");
	}
}

else
{
	echo "Invalid Request";
	header("refresh:2;url=index.php");

}
?>