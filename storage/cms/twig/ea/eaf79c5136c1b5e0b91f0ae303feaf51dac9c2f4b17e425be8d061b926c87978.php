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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/produkty.htm */
class __TwigTemplate_5f8e5491ef973467aa844365b62e7172e5dd857a07a620f3818d59171e69c49f extends \Twig\Template
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
        $tags = array("for" => 3);
        $filters = array("slice" => 3, "escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['slice', 'escape'],
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
        echo "<div class=\"gallery text-center\">
    
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "product_images", [], "any", false, false, true, 3), 7, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " 
    <div class=\"image-wrapper img-hover-zoom\">
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\">
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" alt=\"\">
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
    
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "tooling_images", [], "any", false, false, true, 12), 1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "    <div class=\"image-wrapper img-hover-zoom\">
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\">
            <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" alt=\"\">
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
 </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/produkty.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  102 => 15,  98 => 14,  95 => 13,  91 => 12,  87 => 10,  77 => 6,  73 => 5,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gallery text-center\">
    
    {% for image in this.theme.product_images  | slice(7,3) %} 
    <div class=\"image-wrapper img-hover-zoom\">
        <a href=\"{{ image.path }}\">
            <img src=\"{{ image.thumb(300, 200, {'mode':'crop' }) }}\" alt=\"\">
        </a>
    </div>
    {% endfor %}
    
    
    {% for image in this.theme.tooling_images | slice(1,3) %}
    <div class=\"image-wrapper img-hover-zoom\">
        <a href=\"{{ image.path }}\">
            <img src=\"{{ image.thumb(300, 200, {'mode':'crop' }) }}\" alt=\"\">
        </a>
    </div>
    {% endfor %}
    
 </div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/produkty.htm", "");
    }
}
