<?php
error_reporting('E_ERROR');
include("sinusbot.class.php");
include("config.php");
$sinusbot = new SinusBot($ipport);
$sinusbot->login($user, $passwd);
$status = $sinusbot->getStatus($inst);
$track = (($status["currentTrack"]["type"] == "url") ? $status["currentTrack"]["tempTitle"] : $status["currentTrack"]["title"]);
$artist = $status["currentTrack"]["tempArtist"];
$name = $track;
$track = preg_replace('^ ^', '+', $track);

if(!empty($artist)) {
echo "<font color='black' style='size: 16px !important;'>  Search: <a href='https://www.google.de/search?client=opera&q=".$track."+-+".$artist."&sourceid=opera&ie=UTF-8&oe=UTF-8' target='_new'><img src='http://images.dailytech.com/nimage/G_is_For_Google_New_Logo_Thumb.png' width='16px' height='16px' alt='Google Search'></a> </font>";
} else {
echo "<font color='black' style='size: 16px !important;'>  Search: <a href='https://www.google.de/search?client=opera&q=".$track."&sourceid=opera&ie=UTF-8&oe=UTF-8' target='_new'><img src='http://images.dailytech.com/nimage/G_is_For_Google_New_Logo_Thumb.png' width='16px' height='16px' alt='Google Search'></a></font>";
}