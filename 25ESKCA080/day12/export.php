<?php
include 'db_connect.php';
header('Content-Type:text/csv');
header('Content-Disposition:attachment; filename=students.csv');
$out=fopen('php://output','w');
fputcsv($out,['ID','Name','Email','Branch','CGPA']);
$r=mysqli_query($conn,"SELECT * FROM students");
while($s=mysqli_fetch_assoc($r)){fputcsv($out,$s);}
fclose($out);
?>