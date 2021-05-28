<?php

// header('Temporary-Header: True', true, 200);
// // header_remove('Temporary-Header');
// phpinfo();

// this work good
// header("location: http://www.google.com"); 

session_start();
session_unset();
session_destroy();
ob_start();
header("location:http://ut.sotano.digital/");
ob_end_flush();
exit();
?>