<?php

 $sql = "select image from images where id=1";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);

 $image_src2 = $row['image'];
 
?>
<img src='<?php echo $image_src; ?>' >