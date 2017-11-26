<?php
session_start();
session_destroy();
header('Location: start2.php');
exit;
?>