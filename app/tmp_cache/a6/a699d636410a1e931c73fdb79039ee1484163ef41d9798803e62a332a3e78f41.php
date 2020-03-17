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

/* /inc/header.html.twig */
class __TwigTemplate_a6514c61c8c505ce38f340c7cffad46c265b1ed335deb7d73af80662ee68c710 extends Template
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

<div style=\"background-color:#1A5EA4\" class=\"jumbotron py-4 mb-0 \">
<div class=\"row\">
<i class=\"\"></i>

             <span  class=\"h3 px-3 white-text text-uppercase \"> Call health Experts </span > 
             <span> <i class=\"animated tada infinite green-text fas fa-phone-volume fa-2x  \"> </i> </span>
             <span class=\" h3 pl-2 white-text\"> 00216 55 444 356 </span> 
 
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/inc/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div style=\"background-color:#1A5EA4\" class=\"jumbotron py-4 mb-0 \">
<div class=\"row\">
<i class=\"\"></i>

             <span  class=\"h3 px-3 white-text text-uppercase \"> Call health Experts </span > 
             <span> <i class=\"animated tada infinite green-text fas fa-phone-volume fa-2x  \"> </i> </span>
             <span class=\" h3 pl-2 white-text\"> 00216 55 444 356 </span> 
 
</div>
</div>", "/inc/header.html.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/inc/header.html.twig");
    }
}
