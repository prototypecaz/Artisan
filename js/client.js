var divClient = document.querySelector(".divControle1")
var divArtisans = document.querySelector(".divControle")
var divRecherche = document.querySelector(".divRecherche")

divClient.onclick = function(){
   divClient.style.backgroundColor="#16191b"
   divClient.style.color="white"
   divRecherche.style.display="none"
   divArtisans.style.backgroundColor="rgba(255, 255, 255, 0.699)"
   divArtisans.style.color="black"
}

divArtisans.onclick = function(){
    divArtisans.style.backgroundColor="#16191b"
    divArtisans.style.color="white"
    divRecherche.style.display="block"
    divClient.style.backgroundColor="rgba(255, 255, 255, 0.699)"
    divClient.style.color="black"
 }


 

