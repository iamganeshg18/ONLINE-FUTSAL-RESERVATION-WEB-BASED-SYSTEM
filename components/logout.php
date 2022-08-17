<?php
session_start();

session_unset();
session_destroy();

header('location:/FUTSAL-WEB-MAIN/index.php');
exit;
?>