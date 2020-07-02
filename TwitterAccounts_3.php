<!DOCTYPE html>
<html lange="en">

<script>
// When the user clicks on div, open the popup
function myFunction(idName) {
    var popup = document.getElementById(idName);
    popup.classList.toggle("show");
}
</script>

<head>
    <link rel="icon" href="45.png">
    <title>Troll Killer</title>
    <link href="ProjectCSS_3.css" type="text/css" rel="stylesheet">
    <style>
       

        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
        background-color: transparent;
        width: 600px;
        height: 900px;
        perspective: 1000px;
        }

        .column {
            float: left;
            width: 38%;
        
        }

        /* Remove extra left and right margins, due to padding */

        .row {
            display: block;
            margin-left: 20px;
            margin-right: 20px;
            width: 125%;
        }

        /* Clear floats after the columns */

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */

        @media screen and (max-width : 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }
        .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        }

        .flip-card-front {
        background-color: #bbb;
        color: black;
        }

        .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
        }

        /* Popup container - can be anything you want */
        .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
        }

         /* Toggle this class - hide and show the popup */
         .popup .delete {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeOut 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
        from {opacity: 0;} 
        to {opacity: 1;}
        }

        @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;}
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
                                <a href="http://localhost/RatingsTroll_3.php">Troll Accounts' Charts</a>
                                <a href="http://localhost/RatingsReal_3.php">Real Accounts'Charts</a>
                            </div>
                        </div>
                        <a href="http://localhost/TwitterAccountSearch_3.php">Search</a>
                        <a href="http://localhost/TwitterContact_3.php">Contact</a>
                    </ul>
                </div>
        </header>
        <body>


            <div class="row">
                <div class="column">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="TROLL1.jpg" alt="Action-photo" style="width:600px;height:900px;">
                                <h3 style="position: absolute;
                                           bottom: 400px;
                                           right: 400px;
                                           background-color: red;
                                           color: white;
                                           padding-left: 50px;
                                           padding-right: 50px;">TROLLS
                                </h3>
                            </div>
                            <div class="flip-card-back" style="background-color: rgb(68, 163, 68); ">
                            <u>
                                <li style="text-align: left; font-size:14px; margin-top: 60px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration:none;color:antiquewhite;" href="https://twitter.com/__Aloneas__">__Aloneas__</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/81Mememed">81Mememed</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/AHN49138412">AHN49138412</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/allahbelanive16">allahbelanive16</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/aslanbeyati9">aslanbeyati9</a></li>
                                
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/AynurOuz15">AYNUROUZ15</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/aytek_nabtin">aytek_nabtin</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/BilgeHatun34__B">BilgeHatun34</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration:none;color:antiquewhite;" href="https://twitter.com/chp_gercekleri">chp_gercekleri</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/DevletiAliyyeTR">DevletiAliyyeTR</a></li>
                                
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/Efeler_yurdu">Efeler_yurdu</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/el_meru">el_merru</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/elifkaankara">elifkaankara</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/ertan080808">ertan080808</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/FatmaUs86340381">FatmaUs86340381</a></li>
                                
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/goklu_rte">goklu_rte</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/gullerevurgun4">gullerevurgun4</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/huorelensarr">huorelensarr</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/hurr_adam">hurr_adam</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/KacSaatOlduTR">KacSaatOlduTR</a></li>

                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration:none;color:antiquewhite;" href="https://twitter.com/kkerkukluu">KKerkukluu</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;">
                                    <div class="popup" onmouseover="myFunction('myPopup')" onmouseout="myFunction('myPopup')"> LiderRTE2071    
                                        <span class="popuptext" id="myPopup">This account closed by the user, so we cannot show it to you!</span>
                                    </div>
                                </a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/Muharremgunes52">Muharremgunes52</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/NekrofilZombi">NekrofilZombi</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/NezdAmikk">NezdAmikk</a></li>
                                
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/nrdnnereyefilmi">nrdnnereyefilmi</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/osmanlineferi0">osmanlineferi0</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/ozcan_yusufoglu">ozcan_yusufoglu</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/prof_karatay">prof_karatay</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/put_var_yen_mi">put_var_yen_mi</a></li>
                                
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/RTE_2023_2053">RTE_2023_2053</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;">
                                <div class="popup" onmouseover="myFunction('myPopup2')" onmouseout="myFunction('myPopup2')"> RteZubeyde07
                                        <span class="popuptext" id="myPopup2">This account closed by the user, so we cannot show it to you!</span>
                                    </div>
                                </a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration:none;color:antiquewhite;" href="https://twitter.com/Sehriban55__">Sehriban55__</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" >
                                <div class="popup" onmouseover="myFunction('myPopup3')" onmouseout="myFunction('myPopup3')"> selambentamay
                                        <span class="popuptext" id="myPopup3">This account closed by the user, so we cannot show it to you!</span>
                                    </div>
                                </a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/senkimsinya_RTE">senkimsinya_RTE</a></li>
                               
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/sult_nurbanu">sult_nurbanu</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/SungurogIu">SungurogIu</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/taksimmuftusu">taksimmuftusu</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/TheLaikYobaz">TheLaikYobaz</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/toskofacts">toskofacts</a></li>

                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration:none;color:antiquewhite;" href="https://twitter.com/travisandtyler">travisandtyler</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/trblnfxn">trblnfxn</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/TurkayMetin">TurkayMetin</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/turkel_necati">turkel_necati</a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/UstAkilOyunlari">UstAkilOyunlari</a></li>
                                
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;">
                                <div class="popup" onmouseover="myFunction('myPopup4')" onmouseout="myFunction('myPopup4')">uzy_dgn
                                        <span class="popuptext" id="myPopup4">This account closed by the user, so we cannot show it to you!</span>
                                    </div>
                                </a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/VatanSeverKoala">VatanSeverKoala</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;">
                                <div class="popup" onmouseover="myFunction('myPopup5')" onmouseout="myFunction('myPopup5')">Yektani
                                        <span class="popuptext" id="myPopup5">This account closed by the user, so we cannot show it to you!</span>
                                    </div>
                                </a></li>
                                <li style="text-align: left; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/yilmazgul35353">yilmazgul3535</a></li>
                                <li style="text-align: right; font-size:14px; margin-left: 130px; margin-right: 130px; "><a style="text-decoration: none; color:antiquewhite;" href="https://twitter.com/Z4LL4H66">Z4LL4H66</a></li>
                            </u>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="REAL1.jpg" alt="Avatar" style="width:600px;height:900px;">
                                <h3 style="position: absolute;
                                           bottom: 400px;
                                           left: 400px;
                                           background-color: red;
                                           color: white;
                                           padding-left: 50px;
                                           padding-right: 50px;">REALS
                                </h3>
                            </div>
                            <div class="flip-card-back" style="background-color: rgb(163, 111, 68);">
                                <li style="text-align: center; margin-top: 450px; margin-left: 40px; margin-right: 40px; "><a style="text-decoration: none; color:antiquewhite;">Because of the Security reasons we cannot reveal "REAL" accounts. But you can reach us via e-mail and we can examine the account.</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>