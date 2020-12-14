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

/* C:\wamp64\www\techno-vyskov/themes/bs-laravel-webpack/pages/obchodni-podminky.htm */
class __TwigTemplate_4a8e678662f8937f24f8ffa625c30caec47e5c9c33aee78109b4acf29a1cb3f3 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Obchodní podmínky"]);
        echo "</h1>
        </div>   
    </div>
    <div class=\"row\">
        <div class=\"col\">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, ducimus, dicta quidem similique dolor provident eligendi ullam itaque dolore placeat! Iste, nesciunt, quaerat, reprehenderit quia molestias iure odio suscipit quod enim esse ratione dolorem magni quisquam! Dolorem, ut, excepturi, id doloremque quae cupiditate quasi voluptatem vel veniam distinctio delectus assumenda magni quia quidem similique sint porro aliquam! Cupiditate, ducimus nisi assumenda eum at voluptatibus nesciunt placeat facilis ipsam harum odio sunt illo hic distinctio sed? Velit, ducimus, quae, quasi, ullam mollitia voluptatum odit veniam accusantium fugiat temporibus ea facilis consectetur quo! Corporis, voluptates non inventore eos quaerat consequuntur sint ex.</p>
        </div>
    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/obchodni-podminky.htm";
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
            <h1>{{ 'Obchodní podmínky' |_}}</h1>
        </div>   
    </div>
    <div class=\"row\">
        <div class=\"col\">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, ducimus, dicta quidem similique dolor provident eligendi ullam itaque dolore placeat! Iste, nesciunt, quaerat, reprehenderit quia molestias iure odio suscipit quod enim esse ratione dolorem magni quisquam! Dolorem, ut, excepturi, id doloremque quae cupiditate quasi voluptatem vel veniam distinctio delectus assumenda magni quia quidem similique sint porro aliquam! Cupiditate, ducimus nisi assumenda eum at voluptatibus nesciunt placeat facilis ipsam harum odio sunt illo hic distinctio sed? Velit, ducimus, quae, quasi, ullam mollitia voluptatum odit veniam accusantium fugiat temporibus ea facilis consectetur quo! Corporis, voluptates non inventore eos quaerat consequuntur sint ex.</p>
        </div>
    </div>
    </div>
</div>", "C:\\wamp64\\www\\techno-vyskov/themes/bs-laravel-webpack/pages/obchodni-podminky.htm", "");
    }
}
