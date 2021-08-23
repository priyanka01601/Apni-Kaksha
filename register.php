<?php
require_once("config.php");
require_once("register-db.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="style8.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

<style>
body, html {
  height:auto;
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/*.bg-img {
/* Center and scale the image nicely */
  /*background-repeat: no-repeat;
  position: relative;
}*/

/* Add styles to the form container */
.container {
  position: absolute;
  float: top;
  margin-left: 20px;
  margin-bottom: 20px;
  margin-top:-850px;
  max-width: 480px;
  max-height: 830px;
  padding: 16px;
  background-color: #2d2d2d;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}

/* Full-width input fields */
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
#branch , #course, #year{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Set a style for the submit button */
.btn {
  background-color: #359fb0;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  font-size: 20px;
  margin-left: 90px;
  margin-top:-5px;
}

.btn:hover {
  background: #2b3532;
  border: 1px solid #fff;
  color: #fff;
  cursor: pointer;
  box-shadow: 0px 0px 6px 4px rgba(230,196,196,0.3);
}


.backgro{
  height:860px;
  width:100%;
  opacity: 65%;
  margin-top:0px;
  overflow-y: hidden;
  overflow-x: hidden;
  background-repeat: no-repeat;
  position: relative;
}
span.psw {
  float: right;
  padding-top: 0px;
  padding-bottom: 25px;
}
h1.signup{
  text-align: center;
  color: white;
}
p.login{
  text-align: center;
  color: white;
  margin-top:10px;
  margin-left: -25px;
}
a{
  color: #88b5b9;
}
.name{overflow: hidden;}
.name .fname,
.name .lname{width: 45%;}
.name .fname{float: left;}
.name .lname{float: right;}
.name label{display: block;}
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
</style>
</head>
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
<div class="bg-img">
<div class="backgro">
  <img src="background.jpeg">
</div>
  <form action="register.php" method="post" class="container">
    <h1 class="signup">Sign Up</h1>

    

    <br><br>
  <div class="name">
      <div class="fname">
          <label for="fname">First Name</label>
          <input type="text" placeholder="Enter First Name" name="fname" required>
      </div>
    
      <div class="lname">
          <label for="lname">Last Name</label>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
      </div>
  </div>

    <label for="dob">Date Of Birth</label>
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
  <div class="name">
    <div class="fname">
    <label for="branch">Course</label>
      <select name="course" required="true" class="validate" id="course">
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
    <label for="year">Current Year</label>
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

    <label for="branch">Branch</label><br>
      <select name="branch" id="branch" class="validate" required="true">
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
     <br>
    <label for="email">Email Address</label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <div class="name">
      <div class="fname">
        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </div>

      <div class="lname">
        <label for="psw">Confirm Password</label>
        <input type="password" placeholder="Enter Password" name="v_psw" required>
      </div>
    </div>
    
    <button type="submit" class="btn"><b>Sign Up</b></button>
    <br>
    <p class="login">
      Already have an account?
      <a href="loginpage.php">
        <i>Login</i>
      </a>
    </p><br>
  </form>

<footer class="footer" style="margin-top:-8px;">
<div class="l-footer" style="margin-top: 20px; line-height: 20px;">
<h2>ABOUT US</h2>
<p>
<i>Apni Kaksha</i> is a learning platform for the students to find tutor outside the class based on skills/subject they need more attention. The system is designed to provide a way to make a class outside class. We believe that with technology we can transcend traditional boundaries and truly enable customized self -paced learning by helping students learn more in less time and at a lower cost.
 </p>
</div>
<ul class="r-footer">
<li style="margin-left: 50px;">
  <h2 >INFORMATION</h2>
<ul class="box">
<li><a href="home.html">Home</a></li>
<li><a href="aboutus.html">About Us</a></li>
<li><a href="contactpage.html">Contact Us</a></li>
</ul>
</li>
<li class="features" style="margin-left:200px;margin-top: -220px;">
<h2>SOURCES</h2>
<ul class="box-h-box">

<div>
<ul class="horizontal-list text-center social-icons">
  <li><i class="fa fa-envelope"> <a href="https://mail.google.com"><b>&nbsp&nbspinfo@apnikaksha.com</b></a></i></li><br>
                    <ul class="box1-h-box1">
                    <div>
                    <li>
                      <a href="https://www.linkedin.com/">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://account.google.com/">
                       <i class="fab fa-google-plus-g"></i>
                      </a>
                    </li>
                  </div>
                </ul>
                  </ul>
                </div>
</ul>
</li>
<li style="margin-top: -285px; margin-left:500px;">
  <h2 class="title__line--2">NEWSLETTER </h2>
  <input class=" Input" style="margin-left:0px; width: 180px;" placeholder="Your Mail" ><br>
                           
               <button class="submit" style="margin-top: 20px;">Send Mail</button> 
</li>
</ul>
<div class="b-footer">
<p>
All rights reserved by ©ApniKaksha 2020 </p>
</div>
</footer>
</div>


</body>
</html>
