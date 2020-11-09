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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/products.htm */
class __TwigTemplate_c341832928b0e30a1a1f21806551d002795fe6eafc9ae189bc5eb88347dd72d7 extends \Twig\Template
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
        $tags = array("for" => 13);
        $filters = array("_" => 4, "escape" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['_', 'escape'],
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
        echo "<div class=\"container py-5\">
    <div class=\"row py-5\">
        <div class=\"col-md-6\">
            <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Produkty"]);
        echo "</h1>
        </div>    
    </div>
    <div class=\"row\">
        <div class=\"col text-center\">
            <h4>nástrojárna</h4>
        </div>
    </div>
    <div class=\"gallery text-center\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 13), "tooling_images", [], "any", false, false, true, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            echo "        <div class=\"image-wrapper img-hover-zoom\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" alt=\"\">
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    <div class=\"row\">
        <div class=\"col text-center pt-5\">
            <h4>lisovna</h4>
        </div>
    </div>
    <div class=\"gallery text-center\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 27), "product_images", [], "any", false, false, true, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " 
    <div class=\"image-wrapper img-hover-zoom\">
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\">
            <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" alt=\"\">
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  120 => 30,  116 => 29,  109 => 27,  100 => 20,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\">
    <div class=\"row py-5\">
        <div class=\"col-md-6\">
            <h1>{{ 'Produkty' |_}}</h1>
        </div>    
    </div>
    <div class=\"row\">
        <div class=\"col text-center\">
            <h4>nástrojárna</h4>
        </div>
    </div>
    <div class=\"gallery text-center\">
        {% for image in this.theme.tooling_images %}
        <div class=\"image-wrapper img-hover-zoom\">
            <a href=\"{{ image.path }}\">
                <img src=\"{{ image.thumb(300, 200, {'mode':'crop' }) }}\" alt=\"\">
            </a>
        </div>
        {% endfor %}
    </div>
    <div class=\"row\">
        <div class=\"col text-center pt-5\">
            <h4>lisovna</h4>
        </div>
    </div>
    <div class=\"gallery text-center\">
    {% for image in this.theme.product_images %} 
    <div class=\"image-wrapper img-hover-zoom\">
        <a href=\"{{ image.path }}\">
            <img src=\"{{ image.thumb(300, 200, {'mode':'crop' }) }}\" alt=\"\">
        </a>
    </div>
    {% endfor %}
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/products.htm", "");
    }
}
