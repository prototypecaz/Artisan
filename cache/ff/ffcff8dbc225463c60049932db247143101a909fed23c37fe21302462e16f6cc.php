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

/* body.block.html.twig */
class __TwigTemplate_e43ba06a26c29221f529983d93a5798ed72ddd8a94b413f48e012283a14758da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'connexion' => [$this, 'block_connexion'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<body>
";
        // line 5
        echo " ";
        // line 6
        echo "        ";
        // line 7
        echo "        
        ";
        // line 8
        $this->loadTemplate("header.block.html.twig", "body.block.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        // line 10
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "
         <main>
        ";
        // line 14
        echo "        ";
        $this->loadTemplate("main.block.html.twig", "body.block.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 17
        echo "        
        ";
        // line 18
        $this->loadTemplate("connexion.block.html.twig", "body.block.html.twig", 18)->display($context);
        // line 19
        echo "        ";
        $this->displayBlock('connexion', $context, $blocks);
        // line 20
        echo "         </main>
        ";
        // line 22
        echo "        ";
        $this->loadTemplate("footer.block.html.twig", "body.block.html.twig", 22)->display($context);
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "
    
     <script src=\"./js/avis.js\"></script>
     <script src=\"./js/client.js\"></script>
      
        ";
        // line 31
        echo "     
     
     ";
        // line 34
        echo "    
     
  </body>
</html>

";
    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_connexion($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "body.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 24,  130 => 19,  124 => 16,  118 => 10,  109 => 34,  105 => 31,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  67 => 11,  64 => 10,  62 => 9,  60 => 8,  57 => 7,  55 => 6,  53 => 5,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

<body>
{# une autre façon d'inclure du css dynamiquement #}
 {#  <body style = \"background-image: url('./assets/upload/{{backgroundImg[0]['background']}}');\"> #}
        {# inclure le fichier Twig contenant le block #}
        
        {% include('header.block.html.twig') %}
        {# appel du block #}
        {% block header %}{% endblock %}

         <main>
        {# inclure le fichier Twig contenant le block #}
        {% include('main.block.html.twig') %}
        {# appel du block #}
        {% block main %}{% endblock %}
        
        {% include('connexion.block.html.twig') %}
        {% block connexion %}{% endblock %}
         </main>
        {# inclure le fichier Twig contenant le block #}
        {% include('footer.block.html.twig') %}
        {# appel du block #}
        {% block footer %}{% endblock %}

    
     <script src=\"./js/avis.js\"></script>
     <script src=\"./js/client.js\"></script>
      
        {# <script type=\"text/javascript\" src=\"./assets/js/activate.js\"></script> #}
     
     
     {#    <script type=\"text/javascript\" src=\"./assets/js/registerUser.js\"></script> #}
    
     
  </body>
</html>

{% endblock %}", "body.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/body.block.html.twig");
    }
}
