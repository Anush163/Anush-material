<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Upload Material Form</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h4 class="center-align">Upload Data</h4>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <div class="input-field">
        <input id="name" name="name" type="text" required>
        <label for="name">Name</label>
      </div>
      <div class="input-field">
        <input id="email" name="email" type="email" required>
        <label for="email">Email</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>File</span>
          <input type="file" name="file" required>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload your file">
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>