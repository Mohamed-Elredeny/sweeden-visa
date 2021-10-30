<?php
require_once('../functions.php');
$q1 = $_GET['q1'];
$q2 = $_GET['q2'];
$q3 = $_GET['q3'];
add_question($con,$_GET['user'],$q1,$q2,$q3);
header('location:index3.php');
?>
