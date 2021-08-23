<?php
require_once("config.php");
require_once("db-login.php");

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
  height: 100%;
  width:100%;
  font-family: Arial, Helvetica, sans-serif;
  /*overflow-x: hidden;
  overflow-y: hidden;*/

}

* {
  box-sizing: border-box;

}



/* Add styles to the form container */
.container {
  position:relative;
  /*float: center;*/
  margin: 20px;
  margin-top: 50px;
  margin-bottom:40px;
  max-width: 480px;
  max-height: 500px;
  padding: 16px;
  background-color: #2d2d2d;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}

/* Full-width input fields */
input[type=text], input[type=password] {
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
  margin-left: 127px;
}

.btn:hover {
/*  opacity: 1;*/
   background: #2b3532;
  border: 1px solid #fff;
  color: #fff;
  cursor: pointer;
  box-shadow: 0px 0px 6px 4px rgba(230,196,196,0.3);
}
.bg{
  height:100%;
  width: 100%;
  top:0;
  bottom:0;
  left:0;
  right:0;
  opacity:65%;
  margin-top:100px;
  background-position: center;
  background-size: cover;
  overflow-x: hidden;
  overflow-y: hidden;
  background-repeat: no-repeat;
  position:absolute;

}

span.psw {
  float: right;
  padding-top: 0px;
  padding-bottom: 25px;
}
h1.login{
  text-align: center;
  color: #fff;
}
p.signup{
  text-align: center;
  color: white;
}
label{
  color: white;
}
a{
  color: #88b5b9;
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
nav{
      height: auto;
      padding: 1em;   
  }
        /*#nav1{
          background-color: white;
          height: 100px;
          top:0;
        }*/
        
        #nav2{
          top:0;
          bottom:0;
          left:0;
          right:0;
          margin-top:-12px;
           background-color:#fff;
          
          color: white;
          width:100%;
          height: 105px;
          padding-top: 25px;
          padding-bottom: 30px;
          margin-left: -10px;
          
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

  <div class="backgro">
      <div class="bg">
        <img src="background.jpeg"> 
      </div>

  <form action="loginpage.php" method="post" class="container" >
    <h1 class="login">Log in</h1>

    <label for="email">Email</label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw">Password</label>
    <input type="password" placeholder="Enter Password" name="psw" required style="margin-bottom: 4rem;">
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="psw"> <a href="#">Forgot password?</a></span>
    <button type="submit" class="btn"><b>Login</b></button>
    <br>
    <p class="signup">
      Don't have an account? 
      <a href="ask.html">
        <i>Sign Up</i>
      </a>
    </p>
  </form>
</div>
  <footer class="footer" style="margin-top:100px;margin-left:-10px;">
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
<li class="features" style="margin-left:200px;margin-top: -210px;">
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
<li style="margin-top: -265px; margin-left:500px;">
  <h2 class="title__line--2">NEWSLETTER </h2>
  <input class=" Input" style="margin-left:0px; width: 180px;" placeholder="Your Mail" ><br>
                           
               <button class="submit" style="margin-top: 20px;">Send Mail</button> 
</li>
</ul>
<div class="b-footer">
<p>
All rights reserved by © ApniKaksha 2020 </p>
</div>
</footer>




</body>
</html>
