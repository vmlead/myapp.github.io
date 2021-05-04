<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'cust';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$statusMsg = '';
$name = $_POST['uname'];
$mobile = $_POST['mob_num'];
$address = $_POST['add'];
$aadhar_num = $_POST['aadhar_num'];
$target_dir = "documents/";
$imagename=$_FILES["aadhar_front"]["name"];
$imagename2=$_FILES["aadhar_back"]["name"];

//Get the content of the image and then add slashes to it
$imagetmp=addslashes (file_get_contents($_FILES['aadhar_front']['tmp_name']));

$imagename2=$_FILES["aadhar_front"]["name"];

//Get the content of the image and then add slashes to it
$imagetmp2=addslashes (file_get_contents($_FILES['aadhar_back']['tmp_name']));
$imagename2=$_FILES["aadhar_back"]["name"];

$insert = "INSERT INTO info (Name,Mob_number,Address,Aadhar_number,Aadhar_front,Aadhar_back) values ( '$name',  '$mobile' , '$address' , '$aadhar_num' , '$imagetmp' , '$imagetmp2' )";
 mysqli_query($conn,$insert);

echo "<h2>Thank you for register.</h2>"

 ?>
