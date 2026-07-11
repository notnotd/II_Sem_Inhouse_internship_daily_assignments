<?php
session_start();
include "db_connect.php";
if(isset($_POST["login"])){
$u=mysqli_real_escape_string($conn,$_POST["username"]);
$p=$_POST["password"];
$r=mysqli_query($conn,"SELECT * FROM users WHERE username='$u'");
if($row=mysqli_fetch_assoc($r)){
if(password_verify($p,$row["password"])){
$_SESSION["user"]=$u;
header("Location: dashboard.php");
exit;
}}
$error="Invalid Username or Password";
}
?><!DOCTYPE html><html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head><body><div class="container mt-5"><div class="card p-4 mx-auto" style="max-width:420px"><h3>Login</h3><?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>";?><form method="post"><input class="form-control mb-2" name="username" placeholder="Username"><input type="password" class="form-control mb-3" name="password" placeholder="Password"><button name="login" class="btn btn-primary w-100">Login</button></form></div></div></body></html>