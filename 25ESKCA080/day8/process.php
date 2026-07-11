<?php
include 'functions.php';
include 'header.php';
if($_SERVER['REQUEST_METHOD']!='POST'){echo "<div class='alert alert-danger'>Invalid Request</div>"; include 'footer.php'; exit;}
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$branch=trim($_POST['branch']);
$college=trim($_POST['college']);
$cgpa=floatval($_POST['cgpa']);
if($name==''||$email==''||$branch==''||$college==''){
 echo "<div class='alert alert-danger'>All fields are required.</div>";
 include 'footer.php'; exit;
}
list($grade,$color)=calculateGrade($cgpa);
echo "<div class='card shadow p-4'>";
echo "<h2>".greeting().", ".htmlspecialchars($name)."!</h2>";
echo "<p><b>Email:</b> ".htmlspecialchars($email)."</p>";
echo "<p><b>Branch:</b> ".htmlspecialchars($branch)."</p>";
echo "<p><b>College:</b> ".htmlspecialchars($college)."</p>";
echo "<p><b>CGPA:</b> ".$cgpa."</p>";
echo "<div class='alert alert-$color'><b>Performance:</b> $grade</div>";
echo "<p><b>Date:</b> ".date('l, F j, Y')."</p>";
echo "<a href='index.php' class='btn btn-secondary'>Back</a>";
echo "</div>";
include 'footer.php';
?>