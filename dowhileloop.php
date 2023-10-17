<?php 
$title = "While Loop/Do While Loop";
include 'includes/header.php'?>;

   <h1>While Loop/Do While Loop </h1> 

    <?php
    $grade = 1;

    while($grade <10){

        echo '<p> I am less than 10!</p>';
        $grade++;
        }   
        echo 'Exit Loop!';
    ?>
    <h1>While Loop</h1>
    <?php
    $grade = 0;
    do{
        echo '<p> I am do while loop</p>';
        $grade++;
      } while($grade < 10);

      echo 'Exit Loop!';

?>   
<?php require 'includes/footer.php'?>