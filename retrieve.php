<?php
include("config.php");
$sql = "Banner1.jpg";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "uploads/Banner1.jpg";

?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<img src='<?php echo $image_src;  ?>' >
</body>
</html>
