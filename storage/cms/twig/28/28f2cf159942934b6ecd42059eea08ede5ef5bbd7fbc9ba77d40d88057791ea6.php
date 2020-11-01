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
        $tags = array("component" => 29);
        $filters = array("_" => 4, "theme" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
        echo "<div class=\"container py-5\" id=\"contact\">
    <div class=\"row\">
        <div class=\"col-12 text-center\">
            <h2 class=\"text-uppercase\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["KONTAKT"]);
        echo "</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 my-5\">
            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Techno-Vyskov-logo.svg");
        echo "\" class=\"mb-3\" alt=\"\">
            <h3 class=\"text-primary\">TECHNO Vyškov spol. s r. o.</h3>
            <ul>
                <li>Joklova 9</li>
                <li>682 01 Vyškov</li>
                <li>Czech Republic</li>
            </ul>
            <ul class=\"text-primary\">
                <li>Tel.: +420 517 341 681</li>
                <li>Fax: +420 517 341 682</li>
                <li>Výroba: +420 602 568 307</li>
                <li>Nástrojárna: +420 721 269 930</li>
                <li>E-mail: info@techno-vyskov.cz</li>
            </ul>
            <ul>
                <li>IČO: 25 58 51 77</li>
                <li>DIČ: CZ 25 58 51 77</li>
            </ul>
        </div>
        <div class=\"col-md-6 my-5\">
            ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "            <p>Vaše osobní údaje budou zpracovány dle pravidel o ochraně osobních údajů.</p>
        </div>
    </div>
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
        return array (  102 => 30,  98 => 29,  75 => 9,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\" id=\"contact\">
    <div class=\"row\">
        <div class=\"col-12 text-center\">
            <h2 class=\"text-uppercase\">{{ 'KONTAKT' |_ }}</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 my-5\">
            <img src=\"{{ 'assets/images/Techno-Vyskov-logo.svg' | theme }}\" class=\"mb-3\" alt=\"\">
            <h3 class=\"text-primary\">TECHNO Vyškov spol. s r. o.</h3>
            <ul>
                <li>Joklova 9</li>
                <li>682 01 Vyškov</li>
                <li>Czech Republic</li>
            </ul>
            <ul class=\"text-primary\">
                <li>Tel.: +420 517 341 681</li>
                <li>Fax: +420 517 341 682</li>
                <li>Výroba: +420 602 568 307</li>
                <li>Nástrojárna: +420 721 269 930</li>
                <li>E-mail: info@techno-vyskov.cz</li>
            </ul>
            <ul>
                <li>IČO: 25 58 51 77</li>
                <li>DIČ: CZ 25 58 51 77</li>
            </ul>
        </div>
        <div class=\"col-md-6 my-5\">
            {% component 'contactForm' %}
            <p>Vaše osobní údaje budou zpracovány dle pravidel o ochraně osobních údajů.</p>
        </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/kontakt.htm", "");
    }
}
