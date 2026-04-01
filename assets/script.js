let emojiList=[]

async function loadServer(){

let invite=document.getElementById("serverInput").value

let bar=document.getElementById("progressBar")
bar.style.width="20%"

let res=await fetch("api.php?invite="+invite)

bar.style.width="60%"

let data=await res.json()

emojiList=data.emojis

bar.style.width="100%"

renderServer(data)

renderEmojis(data.emojis)

}

function renderServer(data){

document.getElementById("serverInfo").innerHTML=`

<div class="serverCard">

<img src="https://cdn.discordapp.com/icons/${data.id}/${data.icon}.png">

<h2>${data.name}</h2>

</div>

`

}

function renderEmojis(emojis){

let grid=document.getElementById("emojiGrid")

grid.innerHTML=""

emojis.forEach(e=>{

let ext=e.animated?"gif":"png"

let url=`https://cdn.discordapp.com/emojis/${e.id}.${ext}`

let card=document.createElement("div")

card.className="emojiCard"

card.innerHTML=`

<img src="${url}" onclick="preview('${url}')">

<p>${e.id}</p>

<a href="${url}" download>
<button>Download</button>
</a>

`

grid.appendChild(card)

})

}

function filterEmoji(){

let text=document.getElementById("searchEmoji").value.toLowerCase()

let filtered=emojiList.filter(e=>e.name.toLowerCase().includes(text))

renderEmojis(filtered)

}

function preview(url){

let win=window.open()

win.document.write(`<img src="${url}" style="width:200px">`)

}
