<?php
session_start();
//remove all sections
session_unset();

// destroy
session_destroy();
header("location: ../login.php");
