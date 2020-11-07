<?php

$conn = new mysqli('ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pl5olm9uaqn9xhli', 'o7mk03t99ecbrw8c', 'j4hxbdarc69h9toz');

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}else{
echo "Connected successfully";
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
echo "id: ".$row["id"]. " - Username: ".$row["username"]. " - Password: ".$row["password"]." - Name: ".$row["name"]."<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>	