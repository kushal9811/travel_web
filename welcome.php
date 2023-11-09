<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header-div">
        <header class="header">
            <a href="index.html"><img src="img/logo.jpg" height="100px" width="2000px" class="logo"></a>
            <hr style="width:80%">
            <a href="index.html">Jet Set Journey</a>
        </header>
        <center>
            <nav class="menu">
                <a href="index.html">HOME</a>
                <a href="lgin.html">LOG IN</a>
                <a href="destinations.html">DESTINATIONS</a>
                <a href="traveltips.html">TRAVEL TIPS</a>
                <a href="contact.html">CONTACT</a>
            </nav>
            <div class="welcome-message">
            <?php
            // Check if the name parameter is set in the URL
            if (isset($_GET["name"])) {
                $name = $_GET["name"];
                echo "<h1>Welcome, $name!</h1>";
            } else {
                echo "<p>Invalid access to this page.</p>";
            }
            ?>
            </div>
        </center>
    </div>

    <div class="container">
    <div class="Homepage-img">
        <img src="img/home.webp">
        </div>
        
        <div class="h1">
        <h1 >START PLANNING YOUR NEXT ADVENTURE HERE</h1>
        </div>
        
        <div class="main content">
        
        <p>It can be hard to know where to start when planning your dream trip.</p>
        <p>Travel can seem like a daunting subject with so much information available and, the longer you go away, the more things you seem to have to think about.</p>
        <p>I want to make planning your next gap year, family vacation, around the world, or backpacking trip simple and easy.</p>
        <p>On this page, you’ll find a curated list of the best articles on this site related to planning a trip – whether it’s a two week vacation to Italy, or a year-long trip around the world. The tips are broken down into categories so you can find the information you need fast and effectively.</p>
        <p>Travel is more than just getting up and going. It’s about being knowledgeable so you can travel better, cheaper, and longer. Below you will find links to articles I’ve written that deal with planning your trip and other general advice so your total vacation is as amazing as it can be. </p>
        
        </div>
        
    </div>
</body>

</html>
