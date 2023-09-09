var btnAjoutSociete = document.querySelector(".ajoutSociete")
var btnInscriptionSociete = document.querySelector("#btnInscriptionArtisans")
var mod = document.querySelector("#myModalAjoutSociete")
var modConnect = document.querySelector("#myModalApparition")
var divPictureSociete = document.querySelector("#picture")
var supprimeLogo = document.querySelector(".supprimeLogo")
var ajoutLogo = document.querySelector(".custom-file-input")
var imgLogo = document.querySelector("#imgLogo")

let list = new DataTransfer();
let file = new File(["content"], "");
list.items.add(file);

let myFileList = list.files;

ajoutLogo.files = myFileList

    ajoutLogo.onchange = function(){
        
        imgLogo.src = URL.createObjectURL(this.files[0]); 
        supprimeLogo.onclick = function(){
            imgLogo.src="./assets/img/pseudoImg.jpg"
            
            let list = new DataTransfer();
            let file = new File(["content"], "");
            list.items.add(file);

            let myFileList = list.files;

            ajoutLogo.files = myFileList
           
            console.log(ajoutLogo.files)
        }
    }



btnAjoutSociete.onclick = function(){

    

    divPictureSociete.textContent=""
    fetch('./insertSociete.php').then(function(response) {
        response.text().then(function(reponse) {
            document.querySelector("body").style.overflow="hidden"
            window.onclick = function(event){
             
               if(event.target == mod || event.target == modConnect){
                    document.querySelector("body").style.overflow=""
                
                    
                }
            }

            if(reponse == "#connection"){
                $("#myModalApparition").modal();
                
            }else{

                var nomSociete = document.querySelector('#nomSociété')
                var nomVilleSociete = document.querySelector('#idVilleArtisans')
                var nomMetier = document.querySelector('#nomMetier')
                var telephoneArtisan = document.querySelector('#telephoneArtisan')
                var emailArtisan = document.querySelector('#emailArtisan')
                var siteWebArtisan = document.querySelector('#siteWebArtisan')
                var descriptionArtisan = document.querySelector('#descriptionArtisan')
                var dateCreation = document.querySelector('#dateCreation')
                var instagram = document.querySelector("#inputInsta")
                var pinterest = document.querySelector("#inputPinter")
                var twitter = document.querySelector("#inputTwitter")
                document.querySelector("body").style.overflow="hidden"
            
                $("#myModalAjoutSociete").modal();

                var buttonAfficheModalSociete = document.querySelector("#ajoutPhotoSociete")
var myModalAjoutSociete = document.querySelector("#ajoutModalSociete")
var array = []

buttonAfficheModalSociete.onclick = function(){
   
    
  
    myModalAjoutSociete.appendChild($("#exampleModal")[0]) 
    $("#exampleModal")[0].style.backgroundColor='rgba(1,1,1,0.3)'.replace(/[^,]+(?=\))/, '0.5')
    //$("#exampleModal")[0].style.zIndex="1"
    $("#exampleModal").modal();
    window.onclick = function(event){
       
        if(event.target == mod){
            document.querySelector("main").appendChild($("#exampleModal")[0])
            document.querySelector("body").style.overflow=""
            myModalAjoutSociete.textContent=""
            array = []
           
        }
    }
   
    var inputImg = document.querySelector("#imageTest")
    inputImg.onchange = function(){
        
        ajoutImage(array,divPictureSociete,this.files,myModalAjoutSociete,10);
    }
}
                
                btnInscriptionSociete.onclick = function(){
console.log("test")
                    var p = 0

                    var erreur = {0:[nomSociete,document.querySelector("#erreurNomSociete")],
                                  1:[nomVilleSociete,document.querySelector("#erreurVille")],
                                  2:[nomMetier,document.querySelector("#erreurMetier")],
                                  3:[descriptionArtisan,document.querySelector("#erreurDescription")],
                                  4:[dateCreation,document.querySelector("#erreurCreation")],
                                  5:[telephoneArtisan,document.querySelector("#erreurTelephone")]}
                                
                                  for(let i in erreur){
                                    erreur[i][1].textContent = ""
                                    if(erreur[i][0].value == ""){
                                        erreur[i][1].textContent = "*champs obligatoire"
                                        
                                    }else{
                                        p++
                                    }
                                 }
                       
                                if(p == 6){
                                    const formData = new FormData()
                                   
                                  
                                    
                       for (var x = 0; x < array.length; x++) {
                         
                        formData.append('myFileSociete[]', array[x]);
                       
                    }

                    formData.append('myFileLogo[]',ajoutLogo.files[0])
                   
                    

                                    chargement("#barreChargementSociete","#connecteArtisans","#btnSociete","#divChargementSociete")
                                    fetch('./insertSociete.php?nomSociete='+nomSociete.value+"&nomVilleSociete="+nomVilleSociete.value+"&nomMetier="+nomMetier.value+"&telephoneArtisan="+telephoneArtisan.value+"&emailArtisan="+emailArtisan.value+"&siteWebArtisan="+siteWebArtisan.value+"&descriptionArtisan="+descriptionArtisan.value+"&dateCreation="+dateCreation.value+"&instagram="+instagram.value+"&pinterest="+pinterest.value+"&twitter="+twitter.value,{
                                        method: 'POST',
                                        body: formData
                                       
               
                                      }).then(function(response) {
                                        response.text().then(function(reponse) {
                
                                            if(reponse == "reussis"){
                                                setTimeout(function(){
                                                    document.querySelector("#connectSuccessSociete").style.fontSize="26px"
                                                    document.querySelector("#connectSuccessSociete").textContent="Inscription de votre société réussis"
                                                    document.querySelector("#divChargementReussisSociete").className="d-flex flex-column justify-content-center align-items-center h-100"
                                                },1000)
                                                
                                                setTimeout(function(){window.location.reload()},3500);//$("#myModalAjoutSociete").modal('hide')
                                            }
                
                                        })})
                                }
                   
                }
            }

        })})
}


