<!DOCTYPE html>
<html>
<head>

<title>Programmed by WarriorTeam</title>

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="main">

<h1>Discord Emoji Downloader</h1>

<div class="searchBar">

<input id="serverInput" placeholder="Server Invite Link">

<button onclick="loadServer()">Check Emojis</button>

</div>

<div class="progressBox">
<div id="progressBar"></div>
</div>

<div id="serverInfo" class="serverInfo"></div>

<input
type="text"
id="searchEmoji"
placeholder="Search emoji..."
onkeyup="filterEmoji()"
>

<div id="emojiGrid" class="emojiGrid"></div>

<div id="downloadAll" class="downloadAll">
<button onclick="downloadZip()">Download All</button>
</div>

</div>

<script src="assets/script.js"></script>

</body>
</html>
