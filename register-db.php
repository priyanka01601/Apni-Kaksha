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
       
       $fname = $_POST["fname"];
       $lname = $_POST["lname"];
       $dob = $_POST["dob"];
       $gender = $_POST["gender"];
       $course = $_POST["course"];
       $year = $_POST["year"];
       $branch = $_POST["branch"];
       $email = $_POST["email"];
       $psw = $_POST["psw"];
       

       $sql = "INSERT INTO student (first_name, last_name, email_id, password, courses,current_year,branch,date_of_birth,gender)
       VALUES ('".$fname."', '".$lname."','".$email."','".$psw."','".$course."','".$year."','".$branch."','".$dob."','".$gender."')";
       $res = $conn->query($sql);
       
      
   $conn->close();
      
}





?>

