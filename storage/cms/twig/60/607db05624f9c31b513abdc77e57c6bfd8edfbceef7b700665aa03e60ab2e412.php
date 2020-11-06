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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/footer.htm */
class __TwigTemplate_399a496afc2cf9805abae7e18ffad9da518af9dca21b6c78ee7e43fe4a6a6ea8 extends \Twig\Template
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
        $filters = array("page" => 8, "_" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', '_'],
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
        echo "<footer class=\"footer\">

    <div class=\"container text-white pt-5 pb-2\">
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-2 pb-5\">
                <h4>menu</h4>
                <ul>
                    <li><a class=\"nav-link\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["úvod"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nástrojárna"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("molding");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["lisovna"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produkty"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kvalita"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kariéra"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kontakt"]);
        echo "</a></li>
                  </ul>
            </div>
            <div class=\"col-md-4\">
                <h4>odkazy</h4>
                <ul>
                  <li><a href=\"#\" class=\"nav-link\">ochrana osobních údajů</a></li>
                  <li><a href=\"#\" class=\"nav-link\">publicita EU</a></li>
                </ul>
                <h4 class=\"mt-5\">rychlý kontakt</h4>
                <ul>
                  <li class=\"contact-link\">Tel.:<a href=\"tel: +420 517 341 681\">+420 517 341 681</a></li>
                  <li class=\"contact-link\">E-mail: <a href=\"mailto:info@techno-vyskov.cz\">info@techno-vyskov.cz</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"date text-center text-white\">
        <p>TECHNO Vyškov spol. s r.o.</p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 14,  101 => 13,  95 => 12,  89 => 11,  83 => 10,  77 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">

    <div class=\"container text-white pt-5 pb-2\">
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-2 pb-5\">
                <h4>menu</h4>
                <ul>
                    <li><a class=\"nav-link\" href=\"{{ 'home'|page }}\">{{ 'úvod'|_ }}</a></li>
                    <li><a class=\"nav-link\" href=\"{{ 'tooling'|page }}\">{{ 'nástrojárna'|_ }}</a></li>
                    <li><a class=\"nav-link\" href=\"{{ 'molding'|page }}\">{{ 'lisovna'|_ }}</a></li>
                    <li><a class=\"nav-link\" href=\"{{ 'products'|page }}\">{{ 'produkty'|_ }}</a></li>
                    <li><a class=\"nav-link\" href=\"{{ 'quality'|page }}\">{{ 'kvalita'|_ }}</a></li>
                    <li><a class=\"nav-link\" href=\"{{ 'career'|page }}\">{{ 'kariéra'|_ }}</a></li>
                    <li><a class=\"nav-link\" href=\"{{ 'contact'|page }}\">{{ 'kontakt'|_ }}</a></li>
                  </ul>
            </div>
            <div class=\"col-md-4\">
                <h4>odkazy</h4>
                <ul>
                  <li><a href=\"#\" class=\"nav-link\">ochrana osobních údajů</a></li>
                  <li><a href=\"#\" class=\"nav-link\">publicita EU</a></li>
                </ul>
                <h4 class=\"mt-5\">rychlý kontakt</h4>
                <ul>
                  <li class=\"contact-link\">Tel.:<a href=\"tel: +420 517 341 681\">+420 517 341 681</a></li>
                  <li class=\"contact-link\">E-mail: <a href=\"mailto:info@techno-vyskov.cz\">info@techno-vyskov.cz</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"date text-center text-white\">
        <p>TECHNO Vyškov spol. s r.o.</p>
    </div>
</footer>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/footer.htm", "");
    }
}
