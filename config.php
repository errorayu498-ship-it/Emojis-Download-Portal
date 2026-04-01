<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define("DISCORD_TOKEN", $_ENV['DISCORD_TOKEN']);
define("DISCORD_API", $_ENV['DISCORD_API']);

?>
