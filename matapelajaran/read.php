<?php
session_start();
if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}

include '../connect.php';

$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, kode_guru, nama_guru
          FROM matapelajaran LEFT JOIN guru
          USING (kode_guru)
          ORDER BY kode_mapel";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

 ?>

 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <style >

      body {
        text-align: center;
        background-color: #C0C0C0;
        padding-left: 250px;
      }
      table{
        border-collapse: collapse;
        background-color: #C0C0C0;
        margin: 0 auto;

      }
      th, td {
        width: 150px;
        height: 50px;
        color: #2F4F4F;
      }
      th  {
        width: 50px;
      }
      th {
        background-color: #696969;
        color: 	black;
      }
      tr:nth-child(odd):hover td {
        background-color:  red;
        color: black;
      }
      tr:nth-child(even):hover td {
        background-color: red;
        color: black;
      }
      br {
        color: black;
      }
      #sidebar {
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

      #sidebar a{
        text-decoration: none;
        margin: 0px;
        padding: 4px 30px;
        display: grid;
        color: grey;
      }
      #sidebar img{
        width: 150px;
        height: 150px;
      }
      input{
        padding-right: 5px;
      }
      #no{
        width: 5px;
      }
      #data{
        width: 300px;
      }
      #komap{
        width: 200px;
      }
      #waktu{
        width: 200px;
      }
      #semester{
        width: 100px;
      }
      #kogur{
        width: 200px;
      }
      #guru{
        width: 200px;
      }
      #aksi{
        width: 100px;
      }
      a:hover{
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
      <h1 style="color: #FF0000;">Data Matapelajaran</h1>
      <form action="search.php" method="get">
        <input type="search" name="cari" placeholder="Masukkan Pencarian..." style="height: 50px; width: 250px; text-align: center; border-radius:10px;" required>
        <select name="kategori" id="" style="height: 50px; width: 120px; border-radius:10px; cursor: pointer; padding-left:10px;">
          <option value="kode_mapel">Kode Mapel</option>
          <option value="mapel">Matapelajaran</option>
          <option value="alokasi_waktu">Alokasi Waktu</option>

        </select>
        <input type="submit" value="Cari" style="height: 50px; width: 100px; border-radius:10px; cursor: pointer;">
      </form>
      <div id="sidebar" class="visible">
        <br>
        <img src="logo.png" alt="">
        <br>
        <br>
        <b>
          <hr border = "1">
          <a href="../guru/read.php" style="color: grey ;"><b>Guru</b></a>
          <hr border = "1">
          <a href="../matapelajaran/read.php" style="color: grey ;"><b>Matapelajaran</b></a>
          <hr border = "1">
          <a href="../guru/form-create.php" style="color:grey ;"><b>Tambah Data Guru</b></a>
          <hr border = "1">
          <a href="../matapelajaran/form-create.php" style="color: grey ;"><b>Tambah Data Mapel</b></a>
          <hr border = "1">
          <a href="../login/logout.php" style="color: grey ;"><b>Logout</b></a>
          <hr border = "1">
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
      <br>
      <br>
       <table border="1">
         <tr>
           <th id="no">No.</th>
           <th id="komap">Kode Mapel</th>
           <th id="data">Matapelajaran</th>
           <th id="waktu">Alokasi Waktu</th>
           <th id="semester">Semester</th>
           <th id="kogur">Kode Guru</th>
           <th id="guru">Guru Pengajar</th>
           <th colspan="2" id="aksi">Aksi</th>


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
               <td> <?php echo $data['kode_guru'] ?></td>
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
  </html>
