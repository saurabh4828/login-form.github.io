<?php

include '../dbconn.php';

$sau='';

if(isset($_POST['signup'])){

	$fullname=$_POST['fname'];
	$gmail=$_POST['gmail'];
	$phone=$_POST['phone_no'];
	$pass=$_POST['pass'];
	$cnfrm=$_POST['cnfrm_pass'];

	if(strcmp($pass, $cnfrm)!=0){
		$sau='<div class="alert alert-danger text-center" role="alert">Password does not match</div>';
	}

    else
    {  
       $hash_pass=password_hash($pass,PASSWORD_BCRYPT);

       $querry= "INSERT INTO `login`(`name`, `email`, `contact`, `password`) VALUES ('$fullname','$gmail','$phone','$hash_pass')";

       $data=mysqli_query($conn,$querry);

       if($data){
       	$sau='<div class="alert alert-success text-center" role="alert">Registartion Success</div>';
       }
       else{
       	$sau='<div class="alert alert-danger text-center" role="alert">Error ! Please try again</div>';
       }
       
    }    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
  
</head>
<body>
    <div class="main_div">
    	<div class="sub_div">

    		<span><?php echo $sau; ?></span> <!-- for displaying success or error on top -->

    		<h3 class="text-center">Create Account</h3>
	    	<p class="text-center">Get started with your free account</p>
	    	<button class="form-control text-center text-white bg-danger mb-3"><i class="fa fa-google bg-danger mr-2" aria-hidden="true"></i>Login via Gmail</button>
	    	<button class="form-control text-center text-white bg-primary"><i class="fa fa-facebook bg-primary mr-2" aria-hidden="true"></i>Login via Facebook</button>
    	 
	    	<div>
	    		<form method="post">
				  <div class="align-items-center">  
				    <div class="mt-4">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-user "></i></div>
				        </div>
				        <input type="text" name="fname" class="form-control" placeholder="Full Name" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-google"></i></div>
				        </div>
				        <input type="email" name="gmail" class="form-control"  placeholder="E-mail" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-phone"></i></div>
				        </div>
				        <input type="number" name="phone_no" class="form-control"  placeholder="Phone Number" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-lock"></i></div>
				        </div>
				        <input type="password" name="pass" class="form-control"  placeholder="Create Password" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-lock"></i></div>
				        </div>
				        <input type="password" name="cnfrm_pass" class="form-control"  placeholder="Confirm Password" required>
				      </div>
				    </div>

				    <div class="text-center mt-3">
				    	<a href="login.php" >Already have an Account?</a>
				    </div>

				    <div class="mt-3">
				      <button type="submit" name="signup" class="form-control btn btn-primary mb-2">Signup</button>
				    </div>
				  </div>
				</form>
	    	</div>
    	</div> 	
    </div>



  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

