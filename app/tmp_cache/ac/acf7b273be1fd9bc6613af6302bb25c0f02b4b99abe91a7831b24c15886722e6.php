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
        echo "<!-- Footer  fixed-bottom-->


<footer style=\"background-color:#1A5EA4\" class=\"footer  mt-auto  py-4 white-text font-small \">
 
         <div class=\"footer-copyright text-center py-2 white-text\">
\t\t\t <span class=\"text-muted\"> Copyright &copy; 
\t\t\t <span id=\"year\"> </span> 
\t\t\t <span class=\"text-muted\" > <a  class=\"text-muted\" href=\"https://tndevfactory.com\">  Tn DEV FACTORY </a> </span>
\t\t\t</span>
\t\t</div>
        
        
  </div>

 <div class=\"mt-1 text-center\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
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
        return new Source("<!-- Footer  fixed-bottom-->


<footer style=\"background-color:#1A5EA4\" class=\"footer  mt-auto  py-4 white-text font-small \">
 
         <div class=\"footer-copyright text-center py-2 white-text\">
\t\t\t <span class=\"text-muted\"> Copyright &copy; 
\t\t\t <span id=\"year\"> </span> 
\t\t\t <span class=\"text-muted\" > <a  class=\"text-muted\" href=\"https://tndevfactory.com\">  Tn DEV FACTORY </a> </span>
\t\t\t</span>
\t\t</div>
        
        
  </div>

 <div class=\"mt-1 text-center\">
        
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 white-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 white-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 white-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
        </div>

</footer>






 ", "./inc/footer.html.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/inc/footer.html.twig");
    }
}
