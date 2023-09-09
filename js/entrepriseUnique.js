$(function(){
    $('.starsSociete').stars();
});


var imgPhotoChantier = document.querySelectorAll(".imgPhotoChantier ")
var idPhotoChantier = document.querySelector("#idPhotoChantier")
var tabPhotoChantier = []
var btnModalPhotoAvisClient = document.querySelectorAll(".btnModalPhotoAvisClient")

var btnDelete = document.querySelectorAll(".deleteCommentaire")


btnDelete.forEach(element => {
    element.onclick = function(){
        console.log(element.value)
        console.log()
      console.log(element.dataset.avis)
        fetch("./deleteCommentaire.php?deleteCommentaire="+element.value+"&modificationAvis="+element.dataset.avis+"&deleteIdEntreprise="+element.dataset.entreprise) 
        .then(function(response) {
            response.text().then( // Renvoie un tableau associatif manipulable par javascript (format json)
                function(themes) {
                   
                  if(themes == "suppressionReussis"){
                      element.parentNode.parentNode.remove()
                  }
                      
                });
                            
                           })
    }
});


imgPhotoChantier.forEach(element => {
    tabPhotoChantier.push(element.src)
    element.onclick=function(){
          
        $(".carouselIndicatorsSociete").carousel(tabPhotoChantier.indexOf(this.src));

        $("#ModalPhotoChantier").modal();
       // idPhotoChantier.src=this.src
    
        /*var deletetab = tabPhotoChantier.indexOf(this.src)
        tabPhotoChantier.splice(deletetab,1)*/
       
    }
});





    
var ol = document.querySelector(".carouselIndicSociete")
       var i = 1
        tabPhotoChantier.forEach(element => {
           
            var li = document.createElement('li')
            li.setAttribute("data-target","#carouselExampleIndicators")
            li.setAttribute("data-slide-to",i++)
            
            ol.appendChild(li)
            var divInterieurCarrousel = document.querySelector(".carouselInnerSociete")
            var divCarrousel = document.createElement('div')
            divCarrousel.className="carousel-item"
            var imgPhotoCarrousel = document.createElement('img')
            imgPhotoCarrousel.src=element
            imgPhotoCarrousel.className="w-100 "
            imgPhotoCarrousel.style.height="35em"
            divInterieurCarrousel.appendChild(divCarrousel)
            divCarrousel.appendChild(imgPhotoCarrousel)
        });



 if(document.querySelector(".carouselInnerSociete").firstElementChild != null){
document.querySelector(".carouselInnerSociete").firstElementChild.className="carousel-item active"}


btnModalPhotoAvisClient.forEach(element => {
    element.onclick = function(){

        $("#modalPhotoAvisClient").modal("show");
        var divTitreCommentaireModal = document.querySelector(".divTitreCommentaireModal")
        divTitreCommentaireModal.textContent=""
        var carouselInnerAvis = document.querySelector(".carouselInnerAvis")
        carouselInnerAvis.textContent = ""
        var parent = this.parentElement.lastElementChild
        console.log(document.querySelector("#photoAvis"))
        var tabPhoto = parent.getAttribute("data").split(",")
       var icone = document.createElement("i")
       icone.className="fas fa-quote-right text-right d-block mt-3 "
       icone.style.fontSize="30px"
        var commentaire = document.createElement('p')
        
        commentaire.textContent = parent.getAttribute("data-commentaire")
        commentaire.className="retourLigne mt-3 px-4"
        commentaire.style.width="100%"
        commentaire.style.fontFamily="taFont4"
        
        divTitreCommentaireModal.appendChild(icone)
        divTitreCommentaireModal.appendChild(commentaire)

        tabPhoto.forEach(element => {
            var divCarrouselItem = document.createElement('div')
            divCarrouselItem.className="carousel-item"
            var imgModalAvis = document.createElement('img')
            imgModalAvis.src="./assets/img"+element
            imgModalAvis.className="w-100 rounded-left"
            imgModalAvis.style.height="34.9em"
            
            carouselInnerAvis.appendChild(divCarrouselItem)
            divCarrouselItem.appendChild(imgModalAvis)
        });
        if(document.querySelector(".carouselInnerAvis").firstElementChild != null){
            document.querySelector(".carouselInnerAvis").firstElementChild.className="carousel-item active"}
        
    }
});


var btnVoteAvisUnique = document.querySelector(".btnVoteAvisUnique")

var sectionCommentaireUnique  = document.createElement("section")
          sectionCommentaireUnique.style.display="none"
          sectionCommentaireUnique.className=" sectionVote "
          document.querySelector("#blockEntrepriseUnique").appendChild(sectionCommentaireUnique)

btnVoteAvisUnique.onclick = function(){
    
   

    var modalBody = document.querySelector(".picture2")
    modalBody.textContent=""

    document.querySelector("body").style.overflow="hidden"
    var containerDiv = document.createElement("div")
    var divValeur = document.createElement("div")

    anime({
      targets: containerDiv,
      width: '700px', // -> from '28px' to '100%',
      duration:1500
    });

    var divEtoile = document.createElement("div")
    var divTitreAvis = document.createElement("div")
    var divPhoto = document.createElement("div")
    var divTitreChamps = document.createElement("div")
    var divAvisChamps = document.createElement("div")
    var divNoteChamps = document.createElement("div")
    var nomSite = document.createElement("h1")
    nomSite.textContent="Minut'Reno"
    nomSite.className="font-weight-bold  nomSite mt-4 text-center"
    divNoteChamps.className="d-flex align-items-center justify-content-between noteChamp "
    divAvisChamps.className="d-flex align-items-center justify-content-between"
    divTitreChamps.className="d-flex align-items-center justify-content-between"
    divPhoto.className="mt-4 divPhoto w-100 "
    var titrePhoto = document.createElement("h6")
    titrePhoto.className="font-weight-bold text-muted awesomeCommentaire"
    titrePhoto.style.marginLeft="93px"
    titrePhoto.innerHTML="&#xf03e;&emsp;Vous avez des photos à partager ? (facultatif)"
    var btnPhoto = document.createElement("btn")
    btnPhoto.className="btn btn-success font-weight-bold"
    btnPhoto.style.marginLeft="93px"
    btnPhoto.textContent="Ajouter des photos"
    var divAvis = document.createElement("div")
    divAvis.className="divTitreAvis"
    divTitreAvis.className="my-4 divTitreAvis"
    var titreAvis = document.createElement("h6")
    titreAvis.innerHTML="&#xf044;&emsp;Titre de votre avis"
    titreAvis.className="font-weight-bold text-muted awesomeCommentaire"
    var inputAvis = document.createElement("input")
    inputAvis.className="w-100 inputAvis rounded"
    var titreEtoile = document.createElement("h6")
    titreEtoile.className="mb-0  font-weight-bold text-muted awesomeCommentaire"
    titreEtoile.innerHTML="&#xf08d;&emsp;Votre note pour la société "
    divEtoile.className=" rating2 w-100 "
    divValeur.className="row flex-column align-items-center justify-content-start position-relative h-100  containerDivValeur"
    divValeur.id="divValeur"
    var texte = document.createElement("textarea")
    texte.className="w-100 inputCommentaire rounded"
    texte.style.height="118px"
    var titreTexte = document.createElement("h6")
    titreTexte.innerHTML="&#xf10e;&emsp;Votre avis"
    titreTexte.className="text-muted font-weight-bold awesomeCommentaire"
    var manqueAvis1 = document.createElement("p")
    manqueAvis1.className="mb-0 champs"
    var manqueAvis2 = document.createElement("p")
    manqueAvis2.className="mb-0 champs "
    var manqueAvis3 = document.createElement("p")
    manqueAvis3.className="mb-0 champs "
    var croixVote = document.createElement("span")
    croixVote.innerHTML="&times;"
    croixVote.className="position-absolute croixVote "
    croixVote.style.fontSize="35px"
    croixVote.style.cursor="pointer"
    var divChargementAvis = document.createElement("div")
    divChargementAvis.id="divChargementAvis"
    divChargementAvis.className="d-none"
    var barreChargementAvis = document.createElement("span")
    barreChargementAvis.className="d-none"
    barreChargementAvis.id="barreChargementAvis"
    var connectSuccessAvis = document.createElement("span")
    connectSuccessAvis.id="connectSuccessAvis"
    connectSuccessAvis.className="informationConnexion mt-5"
    connectSuccessAvis.textContent="Votre commentaire a était inscrit avec succés !"
    connectSuccessAvis.style.fontSize="27px"
    var retourChargement = document.createElement("div")
    var imgValide = document.createElement('img')
    imgValide.src="./assets/img/valide.png"
    imgValide.className="imgValide"
    retourChargement.id="retourChargement"
    retourChargement.className="d-none"
    containerDiv.className="divValeur"
    containerDiv.id="containerDiv"
    var rassembleLogoSuccess = document.createElement("div")
    rassembleLogoSuccess.className="d-flex flex-column h-75 justify-content-center align-items-center"
    sectionCommentaireUnique.appendChild(containerDiv)
    containerDiv.appendChild(nomSite)
    containerDiv.appendChild(divValeur)
    containerDiv.appendChild(divChargementAvis)
    containerDiv.appendChild(retourChargement)
    divValeur.appendChild(croixVote)
    divValeur.appendChild(divNoteChamps)
    divChargementAvis.appendChild(barreChargementAvis)
    retourChargement.appendChild(rassembleLogoSuccess)
    rassembleLogoSuccess.appendChild(imgValide)
    rassembleLogoSuccess.appendChild(connectSuccessAvis)
    divNoteChamps.appendChild(titreEtoile)
    divNoteChamps.appendChild(manqueAvis1)

    function fermeModal(){
      anime({
        targets: containerDiv,
        translateX: 700,
        easing: 'easeInOutExpo'
      });

      setTimeout(function(){ sectionCommentaireUnique.style.display="none"
      containerDiv.remove()
      document.querySelector("body").style.overflow=""
        }, 790);
    }

    tab.push(containerDiv)

    croixVote.onclick = function(){
      fermeModal();
    }

    window.onclick = function(event) {
      if (event.target == sectionCommentaireUnique) {
        fermeModal();
      }
    } 
    
    var i2 = 5
    for(var i =1; i < 6; i++){
  
      var inputValeur = document.createElement("a")
      inputValeur.textContent="☆"
      inputValeur.className="valeur "+"test"+i2
      inputValeur.setAttribute("note",i)
      inputValeur.value=i
      inputValeur.style.cursor="pointer"

      if(i == 1){
        inputValeur.style.marginLeft="91px"
      }
    
      divValeur.appendChild(divEtoile)
      divEtoile.appendChild(inputValeur)
      
    }


    divValeur.appendChild(divTitreAvis)
    divTitreAvis.appendChild(divTitreChamps)
    divTitreChamps.appendChild(titreAvis)
    divTitreChamps.appendChild(manqueAvis2)
    divTitreAvis.appendChild(inputAvis)
    divValeur.appendChild(divAvis)
    divAvis.appendChild(divAvisChamps)
    divAvisChamps.appendChild(titreTexte)
    divAvisChamps.appendChild(manqueAvis3)
    divAvis.appendChild(texte)
    divValeur.appendChild(divPhoto)
    divPhoto.appendChild(titrePhoto)
    divPhoto.appendChild(btnPhoto)
    var divPhotoEnvoie = document.createElement("div")
    divPhotoEnvoie.className="divPhotoEnvoie mt-2 d-flex"
    divValeur.appendChild(divPhotoEnvoie)
    var buttonAvis = document.createElement("button")
    buttonAvis.className="envoieAvis btn btn-info w-25 mt-5 mb-3 font-weight-bold mx-auto"
    buttonAvis.type="submit"
    buttonAvis.textContent="Envoyer"
  
    divValeur.appendChild(buttonAvis)
    sectionCommentaireUnique.style.display="block"
    var etoile = []
    var inputValeurAll = document.querySelectorAll(".valeur")
    var canon
    inputValeurAll.forEach(inputValeurUni => {

      inputValeurUni.onclick = function(){
        tyty = inputValeurUni.getAttribute("note")
        canon = "test"
        etoile = []

        for(var i =1; i <= inputValeurUni.getAttribute("note"); i++){
          etoile.push(".test"+i)
        }

        var aretenir = inputValeurUni.parentNode
        aretenir.childNodes.forEach(element => {
          element.style.color="#aaa"
        });

        for(var l = 0; l < inputValeurUni.getAttribute("note"); l++){
          aretenir.childNodes[l].style.color = "orange"
        }

        for(var i = inputValeurUni.getAttribute("note"); i < 5; i++){

          aretenir.childNodes[i].addEventListener("mouseout", function( event ) {
        
            for(var y = tyty; y < 5; y++){
              aretenir.childNodes[y].style.color="#aaa"
            }

          })
      
          aretenir.childNodes[i].addEventListener("mouseover", function( event ) {
          
            for(var y = 0; y < event.target.getAttribute("note"); y++){
              aretenir.childNodes[y].style.color="orange"
            }
          })
        }
      }

      inputValeurUni.addEventListener("mouseout", function( event ) {
  
        if(canon !== "test"){
          var concon = inputValeurUni.parentNode
    
          concon.childNodes.forEach(element => {
            element.style.color="#aaa"
          });
        }
      })

      inputValeurUni.addEventListener("mouseover", function( event ) {

        if(canon !== "test"){
          var concon = inputValeurUni.parentNode
          concon.childNodes.forEach(element => {
            element.style.color="#aaa"
          });

          for(var l = 0; l < inputValeurUni.getAttribute("note"); l++){
            concon.childNodes[l].style.color = "orange"
          }
        }
      })
    })

    var testons = []
  
    btnPhoto.onclick= function(){
    
      $("#exampleModal").modal();
      var inputImg = document.querySelector("#imageTest")

      inputImg.onchange=function(){
        ajoutImage(testons,modalBody,this.files,divPhotoEnvoie,8);
      }
    }

    buttonAvis.onclick = function(){
      
      fetch('./insertAvis.php').then(function(response) {
        response.text().then(function(reponse) {

          if(reponse == "#connection"){
            $("#myModalApparition").modal();
          }
          else{
            var p = 0
            var erreur = {
                        0:[etoile,manqueAvis1],
                        1:[inputAvis,manqueAvis2],
                        2:[texte,manqueAvis3]
                      }

            for(let i in erreur){
              erreur[i][1].textContent = ""
                          
              if(erreur[i][0].value == "" || erreur[i][0].length <= 0){
                erreur[i][1].textContent = "*champs obligatoire"
                              
              }
              else{
                p++
              }
            }
    
            if(p == 3){
              const formData = new FormData()
  
              for (var x = 0; x < testons.length; x++) {
                formData.append('myFile[]', testons[x]);
              }
  
              var modificationSocieteId = document.querySelector("#modificationSocieteId")
              
              chargement("#barreChargementAvis","#divValeur","#divValeur","#divChargementAvis")
              fetch('./insertAvis.php?idEntreprise='+modificationSocieteId.value+"&valeur="+etoile.length+"&titre="+inputAvis.value+"&commentaire="+texte.value,{
                method: 'POST',
                body: formData
              }).then(function(response) {
                  response.text().then(function(retour) {

                    if(retour == ""){
                      document.querySelector("#retourChargement").className="d-flex flex-column align-items-center h-100"
                    }
                  })
                })
            }
          }
        })
      })
    }
}