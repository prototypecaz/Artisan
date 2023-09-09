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

/* main.block.html.twig */
class __TwigTemplate_650432844c724c23e354a1458e9a9489e3dfbe307133dcaf83f9af3827cfbb4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'recherche' => [$this, 'block_recherche'],
            'inscription' => [$this, 'block_inscription'],
            'confirmation' => [$this, 'block_confirmation'],
            'avis' => [$this, 'block_avis'],
            'entrepriseUnique' => [$this, 'block_entrepriseUnique'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        if (((($context["page"] ?? null) === "") || twig_in_filter("metier", ($context["page"] ?? null)))) {
            // line 4
            echo "
 
<div class=\"position-relative \" style=\"height:3vh\">



<section class=\"sectionRecherche  row justify-content-center   position-absolute \">

<div class=\" row  position-absolute controle \">
    <div class=\" col-6 divControle \">
      <p class=\"mt-3 text-center font-weight-bold \" style=\"font-family: 'FontAwesome', Helvetica;\">&#xf0f7;&emsp;  Artisans</p>
    </div>
    <div class=\"  col-6 divControle1\">
      <p class=\"mt-3 text-center font-weight-bold\" style=\"font-family: 'FontAwesome', Helvetica;\">&#xf007;&emsp;Clients</p>
    </div>
</div>
<div class=\"w-100 mt-3 ml-4\" style=\"height:30px\">
<a class=\"text-white ajoutSociete font-weight-bold \" style=\"font-family: 'FontAwesome', Helvetica; font-size:16px\">&#xf0a4;&emsp;Ajouter votre société</a>
</div>

  <div class=\" divRecherche position-relative w-100\">


    <div class=\"row justify-content-center w-100 m-0\">
   
   <!-- <select  name=\"metier\" id=\"metier\" class=\"col-3 inputRecherche inputFleche mb-1\" style=\"font-family: 'FontAwesome', Helvetica; font-size:17px\">
    
        <option   value=\"\" disabled selected hidden >&#xf039;&emsp; Saisir métier</option>
        
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["metiers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                // line 34
                echo "        <option   value=";
                echo twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 34);
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["metier"], "metier", [], "any", false, false, false, 34);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        
 
    </select>-->
    <div class=\"col-3 p-0 \">
    <div class=\" inputRecherche  d-flex align-items-center justify-content-between px-3 arrowMetier\" style=\"cursor:pointer\" >
        <p value=\"\" style=\"font-family: 'FontAwesome', Helvetica;font-size:17px;color:#6c757d\" class=\"metierSaisi m-0  text-capitalize\">&#xf039;&emsp; Saisir métier</p>
        
        <i class=\"fas fa-caret-down \"></i>
        
    </div>

    <div style=\"width:400px;height:250px;top:111%\" class=\" d-none \" id=\"returnArrowMetier\">
    
      <div class=\"mt-3\">
      <i class=\"fab fa-accusoft\" style=\"font-size:1.2rem\"></i>
      <h6 class=\"font-weight-bold ml-1 font-italic  d-inline\" style=\"font-size:1.1rem\">Faites votre choix</h6>
      </div>
      <ul class=\"d-flex flex-wrap flex-column py-1 pl-1 text-capitalize\" style=\"max-height:210px;max-width:270px;list-style: none;margin-top:10px\">

    
       ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["metiers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                // line 57
                echo "        <li class=\"metierValue pt-1 pl-1 w-25\"  value=";
                echo twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 57);
                echo " style=\"cursor:pointer;font-size:15.5px;\">";
                echo twig_get_attribute($this->env, $this->source, $context["metier"], "metier", [], "any", false, false, false, 57);
                echo "</li>

        
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "       
       </ul>
    </div>
    </div>


   <!--<div class=\"col-3\">
    <input style=\"font-family: 'FontAwesome', Helvetica; font-size:17px\" id=\"test\" name=\"ville\" type=\"text\" placeholder=\"  &#xf041;&emsp; Saisir la ville\"  onKeyUp=\"cleRelachee(event,document.querySelector('#test'),document.querySelector('#body'),document.querySelector('#idVille'),document.querySelector('#longitude'),document.querySelector('#latitude'),document.querySelector('#code'))\"  enctype='multipart/form-data' class=\" inputRecherche\">
    <input id=\"idVille\" name=\"idVille\" type=\"hidden\" value=\"\">
    <input id=\"longitude\" name=\"longitude\" type=\"hidden\" value=\"\">
    <input id=\"latitude\" name=\"latitude\" type=\"hidden\" value=\"\">
    <input id=\"code\" name=\"latitude\" type=\"hidden\" value=\"\">
    </div>-->


    <input type=\"text\" style=\"font-family: 'FontAwesome', Helvetica; font-size:17px;margin:0 0.7rem;border:0\" id=\"test\" name=\"ville\" type=\"text\" placeholder=\"  &#xf041;&emsp; Saisir la ville\"  onKeyUp=\"cleRelachee(event,document.querySelector('#test'),document.querySelector('#body'),document.querySelector('#idVille'),document.querySelector('#longitude'),document.querySelector('#latitude'),document.querySelector('#code'))\"  enctype='multipart/form-data' class=\"col-4 inputRecherche \">
    <input id=\"idVille\" name=\"idVille\" type=\"hidden\" value=\"\">
    <input id=\"longitude\" name=\"longitude\" type=\"hidden\" value=\"\">
    <input id=\"latitude\" name=\"latitude\" type=\"hidden\" value=\"\">
    <input id=\"code\" name=\"latitude\" type=\"hidden\" value=\"\">

<div class=\"position-absolute divVille mt-2 \" >
    <ul id=\"body\" class=\" mb-0 pl-4 \" >
    </ul>
</div>
  
    <!--<select   id=\"rayon\" placeholder=\"Saisir métier\" class=\"inputRecherche inputFleche col-3 \" style=\"font-family: 'FontAwesome', Helvetica; font-size:17px;max-width:22%!important\">

      
        <option value=\"0\" disabled selected hidden>&#xf05b;&emsp; Saisir rayon</option>
        <option value=\"10\">10</option>
        <option value=\"20\">20</option>
        <option value=\"30\">30</option>
   

    </select>-->
  <div class=\"col-3 p-0 position-relative\"  style=\"max-width:22%!important\"> 
    <div class=\" inputRecherche  d-flex align-items-center justify-content-between px-3 rayonSaisi\" style=\"cursor:pointer;font-family: 'FontAwesome', Helvetica; font-size:17px;\">
        <p value=\"\" style=\"color:#6c757d\"  class=\" m-0  text-capitalize\" id=\"rayon\">&#xf05b;&emsp; Saisir rayon</p>
        
        <i class=\"fas fa-caret-down \"></i>
        
    </div>


    <div class=\"d-none \" id=\"divRayonReturn\" style=\"top:111%;right:0;background-color: rgb(238, 232, 224);\">
      <ul style=\"cursor:pointer;list-style:url(./assets/img/crosshair.svg)\" class=\"py-2 mb-0 pl-3\">
        <li class=\"rayonValue\" value=\"10\">10 km</li>
        <li class=\"rayonValue\" value=\"20\">20 km</li>
        <li class=\"rayonValue\" value=\"30\">30 km</li>
      </ul>
    </div>
  </div>


  </div>
<a id=\"boutton\"   class=\"position-absolute font-weight-bold p-2 d-flex align-items-center justify-content-center\" style=\"font-family: 'FontAwesome', Helvetica;text-decoration:none;outline: none;color:black;background-color:";
            // line 117
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["affichageDesign"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["color"] ?? null) : null);
            echo "\" type=\"submit\"><span class=\"spanRecherche\">Recherchez &emsp;&emsp;</span><span class=\"spanFleche \">&#xf178;</span></a>

</section>
</div>
 
 

<div id=\"artisansFleche\" class=\"container d-flex flex-column align-items-center position-relative\">

</div>



<div id=\"artisans\" class=\"container d-flex flex-column align-items-center position-relative\">
 ";
            // line 131
            if (twig_in_filter("metier", ($context["page"] ?? null))) {
                // line 132
                echo "        ";
                $this->loadTemplate("recherche.block.html.twig", "main.block.html.twig", 132)->display($context);
                // line 133
                echo "        ";
                $this->displayBlock('recherche', $context, $blocks);
            }
            // line 135
            echo "</div>

<section id=\"apparence\"></section>

<div class=\"modal fade \" id=\"myModalApparition\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg row \" style=\"max-width:55em;width:53em\">
    
      <!-- Modal content-->
      <div id=\"modalContenus\" class=\"modal-content col-7 rounded-left\" style=\"background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto\">
          
         <h1 class=\" font-weight-bold  nomSite\" id=\"nomSite\" style=\"color:#16191b\">Connexion</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold\">
         <div id=\"connect\" class=\"row flex-column align-items-center mt-2\">
            
            
            <div  class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\" class=\"text-muted\">Adresse mail</label>
            <span id=\"errorUser\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input  class=\"inputConnectUser rounded p-1 awesome\" id=\"emailUser\"  placeholder=\"&#xf2c1;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"passwordUser\" class=\"mt-2 text-muted\">Mot de passe</label>
            <span id=\"errorPassword\" class=\" mt-2 erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"passwordUser\" placeholder=\"&#xf023;\">
            
            <span id=\"nonActiverAppar\" class=\"mt-3\" style=\"color:red\"></span>
            
         </div>
         
         <div class=\"d-none\" id=\"inscriptionChangement\" >
           <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"nomUserInscriptionHeader\">Nom</label>
            <span id=\"erreurNomUserApparition\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"nomUserApparition\" placeholder=\"&#xf2b9;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"prenomUserInscriptionHeader\">Prenom</label>
            <span id=\"erreurPrenomUserApparition\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"prenomUserApparition\" placeholder=\"&#xf2bb;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\">Adresse mail</label>
            <span id=\"erreurEmailUserApparition\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"emailUserApparition\" placeholder=\"&#xf199;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"passwordUser\" class=\"mt-2\">Mot de passe</label>
            <span id=\"erreurPasswordUserApparition\" class=\"erreurChampsSociete position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"passwordUserApparition\" placeholder=\"&#xf023;\">
            <div class=\"d-flex  justify-content-center position-relative w-50\">
            <label for=\"confirmPassword\" class=\"mt-2\">Confirmer le mot de passe</label>
            <span id=\"erreurConfirmPasswordApparition\" class=\"erreurChampsSocieteConfirm position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"confirmPasswordApparition\" disabled placeholder=\"&#xf023;\">
            <span id=\"strengHeaderApparition\" class=\"mb-3\"></span>
            <span id=\"reponseInscriptionApparition\"></span>
           
            
         </div>

        

         <div id=\"divBarreChargement\" class=\"d-none\">
           <span id=\"barreChargement\" class=\"d-none\"></span>
         </div>
         <div id=\"divChargement\" class=\"d-none\">
           
            
            <img id=\"imgValide\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <p id=\"connectSuccess\" class=\"informationConnexion mt-4\"></p>
            <p id=\"redirection\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
            
         </div>
         <div id=\"btnCoIns\" class=\"d-flex align-items-center flex-column mt-2\">
           <button id=\"connexionApparition\" class=\"btn btn-info font-weight-bold\" onclick=\"anonymeConnection(document.querySelector('#emailUser'),document.querySelector('#passwordUser'),document.querySelector('#errorUser'),document.querySelector('#errorPassword'),document.querySelector('#nonActiverAppar'),'#barreChargement','#connect','#btnCoIns','#divChargement','#connectSuccess','#redirection','#imgValide','#divBarreChargement')\">Connexion</button>
           <button id=\"changementConnexion\" class=\"mt-2 btn btn-success font-weight-bold\">Devenir membre</button>
          </div>
          </div>
        </div>
        <div class=\"col-5 modal-content rounded-right\" id=\"modalContenusInfo\" style=\"background-image: url('./assets/img/backco.jpeg'); background-size:cover;background-position-x: 55%;background-clip:initial;border-radius:initial;border:none;height:440px\">
          <div class=\"modal-header mx-auto \">
          
          <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
        </div>
        <div class=\"modal-body text-center bienvenueUser\">
          <h2 class=\"font-weight-bold mb-5\">Bienvenue!</h2>
          <p class=\"font-weight-bold\" id=\"pInfo\" style=\"font-size:18px\">Pour accédez a cette fonctionnalité vous devez vous connectez.</p>
        </div>
         </div>
      </div>

      
      
    </div>
  </div>
  
</div>

   

<!-- Modal Photo-->
<div class=\"modal fade \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg \" role=\"document\" id=\"testApparition\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title font-weight-bold\" id=\"exampleModalLabel\">Ajouter des photos pour cette société<span id=\"photoMax\"></span></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          
        </button>
      </div>
      <div class=\"modal-body-img modalPhoto \">

        <div class=\"row justify-content-center align-items-center modal-picture\">
            <input type=\"file\" multiple id=\"imageTest\">
            <label for=\"imageTest\" class=\"font-weight-bold py-1 px-3\">Sélectionner des photos sur votre ordinateur</label>
        </div>
        <div id=\"picture\" class=\"picture mt-2 d-flex flex-wrap justify-content-center \">
        
          
          
        </div>

       <!-- <img id=\"imagePhoto\" class=\"w-25\">-->
      </div>
      
      <div class=\"modal-footer mt-5\">
        
        <button type=\"button\" class=\"btn btn-primary font-weight-bold\" onclick=\"hiddeModal(event)\">Valider mon choix</button>
      </div>
    </div>
  </div>
</div>





<!-- Ajout Societe -->

<div class=\"modal fade \" id=\"myModalAjoutSociete\" role=\"dialog\">
    <div class=\"modal-dialog row\" style=\"width:86em;max-width: 500em\">
    
      <!-- Modal content-->
      <div class=\"modal-content col-8 rounded-left \" style=\"height:42em;background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto pb-1\">
          
         <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Ajouter votre Société</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold mt-2\">
         <div id=\"\" class=\"\">
            
            <div id=\"connecteArtisans\" class=\"row justify-content-center\">

         
     
            <div class=\"col-4 d-flex flex-column align-items-center \">

              <div class=\"d-flex align-items-center position-relative justify-content-center \">
                <label class=\"text-muted\">Nom de la société </label>
                <span id=\"erreurNomSociete\" class=\"erreurChampsSociete position-absolute \"></span>
              </div>
              <input class=\"inputAjoutSociete rounded awesome\" id=\"nomSociété\" placeholder=\"&#xf0b1;\">
               <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                <label class=\"text-muted \">Ville</label>
                <span id=\"erreurVille\" class=\"erreurChampsSociete position-absolute \"></span>
              </div>
                <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf041;\" id=\"villeSociété\" onKeyUp=\"cleRelachee(event,document.querySelector('#villeSociété'),document.querySelector('#bodyInscription'),document.querySelector('#idVilleArtisans'),document.querySelector('#longitudeArtisans'),document.querySelector('#latitudeArtisans'),document.querySelector('#codeArtisans'))\">
                <input id=\"idVilleArtisans\" name=\"idVilleArtisans\" type=\"hidden\" value=\"\">
                <input id=\"longitudeArtisans\" name=\"longitude\" type=\"hidden\" value=\"\">
                <input id=\"latitudeArtisans\" name=\"latitude\" type=\"hidden\" value=\"\">
                <input id=\"codeArtisans\" name=\"latitude\" type=\"hidden\" value=\"\">
                <div class=\"divBodyInscriptionVille\" >
                    <ul id=\"bodyInscription\" >
                    </ul>
                </div>
              <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                 <label class=\"text-muted\">Metier</label>
                <span id=\"erreurMetier\" class=\"erreurChampsSociete position-absolute \"></span>
              </div>
               
                <select  name=\"metier\" id=\"nomMetier\" class=\"inputAjoutSociete awesome   rounded text-muted\" style=\"height:35px\">
      
                    <option   value=\"\" disabled selected hidden >&#xf039;&emsp;</option>
                    ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["metiers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                // line 326
                echo "                    <option   value=";
                echo twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 326);
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["metier"], "metier", [], "any", false, false, false, 326);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "                </select>
               <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                 <label class=\"text-muted\">Téléphone</label>
               <span id=\"erreurTelephone\" class=\"erreurChampsSociete position-absolute\"></span>
              </div>
              <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf095;\" id=\"telephoneArtisan\">
               <label class=\"text-muted mt-2\">E-mail</label>
                <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf199;\" id=\"emailArtisan\">
                <label class=\"text-muted mt-2\">Site web</label>
                <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf108;\" id=\"siteWebArtisan\">
                 <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                <label class=\"text-muted\">Date de création</label>
                <span id=\"erreurCreation\" class=\"erreurChampsSociete position-absolute\"></span>
              </div>
                
                <input class=\"inputAjoutSociete rounded awesome\" type=\"date\" placeholder=\"&#xf073;\" id=\"dateCreation\">

                
                
            </div>
            <div>
            </div>
            <div class=\"col-5 d-flex flex-column align-items-center\">
            
              <div class=\"d-flex align-items-center justify-content-center position-relative px-4 \">
                <label class=\"text-muted\">Description de la société</label>
                <span id=\"erreurDescription\" class=\"erreurChampsSociete position-absolute\"></span>
              </div>
                
                <textarea id=\"descriptionArtisan\" placeholder=\"&#xf15c;\" class=\"rounded awesome\" style=\"height:155px;width:13em\"></textarea>
                
                <button id=\"ajoutPhotoSociete\" class=\"mt-5 btn mb-2 font-weight-bold awesome\" style=\"background-image: url('./assets/img/leaf.jpg')\"> \t&#xf03e;&emsp;Ajouter des photos</button>
                <div id=\"ajoutModalSociete\" class=\"d-flex mt-2 flex-wrap justify-content-center\"> 
                </div>
                
            </div>
        
   <div class=\"col-3\">
               <div class=\"  text-center \" >

                    
                     <img id=\"imgLogo\" src=\"./assets/img/pseudoImg.jpg\" class=\"rounded-circle  position-relative border border-dark\" style=\"width:81px;height:81px\">
                     <i class=\"fas fa-times position-absolute supprimeLogo \" style=\"cursor:pointer\"></i>
                    
                    <input  type=\"file\" class=\"custom-file-input \" id=\"inputGroupFile01\" style=\"background-image: url('./assets/img/leaf.jpg')\">
                    <label style=\"background:none;border:none\" class=\"awesome text-muted \" id=\"choixPhotoProfil\" for=\"inputGroupFile01\"><span  style=\"font-size:1rem\">Choisir une photo de profil</span></label>
                    
                   
                    
                 </div>

                 <div class=\" text-center\">
                   
                    <div style=\"margin-top:59px\">
                        
                          <label for=\"inputInsta\" class=\"text-muted\"><i class=\"fab fa-instagram\" style=\"font-size:20px\"></i> Instagram</label>
                          <input id=\"inputInsta\" class=\"inputAjoutSociete rounded awesome w-100\" placeholder=\"Instagram\" value=\"@\">
                          <label for=\"inputPinter\" class=\"mt-2 text-muted\"><i class=\"fab fa-pinterest\" style=\"font-size:20px\"></i> Pinterest</label>
                          <input id=\"inputPinter\" class=\"inputAjoutSociete rounded awesome w-100\" placeholder=\"\">
                          <label for=\"inputTwitter\" class=\"mt-2 text-muted\"><i class=\"fab fa-twitter\" style=\"font-size:20px\"></i> Twitter</label>
                          <input id=\"inputTwitter\" class=\"inputAjoutSociete rounded awesome w-100\" placeholder=\"\" value=\"@\">
                        
                    </div>
                 </div>
            </div>

            
            
            <!--onclick=\"connecteUser(document.querySelector('#emailArtisanInscriptionHeader'),document.querySelector('#passwordArtisanInscriptionHeader'),document.querySelector('#reponseInscription'),document.querySelector('#nomSociété'),document.querySelector('#idVilleArtisans'),document.querySelector('#nomMetier'),document.querySelector('#nomArtisan'),document.querySelector('#prenomArtisan'),document.querySelector('#telephoneArtisan'),document.querySelector('#siteWebArtisan'),document.querySelector('#descriptionArtisan'),document.querySelector('#dateCreation'))-->
            
         </div>

           <div id=\"divChargementSociete\" class=\"d-none\">
           <span id=\"barreChargementSociete\" class=\"d-none\"></span>
         </div>
         <div id=\"divChargementReussisSociete\" class=\"d-none\">
           
            
            <img id=\"imgValide\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <p id=\"connectSuccessSociete\" class=\"informationConnexion mt-4\"></p>
            <p id=\"redirection\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
            
         </div>
     
         
          
          </div>
        </div>
      
        
        <div id=\"btnSociete\">
         <button type=\"submit\" id=\"btnInscriptionArtisans\" style=\"float:right;margin-top:-46px;z-index:5!important\" class=\" btn btn-dark font-weight-bold position-relative\">Inscription</button>
         </div>
       

    

      </div>

      <div class=\" col-4 modal-content rounded-right\" style=\"background-image: url('./assets/img/leaf.jpg');background-clip:initial;border-radius:initial;border:none\">
        <div class=\"modal-header mx-auto pb-1\">
          
         <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
         </div>
         <div class=\"modal-body bienvenueSociete  text-center \">
            <h3 class=\"font-weight-bold mb-5\">Bienvenue à nouveau!</h3>
            <div style=\"font-size:18px\">
            <p class=\"font-weight-bold\">Pour rester en contact avec nous, veuillez vous inscrire avec vos informations personnelles.</p>
            <p class=\"font-weight-bold\">Ajouter des photos vous permet de montrer la qualité de votre travaille</p>
            </div>
         </div>
      </div>

      
    </div>
  </div>
  
</div>


       


        ";
        } elseif (twig_in_filter("inscription",         // line 452
($context["page"] ?? null))) {
            // line 453
            echo "        ";
            $this->loadTemplate("inscription.block.html.twig", "main.block.html.twig", 453)->display($context);
            // line 454
            echo "        ";
            $this->displayBlock('inscription', $context, $blocks);
            // line 455
            echo "
        ";
        } elseif (twig_in_filter("confirmation",         // line 456
($context["page"] ?? null))) {
            // line 457
            echo "        ";
            $this->loadTemplate("confirmation.block.html.twig", "main.block.html.twig", 457)->display($context);
            // line 458
            echo "        ";
            $this->displayBlock('confirmation', $context, $blocks);
            // line 459
            echo "
        ";
        } elseif (twig_in_filter("avis",         // line 460
($context["page"] ?? null))) {
            // line 461
            echo "        ";
            $this->loadTemplate("avis.block.html.twig", "main.block.html.twig", 461)->display($context);
            // line 462
            echo "        ";
            $this->displayBlock('avis', $context, $blocks);
            // line 463
            echo "
        ";
        } elseif (twig_in_filter("entrepriseUnique",         // line 464
($context["page"] ?? null))) {
            // line 465
            echo "        ";
            $this->loadTemplate("entrepriseUnique.block.html.twig", "main.block.html.twig", 465)->display($context);
            // line 466
            echo "        ";
            $this->displayBlock('entrepriseUnique', $context, $blocks);
            // line 467
            echo "        ";
        }
        // line 468
        echo "
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>

<script src=\"./js/function2.js\"></script>
<script src=\"./js/register2.js\"></script>
<script src=\"./js/villes.js\"></script>
<script src=\"./js/entreprises.js\"></script>
<script src=\"./js/rating.js\"></script>
<script src=\"./js/avis.js\"></script>
<script src=\"./js/register.js\"></script>
<script src=\"./js/activate.js\"></script>
<script src=\"./js/verification.js\"></script>
<script src=\"./js/connection.js\"></script>
<script src=\"./js/ajoutSociete.js\"></script>
<script src=\"./js/entrepriseUnique.js\"></script>
<script src=\"./js/modificationSociete.js\"></script>
<script src=\"./js/affichageCompteConnecter.js\"></script>


<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>


 ";
    }

    // line 133
    public function block_recherche($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 454
    public function block_inscription($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 458
    public function block_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 462
    public function block_avis($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 466
    public function block_entrepriseUnique($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  651 => 466,  645 => 462,  639 => 458,  633 => 454,  627 => 133,  601 => 468,  598 => 467,  595 => 466,  592 => 465,  590 => 464,  587 => 463,  584 => 462,  581 => 461,  579 => 460,  576 => 459,  573 => 458,  570 => 457,  568 => 456,  565 => 455,  562 => 454,  559 => 453,  557 => 452,  431 => 328,  420 => 326,  416 => 325,  224 => 135,  220 => 133,  217 => 132,  215 => 131,  198 => 117,  140 => 61,  127 => 57,  123 => 56,  101 => 36,  90 => 34,  86 => 33,  55 => 4,  53 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block main %}

{% if page is same as('') or 'metier' in page  %}

 
<div class=\"position-relative \" style=\"height:3vh\">



<section class=\"sectionRecherche  row justify-content-center   position-absolute \">

<div class=\" row  position-absolute controle \">
    <div class=\" col-6 divControle \">
      <p class=\"mt-3 text-center font-weight-bold \" style=\"font-family: 'FontAwesome', Helvetica;\">&#xf0f7;&emsp;  Artisans</p>
    </div>
    <div class=\"  col-6 divControle1\">
      <p class=\"mt-3 text-center font-weight-bold\" style=\"font-family: 'FontAwesome', Helvetica;\">&#xf007;&emsp;Clients</p>
    </div>
</div>
<div class=\"w-100 mt-3 ml-4\" style=\"height:30px\">
<a class=\"text-white ajoutSociete font-weight-bold \" style=\"font-family: 'FontAwesome', Helvetica; font-size:16px\">&#xf0a4;&emsp;Ajouter votre société</a>
</div>

  <div class=\" divRecherche position-relative w-100\">


    <div class=\"row justify-content-center w-100 m-0\">
   
   <!-- <select  name=\"metier\" id=\"metier\" class=\"col-3 inputRecherche inputFleche mb-1\" style=\"font-family: 'FontAwesome', Helvetica; font-size:17px\">
    
        <option   value=\"\" disabled selected hidden >&#xf039;&emsp; Saisir métier</option>
        
        {% for metier in metiers %}
        <option   value={{metier.id}}>{{metier.metier}}</option>
        {% endfor %}
        
 
    </select>-->
    <div class=\"col-3 p-0 \">
    <div class=\" inputRecherche  d-flex align-items-center justify-content-between px-3 arrowMetier\" style=\"cursor:pointer\" >
        <p value=\"\" style=\"font-family: 'FontAwesome', Helvetica;font-size:17px;color:#6c757d\" class=\"metierSaisi m-0  text-capitalize\">&#xf039;&emsp; Saisir métier</p>
        
        <i class=\"fas fa-caret-down \"></i>
        
    </div>

    <div style=\"width:400px;height:250px;top:111%\" class=\" d-none \" id=\"returnArrowMetier\">
    
      <div class=\"mt-3\">
      <i class=\"fab fa-accusoft\" style=\"font-size:1.2rem\"></i>
      <h6 class=\"font-weight-bold ml-1 font-italic  d-inline\" style=\"font-size:1.1rem\">Faites votre choix</h6>
      </div>
      <ul class=\"d-flex flex-wrap flex-column py-1 pl-1 text-capitalize\" style=\"max-height:210px;max-width:270px;list-style: none;margin-top:10px\">

    
       {% for metier in metiers %}
        <li class=\"metierValue pt-1 pl-1 w-25\"  value={{metier.id}} style=\"cursor:pointer;font-size:15.5px;\">{{metier.metier}}</li>

        
        {% endfor %}
       
       </ul>
    </div>
    </div>


   <!--<div class=\"col-3\">
    <input style=\"font-family: 'FontAwesome', Helvetica; font-size:17px\" id=\"test\" name=\"ville\" type=\"text\" placeholder=\"  &#xf041;&emsp; Saisir la ville\"  onKeyUp=\"cleRelachee(event,document.querySelector('#test'),document.querySelector('#body'),document.querySelector('#idVille'),document.querySelector('#longitude'),document.querySelector('#latitude'),document.querySelector('#code'))\"  enctype='multipart/form-data' class=\" inputRecherche\">
    <input id=\"idVille\" name=\"idVille\" type=\"hidden\" value=\"\">
    <input id=\"longitude\" name=\"longitude\" type=\"hidden\" value=\"\">
    <input id=\"latitude\" name=\"latitude\" type=\"hidden\" value=\"\">
    <input id=\"code\" name=\"latitude\" type=\"hidden\" value=\"\">
    </div>-->


    <input type=\"text\" style=\"font-family: 'FontAwesome', Helvetica; font-size:17px;margin:0 0.7rem;border:0\" id=\"test\" name=\"ville\" type=\"text\" placeholder=\"  &#xf041;&emsp; Saisir la ville\"  onKeyUp=\"cleRelachee(event,document.querySelector('#test'),document.querySelector('#body'),document.querySelector('#idVille'),document.querySelector('#longitude'),document.querySelector('#latitude'),document.querySelector('#code'))\"  enctype='multipart/form-data' class=\"col-4 inputRecherche \">
    <input id=\"idVille\" name=\"idVille\" type=\"hidden\" value=\"\">
    <input id=\"longitude\" name=\"longitude\" type=\"hidden\" value=\"\">
    <input id=\"latitude\" name=\"latitude\" type=\"hidden\" value=\"\">
    <input id=\"code\" name=\"latitude\" type=\"hidden\" value=\"\">

<div class=\"position-absolute divVille mt-2 \" >
    <ul id=\"body\" class=\" mb-0 pl-4 \" >
    </ul>
</div>
  
    <!--<select   id=\"rayon\" placeholder=\"Saisir métier\" class=\"inputRecherche inputFleche col-3 \" style=\"font-family: 'FontAwesome', Helvetica; font-size:17px;max-width:22%!important\">

      
        <option value=\"0\" disabled selected hidden>&#xf05b;&emsp; Saisir rayon</option>
        <option value=\"10\">10</option>
        <option value=\"20\">20</option>
        <option value=\"30\">30</option>
   

    </select>-->
  <div class=\"col-3 p-0 position-relative\"  style=\"max-width:22%!important\"> 
    <div class=\" inputRecherche  d-flex align-items-center justify-content-between px-3 rayonSaisi\" style=\"cursor:pointer;font-family: 'FontAwesome', Helvetica; font-size:17px;\">
        <p value=\"\" style=\"color:#6c757d\"  class=\" m-0  text-capitalize\" id=\"rayon\">&#xf05b;&emsp; Saisir rayon</p>
        
        <i class=\"fas fa-caret-down \"></i>
        
    </div>


    <div class=\"d-none \" id=\"divRayonReturn\" style=\"top:111%;right:0;background-color: rgb(238, 232, 224);\">
      <ul style=\"cursor:pointer;list-style:url(./assets/img/crosshair.svg)\" class=\"py-2 mb-0 pl-3\">
        <li class=\"rayonValue\" value=\"10\">10 km</li>
        <li class=\"rayonValue\" value=\"20\">20 km</li>
        <li class=\"rayonValue\" value=\"30\">30 km</li>
      </ul>
    </div>
  </div>


  </div>
<a id=\"boutton\"   class=\"position-absolute font-weight-bold p-2 d-flex align-items-center justify-content-center\" style=\"font-family: 'FontAwesome', Helvetica;text-decoration:none;outline: none;color:black;background-color:{{affichageDesign[0]['color']}}\" type=\"submit\"><span class=\"spanRecherche\">Recherchez &emsp;&emsp;</span><span class=\"spanFleche \">&#xf178;</span></a>

</section>
</div>
 
 

<div id=\"artisansFleche\" class=\"container d-flex flex-column align-items-center position-relative\">

</div>



<div id=\"artisans\" class=\"container d-flex flex-column align-items-center position-relative\">
 {% if 'metier' in page %}
        {% include('recherche.block.html.twig') %}
        {% block recherche %}{% endblock %}
{% endif %}
</div>

<section id=\"apparence\"></section>

<div class=\"modal fade \" id=\"myModalApparition\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg row \" style=\"max-width:55em;width:53em\">
    
      <!-- Modal content-->
      <div id=\"modalContenus\" class=\"modal-content col-7 rounded-left\" style=\"background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto\">
          
         <h1 class=\" font-weight-bold  nomSite\" id=\"nomSite\" style=\"color:#16191b\">Connexion</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold\">
         <div id=\"connect\" class=\"row flex-column align-items-center mt-2\">
            
            
            <div  class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\" class=\"text-muted\">Adresse mail</label>
            <span id=\"errorUser\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input  class=\"inputConnectUser rounded p-1 awesome\" id=\"emailUser\"  placeholder=\"&#xf2c1;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"passwordUser\" class=\"mt-2 text-muted\">Mot de passe</label>
            <span id=\"errorPassword\" class=\" mt-2 erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"passwordUser\" placeholder=\"&#xf023;\">
            
            <span id=\"nonActiverAppar\" class=\"mt-3\" style=\"color:red\"></span>
            
         </div>
         
         <div class=\"d-none\" id=\"inscriptionChangement\" >
           <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"nomUserInscriptionHeader\">Nom</label>
            <span id=\"erreurNomUserApparition\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"nomUserApparition\" placeholder=\"&#xf2b9;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"prenomUserInscriptionHeader\">Prenom</label>
            <span id=\"erreurPrenomUserApparition\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"prenomUserApparition\" placeholder=\"&#xf2bb;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"emailUser\">Adresse mail</label>
            <span id=\"erreurEmailUserApparition\" class=\"erreurChampsSociete position-absolute\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"emailUserApparition\" placeholder=\"&#xf199;\">
            <div class=\"d-flex  justify-content-center position-relative w-25\">
            <label for=\"passwordUser\" class=\"mt-2\">Mot de passe</label>
            <span id=\"erreurPasswordUserApparition\" class=\"erreurChampsSociete position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"passwordUserApparition\" placeholder=\"&#xf023;\">
            <div class=\"d-flex  justify-content-center position-relative w-50\">
            <label for=\"confirmPassword\" class=\"mt-2\">Confirmer le mot de passe</label>
            <span id=\"erreurConfirmPasswordApparition\" class=\"erreurChampsSocieteConfirm position-absolute mt-2\"></span>
            </div>
            <input class=\"inputConnectUser rounded p-1 awesome\" id=\"confirmPasswordApparition\" disabled placeholder=\"&#xf023;\">
            <span id=\"strengHeaderApparition\" class=\"mb-3\"></span>
            <span id=\"reponseInscriptionApparition\"></span>
           
            
         </div>

        

         <div id=\"divBarreChargement\" class=\"d-none\">
           <span id=\"barreChargement\" class=\"d-none\"></span>
         </div>
         <div id=\"divChargement\" class=\"d-none\">
           
            
            <img id=\"imgValide\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <p id=\"connectSuccess\" class=\"informationConnexion mt-4\"></p>
            <p id=\"redirection\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
            
         </div>
         <div id=\"btnCoIns\" class=\"d-flex align-items-center flex-column mt-2\">
           <button id=\"connexionApparition\" class=\"btn btn-info font-weight-bold\" onclick=\"anonymeConnection(document.querySelector('#emailUser'),document.querySelector('#passwordUser'),document.querySelector('#errorUser'),document.querySelector('#errorPassword'),document.querySelector('#nonActiverAppar'),'#barreChargement','#connect','#btnCoIns','#divChargement','#connectSuccess','#redirection','#imgValide','#divBarreChargement')\">Connexion</button>
           <button id=\"changementConnexion\" class=\"mt-2 btn btn-success font-weight-bold\">Devenir membre</button>
          </div>
          </div>
        </div>
        <div class=\"col-5 modal-content rounded-right\" id=\"modalContenusInfo\" style=\"background-image: url('./assets/img/backco.jpeg'); background-size:cover;background-position-x: 55%;background-clip:initial;border-radius:initial;border:none;height:440px\">
          <div class=\"modal-header mx-auto \">
          
          <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
        </div>
        <div class=\"modal-body text-center bienvenueUser\">
          <h2 class=\"font-weight-bold mb-5\">Bienvenue!</h2>
          <p class=\"font-weight-bold\" id=\"pInfo\" style=\"font-size:18px\">Pour accédez a cette fonctionnalité vous devez vous connectez.</p>
        </div>
         </div>
      </div>

      
      
    </div>
  </div>
  
</div>

   

<!-- Modal Photo-->
<div class=\"modal fade \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg \" role=\"document\" id=\"testApparition\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title font-weight-bold\" id=\"exampleModalLabel\">Ajouter des photos pour cette société<span id=\"photoMax\"></span></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          
        </button>
      </div>
      <div class=\"modal-body-img modalPhoto \">

        <div class=\"row justify-content-center align-items-center modal-picture\">
            <input type=\"file\" multiple id=\"imageTest\">
            <label for=\"imageTest\" class=\"font-weight-bold py-1 px-3\">Sélectionner des photos sur votre ordinateur</label>
        </div>
        <div id=\"picture\" class=\"picture mt-2 d-flex flex-wrap justify-content-center \">
        
          
          
        </div>

       <!-- <img id=\"imagePhoto\" class=\"w-25\">-->
      </div>
      
      <div class=\"modal-footer mt-5\">
        
        <button type=\"button\" class=\"btn btn-primary font-weight-bold\" onclick=\"hiddeModal(event)\">Valider mon choix</button>
      </div>
    </div>
  </div>
</div>





<!-- Ajout Societe -->

<div class=\"modal fade \" id=\"myModalAjoutSociete\" role=\"dialog\">
    <div class=\"modal-dialog row\" style=\"width:86em;max-width: 500em\">
    
      <!-- Modal content-->
      <div class=\"modal-content col-8 rounded-left \" style=\"height:42em;background-clip:initial;border-radius:initial\">
        <div class=\"modal-header mx-auto pb-1\">
          
         <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Ajouter votre Société</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold mt-2\">
         <div id=\"\" class=\"\">
            
            <div id=\"connecteArtisans\" class=\"row justify-content-center\">

         
     
            <div class=\"col-4 d-flex flex-column align-items-center \">

              <div class=\"d-flex align-items-center position-relative justify-content-center \">
                <label class=\"text-muted\">Nom de la société </label>
                <span id=\"erreurNomSociete\" class=\"erreurChampsSociete position-absolute \"></span>
              </div>
              <input class=\"inputAjoutSociete rounded awesome\" id=\"nomSociété\" placeholder=\"&#xf0b1;\">
               <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                <label class=\"text-muted \">Ville</label>
                <span id=\"erreurVille\" class=\"erreurChampsSociete position-absolute \"></span>
              </div>
                <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf041;\" id=\"villeSociété\" onKeyUp=\"cleRelachee(event,document.querySelector('#villeSociété'),document.querySelector('#bodyInscription'),document.querySelector('#idVilleArtisans'),document.querySelector('#longitudeArtisans'),document.querySelector('#latitudeArtisans'),document.querySelector('#codeArtisans'))\">
                <input id=\"idVilleArtisans\" name=\"idVilleArtisans\" type=\"hidden\" value=\"\">
                <input id=\"longitudeArtisans\" name=\"longitude\" type=\"hidden\" value=\"\">
                <input id=\"latitudeArtisans\" name=\"latitude\" type=\"hidden\" value=\"\">
                <input id=\"codeArtisans\" name=\"latitude\" type=\"hidden\" value=\"\">
                <div class=\"divBodyInscriptionVille\" >
                    <ul id=\"bodyInscription\" >
                    </ul>
                </div>
              <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                 <label class=\"text-muted\">Metier</label>
                <span id=\"erreurMetier\" class=\"erreurChampsSociete position-absolute \"></span>
              </div>
               
                <select  name=\"metier\" id=\"nomMetier\" class=\"inputAjoutSociete awesome   rounded text-muted\" style=\"height:35px\">
      
                    <option   value=\"\" disabled selected hidden >&#xf039;&emsp;</option>
                    {% for metier in metiers %}
                    <option   value={{metier.id}}>{{metier.metier}}</option>
                    {% endfor %}
                </select>
               <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                 <label class=\"text-muted\">Téléphone</label>
               <span id=\"erreurTelephone\" class=\"erreurChampsSociete position-absolute\"></span>
              </div>
              <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf095;\" id=\"telephoneArtisan\">
               <label class=\"text-muted mt-2\">E-mail</label>
                <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf199;\" id=\"emailArtisan\">
                <label class=\"text-muted mt-2\">Site web</label>
                <input class=\"inputAjoutSociete rounded awesome\" placeholder=\"&#xf108;\" id=\"siteWebArtisan\">
                 <div class=\"d-flex align-items-center justify-content-center position-relative w-50 mt-2\">
                <label class=\"text-muted\">Date de création</label>
                <span id=\"erreurCreation\" class=\"erreurChampsSociete position-absolute\"></span>
              </div>
                
                <input class=\"inputAjoutSociete rounded awesome\" type=\"date\" placeholder=\"&#xf073;\" id=\"dateCreation\">

                
                
            </div>
            <div>
            </div>
            <div class=\"col-5 d-flex flex-column align-items-center\">
            
              <div class=\"d-flex align-items-center justify-content-center position-relative px-4 \">
                <label class=\"text-muted\">Description de la société</label>
                <span id=\"erreurDescription\" class=\"erreurChampsSociete position-absolute\"></span>
              </div>
                
                <textarea id=\"descriptionArtisan\" placeholder=\"&#xf15c;\" class=\"rounded awesome\" style=\"height:155px;width:13em\"></textarea>
                
                <button id=\"ajoutPhotoSociete\" class=\"mt-5 btn mb-2 font-weight-bold awesome\" style=\"background-image: url('./assets/img/leaf.jpg')\"> \t&#xf03e;&emsp;Ajouter des photos</button>
                <div id=\"ajoutModalSociete\" class=\"d-flex mt-2 flex-wrap justify-content-center\"> 
                </div>
                
            </div>
        
   <div class=\"col-3\">
               <div class=\"  text-center \" >

                    
                     <img id=\"imgLogo\" src=\"./assets/img/pseudoImg.jpg\" class=\"rounded-circle  position-relative border border-dark\" style=\"width:81px;height:81px\">
                     <i class=\"fas fa-times position-absolute supprimeLogo \" style=\"cursor:pointer\"></i>
                    
                    <input  type=\"file\" class=\"custom-file-input \" id=\"inputGroupFile01\" style=\"background-image: url('./assets/img/leaf.jpg')\">
                    <label style=\"background:none;border:none\" class=\"awesome text-muted \" id=\"choixPhotoProfil\" for=\"inputGroupFile01\"><span  style=\"font-size:1rem\">Choisir une photo de profil</span></label>
                    
                   
                    
                 </div>

                 <div class=\" text-center\">
                   
                    <div style=\"margin-top:59px\">
                        
                          <label for=\"inputInsta\" class=\"text-muted\"><i class=\"fab fa-instagram\" style=\"font-size:20px\"></i> Instagram</label>
                          <input id=\"inputInsta\" class=\"inputAjoutSociete rounded awesome w-100\" placeholder=\"Instagram\" value=\"@\">
                          <label for=\"inputPinter\" class=\"mt-2 text-muted\"><i class=\"fab fa-pinterest\" style=\"font-size:20px\"></i> Pinterest</label>
                          <input id=\"inputPinter\" class=\"inputAjoutSociete rounded awesome w-100\" placeholder=\"\">
                          <label for=\"inputTwitter\" class=\"mt-2 text-muted\"><i class=\"fab fa-twitter\" style=\"font-size:20px\"></i> Twitter</label>
                          <input id=\"inputTwitter\" class=\"inputAjoutSociete rounded awesome w-100\" placeholder=\"\" value=\"@\">
                        
                    </div>
                 </div>
            </div>

            
            
            <!--onclick=\"connecteUser(document.querySelector('#emailArtisanInscriptionHeader'),document.querySelector('#passwordArtisanInscriptionHeader'),document.querySelector('#reponseInscription'),document.querySelector('#nomSociété'),document.querySelector('#idVilleArtisans'),document.querySelector('#nomMetier'),document.querySelector('#nomArtisan'),document.querySelector('#prenomArtisan'),document.querySelector('#telephoneArtisan'),document.querySelector('#siteWebArtisan'),document.querySelector('#descriptionArtisan'),document.querySelector('#dateCreation'))-->
            
         </div>

           <div id=\"divChargementSociete\" class=\"d-none\">
           <span id=\"barreChargementSociete\" class=\"d-none\"></span>
         </div>
         <div id=\"divChargementReussisSociete\" class=\"d-none\">
           
            
            <img id=\"imgValide\" src=\"./assets/img/valide.png\" class=\"mt-1 imgValide\">
            <p id=\"connectSuccessSociete\" class=\"informationConnexion mt-4\"></p>
            <p id=\"redirection\" class=\"redirection\">Vous allez etre rediriger sur la page d'accueil</p>
            
         </div>
     
         
          
          </div>
        </div>
      
        
        <div id=\"btnSociete\">
         <button type=\"submit\" id=\"btnInscriptionArtisans\" style=\"float:right;margin-top:-46px;z-index:5!important\" class=\" btn btn-dark font-weight-bold position-relative\">Inscription</button>
         </div>
       

    

      </div>

      <div class=\" col-4 modal-content rounded-right\" style=\"background-image: url('./assets/img/leaf.jpg');background-clip:initial;border-radius:initial;border:none\">
        <div class=\"modal-header mx-auto pb-1\">
          
         <h1 class=\" font-weight-bold  nomSite\" style=\"color:#16191b\">Minut'Reno</h1>
         
         </div>
         <div class=\"modal-body bienvenueSociete  text-center \">
            <h3 class=\"font-weight-bold mb-5\">Bienvenue à nouveau!</h3>
            <div style=\"font-size:18px\">
            <p class=\"font-weight-bold\">Pour rester en contact avec nous, veuillez vous inscrire avec vos informations personnelles.</p>
            <p class=\"font-weight-bold\">Ajouter des photos vous permet de montrer la qualité de votre travaille</p>
            </div>
         </div>
      </div>

      
    </div>
  </div>
  
</div>


       


        {% elseif 'inscription' in page %}
        {% include('inscription.block.html.twig') %}
        {% block inscription %}{% endblock %}

        {% elseif 'confirmation' in page %}
        {% include('confirmation.block.html.twig') %}
        {% block confirmation %}{% endblock %}

        {% elseif 'avis' in page %}
        {% include('avis.block.html.twig') %}
        {% block avis %}{% endblock %}

        {% elseif 'entrepriseUnique' in page %}
        {% include('entrepriseUnique.block.html.twig') %}
        {% block entrepriseUnique %}{% endblock %}
        {% endif %}

<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>

<script src=\"./js/function2.js\"></script>
<script src=\"./js/register2.js\"></script>
<script src=\"./js/villes.js\"></script>
<script src=\"./js/entreprises.js\"></script>
<script src=\"./js/rating.js\"></script>
<script src=\"./js/avis.js\"></script>
<script src=\"./js/register.js\"></script>
<script src=\"./js/activate.js\"></script>
<script src=\"./js/verification.js\"></script>
<script src=\"./js/connection.js\"></script>
<script src=\"./js/ajoutSociete.js\"></script>
<script src=\"./js/entrepriseUnique.js\"></script>
<script src=\"./js/modificationSociete.js\"></script>
<script src=\"./js/affichageCompteConnecter.js\"></script>


<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>


 {% endblock %}", "main.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/main.block.html.twig");
    }
}
