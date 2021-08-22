<?php 
    include('../config/constants.php'); 
    include('login-check.php');

?>
<html>
    <head>
        <title>- Home Page</title>
        <link rel="stylesheet" href="f.css">
        <link rel="stylesheet" href="../css/admin.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery.js"></script>
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="mag-admin.php">Admin</a></li>
                    <li><a href="mag-danhba.php">Category</a></li>
                    <li><a href="mag-khoa.php">Khoa</a></li>

                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->