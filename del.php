<?php
$servername = 'localhost';
$username = 'root';
$dbname = 'tugas5';

$conn = new mysqli($servername, $username, '', $dbname);

$id = $_GET['id'];

if($conn->query("DELETE FROM addressbook where id=$id")) {
  header("location:in.php");
}
?>
