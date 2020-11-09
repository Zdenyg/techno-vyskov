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
        $filters = array("_" => 9, "page" => 11, "escape" => 37, "date" => 37);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_', 'page', 'escape', 'date'],
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
                <iframe class=\"img-fluid mb-4\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1301.4262126083054!2d17.012163049096717!3d49.27919349665817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4712fae5817973d9%3A0x79639d981365565e!2sTECHNO%20Vy%C5%A1kov%2C%20spol.%20s%20r.o.!5e0!3m2!1scs!2scz!4v1604700592417!5m2!1scs!2scz\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
            </div>
            <div class=\"col-md-3\">
                <h4>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["navigace"]);
        echo "</h4>
                <ul>
                    <li><a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["úvod"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nástrojárna"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("molding");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["lisovna"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produkty"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kvalita"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kariéra"]);
        echo "</a></li>
                    <li><a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kontakt"]);
        echo "</a></li>
                  </ul>
            </div>
            <div class=\"col-md-4\">
                <h4>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["odkazy"]);
        echo "</h4>
                <ul>
                  <li><a href=\"#\" class=\"nav-link\">ochrana osobních údajů</a></li>
                  <li><a href=\"#\" class=\"nav-link\">publicita EU</a></li>
                  <li><a href=\"#\" class=\"nav-link\">všeobecné obchodní podmínky</a></li>
                  
                </ul>
                <h4 class=\"mt-5\">";
        // line 28
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
        // line 37
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
        return array (  144 => 37,  132 => 28,  122 => 21,  113 => 17,  107 => 16,  101 => 15,  95 => 14,  89 => 13,  83 => 12,  77 => 11,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">

    <div class=\"container text-white pt-5 pb-2\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <iframe class=\"img-fluid mb-4\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1301.4262126083054!2d17.012163049096717!3d49.27919349665817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4712fae5817973d9%3A0x79639d981365565e!2sTECHNO%20Vy%C5%A1kov%2C%20spol.%20s%20r.o.!5e0!3m2!1scs!2scz!4v1604700592417!5m2!1scs!2scz\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
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
