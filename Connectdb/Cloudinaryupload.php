<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $image = $_FILES['image']['tmp_name'];

    try {
        // Upload to Cloudinary
        $result = $cloudinary->uploadApi()->upload($image, [
            'folder' => 'growall_solutions/uploads' // optional folder
        ]);

        echo "<h3>Upload Successful!</h3>";
        echo "<img src='" . $result['secure_url'] . "' width='200'/><br>";
        echo "Image URL: " . $result['secure_url'];

    } catch (Exception $e) {
        echo "Upload failed: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Image Upload</title>
</head>
<body>
  <h2>Upload Image to Cloudinary</h2>
  <form method="POST" enctype="multipart/form-data">
      <input type="file" name="image" required><br><br>
      <button type="submit">Upload</button>
  </form>
</body>
</html>
