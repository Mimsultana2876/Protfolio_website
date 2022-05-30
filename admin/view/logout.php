<?php
 session_start();
session_destroy();
echo "<script>Window.location.href = 'login.php';</script>"; 

?>