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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/layouts/default.htm */
class __TwigTemplate_8375a66f0908ad9038ba332e0a9f5b02715939a363ff676c7d7a2934b94eea29 extends \Twig\Template
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
        $tags = array("partial" => 27, "page" => 29, "framework" => 41, "scripts" => 42);
        $filters = array("escape" => 6, "theme" => 9);
        $functions = array("url_current" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
                ['url_current']
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
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
    
    <link rel=\"icon\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-16x16.png");
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/android-chrome-192x192.png");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/styles.css");
        echo "\">
    
    <title>";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</title>

    <meta property=\"og:title\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "meta_title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "meta_description", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 20
        echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/theme-preview.png");
        echo "\"/>
    
    
    
  </head>
  <body id=\"page-top\">
  ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    
  ";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 30
        echo "    
  ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
  <a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary back-to-top\" role=\"button\">
    <svg width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-up\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
      <path fill-rule=\"evenodd\" d=\"M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z\"/>
    </svg>
  </a>

  <script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scripts.js");
        echo "\"></script>

  ";
        // line 41
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 42
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 43
        echo "
    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 43,  170 => 42,  159 => 41,  154 => 39,  145 => 32,  141 => 31,  138 => 30,  136 => 29,  133 => 28,  129 => 27,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  103 => 16,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    
    <link rel=\"icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">
    <link rel=\"icon\" href=\"{{ 'assets/images/favicon-16x16.png'|theme }}\">
    <link rel=\"icon\" href=\"{{ 'assets/images/favicon-32x32.png'|theme }}\">
    <link rel=\"icon\" href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\">
    <link rel=\"icon\" href=\"{{ 'assets/images/android-chrome-192x192.png'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/styles.css' | theme }}\">
    
    <title>{{ this.page.title }}</title>

    <meta property=\"og:title\" content=\"{{ this.page.meta_title }}\" />
    <meta property=\"og:description\" content=\"{{ this.page.meta_description }}\" />
    <meta property=\"og:url\" content=\"{{ url_current() }}\" />
    <meta property=\"og:image\" content=\"{{ 'assets/images/theme-preview.png'|theme }}\"/>
    
    
    
  </head>
  <body id=\"page-top\">
  {% partial 'navbar' %}
    
  {% page %}
    
  {% partial 'footer' %}

  <a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary back-to-top\" role=\"button\">
    <svg width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-up\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
      <path fill-rule=\"evenodd\" d=\"M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z\"/>
    </svg>
  </a>

  <script src=\"{{ 'assets/js/scripts.js' | theme }}\"></script>

  {% framework extras %}
  {% scripts %}

    
  </body>
</html>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/layouts/default.htm", "");
    }
}
