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
        $filters = array("theme" => 7, "_" => 11, "page" => 13, "escape" => 39, "date" => 39);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', '_', 'page', 'escape', 'date'],
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
            <div class=\"col-md-5\">
                <a href=\"https://www.google.com/maps/place/TECHNO+Vy%C5%A1kov,+spol.+s+r.o./@49.2791175,17.0104993,17z/data=!3m1!4b1!4m5!3m4!1s0x4712fae5817973d9:0x79639d981365565e!8m2!3d49.2791175!4d17.012688\" target=\"_blank\">
                    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mapa-1.jpg");
        echo "\" class=\"img-fluid\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-3\">
                <h4>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["navigace"]);
        echo "</h4>
                <ul>
                    <li><a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["úvod"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nástrojárna"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("molding");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["lisovna"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produkty"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kvalita"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kariéra"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kontakt"]);
        echo "</a></li>
                  </ul>
            </div>
            <div class=\"col-md-4\">
                <h4>";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["odkazy"]);
        echo "</h4>
                <ul>
                  <li><a href=\"#\" class=\"nav-link\">ochrana osobních údajů</a></li>
                  <li><a href=\"#\" class=\"nav-link\">publicita EU</a></li>
                  <li><a href=\"#\" class=\"nav-link\">všeobecné obchodní podmínky</a></li>
                  
                </ul>
                <h4 class=\"mt-5\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["rychlý kontakt"]);
        echo "</h4>
                <ul>
                  <li class=\"contact-link\">Tel.:<a href=\"tel:+420517341681\">+420 517 341 681</a></li>
                  <li class=\"contact-link\">E-mail: <a href=\"mailto:info@techno-vyskov.cz\">info@techno-vyskov.cz</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"date text-center text-white\">
        <p>TECHNO Vyškov spol. s r.o. • &nbsp;";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
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
        return array (  149 => 39,  137 => 30,  127 => 23,  118 => 19,  112 => 18,  106 => 17,  100 => 16,  94 => 15,  88 => 14,  82 => 13,  77 => 11,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">

    <div class=\"container text-white pt-5 pb-2\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <a href=\"https://www.google.com/maps/place/TECHNO+Vy%C5%A1kov,+spol.+s+r.o./@49.2791175,17.0104993,17z/data=!3m1!4b1!4m5!3m4!1s0x4712fae5817973d9:0x79639d981365565e!8m2!3d49.2791175!4d17.012688\" target=\"_blank\">
                    <img src=\"{{ 'assets/images/mapa-1.jpg' | theme }}\" class=\"img-fluid\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-3\">
                <h4>{{ 'navigace' |_ }}</h4>
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
                <h4>{{ 'odkazy' |_ }}</h4>
                <ul>
                  <li><a href=\"#\" class=\"nav-link\">ochrana osobních údajů</a></li>
                  <li><a href=\"#\" class=\"nav-link\">publicita EU</a></li>
                  <li><a href=\"#\" class=\"nav-link\">všeobecné obchodní podmínky</a></li>
                  
                </ul>
                <h4 class=\"mt-5\">{{ 'rychlý kontakt' |_ }}</h4>
                <ul>
                  <li class=\"contact-link\">Tel.:<a href=\"tel:+420517341681\">+420 517 341 681</a></li>
                  <li class=\"contact-link\">E-mail: <a href=\"mailto:info@techno-vyskov.cz\">info@techno-vyskov.cz</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"date text-center text-white\">
        <p>TECHNO Vyškov spol. s r.o. • &nbsp;{{\"now\"|date(\"Y\") }}</p>
    </div>
</footer>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/footer.htm", "");
    }
}
