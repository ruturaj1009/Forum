<?php
    include('../config/_dbconnect.php'); 
    session_destroy();
    header('location:'.SITEURL);
?>