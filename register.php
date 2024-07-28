<?php
if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $pass = $_POST['register_password'];

    include_once ('conn.php');

    $sql = $conn->prepare('INSERT INTO users(email,pass) VALUES(?,?)');
    $sql->bind_param('ss', $email, $pass);
    $sql->execute();
    
    header('Location:makesession.php?email='.$email);
    exit();
}





?>