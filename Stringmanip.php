<?php 

$title = "PHP String Manipulation";
include 'includes/header.php'?>;

    <h1>PHP String Manipulation</h1>
    <?php

    $phrase1 = "student who come late";
    $phrase2 = "in class, Stand with rock";
    $name = 'olando brown';
    echo $phrase1 . ",named Tiffany, " . $phrase2;
    echo '<br/>';
    echo '<hr/>';

    echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
    echo 'Uppercase' . strtoupper($name).'<br/>';
    echo 'Uppercase' . strtolower("THIS WAS ALL UPPER CASE").'<br/>';
    echo '<hr/>';
    echo 'Repeast String: ' . str_repeat('a',10) . '<br/>';
    echo 'Repeast String: ' . strtoupper(str_repeat('a',10)) . '<br/>';
    echo '<br/>';

    echo 'Get a Substring:' . substr($name, 5, 10) . '<br/>';

    echo 'Get position of string: ' . strpos($name,'w'). '<br/>';

    echo 'Find Character "R": ' . strchr($name,'R').'<br/>';
    echo 'Find Character "r": ' . strchr($name,'r').'<br/>';
    echo 'Find Character "s": ' . strchr($name,'s').'<br/>';
    echo 'Find Character "e": ' . strchr($name,'e').'<br/>';

    echo 'Find Lenght of String: '. strlen($name) . '<br/>';

    echo 'Without Trim:' . "A" . "B C D" . "E" .  '<br/>';
    echo 'Trim spaces on both sides: ' . "A" . trim("B C D") . "E" .  '<br/>';
    echo 'Trim spaces to the left: ' . "A" . ltrim("B C D") . "E" .  '<br/>';
    echo 'Trim spaces to the right: ' . "A" . rtrim("B C D") . "E" .  '<br/>';

    echo 'Replace string with another: ' . "A" . str_replace("stand", "sit", $phrase2) . '<br/>';




    ?>
<?php require 'includes/footer.php'?>