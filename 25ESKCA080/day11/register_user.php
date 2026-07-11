<?php
include "db_connect.php";
if(isset($_POST["register"])){
$u=mysqli_real_escape_string($conn,$_POST["username"]);
$h=password_hash($_POST["password"],PASSWORD_DEFAULT);
mysqli_query($conn,"INSERT INTO users(username,password) VALUES('$u','$h')");
echo "User Created <a href='login.php'>Login</a>";
exit;
}
?><!DOCTYPE html><html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head><body><div class="container mt-5"><div class="card p-4 mx-auto" style="max-width:420px"><h3>Create User</h3><form method="post"><input class="form-control mb-2" name="username"><input type="password" class="form-control mb-3" name="password"><button name="register" class="btn btn-success">Register</button></form></div></div></body></html>