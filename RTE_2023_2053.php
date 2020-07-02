<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="45.png">
    <title>Troll Killer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icon Library -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family:Verdana,sans-serif;
            margin: 0 auto;
            /* Center website */
            max-width: auto;
            height: auto;
            /* Max width */
            padding: 0;
        }

        .heading {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 35%;
            margin-top:10px;
            font-size: 15px;
        }

        .middle {
            margin-top:10px;
            float: left;
            width: 55%;
        }

        /* Place text to the right */
        .right {
            text-align: right;
            width: 4%;
            padding-left: 10px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 70%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-10 {
            width: 89.43%;
            height: 18px;
            background-color: #b33665;
        }

        .bar-9 {
            width: 85.08%;
            height: 18px;
            background-color: #67159e;
        }

        .bar-8 {
            width: 89.57%;
            height: 18px;
            background-color: #000505;
        }

        .bar-7 {
            width: 85.60%;
            height: 18px;
            background-color: #ffe600;
        }

        .bar-6 {
            width: 86.66%;
            height: 18px;
            background-color: #f436bb;
        }

        .bar-5 {
            width: 84.90%;
            height: 18px;
            background-color: #4CAF50;
        }

        .bar-4 {
            width: 3.38%;
            height: 18px;
            background-color: #2196F3;
        }

        .bar-3 {
            width: 0.34%;
            height: 18px;
            background-color: #00bcd4;
        }

        .bar-2 {
            width: 13.62%;
            height: 18px;
            background-color: #ff9800;
        }

        .bar-1 {
            width: 1.83%;
            height: 18px;
            background-color: #f44336;
        }

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {

            .side,
            .middle {
                width: 100%;
            }

            .right {
                display: none;
            }
        }

        .navigator {
            background-color: #00000098;
            overflow: hidden;
            font-family:Verdana,sans-serif;
            z-index: 99999;
        }

        .navigator a {
            float: left;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navigator a:hover {
            background-color: rgb(76, 156, 161);
            color: black;
        }

        .navigator a.topnav {
            background-color: orange;
            color: rgb(255, 255, 255);
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .striped-border {
            border: 1px dashed #000;
            width: 100%;
            margin: auto;
            margin-top: 5%;
            margin-bottom: 5%;
        }

        #main {
            width: auto;
            height: 500px;
            background-color: white;
            margin: 0;
            border: solid 10px #9eb6b8;
            border-style: none;
            border-bottom: solid 0px;
            padding: 0px;
        }

        h2 {
            text-align: left;
            font-family:Verdana,sans-serif;
            font: 24pt;
            color: black;
            text-align: center;
            vertical-align: middle;
            line-height: 90px;
        }

        h2.thick {
            font-weight: bold;
        }

        hr {
            height: 2px;
            color: #9eb6b8;
        }

        p {
            font-family:Verdana,sans-serif;
            font-size: 12pt;
            text-align: left;
            color: #2f2d2d;
        }

        p.thick {
            font-weight: bold;
            font-family:Verdana,sans-serif;
            text-align: middle;
        }

        /* navigator css */

        .banner-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.content {
            padding-top: 60px;
        }

        /*dropdown menu navbar*/

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family:Verdana,sans-serif;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(76, 156, 161);
        }

        .dropdown-content {
            display: none;
            position: relative;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            overflow: visible;
            z-index: 2000000;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: rgba(22, 19, 19, 0.404);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div id=main>
        <header>
            <div class="panel-body">
                <div id="page" class="navigator">
                    <ul>
                        <a href="http://localhost/Twitter_3.php#home">Home</a>
                        <a href="http://localhost/Twitter_3.php#aboutus">About Us</a>
                        <div class="dropdown">
                            <button class="dropbtn">Accounts
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="http://localhost/TwitterAccounts_3.php">Troll & Real Accounts</a>
                                <a href="http://localhost/RatingsTroll_3.php">Troll Account Charts</a>
                                <a href="http://localhost/RatingsReal_3.php">Real Account Charts</a>
                            </div>
                        </div>
                        <a href="http://localhost/TwitterAccountSearch_3.php">Search</a>
                        <a href="http://localhost/TwitterContact_3.php">Contact</a>
                    </ul>
                </div>
        </header>
        <span class="heading">User Tweets</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>50 Troll Accounts based on 238.925 tweets.</p>
            <hr style="border:3px solid #f1f1f1">

            <div class="row">
                <div class="side">
                    <div>Logistic Regression (with 1/0 Values)</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-10"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>89.43%</div>
                </div>
                <div class="side">
                    <div>Logistic Regression (with Frequency Values)</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-9"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>85.08%</div>
                </div>
                <div class="side">
                    <div>SVM (with 1/0 Values)</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-8"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>89.57%</div>
                </div>
                <div class="side">
                    <div>SVM (with Frequency Values)</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-7"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>85.60%</div>
                </div>
                <div class="side">
                    <div>Random Forest (with 1/0 Values)</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-6"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>86.66%</div>
                </div>
                <div class="side">
                    <div>Random Forest (with Frequency Values)</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-5"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>84.90%</div>
                </div>
            </div>

            <hr style="border:3px solid #f1f1f1">
            <span class="heading">Troll Account <strong>'RTE_2023_2053'</strong> - Tweets:</span>
            <hr style="border:3px solid #f1f1f1">

            <?php
            $myfile = fopen("RTE_2023_2053.txt", "r") or die("Unable to open file!");
            for ($x = 0; $x <= 32; $x++) {
                echo fgets($myfile);
                echo '<br>';
            }
            fclose($myfile);
            ?>

            <hr style="border:3px solid #f1f1f1">
    </body>

</html>