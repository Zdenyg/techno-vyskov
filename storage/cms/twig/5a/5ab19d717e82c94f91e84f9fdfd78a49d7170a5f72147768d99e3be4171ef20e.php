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
        $tags = array("if" => 11, "component" => 35);
        $filters = array("page" => 3, "theme" => 4, "_" => 12);
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light shadow\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t<img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Techno-Vyskov-logo.svg");
        echo "\" alt=\"Techno Vyškov logo\">
\t  </a>
      <button class=\"navbar-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\" id=\"menu\">
          <li class=\"nav-item ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11) == "home")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["úvod"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "id", [], "any", false, false, true, 14) == "tooling")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nástrojárna"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) == "molding")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("molding");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["lisovna"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "id", [], "any", false, false, true, 20) == "products")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produkty"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "id", [], "any", false, false, true, 23) == "quality")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kvalita"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 26), "id", [], "any", false, false, true, 26) == "career")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kariéra"]);
        echo "</a>
          </li>
          <li class=\"nav-item ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 29), "id", [], "any", false, false, true, 29) == "contact")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kontakt"]);
        echo "</a>
          </li>
          
        </ul>
        <div class=\"lang_switch\">
            ";
        // line 35
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
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
        return array (  178 => 36,  174 => 35,  164 => 30,  158 => 29,  151 => 27,  145 => 26,  138 => 24,  132 => 23,  125 => 21,  119 => 20,  112 => 18,  106 => 17,  99 => 15,  93 => 14,  86 => 12,  80 => 11,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light shadow\" id=\"mainNav\">
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
