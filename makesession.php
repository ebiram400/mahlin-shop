<?php
if (isset($_GET['email'])) {

    include_once ('conn.php');

    $sql2 = $conn->prepare('SELECT id FROM users WHERE email=?');
    $sql2->bind_param('s', $_GET['email']);
    $sql2->execute();
    $result = $sql2->get_result();


    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $id = $row['id'];

        session_start();
        $_SESSION['id'] = $id;
        header("Location:my-account.php");
    }

}


?>