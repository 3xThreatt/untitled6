<?php
include("config.php");
$sql = "Banner1.jpg";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "uploads/".$image;

?>
<img src='<?php echo $image_src;  ?>' >