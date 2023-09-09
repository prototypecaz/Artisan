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

/* entrepriseUnique.block.html.twig */
class __TwigTemplate_d8c0619f41e68efc839df2258f93030bfd7b6f3413113f25a06e03c3a9c297e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'entrepriseUnique' => [$this, 'block_entrepriseUnique'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('entrepriseUnique', $context, $blocks);
    }

    public function block_entrepriseUnique($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "



<section id=\"blockEntrepriseUnique\">

<div class=\"rectangleEntreprise position-relative\">

 <div id=\"affichageDivCo\" class=\"d-none\" style=\"height:auto;box-shadow: black 0px 5px 15px;border-radius:8px;top:-3.5%;right:3%;z-index:2\">

                           <div id=\"divBalayerOrigin\">
                                <div>
                                        <img class=\"mr-2\" src=\"./assets/img/pseudoImg.jpg\" style=\"border-radius:50%;width:50px;height:50px\">
                                        <span class=\"text-dark font-weight-bold\">";
        // line 15
        echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "prenom", [], "any", false, false, false, 15));
        echo "</span>
                                </div>
                                <hr style=\"background-color:#e4e6eb\">
                                <div class=\"d-flex align-items-center listSocieteCo\" style=\"cursor:pointer\" id=\"envoieMail\">
                                        <div class=\"testIconeAffichage text-center ml-2\">
                                                 <i class=\"far fa-comment-alt\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\"></i>
                                        </div>
                                         <div class=\"ml-3\">
                                                <span>Donnez votre avis</span>
                                        </div>
                                </div>
                                <hr style=\"background-color:#e4e6eb\">

                         
                                <div>
                
                                        <div id=\"voirSociété\" class=\"d-flex align-items-center listSocieteCo\" style=\"cursor:pointer\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                                        <i class=\"far fa-building text-center\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                </div>
                                                <div class=\"ml-3 w-75\">
                                                        <span>Voir mes sociétés</span>
                                                </div>
                                                <i class=\"fas fa-chevron-right \" style=\"float:right\"></i>
                                        </div>
                                        <div class=\"d-flex align-items-center my-3 listSocieteCo\" id=\"modeAffichage\" style=\"cursor:pointer\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                
                                                        <i class=\"fas fa-tv\"  style=\" top: calc(50% - 10px);position: relative;font-size:16px\" ></i>
                                                </div>
                                                <div class=\"ml-3 w-75\">
                                                        <span>Affichage </span>
                                                </div>
                                                <i class=\"fas fa-chevron-right \" style=\"float:right\"></i>
                                        </div>
                                          <div class=\"d-flex align-items-center my-3 listSocieteCo\" style=\"cursor:pointer\" id=\"supprimezCompteUser\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                                        <i class=\"far fa-trash-alt\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                        
                                                </div>
                                                <div class=\"ml-3\">
                                                        <span>Supprimez son compte</span>
                                                 </div>
                                        </div>
                     
                                        <div class=\"d-flex align-items-center listSocieteCo\" style=\"cursor:pointer\" id=\"divDeconnexion\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                                        <i class=\"fas fa-door-open\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                </div>
                                                <div class=\"ml-3\">
                                                        <span>Se déconnectez</span>
                                                 </div>
                                        </div>
                     
                     
                                </div>
                           </div>
                           <!-- Block apparition des societes -->
                           <div class=\"\" style=\"display:none\" id=\"divApparitionBalayer\">
                           <i class=\"fas fa-long-arrow-alt-left mb-3\" style=\"font-size:20px;cursor:pointer\" id=\"retourAffichageCompte\"></i>
                                <h4 class=\"font-weight-bold ml-2 mb-4\">Mes sociétés</h4>
                                ";
        // line 76
        if (twig_test_empty(($context["societeUsers"] ?? null))) {
            // line 77
            echo "                                   <span class=\"text-center font-weight-bold d-block\">Aucune société enregistré</span>
                                ";
        } else {
            // line 79
            echo "                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["societeUsers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
                // line 80
                echo "
                             <div onclick=\"location.href='?entrepriseUnique=undefined&&etablissement=";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["societe"], "id", [], "any", false, false, false, 81);
                echo "'\"  class=\"d-flex align-items-center mb-2 listSocieteCo py-1\" style=\"cursor:pointer\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                
                                                        <i class=\"far fa-building\"  style=\" top: calc(50% - 10px);position: relative;font-size:16px\" ></i>
                                                </div>
                                                <div class=\"ml-3 w-75\">
                                                        <span>";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["societe"], "nom_raison_sociale", [], "any", false, false, false, 87);
                echo " </a>
                                                </div>
                                               
                                        </div>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                 ";
        }
        // line 93
        echo "                           </div>
                        
                        <!-- Block apparition mode affichage -->
                          <div class=\"\" style=\"display:none\" id=\"divApparitionBalayerAffichage\">
                           <i class=\"fas fa-long-arrow-alt-left mb-3\" style=\"font-size:20px;cursor:pointer\" id=\"retourAffichageCompte2\"></i>
                                <h4 class=\"font-weight-bold ml-1\">Mode Affichage</h4>
                                <div>
                                        <div class=\"d-flex align-items-center my-3\">
                                           <div class=\"testIconeAffichage text-center \">
                                                        <i class=\"fas fa-tv text-center\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                </div>
                                                <h6 class=\"m-0 ml-2 font-weight-bold\">Mode sombre</h6>
                                        
                                        </div>
                                        <p class=\"ml-1\">Ajustez l’apparence de Facebook pour réduire les reflets et reposer vos yeux.</p>

                                        <div class=\"mt-4\">
                                                <div class=\"d-flex justify-content-between\">
                                                        <label>Désactivé</label>
                                                         <input value=\"1\" class=\"radio\" type=\"radio\" checked name=\"drone\">
                                                </div>

                                        
                                                <div class=\"d-flex justify-content-between mt-3\">
                                                        <label>Activé</label>
                                                         <input value=\"2\" class=\"radio\" type=\"radio\" name=\"drone\">
                                                </div>
                                        </div>
                                </div>
                          </div>


                    

                        </div>
               


</div>

<!-- Modal email-->
<div class=\"modal fade\" id=\"modalEnvoieMail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">

  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\" style=\"max-width: 43em\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Partagez votre avis</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
       
      <div class=\"modal-body\">
       
                <div>
                 <label for=\"objet\">Objet :</label>
                <input id=\"objet\" class=\"mb-3 w-100\" >
                </div>
                <div>
                <label for=\"message\">Message :</label>
                <textarea id=\"message\" class=\"w-100\"  style=\"resize:none;height:200px\"></textarea>
                </div>

                
      
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
         <button   class=\"btn btn-primary\" id=\"btnEnvoieMail\">Envoyer</button>
      </div>
     
    </div>
  </div>

</div>


<div class=\"postion-relative\" >
  <div class=\"d-none\" id=\"confirmationDuMail\" style=\"width:22em;height:60px;bottom:3%;left:1%;z-index:4;border-radius:10px\">
<span class=\"text-white font-weight-bold\">Votre message à était envoyer <i class=\"fas fa-check ml-2\"></i></span>

<i class=\"far fa-times-circle position-absolute text-white\" id=\"closeInfoMail\" style=\"top:4%;right:1%;font-size:18px;cursor:pointer\"></i>

</div>   
</div>

<!--MODAL Photo Societe-->


<div class=\"modal fade \" id=\"ModalPhotoChantier\" tabindex=\"\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" >
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\" style=\"max-width:50em; width:50em\">
    <div class=\"modal-content\" style=\"height:35em\">
     
      <div class=\"modal-body p-0\">
       <button type=\"button\" class=\"close position-absolute closePhotoSociete\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\" style=\"font-size:45px\">&times;</span>
        </button>
         <div id=\"carouselExampleIndicators\" class=\"carousel slide  carouselIndicatorsSociete\" data-ride=\"carousel\" data-interval=\"false\">
  <ol class=\"carousel-indicators carouselIndicSociete\">
   
   
  </ol>
  <div class=\"carousel-inner carouselInnerSociete\">
 
 
  </div>
  <a class=\"carousel-control-prev carouselLeft \" style=\"opacity:none!important\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon awesomePhotoSociete\" aria-hidden=\"true\">&#xf104;</span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next carouselRight\" style=\"opacity:none!important\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon  awesomePhotoSociete\" aria-hidden=\"true\">&#xf105;</span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
      </div>
    
    </div>
  </div>
</div>
<!---->





<section class=\"position-relative h-100\">





<div class=\"sectionEntreprise container rounded position-absolute \" >



";
        // line 229
        if (twig_test_empty((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["moyenne"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))) {
            // line 230
            echo "<a href=\"#sectionAvis\" class=\"text-right d-block mt-2 lienAvis\"><span class=\"  text-uppercase font-weight-bold  spanLienAvis \" style=\"font-size:0.85rem;cursor:pointer\">Avis client: <span style=\"font-size:10px\">Aucun avis</span></span></a>
";
        } else {
            // line 232
            echo "<a href=\"#sectionAvis\" class=\" text-right d-block mt-2 lienAvis\" ><span class=\" text-uppercase font-weight-bold  spanLienAvis\" style=\"font-size:0.85rem;cursor:pointer\">Avis client: <span style=\"font-size:20px\">";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["moyenne"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
            echo "/5</span> <span class=\"spanAvisClientSocieteUnique\">(";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["moyenne"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null);
            echo " avis)</span></span></a>
";
        }
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entreprise"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entrepriseUnique"]) {
            // line 235
            echo "

<div class= \"\">

   <div class=\"text-center position-relative\">
  
   
   <img src=";
            // line 242
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "logo", [], "any", false, false, false, 242))) {
                echo "\"./assets/img/pseudoImg.jpg\" ";
            } else {
                echo "\"./assets/img/uploads/";
                echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "logo", [], "any", false, false, false, 242);
                echo "\"";
            }
            echo " class=\"rounded-circle imgLogoEntreprise\" style=\"height:10.5em;width:10.5em;position:sticky;box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);border:3px solid white\">
   <div class=";
            // line 243
            if (( !twig_test_empty(($context["utilisateurConnecter"] ?? null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "id", [], "any", false, false, false, 243), twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "id_users", [], "any", false, false, false, 243))))) {
                echo "\"position-absolute d-flex align-items-center justify-content-center \" ";
            } else {
                echo "\"d-none\"";
            }
            echo " style=\"height:36px;width:36px;border-radius:50%;top:-5%;left:55%;background-color:#e4e6eb\">
   
    <input  type=\"file\" class=\"changeLogo\" id=\"inputGroupFile01\" style=\"background-image: url('./assets/img/leaf.jpg')\">
    <label style=\"background:none;border:none\" class=\"awesome text-muted p-0 my-auto\" id=\"choixPhotoProfil\" for=\"inputGroupFile01\"><i class=\"fas fa-camera-retro\" style=\"font-size:20px;\"></i></label>
   </div>

  <div class=\"d-flex justify-content-center\" style=\"margin-top:-68px\">
   <h3 id=\"titreUniqueSociete\" class=\"font-weight-bold text-dark text-uppercase  my-auto \" style=\"font-size: 1.70rem;margin-left:34px\">";
            // line 250
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "nom_raison_sociale", [], "any", false, false, false, 250);
            echo "</h3>
     <form action=\"./modificationSociete.php\" class=\"my-auto \" id=\"formulaireModifTitre\" method=\"POST\">
      <input name=\"inputModifTitre\" class=\"d-none\" id=\"inputModifTitre\" style=\"margin-left:34px\">
    </form>
   <div class=\"ml-4 my-auto position-relative\" id=\"contenusDiv\">
   <i class=";
            // line 255
            if (( !twig_test_empty(($context["utilisateurConnecter"] ?? null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "id", [], "any", false, false, false, 255), twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "id_users", [], "any", false, false, false, 255))))) {
                echo "\"fas fa-ellipsis-v  text-muted  my-auto \"";
            } else {
                echo "\"d-none\"";
            }
            echo " id=\"modificationThree\" style=\"font-size:18px;cursor:pointer;width:10px\"></i>
    
     <ul id=\"listModification\" class=\"d-none\" style=\"width:280px;list-style: none ;top:0%;left:400%;border-radius:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 5px 5px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -50px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;\">
      <li id=\"modificationTitreSociete\" class=\" py-1 px-3 listModif\"><i class=\"far fa-building iconeModif mr-3\"></i>Modifier nom société</li>
      <li id=\"modificationMetierSociete\" class=\"py-1 px-3 my-1 listModif\"><i class=\"fas fa-user-tie iconeModif mr-3\"></i>Modifier metier</li>
      <li id=\"modificationDateDeCreationSociete\" class=\"py-1 px-3 mb-1 listModif\"><i class=\"far fa-clock iconeModif mr-3\"></i>Modifier date de création</li>
      <li id=\"modificationInstagramSociete\" class=\"py-1 px-3 listModif\"><i class=\"fas fa-clipboard-list iconeModif mr-3\"></i>Modifier réseaux</li>
      <li id=\"suppressionCompte\" class=\"py-1 px-3 listModif\"><i class=\"far fa-trash-alt iconeModif mr-3\"></i>Supprimer Société</li>
     </ul>

     <div id=\"listReseauModification\" class=\"d-none\" style=\"z-index:2;width:260px;height:238px;list-style: none ;top:0%;left:400%;border-radius:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 5px 5px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -50px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;\">

     <div id=\"listReseauModifierDiv2\">
     <i class=\"fa fa-mouse-pointer iconeSociete text-muted\"></i><input id=\"inputModifSite\" type=\"text\" class=\"ml-3\" value=\"";
            // line 268
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "siteWeb", [], "any", false, false, false, 268);
            echo "\">
     <i class=\"fab fa-instagram iconeSociete  text-muted\"></i><input id=\"inputModifInsta\" type=\"text\" class=\"ml-2 my-2\" value=\"";
            // line 269
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "instagram", [], "any", false, false, false, 269);
            echo "\">
     <i class=\"fab fa-pinterest-square iconeSociete text-muted\"></i><input id=\"inputModifPinterest\" type=\"text\" class=\"ml-2\" value=\"";
            // line 270
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "pinterest", [], "any", false, false, false, 270);
            echo "\">
     <i class=\"fab fa-twitter iconeSociete text-muted\" style=\"font-size:18px\"></i><input id=\"inputModifTwitter\" type=\"text\" class=\"ml-2 mt-2\" value=\"";
            // line 271
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "twitter", [], "any", false, false, false, 271);
            echo "\">
    
     <div class=\"mt-4 text-right\">
      <button id=\"annulationModifReseau\" class=\"btn font-weight-bold text-white\" style=\"background-color:#6c757d\">Annuler</button>
      <button id=\"modificationReseauSociaux\" class=\"btn btn-info font-weight-bold\">Enregistrer</button>
     </div>
     </div>

  <div id=\"barreChargementSuspension\" class=\"d-none\">
        <iframe src=\"./assets/img/loading-25.gif\" style=\"cursor:none\"  width=\"60\" height=\"60\" frameBorder=\"0\" class=\"giphy-embed my-auto \" allowFullScreen></iframe>
     </div>

     <div id=\"modificationEnregistrer\" class=\"d-none\">
     <i class=\"fas fa-check\" style=\"font-size:30px\"></i>
     <p class=\"mt-3 font-weight-bold\">Enregistrer</p>
     </div>
    
     </div>

    
    
     
   </div>
  </div>
   
   ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["metier"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["metierUnique"]) {
                // line 297
                echo "   <h6 class=\" mt-4 text-uppercase font-weight-bold\" id=\"metierSocieteUnique\" style=\"font-size:0.75rem\">";
                echo twig_get_attribute($this->env, $this->source, $context["metierUnique"], "metier", [], "any", false, false, false, 297);
                echo "</h6>
    <div class=\"d-none\" id=\"selecMetierSocieteModif\">
    <div class=\" inputRecherche  d-flex align-items-center justify-content-between px-3 arrowMetier\" style=\"cursor:pointer\" >
        <p value=\"\" style=\"font-family: 'FontAwesome', Helvetica;font-size:17px;color:#6c757d\" class=\"metierSaisi m-0  text-capitalize\">&#xf039;&emsp; Saisir métier</p>
        
        <i class=\"fas fa-caret-down \"></i>
        
    </div>

    <div style=\"width:400px;height:250px;top:111%\" style=\"\"class=\" d-none \" id=\"returnArrowMetier\">
    
      <div class=\"mt-3\">
      <i class=\"fab fa-accusoft\" style=\"font-size:1.2rem\"></i>
      <h6 class=\"font-weight-bold ml-1 font-italic  d-inline\" style=\"font-size:1.1rem\">Faites votre choix</h6>
      </div>
      <ul class=\"d-flex flex-wrap flex-column py-1 pl-1 text-capitalize\" style=\"max-height:210px;max-width:270px;list-style: none;margin-top:10px\">

    
       ";
                // line 315
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 316
                    echo "        <li class=\"metierValue pt-1 pl-1 w-25\"  value=";
                    echo twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 316);
                    echo " style=\"cursor:pointer;font-size:15.5px;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["metier"], "metier", [], "any", false, false, false, 316);
                    echo "</li>

        
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                echo "       
       </ul>
    </div>
    </div>
   <h6 id=\"dateDeCreation\" class=\" mt-4 text-uppercase font-weight-bold\" style=\"font-size:0.75rem\">Date de création de l'entreprise:   &#160;";
                // line 324
                echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "dateSociete", [], "any", false, false, false, 324);
                echo "</h6>
  
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metierUnique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "   </div>

   <div class=\"text-center mt-4\">
      <a href=\"https://";
            // line 330
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "siteWeb", [], "any", false, false, false, 330);
            echo "\" target=\"_blank\"><i class=\"fa fa-mouse-pointer iconeSociete text-muted\"></i></a>
      <i class=\"fab fa-instagram iconeSociete mx-4 text-muted\"></i>
      <i class=\"fab fa-pinterest-square iconeSociete text-muted\"></i>
   </div>

   <div id=\"divDescription\" class=\"text-center mt-5 mx-auto position-relative\" style=\"max-width:47em\">
      <p class=\"pDescriptionSociete\"  style=\"font-size:16px;word-wrap: break-word\">";
            // line 336
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "description", [], "any", false, false, false, 336);
            echo "</p>
    <i class=";
            // line 337
            if (( !twig_test_empty(($context["utilisateurConnecter"] ?? null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "id", [], "any", false, false, false, 337), twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "id_users", [], "any", false, false, false, 337))))) {
                echo "\"fas fa-pen position-absolute\"";
            } else {
                echo "\"-d-none\"";
            }
            echo "  id=\"modifDescription\" style=\"top:-5%;right:-18%;cursor:pointer\"></i>
    <form action=\"./modificationSociete.php\" id=\"formulaireModifDescription\" method=\"POST\">
      <textarea name=\"inputModifDescription\" class=\"d-none\" id=\"inputModifDescription\"></textarea>
      <input type=\"hidden\" name=\"idEntreprise\" id=\"modificationSocieteId\" value=";
            // line 340
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "id", [], "any", false, false, false, 340);
            echo ">
    </form>
      
   </div>

   <div class=\"divPhoneEmail d-flex justify-content-center\">
      <div class=\"divInfoSociete d-flex flex-column justify-content-center rounded align-items-center mr-4 \"  onclick = \"document.querySelector('.telephoneUnique').textContent='";
            // line 346
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "telephone", [], "any", false, false, false, 346);
            echo "';this.style.width='auto';this.style.padding='48px 15px' \">
         
         <i class=\"fas fa-phone mt-2\" style=\"font-size:25px\"></i>
         <p class=\"font-weight-bold mt-2 telephoneUnique\">Telephone</p>
         
      </div>
       
        <div class=\" divInfoSociete d-flex flex-column justify-content-center rounded align-items-center \" onclick = \"document.querySelector('.emailUnique').textContent='";
            // line 353
            echo twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "email", [], "any", false, false, false, 353);
            echo "';this.style.width='auto';this.style.padding='48px 15px'\">
         
         <i class=\"fas fa-envelope-square iconeSociete mt-2 \" style=\"font-size:27px\"></i>
         <p class=\"font-weight-bold mt-2 emailUnique\">E-mail</p>
         
      </div>
   </div>
<h1 class=\"text-center  avisSocieteUnique\" style=\"text-transform:none!important\"><b>Phot<span style=\"color:#0cc990\">o</span>s</b> prise par la société</h1>
<hr class=\" text-dark hrSocieteUnique\" style=\"border-top: 2px solid black;width:87.5px\">
   <div  class=\"photoSocieteUnique d-flex align-items-center position-relative\">
     <i class=";
            // line 363
            if (( !twig_test_empty(($context["utilisateurConnecter"] ?? null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "id", [], "any", false, false, false, 363), twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "id_users", [], "any", false, false, false, 363))))) {
                echo "\"fas fa-plus position-absolute\"";
            } else {
                echo "\"d-none\"";
            }
            echo " id=\"ajoutPhotoSocieteUnique\" style=\"top:4%;right:2%;font-size:20px;cursor:pointer\"></i>
     <div class=\" row justify-content-center mx-auto align-items-center pt-3 w-100\" id=\"photoPartager\">
     ";
            // line 365
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "photoChantier", [], "any", false, false, false, 365))) {
                // line 366
                echo "     <p class=\"font-weight-bold\" id=\"aucunPartage\" style=\"font-size:23px\">Aucune photo partager</p>

     ";
            } else {
                // line 369
                echo "     
   ";
                // line 370
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entrepriseUnique"], "photoChantier", [], "any", false, false, false, 370), ","));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["photoChantier"]) {
                    // line 371
                    echo "
         ";
                    // line 372
                    if ( !($context["photoChantier"] === "")) {
                        // line 373
                        echo "    
     <img id=\"photoUnique";
                        // line 374
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 374);
                        echo "\" class=\"col-2  p-3 ml-3 imgPhotoChantier rounded mb-3\" src=\"./assets/img";
                        echo $context["photoChantier"];
                        echo "\">
         ";
                    }
                    // line 376
                    echo "      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photoChantier'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 377
                echo "       ";
            }
            // line 378
            echo "   </div>

</div>
   
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrepriseUnique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "
<div class=\"row  \" style=\"margin-top:140px\">
<div class=\"text-center offset-4 col-4\" style=>
<h1 id=\"sectionAvis\" class=\"\" style=\"text-transform:none!important;font-family: taFont3;\"><b><span style=\"color:#0cc990\">A</span>vis</b> des clients</h1>
<hr class=\"w-25 text-dark  hrSocieteUnique \" style=\"border-top: 2px solid black\">
</div>

<div class=\"col-4 mt-4\">
<span class=\" font-weight-bold text-info mb-2 btnVoteAvisUnique\" style=\"font-size:12px;float:right;cursor:pointer\"><i class=\"fas fa-comment mr-1\"></i>Ajouter un commentaire</span>
</div>
</div>

";
        // line 396
        if (twig_test_empty(($context["notes"] ?? null))) {
            // line 397
            echo "
<p style=\"font-size:23px;margin-bottom:70px\" class=\"font-weight-bold text-center mt-5\">Aucun avis clients</p>

";
        } else {
            // line 401
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 402
                echo "

<div  class=\" rounded mb-4 p-3 mx-auto row \" style=\"background-color:#e9e3dc;width:80%;\">
<div  class=\"col-9 \">
<i class=\"fas fa-quote-right d-block mb-3 ml-1\" style=\"font-size:35px\"></i>

  <span style=\"font-size: 17px;\" class=\"starsSociete ml-5\" data-rating=\"";
                // line 408
                echo twig_get_attribute($this->env, $this->source, $context["note"], "avis", [], "any", false, false, false, 408);
                echo "\" data-num-stars=\"5\">
  <i class=\"fas fa-circle\" style=\"color:#28a745\"></i>
  <i class=\"fas fa-circle\" style=\"color:#28a745\"></i>
  <i class=\"fas fa-adjust\" style=\"color:#28a745\"></i>
  <i class=\"far fa-circle\" style=\"color:#28a745\"></i>
  <i class=\"far fa-circle\" style=\"color:#28a745\"></i>
  </span>
  
   
   <h6 class=\"font-weight-bold ml-5 mt-3 text-uppercase titreAvisUnique\">";
                // line 417
                echo twig_get_attribute($this->env, $this->source, $context["note"], "titre", [], "any", false, false, false, 417);
                echo "</h6>
   <p style=\"font-size:14px;word-wrap: break-word\" class=\"ml-5  texteAvisUnique\">";
                // line 418
                echo twig_get_attribute($this->env, $this->source, $context["note"], "commentaire", [], "any", false, false, false, 418);
                echo "</p>
   
</div>

<div class=\"col-3 align-self-center text-center\">

";
                // line 424
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["note"], "photo", [], "any", false, false, false, 424), ""))) {
                    // line 425
                    echo "<button class=\"btn btn-dark font-weight-bold mt-3 btnModalPhotoAvisClient\" >Voir photos</button>

";
                }
                // line 428
                echo "
";
                // line 429
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["note"], "id_users", [], "any", false, false, false, 429), twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "id", [], "any", false, false, false, 429)))) {
                    // line 430
                    echo "
<button  value=\"";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 431);
                    echo "\" data-avis=";
                    echo twig_get_attribute($this->env, $this->source, $context["note"], "avis", [], "any", false, false, false, 431);
                    echo " data-entreprise=";
                    echo twig_get_attribute($this->env, $this->source, $context["note"], "idEntreprise", [], "any", false, false, false, 431);
                    echo " class=\"deleteCommentaire btn btn-warning mt-3 font-weight-bold\">Supprimer</button>
";
                }
                // line 433
                echo "<input type=\"hidden\" data=\"";
                echo twig_get_attribute($this->env, $this->source, $context["note"], "photo", [], "any", false, false, false, 433);
                echo "\"   data-commentaire=\"";
                echo twig_get_attribute($this->env, $this->source, $context["note"], "commentaire", [], "any", false, false, false, 433);
                echo "\" >
</div>
<p class=\"text-right text-muted w-100\" style=\"margin:0\">il y a ";
                // line 435
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["note"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["hoursOrMin"] ?? null) : null);
                echo "</p>


           
   ";
                // line 449
                echo "
</div>

<div class=\"modal fade \" id=\"modalPhotoAvisClient\" tabindex=\"\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" >
  <div class=\"modal-dialog modal-dialog-centered modalPhotoAvisClientDialog\" role=\"document\" style=\"max-width:63em; width:63em\">
    <div class=\"modal-content\" style=\"height:35em\">
     
      <div class=\"modal-body p-0\">
      
    <button type=\"button\" class=\"close position-absolute closeAvisModalSociete\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\" style=\"font-size:45px\">&times;</span>
        </button>

<div id=\"carouselExampleControls\" class=\"carousel slide carouselIndicatorsAvis row mx-0\" data-ride=\"carousel\">
<div class=\"col-8 p-0\">
  <div class=\"carousel-inner carouselInnerAvis\">
    
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
<div class=\"col-4 divTitreCommentaireModal  \">


</div>
</div>
      </div>
    
    </div>
  </div>
</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 489
        echo "<!--MODAL Photo AvisClient-->





<!---->

</div>
</section>

<!-- Modal Photo-->
<div class=\"modal fade \" id=\"modalModificationPhoto\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg \" role=\"document\" id=\"testApparition\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title font-weight-bold\" id=\"exampleModalLabel\">Ajouter des photos pour cette société<span id=\"photoMax\"></span></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          
        </button>
      </div>
      <div class=\"modal-body-img modalPhoto \">

        <div class=\"row justify-content-center align-items-center modal-picture\">
            <input type=\"file\" multiple id=\"imageModificationUnique\">
            <label for=\"imageModificationUnique\" class=\"font-weight-bold py-1 px-3\">Sélectionner des photos sur votre ordinateur</label>
        </div>
        <div id=\"picture\" class=\"picture mt-2 d-flex flex-wrap justify-content-center \">
        
       ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["entreprise"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null), "photoChantier", [], "any", false, false, false, 518), ","));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["photoChantier"]) {
            // line 519
            echo "       
           

         ";
            // line 522
            if ( !($context["photoChantier"] === "")) {
                // line 523
                echo "    <div class=\"row align-items-start mx-1 mt-2 \" id=\"divAjoutDimage\">
     <img  style=\"width: 110px; height: 88px;\" class=\"imageAModifier\" src=\"./assets/img";
                // line 524
                echo $context["photoChantier"];
                echo "\">
     
     <span id=\"";
                // line 526
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 526);
                echo "\"  class=\"ml-1 font-weight-normal modificationX\">×</span>
     </div>
         ";
            }
            // line 529
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photoChantier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "      
          
        </div>

       <!-- <img id=\"imagePhoto\" class=\"w-25\">-->
      </div>
      
      <div class=\"modal-footer mt-5\">
        
        <button type=\"button\" class=\"btn btn-primary font-weight-bold\" id=\"validationImageModifier\">Valider mon choix</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Commentaire -->

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
        <div id=\"picture\" class=\"picture2 mt-2 d-flex flex-wrap justify-content-center \">
        
          
          
        </div>

       <!-- <img id=\"imagePhoto\" class=\"w-25\">-->
      </div>
      
      <div class=\"modal-footer mt-5\">
        
        <button type=\"button\" class=\"btn btn-primary font-weight-bold\" onclick=\"hiddeModal(event)\">Valider mon choix</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Apparition-->

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

</section>

";
    }

    public function getTemplateName()
    {
        return "entrepriseUnique.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  841 => 530,  827 => 529,  821 => 526,  816 => 524,  813 => 523,  811 => 522,  806 => 519,  789 => 518,  758 => 489,  713 => 449,  706 => 435,  698 => 433,  689 => 431,  686 => 430,  684 => 429,  681 => 428,  676 => 425,  674 => 424,  665 => 418,  661 => 417,  649 => 408,  641 => 402,  637 => 401,  631 => 397,  629 => 396,  615 => 384,  604 => 378,  601 => 377,  587 => 376,  580 => 374,  577 => 373,  575 => 372,  572 => 371,  555 => 370,  552 => 369,  547 => 366,  545 => 365,  536 => 363,  523 => 353,  513 => 346,  504 => 340,  494 => 337,  490 => 336,  481 => 330,  476 => 327,  467 => 324,  461 => 320,  448 => 316,  444 => 315,  422 => 297,  418 => 296,  390 => 271,  386 => 270,  382 => 269,  378 => 268,  358 => 255,  350 => 250,  336 => 243,  326 => 242,  317 => 235,  313 => 234,  305 => 232,  301 => 230,  299 => 229,  161 => 93,  158 => 92,  147 => 87,  138 => 81,  135 => 80,  130 => 79,  126 => 77,  124 => 76,  60 => 15,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block entrepriseUnique %}




<section id=\"blockEntrepriseUnique\">

<div class=\"rectangleEntreprise position-relative\">

 <div id=\"affichageDivCo\" class=\"d-none\" style=\"height:auto;box-shadow: black 0px 5px 15px;border-radius:8px;top:-3.5%;right:3%;z-index:2\">

                           <div id=\"divBalayerOrigin\">
                                <div>
                                        <img class=\"mr-2\" src=\"./assets/img/pseudoImg.jpg\" style=\"border-radius:50%;width:50px;height:50px\">
                                        <span class=\"text-dark font-weight-bold\">{{utilisateurConnecter[0].prenom | capitalize}}</span>
                                </div>
                                <hr style=\"background-color:#e4e6eb\">
                                <div class=\"d-flex align-items-center listSocieteCo\" style=\"cursor:pointer\" id=\"envoieMail\">
                                        <div class=\"testIconeAffichage text-center ml-2\">
                                                 <i class=\"far fa-comment-alt\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\"></i>
                                        </div>
                                         <div class=\"ml-3\">
                                                <span>Donnez votre avis</span>
                                        </div>
                                </div>
                                <hr style=\"background-color:#e4e6eb\">

                         
                                <div>
                
                                        <div id=\"voirSociété\" class=\"d-flex align-items-center listSocieteCo\" style=\"cursor:pointer\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                                        <i class=\"far fa-building text-center\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                </div>
                                                <div class=\"ml-3 w-75\">
                                                        <span>Voir mes sociétés</span>
                                                </div>
                                                <i class=\"fas fa-chevron-right \" style=\"float:right\"></i>
                                        </div>
                                        <div class=\"d-flex align-items-center my-3 listSocieteCo\" id=\"modeAffichage\" style=\"cursor:pointer\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                
                                                        <i class=\"fas fa-tv\"  style=\" top: calc(50% - 10px);position: relative;font-size:16px\" ></i>
                                                </div>
                                                <div class=\"ml-3 w-75\">
                                                        <span>Affichage </span>
                                                </div>
                                                <i class=\"fas fa-chevron-right \" style=\"float:right\"></i>
                                        </div>
                                          <div class=\"d-flex align-items-center my-3 listSocieteCo\" style=\"cursor:pointer\" id=\"supprimezCompteUser\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                                        <i class=\"far fa-trash-alt\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                        
                                                </div>
                                                <div class=\"ml-3\">
                                                        <span>Supprimez son compte</span>
                                                 </div>
                                        </div>
                     
                                        <div class=\"d-flex align-items-center listSocieteCo\" style=\"cursor:pointer\" id=\"divDeconnexion\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                                        <i class=\"fas fa-door-open\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                </div>
                                                <div class=\"ml-3\">
                                                        <span>Se déconnectez</span>
                                                 </div>
                                        </div>
                     
                     
                                </div>
                           </div>
                           <!-- Block apparition des societes -->
                           <div class=\"\" style=\"display:none\" id=\"divApparitionBalayer\">
                           <i class=\"fas fa-long-arrow-alt-left mb-3\" style=\"font-size:20px;cursor:pointer\" id=\"retourAffichageCompte\"></i>
                                <h4 class=\"font-weight-bold ml-2 mb-4\">Mes sociétés</h4>
                                {% if societeUsers is empty %}
                                   <span class=\"text-center font-weight-bold d-block\">Aucune société enregistré</span>
                                {% else %}
                             {% for societe in societeUsers %}

                             <div onclick=\"location.href='?entrepriseUnique=undefined&&etablissement={{societe.id}}'\"  class=\"d-flex align-items-center mb-2 listSocieteCo py-1\" style=\"cursor:pointer\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                
                                                        <i class=\"far fa-building\"  style=\" top: calc(50% - 10px);position: relative;font-size:16px\" ></i>
                                                </div>
                                                <div class=\"ml-3 w-75\">
                                                        <span>{{societe.nom_raison_sociale}} </a>
                                                </div>
                                               
                                        </div>
                                 {% endfor %}
                                 {% endif %}
                           </div>
                        
                        <!-- Block apparition mode affichage -->
                          <div class=\"\" style=\"display:none\" id=\"divApparitionBalayerAffichage\">
                           <i class=\"fas fa-long-arrow-alt-left mb-3\" style=\"font-size:20px;cursor:pointer\" id=\"retourAffichageCompte2\"></i>
                                <h4 class=\"font-weight-bold ml-1\">Mode Affichage</h4>
                                <div>
                                        <div class=\"d-flex align-items-center my-3\">
                                           <div class=\"testIconeAffichage text-center \">
                                                        <i class=\"fas fa-tv text-center\" style=\" top: calc(50% - 10px);position: relative;font-size:18px\" ></i>
                                                </div>
                                                <h6 class=\"m-0 ml-2 font-weight-bold\">Mode sombre</h6>
                                        
                                        </div>
                                        <p class=\"ml-1\">Ajustez l’apparence de Facebook pour réduire les reflets et reposer vos yeux.</p>

                                        <div class=\"mt-4\">
                                                <div class=\"d-flex justify-content-between\">
                                                        <label>Désactivé</label>
                                                         <input value=\"1\" class=\"radio\" type=\"radio\" checked name=\"drone\">
                                                </div>

                                        
                                                <div class=\"d-flex justify-content-between mt-3\">
                                                        <label>Activé</label>
                                                         <input value=\"2\" class=\"radio\" type=\"radio\" name=\"drone\">
                                                </div>
                                        </div>
                                </div>
                          </div>


                    

                        </div>
               


</div>

<!-- Modal email-->
<div class=\"modal fade\" id=\"modalEnvoieMail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">

  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\" style=\"max-width: 43em\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Partagez votre avis</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
       
      <div class=\"modal-body\">
       
                <div>
                 <label for=\"objet\">Objet :</label>
                <input id=\"objet\" class=\"mb-3 w-100\" >
                </div>
                <div>
                <label for=\"message\">Message :</label>
                <textarea id=\"message\" class=\"w-100\"  style=\"resize:none;height:200px\"></textarea>
                </div>

                
      
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
         <button   class=\"btn btn-primary\" id=\"btnEnvoieMail\">Envoyer</button>
      </div>
     
    </div>
  </div>

</div>


<div class=\"postion-relative\" >
  <div class=\"d-none\" id=\"confirmationDuMail\" style=\"width:22em;height:60px;bottom:3%;left:1%;z-index:4;border-radius:10px\">
<span class=\"text-white font-weight-bold\">Votre message à était envoyer <i class=\"fas fa-check ml-2\"></i></span>

<i class=\"far fa-times-circle position-absolute text-white\" id=\"closeInfoMail\" style=\"top:4%;right:1%;font-size:18px;cursor:pointer\"></i>

</div>   
</div>

<!--MODAL Photo Societe-->


<div class=\"modal fade \" id=\"ModalPhotoChantier\" tabindex=\"\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" >
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\" style=\"max-width:50em; width:50em\">
    <div class=\"modal-content\" style=\"height:35em\">
     
      <div class=\"modal-body p-0\">
       <button type=\"button\" class=\"close position-absolute closePhotoSociete\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\" style=\"font-size:45px\">&times;</span>
        </button>
         <div id=\"carouselExampleIndicators\" class=\"carousel slide  carouselIndicatorsSociete\" data-ride=\"carousel\" data-interval=\"false\">
  <ol class=\"carousel-indicators carouselIndicSociete\">
   
   
  </ol>
  <div class=\"carousel-inner carouselInnerSociete\">
 
 
  </div>
  <a class=\"carousel-control-prev carouselLeft \" style=\"opacity:none!important\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon awesomePhotoSociete\" aria-hidden=\"true\">&#xf104;</span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next carouselRight\" style=\"opacity:none!important\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon  awesomePhotoSociete\" aria-hidden=\"true\">&#xf105;</span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
      </div>
    
    </div>
  </div>
</div>
<!---->





<section class=\"position-relative h-100\">





<div class=\"sectionEntreprise container rounded position-absolute \" >



{% if moyenne[1] is empty  %}
<a href=\"#sectionAvis\" class=\"text-right d-block mt-2 lienAvis\"><span class=\"  text-uppercase font-weight-bold  spanLienAvis \" style=\"font-size:0.85rem;cursor:pointer\">Avis client: <span style=\"font-size:10px\">Aucun avis</span></span></a>
{% else %}
<a href=\"#sectionAvis\" class=\" text-right d-block mt-2 lienAvis\" ><span class=\" text-uppercase font-weight-bold  spanLienAvis\" style=\"font-size:0.85rem;cursor:pointer\">Avis client: <span style=\"font-size:20px\">{{moyenne[0]}}/5</span> <span class=\"spanAvisClientSocieteUnique\">({{moyenne[1]}} avis)</span></span></a>
{% endif %}
{% for entrepriseUnique in entreprise %}


<div class= \"\">

   <div class=\"text-center position-relative\">
  
   
   <img src={% if entrepriseUnique.logo is empty %}\"./assets/img/pseudoImg.jpg\" {% else %}\"./assets/img/uploads/{{entrepriseUnique.logo}}\"{% endif %} class=\"rounded-circle imgLogoEntreprise\" style=\"height:10.5em;width:10.5em;position:sticky;box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);border:3px solid white\">
   <div class={% if utilisateurConnecter is not empty and utilisateurConnecter[0].id == entrepriseUnique.id_users %}\"position-absolute d-flex align-items-center justify-content-center \" {% else %}\"d-none\"{% endif %} style=\"height:36px;width:36px;border-radius:50%;top:-5%;left:55%;background-color:#e4e6eb\">
   
    <input  type=\"file\" class=\"changeLogo\" id=\"inputGroupFile01\" style=\"background-image: url('./assets/img/leaf.jpg')\">
    <label style=\"background:none;border:none\" class=\"awesome text-muted p-0 my-auto\" id=\"choixPhotoProfil\" for=\"inputGroupFile01\"><i class=\"fas fa-camera-retro\" style=\"font-size:20px;\"></i></label>
   </div>

  <div class=\"d-flex justify-content-center\" style=\"margin-top:-68px\">
   <h3 id=\"titreUniqueSociete\" class=\"font-weight-bold text-dark text-uppercase  my-auto \" style=\"font-size: 1.70rem;margin-left:34px\">{{entrepriseUnique.nom_raison_sociale}}</h3>
     <form action=\"./modificationSociete.php\" class=\"my-auto \" id=\"formulaireModifTitre\" method=\"POST\">
      <input name=\"inputModifTitre\" class=\"d-none\" id=\"inputModifTitre\" style=\"margin-left:34px\">
    </form>
   <div class=\"ml-4 my-auto position-relative\" id=\"contenusDiv\">
   <i class={% if utilisateurConnecter is not empty and utilisateurConnecter[0].id == entrepriseUnique.id_users %}\"fas fa-ellipsis-v  text-muted  my-auto \"{% else %}\"d-none\"{% endif %} id=\"modificationThree\" style=\"font-size:18px;cursor:pointer;width:10px\"></i>
    
     <ul id=\"listModification\" class=\"d-none\" style=\"width:280px;list-style: none ;top:0%;left:400%;border-radius:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 5px 5px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -50px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;\">
      <li id=\"modificationTitreSociete\" class=\" py-1 px-3 listModif\"><i class=\"far fa-building iconeModif mr-3\"></i>Modifier nom société</li>
      <li id=\"modificationMetierSociete\" class=\"py-1 px-3 my-1 listModif\"><i class=\"fas fa-user-tie iconeModif mr-3\"></i>Modifier metier</li>
      <li id=\"modificationDateDeCreationSociete\" class=\"py-1 px-3 mb-1 listModif\"><i class=\"far fa-clock iconeModif mr-3\"></i>Modifier date de création</li>
      <li id=\"modificationInstagramSociete\" class=\"py-1 px-3 listModif\"><i class=\"fas fa-clipboard-list iconeModif mr-3\"></i>Modifier réseaux</li>
      <li id=\"suppressionCompte\" class=\"py-1 px-3 listModif\"><i class=\"far fa-trash-alt iconeModif mr-3\"></i>Supprimer Société</li>
     </ul>

     <div id=\"listReseauModification\" class=\"d-none\" style=\"z-index:2;width:260px;height:238px;list-style: none ;top:0%;left:400%;border-radius:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 5px 5px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -50px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;\">

     <div id=\"listReseauModifierDiv2\">
     <i class=\"fa fa-mouse-pointer iconeSociete text-muted\"></i><input id=\"inputModifSite\" type=\"text\" class=\"ml-3\" value=\"{{entrepriseUnique.siteWeb}}\">
     <i class=\"fab fa-instagram iconeSociete  text-muted\"></i><input id=\"inputModifInsta\" type=\"text\" class=\"ml-2 my-2\" value=\"{{entrepriseUnique.instagram}}\">
     <i class=\"fab fa-pinterest-square iconeSociete text-muted\"></i><input id=\"inputModifPinterest\" type=\"text\" class=\"ml-2\" value=\"{{entrepriseUnique.pinterest}}\">
     <i class=\"fab fa-twitter iconeSociete text-muted\" style=\"font-size:18px\"></i><input id=\"inputModifTwitter\" type=\"text\" class=\"ml-2 mt-2\" value=\"{{entrepriseUnique.twitter}}\">
    
     <div class=\"mt-4 text-right\">
      <button id=\"annulationModifReseau\" class=\"btn font-weight-bold text-white\" style=\"background-color:#6c757d\">Annuler</button>
      <button id=\"modificationReseauSociaux\" class=\"btn btn-info font-weight-bold\">Enregistrer</button>
     </div>
     </div>

  <div id=\"barreChargementSuspension\" class=\"d-none\">
        <iframe src=\"./assets/img/loading-25.gif\" style=\"cursor:none\"  width=\"60\" height=\"60\" frameBorder=\"0\" class=\"giphy-embed my-auto \" allowFullScreen></iframe>
     </div>

     <div id=\"modificationEnregistrer\" class=\"d-none\">
     <i class=\"fas fa-check\" style=\"font-size:30px\"></i>
     <p class=\"mt-3 font-weight-bold\">Enregistrer</p>
     </div>
    
     </div>

    
    
     
   </div>
  </div>
   
   {% for metierUnique in metier %}
   <h6 class=\" mt-4 text-uppercase font-weight-bold\" id=\"metierSocieteUnique\" style=\"font-size:0.75rem\">{{metierUnique.metier}}</h6>
    <div class=\"d-none\" id=\"selecMetierSocieteModif\">
    <div class=\" inputRecherche  d-flex align-items-center justify-content-between px-3 arrowMetier\" style=\"cursor:pointer\" >
        <p value=\"\" style=\"font-family: 'FontAwesome', Helvetica;font-size:17px;color:#6c757d\" class=\"metierSaisi m-0  text-capitalize\">&#xf039;&emsp; Saisir métier</p>
        
        <i class=\"fas fa-caret-down \"></i>
        
    </div>

    <div style=\"width:400px;height:250px;top:111%\" style=\"\"class=\" d-none \" id=\"returnArrowMetier\">
    
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
   <h6 id=\"dateDeCreation\" class=\" mt-4 text-uppercase font-weight-bold\" style=\"font-size:0.75rem\">Date de création de l'entreprise:   &#160;{{entrepriseUnique.dateSociete}}</h6>
  
   {% endfor %}
   </div>

   <div class=\"text-center mt-4\">
      <a href=\"https://{{entrepriseUnique.siteWeb}}\" target=\"_blank\"><i class=\"fa fa-mouse-pointer iconeSociete text-muted\"></i></a>
      <i class=\"fab fa-instagram iconeSociete mx-4 text-muted\"></i>
      <i class=\"fab fa-pinterest-square iconeSociete text-muted\"></i>
   </div>

   <div id=\"divDescription\" class=\"text-center mt-5 mx-auto position-relative\" style=\"max-width:47em\">
      <p class=\"pDescriptionSociete\"  style=\"font-size:16px;word-wrap: break-word\">{{entrepriseUnique.description}}</p>
    <i class={% if utilisateurConnecter is not empty and utilisateurConnecter[0].id == entrepriseUnique.id_users %}\"fas fa-pen position-absolute\"{% else %}\"-d-none\"{% endif %}  id=\"modifDescription\" style=\"top:-5%;right:-18%;cursor:pointer\"></i>
    <form action=\"./modificationSociete.php\" id=\"formulaireModifDescription\" method=\"POST\">
      <textarea name=\"inputModifDescription\" class=\"d-none\" id=\"inputModifDescription\"></textarea>
      <input type=\"hidden\" name=\"idEntreprise\" id=\"modificationSocieteId\" value={{entrepriseUnique.id}}>
    </form>
      
   </div>

   <div class=\"divPhoneEmail d-flex justify-content-center\">
      <div class=\"divInfoSociete d-flex flex-column justify-content-center rounded align-items-center mr-4 \"  onclick = \"document.querySelector('.telephoneUnique').textContent='{{entrepriseUnique.telephone}}';this.style.width='auto';this.style.padding='48px 15px' \">
         
         <i class=\"fas fa-phone mt-2\" style=\"font-size:25px\"></i>
         <p class=\"font-weight-bold mt-2 telephoneUnique\">Telephone</p>
         
      </div>
       
        <div class=\" divInfoSociete d-flex flex-column justify-content-center rounded align-items-center \" onclick = \"document.querySelector('.emailUnique').textContent='{{entrepriseUnique.email}}';this.style.width='auto';this.style.padding='48px 15px'\">
         
         <i class=\"fas fa-envelope-square iconeSociete mt-2 \" style=\"font-size:27px\"></i>
         <p class=\"font-weight-bold mt-2 emailUnique\">E-mail</p>
         
      </div>
   </div>
<h1 class=\"text-center  avisSocieteUnique\" style=\"text-transform:none!important\"><b>Phot<span style=\"color:#0cc990\">o</span>s</b> prise par la société</h1>
<hr class=\" text-dark hrSocieteUnique\" style=\"border-top: 2px solid black;width:87.5px\">
   <div  class=\"photoSocieteUnique d-flex align-items-center position-relative\">
     <i class={% if utilisateurConnecter is not empty and utilisateurConnecter[0].id == entrepriseUnique.id_users %}\"fas fa-plus position-absolute\"{% else %}\"d-none\"{% endif %} id=\"ajoutPhotoSocieteUnique\" style=\"top:4%;right:2%;font-size:20px;cursor:pointer\"></i>
     <div class=\" row justify-content-center mx-auto align-items-center pt-3 w-100\" id=\"photoPartager\">
     {% if entrepriseUnique.photoChantier is empty %}
     <p class=\"font-weight-bold\" id=\"aucunPartage\" style=\"font-size:23px\">Aucune photo partager</p>

     {% else %}
     
   {% for photoChantier in entrepriseUnique.photoChantier|split(',') %}

         {% if photoChantier is not same as(\"\")%}
    
     <img id=\"photoUnique{{ loop.index }}\" class=\"col-2  p-3 ml-3 imgPhotoChantier rounded mb-3\" src=\"./assets/img{{photoChantier}}\">
         {% endif %}
      {% endfor %}
       {% endif %}
   </div>

</div>
   
    
{% endfor %}

<div class=\"row  \" style=\"margin-top:140px\">
<div class=\"text-center offset-4 col-4\" style=>
<h1 id=\"sectionAvis\" class=\"\" style=\"text-transform:none!important;font-family: taFont3;\"><b><span style=\"color:#0cc990\">A</span>vis</b> des clients</h1>
<hr class=\"w-25 text-dark  hrSocieteUnique \" style=\"border-top: 2px solid black\">
</div>

<div class=\"col-4 mt-4\">
<span class=\" font-weight-bold text-info mb-2 btnVoteAvisUnique\" style=\"font-size:12px;float:right;cursor:pointer\"><i class=\"fas fa-comment mr-1\"></i>Ajouter un commentaire</span>
</div>
</div>

{% if notes is empty %}

<p style=\"font-size:23px;margin-bottom:70px\" class=\"font-weight-bold text-center mt-5\">Aucun avis clients</p>

{% else %}
{% for note in notes %}


<div  class=\" rounded mb-4 p-3 mx-auto row \" style=\"background-color:#e9e3dc;width:80%;\">
<div  class=\"col-9 \">
<i class=\"fas fa-quote-right d-block mb-3 ml-1\" style=\"font-size:35px\"></i>

  <span style=\"font-size: 17px;\" class=\"starsSociete ml-5\" data-rating=\"{{note.avis}}\" data-num-stars=\"5\">
  <i class=\"fas fa-circle\" style=\"color:#28a745\"></i>
  <i class=\"fas fa-circle\" style=\"color:#28a745\"></i>
  <i class=\"fas fa-adjust\" style=\"color:#28a745\"></i>
  <i class=\"far fa-circle\" style=\"color:#28a745\"></i>
  <i class=\"far fa-circle\" style=\"color:#28a745\"></i>
  </span>
  
   
   <h6 class=\"font-weight-bold ml-5 mt-3 text-uppercase titreAvisUnique\">{{note.titre}}</h6>
   <p style=\"font-size:14px;word-wrap: break-word\" class=\"ml-5  texteAvisUnique\">{{note.commentaire}}</p>
   
</div>

<div class=\"col-3 align-self-center text-center\">

{% if note.photo != \"\" %}
<button class=\"btn btn-dark font-weight-bold mt-3 btnModalPhotoAvisClient\" >Voir photos</button>

{% endif %}

{% if note.id_users == utilisateurConnecter[0].id %}

<button  value=\"{{note.id}}\" data-avis={{note.avis}} data-entreprise={{note.idEntreprise}} class=\"deleteCommentaire btn btn-warning mt-3 font-weight-bold\">Supprimer</button>
{% endif %}
<input type=\"hidden\" data=\"{{note.photo}}\"   data-commentaire=\"{{note.commentaire}}\" >
</div>
<p class=\"text-right text-muted w-100\" style=\"margin:0\">il y a {{note[0]['hoursOrMin']}}</p>


           
   {#{% for image in note.photo|split(',') %}

     
      {% if image is not same as(\"\")%}
    
      <img src=\"./assets/img{{image}}\" class=\"w-25\">
      
      {% endif %}
      {{note.date|slice(10)|slice(0,6)|replace({':': 'h'})}}
   {% endfor %}#}

</div>

<div class=\"modal fade \" id=\"modalPhotoAvisClient\" tabindex=\"\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" >
  <div class=\"modal-dialog modal-dialog-centered modalPhotoAvisClientDialog\" role=\"document\" style=\"max-width:63em; width:63em\">
    <div class=\"modal-content\" style=\"height:35em\">
     
      <div class=\"modal-body p-0\">
      
    <button type=\"button\" class=\"close position-absolute closeAvisModalSociete\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\" style=\"font-size:45px\">&times;</span>
        </button>

<div id=\"carouselExampleControls\" class=\"carousel slide carouselIndicatorsAvis row mx-0\" data-ride=\"carousel\">
<div class=\"col-8 p-0\">
  <div class=\"carousel-inner carouselInnerAvis\">
    
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
<div class=\"col-4 divTitreCommentaireModal  \">


</div>
</div>
      </div>
    
    </div>
  </div>
</div>

{% endfor %}
{% endif %}
<!--MODAL Photo AvisClient-->





<!---->

</div>
</section>

<!-- Modal Photo-->
<div class=\"modal fade \" id=\"modalModificationPhoto\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg \" role=\"document\" id=\"testApparition\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title font-weight-bold\" id=\"exampleModalLabel\">Ajouter des photos pour cette société<span id=\"photoMax\"></span></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          
        </button>
      </div>
      <div class=\"modal-body-img modalPhoto \">

        <div class=\"row justify-content-center align-items-center modal-picture\">
            <input type=\"file\" multiple id=\"imageModificationUnique\">
            <label for=\"imageModificationUnique\" class=\"font-weight-bold py-1 px-3\">Sélectionner des photos sur votre ordinateur</label>
        </div>
        <div id=\"picture\" class=\"picture mt-2 d-flex flex-wrap justify-content-center \">
        
       {% for photoChantier in entreprise[0].photoChantier|split(',') %}
       
           

         {% if photoChantier is not same as(\"\")%}
    <div class=\"row align-items-start mx-1 mt-2 \" id=\"divAjoutDimage\">
     <img  style=\"width: 110px; height: 88px;\" class=\"imageAModifier\" src=\"./assets/img{{photoChantier}}\">
     
     <span id=\"{{ loop.index }}\"  class=\"ml-1 font-weight-normal modificationX\">×</span>
     </div>
         {% endif %}
      {% endfor %}
      
          
        </div>

       <!-- <img id=\"imagePhoto\" class=\"w-25\">-->
      </div>
      
      <div class=\"modal-footer mt-5\">
        
        <button type=\"button\" class=\"btn btn-primary font-weight-bold\" id=\"validationImageModifier\">Valider mon choix</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Commentaire -->

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
        <div id=\"picture\" class=\"picture2 mt-2 d-flex flex-wrap justify-content-center \">
        
          
          
        </div>

       <!-- <img id=\"imagePhoto\" class=\"w-25\">-->
      </div>
      
      <div class=\"modal-footer mt-5\">
        
        <button type=\"button\" class=\"btn btn-primary font-weight-bold\" onclick=\"hiddeModal(event)\">Valider mon choix</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Apparition-->

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

</section>

{% endblock %}", "entrepriseUnique.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/entrepriseUnique.block.html.twig");
    }
}
