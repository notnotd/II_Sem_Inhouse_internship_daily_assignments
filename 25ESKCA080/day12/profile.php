<?php
include 'db_connect.php';
$id=(int)($_GET['id']??0);
$r=mysqli_query($conn,"SELECT * FROM students WHERE id=$id");
$s=mysqli_fetch_assoc($r);
?><!DOCTYPE html><html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head><body><div class="container mt-4"><div class="card p-3">
<h2><?=htmlspecialchars($s['name'])?></h2>
<p>Email: <?=htmlspecialchars($s['email'])?></p>
<p>Branch: <?=htmlspecialchars($s['branch'])?></p>
<p>CGPA: <?=$s['cgpa']?></p>
</div></div></body></html>