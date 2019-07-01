<!DOCTYPE html>
<html>
<?php
/*
Plugin Name: WordPress Simple Location Plugin
Plugin URI:  https://github.com/simonrcodrington/Introduction-to-WordPress-Plugins---Location-Plugin
Description: WP Plugin that allows dealerships to import service schedule data and easily display it on any site for their customers.
Version:     1.0.0
Author:      Connor Clarkes
*/

$sql = "CREATE TABLE VehicleService(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    model_year VARCHAR(30) NOT NULL,
    make VARCHAR(30) NOT NULL,
    model VARCHAR(50),
    engine TIMESTAMP,
    mileage INT(6),
    service_item VARCHAR(50)
    )";

?>