<?php

session_start();
session_destroy();
header("location:login.php");
//https://www.webslesson.info/2016/06/php-login-script-using-pdo-with-session.html
?>  