<?php

include '../include/config.php';
session_start();
session_unset();
session_destroy();

header('location:../login system/login_form.php');

?>