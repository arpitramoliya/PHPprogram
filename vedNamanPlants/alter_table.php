<?php

// Include database connection code here
include 'db_connection.php';

try {
    // Add a new column to the existing table
    $sql = "ALTER TABLE plantsData ADD COLUMN footer_input TEXT";
    $conn->exec($sql);

    echo "Column 'new_column' added successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
