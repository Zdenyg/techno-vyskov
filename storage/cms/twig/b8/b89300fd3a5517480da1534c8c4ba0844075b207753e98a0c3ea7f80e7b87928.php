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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/publicita-uvod.htm */
class __TwigTemplate_e8d207e51e56e19459211b4fc3cfa555150b86c23cf6dfbd502ce1d93610c05f extends \Twig\Template
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
        $filters = array("page" => 5, "theme" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
        
        <div class=\"col-md-6 col-sm-12 py-3\">
            <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("publicita");
        echo "\">
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/OPP-01.png");
        echo "\" class=\"img-fluid\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-6 col-sm-12 py-3\">
            <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("publicita");
        echo "\">
                <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/OPP-02.png");
        echo "\" class=\"img-fluid\" alt=\"\">
            </a>
        </div>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/publicita-uvod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  79 => 10,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\">
    <div class=\"row\">
        
        <div class=\"col-md-6 col-sm-12 py-3\">
            <a href=\"{{ 'publicita'|page }}\">
                <img src=\"{{ 'assets/images/OPP-01.png' | theme }}\" class=\"img-fluid\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-6 col-sm-12 py-3\">
            <a href=\"{{ 'publicita'|page }}\">
                <img src=\"{{ 'assets/images/OPP-02.png' | theme }}\" class=\"img-fluid\" alt=\"\">
            </a>
        </div>
        </a>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/publicita-uvod.htm", "");
    }
}
