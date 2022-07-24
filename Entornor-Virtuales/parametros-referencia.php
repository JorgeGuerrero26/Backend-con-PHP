<?php
$cat = "meow";

function make_a_cat_bark(&$cat_dog){
    $cat_dog = "woof";
}



make_a_cat_bark($cat);
echo $cat;
echo "\n";


?>