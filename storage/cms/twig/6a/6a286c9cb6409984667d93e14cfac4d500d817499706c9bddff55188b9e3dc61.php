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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/uvod.htm */
class __TwigTemplate_0fb9b2b155830e651110e8d2f4a1b709539f2054dfc0b2e073468c9aaab20f3a extends \Twig\Template
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
        $filters = array("theme" => 4, "_" => 12);
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
        echo "<header>
    <div class=\"overlay\"></div>
    <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
      <source src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/video/Techno-video-01.mp4");
        echo "\" type=\"video/mp4\">
    </video>
    <div class=\"container h-100\">

          
          <div class=\"row h-100 align-items-center justify-content-end\">
            <div class=\"col-md-4 col-sm-6 bg-primary text-white p-3 desc\">
              <ul>
                <li>";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["konstrukce nástrojů"]);
        echo "</li>
                <li>";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["výroba forem"]);
        echo "</li>
                <li>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["vzorování"]);
        echo "</li>
                <li>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["měření"]);
        echo "</li>
                <li>";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["výroba sériových dílů"]);
        echo "</li>
              </ul>
            </div>


          

    </div>
  </header>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/uvod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div class=\"overlay\"></div>
    <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
      <source src=\"{{ 'assets/video/Techno-video-01.mp4' | theme }}\" type=\"video/mp4\">
    </video>
    <div class=\"container h-100\">

          
          <div class=\"row h-100 align-items-center justify-content-end\">
            <div class=\"col-md-4 col-sm-6 bg-primary text-white p-3 desc\">
              <ul>
                <li>{{ 'konstrukce nástrojů' |_}}</li>
                <li>{{ 'výroba forem' |_}}</li>
                <li>{{ 'vzorování' |_}}</li>
                <li>{{ 'měření' |_}}</li>
                <li>{{ 'výroba sériových dílů' |_}}</li>
              </ul>
            </div>


          

    </div>
  </header>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/uvod.htm", "");
    }
}
