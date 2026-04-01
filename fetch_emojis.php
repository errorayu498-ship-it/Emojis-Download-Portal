<?php
require "config.php";

$server=$_GET["server"];

if(str_contains($server,"discord.gg")){
$code=explode("/", $server);
$code=end($code);

$invite=json_decode(file_get_contents(DISCORD_API."/invites/".$code),true);
$server=$invite["guild"]["id"];
}

$ch=curl_init();

curl_setopt_array($ch,[
CURLOPT_URL=>DISCORD_API."/guilds/".$server,
CURLOPT_RETURNTRANSFER=>true,
CURLOPT_HTTPHEADER=>[
"Authorization: Bot ".DISCORD_TOKEN
]
]);

$res=json_decode(curl_exec($ch),true);

$emojis=[];

foreach($res["emojis"] as $e){

$ext=$e["animated"]?"gif":"png";

$emojis[]=[
"id"=>$e["id"],
"url"=>"https://cdn.discordapp.com/emojis/".$e["id"].".".$ext
];

}

echo json_encode($emojis);
