<?php
   session_start();

   $conn = new mysqli('localhost', 'id14860470_test', 'D@atthanh123', 'id14860470_demo');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        if(isset($_POST["btn_login"])) {
            $username = $_POST['uname'];
            $password = $_POST['pwd'];

            $username = strip_tags($username);
		    $username = addslashes($username);
		    $password = strip_tags($password);
            $password = addslashes($password);
            
            $password = md5($password);
            
            $sql = "SELECT USERNAME, PASSWORD FROM Member WHERE USERNAME = '$username' and PASSWORD = '$password'";
            $query = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($query);
            if($num_rows == 0) {
                //echo "ten dang nhap hoac mat khau khong dung!";
                header('location: https://thietkemang.000webhostapp.com');
            } else {
                header('location: https://thietkemang.000webhostapp.com/EloquentJavaScript.html');
            }
        }
    }
?>