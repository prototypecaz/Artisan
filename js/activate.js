var emaile = document.location.hash.slice(1);
/* GET vers activate.php pour recupérer le mail à activer */
fetch('./activate.php?active='+emaile);

function utf8_to_b64( str ) {
    return window.btoa(unescape(encodeURIComponent( str )));
  }
  
  function b64_to_utf8( str ) {
    return decodeURIComponent(escape(window.atob( str )));
  }
  
  /* // Usage:
  utf8_to_b64('✓ à la mode'); // "4pyTIMOgIGxhIG1vZGU="
  b64_to_utf8('4pyTIMOgIGxhIG1vZGU='); // "✓ à la mode" */

  /* decode l'email depuis l'url pour l'afficher dans la div erreur */
  var emailDecode =  b64_to_utf8(emaile);
  
  /* si l'email décodé est different de vide alors rajoute moi ce text dans la div erreur */
  if (emailDecode !== ""){
    text = "Bienvenu, Votre compte : "+emailDecode+" viens d'être activé, veuillez vous connecter, merci.";
  /* on affiche dans a div erreurs "Mot de pass envoyé sur email : + son email */ 
   document.querySelector('#erreurs').innerText = text; 
  }