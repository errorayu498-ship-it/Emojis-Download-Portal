<?php

$invite=$_GET["invite"];

$code=end(explode("/",$invite));

$data=json_decode(file_get_contents("https://discord.com/api/v10/invites/".$code."?with_counts=true"),true);

echo json_encode([
"name"=>$data["guild"]["name"],
"id"=>$data["guild"]["id"],
"icon"=>$data["guild"]["icon"],
"emojis"=>$data["guild"]["emojis"]
]);
