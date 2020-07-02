
<!DOCTYPE html>
<html lange="en">
    <link rel="icon" href="45.png">
    <title>Troll Killer</title>
    <link href="ProjectCSS_3.css" type="text/css" rel="stylesheet">

    <head>
        <style>
            body {
                font-family: Verdana, sans-serif;
            }
        </style>
    </head>

<body style="border: 1px solid transparent;padding-bottom: 100px;">
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

        <body>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <h2 class="piechartheader">Bar Chart of Troll Accounts' Follower Number</h2>
                    <ul class="bar-graph">
                        <li class="bar-graph-axis">
                        <div class="bar-graph-label">35</div>
                            <div class="bar-graph-label">30</div>
                            <div class="bar-graph-label">25</div>
                            <div class="bar-graph-label">20</div>
                            <div class="bar-graph-label">15</div>
                            <div class="bar-graph-label">10</div>
                            <div class="bar-graph-label">5</div>
                            <div class="bar-graph-label">0</div>
                        </li>
                        <li class="bar primary" style="height: 20%;" title="0-99(trollFollower)">
                            <div class="percent">4</div>
                            <div class="description">0-99 Followers</div>
                        </li>
                        <li class="bar secondary" style="height: 20%;" title="100-399(trollFollower)">
                            <div class="percent">4</div>
                            <div class="description">100-399 Followers</div>
                        </li>
                        <li class="bar success" style="height: 15%;" title="400-699(trollFollower)">
                            <div class="percent">3</div>
                            <div class="description">400-699 Followers</div>
                        </li>
                        <li class="bar warning" style="height: 20%;" title="700-999(trollFollower)">
                            <div class="percent">4</div>
                            <div class="description">700-999 Followers</div>
                        </li>
                        <li class="bar alert" style="height: 10%;" title="1000-1999(trollFollower)">
                            <div class="percent">2</div>
                            <div class="description">1000-1999 Followers</div>
                        </li>
                        <li class="bar primary2" style="height: 10%;" title="2000-2999(trollFollower)">
                            <div class="percent">2</div>
                            <div class="description">2000-2999 Followers</div>
                        </li>
                        <li class="bar secondary2" style="height: 83%;" title="3000+(trollFollower)">
                            <div class="percent">31</div>
                            <div class="description">3000+ Followers</div>
                        </li>
                        
                    </ul>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <h2 class="piechartheader">Bar Chart of Troll Accounts' Tweet Number</h2>
                    <ul class="bar-graph">
                        <li class="bar-graph-axis">
                            <div class="bar-graph-label">30</div>
                            <div class="bar-graph-label">25</div>
                            <div class="bar-graph-label">20</div>
                            <div class="bar-graph-label">15</div>
                            <div class="bar-graph-label">10</div>
                            <div class="bar-graph-label">5</div>
                            <div class="bar-graph-label">0</div>
                        </li>
                        <li class="bar primary" style="height: 10%;" title="0-99(trollTweets)">
                            <div class="percent">2</div>
                            <div class="description2">0-99 Tweets</div>
                        </li>
                        <li class="bar secondary" style="height: 10%;" title="100-499(trollTweets)">
                            <div class="percent">2</div>
                            <div class="description2">100-499 Tweets</div>
                        </li>
                        <li class="bar success" style="height: 30%;" title="500-999(trollTweets)">
                            <div class="percent">7</div>
                            <div class="description2">500-999 Tweets</div>
                        </li>
                        <li class="bar warning" style="height: 25%;" title="1000-2999(trollTweets)">
                            <div class="percent">6</div>
                            <div class="description2">1000-2999 Tweets</div>
                        </li>
                        <li class="bar alert" style="height: 30%;" title="3000-4999(trollTweets)">
                            <div class="percent">7</div>
                            <div class="description2">3000-4999 Tweets</div>
                        </li>
                        <li class="bar primary2" style="height: 85%;" title="5000+(trollTweets)">
                            <div class="percent">26</div>
                            <div class="description2">5000+ Tweets</div>
                        </li>
                        
                    </ul>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <h2 class="piechartheader">Pie Chart of Troll Accounts' Location</h2>

                    <div id="piechart2"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([

                                ['Location', 'Frequency'],

                                ['Unspecified', 48],

                                ['İstanbul', 6],

                                ['İzmir', 6],

                                ['Kocaeli', 2],

                                ['Other (unreal location)', 14],

                                ['More than one location', 6],

                                ['Antalya', 2],

                                ['Türkiye', 10],

                                ['Ankara', 2],

                                ['Bosna', 2],


                            ]);

                            var
                                options = {
                                    width: 1300,
                                    height: 380,
                                    chartArea: {
                                        left: 300,
                                        top: 20,
                                        width: 900,
                                        height: 300
                                        
                                    },
                                    // 'pieHole': 0.4,
                                    'is3D': true,
                                    // legend: {
                                    //     alignment: 'center',
                                    // }
                                    // pieSliceText: 'percentage',
                                    pieSliceText: 'none',
                                    slices: {
                                        1:{
                                            offset: 0.2
                                        },
                                        2: {
                                            offset: 0.2
                                        },
                                        3: {
                                            offset: 0.2
                                        },
                                        4: {
                                            offset: 0.2
                                        },
                                        5: {
                                            offset: 0.2
                                        },
                                        6: {
                                            offset: 0.2
                                        },
                                        7: {
                                            offset: 0.2
                                        },
                                        8: {
                                            offset: 0.2
                                        },
                                        9: {
                                            offset: 0.2
                                        },
                                        10: {
                                            offset: 0.2
                                        }
                                        
                                    },
                                };

                            // Display the chart inside the <div> element with id="piechart"

                            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart2"></div>
                </div>


                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <!-- <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div> -->
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function
                plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function
                currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function
                showSlides(n) {
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
                function
                viewGraph() {

                    $('.column').css('height',
                        '0');

                    $('table tr').each(function(index) {

                        var ha = $(this).children('td').eq(1).text();

                        $('#col' + index).animate({
                            height: ha
                        }, 1500).html("<div>" + ha + "</div>");
                    });
                }

                $(document).ready(function() {
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
            <hr style="border:3px solid #f1f1f1">
        </body>

</html>