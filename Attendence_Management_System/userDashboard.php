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
      width: 900px;
      height: 550px;
      margin: 100px 0px 0px 450px;
      background: rgba(242, 242, 32, 0.73);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(6.5px);
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
      <p class="questNo">Q.1 / 5 ) Write a PHP program to print sum of digits.</p>
      </div>
    </div> 
  </div>
<div class="slideshow-container" id="con2">
    <div class="mySlides">
    <div id="question2">
      <p class="questNo">Q.2 / 5 ) Write a PHP program to print sum of digits.</p>
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
</script>