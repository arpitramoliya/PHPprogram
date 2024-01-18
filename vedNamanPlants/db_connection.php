<?php
// SQLite database file
$databaseFile = 'plantsData.sqlite';

// Create or open the SQLite database
$conn = new PDO('sqlite:' . $databaseFile);

// Set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
