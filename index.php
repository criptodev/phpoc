<?php
// Database variables
$serverName = getenv('DATABASE_HOST');
$username = getenv('DATABASE_USER');
$password = getenv('DATABASE_PASSWORD');
$databaseName = getenv('DATABASE_NAME');
$port = getenv('DATABASE_PORT');

// Create database connection
$connection = new mysqli($serverName, $username, $password, $databaseName, $port);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Query the database
$sqlQuery = "SELECT * FROM test";
$result = $connection->query($sqlQuery);

// Display data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$connection->close();
?>