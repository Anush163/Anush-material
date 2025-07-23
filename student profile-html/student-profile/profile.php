<?php
require 'db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();
if (!$student) {
  die("Student not found.");
}
?>
<!DOCTYPE html>
<html>
<head><title>Student Profile</title></head>
<body>
  <h2><?= htmlspecialchars($student['name']) ?></h2>
  <p>Email: <?= htmlspecialchars($student['email']) ?></p>
  <p>Phone: <?= htmlspecialchars($student['phone']) ?></p>
  <p>Date of Birth: <?= htmlspecialchars($student['dob']) ?></p>
  <p>Bio: <?= nl2br(htmlspecialchars($student['bio'])) ?></p>
  <?php if ($student['profile_pic']): ?>
    <img src="<?= htmlspecialchars($student['profile_pic']) ?>" width="200">
  <?php endif; ?>
</body>
</html>