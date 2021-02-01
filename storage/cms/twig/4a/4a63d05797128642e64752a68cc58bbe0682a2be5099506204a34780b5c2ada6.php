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
        $tags = array("partial" => 1);
        $filters = array("_" => 20, "escape" => 28);
        $functions = array("form_token" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['_', 'escape'],
                ['form_token']
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
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about-us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nase-vyrobky"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nastrojarna-uvod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "
";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lisovna-uvod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "
";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produkty-uvod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("kvalita-uvod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("publicita-uvod"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "
<div class=\"container py-5\" id=\"contact\">
    <div class=\"row\">
        <div class=\"col-12 mb-5\">
            <h1 class=\"text-center\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["KONTAKT"]);
        echo "</h1>
        </div>    
            
            ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("kontakt"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "           
        <div class=\"col-md-6\">
        <h5>";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Kontaktní formulář"]);
        echo "</h5>
            
         <form data-request=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["homeForm"] ?? null), 28, $this->source), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 30
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["homeForm"] ?? null), 32, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Jméno:"]);
        echo "</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"comments\">";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Zpráva:"]);
        echo "</label>
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>

    <div class=\"form-group\">
       
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["odeslat"]);
        echo "</button>

</form>
     
        <p>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vaše osobní údaje budou zpracovány dle pravidel o ochraně osobních údajů."]);
        echo "</p>
       
        
        </div>            
        </div>
    </div>
</div>";
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
        return array (  187 => 57,  180 => 53,  169 => 45,  156 => 35,  150 => 32,  145 => 30,  140 => 28,  135 => 26,  131 => 24,  127 => 23,  121 => 20,  115 => 16,  111 => 15,  108 => 14,  104 => 13,  101 => 12,  97 => 11,  94 => 10,  90 => 9,  87 => 8,  83 => 7,  80 => 6,  76 => 5,  73 => 4,  69 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'uvod' %}

{% partial 'about-us' %}

{% partial 'nase-vyrobky' %}

{% partial 'nastrojarna-uvod' %}

{% partial 'lisovna-uvod' %}

{% partial 'produkty-uvod' %}

{% partial 'kvalita-uvod' %}

{% partial 'publicita-uvod' %}

<div class=\"container py-5\" id=\"contact\">
    <div class=\"row\">
        <div class=\"col-12 mb-5\">
            <h1 class=\"text-center\">{{ 'KONTAKT' |_ }}</h1>
        </div>    
            
            {% partial 'kontakt' %}
           
        <div class=\"col-md-6\">
        <h5>{{ 'Kontaktní formulář' |_ }}</h5>
            
         <form data-request=\"{{ homeForm }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ homeForm }}_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">{{ 'Jméno:'|_}}</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"comments\">{{ 'Zpráva:' |_ }}</label>
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>

    <div class=\"form-group\">
       
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">{{ 'odeslat'|_ }}</button>

</form>
     
        <p>{{ 'Vaše osobní údaje budou zpracovány dle pravidel o ochraně osobních údajů.' |_ }}</p>
       
        
        </div>            
        </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/home.htm", "");
    }
}
