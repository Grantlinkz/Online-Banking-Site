<?php
// session_start();

// session_unset();

// session_destroy();

// header("Location: log.php");
session_start();
unset($_SESSION["USER"]);
unset($_SESSION["id"]);
header("Location:log.php");
?>