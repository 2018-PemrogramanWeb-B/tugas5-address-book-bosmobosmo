<html>
  <head>
    <title>Address Book</title>
  </head>
  <body>
    <?php
      $servername = 'localhost';
      $username = 'root';
      $dbname = 'tugas5';

      $conn = new mysqli($servername, $username, '', $dbname);

      if ($conn->connect_error){
        die ('Connection failed: ' .$conn->connect_error);
      }

      $data = $conn->query("SELECT * FROM addressbook ORDER BY id")
      or die(mysql_error());
      print "<table bodred cellpadding=3>";
      print "<tr><th width=100>Nama</th><th width=100>Alamat Email</th><th width=100 colspan=2>Admin</th></tr>";
      print "<td colspan=5 align=right><a href=add.php>Tambah Kontak<a></td>";
      while($info = mysqli_fetch_array($data)){
        print "<tr><td>".$info['Nama']."</td>";
        print "<td>".$info['Email_Address']."</td>";
        print "<td><a href=edit.php?id=".$info['id']."&name=".$info['Nama']."&email=".$info['Email_Address'].">Edit</a></td>";
        print "<td><a href=del.php?id=".$info['id'].">Delete</a></td>";
      }
      print "</table>";
    ?>
  </body>
</html>
