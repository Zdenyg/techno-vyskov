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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/quality.htm */
class __TwigTemplate_f0d6bb49bfaa850cb2d18cc6fee9a79f55125df3e1df4bc37e7c0e581e4984fb extends \Twig\Template
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
        $tags = array("content" => 7);
        $filters = array("_" => 4, "theme" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['_', 'theme'],
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
        echo "<div class=\"container py-5\" id=\"kvalita\">
    <div class=\"row py-5\">
        <div class=\"col-md-12\">
             <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Kvalita"]);
        echo "</h1>
        </div>
        <div class=\"col-md-8\">
            ";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("kvalita-text"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo " 
        </div>
        <div class=\"col-md-4\">
            <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Logo_TUV.jpg");
        echo "\" style=\"width: 90px;\" alt=\"\">
        </div>
        <div class=\"col-md-8\">
            <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/3d-mereni.jpg");
        echo "\" class=\"img-fluid\" alt=\"\">
        </div>  
        <div class=\"col-md-4\">
            <h4>Certifikáty</h4>
            
            <ul class=\"list-unstyled\">
                <li><img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pdf.svg");
        echo "\" style=\"width: 30px;\" class=\"pb-3 mr-4\" alt=\"\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/28091msIATF_cz.pdf");
        echo "\">IATF 16949 CZ</a></li>
                <li><img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pdf.svg");
        echo "\" style=\"width: 30px;\" class=\"pb-3 mr-4\" alt=\"\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/28091msIATF_en.pdf");
        echo "\">IATF 16949 EN</a></li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/quality.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  96 => 19,  87 => 13,  81 => 10,  73 => 7,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\" id=\"kvalita\">
    <div class=\"row py-5\">
        <div class=\"col-md-12\">
             <h1>{{ 'Kvalita' |_}}</h1>
        </div>
        <div class=\"col-md-8\">
            {% content 'kvalita-text' %} 
        </div>
        <div class=\"col-md-4\">
            <img src=\"{{ 'assets/images/Logo_TUV.jpg' | theme }}\" style=\"width: 90px;\" alt=\"\">
        </div>
        <div class=\"col-md-8\">
            <img src=\"{{ 'assets/images/3d-mereni.jpg' | theme }}\" class=\"img-fluid\" alt=\"\">
        </div>  
        <div class=\"col-md-4\">
            <h4>Certifikáty</h4>
            
            <ul class=\"list-unstyled\">
                <li><img src=\"{{ 'assets/images/pdf.svg' |theme }}\" style=\"width: 30px;\" class=\"pb-3 mr-4\" alt=\"\"><a href=\"{{ 'assets/images/28091msIATF_cz.pdf' | theme }}\">IATF 16949 CZ</a></li>
                <li><img src=\"{{ 'assets/images/pdf.svg' |theme }}\" style=\"width: 30px;\" class=\"pb-3 mr-4\" alt=\"\"><a href=\"{{ 'assets/images/28091msIATF_en.pdf' | theme }}\">IATF 16949 EN</a></li>
            </ul>
        </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/quality.htm", "");
    }
}
