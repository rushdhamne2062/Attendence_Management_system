<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 <script src="bootstrap.bundle.min.js"></script>
   <script src="jquery.min.js"></script>
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
#menuLogo {
  display: inline-block;
  cursor: pointer;
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: #333;
  margin: 6px 0;
  transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 11px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -11px) rotate(45deg);
}
#adminDashdiv1{
	margin: 0px 0px 0px 400px;
}
#administratorName{
	margin: -40px 0px 0px 70px;
}
#logoutbtn{
  margin: -50px 0px 0px 0px;
}
.slideshow-container
    {
      width: 1200px;
      height: 550px;
      margin: 50px 0px 0px 320px;
      background: rgba(242, 242, 32, 0.73);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
/*      backdrop-filter: blur(6.5px);*/
      -webkit-backdrop-filter: blur(6.5px);
    }
    
    .questNo
    {
      color: var(--regitextColor);
      font-size: 20px;
      padding-top: 10px;
      margin: 0px 0px 0px 0px;
    }
    #pagi1
    { background-color: white;
      color: black;
      border: 1px solid;
      margin: 0px 0px 0px 0px;
    }
    #pagi1:hover
    {
      opacity: 0.7;
      color: var(--whiteColor);
      background-color: var(--yellowColor);
      
    }

    #con2 ,#con3 ,#con4{
      display: none;
    }
    #offcanvasNavbar{
/*      background-color: dodgerblue;*/
      width: 300px;
    }
    #usertable{
      width: 1200px;
      border: 1px solid;
    }
    #adduser{
      margin: 20px 0px 10px 1050px;
    }
    #updatebtn{
      padding: 10px 10px 10px 10px;
    }
</style>
<body>
<nav class="navbar bg-light fixed-top">
  <div class="container" id="adminDashdiv1">
    <div class="container" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" id="menuLogo" onclick="myFunction(this)">
  	<div class="bar1"></div>
  	<div class="bar2"></div>
  	<div class="bar3"></div>
	</div>
    <a class="navbar-brand page-link" href="#question1" id="administratorName" onclick="currentSlide(1)">Administrator</a>
    <button type="button" class="btn" data-bs-dismiss="offcanvas" onclick="logout()" id="logoutbtn">Logout</button>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Dashboard</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
      </div>
      <div class="offcanvas-body">
        <ul class="pagination navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="page-item">
            <a class="page-link" href="#question2" onclick="currentSlide(2)" id="pagi1">User</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#question3" onclick="currentSlide(3)" id="pagi1">Admin</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#question4" onclick="currentSlide(4)" id="pagi1">Attendence</a>  
          </li>
        </ul> 
      </div>
    </div>
  </div>
</nav>
<div class="slideshow-container" id="con1">
    <div class="mySlides">
    <div id="question1">
      
      </div>
    </div> 
  </div>
<div class="slideshow-container overflow-auto" id="con2">
    <div class="mySlides">
    <div id="question2">
      <div>
        <button type="button" class="btn btn-warning shadow-lg col-1 col-sm-1 col-md-1 col-lg-1" id="adduser" data-bs-toggle="modal" data-bs-target="#myModal">Add User</button>
      </div>

<div class="modal" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                       <h4 class="modal-title">Add User</h4>
                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                <div class="modal-body">
                  <form method="post" class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="UserId1" id="userId1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User ID" required>
                    <label class="form-label">User Id</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                      <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userName1" id="userName1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter USer Name" required>
                    <label class="form-label">User Name</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userEmail1" id="userEmail1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Email" required>
                    <label class="form-label">User Email</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userPhoneNo1" id="userPhoneNo1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Phone Number" required>
                    <label class="form-label">User Phone Number</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userProject1" id="userProject" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Project" required>
                    <label class="form-label">User Project</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="date" name="userEnrolledDate1" id="userEnrolledDate" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Enrolled Date" required>
                    <label class="form-label">User Enrolled Date</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userPassword1" id="userPassword1" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Password" required>
                    <label class="form-label">User Password</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                  
                  
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="AddUser">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </form>   
              </div>
            </div>
        </div>
      </div>
<?php
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$connect2=mysqli_connect('localhost','root','','attendencemanagementsystemdatabase');

if(isset($_POST['AddUser'])){
  $user_id = ($_POST['UserId1']);

  $user_name=($_POST['userName1']);

  $user_email=($_POST['userEmail1']);

  $user_phone_no=($_POST['userPhoneNo1']);

  $user_project=($_POST['userProject1']);
  
  $user_enrolled_date = ($_POST['userEnrolledDate1']);  

  $user_password = ($_POST['userPassword1']);

$result2=mysqli_query($connect2,"INSERT INTO `usersignup`(`user_Id`, `user_Name`, `user_Email`, `user_Phone_No`, `user_Project`, `user_Enrolled_Date`, `user_Pass`) VALUES ('$user_id','$user_name','$user_email','$user_phone_no','$user_project','$user_enrolled_date','$user_password')");

if($result2){
  echo "<script>alert('Add User Successfully')
window.location='adminDashboard.php'</script>";
}else{
  echo "<script>alert('Add User Unsuccessfully')
window.location='adminDashboard.php'</script>";
}

}
?>



<table class="table table-hover table-bordered" >
  <thead>
    <tr>
    <th scope="col">Sr No:</th>
    <th scope="col">User Id:</th>
    <th scope="col">User Name:</th>
    <th scope="col">User Email:</th>
    <th scope="col">User Phone Number:</th>
    <th scope="col">User Project:</th>
    <th scope="col">User Enrolled Date:</th>
    <th scope="col">User Password:</th>
    <th scope="col">Edit:</th>
    <th scope="col">Delete:</th>
  </tr>
  </thead>


<tbody>
  <?php

include 'userUpdate.php';
include 'userUpdateModal.php';
error_reporting();

$connect1=mysqli_connect('localhost','root','','attendencemanagementsystemdatabase');



  $selQuery1="SELECT * FROM `usersignup`";
  $result1=mysqli_query($connect1,$selQuery1);
  
  $num=mysqli_num_rows($result1);

  while($row=mysqli_fetch_array($result1)){
    $_SESSION['Id']=$row['id'];
    ?>
<tr>
  <th scope="row"><?php echo $row['id'];?></th>
  <td><span id="userID<?php echo $row['id'];?>"><?php echo $row['user_Id'];?></span></td>
  <td><span id="userNAME<?php echo $row['id']?>"><?php echo $row['user_Name'];?></span></td>
  <td><span id="userEMAIL<?php echo $row['id']?>"><?php echo $row['user_Email'];?></span></td>
  <td><span id="userPHONENO<?php echo $row['id']?>"><?php echo $row['user_Phone_No'];?></span></td>
  <td><span id="userPROJECT<?php echo $row['id']?>"><?php echo $row['user_Project'];?></span></td>
  <td><span id="userENROLLEDDATE<?php echo $row['id']?>"><?php echo $row['user_Enrolled_Date'];?></span></td>
  <td><span id="userPASS<?php echo $row['id']?>"><?php echo $row['user_Pass'];?></span></td>
  <td><button type="button" class="edit"  id="updatebtn" data-bs-toggle="modal" data-bs-target="#myModal1" value="<?php echo $row['id'];?>"><a href="userUpdate.php?userid1=<?php echo $row['id']?> #myModal1" data-bs-toggle="modal">Update</a></button>
    <?php echo $row['id']?></td>
  <td><button type="button" id="updatebtn"><a href="userDelete.php?userid=<?php echo $row['id']?>">X</a></button></td>
</tr>
<?php
    }
?>
</tbody>


<!-- <div class="modal" id="myModal1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"> -->

                  <!-- Modal Header -->
                   <!-- <div class="modal-header">
                       <h4 class="modal-title">User Update</h4>
                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div> --> 

                  <!-- Modal body -->
                <!-- <div class="modal-body">
                  <form method="post"  class="needs-validation col-6 col-sm-8 col-md-10 col-lg-12">
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="UserId" id="userId2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User ID" required>
                    <label class="form-label">User Id</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                      <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userName" id="userName2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter USer Name" required>
                    <label class="form-label">User Name</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userEmail" id="userEmail2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Email"  required>
                    <label class="form-label">User Email</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userPhoneNo" id="userPhoneNo2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Phone Number"  required>
                    <label class="form-label">User Phone Number</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userProject" id="userProject2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Project"  required>
                    <label class="form-label">User Project</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="date" name="userEnrolledDate" id="userEnrolledDate2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Enrolled Date"  required>
                    <label class="form-label">User Enrolled Date</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating container col-12 col-sm-12 col-md-12 col-lg-12 mb-3 mt-5" id="signUpdiv1">
                      <input type="text" name="userPassword" id="userPassword2" class="form-control mt-3 mb-3 border border-warning col-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter User Password"  required>
                    <label class="form-label">User Password</label>
                    <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div> -->
                    
                  
                  
                    <!-- Modal footer -->
                    <!-- <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="UserUpdate">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </form>

                
              </div>
            </div>
        </div>
      </div> -->
      
<?php
// }

?>



</table>

    
      </div>
    </div> 
  </div>

  



<div class="slideshow-container" id="con3">
    <div class="mySlides">
    <div id="question3">
      <p class="questNo">Q.3 / 5 ) Write a PHP program to print sum of digits.</p>
      </div>
    </div> 
  </div>
  <div class="slideshow-container" id="con4">
    <div class="mySlides">
    <div id="question4">
      <p class="questNo">Q.4 / 5 ) Write a PHP program to print sum of digits.</p>
      </div>
    </div> 
  </div>
</body>
</html>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
function logout(){
  window.location="adminlogin.php";
}

    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slideshow-container");
  let dots = document.getElementsByClassName("page-link");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}




$(document).ready(function(){
  $(document).on('click', '.edit', function(){
    var id=$(this).val();
    var userid=$('#userID'+id).text();
    var username=$('#userNAME'+id).text();
    var useremail=$('#userEMAIL'+id).text();
    var userphoneno=$('#userPHONENO'+id).text();
    var userproject=$('#userPROJECT'+id).text();
    var userenrolleddate=$('#userENROLLEDDATE'+id).text();
    var userpassword=$('#userPASS'+id).text();

 
    $('#myModal1').modal('show');
    $('#userId2').val(userid);
    $('#userName2').val(username);
    $('#userEmail2').val(useremail);
    $('#userPhoneNo2').val(userphoneno);
    $('#userProject2').val(userproject);
    $('#userEnrolledDate2').val(userenrolleddate);
    $('#userPassword2').val(userpassword);
  });
});
</script>

