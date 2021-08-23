<?php
require_once("config.php");
require_once("register-db-tutor.php");

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<style>
*, *:before, *:after {
box-sizing: border-box;
}


body, html {
  height:auto;
  font-family: Arial, Helvetica, sans-serif;
  overflow-x: hidden;

}
nav{
      height: auto;
      padding: 1em;
     
        }
        #logo{
  position: absolute;
  left:0;
  top:0;
  margin-top:-1rem;
}

#logo img{
  height:5.5rem;
  width:6rem;
}
        /*#nav1{
          background-color: white;
          height: 100px;
          top:0;
        }*/
        
        #nav2{
          top:0;
          bottom:0;
          margin-top:-20px;
          background-color:#fff;
          color: white;
          width:100%;
          height: 105px;
          padding-top: 25px;
          padding-bottom: 30px;
          
}
        #nav2 ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
             margin-left: 475px;
            }

        #nav2 li {
            float: left ;
            display: inline;
            margin-left:20px;


        }

        #nav2 li a {
            display: block;
            color: #2d2d2d;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
            font-size: 18px;
        }
        #nav2 .topnav-right {
  float: right;
  margin-right:15px;
 margin-top:6px;
    height: 100%;
 /* margin-right: 1%;*/
}

#nav2 .bttn{

    background-color: #359fb0;
    color: white;
    height:40px;
    width:95px;

}
#nav2 .bttn:hover{
   
  /*background-color: #555;*/
  background: #2b3532;
  border: 1px solid #fff;
  color: #fff;
  cursor: pointer;
  box-shadow: 0px 0px 6px 4px rgba(230,196,196,0.3);

}
#nav2 a:hover {
    color: #02b8dd;
}

/*.bttn{

    background-color: #359fb0;
    color: white;
    height:40px;
    width:95px;

}
.bttn:hover{
   
  /*background-color: #555;*/
  /*background: #2b3532;
  border: 1px solid #fff;
  color: #fff;
  cursor: pointer;
  box-shadow: 0px 0px 6px 4px rgba(230,196,196,0.3);

}*/
.bg-img {
  /* The image used */
  background-image: url("background.jpeg");

  /* Control the height of the image */
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: absolute;
  height:860px;
  width:100%;
  opacity: 65%;
  margin-top:0px;
  overflow-y: hidden;
  overflow-x: hidden;
  
}
.container {
  position: absolute;
  float: top;

  padding-left: -500px;
  margin-left: -800px;
  margin-bottom: 20px;
  margin-top:-800px;
  max-width: 480px;
  max-height: 900px;
  padding: 300px;
   padding-top: 300px;
  background-color: #2d2d2d;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
span.psw {
  float: right;
  padding-top: 0px;
  padding-bottom: 25px;
}


#regForm {
  color:white;
  background-color: #2d2d2d;
  margin: 100px auto;
  font-family: "Montserrat", sans-serif;
  padding: 40px;
  width: 50%;
  min-width: 300px;
  padding: 16px;
  margin-left: 50px;
  max-width: 480px;
  max-height: 900px;
margin-bottom: 20px;

padding-top: 50px;
padding-bottom: 50px;

  position: absolute;
  float: top;
  
  
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.Radio{
  display: inline-block;
}

h1 {
  text-align: center;  
}
input[type=text], input[type=password], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
label{
  color: white;
}
/*input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Arial, Helvetica, sans-serif;

  border: 1px solid #aaaaaa;
}*/
#branch , #course, #year{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}
.name{overflow: hidden;}
.name .fname,
.name .lname{width: 45%;}
.name .fname{float: left;}
.name .lname{float: right;}
.name label{display: block;}

.btns button {
  background-color: #359fb0;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: "Montserrat", sans-serif;

  cursor: pointer;
}

.btns button:hover {
  background: #2b3532;
  border: 1px solid #fff;
  color: #fff;
  cursor: pointer;
  box-shadow: 0px 0px 6px 4px rgba(230,196,196,0.3);
}


#prevBtn {
  background-color: #359fb0;
  color: white;
  font-family: "Montserrat", sans-serif;

}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
  <nav id="nav2">
    <!-- <div class="logo">
      <img src="logo.PNG"></div> -->
    <ul>
      <li id="logo"><a href="home.html"><img src="logo1.PNG"></a></li>
      <li><a href="home.html"><b>Home</b></a></li>
      <li><a href="aboutus.html"><b>About Us</b></a></li>
      <li><a href="contactpage.html"><b>Contact Us</b></a></li>
      <div class="topnav-right">
    <a href="loginpage.php"><button type="submit" class="bttn" ><b>Login</b></button></a>
  <a href="ask.html"><button type="submit" class="bttn" style="margin-left:20px;" ><b>Register</b></button></a>
  </div>
      </ul>
    </nav>
  <div class="bg">
<div class="bg-img">
</div>
  
<form id="regForm" action="reg_tutor.php" method="post" class="container">
   <h1 class="signup" style="margin-top: -10px;">Sign Up</h1>

   

    <br><br>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    
    <div class="name">
      <div class="fname">
          <label for="fname"><b>First Name</b></label>
          <input type="text" placeholder="Enter First Name" name="fname" required>
      </div>
    
      <div class="lname">
          <label for="lname"><b>Last Name</b></label>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
      </div>
      
  </div>
  <label for="dob"><b>Date Of Birth</b></label>
    <br>
    <input type="date" name="dob" required>

    <br>
    <label for="gender">Gender</label>
    <input style="margin-top: 10px;" type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label>  

  
  <br><br>
  </div>

  <div class="tab">
  
    <div class="name">
    <div class="fname">
    <label for="branch"><b>Course</b></label>
      <select name="course" class="validate" id="course" required>
          <option value="" disabled selected>Select Course</option>
          <option value="BE">BE</option>  
          <option value="BTech">BTech</option>  
          <option value="MBA">MBA</option>
          <option value="MCA">MCA</option>  
          <option value="MSc">MSc</option>
          <option value="MTech">MTech</option>  
          <option value="PhD">PhD</option>  
      </select>
    </div>

    <div class="lname">
    <label for="year"><b>Current Year</b></label>
    <select name="year" id="year" class="validate" >
        <option value="" disabled selected>Choose your option</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    </div>
  </div>

    <label for="branch"><b>Branch</b></label><br>
      <select name="branch" id="branch" class="validate" required>
        <option value="choose" disabled selected>Choose your option</option>
        <option value="Computer Engineering (COE)">Computer Engineering (COE)</option>
        <option value="Computer Engineering (COBS)">Computer Engineering (COBS)</option>
        <option value="Computer Engineering (COPC)">Computer Engineering (COPC)</option>
        <option value="Computer (Information Security)">Computer (Information Security)</option>
        <option value="Chemical Engineering (CHE)">Chemical Engineering (CHE)</option>
        <option value="Civil Engineering (CIE)">Civil Engineering (CIE)</option>
        <option value="Civil (Structural) Engineering">Civil (Structural) Engineering</option>
        <option value="Electrical Engineering (ELE)">Electrical Engineering (ELE)</option>
        <option value="Electrical (Power Systems)">Electrical (Power Systems)</option>
        <option value="Electronics and Computer Engineering (ENC)">Electronics and Computer Engineering (ENC)</option>
        <option value="Electronics and Communication Engineering (ECE)">Electronics and Communication Engineering (ECE)</option>
        <option value="Electronics (Instrumentation and Control) Engineering (EIC)">Electronics (Instrumentation and Control) Engineering (EIC)</option>
        <option value="Electronics (VLSI)">Electronics (VLSI)</option>
        <option value="Mechanical Engineering (MEE)">Mechanical Engineering (MEE)</option>
        <option value="Mechanical (Production) Engineering (MPE)">Mechanical (Production) Engineering (MPE)</option>
        <option value="Mechanical (Thermal) Engineering">Mechanical (Thermal) Engineering</option>
        <option value="Mechanical (CAD/CAM) Engineering">Mechanical (CAD/CAM) Engineering</option>
        <option value="Mechatronics (MEC)">Mechatronics (MEC)</option>
        <option value="Biotechnology">Biotechnology</option>
        <option value="Biochemistry">Biochemistry</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Maths">Maths</option>
        <option value="Nuclear Physics">Nuclear Physics</option>
        <option value="Energy and Environment Engineering">Energy and Environment Engineering</option>
        <option value="Psychology">Psychology</option>
      </select>
      <label for="experience"><b> Work Experience</b></label>
          <input type="text" placeholder="Enter your Work Experience" name="experience" required>
          <label for="experience"><b> Skills</b></label>
          <input type="text" placeholder="Enter Skills" name="skills" required>
          <label for="availability"><b> Availability</b></label>
          <input type="text" placeholder="Enter your Available Days" name="availability" required>
     <br>
  </div>
  <div class="tab">
    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <div class="name">
      <div class="fname">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </div>

      <div class="lname">
        <label for="psw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Enter Password" name="v_psw" required>
      </div>
    </div>

  </div>
  
  <div style="overflow:auto;" class="btns">
    <div style="float:right;">
      <button type="button"  id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
   
  </div>
</form>
</div>
</div>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Sign Up";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</body>
</html>
