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
        $tags = array();
        $filters = array("page" => 4, "_" => 35);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', '_'],
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



<hr>

<h1>Lorem ipsum dolor sit amet.</h1>
<h2>Lorem ipsum dolor sit amet.</h2>
<h3>Lorem ipsum dolor sit amet.</h3>
<h4>Lorem ipsum dolor sit amet.</h4>
<h5>Lorem ipsum dolor sit amet.</h5>
<p>Lorem ipsum dolor sit amet.</p>

<ul>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
</ul>

<h1 class=\"display-1\">Display 1</h1>
<h1 class=\"display-2\">Display 2</h1>
<h1 class=\"display-3\">Display 3</h1>
<h1 class=\"display-4\">Display 4</h1>





";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vítejte na me stránce"]);
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
        return array (  101 => 35,  67 => 4,  62 => 1,);
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



<hr>

<h1>Lorem ipsum dolor sit amet.</h1>
<h2>Lorem ipsum dolor sit amet.</h2>
<h3>Lorem ipsum dolor sit amet.</h3>
<h4>Lorem ipsum dolor sit amet.</h4>
<h5>Lorem ipsum dolor sit amet.</h5>
<p>Lorem ipsum dolor sit amet.</p>

<ul>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
    <li>Lorem, ipsum dolor.</li>
</ul>

<h1 class=\"display-1\">Display 1</h1>
<h1 class=\"display-2\">Display 2</h1>
<h1 class=\"display-3\">Display 3</h1>
<h1 class=\"display-4\">Display 4</h1>





{{ 'Vítejte na me stránce'|_ }}", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/typo.htm", "");
    }
}
