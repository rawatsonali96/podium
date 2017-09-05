<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="details" ;
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
$sql = "CREATE TABLE MyGuests (
uid VARCHAR(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
first VARCHAR(30) NOT NULL,
last VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
