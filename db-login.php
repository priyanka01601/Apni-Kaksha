
<?php
//Check if the form was posted
if (isset($_POST["email"]) && isset($_POST["psw"])) {

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM student WHERE email_id='".$_POST["email"]."'" ;
    $res = $conn->query($sql);
    $sql = "SELECT * FROM tutor WHERE email_id='".$_POST["email"]."'" ;
    $res2 = $conn->query($sql);

    if ($res->num_rows > 0 || $res2->num_rows > 0) {
        if($res->num_rows > 0){
            $sql = "SELECT * FROM student WHERE  email_id='".$_POST["email"]."' and password='".$_POST["psw"]."'";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                session_start();
                echo $res->fetch_assoc();
                header("Location: home_login.html");
            }else{
                echo "<p style='position:absolute;top:26rem;left:3rem;color:red;z-index:1;'>Invalid password</p>";
            }
        }

        if($res2->num_rows > 0){
            $sql = "SELECT * FROM tutor WHERE  email_id='".$_POST["email"]."' and password='".$_POST["psw"]."'";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                session_start();
                echo $res->fetch_assoc();
                header("Location: home_login.html");
            }else{
                echo "<p style='position:absolute;top:26rem;left:3rem;color:red;z-index:1;'>Invalid password</p>";
            }
        }
        
    }else{
        echo "<p style='position:absolute;top:26rem;left:3rem;color:red;z-index:1;'>User Not Found</p>";
    }
    
}
?>