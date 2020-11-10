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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/typo.htm */
class __TwigTemplate_358ff7da5fe7ce5fb1890affd84409d90cceff7489fd759adb28fe63d00efe95 extends \Twig\Template
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
        $tags = array("for" => 11);
        $filters = array("page" => 4, "slice" => 11, "escape" => 13, "_" => 54);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'slice', 'escape', '_'],
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\" class=\"btn btn-primary\" role=\"button\">nástrojárna</a>
        </div>
    </div>
</div>


<div class=\"gallery text-center\">
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "product_images", [], "any", false, false, true, 11), 7, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " <!-- Zacinas od 7. fotky a ukazujes 3 -->
<div class=\"image-wrapper\">
    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">
        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\" alt=\"\">
    </a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>


<hr>

<h1>Nadpis h1</h1>
<h2>Nadpis h2</h2>
<h3>Nadpis h3</h3>
<h4>Nadpis h4</h4>
<h5>Nadpis h5</h5>
<p>odstavec</p>
<ul>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
</ul>

<h1 class=\"display-1\">Display 1</h1>
<h1 class=\"display-2\">Display 2</h1>
<h1 class=\"display-3\">Display 3</h1>
<h1 class=\"display-4\">Display 4</h1>
<h1 class=\"display-5\">Display 5</h1>



<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"gradient\">
                
            </div>
        </div>
    </div>
</div>


";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vítejte na me stránce"]);
        echo "

<h5>konstrukce <strong>forem pro vstřikování plastů</strong></h5>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/typo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  98 => 18,  88 => 14,  84 => 13,  77 => 11,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"{{ 'tooling'|page }}\" class=\"btn btn-primary\" role=\"button\">nástrojárna</a>
        </div>
    </div>
</div>


<div class=\"gallery text-center\">
{% for image in this.theme.product_images  | slice(7,3) %} <!-- Zacinas od 7. fotky a ukazujes 3 -->
<div class=\"image-wrapper\">
    <a href=\"{{ image.path }}\">
        <img src=\"{{ image.thumb(300, 200, {'mode':'crop' }) }}\" alt=\"\">
    </a>
</div>
{% endfor %}
</div>


<hr>

<h1>Nadpis h1</h1>
<h2>Nadpis h2</h2>
<h3>Nadpis h3</h3>
<h4>Nadpis h4</h4>
<h5>Nadpis h5</h5>
<p>odstavec</p>
<ul>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
</ul>

<h1 class=\"display-1\">Display 1</h1>
<h1 class=\"display-2\">Display 2</h1>
<h1 class=\"display-3\">Display 3</h1>
<h1 class=\"display-4\">Display 4</h1>
<h1 class=\"display-5\">Display 5</h1>



<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"gradient\">
                
            </div>
        </div>
    </div>
</div>


{{ 'Vítejte na me stránce'|_ }}

<h5>konstrukce <strong>forem pro vstřikování plastů</strong></h5>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/typo.htm", "");
    }
}
