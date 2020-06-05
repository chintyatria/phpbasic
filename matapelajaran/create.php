<?php
if(!(isset($_POST['btnsimpan'])))
{
  header("location: form-create.php");
}

include '../connect.php';

$kode_mapel = $_POST['kode_mapel'];
$mapel = $_POST['mapel'];
$alokasi_waktu = $_POST['alokasi_waktu'];
$semester = $_POST['semester'];
$kode_guru= $_POST['kode_guru'];

$query = "INSERT INTO matapelajaran
          VALUES ('$kode_mapel', '$mapel', '$alokasi_waktu', '$semester', $kode_guru)";

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
