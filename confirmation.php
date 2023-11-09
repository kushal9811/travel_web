<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header-div">
        <header class="header">
            <a href="index.html">Jet Set GO</a>
            <a href="index.html"><img src="img/logo.jpg"></a>
            <hr style="width:80%">
        </header>
        <center>
            <nav class="menu">
                <a href="index.html">HOME</a>
                <a href="lgin.html">LOGIN</a>
                <a href="destinations.html">DESTINATIONS</a>
                <a href="traveltips.html">TRAVEL TIPS</a>
                <a href="contact.html">CONTACT</a>
            </nav>
        </center>
    </div>

    <div class="travel1-container">
        <div class="booking-confirmation">
            <?php
            if (isset($_GET['message'])) {
                echo "<h2>{$_GET['message']}</h2>";
            } else {
                echo "<p>No confirmation message available.</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>
