<?php
include 'db_connect.php';
$id=(int)$_POST['id'];
$n=mysqli_real_escape_string($conn,$_POST['name']);
$e=mysqli_real_escape_string($conn,$_POST['email']);
$b=mysqli_real_escape_string($conn,$_POST['branch']);
$c=$_POST['cgpa'];
mysqli_query($conn,"UPDATE students SET name='$n',email='$e',branch='$b',cgpa='$c' WHERE id=$id");
header("Location: students.php");
?>