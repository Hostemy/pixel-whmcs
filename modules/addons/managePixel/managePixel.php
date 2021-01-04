<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");


function managePixel_config()
{
    $configarray = array(
        "name" => "Manage Pixel",
        "description" => "Integrate your tracking pixel from your advertising manager",
        "version" => "1.0",
        "author" => "Hostemy",
        "language" => "english",
        "fields" => array(
            "pixel_facebook" => array("FriendlyName" => "Facebook Pixel ID", "Type" => "text", "Size" => "40", "Description" => "", "Default" => "",),
            "active_facebook" => array("FriendlyName" => "Active", "Type" => "yesno", "Description" => "Check this box to insert the pixel - Facebook.",),
            "pixel_twiiter" => array("FriendlyName" => "Twitter Pixel ID", "Type" => "text", "Size" => "40", "Description" => "", "Default" => "",),
            "active_twitter" => array("FriendlyName" => "Active", "Type" => "yesno", "Description" => "Check this box to insert the pixel - Twiiter.",),
        )
    );

    return $configarray;
}
