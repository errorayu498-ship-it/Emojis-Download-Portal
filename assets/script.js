async function getEmojis(){

let input=document.getElementById("serverInput").value

document.getElementById("loading").classList.remove("hidden")

let res=await fetch("fetch_emojis.php?server="+encodeURIComponent(input))
let data=await res.json()

document.getElementById("loading").classList.add("hidden")

let container=document.getElementById("emojiContainer")
container.innerHTML=""

data.forEach(e=>{

let card=document.createElement("div")
card.className="emoji-card"

card.innerHTML=`
<img src="${e.url}">
<p>${e.id}</p>
<a href="${e.url}" download>
<button>Download</button>
</a>
`

container.appendChild(card)

})

document.getElementById("zipBox").classList.remove("hidden")

}
