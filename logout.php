<?php
include'career_controller.php';
session_unset();
session_destroy();

header("location:index.php");
?>