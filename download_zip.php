<?php

$urls=$_POST["urls"];

$zip=new ZipArchive();
$file="cache/emojis.zip";

$zip->open($file,ZipArchive::CREATE);

foreach($urls as $url){

$data=file_get_contents($url);
$name=basename($url);

$zip->addFromString($name,$data);

}

$zip->close();

header("Location: ".$file);
