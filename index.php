<?php
$servername = 'localhost';
$username = 'root';
$dbname = 'tugas5';

$conn = new mysqli($servername, $username, '', $dbname);

if ($conn->connect_error){
  die ('Connection failed: ' .$conn->connect_error);
}

//insert:
// $sql = "INSERT INTO addressbook (name, address)
//         VALUES ('short', 'darjo')";


// if ($conn->query($sql) === TRUE ){
//   echo 'masuk pak eko';
// } else {
//   echo 'Error: ' .$sql.'<br>'.$conn->error;
// }

//select:
// $sql = "SELECT id, name, address FROM  addressbook";
// $result=$conn->query($sql);
//
// if($result->num_rows > 0){
//   while ($row=$result->fetch_assoc()) {
//     echo 'id: '.$row['id'].' - Name: '.$row['name'].' - Address: '.$row['address'].'<br>';
//   }
// } else {
//   echo 'kosong pak eko';
// }


//update:
// $sql="UPDATE addressbook SET address='malang' WHERE  id=2";
// if ($conn->query($sql) === TRUE){
//   echo 'masuk pak eko';
// } else {
//   echo 'error'.$conn->error;
// }

//delete:
// $sql="DELETE FROM addressbook WHERE id=2";
// if ($conn->query($sql) === TRUE){
//   echo 'ilang pak eko';
// } else {
//   echo 'error'.$conn->error;
// }

// echo 'connected';
?>
