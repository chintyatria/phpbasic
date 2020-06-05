<?php
session_start();

if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}


include '../connect.php';

$kode_mapel = $_GET['kode_mapel'];

$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, matapelajaran.kode_guru, nama_guru
          FROM matapelajaran LEFT JOIN guru USING(kode_guru)
          WHERE kode_mapel = '$kode_mapel'";

$result = mysqli_query($connect, $query);

$data_guru = mysqli_fetch_assoc($result);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
     body {
    background-color: #C0C0C0;
    background-repeat: no-repeat;
    padding: 0;
    margin: 0;
    background-size: cover;
    }
    form {
    background:grey;
    border-radius:10px;
    padding:50px;
    padding-top:30px;
    width:400px;
    margin:0 auto;
    margin-top: 200px;
    box-shadow:0px 15px 30px #40403d;
    text-align: center;
    input {
    width:250px;
    background:#c7ccd0;
    border:0;
    padding:20px;
    border-radius:10px;
    margin-bottom: 5px;
  }
  ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: white;
    font-style: italic;
    }
     </style>
   </head>
   <body>
     <h1 style="text-align:center;
    font-size:2.4em;
    font-weight:700;
    color:red;
    margin-bottom: -100px;
    margin-top : 100px;">Ubah Data Matapelajaran</h1>
       <form action="update.php" method="post">
         <table>
           <tr>
             <td><label for="kode_mapel" style="font-family: sans-serif; color: #B22222;">Kode Mapel</label></td>
              <td>:</td>
             <td> <input type="text" name="kode_mapel" id="kode_mapel" readonly value="<?php echo $data_guru['kode_mapel']; ?>" style="border-radius:10px; width:250px; height:30px; padding-left: 10px; background-color: #FF1000; color: white;"></td>
           </tr>
           <tr>
             <td><label for="mapel" style="font-family: sans-serif; color: #B22222;">Matapelajaran</label></td>
              <td>:</td>
             <td> <input type="text" name="mapel" id="mapel" value="<?php echo $data_guru['mapel']; ?>" style="border-radius:10px; width:250px; height:30px;padding-left: 10px;background-color: #FF1000; color: white;"> </td>
           </tr>
           <tr>
             <td><label for="alokasi_waktu" style="font-family: sans-serif; color: #B22222;">Alokasi Waktu</label></td>
             <td>:</td>
             <td> <input type="number" name="alokasi_waktu" id="alokasi_waktu" value="<?php echo $data_guru['alokasi_waktu']; ?>" style="border-radius:10px; width:250px; height:30px;padding-left: 10px;background-color: #FF1000; color: white;"> </td>
           </tr>
           <tr>
             <td><label for="semester" style="font-family: sans-serif; color: #B22222;">Semester</label></td>
             <td>:</td>
             <td> <input type="number" name="semester" id="semester" value="<?php echo $data_guru['semester']; ?>" style="border-radius:10px; width:250px; height:30px;padding-left: 10px;background-color: #FF1000; color: white;"> </td>
           </tr>
             <tr>
            <td><label for="nama_guru" style="font-family: sans-serif; color: #B22222;">Guru Pengajar</label></td>
            <td>:</td>
            <td>
            <select name="kode_guru" id="nama_guru" style="width: 165px; border-radius:10px; width:260px; height:30px;padding-left: 10px;background-color: #FF1000; color: white;;">
            <option value="NULL">--Pilih salah satu--</option>
            <option value="NULL">Tidak Ada Pengajar</option>
            <?php
            $query2 = "SELECT kode_guru, nama_guru FROM guru";
            $result2 = mysqli_query($connect, $query2);
            while ($data = mysqli_fetch_assoc($result2)) { ?>
            <option value="<?php echo $data['kode_guru']; ?>" <?php if($data_guru['kode_guru'] == $data['kode_guru']) {echo "selected"; } ?>>
              <?php echo $data['nama_guru']; ?>

            </option>
            <?php }
            ?>

          </select>
        </td>
          </tr>
           <tr>
             <td></td>
             <td></td>
             <br>
             <td><input type="submit" value="Simpan" name="btnsimpan" style="background: red; color: white; font-style: italic; width: 150px; border-radius:10px; height:30px; cursor: pointer: pointer;"></td>
           </tr>

       </table>
       </form>
       <br>
     <br>
     <a href="read.php" style="text-align: center; padding-left: 690px;"><button style="border-radius:10px; width:150px; height:30px; cursor: pointer;">KEMBALI</button></a>
   </body>
 </html>
