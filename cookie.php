<?php
$theme = $_POST['theme'];
$persist = $_POST['persist'];
setcookie('theme', $theme, time()+86400);
setcookie('persist', $persist, time()+86400);
header('location:index.php');
?>