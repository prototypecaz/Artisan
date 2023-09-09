
console.log("teste")

var iconeAffichage = document.querySelector("#affichageCompte")
var affichageDivCo = document.querySelector("#affichageDivCo")
var voirSociété = document.querySelector("#voirSociété")
var divBalayerOrigin = document.querySelector("#divBalayerOrigin")
var divApparitionBalayer = document.querySelector("#divApparitionBalayer")
var divApparitionBalayerAffichage = document.querySelector("#divApparitionBalayerAffichage")
var modeAffichage = document.querySelector("#modeAffichage")
var divDeconnexion = document.querySelector("#divDeconnexion")
var supprimezCompteUser = document.querySelector("#supprimezCompteUser")
var envoieMail = document.querySelector("#envoieMail")
var divEnvoieMail = document.querySelector("#modalEnvoieMail")
var btnEnvoieMail = document.querySelector("#btnEnvoieMail")
var objet = document.querySelector("#objet")
var message = document.querySelector("#message")
var confirmationDuMail = document.querySelector("#confirmationDuMail")
var retourAffichageCompte = document.querySelector("#retourAffichageCompte")
var retourAffichageCompte2 = document.querySelector("#retourAffichageCompte2")
var radio = document.querySelectorAll(".radio")

function valeurVide(element){
        if(element.value == ""){
            element.style.border = "2px solid red"
            return true
        }
}


if(affichageDivCo !== null){

    iconeAffichage.onclick = function(){
        divBalayerOrigin.style.display="block"
        divBalayerOrigin.style.opacity="1"
        divApparitionBalayer.style.display="none"
        divApparitionBalayerAffichage.style.display = "none"
    }
    
    window.onclick = function(evt){

        


        if(affichageDivCo.contains(evt.target) || evt.target == iconeAffichage){
          
    affichageDivCo.className="bg-white  p-3 position-absolute"
    affichageDivCo.style.width="316.25px"
    affichageDivCo.style.border = "2px solid #e4e6eb"
            if(envoieMail.contains(evt.target)){
                    affichageDivCo.className="d-none"
                    objet.value = ""
                    objet.style.border="1px solid grey"
                    message.value = ""
                    message.style.border="1px solid grey"

                $("#modalEnvoieMail").modal()
             }
    
 }

 
        else{
            affichageDivCo.className="d-none"
        }
    }
}


function clickAffichage(btn,div,apparitionDiv,boolean){
    btn.onclick = function(){

        let tl = new TimelineMax();
       
        /*if(boolean){
        
       
        tl
            
            .to(div, 1, { opacity: 0, x: -30, ease: Expo.easeInOut,clearProps: true,})
           
         
            setTimeout(function(){ div.className="d-none"
            tl. fromTo (apparitionDiv , { x : 50, opacity:0 }, {x:0, opacity: 1, ease: Expo.easeInOut},"-=0.6")
            
            apparitionDiv.className="d-block" }, 500);
        }else{

            tl.to(div, 1, { opacity: 0, x: 30, ease: Expo.easeInOut,clearProps: true})
           
         
            setTimeout(function(){ div.className="d-none"
            tl. fromTo (apparitionDiv , { x : -50, opacity:0 }, {x:0, opacity: 1, ease: Expo.easeInOut},"-=0.6")
            
            apparitionDiv.className="d-block" }, 500);

        }*/


         
        if(boolean){
        
       
            tl
            
            .to(div, 0.3, { opacity: 0, x: -30, ease: Expo.easeInOut,display:"none",clearProps:'x'})
         
            tl. fromTo (apparitionDiv , { x : 50, opacity:0 }, {x:0, opacity: 1, display:"block"},"-=0.01")
        }else{

         
            tl
            
            .to(div, 0.3, { opacity: 0, x: 30, ease: Expo.easeInOut,display:"none"})
            tl. fromTo (apparitionDiv , { x : -50, opacity:0 }, {x:0, opacity: 1, display:"block"},"-=0.01")

        }
    
    }
}


clickAffichage(voirSociété,divBalayerOrigin,divApparitionBalayer,true)
clickAffichage(modeAffichage,divBalayerOrigin,divApparitionBalayerAffichage,true)
clickAffichage(retourAffichageCompte,divApparitionBalayer,divBalayerOrigin,false)
clickAffichage(retourAffichageCompte2,divApparitionBalayerAffichage,divBalayerOrigin,false)


// Déconnexion

function suppressionDeconnexion(btn,donnee,confirmation){
    btn.onclick = function(){
        if(donnee == "supprimeCompte"){
            if(confirm("etes vs sur")){
                confirmation = true
            }
        }

        if(confirmation == true){
          
        fetch('./deconnexion.php?donnee='+donnee).then(function(response) {
            response.text().then(function(reponse) {
               
                    window.location.reload()
               
                
            })})
        }
    }
}

suppressionDeconnexion(divDeconnexion,"deconnexion",true)
suppressionDeconnexion(supprimezCompteUser,"supprimeCompte")





btnEnvoieMail.onclick = function(event){

    if(valeurVide(objet) || valeurVide(message)){
        
    }else{

    $("#modalEnvoieMail").modal('hide')
    let tl = new TimelineMax();

    tl.from('#confirmationDuMail', 2, {bottom: "-10%", opacity: 1, ease: Expo.easeInOut}, '-=1')
    confirmationDuMail.className="bg-dark position-relative  position-absolute d-flex align-items-center justify-content-center"

    fetch('./envoieMail.php?objetMail='+objet.value+'&messageMail='+message.value).then(function(response) {
        response.text().then(function(reponse) {
            
        })})

        setTimeout(function(){
            confirmationDuMail.className="d-none"
        }, 6000);

    }

    document.querySelector("#closeInfoMail").onclick = function(){
        confirmationDuMail.className="d-none"
    }
    
}


radio.forEach(element => {
    element.onclick = function(){
            
        fetch('./design.php?radio='+element.value).then(function(response) {
            response.json().then(function(reponse) {
               
                var lettreTitre = document.querySelectorAll(".lettreTitre")
                var bouttonRecherche = document.querySelector("#boutton")
                bouttonRecherche.style.backgroundColor = reponse[0].color
                 lettreTitre.forEach(element => {
                    element.style.color = reponse[0].color
                 })
                
                    var backgroundImg = document.querySelector("header")
                   
                    backgroundImg.style.backgroundImage = "url("+reponse[0].background+")"
                    console.log(backgroundImg.backgroundImage)

               
                
            })})
    }
})