<?php 
if (!isset($_SESSION["admin"])) {
    header("Location: admin_login.php"); //rediriger vers la page login
    exit();
}
?>