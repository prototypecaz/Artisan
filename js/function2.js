
function chargement(barreChargement,connect,btnCoIns,divBarre){
    var divBarreChargement = document.querySelector(divBarre)
    var chargement = document.querySelector(barreChargement)
    chargement.className="loader loader-quart"
    var connectionUsers = document.querySelector(connect)
    connectionUsers.className="d-none"
   var btnCoIns = document.querySelector(btnCoIns)
   btnCoIns.className="d-none"
   divBarreChargement.className="d-flex flex-column justify-content-center align-items-center h-100 "

    function disparition(){
      $("#myModalApparition").modal('hide')
      erreurEmail.textContent=""
      nonActiver.textContent=""
      erreurPassword.textContent=""
      chargement.className="d-none"
    }

    setTimeout(function(){
  
        divBarreChargement.className="d-none"
        /*var finChargement =  document.querySelector(divCharger)
        finChargement.className="d-flex flex-column justify-content-center align-items-center h-100"*/
       

      

        /*setTimeout(function(){
            disparition()
        },1600)*/
    },1000)
}

function reapparition(argu,connect,btnCoInsc,divCharger){

    setTimeout(function(){
      
        var connectionUsers = document.querySelector(connect)
        connectionUsers.className="row flex-column align-items-center"
        var btnCoIns = document.querySelector(btnCoInsc)
         btnCoIns.className="d-flex align-items-center flex-column mt-2"
        
         
       

        /*setTimeout(function(){
            disparition()
        },1600)*/
    },argu)
}


function anonymeConnection (email,password,erreurEmail,erreurPassword, nonActiver,barreChargement,connect,btnCoIns,divCharger,connectSucces,redirection,imgValide,divBarre,modalContenus){
    var t = 0
    var tabConnect = {0 : [email,/*document.querySelector("#errorUser")*/erreurEmail],
                      1 : [password, /*document.querySelector("#errorPassword")*/erreurPassword]}

      for(let i in tabConnect){
        tabConnect[i][1].textContent=""
        if(tabConnect[i][0].value == ""){
            tabConnect[i][1].textContent="*champs obligatoire"
        }else{
            t++
        }
      }
    if(t == 2){
        chargement(barreChargement,connect,btnCoIns,divBarre);
        
    fetch('./loginUser.php?emailUser='+email.value+'&passwordUser='+password.value).then(function(response) {
        response.text().then(function(reponse) {

            console.log(reponse)
            
            var finChargement =  document.querySelector(divCharger)
            var reponseConnexion = document.querySelector(connectSucces)
            var imgNonValide = document.querySelector(imgValide)
            var contenu = document.querySelector(modalContenus)
            
            
            switch(true){
              case (reponse == "emailInvalide" || reponse == "is not a valid email"):
                  reapparition(1000,connect,btnCoIns,divCharger);
                erreurEmail.textContent="Email invalide"
                nonActiver.textContent = ""
                erreurPassword.textContent=""
              break;
              case(reponse == "passwordInvalide"):
              reapparition(700,connect,btnCoIns,divCharger)
              erreurPassword.textContent="Mot de passe invalide"
                  erreurEmail.textContent=""
                  nonActiver.textContent=""
              break;
              case (reponse == "nonActiver"):
                setTimeout(function(){
                    imgNonValide.src="./assets/img/croixRefus.png"
                    reponseConnexion.style.textAlign="center"
                   reponseConnexion.textContent="Votre compte n'est pas activer, un lien a était envoyer dans votre boite mail."
                   reponseConnexion.style.fontSize="23px"
                   finChargement.className="d-flex flex-column justify-content-center align-items-center h-100"
                   
                   document.querySelector("#modalConnexionHeader").className="modal-dialog modal-lg"
                  /* setTimeout(function(){
                    window.location.replace("./");
                },4000)*/
                },700)
                
                fetch('./envoieMail.php').then(function(response) {
                    response.text().then(function(reponse) {

                    })})

              break;
            
              case(reponse == "#reussis"):
              setTimeout(function(){
                
               
                reponseConnexion.textContent="Connexion reussis !"
                reponseConnexion.style.fontSize="28px"
                finChargement.className="d-flex flex-column justify-content-center align-items-center h-100"
                
                document.querySelector("#modalConnexionHeader").className="modal-dialog modal-lg row"
                setTimeout(function(){
                   window.location.replace("./");
                },3000)
            },700)
              
              
              break;
              }
          }
           
            
            
        )
    })
  }
}



function connecteUser(emailUserInscriptionHeader,passwordUserInscriptionHeader,envoieReponse,nomUser,prenomUser,confirmPassword,erreurEmail,erreurPassword,erreurNomUser,erreurPrenomUser,erreurConfirmPassword,barreChargement,connect,btnCoIns,divCharger,connectSucces,redirection,imgValide,divBarre,modalContenu){
    
    
    
  var fetchTest = './registerUser.php?email='+emailUserInscriptionHeader.value+"&password="+passwordUserInscriptionHeader.value+"&nomUser="+nomUser.value+"&prenomUser="+prenomUser.value
              

      var s = 0
      var erreurInsscriptionHeader = {0 : [emailUserInscriptionHeader,erreurEmail],
                                      1 : [passwordUserInscriptionHeader,erreurPassword],
                                      2 : [nomUser,erreurNomUser],
                                      3 : [prenomUser,erreurPrenomUser],
                                      4 : [confirmPassword,erreurConfirmPassword]
                                     }

                                     for(let r in erreurInsscriptionHeader){
                                      erreurInsscriptionHeader[r][1].textContent=""
                                         if(erreurInsscriptionHeader[r][0].value == ""){
                                             erreurInsscriptionHeader[r][1].textContent="*champs obligatoire"
                                         }else{
                                             s++
                                         }
                                     }

                                     envoieReponse.textContent = ""

  if(s == 5){
    chargement(barreChargement,connect,btnCoIns,divBarre);
      fetch(fetchTest).then(function(response) {
          response.text().then(function(reponse) {

            
            
              var envoiReponse = document.querySelector(connectSucces)
              var finChargement =  document.querySelector(divCharger)
              var modalContenus = document.querySelector(modalContenu)
              var imgNonValide = document.querySelector(imgValide)
            
          switch(true){
              case(reponse == "is not a valid email"):
              reapparition(1000,connect,btnCoIns,divCharger)
              
              erreurEmail.textContent="Email invalide"
              break;
              case(reponse == "compteExistant"):
              setTimeout(function(){
                imgNonValide.src="./assets/img/croixRefus.png"
                envoiReponse.textContent="Ce compte existe deja, Connectez-vous"
                envoiReponse.style.fontSize="24px"
                  finChargement.className="d-flex flex-column justify-content-center align-items-center h-100"
                 
                setTimeout(function(){
                    window.location.replace("./");
                },3000)
            },1000)
                  
              break;
              case(reponse == "compteExistantNonActiver"):
              setTimeout(function(){
                imgNonValide.src="./assets/img/croixRefus.png"
                envoiReponse.style.textAlign="center"
                envoiReponse.style.fontSize="18px"
                envoiReponse.textContent="Ce compte existe deja, mais n'est pas activer. Un nouveau lien a était envoyer dans votre boite mail"
                finChargement.className="d-flex flex-column justify-content-center align-items-center h-100"
               
               
                setTimeout(function(){
                    window.location.replace("./");
                },3000)
            },1000)
            fetch('./envoieMail.php').then(function(response) {
                response.text().then(function(reponse) {

                })})
             
                 
              break;
              case(reponse == "confirmeInscription"):

              setTimeout(function(){
               
                envoiReponse.style.fontSize="22px"
                envoiReponse.textContent="Inscription reussis veuillez cliquez sur le lien envoyer dans votre boite mail"
                finChargement.className="d-flex flex-column justify-content-center align-items-center h-100"
               
                /*setTimeout(function(){
                    window.location.replace("./");
                },3000)*/
            },600)
             
                  fetch('./envoieMail.php').then(function(response) {
                    response.text().then(function(reponse) {

                    })})
              break;
              default: envoiReponse.textContent="" 
          }
              
              }
             
              
              
          )
      })
  }
  
 


}


function ajoutImage(testons,modalBody,files,divPhotoEnvoie,nombrePhotoMax){

    
    var valide = true
   
    
 
        
      testons.forEach(element => {

        if(element.name == files[0].name){
          valide = false
          console.log("reussisCOnd")
        }
        
       });
     
      
     if(valide & testons.length < nombrePhotoMax){
     
      
      document.querySelector("#photoMax").textContent=""
      
      var imgPhotoDiv = document.createElement("img")
      var photoDiv = document.createElement("div")
     
      var spanRetirer = document.createElement("span")
      spanRetirer.className=" spanRetirer"
      spanRetirer.style.cursor="pointer"
  
      
      var croixSpan = document.createElement("img")
      croixSpan.src="./assets/img/croix.png"
      croixSpan.className="croix"
      spanRetirer.appendChild(croixSpan)
      photoDiv.className="photoDiv mt-2"
      imgPhotoDiv.className="imgPhotoDiv "
      divPhotoEnvoie.appendChild(photoDiv)
      photoDiv.appendChild(imgPhotoDiv)
      photoDiv.appendChild(spanRetirer)


      var divPicture = document.createElement("div")
        
      divPicture.className="row align-items-start mx-1 mt-2 "
      var croixSpanModal = document.createElement("span")
      croixSpanModal.innerHTML = "&times;"
      croixSpanModal.style.cursor="pointer"
      croixSpanModal.className="ml-1 font-weight-normal"
      croixSpanModal.style.lineHeight="11px"
      croixSpanModal.style.fontSize="22px"
      var imgPhoto = document.createElement("img")
      function supprimerImage(boutton,test){
        boutton.onclick = function(){
         
          var index = testons.indexOf(test)
          
           testons.splice(index,1)
           
        
          this.parentNode.remove()
          photoDiv.remove()
          divPicture.remove()
        }
      }

      
      
       supprimerImage(spanRetirer,files[0])
      
       
        
       supprimerImage(croixSpanModal,files[0]);
       
       testons.push(files[0])

      
        
        imgPhoto.style.width="110px"
        imgPhoto.style.height="88px"
        imgPhoto.className = ""
        
        modalBody.appendChild(divPicture)
        divPicture.appendChild(imgPhoto)
        divPicture.appendChild(croixSpanModal)
        
      
      imgPhoto.onload = () => {
          URL.revokeObjectURL(imgPhoto.src);
          URL.revokeObjectURL(imgPhotoDiv.src);  // no longer needed, free memory
      }

      imgPhoto.src = URL.createObjectURL(files[0]); // set src to blob url
      imgPhotoDiv.src = URL.createObjectURL(files[0]); 

    }else{
      document.querySelector("#photoMax").textContent=" ("+nombrePhotoMax+" photo max)"
      document.querySelector("#photoMax").style.color="red"
    }
      
  }


  function hiddeModal(event){
    
    //document.querySelector("body").style.overflow="hidden"
    $("#exampleModal").modal('hide')
   

  }
    
  