<?php

$urls=$_POST["urls"];

$zip=new ZipArchive();

$file="cache/emojis.zip";

$zip->open($file,ZipArchive::CREATE);

foreach($urls as $url){

$data=file_get_contents($url);

$zip->addFromString(basename($url),$data);

}

$zip->close();

header("Location: ".$file);
