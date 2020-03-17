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

/* /include/header.html.twig */
class __TwigTemplate_9dc12692672b65278117fa68954e82533ab18f13f4c2d990552b8bd5d16525d9 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

<div class=\"jumbotron py-3 mb-0 grey\">
    <h3> Tn Dev Factory   <i class=\" fa fa-phone-alt \"> </i> 55 444 356  </h3> 
</div>";
    }

    public function getTemplateName()
    {
        return "/include/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"jumbotron py-3 mb-0 grey\">
    <h3> Tn Dev Factory   <i class=\" fa fa-phone-alt \"> </i> 55 444 356  </h3> 
</div>", "/include/header.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\include\\header.html.twig");
    }
}
