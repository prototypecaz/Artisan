<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* connexion.block.html.twig */
class __TwigTemplate_c57e05e008e14fad4fb15807041fb57bd6f79ff40c0d7209ab927ed289937cb8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'connexion' => [$this, 'block_connexion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('connexion', $context, $blocks);
    }

    public function block_connexion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!-- ModalConnexionHeader -->
<div class=\"modal fade \" id=\"myModalConnexionHeader\" role=\"dialog\">
    <div id=\"modalConnexionHeader\" class=\"modal-dialog modal-lg row\">
    
      <!-- Modal content-->
      <div id=\"modalContenuConnect\" class=\"modal-content col-7 rounded-left\" style=\"height:475px;background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto \">
          
          <h1 class=\"   nomSite\" style=\"color:#16191b\">Connexion</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold\">
         <div id=\"connectHeader\" class=\"row flex-column align-items-center mt-5\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\" class=\"text-muted\">Adresse mail</label>
            <span id=\"emailInvalide\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader rounded awesome\" id=\"emailUserHeader\"  placeholder=\"&#xf2c1;\">
            <div class=\"d-flex  justify-content-center position-relative w-25 mt-1\">
            <label for=\"passwordUser\" class=\"mt-2 text-muted\">Mot de passe</label>
            <span id=\"passwordInvalide\" class=\" mt-2 erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  rounded awesome\" id=\"passwordUserHeader\" placeholder=\"&#xf023;\">
            
            <span id=\"nonActiver\" class=\"mt-3\" style=\"color:red\"></span>
            
            
         </div>
         <div id=\"divBarreChargementConnectHeader\" class=\"d-none\">
          <span id=\"barreChargementHeader\" class=\"d-none\"></span>
         </div>
          <div id=\"divChargementHeader\" class=\"d-none\">
            
            <img id=\"imgValideHeader\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <span id=\"connectSuccessHeader\" class=\"informationConnexion mt-5\"></span>
            <p id=\"redirectionHeader\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
         </div>
         <div id=\"divBtnConnexionHeader\" class=\"d-flex justify-content-center\">
            <button type=\"submit\" id=\"btnConnexionHeaderValide\" onclick=\"anonymeConnection(document.querySelector('#emailUserHeader'),document.querySelector('#passwordUserHeader'),document.querySelector('#emailInvalide'),document.querySelector('#passwordInvalide'),document.querySelector('#nonActiver'),'#barreChargementHeader','#connectHeader','#divBtnConnexionHeader','#divChargementHeader','#connectSuccessHeader','#redirectionHeader','#imgValideHeader','#divBarreChargementConnectHeader','#modalContenuConnect')\" class=\"btn btn-info font-weight-bold mt-4\">Connexion</button>
         </div>
           
          </div>
        </div>
         <div class=\"col-5 modal-content rounded-right\" style=\"background-image: url('./assets/img/backco.jpeg'); background-size:cover;background-position-x: 55%;background-clip:initial;border-radius:initial;border:none\">
          <div class=\"modal-header mx-auto \">
          
          <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
        </div>
        <div class=\"modal-body text-center bienvenueUserHeader\" style=\"color:black\">
          <h2 class=\"font-weight-bold mb-5 mt-3\">Bienvenue!</h2>
          <p class=\"font-weight-bold\" style=\"font-size:20px\">Pour accédez à toutes les fonctionnalité connectez vous.</p>
        </div>
         </div>
      </div>
     
      
    </div>
  </div>
  
</div>


<!-- ModalInscriptionHeader -->

<div class=\"modal fade \" id=\"myModalInscriptionHeader\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg row\">
    
      <!-- Modal content-->
      <div id=\"modalContentArtisans\" class=\"modal-content rounded-left modalContentArtisans col-7\" style=\"height:560px;background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto \">
          
         <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Inscription</h1>
         
        </div>
        <div class=\"modal-body connecte  font-weight-bold\" >
         <div id=\"connecte\" class=\"row flex-column align-items-center\">
          
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"nomUserInscriptionHeader\" class=\"text-muted\">Nom</label>
            <span id=\"erreurNomUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"nomUserInscriptionHeader\" placeholder=\"&#xf2b9;\" style=\"font-family: 'FontAwesome', Helvetica; font-size:18px\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"prenomUserInscriptionHeader\" class=\"text-muted\">Prenom</label>
            <span id=\"erreurPrenomUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"prenomUserInscriptionHeader\" placeholder=\"&#xf2bb;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\" class=\"text-muted\">Adresse mail</label>
            <span id=\"erreurEmailUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"emailUserInscriptionHeader\" placeholder=\"&#xf199;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"passwordUser\" class=\"mt-2 text-muted\">Mot de passe</label>
            <span id=\"erreurPasswordUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"passwordUserInscriptionHeader\" placeholder=\"&#xf023;\">
            <div class=\"d-flex  justify-content-center position-relative w-50\">
            <label for=\"confirmPassword\" class=\"mt-2 text-muted\">Confirmer le mot de passe</label>
            <span id=\"erreurConfirmPasswordInscriptionHeader\" class=\"erreurChampsSocieteConfirm position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"confirmPassword\" disabled placeholder=\"&#xf023;\">
            <span id=\"strengHeader\" class=\"mb-3\"></span>
            <span id=\"reponseInscription\"></span>
           
            
            
         </div>

         <div id=\"divBarreChargementInscriptionHeader\" class=\"d-none\">
         <span id=\"barreChargementInscriptionHeader\" class=\"d-none\"></span>
         </div>
         
          <div id=\"divChargementInscriptionHeader\" class=\"d-none\">
             <img id=\"imgValideInscriptionHeader\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <span id=\"connectSuccessInscriptionHeader\" class=\"informationConnexion mt-4\"></span>
            <p id=\"redirectionInscriptionHeader\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
         </div>
          <div id=\"divBtnInscriptionHeader\" class=\"d-flex justify-content-center\">
            <button type=\"submit\" id=\"btnInscriptionHeaderValide\" class=\"btn btn-info font-weight-bold mt-3\" onclick=\"connecteUser(document.querySelector('#emailUserInscriptionHeader'),document.querySelector('#passwordUserInscriptionHeader'),document.querySelector('#reponseInscription'),document.querySelector('#nomUserInscriptionHeader'),document.querySelector('#prenomUserInscriptionHeader'),document.querySelector('#confirmPassword'),document.querySelector('#erreurEmailUserInscriptionHeader'),document.querySelector('#erreurPasswordUserInscriptionHeader'),document.querySelector('#erreurNomUserInscriptionHeader'),document.querySelector('#erreurPrenomUserInscriptionHeader'),document.querySelector('#erreurConfirmPasswordInscriptionHeader'),'#barreChargementInscriptionHeader','#connecte','#divBtnInscriptionHeader','#divChargementInscriptionHeader','#connectSuccessInscriptionHeader','#redirectionInscriptionHeader','#imgValideInscriptionHeader','#divBarreChargementInscriptionHeader','#modalContentArtisans')\">Inscription</button>
         </div>
          
          </div>
        </div>
        <div class=\"col-5 modal-content rounded-right\" style=\"background-image: url('./assets/img/backco.jpeg'); background-size:cover;background-position-x: 55%;background-clip:initial;border-radius:initial;border:none\">
          <div class=\"modal-header mx-auto \">
          
          <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
        </div>
        <div class=\"modal-body text-center bienvenueUserHeader\" style=\"color:black\">
          <h2 class=\"font-weight-bold my-5\">Bienvenue!</h2>
          <p class=\"font-weight-bold\" style=\"font-size:22px\">Pour accédez à toutes les fonctionnalité inscrivez vous.</p>
        </div>
         </div>
      </div>
      
      
    </div>
  </div>
  
</div>


";
    }

    public function getTemplateName()
    {
        return "connexion.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block connexion %}
<!-- ModalConnexionHeader -->
<div class=\"modal fade \" id=\"myModalConnexionHeader\" role=\"dialog\">
    <div id=\"modalConnexionHeader\" class=\"modal-dialog modal-lg row\">
    
      <!-- Modal content-->
      <div id=\"modalContenuConnect\" class=\"modal-content col-7 rounded-left\" style=\"height:475px;background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto \">
          
          <h1 class=\"   nomSite\" style=\"color:#16191b\">Connexion</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold\">
         <div id=\"connectHeader\" class=\"row flex-column align-items-center mt-5\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\" class=\"text-muted\">Adresse mail</label>
            <span id=\"emailInvalide\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader rounded awesome\" id=\"emailUserHeader\"  placeholder=\"&#xf2c1;\">
            <div class=\"d-flex  justify-content-center position-relative w-25 mt-1\">
            <label for=\"passwordUser\" class=\"mt-2 text-muted\">Mot de passe</label>
            <span id=\"passwordInvalide\" class=\" mt-2 erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  rounded awesome\" id=\"passwordUserHeader\" placeholder=\"&#xf023;\">
            
            <span id=\"nonActiver\" class=\"mt-3\" style=\"color:red\"></span>
            
            
         </div>
         <div id=\"divBarreChargementConnectHeader\" class=\"d-none\">
          <span id=\"barreChargementHeader\" class=\"d-none\"></span>
         </div>
          <div id=\"divChargementHeader\" class=\"d-none\">
            
            <img id=\"imgValideHeader\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <span id=\"connectSuccessHeader\" class=\"informationConnexion mt-5\"></span>
            <p id=\"redirectionHeader\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
         </div>
         <div id=\"divBtnConnexionHeader\" class=\"d-flex justify-content-center\">
            <button type=\"submit\" id=\"btnConnexionHeaderValide\" onclick=\"anonymeConnection(document.querySelector('#emailUserHeader'),document.querySelector('#passwordUserHeader'),document.querySelector('#emailInvalide'),document.querySelector('#passwordInvalide'),document.querySelector('#nonActiver'),'#barreChargementHeader','#connectHeader','#divBtnConnexionHeader','#divChargementHeader','#connectSuccessHeader','#redirectionHeader','#imgValideHeader','#divBarreChargementConnectHeader','#modalContenuConnect')\" class=\"btn btn-info font-weight-bold mt-4\">Connexion</button>
         </div>
           
          </div>
        </div>
         <div class=\"col-5 modal-content rounded-right\" style=\"background-image: url('./assets/img/backco.jpeg'); background-size:cover;background-position-x: 55%;background-clip:initial;border-radius:initial;border:none\">
          <div class=\"modal-header mx-auto \">
          
          <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
        </div>
        <div class=\"modal-body text-center bienvenueUserHeader\" style=\"color:black\">
          <h2 class=\"font-weight-bold mb-5 mt-3\">Bienvenue!</h2>
          <p class=\"font-weight-bold\" style=\"font-size:20px\">Pour accédez à toutes les fonctionnalité connectez vous.</p>
        </div>
         </div>
      </div>
     
      
    </div>
  </div>
  
</div>


<!-- ModalInscriptionHeader -->

<div class=\"modal fade \" id=\"myModalInscriptionHeader\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg row\">
    
      <!-- Modal content-->
      <div id=\"modalContentArtisans\" class=\"modal-content rounded-left modalContentArtisans col-7\" style=\"height:560px;background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto \">
          
         <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Inscription</h1>
         
        </div>
        <div class=\"modal-body connecte  font-weight-bold\" >
         <div id=\"connecte\" class=\"row flex-column align-items-center\">
          
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"nomUserInscriptionHeader\" class=\"text-muted\">Nom</label>
            <span id=\"erreurNomUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"nomUserInscriptionHeader\" placeholder=\"&#xf2b9;\" style=\"font-family: 'FontAwesome', Helvetica; font-size:18px\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"prenomUserInscriptionHeader\" class=\"text-muted\">Prenom</label>
            <span id=\"erreurPrenomUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"prenomUserInscriptionHeader\" placeholder=\"&#xf2bb;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\" class=\"text-muted\">Adresse mail</label>
            <span id=\"erreurEmailUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"emailUserInscriptionHeader\" placeholder=\"&#xf199;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"passwordUser\" class=\"mt-2 text-muted\">Mot de passe</label>
            <span id=\"erreurPasswordUserInscriptionHeader\" class=\"erreurChampsSociete position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"passwordUserInscriptionHeader\" placeholder=\"&#xf023;\">
            <div class=\"d-flex  justify-content-center position-relative w-50\">
            <label for=\"confirmPassword\" class=\"mt-2 text-muted\">Confirmer le mot de passe</label>
            <span id=\"erreurConfirmPasswordInscriptionHeader\" class=\"erreurChampsSocieteConfirm position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnexionHeader  awesome rounded\" id=\"confirmPassword\" disabled placeholder=\"&#xf023;\">
            <span id=\"strengHeader\" class=\"mb-3\"></span>
            <span id=\"reponseInscription\"></span>
           
            
            
         </div>

         <div id=\"divBarreChargementInscriptionHeader\" class=\"d-none\">
         <span id=\"barreChargementInscriptionHeader\" class=\"d-none\"></span>
         </div>
         
          <div id=\"divChargementInscriptionHeader\" class=\"d-none\">
             <img id=\"imgValideInscriptionHeader\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <span id=\"connectSuccessInscriptionHeader\" class=\"informationConnexion mt-4\"></span>
            <p id=\"redirectionInscriptionHeader\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
         </div>
          <div id=\"divBtnInscriptionHeader\" class=\"d-flex justify-content-center\">
            <button type=\"submit\" id=\"btnInscriptionHeaderValide\" class=\"btn btn-info font-weight-bold mt-3\" onclick=\"connecteUser(document.querySelector('#emailUserInscriptionHeader'),document.querySelector('#passwordUserInscriptionHeader'),document.querySelector('#reponseInscription'),document.querySelector('#nomUserInscriptionHeader'),document.querySelector('#prenomUserInscriptionHeader'),document.querySelector('#confirmPassword'),document.querySelector('#erreurEmailUserInscriptionHeader'),document.querySelector('#erreurPasswordUserInscriptionHeader'),document.querySelector('#erreurNomUserInscriptionHeader'),document.querySelector('#erreurPrenomUserInscriptionHeader'),document.querySelector('#erreurConfirmPasswordInscriptionHeader'),'#barreChargementInscriptionHeader','#connecte','#divBtnInscriptionHeader','#divChargementInscriptionHeader','#connectSuccessInscriptionHeader','#redirectionInscriptionHeader','#imgValideInscriptionHeader','#divBarreChargementInscriptionHeader','#modalContentArtisans')\">Inscription</button>
         </div>
          
          </div>
        </div>
        <div class=\"col-5 modal-content rounded-right\" style=\"background-image: url('./assets/img/backco.jpeg'); background-size:cover;background-position-x: 55%;background-clip:initial;border-radius:initial;border:none\">
          <div class=\"modal-header mx-auto \">
          
          <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
        </div>
        <div class=\"modal-body text-center bienvenueUserHeader\" style=\"color:black\">
          <h2 class=\"font-weight-bold my-5\">Bienvenue!</h2>
          <p class=\"font-weight-bold\" style=\"font-size:22px\">Pour accédez à toutes les fonctionnalité inscrivez vous.</p>
        </div>
         </div>
      </div>
      
      
    </div>
  </div>
  
</div>


{% endblock %}", "connexion.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/connexion.block.html.twig");
    }
}
