<?php
include(config.php)
$sql = "select name from images where id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "Banner1.jpg";

?>
<img src='<?php echo $image_src;  ?>' >