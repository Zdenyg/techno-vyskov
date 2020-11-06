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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/nastrojarna-uvod.htm */
class __TwigTemplate_0ed7130af768c7e2e88e50bf83c7af003495efdece616006b2a23d49b1945a2d extends \Twig\Template
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
        $tags = array("partial" => 11);
        $filters = array("_" => 5, "theme" => 7, "page" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['_', 'theme', 'page'],
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
        echo "<section class=\"gradient\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h4>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NAŠE SLUŽBY"]);
        echo "</h4>
                <h1>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NÁSTROJÁRNA"]);
        echo "</h1>
                <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/forma_01.png");
        echo "\" class=\"img-fluid\" alt=\"\">
            </div>
        </div>

        ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nastrojarna-iconbox"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\" class=\"btn btn-primary\" role=\"button\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["více informací"]);
        echo "</a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/nastrojarna-uvod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  87 => 12,  83 => 11,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"gradient\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h4>{{ 'NAŠE SLUŽBY' |_}}</h4>
                <h1>{{ 'NÁSTROJÁRNA' |_}}</h1>
                <img src=\"{{ 'assets/images/forma_01.png' | theme }}\" class=\"img-fluid\" alt=\"\">
            </div>
        </div>

        {% partial 'nastrojarna-iconbox' %}

        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"{{ 'tooling'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'více informací' |_ }}</a>
            </div>
        </div>
    </div>
</section>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/nastrojarna-uvod.htm", "");
    }
}
