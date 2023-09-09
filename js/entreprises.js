var boutton = document.querySelector("#boutton");
var longitude = document.querySelector("#longitude");
var latitude = document.querySelector("#latitude");
var code = document.querySelector("#code")
var metier = document.querySelector("#metier");
var artisans = document.querySelector("#artisans");
var body = document.querySelector("#body")
var rayon = document.querySelector("#rayon")
var connect = document.querySelector("#connect")
var arrowMetier = document.querySelector(".arrowMetier")
var header = document.querySelector("header")
var tyty
var tab = []
var metierValue = document.querySelectorAll(".metierValue")
var i = 1
var saisirMetier = document.querySelector(".metierSaisi")

function apparitionBoutton (boutton,reponseAuBoutton ){
  console.log(boutton)
  if(reponseAuBoutton == ""){
    boutton.textContent= "Non renseigné"
  }else{
    boutton.textContent = reponseAuBoutton
  }
}
/*siteWeb.onclick = function(){apparitionBoutton(siteWeb,element.siteWeb)}
phone.onclick = function(){apparitionBoutton(phone,element.telephone)};
email.onclick = function(){apparitionBoutton(email,element.email)}*/
var returnArrowMetier= document.querySelector("#returnArrowMetier")
var divRayonSaisi = document.querySelector(".rayonSaisi")
var divRayonReturn = document.querySelector("#divRayonReturn")

/*Cacher div en cliquant en dehors*/
document.onclick = function(evt){

  /*if(document.querySelector("#listModification").contains(evt.target) || !document.querySelector("#contenusDiv").contains(evt.target)){
    document.querySelector("#listModification").className="d-none"
  }else{
    console.log("test non reussis")
    
  }*/
  /* Vérifier si l'element cliquer est égal a la div ArrowMetier et a c'est enfants et leurs enfants */


  
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
  
  if(divRayonSaisi.contains(evt.target)){
    divRayonSaisi.style.boxShadow="#23aaf2 0px 1px 4px, #23aaf2 0px 0px 0px 3px"
    divRayonReturn.className=" position-absolute d-block px-4 "
  }
  else{
    divRayonSaisi.style.boxShadow=""
    divRayonReturn.className="d-none"
  }

 

 
}
   
function recupérationValeur (tableau,input){
  tableau.forEach(element => {
    element.onclick = function(){
      input.textContent=element.textContent
      input.style.color="black"
      input.value = element.value
    }
  });
}

recupérationValeur(metierValue,saisirMetier)
recupérationValeur(document.querySelectorAll(".rayonValue"),document.querySelector("#rayon"))



boutton.onclick = function(){
  

  var inputVille = document.querySelector("#test")

  if(saisirMetier.value == undefined){
    arrowMetier.style.border="2px solid red"
  }
  
  if(document.querySelector("#idVille").value == "" || inputVille.value == ""){
    
    inputVille.style.border="2px solid red"
    inputVille.value=""
    document.querySelector("#idVille").value == ""
    inputVille.onclick = function(){
      this.style.border="none"
      
    }
  }else if(rayon.value == undefined){
  boutton.href="./?ville="+document.querySelector("#idVille").value+"&metier="+saisirMetier.value+""


  
}else{
  boutton.href='./?'+'lat='+latitude.value+'&long='+longitude.value+'&radius='+rayon.value+'&metier='+saisirMetier.value
}
}






if(document.querySelector(".div") !== null){


var btnVoteAvis = document.querySelectorAll(".btnVoteAvis")
var tableau = []

var divFlecheScroll = document.createElement("div")
divFlecheScroll.className="autreContainer"

var artisansFleche = document.querySelector("#artisansFleche")
var spanFirstFlecheScroll = document.createElement("span")

var flecheScroll = document.createElement("i")
flecheScroll.className="fa fa-arrow-down flecheChargement"
var spanSecondFlecheScroll = document.createElement("span")
spanSecondFlecheScroll.className="pulse"

artisansFleche.appendChild(divFlecheScroll)
divFlecheScroll.appendChild(spanFirstFlecheScroll)
spanFirstFlecheScroll.appendChild(flecheScroll)
divFlecheScroll.appendChild(spanSecondFlecheScroll)

if (window.scrollY > 60 ) {

  divFlecheScroll.style.display="none"
}

window.addEventListener('scroll', function scrollDown (e) {

if (window.scrollY > 50 ) {

divFlecheScroll.style.display="none"
window.removeEventListener("scroll",scrollDown)

}
})

var section = document.createElement("section")
          section.style.display="none"
          section.className=" sectionVote "
          artisans.appendChild(section)

btnVoteAvis.forEach(element => {
  tableau.push(element.value)
  
  element.onclick = function(){
 
    
    
    var modalBody = document.querySelector(".picture")
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
    section.appendChild(containerDiv)
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

      setTimeout(function(){ section.style.display="none"
      containerDiv.remove()
      document.querySelector("body").style.overflow=""
        }, 790);
    }

    tab.push(containerDiv)

    croixVote.onclick = function(){
      fermeModal();
    }

    window.onclick = function(event) {
      if (event.target == section) {
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
    section.style.display="block"
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
  
              
              chargement("#barreChargementAvis","#divValeur","#divValeur","#divChargementAvis")
              fetch('./insertAvis.php?idEntreprise='+element.value+"&valeur="+etoile.length+"&titre="+inputAvis.value+"&commentaire="+texte.value,{
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
  
});


fetch('./avis.php') 
        .then(function(response) {
          response.json().then( // Renvoie un tableau associatif manipulable par javascript (format json)
          function(avis) {

            $(function(){
              $('.stars').stars();
            });

            avis.forEach(autre => {
              
           
              if(autre.avis == 0){
              
              }
              
              else if(tableau.indexOf(autre.idEntreprise) >= 0 ){
        
                
                var moyenne = autre.avis / autre.nombreDePersonne

                var divAvis = document.createElement("div")
                var pNombreDePersonne = document.createElement("p")
                var spanEtoile = document.createElement("span")
                var lienAvis = document.createElement("a")
                lienAvis.className="mb-3 mt-1"
                lienAvis.href="./?entrepriseUnique="+""+"&etablissement="+autre.idEntreprise+"#sectionAvis"
                lienAvis.style.textDecoration="none"

                lienAvis.onmouseover = function(){
                  pNombreDePersonne.style.color="black"
                } 

                lienAvis.onmouseout = function(){
                  pNombreDePersonne.style.color="#474747"
                }

                divAvis.className="d-flex align-items-start  justify-content-center "
                spanEtoile.style.fontSize="17px"
                spanEtoile.className="stars"
                
              
                spanEtoile.dataset.rating=moyenne.toFixed(1)
                spanEtoile.dataset.numStars="5"
                pNombreDePersonne.className="mb-0 ml-2"
                pNombreDePersonne.style.fontSize="14px"
                pNombreDePersonne.style.color="#474747"
                pNombreDePersonne.style.fontFamily="Trip Sans VF, Trip Sans, Arial, sans-serif "
                pNombreDePersonne.textContent=   autre.nombreDePersonne +  " avis"
                var idEntre = autre.idEntreprise
                
                var diverse = document.querySelector(`#${CSS.escape(idEntre)}`)
                diverse.setAttribute("avis","1")
                diverse.appendChild(lienAvis)
                lienAvis.append(divAvis)
                divAvis.appendChild(spanEtoile)
                divAvis.appendChild(pNombreDePersonne)
              }
            });
            
            var divNonAvis = document.querySelectorAll(".divBtn")

            divNonAvis.forEach(nonAvis => {
                            
              if(nonAvis.hasAttribute("avis") == false ){
                var pNonAvis = document.createElement("p")
                pNonAvis.style.cursor="default"
                pNonAvis.textContent = "Aucun avis"
                pNonAvis.className="mb-0 ml-2"
                pNonAvis.style.fontSize="14px"
                pNonAvis.style.color="#474747"
                pNonAvis.style.fontFamily="Trip Sans VF, Trip Sans, Arial, sans-serif "
                var spanEtoileVide = document.createElement("span")
                spanEtoileVide.style.fontSize="18px"
                spanEtoileVide.className="stars mt-1"
                spanEtoileVide.dataset.rating=0
                spanEtoileVide.dataset.numStars="5"
                nonAvis.appendChild(pNonAvis)
                nonAvis.appendChild(spanEtoileVide)
              }
            })   
          })
        })


      }
/*boutton.onclick = function(){
  
  var inputVille = document.querySelector("#test")

  if(saisirMetier.value == undefined){
    arrowMetier.style.border="2px solid red"
  }
  
  if(document.querySelector("#idVille").value == "" || inputVille.value == ""){
    
    inputVille.style.border="2px solid red"
    inputVille.value=""
    document.querySelector("#idVille").value == ""
    inputVille.onclick = function(){
      this.style.border="none"
    }
  }

  /*else if(document.querySelector("#idVille").value !== "" && saisirMetier.value !== undefined){

    if(rayon.value == undefined){
      var fetchRayon = "./artisans.php?ville="+document.querySelector("#idVille").value+"&metier="+saisirMetier.value+""
      var vrai = true
    }
    else{
      fetchRayon = './artisans.php?'+'lat='+latitude.value+'&long='+longitude.value+'&radius='+rayon.value+'&metier='+saisirMetier.value
      vrai = false
    }

    fetch(fetchRayon) 
    .then(function(response) {
      response.json().then( // Renvoie un tableau associatif manipulable par javascript (format json)
      function(themes){
          artisans.innerHTML = "";
        
          if(themes.length == 0){
            var pAucuneSociété = document.createElement("p")
            pAucuneSociété.textContent="Aucune société inscrite"
            pAucuneSociété.className="font-weight-bold"
            pAucuneSociété.style.fontSize="23px"
            pAucuneSociété.style.marginBottom="60px"
            artisans.appendChild(pAucuneSociété)
          }


    
          var tableau = []
          var divFlecheScroll = document.createElement("div")
          divFlecheScroll.className="autreContainer"
    
          var artisansFleche = document.querySelector("#artisansFleche")
          var spanFirstFlecheScroll = document.createElement("span")
        
          var flecheScroll = document.createElement("i")
          flecheScroll.className="fa fa-arrow-down flecheChargement"
          var spanSecondFlecheScroll = document.createElement("span")
          spanSecondFlecheScroll.className="pulse"

          artisansFleche.appendChild(divFlecheScroll)
          divFlecheScroll.appendChild(spanFirstFlecheScroll)
          spanFirstFlecheScroll.appendChild(flecheScroll)
          divFlecheScroll.appendChild(spanSecondFlecheScroll)

          if (window.scrollY > 60 ) {

            divFlecheScroll.style.display="none"
          }
    
        window.addEventListener('scroll', function scrollDown (e) {
      
          if (window.scrollY > 50 ) {

          divFlecheScroll.style.display="none"
          window.removeEventListener("scroll",scrollDown)
        
          }
        })
    
        themes.forEach(element => {
        
          var divpara = document.createElement("div")
          var logo = document.createElement("img")
          var phone = document.createElement("btn")
          phone.className="btn btn-info font-weight-bold mt-4"
          phone.textContent="Téléphone"
          phone.style.cursor="pointer"
    
          phone.onclick = function(){apparitionBoutton(phone,element.telephone)};
          var email = document.createElement("btn")
          email.className="btn btn-info mx-3 font-weight-bold mt-4"
          email.textContent="E-mail"
          email.style.cursor="pointer"
          email.onclick = function(){apparitionBoutton(email,element.email)}
          var siteWeb = document.createElement("a")
          siteWeb.className="btn btn-info font-weight-bold text-white mt-4"
          siteWeb.textContent="Site web"
          siteWeb.style.cursor="pointer"
          siteWeb.onclick = function(){apparitionBoutton(siteWeb,element.siteWeb)}

          var divBtn = document.createElement("div");
          divBtn.className="divBtn d-flex flex-column-reverse align-items-center"
          var div = document.createElement("div");
          var divImg = document.createElement("div");
          divImg.className="col-2 d-flex justify-content-center"
          var pseudoImg = document.createElement("img")
    
          if(element.logo == ""){
            pseudoImg.src= "./assets/img/pseudoImg.jpg"
          }else{
            pseudoImg.src= "./assets/img/uploads/"+element.logo
          }
    
          pseudoImg.className=" rounded-circle"
          pseudoImg.style.height="125px"
          pseudoImg.style.width="125px"
          var h1 = document.createElement("a");
          var p = document.createElement("p");
          var creation = document.createElement("p")
          var btn = document.createElement("button")
          var section = document.createElement("section")
          section.style.display="none"
          section.className=" sectionVote "
          divBtn.id=element.id.toString()
          tableau.push(element.id)
    
          div.style.width="55em"
          div.style.height="250px"
          div.className="div row align-items-center"
          div.style.border = "2px solid #e0e0e0"
          div.style.borderRadius = "10px"
          div.style.marginBottom = "17px"
          div.style.padding = "20px"
          divpara.className = " col-7 ml-2"
          h1.id = "entreprise"
          h1.className="font-weight-bold"
          h1.style.fontSize="20px"
          var uppercase = element.nom_raison_sociale.charAt(0).toUpperCase()
          h1.style.textDecoration="none"
          h1.textContent = element.nom_raison_sociale.replace(element.nom_raison_sociale[0],uppercase)
          h1.href="./?entrepriseUnique="+element.siret+"&etablissement="+element.id
          p.textContent = element.geo_adresse
          var villeSociete = document.createElement("p")
          villeSociete.className="mb-0 mt-2 text-uppercase font-weight-bold"
          villeSociete.style.fontSize="14px"
          villeSociete.textContent = element.ville_nom
          creation.textContent = "Date de création: " + element.dateSociete
          creation.className ="mb-0 mt-1 text-uppercase font-weight-bold"
          creation.style.fontSize="13px"
          btn.className=" btnVoteAvis btn btn-success rounded font-weight-bold"
          btn.style.width="155px"
          btn.style.marginTop="56px"
          btn.textContent = "Votre avis"
    
          artisans.appendChild(div);
          div.appendChild(divImg)
          div.appendChild(divpara)
          div.appendChild(divBtn)
          divImg.appendChild(pseudoImg)
          divpara.appendChild(h1)
          divpara.appendChild(villeSociete)
          divpara.appendChild(creation)
          divpara.appendChild(p)
          divpara.appendChild(phone)
          divpara.appendChild(email)
          divpara.appendChild(siteWeb)
          divBtn.appendChild(btn)
          artisans.appendChild(section)
    
    
          btn.onclick = function(){

            var modalBody = document.querySelector(".picture")
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
            titreEtoile.innerHTML="&#xf08d;&emsp;Votre note pour la société "+ element.nom_raison_sociale.replace(/[*//*]/g,' ')
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
            section.appendChild(containerDiv)
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

              setTimeout(function(){ section.style.display="none"
              containerDiv.remove()
              document.querySelector("body").style.overflow=""
                }, 790);
            }
    
            tab.push(containerDiv)
      
            croixVote.onclick = function(){
              fermeModal();
            }

            window.onclick = function(event) {
              if (event.target == section) {
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
              inputValeur.href="#"+i2--

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
            var inputEntreprise = document.createElement("input")
            inputEntreprise.type="hidden"
            inputEntreprise.value=element.id
            inputEntreprise.name="idEntreprise"
            inputEntreprise.className="idEntreprise"
            divValeur.appendChild(buttonAvis)
            section.style.display="block"
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
          
                      chargement("#barreChargementAvis","#divValeur","#divValeur","#divChargementAvis")
                      fetch('./insertAvis.php?idEntreprise='+inputEntreprise.value+"&valeur="+etoile.length+"&titre="+inputAvis.value+"&commentaire="+texte.value,{
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
        });

        fetch('./avis.php') 
        .then(function(response) {
          response.json().then( // Renvoie un tableau associatif manipulable par javascript (format json)
          function(avis) {

            $(function(){
              $('.stars').stars();
            });

            avis.forEach(autre => {

           
              if(autre.avis == 0){
              
              }
        
              else if(tableau.indexOf(autre.idEntreprise) >= 0 ){
        
                
                var moyenne = autre.avis / autre.nombreDePersonne

                var divAvis = document.createElement("div")
                var pNombreDePersonne = document.createElement("p")
                var spanEtoile = document.createElement("span")
                var lienAvis = document.createElement("a")
                lienAvis.className="mb-3 mt-1"
                lienAvis.href="./?entrepriseUnique="+""+"&etablissement="+autre.idEntreprise+"#sectionAvis"
                lienAvis.style.textDecoration="none"

                lienAvis.onmouseover = function(){
                  pNombreDePersonne.style.color="black"
                } 

                lienAvis.onmouseout = function(){
                  pNombreDePersonne.style.color="#474747"
                }

                divAvis.className="d-flex align-items-start  justify-content-center "
                spanEtoile.style.fontSize="17px"
                spanEtoile.className="stars"
                
              
                spanEtoile.dataset.rating=moyenne.toFixed(1)
                spanEtoile.dataset.numStars="5"
                pNombreDePersonne.className="mb-0 ml-2"
                pNombreDePersonne.style.fontSize="14px"
                pNombreDePersonne.style.color="#474747"
                pNombreDePersonne.style.fontFamily="Trip Sans VF, Trip Sans, Arial, sans-serif "
                pNombreDePersonne.textContent=   autre.nombreDePersonne +  " avis"
                var idEntre = autre.idEntreprise
                var diverse = document.querySelector(`#${CSS.escape(idEntre)}`)
                diverse.setAttribute("avis","1")
                diverse.appendChild(lienAvis)
                lienAvis.append(divAvis)
                divAvis.appendChild(spanEtoile)
                divAvis.appendChild(pNombreDePersonne)
              }
            });
            
            var divNonAvis = document.querySelectorAll(".divBtn")

            divNonAvis.forEach(nonAvis => {
                           console.log(nonAvis.hasAttribute("avis"))   
              if(nonAvis.hasAttribute("avis") == false ){
                var pNonAvis = document.createElement("p")
                pNonAvis.style.cursor="default"
                pNonAvis.textContent = "Aucun avis"
                pNonAvis.className="mb-0 ml-2"
                pNonAvis.style.fontSize="14px"
                pNonAvis.style.color="#474747"
                pNonAvis.style.fontFamily="Trip Sans VF, Trip Sans, Arial, sans-serif "
                var spanEtoileVide = document.createElement("span")
                spanEtoileVide.style.fontSize="18px"
                spanEtoileVide.className="stars mt-1"
                spanEtoileVide.dataset.rating=0
                spanEtoileVide.dataset.numStars="5"
                nonAvis.appendChild(pNonAvis)
                nonAvis.appendChild(spanEtoileVide)
              }
            })   
          })
        })
      })
    })
  }
}*/

