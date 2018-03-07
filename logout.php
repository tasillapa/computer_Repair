<?php
session_start();
session_unset($_SESSION['names']);
session_unset($_SESSION['position']);
session_unset($_SESSION['user_group']);
session_unset($_SESSION['userid']);
unset($_SESSION['names']);
unset($_SESSION['position']);
unset($_SESSION['user_group']);
unset($_SESSION['userid']);

session_destroy();
header("Location:index.php");
?>
