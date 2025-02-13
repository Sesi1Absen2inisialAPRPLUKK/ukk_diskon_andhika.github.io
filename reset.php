<?php
setcookie('theme', $theme, time()-1);
setcookie('persist', $persist, time()-1);
header('location:index.php');
?>