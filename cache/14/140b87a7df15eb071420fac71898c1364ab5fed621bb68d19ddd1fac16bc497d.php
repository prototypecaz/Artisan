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

/* avis.block.html.twig */
class __TwigTemplate_152a83286792706d9b74bf33481b3f4351dd3596ba1031bdc021f1dc18a0a521 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'avis' => [$this, 'block_avis'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('avis', $context, $blocks);
    }

    public function block_avis($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<h1><a href=\"./\">Accueil</a></h1>

<form >

<div class=\"d-block\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"1\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"2\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"3\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"4\">
<input type=\"hidden\" value=\"\" name=\"idEntreprise\" class=\"idEntreprise\">
</div>

<textarea class=\"d-block my-3\" name=\"commentaire\"></textarea>


</form>


<button class=\"envoieAvis\" type=\"submit\">Envoyer</button>

<div id=\"connection\">
</div>


<div class=\"modal fade \" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
    
      <!-- Modal content-->
      <div class=\"modal-content \">
        <div class=\"modal-header mx-auto \">
          
         <h1>Veuillez vous connecter</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold\">
         <div class=\"row flex-column align-items-center\">
            <input class=\"w-25\" id=\"emailUser\">
            <input class=\"w-25 my-3\" id=\"passwordUser\">
            <button  id=\"btnConnexion\" type=\"submit\" class=\"btn btn-info rounded w-25 mb-2\">Connexion</button>
            <button class=\"btn btn-info w-25 rounded\">Devenir membre</button>
         </div>
           
          </div>
        </div>
        <div class=\"modal-footer \">
        
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    
";
    }

    public function getTemplateName()
    {
        return "avis.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block avis %}

<h1><a href=\"./\">Accueil</a></h1>

<form >

<div class=\"d-block\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"1\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"2\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"3\">
<input type=\"checkbox\" name=\"valeur\" class=\"valeur\" value=\"4\">
<input type=\"hidden\" value=\"\" name=\"idEntreprise\" class=\"idEntreprise\">
</div>

<textarea class=\"d-block my-3\" name=\"commentaire\"></textarea>


</form>


<button class=\"envoieAvis\" type=\"submit\">Envoyer</button>

<div id=\"connection\">
</div>


<div class=\"modal fade \" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
    
      <!-- Modal content-->
      <div class=\"modal-content \">
        <div class=\"modal-header mx-auto \">
          
         <h1>Veuillez vous connecter</h1>
         
        </div>
        <div class=\"modal-body  font-weight-bold\">
         <div class=\"row flex-column align-items-center\">
            <input class=\"w-25\" id=\"emailUser\">
            <input class=\"w-25 my-3\" id=\"passwordUser\">
            <button  id=\"btnConnexion\" type=\"submit\" class=\"btn btn-info rounded w-25 mb-2\">Connexion</button>
            <button class=\"btn btn-info w-25 rounded\">Devenir membre</button>
         </div>
           
          </div>
        </div>
        <div class=\"modal-footer \">
        
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    
{% endblock %}", "avis.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/avis.block.html.twig");
    }
}
