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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/publicita.htm */
class __TwigTemplate_a25eb17d79c8921018436b9cae680a36c955b951e27682499447d86e2aa11766 extends \Twig\Template
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
        $filters = array("_" => 4, "theme" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_', 'theme'],
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
        echo "<div class=\"container py-5\" id=\"publicita\">
    <div class=\"row py-5\">
        <div class=\"col\">
            <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Publicita"]);
        echo "</h1>
        </div>   
    </div>
    <div class=\"row\">
        <div class=\"col d-flex\">
            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pdf.svg");
        echo "\" style=\"width: 60px;\" class=\"pb-3 mr-4\" alt=\"\">
            <ul class=\"list-unstyled\">
                <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/energeticke-technologie.pdf");
        echo "\">Energetické úsporné technologie</a></li>
                <li><a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/rozsireni-vav-kapacit.pdf");
        echo "\">Rozšíření VAV kapacit</a></li>
                <li><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vymena-vstrikolisu.pdf");
        echo "\">Výměna vstřikolisů</a></li>
            </ul>
        </div>
    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/publicita.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 13,  84 => 12,  80 => 11,  75 => 9,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\" id=\"publicita\">
    <div class=\"row py-5\">
        <div class=\"col\">
            <h1>{{ 'Publicita' |_}}</h1>
        </div>   
    </div>
    <div class=\"row\">
        <div class=\"col d-flex\">
            <img src=\"{{ 'assets/images/pdf.svg' |theme }}\" style=\"width: 60px;\" class=\"pb-3 mr-4\" alt=\"\">
            <ul class=\"list-unstyled\">
                <li><a href=\"{{ 'assets/images/energeticke-technologie.pdf' | theme }}\">Energetické úsporné technologie</a></li>
                <li><a href=\"{{ 'assets/images/rozsireni-vav-kapacit.pdf' | theme }}\">Rozšíření VAV kapacit</a></li>
                <li><a href=\"{{ 'assets/images/vymena-vstrikolisu.pdf' | theme }}\">Výměna vstřikolisů</a></li>
            </ul>
        </div>
    </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/publicita.htm", "");
    }
}
