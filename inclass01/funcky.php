<?php

$functions = get_defined_functions();
echo count($functions['internal']);


$intFuncs = $functions['internal'];
foreach($intFuncs as $func){
    echo $func. "<br>";
}