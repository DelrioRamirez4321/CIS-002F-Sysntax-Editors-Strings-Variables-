<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <h1>PHP Countdown Counter</h1>
<?php 
        echo "<h1>Hello World!</h1>";
        $target = mktime(0,0,0,9,16,2020);
        $today = time();
        $difference = ($target-$today);
        $day = (int)($difference/86400);
        print "I will turn twenty in $day days";
        ?>

        <h2>To Open the PHP File</h2>
        <p>
            To open a PHP file you will need a wampsever program.  what the the wampsever does is that it makes a private sever on your computer that
            can run PHP and be able to display the code as what it is on the webpage that is made. When you have the sever running you are type local Host 
           into the web brower set to WampSever.  When that the home make at the end of local sever you are to type the name of the folder that has the php file
           or type the name of the PHP file.
        </p>

        <h2>What Editor I am Using</h2>
        <p>
            The Editor that I am using is Visual Studio Code.  I choose to use Visual Studio Code Because it is the one I am most comfortable with.
            I have used the program for my html, css, and JavaScript class so using it again would be must easier for me instead of trying to use
            another type of program.
        </p>

        <h2>Source Code From Our Book</h2>
        <?php
        
        ?>
</body>
</html>