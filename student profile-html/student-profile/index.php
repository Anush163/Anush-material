
<!DOCTYPE html>
<html>
<head>
  <title>Create Student Profile</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f0f4f8; /* light background */
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Student Profile Form</h2>
    <form action="add_student.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="phone" placeholder="Phone Number">
      <input type="date" name="dob" required>
      <textarea name="bio" placeholder="Short Bio"></textarea>
      <input type="file" name="profile_pic">
      <button type="submit">Create Profile</button>
    </form>
  </div>

</body>
</html>