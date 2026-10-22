<?php
session_start();
$_SESSION = array();
if (session_id()) {
    session_regenerate_id(true); 
}
session_destroy();
header("Location: index.php");
exit();
?>
