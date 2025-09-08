<?php

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;



$slugify = new Slugify();

echo $slugify -> slugify('the sky is blue, and the grass is green !!!!');

$myName = "Res";
echo "The name of the coder is " . $myName;
echo "\n";
echo "Or you can do like this as well $myName";

function doubleMe($userInput){

    $x = $userInput * 2;
    echo "$userInput x 2 = ";
    return $x;

}

function tripleMe($userInput){return $userInput * 3;};

echo doubleMe(10);

echo "\n";
echo tripleMe(30);



?>