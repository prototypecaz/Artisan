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

/* inscription.block.html.twig */
class __TwigTemplate_617002302dc561f337ac338e591521b1541f7bae063ae83ae2411da828cde9f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'inscription' => [$this, 'block_inscription'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('inscription', $context, $blocks);
    }

    public function block_inscription($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "

    <!-- Formulaire d'inscription -->

    <form method=\"POST\" action=\"./registerUser.php\" class=\"col-12 col-sm-12 col-md-8 offset-md-2 text-center mt-3\">
        
        <div class=\"form-group\">
             <label class=\"bg-dark h5 text-primary rounded px-3 py-1 w-100\" for=\"email\">Votre email</label>
            <input type=\"email\" name=\"email\" maxlength=\"320\" class=\"form-control text-center\" placeholder=\"adrien.dupont@gmail.com\" required />
        </div>

        <div class=\"form-group\">
            <label class=\"bg-dark h5 text-primary rounded px-3 py-1 w-100\">Veuillez saisir un mot de passe</label>
            <input type=\"password\" id=\"first\" minlength=\"8\" autocomplete=\"off\" class=\"form-control text-center\" placeholder=\"********\" required />
            <span id=\"strengt\"></span>
        </div>

        <div class=\"form-group\">
            <label class=\"bg-dark h5 text-primary rounded px-3 py-1 w-100\" for=\"password\">Resaisir le mot de passe</label>
            <input type=\"password\" name=\"password\" id=\"last\" minlength=\"8\" autocomplete=\"off\" class=\"form-control text-center\" placeholder=\"********\" required disabled />
        </div>

        <div class=\"form-group\">
            <button class=\"btn-primary w-50 rounded h5 py-1\" type=\"submit\" id=\"submit\" disabled>S'inscrire</button>
        </div>
    </form>
     <div class=\"col-12 col-md-6 mx-auto border border-dark bg-danger text-white h3 text-center rounded mb-3 mt-3\" id=\"erreurs\"></div>
    <script type=\"text/javascript\" src=\"./assets/js/loginUser.js\"></script>
    <script type=\"text/javascript\" src=\"./assets/js/registerUser.js\"></script>
   
    ";
    }

    public function getTemplateName()
    {
        return "inscription.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block inscription %}


    <!-- Formulaire d'inscription -->

    <form method=\"POST\" action=\"./registerUser.php\" class=\"col-12 col-sm-12 col-md-8 offset-md-2 text-center mt-3\">
        
        <div class=\"form-group\">
             <label class=\"bg-dark h5 text-primary rounded px-3 py-1 w-100\" for=\"email\">Votre email</label>
            <input type=\"email\" name=\"email\" maxlength=\"320\" class=\"form-control text-center\" placeholder=\"adrien.dupont@gmail.com\" required />
        </div>

        <div class=\"form-group\">
            <label class=\"bg-dark h5 text-primary rounded px-3 py-1 w-100\">Veuillez saisir un mot de passe</label>
            <input type=\"password\" id=\"first\" minlength=\"8\" autocomplete=\"off\" class=\"form-control text-center\" placeholder=\"********\" required />
            <span id=\"strengt\"></span>
        </div>

        <div class=\"form-group\">
            <label class=\"bg-dark h5 text-primary rounded px-3 py-1 w-100\" for=\"password\">Resaisir le mot de passe</label>
            <input type=\"password\" name=\"password\" id=\"last\" minlength=\"8\" autocomplete=\"off\" class=\"form-control text-center\" placeholder=\"********\" required disabled />
        </div>

        <div class=\"form-group\">
            <button class=\"btn-primary w-50 rounded h5 py-1\" type=\"submit\" id=\"submit\" disabled>S'inscrire</button>
        </div>
    </form>
     <div class=\"col-12 col-md-6 mx-auto border border-dark bg-danger text-white h3 text-center rounded mb-3 mt-3\" id=\"erreurs\"></div>
    <script type=\"text/javascript\" src=\"./assets/js/loginUser.js\"></script>
    <script type=\"text/javascript\" src=\"./assets/js/registerUser.js\"></script>
   
    {% endblock %}", "inscription.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/inscription.block.html.twig");
    }
}
