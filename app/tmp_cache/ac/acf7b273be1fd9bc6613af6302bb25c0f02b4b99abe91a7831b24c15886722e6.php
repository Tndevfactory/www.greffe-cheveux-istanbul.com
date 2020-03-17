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

/* ./inc/footer.html.twig */
class __TwigTemplate_97975b195d96a22b2f9387c4b48442b62046cdaee6b3d66f97498f8a30da9bb3 extends Template
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
        echo "<!-- Footer -->
<style>
   .spacer {
      height:100px;
      
   }
    
 </style>

<div class=\"spacer\"></div>

<footer style=\"background-color:#1A5EA4\" class=\"footer fixed-bottom mt-auto  py-3 white-text font-small \">
 
  <div class=\"footer-copyright text-center py-4 white-text\">
         <span> Copyright &copy; <span id=\"year\"></span> Health Experts </span>
  </div>
 

</footer>






 ";
    }

    public function getTemplateName()
    {
        return "./inc/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<style>
   .spacer {
      height:100px;
      
   }
    
 </style>

<div class=\"spacer\"></div>

<footer style=\"background-color:#1A5EA4\" class=\"footer fixed-bottom mt-auto  py-3 white-text font-small \">
 
  <div class=\"footer-copyright text-center py-4 white-text\">
         <span> Copyright &copy; <span id=\"year\"></span> Health Experts </span>
  </div>
 

</footer>






 ", "./inc/footer.html.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/inc/footer.html.twig");
    }
}
