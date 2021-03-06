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

/* /components/index/home_icon_section.twig */
class __TwigTemplate_171836c0475ca347a75efb3cff45d57345d03a67c5dc0d174a30be08f6d7c4ba extends Template
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
        echo "
";
        // line 2
        $this->displayBlock('style', $context, $blocks);
        // line 67
        echo "
<!--home_icon_section  -->
  <section  id=\"home-icons\" class=\" py-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-md-4 mb-4 text-center\" data-aos=\"zoom-in-right\">
        
           <img src=\"https://drive.google.com/uc?export=view&id=1AIvgzdWVb38b36JmJGaZ-rZlwd1qzEVK\" alt=\"\" class=\"img-fluid\">
           
          <h3 style=\"padding-top:19px\">Techniques de pointe</h3>
          <p>La technique de greffe DHI est rapide, efficace, sans cicatrices</p>
        </div>
       
        <div class=\"col-md-4 mb-4 text-center\" data-aos=\"zoom-in\">
     
           <img src=\"https://drive.google.com/uc?export=view&id=1KcXpo0NmwbNkHVCnt_9QrfJAXON2QMzl\" alt=\"\" class=\"img-fluid\">
           
          <h3>Jusqu'à 70% moins cher</h3>
          <p>Votre greffe de cheveux abordable pour un résultat parfait</p>
        </div>
       
         <div class=\"col-md-4 mb-4 text-center\" data-aos=\"zoom-in-left\">
         <img src=\"https://drive.google.com/uc?export=view&id=1OCnnigBgP6VXurpns0UU96OromjZzTr3\" alt=\"\" class=\"img-fluid\">
           
          <h3>Séjour 100% tout compris</h3>
          <p>Hair Experts assure votre prise en charge en Turquie de A à Z</p>
        </div>
      </div>
    </div>
  </section>";
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
        #home-icons h1{
              font-weight:600;
              color:rgb(0,128,128);
              font-size:33px;
                                      
            }

          #home-icons h2{
              font-weight:600;
              color:rgb(0,139,139);
              font-size:28px;
            }

          #home-icons h3{
              font-weight:600;
              color:#0099cc;
              font-size:23px;
             padding-top:5px;
            }

          #home-icons p{
                color:#010203;
               font-size:22px;
            }

           #home-icons .col-md-4:hover{
              box-shadow: 5px 5px rgba(0, 98, 90, 0.4),-5px -5px rgba(0, 98, 90, 0.4);
                border: 2px solid #0099cc;       
             }


     

      @media(max-width:900px){
      
          #home-icons h1{
              font-size:25px;
              
            }

          #home-icons h2{
              font-size:20px;
            }

          #home-icons h3{
              font-size:18px;
            }

          #home-icons p{
              font-size:16px;
            }
          }
          

     
        


      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/index/home_icon_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 2,  43 => 67,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block style %}   
      <style>

     
        #home-icons h1{
              font-weight:600;
              color:rgb(0,128,128);
              font-size:33px;
                                      
            }

          #home-icons h2{
              font-weight:600;
              color:rgb(0,139,139);
              font-size:28px;
            }

          #home-icons h3{
              font-weight:600;
              color:#0099cc;
              font-size:23px;
             padding-top:5px;
            }

          #home-icons p{
                color:#010203;
               font-size:22px;
            }

           #home-icons .col-md-4:hover{
              box-shadow: 5px 5px rgba(0, 98, 90, 0.4),-5px -5px rgba(0, 98, 90, 0.4);
                border: 2px solid #0099cc;       
             }


     

      @media(max-width:900px){
      
          #home-icons h1{
              font-size:25px;
              
            }

          #home-icons h2{
              font-size:20px;
            }

          #home-icons h3{
              font-size:18px;
            }

          #home-icons p{
              font-size:16px;
            }
          }
          

     
        


      </style>
 
{% endblock  %}

<!--home_icon_section  -->
  <section  id=\"home-icons\" class=\" py-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-md-4 mb-4 text-center\" data-aos=\"zoom-in-right\">
        
           <img src=\"https://drive.google.com/uc?export=view&id=1AIvgzdWVb38b36JmJGaZ-rZlwd1qzEVK\" alt=\"\" class=\"img-fluid\">
           
          <h3 style=\"padding-top:19px\">Techniques de pointe</h3>
          <p>La technique de greffe DHI est rapide, efficace, sans cicatrices</p>
        </div>
       
        <div class=\"col-md-4 mb-4 text-center\" data-aos=\"zoom-in\">
     
           <img src=\"https://drive.google.com/uc?export=view&id=1KcXpo0NmwbNkHVCnt_9QrfJAXON2QMzl\" alt=\"\" class=\"img-fluid\">
           
          <h3>Jusqu'à 70% moins cher</h3>
          <p>Votre greffe de cheveux abordable pour un résultat parfait</p>
        </div>
       
         <div class=\"col-md-4 mb-4 text-center\" data-aos=\"zoom-in-left\">
         <img src=\"https://drive.google.com/uc?export=view&id=1OCnnigBgP6VXurpns0UU96OromjZzTr3\" alt=\"\" class=\"img-fluid\">
           
          <h3>Séjour 100% tout compris</h3>
          <p>Hair Experts assure votre prise en charge en Turquie de A à Z</p>
        </div>
      </div>
    </div>
  </section>", "/components/index/home_icon_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/home_icon_section.twig");
    }
}
