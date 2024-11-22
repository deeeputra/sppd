<?php
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sppd";
    $con = mysqli_connect("localhost", $dbuser, $dbpass, $dbname);

    @session_start();
?>