<?php
include 'db_connect.php';
include 'header.php';
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$branch=mysqli_real_escape_string($conn,$_POST['branch']);
$cgpa=$_POST['cgpa'];
$c=mysqli_query($conn,"SELECT id FROM students WHERE email='$email'");
if(mysqli_num_rows($c)>0){
echo "<div class='alert alert-warning'>Email already exists.</div><a href='index.php' class='btn btn-secondary'>Back</a>";
include 'footer.php';exit;
}
$sql="INSERT INTO students(name,email,branch,cgpa) VALUES('$name','$email','$branch','$cgpa')";
if(mysqli_query($conn,$sql)){
echo "<div class='alert alert-success'>Student Registered Successfully!</div>";
echo "<a href='students.php' class='btn btn-success'>View Students</a>";
}else{
echo "<div class='alert alert-danger'>".mysqli_error($conn)."</div>";
}
include 'footer.php';
?>