<?php
  $hostname = $_ENV['DB_HOST'] ?? "localhost";
  $username = $_ENV['DB_USER'] ?? "root";
  $password = $_ENV['DB_PASSWORD'] ?? "";
  $dbname = $_ENV['DB_NAME'] ?? "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
