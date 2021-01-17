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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/kvalita-uvod.htm */
class __TwigTemplate_33e5ebfc0289123681174bf6e0c862333c6ccad275b3304eb8534b5ff25411aa extends \Twig\Template
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
        $tags = array("content" => 22);
        $filters = array("_" => 5, "theme" => 13, "page" => 28);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
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
        <div class=\"col-12 text-center mb-5\">
            <h1>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["KVALITA"]);
        echo "</h1>
            <h2>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Splňujeme vysoké požadavky na kvalitu"]);
        echo "</h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-2 col-md-12 text-center\">
            <div class=\"blue-iconbox\">
                <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-07.svg");
        echo "\" alt=\"\">
                    <h5 class=\"mt-3\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["3D MĚŘENÍ"]);
        echo "</h5>
                        
            </div> 
        </div>
        <div class=\"col-lg-6 col-md-12 text-center\">
            <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/3d-mereni.jpg");
        echo "\" class=\"img-fluid shadow\" alt=\"\">
        </div>
        <div class=\"col-lg-4 col-md-12 my-5 align-self-center\">
            ";
        // line 22
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("3d-mereni"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 23
        echo "        </div>
    </div>

    <div class=\"row text-center pt-5\">
        <div class=\"col\">
            <a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
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
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/kvalita-uvod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  104 => 23,  100 => 22,  94 => 19,  86 => 14,  82 => 13,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"gradient\">
<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 text-center mb-5\">
            <h1>{{ 'KVALITA'|_ }}</h1>
            <h2>{{ 'Splňujeme vysoké požadavky na kvalitu'|_}}</h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-2 col-md-12 text-center\">
            <div class=\"blue-iconbox\">
                <img src=\"{{ 'assets/images/icon-tool-07.svg' | theme }}\" alt=\"\">
                    <h5 class=\"mt-3\">{{ '3D MĚŘENÍ'|_ }}</h5>
                        
            </div> 
        </div>
        <div class=\"col-lg-6 col-md-12 text-center\">
            <img src=\"{{ 'assets/images/3d-mereni.jpg' | theme }}\" class=\"img-fluid shadow\" alt=\"\">
        </div>
        <div class=\"col-lg-4 col-md-12 my-5 align-self-center\">
            {% content '3d-mereni' %}
        </div>
    </div>

    <div class=\"row text-center pt-5\">
        <div class=\"col\">
            <a href=\"{{ 'quality'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'více informací' |_ }}</a>
        </div>
    </div>
</div>
</section>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/kvalita-uvod.htm", "");
    }
}
