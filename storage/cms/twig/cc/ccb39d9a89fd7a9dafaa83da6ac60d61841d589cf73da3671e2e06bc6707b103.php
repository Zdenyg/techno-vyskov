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
        $tags = array("set" => 1, "for" => 17, "if" => 18, "component" => 80);
        $filters = array("page" => 19, "escape" => 21, "date" => 24, "raw" => 30);
        $functions = array("range" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'component'],
                ['page', 'escape', 'date', 'raw'],
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

<div class=\"container py-5\">
   <div class=\"row py-5\">
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
            echo "   <div class=\"row my-3\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\">
       <div class=\"col\">
            <h3 class=\"text-primary\">";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "job_name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</h3>
            <p><small>publikováno:  ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, true, 24), 24, $this->source), "d. m. Y"), "html", null, true);
            echo "</small></p>
       </div>
   </div>
   <div class=\"row\">
        <div class=\"col-md-6\">
            <h5>Požadujeme:</h5>
            <p>";
            // line 30
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "require", [], "any", false, false, true, 30), 30, $this->source);
            echo "</p>
        </div>
        <div class=\"col-md-6\">
            <h5>Pracovní náplň</h5>
            <p>";
            // line 34
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "job_description", [], "any", false, false, true, 34), 34, $this->source);
            echo "</p>
       </div>
        <div class=\"col-md-6\">
            <h5>Nabízíme:</h5>
            <p>";
            // line 38
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "offer", [], "any", false, false, true, 38), 38, $this->source);
            echo "</p>
        </div>
   </div> 
    <hr class=\"mb-5\">
               
    ";
            // line 43
            if (($context["detailsPage"] ?? null)) {
                // line 44
                echo "        </a>
    ";
            }
            // line 46
            echo "    
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 48, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 51) > 1)) {
            // line 52
            echo "    <ul class=\"pagination\">
        ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 53) > 1)) {
                // line 54
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 54), "baseFileName", [], "any", false, false, true, 54), 54, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 54) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 56
            echo "
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 57)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 58
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 58) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 59
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 59), "baseFileName", [], "any", false, false, true, 59), 59, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 59, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
        ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 63) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 63))) {
                // line 64
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 64), "baseFileName", [], "any", false, false, true, 64), 64, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 64) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 66
            echo "    </ul>
";
        }
        // line 68
        echo "

    <h3 class=\"pb-2 font-weight-bolder\">Zaujala vás některá z nabízených pozic?</h3>
    <h5>Kontaktujte nás</h5>
    <ul class=\"my-4 list-unstyled\">
        <li>Ing. Helena Hálová</li>
        <li><strong>Tel: <a href=\"tel:+420517341681\">+420 517 341 681</a></strong></li>
        <li><strong> E-mail: <a href=\"mailto: h.halova@techno-vyskov.cz\">h.halova@techno-vyskov.cz</a></strong></li>
    </ul>
    <p>Nebo pomocí kontaktního formuláře</p>
  
    <div class=\"col-md-6\">   
        ";
        // line 80
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 81
        echo "    </div>
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
        return array (  234 => 81,  230 => 80,  216 => 68,  212 => 66,  206 => 64,  204 => 63,  201 => 62,  190 => 59,  185 => 58,  181 => 57,  178 => 56,  172 => 54,  170 => 53,  167 => 52,  165 => 51,  162 => 50,  153 => 48,  147 => 46,  143 => 44,  141 => 43,  133 => 38,  126 => 34,  119 => 30,  110 => 24,  106 => 23,  100 => 21,  94 => 19,  91 => 18,  86 => 17,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


<div class=\"container py-5\">
   <div class=\"row py-5\">
       <div class=\"col\">
            <h1>Kariéra</h1>
            <h5>Volné pracovní pozice ve společnosti Techno Vyškov.</h5>
       </div>
   </div>

   {% for record in records %}
        {% if detailsPage %}
            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
        {% endif %}
   <div class=\"row my-3\" id=\"{{ record.id }}\">
       <div class=\"col\">
            <h3 class=\"text-primary\">{{ record.job_name }}</h3>
            <p><small>publikováno:  {{ record.created_at | date('d. m. Y')}}</small></p>
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


    <h3 class=\"pb-2 font-weight-bolder\">Zaujala vás některá z nabízených pozic?</h3>
    <h5>Kontaktujte nás</h5>
    <ul class=\"my-4 list-unstyled\">
        <li>Ing. Helena Hálová</li>
        <li><strong>Tel: <a href=\"tel:+420517341681\">+420 517 341 681</a></strong></li>
        <li><strong> E-mail: <a href=\"mailto: h.halova@techno-vyskov.cz\">h.halova@techno-vyskov.cz</a></strong></li>
    </ul>
    <p>Nebo pomocí kontaktního formuláře</p>
  
    <div class=\"col-md-6\">   
        {% component 'contactForm' %}
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/career.htm", "");
    }
}
