<?php
// session_start();
// include 'adminDashboard.php';
include 'userUpdateModal.php';
error_reporting();

$connect5=mysqli_connect('localhost','root','','attendencemanagementsystemdatabase');

if(isset($_POST['UserUpdate'])){
  $user_id = ($_POST['UserId']);

  $user_name=($_POST['userName']);

  $user_email=($_POST['userEmail']);

  $user_phone_no=($_POST['userPhoneNo']);

  $user_project=($_POST['userProject']);
  
  $user_enrolled_date = ($_POST['userEnrolledDate']);  

  $user_password = ($_POST['userPassword']);

  // $id=$_SESSION['Id'];

// $updateQuery= "UPDATE `usersignup` SET `user_Id`='$user_id' , `user_Name`='$user_name' , `user_Email`='$user_email' , `user_Phone_No`='$user_phone_no' , `user_Project`='$user_project' , `user_Enrolled_Date`='$user_enrolled_date' , `user_Pass`='$user_password' WHERE id=$id"; 


  
  $id=$_SESSION['Id'];
  $ID='".$_GET["userid1"]."';
 
    // echo $res['id'];
    $updateQuery= "UPDATE `usersignup` SET `user_Id`='$user_id' , `user_Name`='$user_name' , `user_Email`='$user_email' , `user_Phone_No`='$user_phone_no' , `user_Project`='$user_project' , `user_Enrolled_Date`='$user_enrolled_date' , `user_Pass`='$user_password' WHERE id = $id";

    // $updateQuery="INSERT INTO `usersignup`(`user_Id`, `user_Name`, `user_Email`, `user_Phone_No`, `user_Project`, `user_Enrolled_Date`, `user_Pass`) VALUES ('$user_id','$user_name','$user_email','$user_phone_no','$user_project','$user_enrolled_date','$user_password') ORDER BY id=$ID";

  
$result3=mysqli_query($connect5,$updateQuery);

if($result3){
  echo "<script>alert('Update Successfully');
window.location='adminDashboard.php'</script>";
}else{
  echo "<script>alert('Update Unsuccessfully!')
  window.location='adminDashboard.php'</script>";
}



}
?>