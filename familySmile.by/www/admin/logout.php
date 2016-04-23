<?php
session_start();


unset($_SESSION['Login'], $_SESSION['Status']);
session_destroy();
header("Location: index.php");
?>



