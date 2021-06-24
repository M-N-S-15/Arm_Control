<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control panel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM engines WHERE id=(SELECT max(id) FROM engines order by id desc limit 1);";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "E1:" . $row["E1"]. "   " . "E2:" . $row["E2"]. "   " . "E3:" . $row["E3"]. "   " . "E4:" . $row["E4"]. "   " . "E5:" . $row["E5"]. "   " . "E6:". $row["E6"]. "   " .  "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
