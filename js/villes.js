

function cleRelachee(evt,input,body,idVille,longitude,latitude,code){  
    evt.preventDefault();
 /*var id = document.querySelector("#test")*/
/*var body = document.querySelector("#body")*/
/*var idVille = document.querySelector("#idVille")*/
/*var longitude = document.querySelector("#longitude")
var latitude = document.querySelector("#latitude")
var code = document.querySelector("#code")*/

var teston = []
var artis = document.querySelector("#artisans")
var texte
body.style.display="block"


body.style.backgroundColor = "rgb(238, 232, 224)";
body.style.listStyle = "url(./assets/img/location.svg) inside ";




fetch('./getIdOfCity.php?recherche='+input.value) 
.then(function(response) {
    response.json().then( // Renvoie un tableau associatif manipulable par javascript (format json)
        function(themes) {
            body.innerHTML = ""
            
            console.log(themes)
                themes.forEach( function(idCity) {
          
                    
                    texte = document.createElement("li")
                    texte.style.padding="5px"
                    texte.style.cursor="pointer"
                    texte.className="villeUnique"
                   
                    texte.textContent = idCity.ville_nom + " " + "(" + idCity.ville_code_postal + ")"
                    texte.id = idCity.ville_id
                    texte.dataset.longitude = idCity.ville_longitude_deg
                    texte.dataset.latitude = idCity.ville_latitude_deg
                    texte.dataset.code = idCity.ville_code_postal
                    texte.style.width="271px"
                    
                    
                  body.appendChild(texte)
                  
            
                   })
            
             var li = document.querySelectorAll(".villeUnique")
             
             li.forEach(function(AllLi){
                
                 AllLi.onclick = function(){
                    
                    
                     input.value = AllLi.textContent
                     idVille.value = AllLi.id
                     longitude.value = AllLi.dataset.longitude
                     latitude.value = AllLi.dataset.latitude
                     code.value = AllLi.dataset.code
                    body.innerHTML = ""
                    
                 }
                 
                
                
             })
            
        })
    }) 
  
   var bod = document.querySelector("body")

    bod.onclick=function(){
         body.style.display="none"
        
     }

   

 }





 
