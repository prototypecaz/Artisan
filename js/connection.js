


var btnConnexionHeader = document.querySelector(".btnConnexionHeader")
var btnInscriptionHeader = document.querySelector(".btnInscriptionHeader")




btnConnexionHeader.onclick = function(){

    $("#myModalConnexionHeader").modal();

  
           
}

var o = 1

btnInscriptionHeader.onclick = function(){
    
   
    $("#myModalInscriptionHeader").modal();
 

    test("#passwordUserInscriptionHeader","#confirmPassword","#strengHeader","#btnInscriptionHeaderValide")

   
           
}



var changementConnection = document.querySelector("#changementConnexion")
var connect = document.querySelector("#connect")
var inscriptionChangement = document.querySelector("#inscriptionChangement")
var y = 0
var connexionApparition = document.querySelector("#connexionApparition")
var modalContenus = document.querySelector("#modalContenus")
var modalInfo = document.querySelector(".bienvenueUser")
var pInfo = document.querySelector("#pInfo")
var nomSite = document.querySelector("#nomSite")
changementConnection.onclick = function(){


    y++
    if(y%2 == 1){
        nomSite.textContent="Inscription"
        modalInfo.style.marginTop = "32vh"
        connect.className="d-none"
    inscriptionChangement.className="row flex-column align-items-center text-muted"
    changementConnection.textContent="Se connecter"
    test("#passwordUserApparition","#confirmPasswordApparition","#strengHeaderApparition","#btnInscriptionHeaderValide")
    connexionApparition.setAttribute("onclick","connecteUser(document.querySelector('#emailUserApparition'),document.querySelector('#passwordUserApparition'),document.querySelector('#reponseInscriptionApparition'),document.querySelector('#nomUserApparition'),document.querySelector('#prenomUserApparition'),document.querySelector('#confirmPasswordApparition'),document.querySelector('#erreurEmailUserApparition'),document.querySelector('#erreurPasswordUserApparition'),document.querySelector('#erreurNomUserApparition'),document.querySelector('#erreurPrenomUserApparition'),document.querySelector('#erreurConfirmPasswordApparition'),'#barreChargement','#inscriptionChangement','#btnCoIns','#divChargement','#connectSuccess','#redirection','#imgValide','#divBarreChargement','#modalContenus')")
    connexionApparition.textContent="Inscription"
    modalContenus.style.height="610px"
    document.querySelector("#modalContenusInfo").style.height="610px"
    pInfo.textContent="Pour accédez a toutes les fonctionnalités vous devez vous inscrire"
    }else{
        document.querySelector("#modalContenusInfo").style.height="440px"
        nomSite.textContent="Connexion"
        pInfo.textContent="Pour accédez a cette fonctionnalité vous devez vous connectez."
        modalInfo.style.marginTop = "18vh"
        modalContenus.style.height="440px"
        connect.className="row flex-column align-items-center"
    inscriptionChangement.className="d-none"
    changementConnection.textContent="Devenir membre"
    connexionApparition.textContent="Connexion"
    connexionApparition.setAttribute("onclick","anonymeConnection(document.querySelector('#emailUser'),document.querySelector('#passwordUser'),document.querySelector('#errorUser'),document.querySelector('#errorPassword'),document.querySelector('#nonActiverAppar'),'#barreChargement','#connect','#btnCoIns','#divChargement','#connectSuccess','#redirection','#imgValide','#divBarreChargement')")
    }

    

}

