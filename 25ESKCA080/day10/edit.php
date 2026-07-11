<?php include 'db_connect.php'; $id=(int)$_GET['id']; $r=mysqli_query($conn,"SELECT * FROM students WHERE id=$id"); $s=mysqli_fetch_assoc($r); include 'header.php'; ?>
<form action="update.php" method="post" class="card p-3">
<input type="hidden" name="id" value="<?= $s['id'] ?>">
<input class="form-control mb-2" name="name" value="<?= htmlspecialchars($s['name']) ?>">
<input class="form-control mb-2" name="email" value="<?= htmlspecialchars($s['email']) ?>">
<input class="form-control mb-2" name="branch" value="<?= htmlspecialchars($s['branch']) ?>">
<input class="form-control mb-2" name="cgpa" value="<?= $s['cgpa'] ?>">
<button class="btn btn-primary">Update</button>
</form><?php include 'footer.php'; ?>