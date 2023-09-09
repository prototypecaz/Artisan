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

/* index.master.html.twig */
class __TwigTemplate_78499dad23dd12c399215e278f121173d372fd970e0e52bc2bbab5af8029322d extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "        ";
        $this->loadTemplate("head.block.html.twig", "index.master.html.twig", 2)->display($context);
        // line 3
        echo "        ";
        // line 4
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 5
        echo "
        ";
        // line 7
        echo "        ";
        $this->loadTemplate("body.block.html.twig", "index.master.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  60 => 4,  55 => 9,  53 => 8,  50 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# inclure le fichier Twig contenant le block #}
        {% include('head.block.html.twig') %}
        {# appel du block #}
        {% block head %}{% endblock %}

        {# inclure le fichier Twig contenant le block #}
        {% include('body.block.html.twig') %}
        {# appel du block #}
        {% block body %}{% endblock %}", "index.master.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/index.master.html.twig");
    }
}
