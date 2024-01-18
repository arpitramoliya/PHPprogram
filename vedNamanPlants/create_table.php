<?php

// SQLite database file
$databaseFile = 'plantsData.sqlite';

try {
    // Create or open the SQLite database
    $conn = new PDO('sqlite:' . $databaseFile);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the plantsData table if it does not exist
    $sql = "
    CREATE TABLE IF NOT EXISTS plantsData (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        heading TEXT,
        main_title TEXT,
        main_description TEXT,
        benefits_title TEXT,
        benefits_description TEXT,
        input_file BLOB
    )";
    $conn->exec($sql);

    echo "Table 'plantsData' created successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
