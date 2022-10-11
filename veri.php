<?php
session_start();
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
     <center><b>เข้าสู่ระบบด้วย</b></center>
     <div align="center">
          <?php
$a = $_POST["login"];
$b = $_POST["pass"];
if ($a == 'admin' && $b == 'ad123') {
     echo "ยสตน คุน admin";
     $_SESSION["login"] = "admin";
     $_SESSION["role"] = "a";
     $_SESSION["id"] = session_id();
     ?>
     <a href="https://www.netflix.com/">chills</a>
     <?php
}
else {
     echo "รหัสไม่ถุก";
?>
          <a href="https://www.google.co.th/">ควย</a>
          <?php
}

?>
     </div>


</body>

</html>