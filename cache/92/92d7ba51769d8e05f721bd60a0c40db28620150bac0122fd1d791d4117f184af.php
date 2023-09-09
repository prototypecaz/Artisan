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

/* header.block.html.twig */
class __TwigTemplate_b6327eb11f23dc12271389b09393300148ef38f01e22baf1ca68c3c7eb046bbd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "

";
        // line 4
        if (twig_in_filter("entrepriseUnique", ($context["page"] ?? null))) {
            // line 5
            echo "
<header class=\"container-fluid pt-3 \" style=\"overflow: hidden;z-index:10000000000\">

        <div class=\"row align-items-center divHeader\" style=\"color:black\">       
                <h1 class=\"col-7 font-weight-bold ml-5 nomSite\"><a style=\"color:#16191b\" href=\"./\">Minut'Reno</a></h1>
                <div class=\"col-4 divConnexInscript ml-5\">
                ";
            // line 11
            if ((($context["utilisateurConnecter"] ?? null) == null)) {
                // line 12
                echo "                <a style=\"color:white; background-color:#16191b;float:right\" class=\"btn font-weight-bold btnConnexionHeader\" >Connexion</a>
                <a style=\"color:white; background-color:#16191b;float:right\" class=\"btn btnInscriptionHeader font-weight-bold mr-2\" >Inscription</a>
                ";
            } else {
                // line 15
                echo "                        <div class=\"text-right  d-flex align-items-center justify-content-end\">
                                <img class=\"mr-2\" src=\"./assets/img/pseudoImg.jpg\" style=\"border-radius:50%;width:50px;height:50px\">
                                <span class=\"text-dark font-weight-bold\">";
                // line 17
                echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "prenom", [], "any", false, false, false, 17));
                echo "</span>
                                <i id=\"affichageCompte\" style=\"font-size:18px\" class=\"far fa-caret-square-down ml-2 text-dark\"></i>
                
                         </div>
                
                       
               
                ";
            }
            // line 25
            echo "                
                <div>
        <div>

        
       
</header>



 ";
        } elseif (twig_in_filter("",         // line 35
($context["page"] ?? null))) {
            // line 36
            echo "


<header class=\"container-fluid pt-3 header position-relative\" style=\"overflow: hidden;background-image:url('";
            // line 39
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["affichageDesign"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["background"] ?? null) : null);
            echo "');\">

<h1 class=\"position-absolute titreBonArtisan \"><span class=\"lettreTitre\" style=\"color:";
            // line 41
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["affichageDesign"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["color"] ?? null) : null);
            echo "\">T</span>rouvez le bon<span class=\" position-absolute font-weight-bold\" style=\"top:9%;left:104%!important;width:400px\"><span class=\"lettreTitre\" style=\"color:";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["affichageDesign"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["color"] ?? null) : null);
            echo "\">A</span>rtisan !</span></h1>

        <div class=\"row align-items-center divHeader\" style=\"color:black\">   
                <div  class=\" col-7 position-relative\"> 
                        <h1 class=\" font-weight-bold ml-5 nomSite\"><a style=\"color:#16191b;z-index:3\" class=\"position-relative\"  href=\"./\">Minut<span class=\"lettreTitre\" style=\"color:";
            // line 45
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["affichageDesign"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["color"] ?? null) : null);
            echo "\">'</span>Estime</a></h1>
                        <div class=\"backLogo position-absolute\"></div>
                </div>

                <div class=\"col-5 divConnexInscript position-relative\">
                        ";
            // line 50
            if ((($context["utilisateurConnecter"] ?? null) == null)) {
                // line 51
                echo "                        <a style=\"color:white; background-color:#16191b;float:right\" id=\"btnCoHeaderNav\" class=\"btn font-weight-bold btnConnexionHeader\" >Connexion</a>
                        <a style=\"color:white; background-color:#16191b;float:right\" class=\"btn btnInscriptionHeader font-weight-bold mr-2\" >Inscription</a>
                        ";
            } else {
                // line 54
                echo "                        <div class=\"text-right mr-4 d-flex align-items-center justify-content-end\">
                                <img class=\"mr-2\" src=\"./assets/img/pseudoImg.jpg\" style=\"border-radius:50%;width:50px;height:50px\">
                                <span class=\"text-white font-weight-bold\">";
                // line 56
                echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "prenom", [], "any", false, false, false, 56));
                echo "</span>
                                <i id=\"affichageCompte\" style=\"font-size:18px\" class=\"far fa-caret-square-down ml-2 text-white\"></i>
                
                         </div>
                
                        <div id=\"affichageDivCo\" class=\"d-none\" style=\"height:auto;max-height:380px;box-shadow: white 0px 5px 15px;border-radius:8px;top:110%;right:6%;z-index:2\">

                           <div id=\"divBalayerOrigin\">
                                <div>
                                        <img class=\"mr-2\" src=\"./assets/img/pseudoImg.jpg\" style=\"border-radius:50%;width:50px;height:50px\">
                                        <span class=\"text-dark font-weight-bold\">";
                // line 66
                echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["utilisateurConnecter"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null), "prenom", [], "any", false, false, false, 66));
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
                // line 127
                if (twig_test_empty(($context["societeUsers"] ?? null))) {
                    // line 128
                    echo "                                   <span class=\"text-center font-weight-bold d-block\">Aucune société enregistré</span>
                                ";
                } else {
                    // line 130
                    echo "                             ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["societeUsers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
                        // line 131
                        echo "
                             <div onclick=\"location.href='?entrepriseUnique=undefined&&etablissement=";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["societe"], "id", [], "any", false, false, false, 132);
                        echo "'\"  class=\"d-flex align-items-center mb-2 listSocieteCo py-1\" style=\"cursor:pointer\">
                                                <div class=\"testIconeAffichage text-center ml-2\">
                                
                                                        <i class=\"far fa-building\"  style=\" top: calc(50% - 10px);position: relative;font-size:16px\" ></i>
                                                </div>
                                                <div class=\"ml-3 w-75\">
                                                        <span>";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["societe"], "nom_raison_sociale", [], "any", false, false, false, 138);
                        echo " </a>
                                                </div>
                                               
                                        </div>
                                 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                                 ";
                }
                // line 144
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
               
                ";
            }
            // line 181
            echo "                
                
                </div>
        </div>
   
   
       
</header>



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



";
        }
        // line 241
        echo "

";
    }

    public function getTemplateName()
    {
        return "header.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  348 => 241,  286 => 181,  247 => 144,  244 => 143,  233 => 138,  224 => 132,  221 => 131,  216 => 130,  212 => 128,  210 => 127,  146 => 66,  133 => 56,  129 => 54,  124 => 51,  122 => 50,  114 => 45,  105 => 41,  100 => 39,  95 => 36,  93 => 35,  81 => 25,  70 => 17,  66 => 15,  61 => 12,  59 => 11,  51 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}


{% if 'entrepriseUnique' in page %}

<header class=\"container-fluid pt-3 \" style=\"overflow: hidden;z-index:10000000000\">

        <div class=\"row align-items-center divHeader\" style=\"color:black\">       
                <h1 class=\"col-7 font-weight-bold ml-5 nomSite\"><a style=\"color:#16191b\" href=\"./\">Minut'Reno</a></h1>
                <div class=\"col-4 divConnexInscript ml-5\">
                {% if utilisateurConnecter == NULL %}
                <a style=\"color:white; background-color:#16191b;float:right\" class=\"btn font-weight-bold btnConnexionHeader\" >Connexion</a>
                <a style=\"color:white; background-color:#16191b;float:right\" class=\"btn btnInscriptionHeader font-weight-bold mr-2\" >Inscription</a>
                {% else %}
                        <div class=\"text-right  d-flex align-items-center justify-content-end\">
                                <img class=\"mr-2\" src=\"./assets/img/pseudoImg.jpg\" style=\"border-radius:50%;width:50px;height:50px\">
                                <span class=\"text-dark font-weight-bold\">{{utilisateurConnecter[0].prenom | capitalize}}</span>
                                <i id=\"affichageCompte\" style=\"font-size:18px\" class=\"far fa-caret-square-down ml-2 text-dark\"></i>
                
                         </div>
                
                       
               
                {% endif %}
                
                <div>
        <div>

        
       
</header>



 {% elseif \"\" in page %}



<header class=\"container-fluid pt-3 header position-relative\" style=\"overflow: hidden;background-image:url('{{affichageDesign[0][\"background\"]}}');\">

<h1 class=\"position-absolute titreBonArtisan \"><span class=\"lettreTitre\" style=\"color:{{affichageDesign[0][\"color\"]}}\">T</span>rouvez le bon<span class=\" position-absolute font-weight-bold\" style=\"top:9%;left:104%!important;width:400px\"><span class=\"lettreTitre\" style=\"color:{{affichageDesign[0][\"color\"]}}\">A</span>rtisan !</span></h1>

        <div class=\"row align-items-center divHeader\" style=\"color:black\">   
                <div  class=\" col-7 position-relative\"> 
                        <h1 class=\" font-weight-bold ml-5 nomSite\"><a style=\"color:#16191b;z-index:3\" class=\"position-relative\"  href=\"./\">Minut<span class=\"lettreTitre\" style=\"color:{{affichageDesign[0][\"color\"]}}\">'</span>Estime</a></h1>
                        <div class=\"backLogo position-absolute\"></div>
                </div>

                <div class=\"col-5 divConnexInscript position-relative\">
                        {% if utilisateurConnecter == NULL %}
                        <a style=\"color:white; background-color:#16191b;float:right\" id=\"btnCoHeaderNav\" class=\"btn font-weight-bold btnConnexionHeader\" >Connexion</a>
                        <a style=\"color:white; background-color:#16191b;float:right\" class=\"btn btnInscriptionHeader font-weight-bold mr-2\" >Inscription</a>
                        {% else %}
                        <div class=\"text-right mr-4 d-flex align-items-center justify-content-end\">
                                <img class=\"mr-2\" src=\"./assets/img/pseudoImg.jpg\" style=\"border-radius:50%;width:50px;height:50px\">
                                <span class=\"text-white font-weight-bold\">{{utilisateurConnecter[0].prenom | capitalize}}</span>
                                <i id=\"affichageCompte\" style=\"font-size:18px\" class=\"far fa-caret-square-down ml-2 text-white\"></i>
                
                         </div>
                
                        <div id=\"affichageDivCo\" class=\"d-none\" style=\"height:auto;max-height:380px;box-shadow: white 0px 5px 15px;border-radius:8px;top:110%;right:6%;z-index:2\">

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
               
                {% endif %}
                
                
                </div>
        </div>
   
   
       
</header>



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



{% endif %}


{% endblock %}", "header.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/header.block.html.twig");
    }
}
