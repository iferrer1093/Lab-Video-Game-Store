<?php
// This functions.php file is from Isaac Ferrer
// Escape HTML special characters

function esc_html(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

// Read all rows from a CSV file and return as array of arrays

function read_csv_rows(string $path): array {
    $rows = [];
    if (!file_exists($path)) return $rows;

    if (($handle = fopen($path, 'r')) !== false) {
        while (($data = fgetcsv($handle)) !== false) {
            $rows[] = $data;
        }
        fclose($handle);
    }
    return $rows;
}


// Write an array of rows to a CSV file

function write_csv_rows(string $path, array $rows): bool {
    if (($handle = fopen($path, 'w')) === false) {
        return false;
    }
    foreach ($rows as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
    return true;
}
