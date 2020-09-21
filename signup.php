<?php
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = $_POST['pwd'];

    $password = md5($password);

    $conn = new mysqli('localhost', 'id14860470_test', 'D@atthanh123', 'id14860470_demo');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("INSERT INTO Member(EMAIL, USERNAME, PASSWORD)
            VALUES(?, ?, ?)");
    }  
    $stmt->bind_param("sss", $email, $username, $password);
    $stmt->execute();
    header('location: https://thietkemang.000webhostapp.com/EloquentJavaScript.html');
    $stmt->close();
    $conn->close();
?>