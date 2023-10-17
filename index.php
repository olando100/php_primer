<?php
$title = "index";
include 'includes/header.php'?>;


    <!-- Basic Html -->

    <h1>Hello World - PHP Primer</h1>
    <br/>

    <?php
    //Printing to HTML using echo
    echo "Hello PHP";
    echo '<br/>';
    echo "second line";
    echo '<br/>'

    ?>
        <?php
    //declare variable
    $name = 'Olando Brown';
    $age = 31;
    //echo variable
    echo $name;
    echo'<h1> My name is : '.$name. '</h1>';
    echo'<h1> My age is : '.$age. '</h1>';
    //echo using double quoes and interpolation
    echo "<h1> My name is : $name </h1>";

    ?>



<?php require 'includes/footer.php'?>
