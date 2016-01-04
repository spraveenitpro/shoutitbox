<?php include 'database.php'; ?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title> Shout IT</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Shout It!! Shout box</h1>
            </header>
            <div id="shouts">
                <ul>
                    <li class="shout"><span>10:15PM - </span> Brad: Hey What are you upto?</li>
                    <li class="shout"><span>10:15PM - </span> Brad: Hey What are you upto?</li>
                    <li class="shout"><span>10:15PM - </span> Brad: Hey What are you upto?</li>
                    <li class="shout"><span>10:15PM - </span> Brad: Hey What are you upto?</li>
                    <li class="shout"><span>10:15PM - </span> Brad: Hey What are you upto?</li>
                    <li class="shout"><span>10:15PM - </span> Brad: Hey What are you upto?</li>
                </ul>
            </div>
            <div id="input">
                <form action="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter Your Name" />
                    <input type="text" name="message" placeholder="Enter Your Message" />
                    </br>
                    <input class="shout-btn" type="submit" name="submit" value="Shout it out!" />


                </form>
            </div>
        </div>

    </body>


</html>