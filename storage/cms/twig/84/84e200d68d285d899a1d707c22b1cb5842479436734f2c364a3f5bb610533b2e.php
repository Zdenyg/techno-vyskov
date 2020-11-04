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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/nastrojarna-iconbox.htm */
class __TwigTemplate_f357f5b6d51c9ba813eb3849dcd481a0d4deb8398fbc89a2bdf8903057788cd7 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 4, "_" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', '_'],
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
        echo "<div class=\"row bg-white shadow shortdesc\">
            <div class=\"col text-center d-md-flex justify-content-around\">
                <div class=\"iconbox\">
                    <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-01.svg");
        echo "\" alt=\"\">
                    <h5>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["KONSTRUKCE"]);
        echo "</h5>
                        <p>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["forem pro vstřikování plastů"]);
        echo "</p>
                </div>
                <div class=\"iconbox\">
                    <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-02.svg");
        echo "\" alt=\"\">
                    <h5>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["VÝROBA"]);
        echo "</h5>
                    <p>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["forem pro vstřikování plastů"]);
        echo "</p>
                </div>
                <div class=\"iconbox\">
                    <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-03.svg");
        echo "\" alt=\"\">
                    <h5>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["OPRAVY"]);
        echo "</h5>
                    <p>";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["forem pro vstřikování plastů"]);
        echo "</p>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/nastrojarna-iconbox.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 16,  99 => 15,  95 => 14,  89 => 11,  85 => 10,  81 => 9,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row bg-white shadow shortdesc\">
            <div class=\"col text-center d-md-flex justify-content-around\">
                <div class=\"iconbox\">
                    <img src=\"{{ 'assets/images/icon-tool-01.svg' | theme }}\" alt=\"\">
                    <h5>{{ 'KONSTRUKCE' |_ }}</h5>
                        <p>{{ 'forem pro vstřikování plastů' |_ }}</p>
                </div>
                <div class=\"iconbox\">
                    <img src=\"{{ 'assets/images/icon-tool-02.svg' | theme }}\" alt=\"\">
                    <h5>{{ 'VÝROBA' |_ }}</h5>
                    <p>{{ 'forem pro vstřikování plastů' |_ }}</p>
                </div>
                <div class=\"iconbox\">
                    <img src=\"{{ 'assets/images/icon-tool-03.svg' | theme }}\" alt=\"\">
                    <h5>{{ 'OPRAVY' |_ }}</h5>
                    <p>{{ 'forem pro vstřikování plastů' |_ }}</p>
                </div>
            </div>
        </div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/nastrojarna-iconbox.htm", "");
    }
}
