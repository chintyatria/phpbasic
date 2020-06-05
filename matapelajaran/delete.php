<?php
session_start();
if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}


include '../connect.php';

$kode_mapel = $_GET['kode_mapel'];

$query = "DELETE FROM matapelajaran WHERE kode_mapel = '$kode_mapel'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  header ("location: read.php");
}
else
{
  header ("location: read.php");
}
 ?>
