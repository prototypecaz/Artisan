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

/* confirmation.block.html.twig */
class __TwigTemplate_d2c073e07e14fa1eed3094b176a11ddcd7dd4e9b76788f503a28eb048b3a0bac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'confirmation' => [$this, 'block_confirmation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('confirmation', $context, $blocks);
    }

    public function block_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<h1>Veuillez confirmer votre mail dans votre boite de reception</h1>
";
    }

    public function getTemplateName()
    {
        return "confirmation.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block confirmation %}
<h1>Veuillez confirmer votre mail dans votre boite de reception</h1>
{% endblock %}", "confirmation.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/confirmation.block.html.twig");
    }
}
