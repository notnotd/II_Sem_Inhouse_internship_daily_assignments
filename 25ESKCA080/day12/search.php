<?php
include 'db_connect.php';
$q=mysqli_real_escape_string($conn,$_GET['q']??'');
$r=mysqli_query($conn,"SELECT * FROM students WHERE name LIKE '%$q%' OR email LIKE '%$q%' OR branch LIKE '%$q%'");
?><!DOCTYPE html><html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head><body><div class="container mt-4">
<form><input class="form-control mb-3" name="q" value="<?=htmlspecialchars($q)?>" placeholder="Search"></form>
<table class="table table-bordered"><tr><th>Name</th><th>Email</th><th>Branch</th><th>CGPA</th></tr>
<?php while($s=mysqli_fetch_assoc($r)){ ?>
<tr><td><?=htmlspecialchars($s['name'])?></td><td><?=htmlspecialchars($s['email'])?></td><td><?=htmlspecialchars($s['branch'])?></td><td><?=$s['cgpa']?></td></tr>
<?php } ?>
</table></div></body></html>