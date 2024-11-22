<?php
    include"conf/config.php";
    @session_destroy();
    header("location: login.php");
?>