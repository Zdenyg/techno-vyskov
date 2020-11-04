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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/produkty-uvod.htm */
class __TwigTemplate_8319223eb8f4f0e7be785ac632160469c99c5e95da4c2ce350eeb1cd21b71dd9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("partial" => 8);
        $filters = array("_" => 4, "page" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['_', 'page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center mb-5\">
                <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PRODUKTY"]);
        echo "</h1>
            </div>
        </div>

        ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produkty"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\" class=\"btn btn-primary\" role=\"button\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["více foto"]);
        echo "</a>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/produkty-uvod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  78 => 9,  74 => 8,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center mb-5\">
                <h1>{{ 'PRODUKTY' |_ }}</h1>
            </div>
        </div>

        {% partial 'produkty' %}

        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"{{ 'products'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'více foto' |_ }}</a>
            </div>
        </div>
    </div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/produkty-uvod.htm", "");
    }
}
