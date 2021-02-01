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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/contact.htm */
class __TwigTemplate_5247784b69748c7612333a07977fb8c148fe1b099958156ee1296137fd80dcc2 extends \Twig\Template
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
        $tags = array("partial" => 7);
        $filters = array("_" => 4, "escape" => 10);
        $functions = array("form_token" => 12);

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
        echo "<div class=\"container py-5\">
    <div class=\"row py-5\">
        <div class=\"col-12 pb-5\">
             <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Kontakt"]);
        echo "</h1>
        </div>     

             ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("kontakt"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "  
        <div class=\"col-md-6\">
            <form data-request=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["homeForm"] ?? null), 10, $this->source), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["homeForm"] ?? null), 14, $this->source), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">";
        // line 17
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
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Zpráva:"]);
        echo "</label>
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>

    <div class=\"form-group\">
       
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["odeslat"]);
        echo "</button>

</form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  110 => 27,  97 => 17,  91 => 14,  86 => 12,  81 => 10,  77 => 8,  73 => 7,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\">
    <div class=\"row py-5\">
        <div class=\"col-12 pb-5\">
             <h1>{{'Kontakt'|_}}</h1>
        </div>     

             {% partial 'kontakt' %}
  
        <div class=\"col-md-6\">
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
        </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/contact.htm", "");
    }
}
