<?php

include '../connect.php';

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];

$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, nama_guru
          FROM matapelajaran LEFT JOIN guru
          USING (kode_guru)
          WHERE $kategori LIKE '%$cari%'
          ORDER BY kode_mapel";

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
<b>
  <footer style="color:white;">
Telkom Schools - Copyright &copy; 2017
</footer>
</b>
</div>

      <table border="1">
        <h1 style="color: red;">Data Matapelajaran</h1>
        <br>
        <br>
        <br>
        <tr>
          <th>No.</th>
          <th>Kode Mapel</th>
          <th>Matapelajaran</th>
          <th>Alokasi Waktu</th>
          <th>Semester</th>
          <th>Guru Pengajar</th>
          <th>Aksi</th>


      <?php
      if($num > 0)
      {
          $no = 1;
          while ($data = mysqli_fetch_assoc($result)) { ?>

            <tr>
              <td> <?php echo $no; ?></td>
              <td> <?php echo $data['kode_mapel'] ?></td>
              <td> <?php echo $data['mapel'] ?></td>
              <td> <?php echo $data['alokasi_waktu'] ?></td>
              <td> <?php echo $data['semester'] ?></td>
              <td>
                <?php
                  if($data['nama_guru'] != NULL )
                  { echo $data['nama_guru']; }
                  else { echo "-";}
                 ?>
              </td>
              <td>
                <a href="form-update.php?kode_mapel=<?php echo $data['kode_mapel']; ?>">Edit</a>
                <a href="delete.php?kode_mapel=<?php echo $data['kode_mapel']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</a>
              </td>
            </tr>

          <?php
          $no++;
          }
      }
      else
      {
          echo "<tr> <td colspan='7'> Tidak ada data </td></tr>";
      }
       ?>
     </tr>
   </table>
   <br>
<br>
<a href="read.php" style="text-align: center; padding-left: 100px;"><button style="border-radius:10px; width:250px; height:30px; cursor:pointer;">KEMBALI</button></a>
   </body>
 </html>
