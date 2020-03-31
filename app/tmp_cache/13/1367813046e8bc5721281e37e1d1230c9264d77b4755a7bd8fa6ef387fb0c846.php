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

/* /components/index/home_text_intro.twig */
class __TwigTemplate_b0c573518b9cf36bb93e1e093d48200647b3d754dac74385aec9c9fa951a8185 extends Template
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
        // line 48
        echo "
<!--home_icon_section  -->
  <section  id=\"text-intro\" class=\"py-3\">
    <div class=\"container \" data-aos=\"zoom-in\">
        <h2> Greffe cheveux pas cher Istanbul</h2>
        <h3 > Implants capillaires pas cher Istanbul</h3>
        <p>Hair Experts est spécialisé dans la greffe de cheveux à Istanbul en Turquie, nous vous proposons des greffes de cheveux à Istanbul à des prix préférentiels.</p>
    </div>
    
  </section>";
    }

    // line 1
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
       #text-intro h2{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
              margin-top:15px;
                                      
            }

             #text-intro h3{
                  font-weight:600;
                  color:#00C3E4;
                  font-size:27px;
                }

       #text-intro p{
              font-size:22px;
              padding-left:10px;
                                      
            }


      @media(max-width:900px){
          
             #text-intro h1{
                  font-size:25px;
                  
                }

             #text-intro h2{
                  font-size:20px;
                }

             #text-intro h3{
                  font-size:18px;
                }

             #text-intro p{
                  font-size:16px;
                }
              }
      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/index/home_text_intro.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 1,  41 => 48,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% block style %}   
      <style>

     
       #text-intro h2{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
              margin-top:15px;
                                      
            }

             #text-intro h3{
                  font-weight:600;
                  color:#00C3E4;
                  font-size:27px;
                }

       #text-intro p{
              font-size:22px;
              padding-left:10px;
                                      
            }


      @media(max-width:900px){
          
             #text-intro h1{
                  font-size:25px;
                  
                }

             #text-intro h2{
                  font-size:20px;
                }

             #text-intro h3{
                  font-size:18px;
                }

             #text-intro p{
                  font-size:16px;
                }
              }
      </style>
 
{% endblock  %}

<!--home_icon_section  -->
  <section  id=\"text-intro\" class=\"py-3\">
    <div class=\"container \" data-aos=\"zoom-in\">
        <h2> Greffe cheveux pas cher Istanbul</h2>
        <h3 > Implants capillaires pas cher Istanbul</h3>
        <p>Hair Experts est spécialisé dans la greffe de cheveux à Istanbul en Turquie, nous vous proposons des greffes de cheveux à Istanbul à des prix préférentiels.</p>
    </div>
    
  </section>", "/components/index/home_text_intro.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/home_text_intro.twig");
    }
}
