<?php

include_once('conn.php');
$id=2;

$sql=$conn->prepare('DELETE FROM products WHERE id=?');
$sql->bind_param('i',$id);
$sql->execute();


?>