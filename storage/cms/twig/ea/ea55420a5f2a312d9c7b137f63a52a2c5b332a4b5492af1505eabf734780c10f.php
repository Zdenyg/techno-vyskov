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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/partials/about-us.htm */
class __TwigTemplate_85165da72b2947f6c8c9a1d7d355a8791e7f85126423078d0ba216f68c66be0e extends \Twig\Template
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
        $tags = array("content" => 4, "set" => 21, "for" => 29, "spaceless" => 32, "if" => 37);
        $filters = array("theme" => 10, "escape" => 35, "page" => 50, "_" => 67);
        $functions = array("range" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['content', 'set', 'for', 'spaceless', 'if'],
                ['theme', 'escape', 'page', '_'],
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
        echo "<div class=\"container py-5\" id=\"uvod\">
    <div class=\"row\">
        <div class=\"col-md-7 mb-5\">
            ";
        // line 4
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("uvod"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 5
        echo "            <div class=\"row\">
                <div class=\"col-md-8 text-primary\">
                    ";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("uvod2"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 8
        echo "                </div>
                <div class=\"col-md-4 text-center\">
                    <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Logo_TUV.jpg");
        echo "\" style=\"width: 125px;\" alt=\"\">
                </div>
            </div>
        </div>

        <div class=\"col-md-5 mb-3 career\">
            <div class=\"card border\">
                <div class=\"card-body\">
                  <h6 class=\"card-title bg-primary text-white p-2\">Volné pracovní pozice</h6>
                    

                        ";
        // line 21
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 21);
        // line 22
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 22);
        // line 23
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 23);
        // line 24
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 24);
        // line 25
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 25);
        // line 26
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 26);
        // line 27
        echo "
<ul class=\"record-list\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 30
            echo "        <li>
            ";
            // line 32
            echo "            ";
            ob_start();
            // line 33
            echo " 

                ";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "

                ";
            // line 37
            if (($context["detailsPage"] ?? null)) {
                // line 38
                echo "                   
                ";
            }
            // line 40
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 41
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 43, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</ul>

";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 47) > 1)) {
            // line 48
            echo "    <ul class=\"pagination\">
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 49) > 1)) {
                // line 50
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "baseFileName", [], "any", false, false, true, 50), 50, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 50) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 52
            echo "
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 53)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 54
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 54) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 55
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "baseFileName", [], "any", false, false, true, 55), 55, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 55, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
        ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 59) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 59))) {
                // line 60
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 60), "baseFileName", [], "any", false, false, true, 60), 60, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 60) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 62
            echo "    </ul>
";
        }
        // line 64
        echo "
                        <div class=\"row text-center pb-2 pt-5\">
                            <div class=\"col\">
                                <a href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
        echo "\" class=\"btn btn-primary\" role=\"button\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kariéra"]);
        echo "</a>
                            </div>
                        </div>
                </div>
              </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 67,  212 => 64,  208 => 62,  202 => 60,  200 => 59,  197 => 58,  186 => 55,  181 => 54,  177 => 53,  174 => 52,  168 => 50,  166 => 49,  163 => 48,  161 => 47,  157 => 45,  148 => 43,  142 => 41,  139 => 40,  135 => 38,  133 => 37,  128 => 35,  124 => 33,  121 => 32,  118 => 30,  113 => 29,  109 => 27,  107 => 26,  105 => 25,  103 => 24,  101 => 23,  99 => 22,  97 => 21,  83 => 10,  79 => 8,  75 => 7,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\" id=\"uvod\">
    <div class=\"row\">
        <div class=\"col-md-7 mb-5\">
            {% content 'uvod' %}
            <div class=\"row\">
                <div class=\"col-md-8 text-primary\">
                    {% content 'uvod2' %}
                </div>
                <div class=\"col-md-4 text-center\">
                    <img src=\"{{ 'assets/images/Logo_TUV.jpg' | theme }}\" style=\"width: 125px;\" alt=\"\">
                </div>
            </div>
        </div>

        <div class=\"col-md-5 mb-3 career\">
            <div class=\"card border\">
                <div class=\"card-body\">
                  <h6 class=\"card-title bg-primary text-white p-2\">Volné pracovní pozice</h6>
                    

                        {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
 

                {{ attribute(record, displayColumn) }}

                {% if detailsPage %}
                   
                {% endif %}
            {% endspaceless %}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

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

                        <div class=\"row text-center pb-2 pt-5\">
                            <div class=\"col\">
                                <a href=\"{{ 'career'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'kariéra' |_ }}</a>
                            </div>
                        </div>
                </div>
              </div>
            </div>
        </div>
    </div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/about-us.htm", "");
    }
}
