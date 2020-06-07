<?php
$name = $_POST['product_name'];
$manager= $_POST['manager_name'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akwa_him";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO products (name, manager) VALUE ('$name', '$manager')";

if ($conn->query($sql) === true) {
    echo "Данные сохраненны";
} else {
  echo "ERROR: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>