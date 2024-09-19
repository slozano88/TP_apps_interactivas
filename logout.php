<?php
session_start();
var_dump($_SESSION); // dump the session variables before destroying the session
session_destroy();
unset($_SESSION);
var_dump($_SESSION); // dump the session variables after destroying the session
header('Location: f_login.php');
exit;
?>