<?php 

$title = "IF-ELSE Statements";
include 'includes/Header.php'?>;

    <h1>IF-ELSE Statements</h1>

    <?php

    //if statment

    echo '<h2> if statement</h2>';

    $grade  = 80;

if ($grade >= 50) {

    echo '<h3 style="color: green">You have passed</h3>';

    } 

    else {
    echo '<h3 style="color: red">You have failed</h3>';
}

    // If-Else If-Else
    $grade = 'A';

    if($grade == 'A'){

        echo '<h2 style = "color : blue"> You are a superstar </h2>';
        
    }
    elseif($grade == 'B'){

        echo '<h2 style = "color : orange"> You did ok I guess </h2>';

    }
    else{

        echo '<h2> You failed... </h2>';


    }


    ?>
    
    <?php require 'includes/Footer.php'?>