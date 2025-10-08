<?php
// This upload.php page is from Isaac Ferrer
require_once __DIR__ . '/includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['datafile'])) {
    $upload = $_FILES['datafile'];

    if ($upload['error'] === UPLOAD_ERR_OK) {
        $destDir = __DIR__ . '/data';
        if (!is_dir($destDir)) {
            mkdir($destDir, 0755, true);
        }

        $destFile = $destDir . '/games.csv';

        // Move uploaded file
        if (move_uploaded_file($upload['tmp_name'], $destFile)) {
            echo "<p>Upload successful!</p>";
            echo '<p><a href="view.php">View Uploaded Data</a></p>';
        } else {
            echo "<p>Failed to move uploaded file.</p>";
        }
    } else {
        echo "<p>Upload error: " . esc_html($upload['error']) . "</p>";
    }
} else {
    echo "<p>No file uploaded.</p>";
}
?>
