<?php
/*
Plugin Name: WordPress Service Schedule Plugin
Plugin URI:  https://github.com/Cclarkes/strathPHP
Description: WP Plugin that allows dealerships to import service schedule data and easily display it on any site for their customers.
Version:     1.0.0
Author:      Connor Clarkes
*/

$servername = "localhost";
$username = "wordpressuser";
$password = "password";
$dbname = "wordpress";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE IF NOT EXISTS VehicleService( 
    model_year INT(4),
    make VARCHAR(20),
    model VARCHAR(20),
    engine VARCHAR(10),
    mileage VARCHAR(15),
    service_item VARCHAR(50)
    )";

$import = <<<eof
    LOAD DATA LOCAL INFILE '/var/lib/mysql-files/csv/service.csv' 
    INTO TABLE VehicleService
    FIELDS TERMINATED BY ','
    ENCLOSED BY '"'
    LINES TERMINATED BY '\r\n'
eof;

if ($conn->query($sql) === TRUE) {
    echo "Table VehicleService created successfully \n";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($import) === TRUE) {
    echo "Service info imported successfully \n";
} else {
    echo "Error importing data: " . $conn->error;
}


$conn->close();
?>