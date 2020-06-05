<?php

session_start();

if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}

include '../connect.php';

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];

$query = "SELECT * FROM guru WHERE $kategori LIKE '%$cari%'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);
 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body
    {
      text-align: center;
      background-color: #C0C0C0;
      padding-left: 250px;
      margin-top: x0px;
    }
    table
    {
      border-collapse: collapse;
      background-color: #C0C0C0;
      margin: 0 auto;

    }
    th, td
    {
      width: 150px;
      height: 50px;
      color: #2F4F4F;
    }
    th
    {
      width: 30px;
    }
    th
    {
      background-color: #696969;
      color: black;
    }
    tr:nth-child(odd):hover td {
      background-color:  red;
      color: black;
    }
    tr:nth-child(even):hover td {
      background-color: red;
      color: black;
    }
    br
    {
      color: black;
    }
    #sidebar
    {
      height: 100%;
      width:250px;
      z-index: 1;
      top: 0px;
      display: block;
      position: absolute;
      left: 0px;
      background-color: #800000 ;
      padding-top: 20px;
      transition: left 0.3s linear;
    }

    #sidebar a
    {
      text-decoration: none;
      margin: 0px;
      padding: 5px 35px;
      display: grid;
      color: grey;
    }
    #sidebar img
    {
      width: 150px;
      height: 150px;
      padding-left: 0px;
    }
    #data:hover{
      background-color: #B22222  ;
      color: grey;
      font-weight: lighter;
      box-shadow: grey -1px 1px, grey -2px 2px, grey -3px 3px, grey -4px 4px, grey -5px 5px, grey -6px 6px;
      transform: translate3d(6px, -6px, 0);
      transition-delay: 0s;
      transition-duration: 0.2s;
      transition-property: all;
      transition-timing-function: line;
    }
    </style>
  </head>
  <body>
    <div id="sidebar" class="visible">
      <br>
      <img src="logo.png" alt="">
      <br>
      <br>
        <b>
          <hr border = "3">
          <a href="../guru/read.php" style="color: grey ; font-family: arial;" id="data"><b>Guru</b></a>
          <hr border = "3">
          <a href="../matapelajaran/read.php" style="color: grey ; font-family: arial;" id="data"><b>Matapelajaran</b></a>
          <hr border = "3">
          <a href="../guru/form-create.php" style="color: grey ; font-family: arial;" id="data"><b>Tambah Data Guru</b></a>
          <hr border = "3">
          <a href="../matapelajaran/form-create.php" style="color: grey ; font-family: arial;" id="data"><b>Tambah Data Mapel</b></a>
          <hr border = "3">
          <a href="../login/logout.php" style="color: grey ; font-family: arial;" id="data"><b>Logout</b></a>
          <hr border = "3">
        </b>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <b>
          <footer style="color:white;">
    Telkom Schools - Copyright &copy; 2017
  </footer>
        </b>
    </div>

    <table border='1'>
      <h1 style="color: red;">Data Guru</h1>
      <br>
      <br>
      <br>
      <tr>
        <th>No.</th>
        <th>Nama Guru</th>
        <th>Jumlah Jam</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
          if($num > 0)
          {
              $no = 1;
              while($data = mysqli_fetch_assoc($result))
              {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama_guru'] . "</td>";
                echo "<td>" . $data['jumlah_jam'] . "</td>";
                echo "<td>" . $data['alamat'] . "</td>";
                echo "<td>" . $data['telp'] . "</td>";
                echo "<td>" . $data['email'] . "</td>";
                echo "<td><a href='form-update.php?kode_guru=" . $data['kode_guru']. "'>Edit</a></td>";
                echo "<td><a href='delete.php?kode_guru=" . $data['kode_guru']. "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
                $no++;
              }
          }
          else
          {
            echo "<td colspan='3'>Tidak ada data</td>";
          }
       ?>
    </table>
    <br>
    <br>
    <a href="read.php" style="text-align: center; padding-left: 100px;"><button style="border-radius:10px; width:250px; height:30px; cursor:pointer;">KEMBALI</button></a>
  </body>
</html>
