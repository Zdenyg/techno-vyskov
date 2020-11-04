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
        $tags = array("content" => 4, "component" => 21);
        $filters = array("theme" => 10, "page" => 25, "_" => 25);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content', 'component'],
                ['theme', 'page', '_'],
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-TUV.jpg");
        echo "\" style=\"width: 100px;\" alt=\"\">
                </div>
            </div>
        </div>

        <div class=\"col-md-5 mb-3 career\">
            <div class=\"card border\">
                <div class=\"card-body\">
                  <h6 class=\"card-title bg-primary text-white p-2\">Volné pracovní pozice</h6>
                    

                        ";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 22
        echo "
                        <div class=\"row text-center pb-2 pt-5\">
                            <div class=\"col\">
                                <a href=\"";
        // line 25
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
        return array (  106 => 25,  101 => 22,  97 => 21,  83 => 10,  79 => 8,  75 => 7,  71 => 5,  67 => 4,  62 => 1,);
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
                    <img src=\"{{ 'assets/images/logo-TUV.jpg' | theme }}\" style=\"width: 100px;\" alt=\"\">
                </div>
            </div>
        </div>

        <div class=\"col-md-5 mb-3 career\">
            <div class=\"card border\">
                <div class=\"card-body\">
                  <h6 class=\"card-title bg-primary text-white p-2\">Volné pracovní pozice</h6>
                    

                        {% component 'builderList' %}

                        <div class=\"row text-center pb-2 pt-5\">
                            <div class=\"col\">
                                <a href=\"{{ 'career'|page }}\" class=\"btn btn-primary\" role=\"button\">{{ 'kariéra' |_ }}</a>
                            </div>
                        </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/partials/about-us.htm", "");
    }
}
