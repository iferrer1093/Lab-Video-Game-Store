<?php
// This view.php page is from Isaac Ferrer
require_once __DIR__ . '/includes/functions.php';

$csvPath = __DIR__ . '/data/games.csv';
$rows = read_csv_rows($csvPath);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Games</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Video Store - Games List</h1>

    <p><a href="index.php">← Back to Upload</a></p>

    <?php if (empty($rows)): ?>
        <p>No data found. Please upload a CSV file first.</p>
    <?php else: ?>
        <table border="1" cellpadding="6">
            <tr>
                <th>Game ID</th>
                <th>Title</th>
                <th>Console</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?= esc_html($row[0] ?? '') ?></td>
                    <td><?= esc_html($row[1] ?? '') ?></td>
                    <td><?= esc_html($row[2] ?? '') ?></td>
                    <td><?= esc_html($row[3] ?? '') ?></td>
                    <td>
                        <?php if (!empty($row[4])): ?>
                            <img src="img/<?= esc_html($row[4]) ?>" alt="Game Image" width="80">
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
