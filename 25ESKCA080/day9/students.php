<?php include 'db_connect.php'; include 'header.php'; $r=mysqli_query($conn,"SELECT * FROM students"); ?>
<h2>Student List</h2>
<table class="table table-bordered table-hover">
<thead class="table-dark"><tr><th>ID</th><th>Name</th><th>Email</th><th>Branch</th><th>CGPA</th></tr></thead>
<tbody>
<?php while($row=mysqli_fetch_assoc($r)){ $c=$row['cgpa']>8?'table-success':''; echo "<tr class='$c'><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['branch']}</td><td>{$row['cgpa']}</td></tr>"; } ?>
</tbody></table>
<p><b>Total Students:</b> <?php echo mysqli_num_rows($r); ?></p>
<a href="index.php" class="btn btn-primary">Add Student</a>
<?php include 'footer.php'; ?>