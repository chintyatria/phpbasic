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
   padding-right: 5px;
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
      margin-top : 100px;">Tambah Data Guru</h1>
  <form action="create.php" method="post">

      <table>
        <tr>
          <td><label for="nama" style="font-family: sans-serif; color: #B22222 ">Nama Guru</label></td>
          <td>:</td>
          <td><input type="text" name="nama_guru" id="nama" style="border-radius:10px; width:250px; height:30px; padding-left: 10px; background-color: #FF1000; color: white;" required></td>
        </tr>
        <tr>
          <td><label for="waktu" style="font-family: sans-serif; color: #B22222 ">Jumlah Jam</label></td>
          <td>:</td>
          <td><input type="text" name="jumlah_jam" id="waktu" style="border-radius:10px; width:250px; height:30px; padding-left: 10px; background-color: #FF1000; color: white;"></td>
        </tr>
        <tr>
          <td><label for="alamat" style="font-family: sans-serif; color: #B22222 ">Alamat</label></td>
          <td>:</td>
          <td><input type="text" name="alamat" id="alamat" style="border-radius:10px; width:250px; height:30px; padding-left: 10px; background-color: #FF1000; color: white;"></td>
        </tr>
        <tr>
          <td><label for="no_telp" style="font-family: sans-serif; color: #B22222 ">No. Telepon</label></td>
          <td>:</td>
          <td><input type="text" name="telp" id="no_telp" style="border-radius:10px; width:250px; height:30px; padding-left: 10px; background-color: #FF1000; color: white;"></td>
        </tr>
        <tr>
          <td><label for="email" style="font-family: sans-serif; color: #B22222 ">Email</label></td>
          <td>:</td>
          <td><input type="email" name="email" id="email" style="border-radius:10px; width:250px; height:30px; padding-left: 10px; background-color: #FF1000; color: white;"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Simpan" name="btnsimpan" style="border-radius:10px; color: white; width: 150px; height: 30px; cursor: pointer; background-color: red;"></td>
        </tr>
      </table>
  </form>
  <br>
  <br>
  <br>
   <a href="read.php" style="text-align: center; padding-left: 690px;"><button style="border-radius:10px; width:150px; height:30px; cursor: pointer;">KEMBALI</button></a>
  </body>
</html>
