<?php
// Following http://www.w3schools.com/php/php_ref_array.asp 
echo "<h1>Normal Arrays</h1><hr />";
// =======================================
echo "<p>We are going to test how arrays work on PHP:</p>";

$progLangs = array("C", "VB6", "Java", "VB.NET". "Python");

$levels = array("What's that?", "Newbie", "Beginner", "Moderate", "High Level", "I'm on fire!", "Ninja mode");

foreach($progLangs as $lang) {
    echo "<p>"."$lang - My Level is ".$levels[rand(0, count($levels) - 1)]."</p>";
}


echo "<h1>Associative Arrays</h1><hr />";
// =======================================
$dishes = array(
    "Salad" =>  "Ensalada",
    "Gazpacho" => "Gazpacho",
    "Rice" => "Arroz",
    "Corn" => "Maiz"
    );

foreach($dishes as $word => $translation) {
    echo "<p>".$word." is ".$translation." in Spanish</p>";
}

echo "<h1>Adding and removing Elements</h1><hr />";
// =======================================

