<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="control panel";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
$E1 = $_POST['E1'];
$E2 = $_POST['E2'];
$E3 = $_POST['E3'];
$E4 = $_POST['E4'];
$E5 = $_POST['E5'];
$E6 = $_POST['E6'];

//For inserting the values to mysql database 
$sql_query = "INSERT INTO engines (E1,E2,E3,E4,E5,E6)
VALUES ('$E1','$E2','$E3','$E4','$E5','$E6')";




if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry inserted successfully !"; }

else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
     mysqli_close($conn);
}




?>
