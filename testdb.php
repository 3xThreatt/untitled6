<?php
$servername = "ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "pl5olm9uaqn9xhli";
$password = "o7mk03t99ecbrw8c";
$dbname = "j4hxbdarc69h9toz";

$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into banners (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
// Close connection
mysqli_close($link);
?>