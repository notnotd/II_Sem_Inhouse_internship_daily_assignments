<?php include 'header.php'; ?>
<div class="card shadow p-4">
<h2>Student Registration</h2>
<form action="process.php" method="post">
<div class="mb-3"><label>Name</label><input class="form-control" name="name" required></div>
<div class="mb-3"><label>Email</label><input type="email" class="form-control" name="email" required></div>
<div class="mb-3"><label>Branch</label><input class="form-control" name="branch" required></div>
<div class="mb-3"><label>College</label><input class="form-control" name="college" required></div>
<div class="mb-3"><label>CGPA</label><input type="number" step="0.01" min="0" max="10" class="form-control" name="cgpa" required></div>
<button class="btn btn-primary">Submit</button>
</form></div>
<?php include 'footer.php'; ?>