<?php
require 'db.php';

if (isset($_POST['submit'])) {
  $name  = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);

  $file     = $_FILES['file'];
  $filename = basename($file['name']);
  $tmp      = $file['tmp_name'];
  $uploadDir = __DIR__ . '/assets/uploads/';
  if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
  $targetFile = $uploadDir . $filename;

  if (move_uploaded_file($tmp, $targetFile)) {
    
function convertToIST($datetimeStr) {
    $date = new DateTime($datetimeStr, new DateTimeZone('IST'));
    $date->setTimezone(new DateTimeZone('Asia/Kolkata'));
    return $date->format('Y-m-d H:i:s');
}


   $now = convertToIST(date('Y-m-d H:i:s'));
    $stmt = $conn->prepare("INSERT INTO uploads (name, email, filename, uploaded_on) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $name, $email, $filename,$now);
    if ($stmt->execute()) {
      echo "Upload successful!";
    } else {
      echo "Database error: " . htmlspecialchars($stmt->error);
    }
    $stmt->close();
  } else {
    echo "File upload failed.";
  }

  $conn->close();
}
?>