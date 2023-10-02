<?php 

$title = "index";
include 'includes/Header.php'?>;
    <h1> Functions </h1>

    <?php
    
    //Defining a Function

    Function WriteMessage(){

        echo "You are really a nice person, Have a nice time! <br/>";

    }
        
    //calling a function
        writeMessage();

        echo "<hr/>";


        writeMessage();

    // Function with parameter

    function addFunction($num1, $num2){

        $sum = $num1 + $num2;

        echo "The sum of $num1 and $num2 2 is: $sum <br/>";
    }

    function changenum($num){

        $num = $num + 10;

   
    }

    $num = 500;
    addFunction(10, 20);
    addFunction(10, $num);
   
    addFunction('10', '50');

    changenum($num);
    echo $num . '<br/>';
    

    ?>
    
    <?php require 'includes/Footer.php'?>