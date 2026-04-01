<!DOCTYPE html>
<html>
<head>
<title>Discord Emoji Downloader</title>
<link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="container">

<h1>Discord Emoji Downloader</h1>

<div class="searchBox">
<input id="serverInput" placeholder="Enter Server ID or Invite Link">
<button onclick="getEmojis()">Get Emojis</button>
</div>

<div id="loading" class="loading hidden"></div>

<div id="emojiContainer" class="emoji-grid"></div>

<div id="zipBox" class="zipbox hidden">
<button onclick="downloadZip()">Download All Emojis (ZIP)</button>
</div>

</div>

<script src="assets/script.js"></script>

</body>
</html>
