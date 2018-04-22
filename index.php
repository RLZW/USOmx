<?php header( 'Location:index.html' ) ;
echo
$servername = "uso1.c7dhdhum783t.us-east-2.rds.amazonaws.com";
$username = "mota";
$password = "JavierRM1";
$dbname = "USO_INTELIGENTE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";


 ?>


