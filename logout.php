<?php
//handles closing session and deletes current session variables, then redirects to login page
session_start();
session_unset();
session_destroy();
header("location:login.php");

