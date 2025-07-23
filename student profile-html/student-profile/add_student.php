<?php
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$bio = $_POST['bio'];

$pic = '';
if (!empty($_FILES['profile_pic']['tmp_name'])) {
  $picName = uniqid() . '_' . $_FILES['profile_pic']['name'];
  $uploadPath = 'uploads/' . $picName;
  move_uploaded_file($_FILES['profile_pic']['tmp_name'], $uploadPath);
  $pic = $uploadPath;
}

$sql = "INSERT INTO students (name, email, phone, dob, bio, profile_pic)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $phone, $dob, $bio, $pic]);

$lastId = $pdo->lastInsertId();
header("Location: profile.php?id=$lastId");
?>