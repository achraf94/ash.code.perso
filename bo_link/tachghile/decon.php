<?php

session_start();
session_destroy();
$string = "Location: ../index.php";
header($string);
