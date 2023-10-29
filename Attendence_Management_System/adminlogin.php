<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 <script src="bootstrap.bundle.min.js"></script>
</head>
<style>
	:root{
    
    		--primaryColor: #0076de;
    		--whiteColor: #fff;
    		--blackColor: #333;
    		--greyColor: #f6f8fa;
    		--labelColor: #64b1f5;
    		--yellowColor: #ffd723;
    		--regiFormColor:#9ec3d9;
    		--regitextColor:#d13636;
		}
	/*#adminlogdiv1
	{
		height: 500px;
		width: 500px;
		position: absolute;

		

	}*/
	#adminlogdiv2
	{
		height: 500px;
		width: 500px;
		margin: 100px 0px 0px 500px;
		background: rgba(254, 250, 250, 0.39);
		border-radius: 16px;
		box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
/*		backdrop-filter: blur(2.9px);*/
		-webkit-backdrop-filter: blur(2.9px);
		border: 1px solid rgba(254, 250, 250, 0.93);
	}
	.adminlogtext
	{
		color: var(--regitextColor);
		margin: 20px 0px 0px 0px;
	}
	#signupbtn
	{
		margin: 0px 0px 0px 150px;
	}
	#signUpdiv1
	{
		margin: 100px 0px 0px 0px;
	}
</style>
<body>
	<!-- <div class="container col-5 col-sm-5 col-md-5 col-lg-5 shadow-lg d-flex justify-content-center mt-5"> -->
	<!-- <img src="adminbackground1.jpg" class=" col-5 col-sm-5 col-md-5 col-lg-5 shadow-lg d-flex justify-content-center " id="adminlogdiv1"> -->
<div id="adminlogdiv2" class="container col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
		<form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
			<div class="container-lg col-7 col-sm-7 col-md-7 col-lg-7 d-flex justify-content-center">
				<h2 class="adminlogtext">Admin Sign In</h2>
			</div>
	<div class=" form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    	<input type="text" name="adminId" id="adminId" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin ID" required>
		<label class="form-label">Admin Id</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Please fill out this field.</div>
  	</div>
  	<div class="container form-floating col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    	<input type="password" name="adminPass" id="adPass" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Password" required>
		<label class="form-label">Admin Password</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5">
    	<input type="submit" name="adminlogsubmit" class="btn btn-warning shadow-lg col-12 col-sm-12 col-md-12 col-lg-12" id="adminlogbtn" value="Sign In">
  </div>
    		<div class="container col-12 col-sm-12 col-md-12 col-lg-12 form-check mb-3 mt-5">
				<label class="form-label d-flex justify-content-center col-10 col-sm-12 col-md-12 col-lg-12" id="a1">If Not Sign Up Click Here!</label> 
				<div class="container">
				<button type="button" class="btn btn-warning shadow-lg col-3 col-sm-3 col-md-3 col-lg-3" data-bs-toggle="modal" data-bs-target="#myModal" id="signupbtn">Sign Up</button>
				</div>
			</div>
				</form>
					<div class="modal" id="myModal">
  						<div class="modal-dialog modal-dialog-centered">
    						<div class="modal-content">

      						<!-- Modal Header -->
      						<div class="modal-header">
       								 <h4 class="modal-title">Admin Sign Up</h4>
       								 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      						</div>

      						<!-- Modal body -->
    						<div class="modal-body">
    							<form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
        							<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminName" id="adminName1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Name" required>
										<label class="form-label">Admin Name</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminId" id="adminId1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin ID" required>
										<label class="form-label">Admin Id</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminPhoneNo" id="adminPhoneNo1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Phone Number" required>
										<label class="form-label">Admin Phone Number</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminPassword" id="adminPassword1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Password" required>
										<label class="form-label">Admin Password</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="text" name="adminEmail" id="adminEmail1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Email" required>
										<label class="form-label">Admin Email</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  									<div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
    									<input type="date" name="adminDateOfBirth" id="adminDateOfBirth1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter Admin Date Of Birth" required>
										<label class="form-label">Admin Date Of Birth</label>
										<div class="valid-feedback">Valid.</div>
    									<div class="invalid-feedback">Please fill out this field.</div>
  									</div>
  								
     						
      								
      								<!-- Modal footer -->
      								<div class="modal-footer">
      									<button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="SignUpSubmit">Submit</button>
        								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      								</div>
  								</form>


    						</div>
						</div>
					</div>
				</div>
</div>
</body>
</html>
<?php

$connect=mysqli_connect("localhost","root","","attendencemanagementsystemdatabase");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error();
}

if(isset($_POST['SignUpSubmit'])){

    $AdminName=($_POST['adminName']);

	$AdminId=($_POST['adminId']);

	$AdminPhoneNo=($_POST['adminPhoneNo']);

	$AdminPass=($_POST['adminPassword']);
	  
	$AdminEmail=($_POST['adminEmail']);

	$AdminDateOfBirth=($_POST['adminDateOfBirth']);

	$query="INSERT INTO `adminsignup`(`admin_name`, `admin_id`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_date_of_birth`) VALUES ('$AdminName','$AdminId','$AdminPhoneNo','$AdminPass','$AdminEmail','$AdminDateOfBirth')";

	$result=mysqli_query($connect,$query);
	
	if($result){
		echo '<script>alert("Sign Up Successful!")
		window.location="adminlogin.php"</script>';
 		exit;
	}else{
		alert("Sign Up Failed");
	}
}

if(isset($_POST['adminlogsubmit'])){
	$AdminId=($_POST['adminId']);
	$AdminPass=($_POST['adminPass']);

	$query1="SELECT `admin_id`,`admin_password` FROM `adminsignup` WHERE admin_id='$AdminId' AND admin_password='$AdminPass'";

	$result1=mysqli_query($connect,$query1);
	while ($row = mysqli_fetch_assoc($result1)) {


        $check_adminId = $row['admin_id'];
        $check_adminPass = $row['admin_password'];
    }

	if ($AdminId == $check_adminId && $AdminPass == $check_adminPass) {
        echo '<script type="text/javascript">alert("Sign In Successful!");
        window.location="adminDashboard.php"</script>';
        
    }else{
        echo '<script type="text/javascript">alert("Sign In Fail!");
        window.location="adminlogin.php"</script>';
	}
}
?>