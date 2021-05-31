<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Online Library Mnagement System
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1">

<style type="text/css">
    nav
    {
        float: right;
        word-spacing: 30px;
        padding: 20px;
    }
    nav li
    {
        display: inline-block;
        line-height: 80px;
    }
</style>   
</head>

<body>
    <div class="wrapper">
        <header>
        <div class="logo">
        <img src="images/book.png">
        <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

    <?php
    if(isset($_SESSION['login_user']))
    {
        ?>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="books.php">BOOK</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                </ul>
            </nav>
        <?php
    }
    else
    {   
        ?>
            <nav>
                 <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="books.php">BOOK</a></li>
                    <li><a href="admin_login.php">LOGIN</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                    </ul>
                </nav>
        <?php
    }  

    ?>

            
        </header>
        <section>
        <div class="sec_img">
            <br><br><br>
            <div class="box">
                <br><br><br>
                <h1 style="text-align: center; font-size: 35px;"> Welcome to library </h1> <br>
                <h1 style="text-align: center; font-size: 25px;"> Opens at 09:00 </h1> <br>
                <h1 style="text-align: center; font-size: 25px;">Closes at 22:00 </h1> <br> <br> <br>
                <h1 style="text-align: center; font-size: 25px;">Management contact :- 0114589652 </h1> <br>
                <h1 style="text-align: center; font-size: 25px;">Admin Management contact :- 152643 </h1> <br>


            </div>
        </div>
        </section>
        

    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>