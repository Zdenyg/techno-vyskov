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
        $tags = array("if" => 8);
        $filters = array("page" => 9, "_" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<footer class=\"footer bg-dark\">

    <div class=\"container text-white py-5\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h4>menu</h4>
                <ul class=\"nav d-flex align-items-start flex-column\">
                    <li class=\"nav-item ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "id", [], "any", false, false, true, 8) == "home")) {
            echo "active";
        }
        echo "\">
                      <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["úvod"]);
        echo "</a>
                    </li>
                    <li class=\"nav-item ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11) == "tooling")) {
            echo "active";
        }
        echo "\">
                      <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nástrojárna"]);
        echo "</a>
                    </li>
                    <li class=\"nav-item ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "id", [], "any", false, false, true, 14) == "molding")) {
            echo "active";
        }
        echo "\">
                      <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("molding");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["lisovna"]);
        echo "</a>
                    </li>
                    <li class=\"nav-item ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) == "products")) {
            echo "active";
        }
        echo "\">
                      <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produkty"]);
        echo "</a>
                    </li>
                    <li class=\"nav-item ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "id", [], "any", false, false, true, 20) == "quality")) {
            echo "active";
        }
        echo "\">
                      <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kvalita"]);
        echo "</a>
                    </li>
                    <li class=\"nav-item ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "id", [], "any", false, false, true, 23) == "career")) {
            echo "active";
        }
        echo "\">
                      <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kariéra"]);
        echo "</a>
                    </li>
                    <li class=\"nav-item ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 26), "id", [], "any", false, false, true, 26) == "contact")) {
            echo "active";
        }
        echo "\">
                      <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kontakt"]);
        echo "</a>
                    </li>
                  </ul>
            </div>
            <div class=\"col-md-6\">
                <h4>odkazy</h4>
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
        return array (  155 => 27,  149 => 26,  142 => 24,  136 => 23,  129 => 21,  123 => 20,  116 => 18,  110 => 17,  103 => 15,  97 => 14,  90 => 12,  84 => 11,  77 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer bg-dark\">

    <div class=\"container text-white py-5\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h4>menu</h4>
                <ul class=\"nav d-flex align-items-start flex-column\">
                    <li class=\"nav-item {% if this.page.id == 'home' %}active{% endif %}\">
                      <a class=\"nav-link\" href=\"{{ 'home'|page }}\">{{ 'úvod'|_ }}</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'tooling' %}active{% endif %}\">
                      <a class=\"nav-link\" href=\"{{ 'tooling'|page }}\">{{ 'nástrojárna'|_ }}</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'molding' %}active{% endif %}\">
                      <a class=\"nav-link\" href=\"{{ 'molding'|page }}\">{{ 'lisovna'|_ }}</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'products' %}active{% endif %}\">
                      <a class=\"nav-link\" href=\"{{ 'products'|page }}\">{{ 'produkty'|_ }}</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'quality' %}active{% endif %}\">
                      <a class=\"nav-link\" href=\"{{ 'quality'|page }}\">{{ 'kvalita'|_ }}</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'career' %}active{% endif %}\">
                      <a class=\"nav-link\" href=\"{{ 'career'|page }}\">{{ 'kariéra'|_ }}</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'contact' %}active{% endif %}\">
                      <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">{{ 'kontakt'|_ }}</a>
                    </li>
                  </ul>
            </div>
            <div class=\"col-md-6\">
                <h4>odkazy</h4>
            </div>
        </div>
    </div>
    <div class=\"date text-center text-white\">
        <p>TECHNO Vyškov spol. s r.o.</p>
    </div>
</footer>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/footer.htm", "");
    }
}
