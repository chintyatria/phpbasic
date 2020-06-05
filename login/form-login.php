<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
    * {
    font-family: 'Open Sans';
    font-size:100%;
    margin: 0;
    padding: 0;
    }
    body {
    background: url(sekolahan.png)fixed no-repeat;background-size: 60% 100%;
    }
    input:focus {
    outline: none;
    }
    form {
    background: #DCDCDC;
    border-radius:10px;
    padding:50px;
    padding-top:30px;
    width:400px;
    margin:0 auto;
    margin-top: 50px;
    box-shadow:0px 15px 30px #40403d;
    text-align: center;
    position:relative;
    animation: form-login 1.4s;
    }
    @keyframes form-login {
        0%{
          top: -800px;
        }
        100%{
          top: 0px;
        }
    }
    h1 {
    text-align:center;
    font-size:2.4em;
    font-weight:700;
    color:	#FF0000;
    margin-bottom:-50px;
    }
    input {
    width:250px;
    background:#B0C4DE;
    border:0;
    padding:20px;
    border-radius:10px;
    margin-bottom: 5px;
    }
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: white;
    font-style: italic;
    }
    ::-moz-placeholder { /* Firefox 19+ */
    color: white;
    font-style: italic;
    }
    :-ms-input-placeholder { /* IE 10+ */
    color: white;
    font-style: italic;
    pad
    }
    :-moz-placeholder { /* Firefox 18- */
    color: white;
    font-style: italic;
    }
    .btn {
    width: 290px;
    padding:20px;
    border-radius:10px;
    border:0;
    background:#326799;
    font-size:1.2em;
    color:#fff;
    box-shadow:0px 3px 0px #0b4072;
    cursor: pointer;
    }
    .btn:active {
    top:3px;
    box-shadow:none;
    outline: none;
    }
    input[type="submit"]:hover{
          background-color: #0CC6F6;
          color: #003366;
          font-weight: lighter;
          box-shadow: #003366 -1px 1px, #003366 -2px 2px, #003366 -3px 3px, #003366 -4px 4px, #003366 -5px 5px, #003366 -6px 6px;
          transform: translate3d(6px, -6px, 0);
          transition-delay: 0s;
          transition-duration: 0.4s;
          transition-property: all;
          transition-timing-function: line;
        }
    </style>
    <title></title>
  </head>
  <body>
    <br>
    <br>
    <br>
    <form action="login.php" method="post">
      <img src="user.png" alt="" style="
      width: 150px;
      height: 150px
      margin-top: -60px;
      margin-bottom: 30px;
      margin-left: calc(40% - 40%);">
      <h1><b>Login</b></h1>
      <table>
        <br>
        <br>
        <br>
        <tr>
          <td><b><label for="nama" style="font-family: sans-serif; color: #FF0000;">Username</label></b></td>
          <td>:</td>
          <td><input type="text" name="username" id="" value="" placeholder="username" style="font-family: sans-serif;"></td>
        </tr>
        <tr>
          <td><b><label for="password" style="font-family: sans-serif; color:	#FF0000;">Password</label></b></td>
          <td>:</td>
          <td><input type="password" name="password" id="matapelajaran" value="" placeholder="password"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Masuk" name="btnlogin" style="
            background: #778899 ;
            color: white;
            font-style: italic;
            width: 290px;
            cursor: pointer;"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
