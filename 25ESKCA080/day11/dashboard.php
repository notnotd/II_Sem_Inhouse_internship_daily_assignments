<?php
session_start();
if(!isset($_SESSION["user"])){header("Location: login.php");exit;}
?><!DOCTYPE html><html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head><body><div class="container mt-5"><div class="card p-4"><h2>Dashboard</h2><p>Welcome <?php echo $_SESSION["user"]; ?></p><a href="students.php" class="btn btn-success">Students</a> <a href="logout.php" class="btn btn-danger">Logout</a></div></div></body></html>