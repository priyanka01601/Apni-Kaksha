<?php



$fname;
$lname;
$dob;
$gender;
$course;
$year;
$branch;
$email;
$psw;
$experience;
$skill;
$availability;


if(!empty($_POST)){
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    
       global $fname;
       global $lname;
       global $dob;
       global $gender;
       global $course;
       global $year;
       global $branch;
       global $email;
       global $psw;
       global $experience;
       global $skill;
       global $availability;
       
       $fname = $_POST["fname"];
       $lname = $_POST["lname"];
       $dob = $_POST["dob"];
       $gender = $_POST["gender"];
       $course = $_POST["course"];
       $year = $_POST["year"];
       $branch = $_POST["branch"];
       $email = $_POST["email"];
       $psw = $_POST["psw"];
       $experience = $_POST["experience"];
       $skills = $_POST["skills"];
       $availability = $_POST["availability"];
       

       $sql = "INSERT INTO tutor (first_name, last_name, email_id, password, courses,year,branch,gender,skills,experience,available_on)
       VALUES ('".$fname."', '".$lname."','".$email."','".$psw."','".$course."','".$year."','".$branch."','".$gender."','".$skills."','".$experience."','".$availability."')";
       $res = $conn->query($sql);
       
      
   $conn->close();
      
}




?>

