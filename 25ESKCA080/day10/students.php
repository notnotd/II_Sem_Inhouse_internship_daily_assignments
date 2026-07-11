<?php include 'db_connect.php'; include 'header.php'; $r=mysqli_query($conn,"SELECT * FROM students"); ?>
<h2>Students</h2><a href="index.php" class="btn btn-success mb-3">Add Student</a>
<table class="table table-bordered"><tr><th>ID</th><th>Name</th><th>Email</th><th>Branch</th><th>CGPA</th><th>Action</th></tr>
<?php while($s=mysqli_fetch_assoc($r)){ ?>
<tr>
<td><?= $s['id'] ?></td><td><?= htmlspecialchars($s['name']) ?></td><td><?= htmlspecialchars($s['email']) ?></td><td><?= htmlspecialchars($s['branch']) ?></td><td><?= $s['cgpa'] ?></td>
<td><a class="btn btn-warning btn-sm" href="edit.php?id=<?= $s['id'] ?>">Edit</a> <a class="btn btn-danger btn-sm" onclick="return confirm('Delete?')" href="delete.php?id=<?= $s['id'] ?>">Delete</a></td>
</tr>
<?php } ?></table><?php include 'footer.php'; ?>