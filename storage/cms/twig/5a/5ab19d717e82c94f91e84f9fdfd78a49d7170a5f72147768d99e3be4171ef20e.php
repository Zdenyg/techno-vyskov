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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/navbar.htm */
class __TwigTemplate_4526715df0c24873749718e488d7bb982e89574ed308f26382eb726a61873575 extends \Twig\Template
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
        $tags = array("if" => 12, "component" => 36);
        $filters = array("page" => 4, "theme" => 5, "_" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component'],
                ['page', 'theme', '_'],
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
        echo "<!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-light shadow\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t<img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Techno-Vyskov-logo.svg");
        echo "\" alt=\"Techno Vyškov logo\">
\t  </a>
      <button class=\"navbar-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\" id=\"menu\">
          <li class=\"nav-item ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "id", [], "any", false, false, true, 12) == "home")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["úvod"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "id", [], "any", false, false, true, 15) == "tooling")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nástrojárna"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) == "molding")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("molding");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["lisovna"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "products")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produkty"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "id", [], "any", false, false, true, 24) == "quality")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kvalita"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 27), "id", [], "any", false, false, true, 27) == "career")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kariéra"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) == "contact")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kontakt"]);
        echo "</a>
          </li>
          
        </ul>
        <div class=\"lang_switch\">
            ";
        // line 36
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "        </div>    
      </div>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 37,  175 => 36,  165 => 31,  159 => 30,  152 => 28,  146 => 27,  139 => 25,  133 => 24,  126 => 22,  120 => 21,  113 => 19,  107 => 18,  100 => 16,  94 => 15,  87 => 13,  81 => 12,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-light shadow\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t<img src=\"{{ 'assets/images/Techno-Vyskov-logo.svg'|theme }}\" alt=\"Techno Vyškov logo\">
\t  </a>
      <button class=\"navbar-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\" id=\"menu\">
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
        <div class=\"lang_switch\">
            {% component 'localePicker' %}
        </div>    
      </div>
    </div>
  </nav>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/navbar.htm", "");
    }
}
