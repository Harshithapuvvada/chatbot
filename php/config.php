<?php
  $hostname = $_ENV['DB_HOST'] ?? 'localhost';
  $username = $_ENV['DB_USER'] ?? 'postgres';
  $password = $_ENV['DB_PASSWORD'] ?? '';
  $dbname   = $_ENV['DB_NAME'] ?? 'chatapp';
  $port     = $_ENV['DB_PORT'] ?? '5432';

  $conn = pg_connect("host=$hostname dbname=$dbname user=$username password=$password port=$port");
  if(!$conn){
    echo "Database connection error: ".pg_last_error();
  }
?>
