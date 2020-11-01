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
        $tags = array("for" => 2);
        $filters = array("slice" => 2, "escape" => 3);
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
        echo "<div id=\"lightgallery\" class=\"text-center\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 2), "product_images", [], "any", false, false, true, 2), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\">
            <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "\" alt=\"\">
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "


    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "tooling_images", [], "any", false, false, true, 10), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 11
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">
            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" alt=\"\">
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>";
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
        return array (  106 => 15,  97 => 12,  92 => 11,  88 => 10,  83 => 7,  74 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"lightgallery\" class=\"text-center\">
    {% for image in this.theme.product_images  | slice(0, 3) %}
        <a href=\"{{ image.path }}\">
            <img src=\"{{ image.thumb(300, 200, {'mode':'crop' }) }}\" alt=\"\">
        </a>
    {% endfor %}



    {% for image in this.theme.tooling_images | slice(0, 3) %}
        <a href=\"{{ image.path }}\">
            <img src=\"{{ image.thumb(300, 200, {'mode':'crop' }) }}\" alt=\"\">
        </a>
    {% endfor %}
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/produkty.htm", "");
    }
}
