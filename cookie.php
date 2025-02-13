<?php
include 'model.php';
$theme = $_POST['theme'];
$persist = 0+isset($_POST['persist']);
setcookie('theme', $theme, time()+86400);
setcookie('persist', $persist, time()+86400);
header('location: index.php')
?>