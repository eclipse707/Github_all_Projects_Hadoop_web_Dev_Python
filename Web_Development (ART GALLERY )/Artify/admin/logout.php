<?php
    session_start();
    require 'db.php';
    session_destroy();
    header('location:loginform.php?logout=success');
?>