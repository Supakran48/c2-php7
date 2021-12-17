<?php
$message = function(){
    return "Lamda";
};
//closer
echo get __class($message);
echo "<br />";
echo gettype($message);