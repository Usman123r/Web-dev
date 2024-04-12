<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page as needed
header("Location: login.php");
exit;
?>
<!DOCTYPE html>
<html>
<head>
    <title>myweb</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=roboto:wght@400;100;700;300;500;400&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url("book.jpeg");
            background-size: 50% auto;
            width: max-content;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        .disp {
            position: fixed;
            left: 0px;
            width: 250px;
            height: 100%;
            background: #042331;
        }

        .disp header {
            font-size: 22px;
            color: white;
            text-align: center;
            line-height: 70px;
            background: #063146;
            user-select: none;
        }

        .disp ul a {
            display: block;
            height: 100%;
            width: 100%;
            line-height: 65px;
            font-size: 20px;
            color: white;
            padding-left: 40px;
            box-sizing: border-box;
            border-top: 1px solid rgba(255, 255, 255, .1);
            border-bottom: 1px solid black;
            transition: all .4s ease;
        }

        ul li:hover a {
            padding-left: 50px;
        }

        .disp ul a i {
            margin-right: 16px;
        }
    </style>
</head>

<body>

    <div class="disp">
        <header>Literary Lounge</header>
        <ul>
            <li><a href="exer.html"><img src="hom.png" width="20px">.HOME</a></li>
            <li><a href="home.html">aboutUs</a></li>
            <li><a href="booking.html"><img src="book.jpg" width="20px">.Booking</a></li>
            <li><a href="#"><img src="phone.png" width="20px">.contact</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </div>

</body>

</html>
