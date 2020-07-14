<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script>
	function goback(){
		document.forms['update'].action='home.php';
		document.forms['update'].submit();
	}	
</script>
</head>
<body>
<div>
	<?php
	if(isset($_POST['update'])){
		
		$firstname = $_POST['firstname'];
		$lastname  = $_POST['lastname'];
		$email     = $_POST['email'];
	    $age       = $_POST['age'];
		$city      = $_POST['city'];
		$state     = $_POST['state'];
		$country   = $_POST['country'];
		$zipcode   = $_POST['zipcode'];
		$gender    = $_POST['gender'];

		$con= odbc_connect("customer", "", "");
		odbc_autocommit($con,FALSE);
        $sqlq= "Select * from Login_details where Username='".$email."'";
        $result=odbc_exec($con,$sqlq);
        if($result){
	    $sql="UPDATE Customer_info SET FirstName='".$firstname."', LastName='".$lastname."', Age='".$age."', City='".$city."', State='".$state."', Country='".$country."', Zipcode='".$zipcode."', Gender='".$gender."' where Email='".$email."'";
	    $r=odbc_exec($con,$sql);
	  
	    echo "Successfully Updated values into Database <br>";
		if(!odbc_error()){
	    	odbc_commit($con);
	    	echo"Transaction Commit is successfull !! <br>";
	    }
	    else{
	    	odbc_rollback($con);
	    	echo"Transaction Rollback is performed <br>";
	    	echo"Please try again";
	    	header("refresh:2;url=home.php");
	    	
	    }}
	    else{
	    	echo "Records not found!!";
	    }
	}
	?>
</div>
<div>
	<form name="update" action="update.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h1>Update Form</h1>
					<p>Fill up the form with Correct values.</p>
					<hr class="mb-3">

					<label for="firstname"><b>First Name*</b></label>
					<input class="form-control" type="text" name="firstname" required>
			
					<label for="lastname"><b>Last Name*</b></label>
					<input class="form-control" type="text" name="lastname" required>

					<label for="email"><b>Email*</b></label>
					<input class="form-control" type="text" name="email" required>
			
					
					<label for="age"><b>Age*</b></label>
					<input class="form-control" type="text" name="age" required>
			
					
					<label for="city"><b>City*</b></label>
					<input class="form-control" type="text" name="city" required>
			
					
					<label for="state"><b>State*</b></label>
					<input class="form-control" type="text" name="state" required>
			
					
					<label for="country"><b>Country*</b></label>
					<input class="form-control" type="text" name="country" required>
					
					<label for="zipcode"><b>Zipcode*</b></label>
					<input class="form-control" type="text" name="zipcode" required>
		
					<label for="Gender"><b>Gender*</b></label>
			        <input class="form-control" type="text" name="gender" required>
                    
                    <hr class="mb-3">
					<input class="btn btn-primary" type="submit" name="update" value="Update">
					<input class="btn btn-primary" type="button" name="back" value="back" onclick="goback();">
			    </div>
		    </div>
			
	    </div>
    </form>
</div>	

</body>
</html>