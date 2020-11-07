<?php

$servername = "ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "pl5olm9uaqn9xhli";
$password = "o7mk03t99ecbrw8c";
$dbname = "j4hxbdarc69h9toz";

$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

