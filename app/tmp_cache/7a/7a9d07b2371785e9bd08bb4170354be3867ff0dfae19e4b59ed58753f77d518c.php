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

/* /components/section_processus.twig */
class __TwigTemplate_6d16a9acfdecde7da565914da0c1938c98136d9603c217adcddf99154fedd65b extends Template
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
        echo "<!-- section process -->

<style>
  
    
 </style>

<div class=\"spacer\"></div>
<footer style=\"background-color:#1A5EA4\" class=\"footer fixed-bottom mt-auto  py-3 white-text font-small \">

 
  <div class=\"footer-copyright text-center py-4 white-text\">
  
      <div id=\"year\">©  Copyright Health Expert</div> 
   
  </div>
 

</footer>


 <script>
    // Get the current year for the copyright
   
 </script>
";
    }

    public function getTemplateName()
    {
        return "/components/section_processus.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- section process -->

<style>
  
    
 </style>

<div class=\"spacer\"></div>
<footer style=\"background-color:#1A5EA4\" class=\"footer fixed-bottom mt-auto  py-3 white-text font-small \">

 
  <div class=\"footer-copyright text-center py-4 white-text\">
  
      <div id=\"year\">©  Copyright Health Expert</div> 
   
  </div>
 

</footer>


 <script>
    // Get the current year for the copyright
   
 </script>
", "/components/section_processus.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\components\\section_processus.twig");
    }
}
