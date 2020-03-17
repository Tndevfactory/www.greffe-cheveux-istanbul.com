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
class __TwigTemplate_2f865d24cd5fcf0739c300686da85ff2d8e586e92ebab3995c5c904f1ea39e18 extends Template
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
         <span> Copyright &copy; <span id=\"year\">
         </span> Hair Experts </span>
        
        <div class=\"mt-3\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-2x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-2x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-2x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-2x\"></i>    </span></a>
        </div>

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
         <span> Copyright &copy; <span id=\"year\">
         </span> Hair Experts </span>
        
        <div class=\"mt-3\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-2x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-2x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-2x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-2x\"></i>    </span></a>
        </div>

  </div>
 

</footer>






 ", "./inc/footer.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\inc\\footer.html.twig");
    }
}
