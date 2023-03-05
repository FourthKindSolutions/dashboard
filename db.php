<?php
$dbhost = getenv('MYSQL_SERVICE_HOST');
$dbport = getenv('MYSQL_SERVICE_PORT');
$dbuser = getenv('MYSQL_USER');
$dbpass = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>