<?php
if(isset($_POST['username_email'])){
    $email=$_POST['username_email'];
    $pass=$_POST['login_password'];

    include_once('conn.php');
    session_start();

    $sql=$conn->prepare('SELECT id FROM users WHERE email=? AND pass=?');
    $sql->bind_param('ss',$email,$pass);
    $sql->execute();
    $result=$sql->get_result();
    if($result->num_rows >0){
        $row=$result->fetch_assoc();
        $_SESSION['id']= $row['id'];

        header("Location:my-account.php");
    }else{
        header('Location:login-register.php');
    }
}else{
    header('Location:login-register.php');
}

?>