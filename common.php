<?php
header('Cache-Control: max-age=604800');
$theme = $_COOKIE["theme"];
$lang = $_COOKIE["lang"];
$dark = "#2ad4e5";
$light = "white";
$img_endpoint = "/assets/";

function antithemeify()
{
    return $GLOBALS["theme"] == "light" ? "dark" : "light";
}

function bgify() {
    return $GLOBALS["theme"] == "light" ? "city2k" : "star";
}

function colorify()
{
    return $GLOBALS["theme"] == "light" ? $GLOBALS["light"] : $GLOBALS["dark"];
}

function anticolorify()
{
    return $GLOBALS["theme"] == "light" ? $GLOBALS["dark"] : $GLOBALS["light"];
}

function antilangify()
{
    return $GLOBALS["lang"] == "Jamaican" ? "English" : "Jamaican";
}
        
function translations(string $en, string $jm)
{
    return $GLOBALS["lang"] == "Jamaican" ? "$jm" : "$en";
}

function translate_antitheme() {
    return $GLOBALS["theme"] == "light" ? "Dark" : translations("Light", "Lite");
}

?>
