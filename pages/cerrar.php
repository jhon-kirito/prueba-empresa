<?php
session_start();
header("location:../index.php");
session_destroy();
session_write_close();
?>
