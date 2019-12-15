<?php
// echo "asasasasas";
// session_start();
error_reporting(0);
session_unset();
session_destroy();
redirect('sign','refresh');
?>