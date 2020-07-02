<?php 
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];

$connection= mysqli_connect('localhost','root', '');
mysqli_set_charset ($connection, "utf8");
if(!$connection){
    die("Database connection failed".mysqli_error($connection));
}
$select_db= mysqli_select_db($connection,'contact_info');
if(!$select_db){
    die("Database connection failed".mysqli_error($connection));
}
$query="INSERT INTO `contact`(fname,lname,email,country,message) VALUES ('$first_name','$last_name','$email','$country','$message')";
$result=mysqli_query($connection,$query);

?>

<!DOCTYPE html>
<html lange="en">
<meta charset="utf-8" />
<head>
    <link rel="icon" href="45.png">
    <title>Troll Killer</title>
    <link href="ProjectCSS_3.css" type="text/css" rel="stylesheet">
    <style>
    p {
        background-color:powderblue;
        text-align:center;
        margin: auto;
        width: 60%;
        border: 6px solid #000000;
        padding: 10px;
        font-weight: bold;
        font-family: "Times New Roman", Times, serif;
        font-size: 30px;
        
    }
    img{
     display: block;
  margin-left: 245px;
  margin-right: auto;
  width: 60%; 
  padding: 20px;
    }
  
</style>
</head>

<body >
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
                                <a href="http://localhost/RatingsReal_3.php">Real Accounts' Charts</a>
                            </div>
                        </div>
                        <a href="http://localhost/TwitterAccountSearch_3.php">Search</a>
                        <a href="http://localhost/TwitterContact_3.php">Contact</a>
                    </ul>
                </div>
        </header>
        <img src="contact.jpg" alt="thank">
    </div>
   
    <p>Thank you for your message.</p> 
</body>
</html>