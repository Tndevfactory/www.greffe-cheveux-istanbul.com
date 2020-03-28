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
class __TwigTemplate_0fb0656141a7e3395b24d34ab10abed56a2bc8248fce80fcaebd7f6481339c59 extends Template
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
        echo "<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


<footer  class=\"footer cloudy-knoxville-gradient mt-auto  py-4 black-text font-small \">
 
         <div class=\"footer-copyright text-center py-2 white-text\">
\t\t\t <span class=\"text-muted\"> Copyright &copy; 
\t\t\t <span id=\"year\"> </span> 
\t\t\t <span class=\"text-muted\" > <a  class=\"text-muted\" href=\"https://tndevfactory.com\">  Tn DEV FACTORY </a> </span>
\t\t\t</span>
\t\t</div>
        
        
  </div>

 <div class=\"mt-1 text-center \">
        
          <a href=\"#\" >   <span class=\"  pl-2 black-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 black-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 black-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 black-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
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
        return new Source("<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


<footer  class=\"footer cloudy-knoxville-gradient mt-auto  py-4 black-text font-small \">
 
         <div class=\"footer-copyright text-center py-2 white-text\">
\t\t\t <span class=\"text-muted\"> Copyright &copy; 
\t\t\t <span id=\"year\"> </span> 
\t\t\t <span class=\"text-muted\" > <a  class=\"text-muted\" href=\"https://tndevfactory.com\">  Tn DEV FACTORY </a> </span>
\t\t\t</span>
\t\t</div>
        
        
  </div>

 <div class=\"mt-1 text-center \">
        
          <a href=\"#\" >   <span class=\"  pl-2 black-text\"> <i class=\" fab fa-facebook-square fa-1x\"></i></span> </a>
          <a href=\"#\" >   <span class=\"  pl-2 black-text\"><i class=\" fab fa-instagram fa-1x\"></i> </span> </a>
           <a href=\"#\" >  <span class=\"  pl-2 black-text\"><i class=\" fab fa-youtube fa-1x\"></i> </span> </a>
            <a href=\"#\" > <span class=\"  pl-2 black-text\"><i class=\" fab fa-snapchat-square fa-1x\"></i>    </span></a>
        </div>

</footer>






 ", "./inc/footer.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/footer.html.twig");
    }
}
