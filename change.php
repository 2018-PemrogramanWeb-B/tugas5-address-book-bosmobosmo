<?php
$servername = 'localhost';
$username = 'root';
$dbname = 'tugas5';

$conn = new mysqli($servername, $username, '', $dbname);

$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];

if ($conn->query("UPDATE addressbook SET Nama = '$name', Email_Address = '$email' WHERE id = $id")) {
  header('location:in.php');
}
?>
