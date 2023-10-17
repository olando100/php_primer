<?php 
$title = "Simple Array and Printouts";
include 'includes/header.php'?>;

<h1>Simple Arry and Printouts</h1>

<?php
$num = 3;

$numbers = array(1,2,3,4,5,6,7,8,9,101,2,65,78,4,65,65,68,65,65,667);

    echo "<p> $numbers[9] </p>";

    $size = count($numbers);
    echo "<p> Array numbers is sizes: $size</p>";

    for($count = 0; $count < $size; $count++){

        echo "<p> $numbers[$count]</p>";

    }
 

?>   
<?php require 'includes/footer.php'?>