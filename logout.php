<?php
session_start();
echo "Logged out Successfully";
session_unset();
session_destroy();
