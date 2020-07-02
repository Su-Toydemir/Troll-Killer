<!DOCTYPE html>
<html lange="en">

<head>
    <link rel="icon" href="45.png">
    <title>Troll Killer</title>
    <link href="ProjectCSS_3.css" type="text/css" rel="stylesheet">
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-image: url("brownIMG.jpg");
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
        <div class="container">
            <div class="panel panel-default" id="home">
                <div class="panel-heading">
                </div>
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="twitterAmblem2.jpg" style="width:100%">
                        <div class="centered">Twitter
                            <br> 
                            <hr><button class="button" type="button"><a class="button"
                                    href="https://twitter.com/explore">Click
                                    here to see more information</a></button>
                            <hr>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="trollsImg6.png" style="width:100%">
                        <div class="centered">What is Troll?
                            <br> 
                            <hr><button class="button" type="button"><a class="button"
                                    href="https://en.wikipedia.org/wiki/Internet_troll">Click
                                    here to see more information</a></button>
                            <hr>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="cyberbullying.jpg" style="width:100%">
                        <div class="centered">What is Cyberbullying?
                            <br>
                            <hr><button class="button" type="button"><a class="button" href="https://en.wikipedia.org/wiki/Cyberbullying">Click
                                    here to see more information</a></button>
                            <hr>
                        </div>
                    </div>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <!-- The dots/circles -->
                <!-- <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
            </div>
        </div>
        <div class="panel panel-default" id="aboutus">
            <div class="panel-heading">
                <h3 class="panel-title">About Us</h3>
            </div>
            <div class="row">
                <div class="panel-body">
                    <div class="column">
                        <div class="flip-card" style="margin-bottom: 200px;">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="pexels-photo-374074.jpeg" alt="Avatar" style="width:400px;height:300px;">
                                    <h1 class="centered">Who We Are?</h1>
                                </div>
                                <div class="flip-card-back">
                                    <h4 style="text-align: center; margin-top: 120px; margin-left: 40px; margin-right: 40px; "><strong>TrollKiller 
                                            is an application for Turkish Twitter users that is based on machine learning algorithms.</strong>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="flip-card" style="margin-bottom: 200px;">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="data.png" alt="Avatar" style="width:400px;height:300px;">
                                <h1 class="centered">Our Mission</h1>
                            </div>
                            <div class="flip-card-back">
                                <h4 style="text-align: center; margin-top: 50px; margin-left: 40px; margin-right: 40px; "><strong>By using machine learning algorithms and models (like Logistic regression, Support Vector Machine, Random Forest), we break down Turkish Twitter users' tweets word by word (including emojis) and according to the frequency of the words used by these users, we determine whether they are a real user or a troll user.</strong>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="flip-card" style="margin-bottom: 200px;">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="troll_killer.png" alt="Avatar" style="width:400px;height:300px;">
                                <h1 class="centered">Our Vision</h1>
                            </div>
                            <div class="flip-card-back">
                                <h4 style="text-align: center; margin-top: 120px; margin-left: 40px; margin-right: 40px; "><strong> With this application, we aim to distinguish Turkish troll users from real users on Twitter. </strong>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="footer">

        <h3>Follow us on social media</h3>

        <a href="https://tr-tr.facebook.com/"><img class="facebook" src="facebook.png" style="width40px;height:30px;margin-top:10px;"></a>

        <a href="https://twitter.com/login?lang=tr"><img class="twitter" src="twitter.png" style="width40px;height:30px;margin-top:10px;"></a>

        <a href="https://www.snapchat.com/"><img class="snapchat" src="snapchat.png" style="width40px;height:30px;margin-top:10px;"></a>

        <a href="https://www.instagram.com/?hl=tr"><img class="instagram" src="instagram.png" style="width40px;height:30px;margin-top:10px;"></a>

        <!-- <h3>Click <a href="cookies.php">here</a> to fill cookies.</h3> -->

    </div>

    <script>
        $(function() {
            $("ul li a").bind("click",
                function(event) {
                    event.preventDefault ?
                        event.preventDefault() :
                        event.returnValue =
                        false;
                    var target = $(this).attr("href");
                    $("html, body").stop().animate({
                        scrollLeft: $(target).offset().left,
                        scrollTop: $(target).offset().top
                    }, 1200);
                });
        });
    </script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("active", "");
            }
            slides[slideIndex - 1].style.display = "block";

            dots[slideIndex - 1].className += " active";
        }
    </script>

    <script>
        function viewGraph() {
            $('.column').css('height', '0');

            $('table tr').each(
                function(index) {
                    var ha = $(this).children('td').eq(1).text();
                    $('#col' + index).animate({
                        height: ha
                    }, 1500).html("<div>" + ha + "</div>");

                });
        }

        $(document).ready(
            function() {
                viewGraph();
            });
    </script>
    <script>
        window.onscroll =
            function() {
                myFunction()
            };
        var navbar = document.getElementById("page");

        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>