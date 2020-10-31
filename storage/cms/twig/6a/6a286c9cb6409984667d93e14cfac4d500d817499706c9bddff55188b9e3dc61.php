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
        $filters = array("theme" => 4);
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
        echo "<header>
    <div class=\"overlay\"></div>
    <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
      <source src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/video/techno.mp4");
        echo "\" type=\"video/mp4\">
    </video>
    <div class=\"container h-100\">
      <div class=\"d-flex h-100 text-center align-items-center\">
        <div class=\"w-100 text-white\">
          <h1 class=\"display-3\">Video Header</h1>
          <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
        </div>
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
        return array (  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div class=\"overlay\"></div>
    <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
      <source src=\"{{ 'assets/video/techno.mp4' | theme }}\" type=\"video/mp4\">
    </video>
    <div class=\"container h-100\">
      <div class=\"d-flex h-100 text-center align-items-center\">
        <div class=\"w-100 text-white\">
          <h1 class=\"display-3\">Video Header</h1>
          <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
        </div>
      </div>
    </div>
  </header>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/uvod.htm", "");
    }
}
