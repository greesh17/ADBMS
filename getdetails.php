<?php
	$con= odbc_connect("customer", "", "");
  odbc_autocommit($con,FALSE);
	if(isset($_GET['uname'])){
		$uname   = $_GET['uname'];
	$sql="select * from Customer_info where email='".$uname."'";
	$result=odbc_exec($con,$sql);
	if($result){
    if($row=odbc_fetch_array($result)!=NULL){
       while($row=odbc_fetch_array($result)){

      ?>
<html>
<head>
  <title>Details</title> 
  <script>
    function deleteuser(){
    document.forms['fetch'].action='delete.php';
    document.forms['fetch'].submit();
  }
  </script>
  </head>
  </body>     
  <table align="center" border="1px" style="width:600px; line-height:40px;">
   	<tr>
   		<th colspan="10"><h2>Customer Info</h2></th>
   	</tr>
   	<t>
   		<th>First Name</th>
   		<th>Last Name </th>
   		<th>Email</th>
   		<th> Age</th>
   		<th> City</th>
   		<th> State</th>
   		<th> Country</th>
   		<th> Zipcode</th>
   		<th>Gender</th>
   	</t>
      <tr>
		<td><?php echo $row['FirstName']; ?></td>
		<td><?php echo $row['LastName']; ?></td>
		<td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['City']; ?></td>
        <td><?php echo $row['State']; ?></td>
        <td><?php echo $row['Country']; ?></td>
        <td><?php echo $row['Zipcode']; ?></td>
        <td><?php echo $row['Gender']; ?></td>
      </tr>
      </table>

    </body>
</html>
<?php
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

}
else{
    echo "Invalid User Please try again !!<br>";
    echo "Please wait!!<br>";
    header("refresh:2;url=home.php");
  }
}
 
	
}
?>
<html>
<body>
  <form name="fetch" style="text-align:center;" action="delete.php" method="GET">
      <input type="button" name="delete" value="Delete User" onclick="deleteuser();">
    </form>
  </body>
  </html>