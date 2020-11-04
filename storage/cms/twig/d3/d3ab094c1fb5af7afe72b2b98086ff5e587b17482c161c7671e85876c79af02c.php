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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/lisovna-iconbox.htm */
class __TwigTemplate_311154f92549d3888955cc38529e2ab727be2affb22eb74168c4a09485e04007 extends \Twig\Template
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
        echo "<div class=\"row bg-white shadow\">
    <div class=\"col text-center d-md-flex justify-content-around\">
        <div class=\"iconbox\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-04.svg");
        echo "\" alt=\"\">
            <h5>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["VSTŘIKOVÁNÍ PLASTOVÝCH VÝLISKŮ"]);
        echo "</h5>
        </div>
        <div class=\"iconbox\">
            <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-05.svg");
        echo "\" alt=\"\">
            <h5>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["MONTÁŽ A KOMPLETACE"]);
        echo "</h5>
        </div>
        <div class=\"iconbox\">
            <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-06.svg");
        echo "\" alt=\"\">
            <h5>";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["POTISK VÝROBKŮ"]);
        echo "</h5>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/lisovna-iconbox.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 13,  87 => 12,  81 => 9,  77 => 8,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row bg-white shadow\">
    <div class=\"col text-center d-md-flex justify-content-around\">
        <div class=\"iconbox\">
            <img src=\"{{ 'assets/images/icon-tool-04.svg' | theme }}\" alt=\"\">
            <h5>{{ 'VSTŘIKOVÁNÍ PLASTOVÝCH VÝLISKŮ' |_ }}</h5>
        </div>
        <div class=\"iconbox\">
            <img src=\"{{ 'assets/images/icon-tool-05.svg' | theme }}\" alt=\"\">
            <h5>{{ 'MONTÁŽ A KOMPLETACE' |_ }}</h5>
        </div>
        <div class=\"iconbox\">
            <img src=\"{{ 'assets/images/icon-tool-06.svg' | theme }}\" alt=\"\">
            <h5>{{ 'POTISK VÝROBKŮ' |_ }}</h5>
        </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/lisovna-iconbox.htm", "");
    }
}
