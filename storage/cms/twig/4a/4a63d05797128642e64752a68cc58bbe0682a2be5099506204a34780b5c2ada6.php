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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/home.htm */
class __TwigTemplate_8b016c3f8654d111ff504b07d489b297fc114ec43170e49ecd6cf9a6ce9a4f7e extends \Twig\Template
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
        $tags = array("partial" => 1, "content" => 7);
        $filters = array("theme" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'content'],
                ['theme'],
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("uvod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "

<div class=\"container my-5\" id=\"uvod\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("uvod"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 8
        echo "            <div class=\"row\">
                <div class=\"col-md-8 text-primary\">
                    ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("uvod2"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                </div>
                <div class=\"col-md-4\">
                    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-TUV.jpg");
        echo "\" style=\"width: 150px;\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <h5>Aktuální volné pozice</h5>
        </div>
    </div>
</div>

";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nase-vyrobky"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  89 => 13,  85 => 11,  81 => 10,  77 => 8,  73 => 7,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'uvod' %}


<div class=\"container my-5\" id=\"uvod\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            {% content 'uvod' %}
            <div class=\"row\">
                <div class=\"col-md-8 text-primary\">
                    {% content 'uvod2' %}
                </div>
                <div class=\"col-md-4\">
                    <img src=\"{{ 'assets/images/logo-TUV.jpg' | theme }}\" style=\"width: 150px;\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <h5>Aktuální volné pozice</h5>
        </div>
    </div>
</div>

{% partial 'nase-vyrobky' %}", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/home.htm", "");
    }
}
