<?php
session_start();

// this would destroy the session variables
session_destroy();

header('location: login.php');
?>