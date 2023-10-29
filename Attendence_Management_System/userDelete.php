<?php
error_reporting();

$connect=mysqli_connect('localhost','root','','attendencemanagementsystemdatabase');

mysqli_query($connect,"DELETE FROM `usersignup` WHERE id='".$_GET["userid"]."'");

echo "<script>alert('Delete Successfully');
window.location='adminDashboard.php/#question2'</script>";
?>