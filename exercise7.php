<?php
// $person = ["kyaw kyaw",20,"brown"];
$person = [
    "name"=> "kyawkyaw",
    "age"=> "20",
    "hair"=> "brown",
];
foreach ($person as $key => $feature) {
    echo $key. "-". $feature. ",<br>";
}

$person["uni"] = "TTU";

echo "<pre>";
// var_dump ($person);
print_r($person);

//die dump
die(var_dump($person));


die();
echo "hello";
require "e7.view.php";
?>