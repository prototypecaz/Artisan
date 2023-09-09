var modifDescription = document.querySelector("#modifDescription")
var changeLogo = document.querySelector(".changeLogo")
var modificationThree = document.querySelector("#modificationThree")
var ajoutPhotoSocieteUnique = document.querySelector("#ajoutPhotoSocieteUnique")
var tableauImg = []
var confirmation = document.createElement("button")
var annulation = document.createElement("button")
var divConfirmation = document.createElement("div")


modifDescription.onclick = function(){
   var descriptionSociete = document.querySelector(".pDescriptionSociete")
   
   var formulaireModifDescription = document.querySelector("#formulaireModifDescription")
   divConfirmation.className="text-right d-block"
   confirmation.textContent="Modifier"
   confirmation.type="submit"
   confirmation.className="mr-1 mt-4 btn btn-info font-weight-bold"
   annulation.textContent = "Annuler"
   annulation.className="mt-4 mr-1 btn btn-secondary font-weight-bold"
   
   var inputModifDescription = document.querySelector("#inputModifDescription")
   inputModifDescription.type="text"
   inputModifDescription.style.minHeight="64px"
   inputModifDescription.style.width = descriptionSociete.offsetWidth + "px"
   inputModifDescription.style.height=descriptionSociete.offsetHeight+10 + "px"
   inputModifDescription.value = descriptionSociete.textContent
   inputModifDescription.style.overflowY="hidden"
   inputModifDescription.id="inputModifDescription"
   inputModifDescription.oninput = function(){
      this.style.height = 'auto';
      this.style.height = this.scrollHeight+'px';
      
   }

   descriptionSociete.className="pDescriptionSociete d-none"
   inputModifDescription.className="d-block "
   formulaireModifDescription.appendChild(divConfirmation)
   divConfirmation.append(annulation)

   divConfirmation.append(confirmation)
  
   confirmation.onclick = function(event){
      
    if(inputModifDescription.value == ""){
      inputModifDescription.style.border="2px solid red"
      event.preventDefault();
      console.log(inputModifDescription.value)
    }
   }

   confirmation.addEventListener('mousedown', e => {
      inputModifDescription.style.border="2px solid rgb(175, 175, 175)"
       });
   
   annulation.onclick = function(event){
      event.preventDefault();
      //console.log(descriptionSociete.textContent)
      descriptionSociete.className="pDescriptionSociete d-block"
      inputModifDescription.className="d-none"
      divConfirmation.className="text-right d-none"
   }
}

var p = -1
ajoutPhotoSocieteUnique.onclick = function(){

  

   var avoir = document.querySelectorAll(".imageAModifier")


avoir.forEach(element => {
   fetch(element.src)
   .then((res) => res.blob())
   .then((myBlob) => {
     
     myBlob.name = element.src;
myBlob.lastModified = new Date();
const myFile = new File([myBlob], element.src, {
   type: myBlob.type,
 });
 
 if(p < 1){
 tableauImg.push(myFile)}



 element.parentElement.lastElementChild.onclick = function(){
   var index = tableauImg.indexOf(myFile)
   tableauImg.splice(index,1)
    this.parentElement.remove()
 }

   });

});
  
p++
$("#modalModificationPhoto").modal();

   
   
   var divAjoutDimage = document.querySelector("#picture")
   var imageModificationUnique = document.querySelector("#imageModificationUnique")

   var spanSupprimerAll = document.querySelectorAll(".modificationX")
   
  

   imageModificationUnique.onchange = function(){
      //var photoPartager = document.querySelector("#photoPartager")
      /*var imgPhotoPartager = document.createElement("img")
      imgPhotoPartager.className="col-2 p-3 ml-3 imgPhotoChantier rounded mb-3"
      imgPhotoPartager.src=URL.createObjectURL(this.files[0]);*/
      
      //photoPartager.appendChild(imgPhotoPartager)
      var spanSupprimer = document.createElement("span")
      var valide = true
     
      
      const words = ['.jpg', '.jpeg', '.gif', '.png', '.bmp'];

      
     
      
         
         spanSupprimer.onclick = function(){
            
            var index = tableauImg.indexOf(tuile)
            
         tableauImg.splice(index,1)
            this.parentElement.remove()
            
         }
       
         tableauImg.forEach(element => {
           
            for(var i =0; i < words.length; i++){
            if(element.name.slice(52,-68)+words[i] == this.files[0].name || element.name == this.files[0].name){
              valide = false
              console.log("reussisCOnd")
            }}
            
           });

           console.log(tableauImg.length)
           console.log(tableauImg)

         if(tableauImg.length < 10 && valide){
            tableauImg.push(this.files[0])
            var tuile = this.files[0]
             var divCompleteImage = document.createElement("div")
             divCompleteImage.className="row align-items-start mx-1 mt-2 "
             divCompleteImage.id="divAjoutDimage"
             
            
             spanSupprimer.className="ml-1 font-weight-normal modificationX"
             spanSupprimer.textContent="×"
             var ajoutImageModifier = document.createElement("img")
             ajoutImageModifier.className="imageAModifier"
             ajoutImageModifier.style.width="110px"
             ajoutImageModifier.style.height="88px"
             ajoutImageModifier.src= URL.createObjectURL(this.files[0]); 
             divAjoutDimage.appendChild(divCompleteImage)
             divCompleteImage.appendChild(ajoutImageModifier)
             divCompleteImage.appendChild(spanSupprimer)
            
             }else if(tableauImg.length == 10){
               document.querySelector("#photoMax").textContent=" ("+10+" photo max)"
               document.querySelector("#photoMax").style.color="red"
             }

      
   }

   
   

  var validationImageModifier = document.querySelector("#validationImageModifier")
  validationImageModifier.onclick = function(){

   if(tableauImg.length <= 10){
   $('#modalModificationPhoto').modal('hide')
   const formData = new FormData()
   if(tableauImg.length > 0){
   for (var x = 0; x < tableauImg.length; x++) {
     formData.append('myFileee[]', tableauImg[x]);
   }}else{
     
      formData.append('tableauVide', 'tableauVide');
   }

   
   fetch('./modificationSociete.php?modificationSocieteId=' + document.querySelector("#modificationSocieteId").value,{
     method: 'POST',
     body: formData
   }).then(function(response) {
       response.text().then(function(retour) {
         
         setTimeout(function(){ document.location.reload() }, 330);
               
         
            
       })})

  }else if(tableauImg.length == 10){
   document.querySelector("#photoMax").textContent=" ("+10+" photo max)"
   document.querySelector("#photoMax").style.color="red"
 }
}
   
   
}

changeLogo.onchange = function(){
   console.log(document.querySelector("#modificationSocieteId").value)
   const formData = new FormData()
   formData.append('myFileChangeLogo',changeLogo.files[0])
   fetch('./modificationSociete.php?modificationSocieteId=' + document.querySelector("#modificationSocieteId").value,{
      method: 'POST',
      body: formData
    }).then(function(response) {
      response.text().then(function(reponse) {
         if(reponse == "reussis"){
            document.location.reload();
         }
      })})

}



modificationThree.onclick = function(){

   document.onclick = function(evt){

      if(document.querySelector("#listModification").contains(evt.target) || !document.querySelector("#contenusDiv").contains(evt.target)){
        document.querySelector("#listModification").className="d-none"
        
      }else{
        console.log("test non reussis")
       
        
      }

 

      if(arrowMetier.contains(evt.target)){
         arrowMetier.style.boxShadow="#23aaf2 0px 1px 4px, #23aaf2 0px 0px 0px 3px"
         arrowMetier.style.border="none"
         returnArrowMetier.className=" position-absolute d-block pl-3 "
         returnArrowMetier.style.zIndex="2"
       }
       else{
         returnArrowMetier.className="d-none"
         arrowMetier.style.boxShadow=""
       }
   }

   var listReseauModification = document.querySelector("#listReseauModification")
   listReseauModification.className="d-none"
   listReseauModification.style.backgroundColor="#e2e6eb"
   var listModification = document.querySelector("#listModification")
   listModification.className="text-left p-1 position-absolute  mx-auto d-block"
   listModification.style.backgroundColor="#e2e6eb"

   var modificationTitreSociete = document.querySelector("#modificationTitreSociete")
   var modificationMetierSociete = document.querySelector("#modificationMetierSociete")
   var modificationDateDeCreationSociete = document.querySelector("#modificationDateDeCreationSociete")
   var modificationInstagramSociete = document.querySelector("#modificationInstagramSociete")

   modificationTitreSociete.onclick = function(){
      var titreUniqueSociete = document.querySelector("#titreUniqueSociete")
      titreUniqueSociete.className="d-none"
      var inputModifTitre = document.querySelector("#inputModifTitre")
      inputModifTitre.className="d-block"
      inputModifTitre.value = titreUniqueSociete.textContent

      inputModifTitre.onchange = function(){
         titreUniqueSociete.textContent = inputModifTitre.value
         titreUniqueSociete.className="d-block font-weight-bold text-dark text-uppercase  my-auto"
         inputModifTitre.className="d-none"

         fetch('./modificationSociete.php?modificationSocieteId=' + document.querySelector("#modificationSocieteId").value+'&modificationTitreSociete='+inputModifTitre.value,{
            }).then(function(response) {
            response.text().then(function(reponse) {

            })})
      }
     
   
   }

   modificationMetierSociete.onclick = function(){
      var selecMetierSocieteModif = document.querySelector("#selecMetierSocieteModif")
      selecMetierSocieteModif.className="col-3 p-0 mx-auto d-block mt-4"
      var metierSocieteUnique = document.querySelector("#metierSocieteUnique")
      metierSocieteUnique.className="d-none"
      /*document.querySelector("#inputRechercheSocieteUnique").onclick = function(){
      
         
         document.querySelector("#returnArrowMetierSocieteUnique").className="d-block"
      }*/
      var listeMetier = document.querySelectorAll(".metierValue")
      listeMetier.forEach(element => {
         element.onclick = function(){
            fetch('./modificationSociete.php?modificationSocieteId=' + document.querySelector("#modificationSocieteId").value+"&modificationMetierId="+this.value,{
            }).then(function(response) {
            response.text().then(function(reponse) {

            })})
            metierSocieteUnique.textContent = this.textContent
            selecMetierSocieteModif.className="d-none"
            metierSocieteUnique.className="mt-4 text-uppercase font-weight-bold"
         }
      });
   }

   modificationInstagramSociete.onclick = function(){
      
      listReseauModification.className="text-left p-3 position-absolute  mx-auto d-block"
      listModification.className="d-none"

      var inputModifSite = document.querySelector("#inputModifSite")
      var inputModifInsta = document.querySelector("#inputModifInsta")
      var inputModifPinterest = document.querySelector("#inputModifPinterest")
      var inputModifTwitter = document.querySelector("#inputModifTwitter")
      var modificationReseauSociaux = document.querySelector("#modificationReseauSociaux")
      var annulationModifReseau = document.querySelector("#annulationModifReseau")

      annulationModifReseau.onclick = function(){
         listReseauModification.className="d-none"
        // listModification.className="text-left p-1 position-absolute  mx-auto d-block"
      }

      modificationReseauSociaux.onclick = function(){
         var barreChargementSuspension = document.querySelector("#barreChargementSuspension");
         barreChargementSuspension.className=" h-100 d-flex align-items-center justify-content-center"
         var listReseauModifierDiv2 = document.querySelector("#listReseauModifierDiv2")
         listReseauModifierDiv2.className="d-none"
         fetch('./modificationSociete.php?modificationSiteWeb=' + inputModifSite.value+"&modificationInstagram="+inputModifInsta.value+"&modificationPinterest="+inputModifPinterest.value+"&modificationTwitter="+inputModifTwitter.value+"&modificationSocieteId="+ document.querySelector("#modificationSocieteId").value,{
         }).then(function(response) {
         response.text().then(function(reponse) {

            if(reponse == "reussis"){
               setTimeout(function(){
                  barreChargementSuspension.className="d-none"
                  var modificationEnregistrer = document.querySelector('#modificationEnregistrer')
                  modificationEnregistrer.className="d-flex flex-column justify-content-center align-items-center h-100"
               },1200)

               setTimeout(function(){
                  document.location.reload()
               },1700)

              
            }
         })})
      }

   }

   modificationDateDeCreationSociete.onclick = function(){
      console.log(this.parentElement)
      var dateDeCreation = document.querySelector("#dateDeCreation")
      dateDeCreation.innerHTML= "Date de création de l'entreprise:<input id='modificationDateDeCreation' type=date class='ml-2'>"
      document.querySelector("#modificationDateDeCreation").addEventListener('blur', function(){
         var date = new Date(this.value)
         
         dateDeCreation.textContent = "Date de création de l'entreprise:"+" "+ date.toLocaleDateString()
         fetch('./modificationSociete.php?modificationSocieteId=' + document.querySelector("#modificationSocieteId").value+"&modificationDateDeCreation="+this.value,{
         }).then(function(response) {
         response.text().then(function(reponse) {

         })})
      }
   )}
}


