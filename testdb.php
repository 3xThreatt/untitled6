<?php

$conn = new mysqli('ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pl5olm9uaqn9xhli', 'o7mk03t99ecbrw8c', 'j4hxbdarc69h9toz');

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>