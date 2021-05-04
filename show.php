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

$insert = "Select * from info";
 $retval=mysqli_query($conn,$insert);

 while($row = $retval -> fetch_array(MYSQLI_ASSOC)) {
   echo '<table class="123">';
   echo '<tr>';
      echo '<th>Name</th>';
      echo '<th>Mobile Number</th>';
      echo '<th>Adress</th>';
      echo '<th>Aadhar Number</th>';
      echo '<th>Aadhar_front</th>';
      echo '<th>Aadhar_back</th>';
  echo '</tr>';
  echo '<tr>';
       echo "<td> {$row['Name']}  </td> ".
          "<td> {$row['Mob_number']} </td> ".
          "<td> {$row['Address']} </td> ".
          "<td> {$row['Aadhar_number']} </td> ";
          echo '<td> <img src="data:image/jpeg;base64,'.base64_encode($row['Aadhar_front'] ).'" height="50" width="50"/> </td> ';
          echo '<td> <img src="data:image/jpeg;base64,'.base64_encode($row['Aadhar_back'] ).'" height="50" width="50"/> </td> ';
echo '</table>';
    }


    mysqli_close($conn);

 ?>
