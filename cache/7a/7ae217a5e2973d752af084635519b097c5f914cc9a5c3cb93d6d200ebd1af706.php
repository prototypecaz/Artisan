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

/* head.block.html.twig */
class __TwigTemplate_479c363210923a24b7d133cb4fa3d5821898fc35e98303158dbf771ec2a5a487 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Balise ouvrante : Contenu HTML est ici -->
<html lang=\"fr\">

    <!-- Il s'agit balise enfant de la balise parent html-->
    <head>

        <!-- Une balise posséde des attributs comme \"charset\" et 
        une valeur comme utf-8 -->
        <!-- <nomDeLaBalise nomDeAttribut=\"valeur\"></nomDeLaBalise> -->

        <meta charset=\"utf-8\">

        <!-- Permet la compatiblité de la langue avec Internet Explorer (IE) -->
        <meta name=\"language\" content=\"fr-FR\">
        
        <!-- Nom et le prenom de l'auteur -->
        <meta name=\"author\" content=\"Mani et guillaume\">
        
        <!-- Nom de l'agence -->
        <meta name=\"b\" content=\" Agence de e-commerce de pop\" />

        <!-- Décrit le contenu de la page (environ 156 mots) -->
        <meta name=\"description\" content=\"site de streaming\">

      
        
        <!-- 
            Aide au référencement par la recherche de mot-clés (environ 10% du total des mots dans la page) 
            !deprecated!
        -->
        <meta name=\"keywords\" content=\"film, series, documentaires\">

        <!-- Informer BootStrap des dimensions des écrans -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        
        <link rel=\"stylesheet\" href=\"./assets/css/style.css\">
        <link rel=\"stylesheet\" href=\"./assets/css/arrow.css\">
        <link href=\"/stylesheets/ie.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />

        <!--Link css de Bootstrap-->
         
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js\"></script>
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"./assets/lib/bootstrap/bootstrap.min.css?version=4.5.0\"/>
      
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css\" rel=\"stylesheet\">
        ";
        // line 51
        echo "       
    </head>

    ";
    }

    public function getTemplateName()
    {
        return "head.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 51,  48 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}
<!-- Balise ouvrante : Contenu HTML est ici -->
<html lang=\"fr\">

    <!-- Il s'agit balise enfant de la balise parent html-->
    <head>

        <!-- Une balise posséde des attributs comme \"charset\" et 
        une valeur comme utf-8 -->
        <!-- <nomDeLaBalise nomDeAttribut=\"valeur\"></nomDeLaBalise> -->

        <meta charset=\"utf-8\">

        <!-- Permet la compatiblité de la langue avec Internet Explorer (IE) -->
        <meta name=\"language\" content=\"fr-FR\">
        
        <!-- Nom et le prenom de l'auteur -->
        <meta name=\"author\" content=\"Mani et guillaume\">
        
        <!-- Nom de l'agence -->
        <meta name=\"b\" content=\" Agence de e-commerce de pop\" />

        <!-- Décrit le contenu de la page (environ 156 mots) -->
        <meta name=\"description\" content=\"site de streaming\">

      
        
        <!-- 
            Aide au référencement par la recherche de mot-clés (environ 10% du total des mots dans la page) 
            !deprecated!
        -->
        <meta name=\"keywords\" content=\"film, series, documentaires\">

        <!-- Informer BootStrap des dimensions des écrans -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        
        <link rel=\"stylesheet\" href=\"./assets/css/style.css\">
        <link rel=\"stylesheet\" href=\"./assets/css/arrow.css\">
        <link href=\"/stylesheets/ie.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />

        <!--Link css de Bootstrap-->
         
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js\"></script>
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"./assets/lib/bootstrap/bootstrap.min.css?version=4.5.0\"/>
      
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css\" rel=\"stylesheet\">
        {# façon d'inclure le css directement dans le head : voir le background.block.css.twig  #}
       
    </head>

    {% endblock %}", "head.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/head.block.html.twig");
    }
}
