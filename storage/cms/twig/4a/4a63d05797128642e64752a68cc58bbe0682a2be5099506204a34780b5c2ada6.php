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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/home.htm */
class __TwigTemplate_8b016c3f8654d111ff504b07d489b297fc114ec43170e49ecd6cf9a6ce9a4f7e extends \Twig\Template
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
        $tags = array("partial" => 1, "content" => 7);
        $filters = array("theme" => 13, "_" => 41, "page" => 51);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'content'],
                ['theme', '_', 'page'],
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("uvod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<!-- O firme -->
<div class=\"container pt-5\" id=\"uvod\">
    <div class=\"row\">
        <div class=\"col-md-7 mb-5\">
            ";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("uvod"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 8
        echo "            <div class=\"row\">
                <div class=\"col-md-8 text-primary\">
                    ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("uvod2"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                </div>
                <div class=\"col-md-4 text-center\">
                    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-TUV.jpg");
        echo "\" style=\"width: 100px;\" alt=\"\">
                </div>
            </div>
        </div>
        <!-- Career -->
        <div class=\"col-md-5 mb-3\">
            <div class=\"card border p-3\">
                <div class=\"card-body\">
                  <h6 class=\"card-title bg-primary text-white p-2\">Volné pracovní pozice</h6>
                  <h6 class=\"card-subtitle mb-2 text-muted\">aktuálně nehledáme </h6>
                  <a href=\"#\" class=\"card-link\">Card link</a>
                  <a href=\"#\" class=\"card-link\">Another link</a>
                </div>
              </div>
            </div>
            
        </div>
    </div>
</div>

";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nase-vyrobky"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
<!-- Nastrojarna -->

<section class=\"gradient\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NAŠE SLUŽBY"]);
        echo "</h2>
                <h1>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NÁSTROJÁRNA"]);
        echo "</h1>
                <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/forma_01.png");
        echo "\" class=\"img-fluid\" alt=\"\">
            </div>
        </div>

        ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nastrojarna-iconbox"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "
        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tooling");
        echo "\" class=\"btn btn-primary\" role=\"button\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nástrojárna"]);
        echo "</a>
            </div>
        </div>
    </div>
</section>

<!-- Lisovna -->

<section class=\"gradient\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1>";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["LISOVNA"]);
        echo "</h1>
                <img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lisovna-01.png");
        echo "\" class=\"img-fluid pb-5\" alt=\"\">
            </div>
        </div>

        ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lisovna-iconbox"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "
        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("molding");
        echo "\" class=\"btn btn-primary\" role=\"button\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["lisovna"]);
        echo "</a>
            </div>
        </div>
    </div>
 </section>

 <!-- Produkty -->
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center mb-5\">
                <h2 class=\"text-uppercase\">";
        // line 82
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PRODUKTY"]);
        echo "</h2>
            </div>
        </div>

        ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produkty"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "
        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("products");
        echo "\" class=\"btn btn-primary\" role=\"button\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["produkty"]);
        echo "</a>
            </div>
        </div>
    </div>

<!-- Kvalita -->
<section class=\"bg-success\">
<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 text-center mb-5\">
            <h2 class=\"text-uppercase mb-5\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["KVALITA"]);
        echo "</h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-2 col-md-12 text-center\">
            <div class=\"blue-iconbox\">
                <img src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-tool-07.svg");
        echo "\" alt=\"\">
                    <h4 class=\"mt-3\">";
        // line 108
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["3D MĚŘENÍ"]);
        echo "</h4>
                        
            </div> 
        </div>
        <div class=\"col-lg-6 col-md-12 text-center\">
            <img src=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/3d-mereni.jpg");
        echo "\" class=\"img-fluid shadow\" alt=\"\">
        </div>
        <div class=\"col-lg-4 col-md-12 my-5 d-flex align-self-center\">
            ";
        // line 116
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("3d-mereni"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 117
        echo "        </div>
    </div>

    <div class=\"row text-center pt-5\">
        <div class=\"col\">
            <a href=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("quality");
        echo "\" class=\"btn btn-primary\" role=\"button\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["kvalita"]);
        echo "</a>
        </div>
    </div>
</div>
</section>


";
        // line 129
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("kontakt"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 129,  271 => 122,  264 => 117,  260 => 116,  254 => 113,  246 => 108,  242 => 107,  232 => 100,  217 => 90,  212 => 87,  208 => 86,  201 => 82,  186 => 72,  181 => 69,  177 => 68,  170 => 64,  166 => 63,  149 => 51,  144 => 48,  140 => 47,  133 => 43,  129 => 42,  125 => 41,  116 => 34,  112 => 33,  89 => 13,  85 => 11,  81 => 10,  77 => 8,  73 => 7,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'uvod' %}

<!-- O firme -->
<div class=\"container pt-5\" id=\"uvod\">
    <div class=\"row\">
        <div class=\"col-md-7 mb-5\">
            {% content 'uvod' %}
            <div class=\"row\">
                <div class=\"col-md-8 text-primary\">
                    {% content 'uvod2' %}
                </div>
                <div class=\"col-md-4 text-center\">
                    <img src=\"{{ 'assets/images/logo-TUV.jpg' | theme }}\" style=\"width: 100px;\" alt=\"\">
                </div>
            </div>
        </div>
        <!-- Career -->
        <div class=\"col-md-5 mb-3\">
            <div class=\"card border p-3\">
                <div class=\"card-body\">
                  <h6 class=\"card-title bg-primary text-white p-2\">Volné pracovní pozice</h6>
                  <h6 class=\"card-subtitle mb-2 text-muted\">aktuálně nehledáme </h6>
                  <a href=\"#\" class=\"card-link\">Card link</a>
                  <a href=\"#\" class=\"card-link\">Another link</a>
                </div>
              </div>
            </div>
            
        </div>
    </div>
</div>

{% partial 'nase-vyrobky' %}

<!-- Nastrojarna -->

<section class=\"gradient\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>{{ 'NAŠE SLUŽBY' |_}}</h2>
                <h1>{{ 'NÁSTROJÁRNA' |_}}</h1>
                <img src=\"{{ 'assets/images/forma_01.png' | theme }}\" class=\"img-fluid\" alt=\"\">
            </div>
        </div>

        {% partial 'nastrojarna-iconbox' %}

        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"{{ 'tooling'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'nástrojárna' |_ }}</a>
            </div>
        </div>
    </div>
</section>

<!-- Lisovna -->

<section class=\"gradient\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1>{{ 'LISOVNA' |_ }}</h1>
                <img src=\"{{ 'assets/images/lisovna-01.png' | theme }}\" class=\"img-fluid pb-5\" alt=\"\">
            </div>
        </div>

        {% partial 'lisovna-iconbox' %}

        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"{{ 'molding'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'lisovna' |_ }}</a>
            </div>
        </div>
    </div>
 </section>

 <!-- Produkty -->
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center mb-5\">
                <h2 class=\"text-uppercase\">{{ 'PRODUKTY' |_ }}</h2>
            </div>
        </div>

        {% partial 'produkty' %}

        <div class=\"row text-center pt-5\">
            <div class=\"col\">
                <a href=\"{{ 'products'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'produkty' |_ }}</a>
            </div>
        </div>
    </div>

<!-- Kvalita -->
<section class=\"bg-success\">
<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 text-center mb-5\">
            <h2 class=\"text-uppercase mb-5\">{{ 'KVALITA'|_ }}</h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-2 col-md-12 text-center\">
            <div class=\"blue-iconbox\">
                <img src=\"{{ 'assets/images/icon-tool-07.svg' | theme }}\" alt=\"\">
                    <h4 class=\"mt-3\">{{ '3D MĚŘENÍ' |_ }}</h4>
                        
            </div> 
        </div>
        <div class=\"col-lg-6 col-md-12 text-center\">
            <img src=\"{{ 'assets/images/3d-mereni.jpg' | theme }}\" class=\"img-fluid shadow\" alt=\"\">
        </div>
        <div class=\"col-lg-4 col-md-12 my-5 d-flex align-self-center\">
            {% content '3d-mereni' %}
        </div>
    </div>

    <div class=\"row text-center pt-5\">
        <div class=\"col\">
            <a href=\"{{ 'quality'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'kvalita' |_ }}</a>
        </div>
    </div>
</div>
</section>


{% partial 'kontakt' %}", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/home.htm", "");
    }
}
