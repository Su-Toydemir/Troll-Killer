<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="45.png">
    <title>Troll Killer</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0 auto;
            /* Center website */
            width: auto;
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

        .navigator {
            background-color: #00000098;
            overflow: hidden;
            font-family: Verdana, sans-serif;
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
            font-family: Verdana, sans-serif;
            font: 14pt;
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
            font-family: Verdana, sans-serif;
            font-size: 12pt;
            text-align: left;
            color: #2f2d2d;
        }

        p.thick {
            font-weight: bold;
            font-family: Verdana, sans-serif;
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
            font-family: Verdana, sans-serif;
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

        table {
            background-color: #9eb6b8;
            border-collapse: collapse;
            border: 1px solid black;
            margin: 0px auto;
            text-align: center;
            vertical-align: middle;
        }

        th,
        td {
            padding: 15px;
        }

        tr:nth-child(odd) {
            background-color: white;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 1px solid #eee;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <div id="main">
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
                                <a href="http://localhost/RatingsTroll_3.php">Troll Accounts' Charts</a>
                                <a href="http://localhost/RatingsReal_3.php">Real Accounts'Charts</a>
                            </div>
                        </div>
                        <a href="http://localhost/TwitterAccountSearch_3.php">Search</a>
                        <a href="http://localhost/TwitterContact_3.php">Contact</a>
                    </ul>
                </div>
        </header>
        <h2>Search In Our Twitter 'TROLL' Accounts Database</h2>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

        <ul id="myUL">
            <li><a href="http://localhost/__Aloneas__.php">__Aloneas__</a></li>
            <li><a href="http://localhost/81Mememed.php">81Mememed</a></li>
            <li><a href="http://localhost/AHN49138412.php">AHN49138412</a></li>
            <li><a href="http://localhost/allahbelanive16.php">allahbelanive16</a></li>
            <li><a href="http://localhost/aslanbeyati9.php">aslanbeyati9</a></li>
            
            <li><a href="http://localhost/AYNUROUZ15.php">AYNUROUZ15</a></li>
            <li><a href="http://localhost/aytek_nabtin.php">aytek_nabtin</a></li>
            <li><a href="http://localhost/BilgeHatun34.php">BilgeHatun34</a></li>
            <li><a href="http://localhost/chp_gercekleri.php">chp_gercekleri</a></li>
            <li><a href="http://localhost/DevletiAliyyeTR.php">DevletiAliyyeTR</a></li>

            <li><a href="http://localhost/Efeler_yurdu.php">Efeler_yurdu</a></li>
            <li><a href="http://localhost/el_merru.php">el_merru</a></li>
            <li><a href="http://localhost/elifkaankara.php">elifkaankara</a></li>
            <li><a href="http://localhost/ertan080808.php">ertan080808</a></li>
            <li><a href="http://localhost/FatmaUs86340381.php">FatmaUs86340381</a></li>
            
            <li><a href="http://localhost/goklu_rte.php">goklu_rte</a></li>
            <li><a href="http://localhost/gullerevurgun4.php">gullerevurgun4</a></li>
            <li><a href="http://localhost/huorelensarr.php">huorelensarr</a></li>
            <li><a href="http://localhost/hurr_adam.php">hurr_adam</a></li>
            <li><a href="http://localhost/KacSaatOlduTR.php">KacSaatOlduTR</a></li>

            <li><a href="http://localhost/KKerkukluu.php">KKerkukluu</a></li>
            <li><a href="http://localhost/LiderRTE2071.php">LiderRTE2071</a></li>
            <li><a href="http://localhost/Muharremgunes52.php">Muharremgunes52</a></li>
            <li><a href="http://localhost/NekrofilZombi.php">NekrofilZombi</a></li>
            <li><a href="http://localhost/NezdAmikk.php">NezdAmikk</a></li>
           
            <li><a href="http://localhost/nrdnnereyefilmi.php">nrdnnereyefilmi</a></li>
            <li><a href="http://localhost/osmanlineferi0.php">osmanlineferi0</a></li>
            <li><a href="http://localhost/ozcan_yusufoglu.php">ozcan_yusufoglu</a></li>
            <li><a href="http://localhost/prof_karatay.php">prof_karatay</a></li>
            <li><a href="http://localhost/put_var_yen_mi.php">put_var_yen_mi</a></li>
            
            <li><a href="http://localhost/RTE_2023_2053.php">RTE_2023_2053</a></li>
            <li><a href="http://localhost/RteZubeyde07.php">RteZubeyde07</a></li>
            <li><a href="http://localhost/Sehriban55__.php">Sehriban55__</a></li>
            <li><a href="http://localhost/selambentamay.php">selambentamay</a></li>
            <li><a href="http://localhost/senkimsinya_RTE.php">senkimsinya_RTE</a></li>
           
            <li><a href="http://localhost/sult_nurbanu.php">sult_nurbanu</a></li> 
            <li><a href="http://localhost/SungurogIu.php">SungurogIu</a></li>
            <li><a href="http://localhost/taksimmuftusu.php">taksimmuftusu</a></li>
            <li><a href="http://localhost/TheLaikYobaz.php">TheLaikYobaz</a></li>
            <li><a href="http://localhost/toskofacts.php">toskofacts</a></li>
            
            <li><a href="http://localhost/travisandtyler.php">travisandtyler</a></li>
            <li><a href="http://localhost/trblnfxn.php">trblnfxn</a></li>
            <li><a href="http://localhost/TurkayMetin.php">TurkayMetin</a></li>
            <li><a href="http://localhost/turkel_necati.php">turkel_necati</a></li>
            <li><a href="http://localhost/UstAkilOyunlari.php">UstAkilOyunlari</a></li>
            
            <li><a href="http://localhost/uzy_dgn.php">uzy_dgn</a></li>
            <li><a href="http://localhost/VatanSeverKoala.php">VatanSeverKoala</a></li>
            <li><a href="http://localhost/Yektani.php">Yektani</a></li>
            <li><a href="http://localhost/yilmazgul3535.php">yilmazgul3535</a></li>
            <li><a href="http://localhost/Z4LL4H66.php">Z4LL4H66</a></li>
            
        </ul>

        <script>
            function myFunction() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }
        </script>
</body>
</html>