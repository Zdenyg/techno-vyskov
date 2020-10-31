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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/nase-vyrobky.htm */
class __TwigTemplate_e3159d669bfc2c5f68cfd5c331a7073663c41f2cdfaf117f7f2289da472df7db extends \Twig\Template
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
        $filters = array("theme" => 10, "_" => 11);
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
        echo "<section class=\"bg-primary py-5\">
    <div class=\"container text-white text-center\">
        <div class=\"row\">
            <div class=\"col pb-3\">
                <h4>Naše výrobky jsou zastoupeny v mnoha odvětvích</h4>
            </div>
        </div>
        <div class=\"row d-flex justify-content-around\">
            <div class=\"iconbox\">
                <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-01.svg");
        echo "\" alt=\"\">
                <p>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["automobilový průmysl"]);
        echo "</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-02.svg");
        echo "\" alt=\"\">
                <p>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["telekomunikace"]);
        echo "</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-03.svg");
        echo "\" alt=\"\">
                <p>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["tepelná regulace"]);
        echo "</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-04.svg");
        echo "\" alt=\"\">
                <p>";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["stavebnictví"]);
        echo "</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-05.svg");
        echo "\" alt=\"\">
                <p>";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["hračky pro děti"]);
        echo "</p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/nase-vyrobky.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  113 => 26,  107 => 23,  103 => 22,  97 => 19,  93 => 18,  87 => 15,  83 => 14,  77 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"bg-primary py-5\">
    <div class=\"container text-white text-center\">
        <div class=\"row\">
            <div class=\"col pb-3\">
                <h4>Naše výrobky jsou zastoupeny v mnoha odvětvích</h4>
            </div>
        </div>
        <div class=\"row d-flex justify-content-around\">
            <div class=\"iconbox\">
                <img src=\"{{ 'assets/images/icon-01.svg' | theme }}\" alt=\"\">
                <p>{{ 'automobilový průmysl' |_ }}</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"{{ 'assets/images/icon-02.svg' | theme }}\" alt=\"\">
                <p>{{ 'telekomunikace' |_ }}</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"{{ 'assets/images/icon-03.svg' | theme }}\" alt=\"\">
                <p>{{ 'tepelná regulace' |_ }}</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"{{ 'assets/images/icon-04.svg' | theme }}\" alt=\"\">
                <p>{{ 'stavebnictví' |_ }}</p>
            </div>
            <div class=\"iconbox\">
                <img src=\"{{ 'assets/images/icon-05.svg' | theme }}\" alt=\"\">
                <p>{{ 'hračky pro děti' |_ }}</p>
            </div>
        </div>
    </div>
</section>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/nase-vyrobky.htm", "");
    }
}
