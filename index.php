<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        echo "<p>Hello World</p>";
        $target = mktime(0,0,0,9,16,2020);
        $today = time();
        $difference = ($target-$today);
        $day = (int)($difference/86400);
        print "Our event will occur in $day days";
        ?>
    </body>
</html>