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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/career.htm */
class __TwigTemplate_d86987228a07fada96ce2a0d3351b78ce4923125cad9366e103f61e517ade5d8 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 17, "if" => 18);
        $filters = array("page" => 19, "escape" => 23, "raw" => 29);
        $functions = array("range" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['page', 'escape', 'raw'],
                ['range']
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "

<div class=\"container mt-3\">
   <div class=\"row\">
       <div class=\"col\">
            <h1>Kariéra</h1>
            <h5>Volné pracovní pozice ve společnosti Techno Vyškov.</h5>
       </div>
   </div>

   ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 18
            echo "        ";
            if (($context["detailsPage"] ?? null)) {
                // line 19
                echo "            <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 19, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 19)]);
                echo "\">
        ";
            }
            // line 21
            echo "   <div class=\"row my-3\">
       <div class=\"col\">
            <h2>";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "job_name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</h2>
       </div>
   </div>
   <div class=\"row\">
        <div class=\"col-md-6\">
            <h5>Požadujeme:</h5>
            <p>";
            // line 29
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "require", [], "any", false, false, true, 29), 29, $this->source);
            echo "</p>
        </div>
        <div class=\"col-md-6\">
            <h5>Pracovní náplň</h5>
            <p>";
            // line 33
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "job_description", [], "any", false, false, true, 33), 33, $this->source);
            echo "</p>
       </div>
        <div class=\"col-md-6\">
            <h5>Nabízíme:</h5>
            <p>";
            // line 37
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "offer", [], "any", false, false, true, 37), 37, $this->source);
            echo "</p>
        </div>
   </div> 
    <hr class=\"mb-5\">
               
    ";
            // line 42
            if (($context["detailsPage"] ?? null)) {
                // line 43
                echo "        </a>
    ";
            }
            // line 45
            echo "    
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 47, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 50) > 1)) {
            // line 51
            echo "    <ul class=\"pagination\">
        ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 52) > 1)) {
                // line 53
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 53), "baseFileName", [], "any", false, false, true, 53), 53, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 53) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 55
            echo "
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 56)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 57
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 57) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 58
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "baseFileName", [], "any", false, false, true, 58), 58, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 58, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
        ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 62) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 62))) {
                // line 63
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 63), "baseFileName", [], "any", false, false, true, 63), 63, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 63) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 65
            echo "    </ul>
";
        }
        // line 67
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/career.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 67,  206 => 65,  200 => 63,  198 => 62,  195 => 61,  184 => 58,  179 => 57,  175 => 56,  172 => 55,  166 => 53,  164 => 52,  161 => 51,  159 => 50,  156 => 49,  147 => 47,  141 => 45,  137 => 43,  135 => 42,  127 => 37,  120 => 33,  113 => 29,  104 => 23,  100 => 21,  94 => 19,  91 => 18,  86 => 17,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


<div class=\"container mt-3\">
   <div class=\"row\">
       <div class=\"col\">
            <h1>Kariéra</h1>
            <h5>Volné pracovní pozice ve společnosti Techno Vyškov.</h5>
       </div>
   </div>

   {% for record in records %}
        {% if detailsPage %}
            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
        {% endif %}
   <div class=\"row my-3\">
       <div class=\"col\">
            <h2>{{ record.job_name }}</h2>
       </div>
   </div>
   <div class=\"row\">
        <div class=\"col-md-6\">
            <h5>Požadujeme:</h5>
            <p>{{ record.require | raw }}</p>
        </div>
        <div class=\"col-md-6\">
            <h5>Pracovní náplň</h5>
            <p>{{ record.job_description | raw }}</p>
       </div>
        <div class=\"col-md-6\">
            <h5>Nabízíme:</h5>
            <p>{{ record.offer | raw }}</p>
        </div>
   </div> 
    <hr class=\"mb-5\">
               
    {% if detailsPage %}
        </a>
    {% endif %}
    
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}

</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/career.htm", "");
    }
}
