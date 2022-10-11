<?php
     session_start();
     if(isset($_SESSION['id'])){
          header("location:veri.php");
          die();
     }
     else{
          header("location:https://www.youtube.com/");
          
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1 align="center">Webboard zuzu</h1>
     <hr>
     <br>
     <form action="veri.php" method="post">
     <center><table style="border: 2px solid black ;width: 40%;" >
          <tr style="background-color: aqua;"><th colspan="2" align="left">เข้าสู่ระบบ</th></tr>
          <tr><td>Login</td><td><input type="text" name="login"></td></tr>
          <tr><td>Pass</td><td><input type="password" name="pass"></td></tr>
          <tr><td colspan="2" align="center"><input type="submit" value="poom"></td></tr>
     </table>
     </center>
     </form>
     <br>
     <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="https://www.google.co.th/">กรุณา</a></center>
</body>
</html>