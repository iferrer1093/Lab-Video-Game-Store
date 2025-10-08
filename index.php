<?php
// This index.php page is from Isaac Ferrer
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Store - Upload CSV</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Upload Games CSV</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="datafile">Choose CSV file:</label>
        <input type="file" name="datafile" id="datafile" accept=".csv" required>
        <button type="submit">Upload</button>
    </form>

    <p><a href="view.php">View Current Games</a></p>
</body>
</html>
