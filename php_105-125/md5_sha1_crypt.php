<?php
    $pass = "123456";

    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);

    echo $pass;
?>