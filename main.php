<?php
$rand = rand(1,10)*10;
$guess = $_GET['userNumber'];
if($rand == $guess)
    echo '<p>You\'e got it '. $rand .' is the correct number, well done !</p>';
else
    echo '<p>We\'re sorry to tell that your answer is wrong</p>';
?>