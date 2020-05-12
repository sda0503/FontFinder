<?php
//이거는 추가하는 하는 php
     $host = "localhost";
     $user = "root";
     $pa = "****";
	   $dbName = "FontDB";
     $connect = mysqli_connect($host, $user, $pa, $dbName);




     $samedataCheck = mysqli_query($connect, "select EXISTS (select * from Font where uuid='$uuid') as success;");
     $result = mysqli_fetch_array($samedataCheck)['success'];


     if($result != 1 && !empty($uuid))
      {
        mysqli_query($connect,"insert into Font (uuid, email, name) values('$uuid','$email','$name')");
      }
      if($result == 1&& !empty($uuid))
      {
        mysqli_query($connect,"UPDATE Font SET email='$email', name='$name' WHERE uuid='$uuid'");
      }

     mysqli_close($connect);
?>
