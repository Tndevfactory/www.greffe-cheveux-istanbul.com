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

/* /components/index/home_text_outro.twig */
class __TwigTemplate_84f61b73d7b0d751c2ff81bc071d682de29385581f26247850b01afd67775bb6 extends Template
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
        echo " ";
        $this->displayBlock('style', $context, $blocks);
        // line 41
        echo "
<!--home_icon_section  -->
  <section  id=\"text-outro\" class=\"pb-3\">
    <div class=\"container \" data-aos=\"zoom-in\">
        
        <p> Pour traiter la calvitie naissante, totale, nous utilisons la technique DHI qui est la technique de greffe de cheveux la plus en pointe en 2020. Les transplantations capillaires peuvent être également réalisées avec d’autres techniques de greffe de cheveux comme la greffe FUE.</p>
    </div>
    
  </section>";
    }

    // line 1
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
       #text-outro h2{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
              margin-top:15px;
                                      
            }

       #text-outro p{
              font-size:22px;
                                      
            }


      @media(max-width:900px){
          
             #text-outro h1{
                  font-size:25px;
                  
                }

             #text-outro h2{
                  font-size:20px;
                }

             #text-outro h3{
                  font-size:18px;
                }

             #text-outro p{
                  font-size:16px;
                }
              }
      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/index/home_text_outro.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  41 => 41,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% block style %}   
      <style>

     
       #text-outro h2{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
              margin-top:15px;
                                      
            }

       #text-outro p{
              font-size:22px;
                                      
            }


      @media(max-width:900px){
          
             #text-outro h1{
                  font-size:25px;
                  
                }

             #text-outro h2{
                  font-size:20px;
                }

             #text-outro h3{
                  font-size:18px;
                }

             #text-outro p{
                  font-size:16px;
                }
              }
      </style>
 
{% endblock  %}

<!--home_icon_section  -->
  <section  id=\"text-outro\" class=\"pb-3\">
    <div class=\"container \" data-aos=\"zoom-in\">
        
        <p> Pour traiter la calvitie naissante, totale, nous utilisons la technique DHI qui est la technique de greffe de cheveux la plus en pointe en 2020. Les transplantations capillaires peuvent être également réalisées avec d’autres techniques de greffe de cheveux comme la greffe FUE.</p>
    </div>
    
  </section>", "/components/index/home_text_outro.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/home_text_outro.twig");
    }
}
