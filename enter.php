<?php
$servername = 'localhost';
$username = 'root';
$dbname = 'tugas5';

$conn = new mysqli($servername, $username, '', $dbname);

$name = $_GET['name'];
$email = $_GET['email'];

if ($conn->query("INSERT INTO addressbook (Nama, Email_Address) VALUES ('$name','$email')")) {
  header('location:in.php');
} ?>
