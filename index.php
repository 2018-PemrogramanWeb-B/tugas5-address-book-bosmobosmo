<?php
$servername = 'localhost';
$username = 'root';
$dbname = 'tugas5';

$conn = new mysqli($servername, $username, '', $dbname);

if ($conn->connect_error){
  die ('Connection failed: ' .$conn->connect_error);
}

$sql = "INSERT INTO addressbook (name, address)
        VALUES ('short', 'darjo')";

if ($conn->query($sql) === TRUE ){
  echo 'masuk pak eko';
} else {
  echo 'Error: ' .$sql.'<br>'.$conn->error;
}

// echo 'connected';
?>
