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

/* recherche.block.html.twig */
class __TwigTemplate_52d87c7b24e09c7c992f85ec4610f0910e5ca6a2747da6def247d6676ffd56bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'recherche' => [$this, 'block_recherche'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('recherche', $context, $blocks);
    }

    public function block_recherche($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

";
        // line 6
        if (twig_test_empty(($context["rechercheEntreprise"] ?? null))) {
            // line 7
            echo "<p class=\"font-weight-bold div\" style=\"font-size:23px;margin-bottom:60px\">Aucune société inscrite</p>

";
        } else {
            // line 10
            echo "

";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rechercheEntreprise"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recherche"]) {
                // line 13
                echo "

";
                // line 15
                if ((null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["recherche"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))) {
                    // line 16
                    echo "
<div style=\"width: 55em; height: 250px; border: 2px solid rgb(224, 224, 224); border-radius: 10px; margin-bottom: 17px; padding: 20px;\" class=\"div row align-items-center\">
    <div class=\"col-2 d-flex justify-content-center\">
        ";
                    // line 19
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["recherche"], "logo", [], "any", false, false, false, 19), ""))) {
                        // line 20
                        echo "        <img src=\"./assets/img/pseudoImg.jpg\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        ";
                    } else {
                        // line 22
                        echo "         <img src=\"./assets/img/uploads/";
                        echo twig_get_attribute($this->env, $this->source, $context["recherche"], "logo", [], "any", false, false, false, 22);
                        echo "\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        ";
                    }
                    // line 24
                    echo "    </div>
    <div class=\" col-7 ml-2\">
        <a id=\"entreprise\" class=\"font-weight-bold\" style=\"font-size: 20px; text-decoration: none;\" href=\"./?entrepriseUnique=undefined&amp;etablissement=";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "id", [], "any", false, false, false, 26);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "nom_raison_sociale", [], "any", false, false, false, 26);
                    echo "</a>
        <p class=\"mb-0 mt-2 text-uppercase font-weight-bold\" style=\"font-size: 14px;\">";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "ville_nom", [], "any", false, false, false, 27);
                    echo "</p>
        <p class=\"mb-0 mt-1 text-uppercase font-weight-bold\" style=\"font-size: 13px;\">Date de création: ";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "dateSociete", [], "any", false, false, false, 28);
                    echo "</p>
        <p></p>
        <btn class=\"btn btn-info font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "telephone", [], "any", false, false, false, 30);
                    echo "')\">Téléphone</btn>
        <btn class=\"btn btn-info mx-3 font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "email", [], "any", false, false, false, 31);
                    echo "')\">E-mail</btn>
        <a class=\"btn btn-info font-weight-bold text-white mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "siteWeb", [], "any", false, false, false, 32);
                    echo "')\">Site web</a>
    </div>
    <div class=\"divBtn d-flex flex-column-reverse align-items-center\" id=\"";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "id", [], "any", false, false, false, 34);
                    echo "\">
        <button class=\" btnVoteAvis btn btn-success rounded font-weight-bold\" style=\"width: 155px; margin-top: 81px;\" value=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["recherche"], "id", [], "any", false, false, false, 35);
                    echo "\">Votre avis</button>
        <p style=\"cursor: default; font-size: 14px; color: rgb(71, 71, 71); font-family: Trip Sans VF, Trip Sans, Arial, sans-serif;\" class=\"mb-0 ml-2\"></p>
        
        
    </div>
</div>

";
                } elseif ( !(null === (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 // line 42
$context["recherche"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null))) {
                    // line 43
                    echo "
";
                    // line 44
                    if ((-1 === twig_compare(twig_length_filter($this->env, $context["recherche"]), 2))) {
                        // line 45
                        echo "<div style=\"width: 55em; height: 250px; border: 2px solid rgb(224, 224, 224); border-radius: 10px; margin-bottom: 17px; padding: 20px;\" class=\"div row align-items-center\">
    <div class=\"col-2 d-flex justify-content-center\">
        ";
                        // line 47
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["recherche"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "logo", [], "any", false, false, false, 47), ""))) {
                            // line 48
                            echo "        <img src=\"./assets/img/pseudoImg.jpg\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        ";
                        } else {
                            // line 50
                            echo "         <img src=\"./assets/img/uploads/";
                            echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["recherche"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "logo", [], "any", false, false, false, 50);
                            echo "\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        ";
                        }
                        // line 52
                        echo "    </div>
    <div class=\" col-7 ml-2\">
        <a id=\"entreprise\" class=\"font-weight-bold\" style=\"font-size: 20px; text-decoration: none;\" href=\"./?entrepriseUnique=undefined&amp;etablissement=";
                        // line 54
                        echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["recherche"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "id", [], "any", false, false, false, 54);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["recherche"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "nom_raison_sociale", [], "any", false, false, false, 54);
                        echo "</a>
        <p class=\"mb-0 mt-2 text-uppercase font-weight-bold\" style=\"font-size: 14px;\">";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["recherche"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "ville_nom", [], "any", false, false, false, 55);
                        echo "</p>
        <p class=\"mb-0 mt-1 text-uppercase font-weight-bold\" style=\"font-size: 13px;\">Date de création: ";
                        // line 56
                        echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["recherche"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "dateSociete", [], "any", false, false, false, 56);
                        echo "</p>
        <p></p>
        <btn class=\"btn btn-info font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                        // line 58
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["recherche"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "telephone", [], "any", false, false, false, 58);
                        echo "')\">Téléphone</btn>
        <btn class=\"btn btn-info mx-3 font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                        // line 59
                        echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["recherche"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "email", [], "any", false, false, false, 59);
                        echo "')\">E-mail</btn>
        <a class=\"btn btn-info font-weight-bold text-white mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                        // line 60
                        echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["recherche"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null), "siteWeb", [], "any", false, false, false, 60);
                        echo "')\">Site web</a>
    </div>
    <div class=\"divBtn d-flex flex-column-reverse align-items-center\" id=\"";
                        // line 62
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["recherche"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null), "id", [], "any", false, false, false, 62);
                        echo "\">
        <button class=\" btnVoteAvis btn btn-success rounded font-weight-bold\" style=\"width: 155px; margin-top: 56px;\" value=\"";
                        // line 63
                        echo twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["recherche"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[0] ?? null) : null), "id", [], "any", false, false, false, 63);
                        echo "\">Votre avis</button>
        <p style=\"cursor: default; font-size: 14px; color: rgb(71, 71, 71); font-family: Trip Sans VF, Trip Sans, Arial, sans-serif;\" class=\"mb-0 ml-2\"></p>
        
        
    </div>
</div>

";
                    } else {
                        // line 71
                        echo "
";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["recherche"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["recherch"]) {
                            // line 73
                            echo "   <div style=\"width: 55em; height: 250px; border: 2px solid rgb(224, 224, 224); border-radius: 10px; margin-bottom: 17px; padding: 20px;\" class=\"div row align-items-center\">
    <div class=\"col-2 d-flex justify-content-center\">
        ";
                            // line 75
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["recherch"], "logo", [], "any", false, false, false, 75), ""))) {
                                // line 76
                                echo "        <img src=\"./assets/img/pseudoImg.jpg\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        ";
                            } else {
                                // line 78
                                echo "         <img src=\"./assets/img/uploads/";
                                echo twig_get_attribute($this->env, $this->source, $context["recherch"], "logo", [], "any", false, false, false, 78);
                                echo "\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        ";
                            }
                            // line 80
                            echo "    </div>
    <div class=\" col-7 ml-2\">
        <a id=\"entreprise\" class=\"font-weight-bold\" style=\"font-size: 20px; text-decoration: none;\" href=\"./?entrepriseUnique=undefined&amp;etablissement=";
                            // line 82
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "id", [], "any", false, false, false, 82);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "nom_raison_sociale", [], "any", false, false, false, 82);
                            echo "</a>
        <p class=\"mb-0 mt-2 text-uppercase font-weight-bold\" style=\"font-size: 14px;\">";
                            // line 83
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "ville_nom", [], "any", false, false, false, 83);
                            echo "</p>
        <p class=\"mb-0 mt-1 text-uppercase font-weight-bold\" style=\"font-size: 13px;\">Date de création: ";
                            // line 84
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "dateSociete", [], "any", false, false, false, 84);
                            echo "</p>
        <p></p>
        <btn class=\"btn btn-info font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                            // line 86
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "telephone", [], "any", false, false, false, 86);
                            echo "')\">Téléphone</btn>
        <btn class=\"btn btn-info mx-3 font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                            // line 87
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "email", [], "any", false, false, false, 87);
                            echo "')\">E-mail</btn>
        <a class=\"btn btn-info font-weight-bold text-white mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'";
                            // line 88
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "siteWeb", [], "any", false, false, false, 88);
                            echo "')\">Site web</a>
    </div>
    <div class=\"divBtn d-flex flex-column-reverse align-items-center\" id=\"";
                            // line 90
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "id", [], "any", false, false, false, 90);
                            echo "\">
        <button class=\" btnVoteAvis btn btn-success rounded font-weight-bold\" style=\"width: 155px; margin-top: 56px;\" value=\"";
                            // line 91
                            echo twig_get_attribute($this->env, $this->source, $context["recherch"], "id", [], "any", false, false, false, 91);
                            echo "\">Votre avis</button>
        <p style=\"cursor: default; font-size: 14px; color: rgb(71, 71, 71); font-family: Trip Sans VF, Trip Sans, Arial, sans-serif;\" class=\"mb-0 ml-2\"></p>
        
        
    </div>
</div>
";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recherch'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 98
                        echo "
";
                    }
                }
                // line 101
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recherche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "




";
        }
    }

    public function getTemplateName()
    {
        return "recherche.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  291 => 103,  284 => 101,  279 => 98,  266 => 91,  262 => 90,  257 => 88,  253 => 87,  249 => 86,  244 => 84,  240 => 83,  234 => 82,  230 => 80,  224 => 78,  220 => 76,  218 => 75,  214 => 73,  210 => 72,  207 => 71,  196 => 63,  192 => 62,  187 => 60,  183 => 59,  179 => 58,  174 => 56,  170 => 55,  164 => 54,  160 => 52,  154 => 50,  150 => 48,  148 => 47,  144 => 45,  142 => 44,  139 => 43,  137 => 42,  127 => 35,  123 => 34,  118 => 32,  114 => 31,  110 => 30,  105 => 28,  101 => 27,  95 => 26,  91 => 24,  85 => 22,  81 => 20,  79 => 19,  74 => 16,  72 => 15,  68 => 13,  64 => 12,  60 => 10,  55 => 7,  53 => 6,  49 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block recherche %}


{% if rechercheEntreprise is empty %}
<p class=\"font-weight-bold div\" style=\"font-size:23px;margin-bottom:60px\">Aucune société inscrite</p>

{% else %}


{% for recherche in rechercheEntreprise %}


{% if recherche[0] is null %}

<div style=\"width: 55em; height: 250px; border: 2px solid rgb(224, 224, 224); border-radius: 10px; margin-bottom: 17px; padding: 20px;\" class=\"div row align-items-center\">
    <div class=\"col-2 d-flex justify-content-center\">
        {% if recherche.logo == \"\" %}
        <img src=\"./assets/img/pseudoImg.jpg\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        {% else %}
         <img src=\"./assets/img/uploads/{{recherche.logo}}\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        {% endif %}
    </div>
    <div class=\" col-7 ml-2\">
        <a id=\"entreprise\" class=\"font-weight-bold\" style=\"font-size: 20px; text-decoration: none;\" href=\"./?entrepriseUnique=undefined&amp;etablissement={{recherche.id}}\">{{recherche.nom_raison_sociale}}</a>
        <p class=\"mb-0 mt-2 text-uppercase font-weight-bold\" style=\"font-size: 14px;\">{{recherche.ville_nom}}</p>
        <p class=\"mb-0 mt-1 text-uppercase font-weight-bold\" style=\"font-size: 13px;\">Date de création: {{recherche.dateSociete}}</p>
        <p></p>
        <btn class=\"btn btn-info font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherche.telephone}}')\">Téléphone</btn>
        <btn class=\"btn btn-info mx-3 font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherche.email}}')\">E-mail</btn>
        <a class=\"btn btn-info font-weight-bold text-white mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherche.siteWeb}}')\">Site web</a>
    </div>
    <div class=\"divBtn d-flex flex-column-reverse align-items-center\" id=\"{{recherche.id}}\">
        <button class=\" btnVoteAvis btn btn-success rounded font-weight-bold\" style=\"width: 155px; margin-top: 81px;\" value=\"{{recherche.id}}\">Votre avis</button>
        <p style=\"cursor: default; font-size: 14px; color: rgb(71, 71, 71); font-family: Trip Sans VF, Trip Sans, Arial, sans-serif;\" class=\"mb-0 ml-2\"></p>
        
        
    </div>
</div>

{% elseif recherche[0] is not null %}

{% if recherche|length < 2 %}
<div style=\"width: 55em; height: 250px; border: 2px solid rgb(224, 224, 224); border-radius: 10px; margin-bottom: 17px; padding: 20px;\" class=\"div row align-items-center\">
    <div class=\"col-2 d-flex justify-content-center\">
        {% if recherche[0].logo == \"\" %}
        <img src=\"./assets/img/pseudoImg.jpg\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        {% else %}
         <img src=\"./assets/img/uploads/{{recherche[0].logo}}\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        {% endif %}
    </div>
    <div class=\" col-7 ml-2\">
        <a id=\"entreprise\" class=\"font-weight-bold\" style=\"font-size: 20px; text-decoration: none;\" href=\"./?entrepriseUnique=undefined&amp;etablissement={{recherche[0].id}}\">{{recherche[0].nom_raison_sociale}}</a>
        <p class=\"mb-0 mt-2 text-uppercase font-weight-bold\" style=\"font-size: 14px;\">{{recherche[0].ville_nom}}</p>
        <p class=\"mb-0 mt-1 text-uppercase font-weight-bold\" style=\"font-size: 13px;\">Date de création: {{recherche[0].dateSociete}}</p>
        <p></p>
        <btn class=\"btn btn-info font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherche[0].telephone}}')\">Téléphone</btn>
        <btn class=\"btn btn-info mx-3 font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherche[0].email}}')\">E-mail</btn>
        <a class=\"btn btn-info font-weight-bold text-white mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherche[0].siteWeb}}')\">Site web</a>
    </div>
    <div class=\"divBtn d-flex flex-column-reverse align-items-center\" id=\"{{recherche[0].id}}\">
        <button class=\" btnVoteAvis btn btn-success rounded font-weight-bold\" style=\"width: 155px; margin-top: 56px;\" value=\"{{recherche[0].id}}\">Votre avis</button>
        <p style=\"cursor: default; font-size: 14px; color: rgb(71, 71, 71); font-family: Trip Sans VF, Trip Sans, Arial, sans-serif;\" class=\"mb-0 ml-2\"></p>
        
        
    </div>
</div>

{% else %}

{% for recherch in  recherche %}
   <div style=\"width: 55em; height: 250px; border: 2px solid rgb(224, 224, 224); border-radius: 10px; margin-bottom: 17px; padding: 20px;\" class=\"div row align-items-center\">
    <div class=\"col-2 d-flex justify-content-center\">
        {% if recherch.logo == \"\" %}
        <img src=\"./assets/img/pseudoImg.jpg\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        {% else %}
         <img src=\"./assets/img/uploads/{{recherch.logo}}\" class=\" rounded-circle\" style=\"height: 125px; width: 125px;\">
        {% endif %}
    </div>
    <div class=\" col-7 ml-2\">
        <a id=\"entreprise\" class=\"font-weight-bold\" style=\"font-size: 20px; text-decoration: none;\" href=\"./?entrepriseUnique=undefined&amp;etablissement={{recherch.id}}\">{{recherch.nom_raison_sociale}}</a>
        <p class=\"mb-0 mt-2 text-uppercase font-weight-bold\" style=\"font-size: 14px;\">{{recherch.ville_nom}}</p>
        <p class=\"mb-0 mt-1 text-uppercase font-weight-bold\" style=\"font-size: 13px;\">Date de création: {{recherch.dateSociete}}</p>
        <p></p>
        <btn class=\"btn btn-info font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherch.telephone}}')\">Téléphone</btn>
        <btn class=\"btn btn-info mx-3 font-weight-bold mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherch.email}}')\">E-mail</btn>
        <a class=\"btn btn-info font-weight-bold text-white mt-4\" style=\"cursor: pointer;\" onclick=\"apparitionBoutton(this,'{{recherch.siteWeb}}')\">Site web</a>
    </div>
    <div class=\"divBtn d-flex flex-column-reverse align-items-center\" id=\"{{recherch.id}}\">
        <button class=\" btnVoteAvis btn btn-success rounded font-weight-bold\" style=\"width: 155px; margin-top: 56px;\" value=\"{{recherch.id}}\">Votre avis</button>
        <p style=\"cursor: default; font-size: 14px; color: rgb(71, 71, 71); font-family: Trip Sans VF, Trip Sans, Arial, sans-serif;\" class=\"mb-0 ml-2\"></p>
        
        
    </div>
</div>
{% endfor %}

{% endif %}
{% endif %}

{% endfor %}





{% endif %}
{% endblock %}", "recherche.block.html.twig", "/var/www/html/artisan/themes/classic/templates/front-office/recherche.block.html.twig");
    }
}
