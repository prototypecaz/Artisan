



var span = document.querySelectorAll(".valeur");
var valeur = []
var hash = document.location.hash
var envoieAvis= document.querySelector(".envoieAvis")





var idEntreprise = document.querySelector(".idEntreprise")

idEntreprise.value = hash



  






/*span.forEach(element => {
    element.onclick = function(){
        valeur = []
        valeur.push(element.id)
       
        envoieAvis.onclick = function(){
            fetch("./insertAvis.php?note="+valeur[0]) 
        .then(function(response) {
            response.json().then( // Renvoie un tableau associatif manipulable par javascript (format json)
                function(themes) {
                   
                      
                });
                            
                           })
        }
    }
}
)*/


