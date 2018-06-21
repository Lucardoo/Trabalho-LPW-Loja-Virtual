<?php
session_start();
session_destroy();
echo 'xablau';
header('Location: index.php');

?>
