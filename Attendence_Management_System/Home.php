<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendence Management System</title>
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
	body
	{
		background-color: #1b4487;
		width: 0px;
		height: 0px;
	}
	#homeImg
	{
/*		background-image: url("HomeBack.jpg");*/
/*		background-repeat: no-repeat;*/
/*		background-attachment: fixed;  */
/*  		background-size: 100%;*/
		position: absolute;
		width: 1000px;
		height:100%;
/*		opacity: 0.4;*/
	}
	#userlogo
	{
		width: 250px;
		height: 250px;
		color: var(--whiteColor);
		margin: 0px 0px 0px 20px;
	}

	#adminlogo
	{
		width: 250px;
		height: 250px;
/*		background-color: dodgerblue;*/
		color: var(--whiteColor);
		
	}
	#user-logo-div
	{
		width: 300px; 
		height: 300px;
		/* From https://css.glass */
background: rgba(254, 254, 255, 0.42);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(6.9px);
-webkit-backdrop-filter: blur(6.9px);
		position: absolute;
		margin: 170px 0px 0px 350px;
	}
	#user-logo-div:hover
	{
		/* From https://css.glass */
background: rgba(9, 94, 179, 1);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(12.9px);
-webkit-backdrop-filter: blur(12.9px);
	}
	#admin-logo-div
	{
		width: 300px; 
		height: 300px;
		/* From https://css.glass */
		background: rgba(30, 94, 171, 0.55);
		border-radius: 16px;
		box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
		backdrop-filter: blur(20px);
		-webkit-backdrop-filter: blur(20px);
		position: absolute;
		margin: 180px 0px 0px 1100px;
	}
	#admin-logo-div:hover
	{
		opacity: 0.5;
	}
	#login-login-text
	{
		margin: 0px 0px 0px 80px;
	}
	#admin-login-text
	{
		margin: 0px 0px 0px 60px;
	}

</style>
<body>
	<div class="row">
	<img src="HomeBack.jpg"  id="homeImg" class="img-fluid">

	<div class="container col-xl-12 shadow-lg" id="user-logo-div" onclick="openUserloginpage()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" id="userlogo">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>
<h3 id="login-login-text">User Login</h3>
</div>

	<div class="container col-xl-12 shadow-lg" id="admin-logo-div" onclick="openAdminloginpage()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16" id="adminlogo">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
</svg>
<h3 id="admin-login-text">Admin Login</h3>
</div>
</div>
</body>
</html>
<script>
	function openAdminloginpage(){
		window.location="adminlogin.php";
	}
	function openUserloginpage(){
		window.location="userlogin.php";
	}
</script>