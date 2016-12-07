<?php 
$list=$_GET['list'];
$mail = $_SESSION['email'];
unlink("./users/".$mail."/liste/".$list.".txt");
header("Location: ?page=admin");
?>