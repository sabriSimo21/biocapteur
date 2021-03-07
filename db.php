<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet3";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
