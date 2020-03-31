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

/* /components/index/home_heading_section.twig */
class __TwigTemplate_82063564d8a1bb6e294916c6e3b6372ad03f087d5f4fa795e24c9d4cc2c3cfa0 extends Template
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
        echo "<!-- home_heading_section -->
";
        // line 2
        $this->displayBlock('style', $context, $blocks);
        // line 80
        echo "


  <section id=\"home-heading\" class=\"pt-5 pb-0\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container \"  data-aos=\"zoom-in\">
            <h1 class=\"pt-3 \"> Nous sommes fiers d’apporter à nos patients différentes solutions pour traiter leur calvitie ou leur chute de cheveux.</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class=\"d-none d-xl-block\">
      <svg viewBox=\"0 0 1440 319\">
        <path fill=\"white\" fill-opacity=\"1\" d=\"M 0,32 48,80 C 96,128 192,224 288,224 384,224 480,128 576,90.7 672,53 768,75 864,96 c 96,21 192,43 288,53.3 96,10.7 192,10.7 240,10.7 h 48 v 160 h -48 c -48,0 -144,0 -240,0 -96,0 -192,0 -288,0 -96,0 -192,0 -288,0 -96,0 -192,0 -288,0 -96,0 -192,0 -240,0 H 0 Z\"></path>
      </svg>
    </div>

  </section>
    ";
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>
     
        #home-heading h1{
              font-weight:600;
              color:white;
              font-size:38px;
              
                                      
            }

        #home-heading  {
          position: relative;
          min-height: 400px;
          width: 100%;

          text-align: center;
          color: #fff;
          background-image:url(https://drive.google.com/uc?export=view&id=1_7XlapZmdvmloWFxjIqgTtZq61iG_BUF); 
         
          /* ../img/home_heading_section/lights.jpg */

          background-attachment: fixed;
          background-position: 0px -400px;
          background-repeat: no-repeat;
          
        }

       #home-heading .dark-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 155, .4);
        }


      svg {
        
        height: 50%;
        width: 100%;
        z-index:5;
        top: 45px;
        transform:scale(1);
        
          margin: auto;
          position:relative;
      
      }

        @media(max-width:900px){

            #home-heading  {
                        
                        max-height: 200px;
                    }

            
                #home-heading h1{
                    font-size:30px;
                    
                    
                  }

                #home-headingp{
                    font-size:23px;
                  }

                  #home-heading  {
         
                  min-height:200px;
                  }
          }
          
       </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/index/home_heading_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 2,  43 => 80,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- home_heading_section -->
{% block style %}   
      <style>
     
        #home-heading h1{
              font-weight:600;
              color:white;
              font-size:38px;
              
                                      
            }

        #home-heading  {
          position: relative;
          min-height: 400px;
          width: 100%;

          text-align: center;
          color: #fff;
          background-image:url(https://drive.google.com/uc?export=view&id=1_7XlapZmdvmloWFxjIqgTtZq61iG_BUF); 
         
          /* ../img/home_heading_section/lights.jpg */

          background-attachment: fixed;
          background-position: 0px -400px;
          background-repeat: no-repeat;
          
        }

       #home-heading .dark-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 155, .4);
        }


      svg {
        
        height: 50%;
        width: 100%;
        z-index:5;
        top: 45px;
        transform:scale(1);
        
          margin: auto;
          position:relative;
      
      }

        @media(max-width:900px){

            #home-heading  {
                        
                        max-height: 200px;
                    }

            
                #home-heading h1{
                    font-size:30px;
                    
                    
                  }

                #home-headingp{
                    font-size:23px;
                  }

                  #home-heading  {
         
                  min-height:200px;
                  }
          }
          
       </style>
 
{% endblock  %}



  <section id=\"home-heading\" class=\"pt-5 pb-0\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container \"  data-aos=\"zoom-in\">
            <h1 class=\"pt-3 \"> Nous sommes fiers d’apporter à nos patients différentes solutions pour traiter leur calvitie ou leur chute de cheveux.</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class=\"d-none d-xl-block\">
      <svg viewBox=\"0 0 1440 319\">
        <path fill=\"white\" fill-opacity=\"1\" d=\"M 0,32 48,80 C 96,128 192,224 288,224 384,224 480,128 576,90.7 672,53 768,75 864,96 c 96,21 192,43 288,53.3 96,10.7 192,10.7 240,10.7 h 48 v 160 h -48 c -48,0 -144,0 -240,0 -96,0 -192,0 -288,0 -96,0 -192,0 -288,0 -96,0 -192,0 -288,0 -96,0 -192,0 -240,0 H 0 Z\"></path>
      </svg>
    </div>

  </section>
    ", "/components/index/home_heading_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/home_heading_section.twig");
    }
}
