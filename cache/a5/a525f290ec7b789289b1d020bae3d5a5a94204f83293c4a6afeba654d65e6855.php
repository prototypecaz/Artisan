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

/* footer.block.html.twig */
class __TwigTemplate_0ce8c4946a58862ebc37034bcc5eafac6f06a9e4044861fb853022bc9a5c5756 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "footer.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}{% endblock %}", "footer.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/footer.block.html.twig");
    }
}
