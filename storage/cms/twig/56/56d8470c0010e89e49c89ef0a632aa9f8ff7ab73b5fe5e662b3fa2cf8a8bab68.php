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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/ochrana-osobnich-udaju.htm */
class __TwigTemplate_76b6f53aa7bcb03ea30169073e8f979f00a1b5e2551ae8d8cfd2c3cfcefd87dc extends \Twig\Template
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
        $filters = array("_" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_'],
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
        echo "<div class=\"container py-5\" id=\"publicita\">
    <div class=\"row py-5\">
        <div class=\"col\">
            <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ochrana osobních údajů"]);
        echo "</h1>
        </div>   
    </div>
    <div class=\"row\">
        <div class=\"col\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quis error nobis non delectus nemo fugit hic distinctio. Ad, hic, facere, corporis accusantium doloribus rem officiis optio libero saepe sit beatae sapiente porro officia sunt repellat voluptatem fugit nihil dolores amet mollitia quasi. Excepturi, illo, quia, perferendis ex assumenda minus placeat sequi iure inventore ipsum ad nemo vel esse. Aliquid, quos, rem accusantium consequatur doloribus voluptates eligendi minima totam error asperiores ullam aspernatur doloremque eaque quia perferendis quae quibusdam laborum assumenda! Nulla, tempora, eveniet, commodi, mollitia error aliquid quidem dolores provident iure veniam iste ea nemo. Velit, mollitia, commodi dignissimos odio alias nobis amet ad facilis iste ipsa ipsam quo nam quasi deleniti voluptates dolore reiciendis omnis praesentium sint veniam. Vel, modi, id, delectus, beatae odit voluptatibus voluptates facere excepturi aspernatur repellat tempora eum impedit quam laudantium reprehenderit laborum labore et esse dicta perspiciatis distinctio eaque incidunt eos iusto repudiandae recusandae ipsa aperiam. Iste, cumque, enim expedita voluptas sit illo ab cum quibusdam vitae similique aliquam quis laborum maiores. Itaque, soluta, nulla quia ullam dolores laborum magnam nisi alias autem eum corporis repellat facere. Harum, impedit facere fugit. Tempora veritatis eos quos fugit necessitatibus laborum temporibus labore ipsam aliquam dolores.</p>
        </div>
    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/ochrana-osobnich-udaju.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container py-5\" id=\"publicita\">
    <div class=\"row py-5\">
        <div class=\"col\">
            <h1>{{ 'Ochrana osobních údajů' |_}}</h1>
        </div>   
    </div>
    <div class=\"row\">
        <div class=\"col\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quis error nobis non delectus nemo fugit hic distinctio. Ad, hic, facere, corporis accusantium doloribus rem officiis optio libero saepe sit beatae sapiente porro officia sunt repellat voluptatem fugit nihil dolores amet mollitia quasi. Excepturi, illo, quia, perferendis ex assumenda minus placeat sequi iure inventore ipsum ad nemo vel esse. Aliquid, quos, rem accusantium consequatur doloribus voluptates eligendi minima totam error asperiores ullam aspernatur doloremque eaque quia perferendis quae quibusdam laborum assumenda! Nulla, tempora, eveniet, commodi, mollitia error aliquid quidem dolores provident iure veniam iste ea nemo. Velit, mollitia, commodi dignissimos odio alias nobis amet ad facilis iste ipsa ipsam quo nam quasi deleniti voluptates dolore reiciendis omnis praesentium sint veniam. Vel, modi, id, delectus, beatae odit voluptatibus voluptates facere excepturi aspernatur repellat tempora eum impedit quam laudantium reprehenderit laborum labore et esse dicta perspiciatis distinctio eaque incidunt eos iusto repudiandae recusandae ipsa aperiam. Iste, cumque, enim expedita voluptas sit illo ab cum quibusdam vitae similique aliquam quis laborum maiores. Itaque, soluta, nulla quia ullam dolores laborum magnam nisi alias autem eum corporis repellat facere. Harum, impedit facere fugit. Tempora veritatis eos quos fugit necessitatibus laborum temporibus labore ipsam aliquam dolores.</p>
        </div>
    </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/ochrana-osobnich-udaju.htm", "");
    }
}
