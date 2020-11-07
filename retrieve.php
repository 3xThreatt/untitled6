<?php
include("config.php");
$sql = "Banner1.jpg";
$image_src1 = "uploads/Banner1.jpg";
$image_src2 = "uploads/Banner2.jpg";
$image_src3 = "uploads/Banner3.jpg";
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<img src='<?php echo $image_src1;  ?>' >
<img src='<?php echo $image_src2;  ?>' >
<img src='<?php echo $image_src3;  ?>' >
</body>
</html>
