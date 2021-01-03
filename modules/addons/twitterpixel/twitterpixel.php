<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");


function twitterPixel_config() {
    $configarray = array(
    "name" => "Twitter Pixel",
    "description" => "Integrate your Twitter tracking pixel on every page.",
    "version" => "1.0",
    "author" => "Github Community",
    "language" => "english",
    "fields" => array(
    "pixelid" => array ("TwitterName" => "Twitter Pixel ID", "Type" => "text", "Size" => "40", "Description" => "", "Default" => "", ),
    "active" => array ("FriendlyName" => "Active", "Type" => "yesno", "Description" => "Check this box to insert the pixel.",),
    ));

    return $configarray;
}
