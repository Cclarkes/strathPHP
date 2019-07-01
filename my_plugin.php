<!DOCTYPE html>
<html>
<?php
/*
Plugin Name: WordPress Service Schedule Plugin
Plugin URI:  https://github.com/Cclarkes/strathPHP
Description: WP Plugin that allows dealerships to import service schedule data and easily display it on any site for their customers.
Version:     1.0.0
Author:      Connor Clarkes
*/

$sql = "CREATE TABLE VehicleService(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    model_year INT(4)
    make VARCHAR(20)
    model VARCHAR(20),
    engine TIMESTAMP,
    mileage INT(6),
    service_item VARCHAR(50)
    )";

?>