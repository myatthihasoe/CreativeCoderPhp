<?php
require "function.php";
$persons=[
    "name" => "thiha",
    "age"=> "20",
    "isMarried"=> "false"
];

//(parameter,default parameter)
function name( $name, $age = 20 ) {  
    echo "My name is $name, my age is $age";
}
name("Thiha", 22 );

ff($persons);//use function from function.php

// die(var_dump( $persons ));


?>