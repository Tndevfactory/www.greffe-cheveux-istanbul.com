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
            'style' => [$this, 'block_style'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


";
        // line 4
        $this->displayBlock('style', $context, $blocks);
        // line 62
        echo "
<footer id=\"footer\" class=\"footer cloudy-knoxville-gradient mt-auto  py-4 font-small \">
 
         <div class=\"footer-copyright text-center py-2 \">
\t\t\t <span class=\"text-muted\"> Copyright &copy; 
\t\t\t <span id=\"year\"> </span> 
\t\t\t <a  class=\"text-muted\" href=\"https://tndevfactory.com\"> <span></span> </a> 
            <img src=\"https://drive.google.com/uc?export=view&id=1DhjvrLhnSlWpk70LjNsZ8YeKxUd5pHgR\" alt=\"pdca badge\" />
\t\t\t
\t\t</div>
       
        
      <ul class=\"social_icons mt-1 text-center list-group list-group-horizontal d-flex justify-content-center \">
     
        <li class=\" list-group-item \">
            <a href=\"#\" style=\"width:35px;background:#355A96\" title=\"facebook\" class=\"btn  rounded p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-facebook-f \"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\" style=\"width:35px;background:#EB2464\" title=\"instagram\" class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-instagram \"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\" style=\"width:35px;background:#46ADEC\" title=\"twitter\"class=\"btn rounded p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-twitter\"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\"style=\"width:35px;background:#F34D22\" title=\"google-plus\"class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-google-plus-g\"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\" style=\"width:35px;background:#F8F434;color:black\" title=\"snapchat\" class=\"btn rounded  p-2 border-0  z-depth-1 waves-effect\"><i style=\"color:black\" class=\"fab fa-snapchat \"></i></a>
        </li>

        </ul>

        


</footer>






 ";
    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     #footer  .footer-copyright  img {
              margin-left:5px;
              margin-top:-3px;
              display:inline-block;
                                      
            }

     #footer  a > span {
             font-size:18px;
             color:#26B8EE;
             font-style: italic;
             font-weight:700;
             font-family: Arial, Helvetica, sans-serif;
                                      
            }

     #footer  a > span:hover {
            padding-left:3px;
            border-bottom:1px solid black;                       
            }
       

        #footer  .social_icons li  {
             border:none;
             padding:0;
                                      
            }

        

        #footer  .social_icons li:hover  {
             border-bottom:1px solid black;
             padding-left:3px;
             
                                      
            }



     

      @media(max-width:900px){
      
          #footer h1{
              font-size:25px;
              
            }

         
          }
       

      </style>
 
";
    }

    public function getTemplateName()
    {
        return "./inc/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 4,  45 => 62,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


{% block style %}   
      <style>

     #footer  .footer-copyright  img {
              margin-left:5px;
              margin-top:-3px;
              display:inline-block;
                                      
            }

     #footer  a > span {
             font-size:18px;
             color:#26B8EE;
             font-style: italic;
             font-weight:700;
             font-family: Arial, Helvetica, sans-serif;
                                      
            }

     #footer  a > span:hover {
            padding-left:3px;
            border-bottom:1px solid black;                       
            }
       

        #footer  .social_icons li  {
             border:none;
             padding:0;
                                      
            }

        

        #footer  .social_icons li:hover  {
             border-bottom:1px solid black;
             padding-left:3px;
             
                                      
            }



     

      @media(max-width:900px){
      
          #footer h1{
              font-size:25px;
              
            }

         
          }
       

      </style>
 
{% endblock  %}

<footer id=\"footer\" class=\"footer cloudy-knoxville-gradient mt-auto  py-4 font-small \">
 
         <div class=\"footer-copyright text-center py-2 \">
\t\t\t <span class=\"text-muted\"> Copyright &copy; 
\t\t\t <span id=\"year\"> </span> 
\t\t\t <a  class=\"text-muted\" href=\"https://tndevfactory.com\"> <span></span> </a> 
            <img src=\"https://drive.google.com/uc?export=view&id=1DhjvrLhnSlWpk70LjNsZ8YeKxUd5pHgR\" alt=\"pdca badge\" />
\t\t\t
\t\t</div>
       
        
      <ul class=\"social_icons mt-1 text-center list-group list-group-horizontal d-flex justify-content-center \">
     
        <li class=\" list-group-item \">
            <a href=\"#\" style=\"width:35px;background:#355A96\" title=\"facebook\" class=\"btn  rounded p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-facebook-f \"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\" style=\"width:35px;background:#EB2464\" title=\"instagram\" class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-instagram \"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\" style=\"width:35px;background:#46ADEC\" title=\"twitter\"class=\"btn rounded p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-twitter\"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\"style=\"width:35px;background:#F34D22\" title=\"google-plus\"class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
            <i class=\"white-text fab fa-google-plus-g\"></i></a>
        </li>

        <li class=\" list-group-item\">
            <a href=\"#\" style=\"width:35px;background:#F8F434;color:black\" title=\"snapchat\" class=\"btn rounded  p-2 border-0  z-depth-1 waves-effect\"><i style=\"color:black\" class=\"fab fa-snapchat \"></i></a>
        </li>

        </ul>

        


</footer>






 ", "./inc/footer.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/footer.html.twig");
    }
}
