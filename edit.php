<html>
<head>
  <title>Edit Contact</title>
</head>
<body>
  <?php
  $id = $_GET['id'];
  $name = $_GET['name'];
  $email = $_GET['email'];
  print '<h2>Edit Kontak</h2>
  <p>
  <form action=change.php';
  print '
  method=GET>
  <table>
  <tr><td>Nama:</td><td><input type="text" value="';
  print $name;
  print '"name="name" /></td></tr>
  <tr><td>Email:</td><td><input type="text" value="';
  print $email;
  print '"name="email" /></td></tr>
  <tr><td colspan="2" align="center"><input type="submit" /></td></tr>
  <input type=hidden name=id value=';
  print $id;
  print '>
  </table>
  <form><p>';
  ?>
</body>
</html>
