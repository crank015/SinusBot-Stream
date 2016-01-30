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
echo $name." from ".$artist;
} else {
echo $name;
}