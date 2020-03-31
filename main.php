<?php
require 'index.html';
$guess = $_GET['userNumber'];
$rand = (rand(1,10)*10);
$answer = ($rand == $guess);
if($answer){
    echo '<p style="text-align: center;font-size: 1.8em;color: green">You Win</p>';
}else{
    echo '<p style="text-align: center;font-size: 1.8em;color: red">You Loose</p>';
}
?>
