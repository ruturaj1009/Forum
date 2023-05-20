<?php 
    include('../config/_dbconnect.php'); 
    include('logincheck.php'); 

?>

<html>
    <head>
        <title>Forum | Admin Panel</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="manage-category.php">Category</a></li>
                    <li><a href="manage-thread.php">Thread</a></li>
                    <li><a href="manage-comment.php">Comments</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->