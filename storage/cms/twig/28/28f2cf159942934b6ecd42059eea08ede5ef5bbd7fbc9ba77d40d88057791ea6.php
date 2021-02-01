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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/kontakt.htm */
class __TwigTemplate_683b4d48af50ccd9365c2599fe51f6270d5bbd09fa01d735bba4b00ff60d9b3b extends \Twig\Template
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
        $filters = array("theme" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"col-md-6\">
            <img src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Techno-Vyskov-logo.svg");
        echo "\" width=\"230\" class=\"mb-3\" alt=\"\">
            <h3 class=\"text-primary\">TECHNO Vyškov <small> spol. s r. o.</small></h3>
            <ul class=\"list-unstyled\">
                <li>Joklova 282/9a</li>
                <li>682 01 Vyškov</li>
                <li>Czech Republic</li>
            </ul>
            <ul class=\"text-primary list-unstyled\">
                <li>Tel.: <a href=\"tel:+420517341681\">+420 517 341 681</a></li>
                <li>Výroba: <a href=\"tel:+420602568307\">+420 602 568 307</a></li>
                <li>Nástrojárna: <a href=\"tel:+420721269930\">+420 721 269 930</a></li>
                <li>E-mail: <a href=\"mailto:info@techno-vyskov.cz\">info@techno-vyskov.cz</a></li>
            </ul>
            <ul class=\"list-unstyled\">
                <li>IČO: 25 58 51 77</li>
                <li>DIČ: CZ 25 58 51 77</li>
            </ul>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/kontakt.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-6\">
            <img src=\"{{ 'assets/images/Techno-Vyskov-logo.svg' | theme }}\" width=\"230\" class=\"mb-3\" alt=\"\">
            <h3 class=\"text-primary\">TECHNO Vyškov <small> spol. s r. o.</small></h3>
            <ul class=\"list-unstyled\">
                <li>Joklova 282/9a</li>
                <li>682 01 Vyškov</li>
                <li>Czech Republic</li>
            </ul>
            <ul class=\"text-primary list-unstyled\">
                <li>Tel.: <a href=\"tel:+420517341681\">+420 517 341 681</a></li>
                <li>Výroba: <a href=\"tel:+420602568307\">+420 602 568 307</a></li>
                <li>Nástrojárna: <a href=\"tel:+420721269930\">+420 721 269 930</a></li>
                <li>E-mail: <a href=\"mailto:info@techno-vyskov.cz\">info@techno-vyskov.cz</a></li>
            </ul>
            <ul class=\"list-unstyled\">
                <li>IČO: 25 58 51 77</li>
                <li>DIČ: CZ 25 58 51 77</li>
            </ul>
        </div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/kontakt.htm", "");
    }
}
