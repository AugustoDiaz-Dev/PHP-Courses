<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Diferencia entre mysql (Obsoleta) y mysqli (procedimental y orientada a objetos)</title>
</head>
<body>

<?php
$mysqli = mysqli_connect("localhost", "user", "password", "database");
$res = mysqli_query($mysqli, "SELECT * FROM table");
$row = mysqli_fetch_assoc($res);
echo $row['_msg'];
$mysql = mysql_connect("localhost", "user", "password");
mysql_select_db("test");
$res = mysql_query("SELECT * FROM table", $mysql);
$row = mysql_fetch_assoc($res);
echo $row['_msg'];
?>

</body>
</html>