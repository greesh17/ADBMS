<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"
</head>
<body>
<div>
	<?php
	if(isset($_POST['create'])){
		
		$firstname = $_POST['firstname'];
		$lastname  = $_POST['lastname'];
		$email     = $_POST['email'];
		$password  = $_POST['password'];
		$age       = $_POST['age'];
		$city      = $_POST['city'];
		$state     = $_POST['state'];
		$country   = $_POST['country'];
		$zipcode   = $_POST['zipcode'];
		$gender    = $_POST['gender'];

		$con= odbc_connect("customer", "", "");
		odbc_autocommit($con,FALSE);
        $sqlq= "INSERT INTO Login_details(Username,password) VALUES('$email', '$password')";
        $result=odbc_exec($con,$sqlq);
        if($result){
	    $sql="INSERT INTO Customer_info(FirstName, LastName, Email, Age, City, State, Country, Zipcode, Gender) Values('$firstname', '$lastname', '$email', '$age', '$city', '$state', '$country', '$zipcode', '$gender')";
	    $r=odbc_exec($con,$sql);
	  
	    echo "Successfully inserted values into Database <br>";
	    if(!odbc_error()){
	    	odbc_commit($con);
	    }
	    else{
	    	odbc_rollback($con);
	    }
	   }
		if(!odbc_error()){
	    	odbc_commit($con);
	    	echo"Transaction Commit is successfull !! <br>";
	    	header("refresh:2;url=index.php");
	    }
	    else{
	    	odbc_rollback($con);
	    	echo"Transaction Rollback is performed <br>";
	    	echo"Please try again";
	    	header("refresh:2;url=registration.php");
	    }
	}
	?>
</div>
<div>
	<form action="registration.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with Correct values.</p>
					<hr class="mb-3">

					<label for="firstname"><b>First Name*</b></label>
					<input class="form-control" type="text" name="firstname" required>
			
					<label for="lastname"><b>Last Name*</b></label>
					<input class="form-control" type="text" name="lastname" required>

					<label for="email"><b>Email*</b></label>
					<input class="form-control" type="text" name="email" required>
			
					<label for="password"><b>Password*</b></label>
					<input class="form-control" type="password" name="password" required>

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
					<input class="btn btn-primary" type="submit" name="create" value="Sign Up">
			    </div>
		    </div>
			
	    </div>
    </form>
</div>

</body>
</html>
