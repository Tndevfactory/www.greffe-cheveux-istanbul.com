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

/* /inc/navbar.html.twig */
class __TwigTemplate_1302b12088e72d6d8457f7c398637c1511b985c6ffef07cb50fa2c4b5a87f118 extends Template
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
        // line 4
        $this->displayBlock('style', $context, $blocks);
        // line 62
        echo "

<nav id=\"greffeNav\" class=\"navbar navbar-expand-lg navbar-light py-0 cloudy-knoxville-gradient sticky-top \">

            <a class=\"navbar-brand pl-3 py-3\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes\"> <div id=\"health_expert_logo\"> <!-- /public/img/logo/health_expert_logo.png  -->
           
               <div class=\"pl-5 ml-1 pt-3 text-capitalize h4 \" > Hair Experts </div> </div>
            </a>
        
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">

                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "\">Accueil</a>
                </li>

                <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-cheveux-Turquie\">Greffe Cheveux </a>
                </li>

                <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-barbe\">Greffe Barbe </a>
                </li>


                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-sourcils\">Greffe Sourcils </a>
                </li>

                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/qui-sommes-nous\">Qui Sommes Nous </a>
                </li> 
                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/contact\">Contact </a>
                </li>

                ";
        // line 112
        echo "
            </div>
        


</nav>





 
  
";
    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

      

      @media(max-width:900px){
      
          #barbe h1{
              font-size:25px;
              
            }

          #barbe h2{
              font-size:20px;
            }

          #barbe h3{
              font-size:18px;
            }

          #barbe p{
              font-size:16px;
            }
          }
          
       #greffeNav #health_expert_logo {
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=1JHYrI8DUkyAU7PHO7QLhZxzrZq7QMzIS); 
          height: 60px;
          width:60px;
          /*width:100%;*/
         background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: transparent;

          

          
          
        }

       /*#greffeNav #barbeOverlay{
           position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.4);

        }*/
        


      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 4,  111 => 112,  105 => 102,  98 => 98,  90 => 93,  82 => 88,  75 => 84,  68 => 80,  51 => 66,  45 => 62,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


 {% block style %}   
      <style>

      

      @media(max-width:900px){
      
          #barbe h1{
              font-size:25px;
              
            }

          #barbe h2{
              font-size:20px;
            }

          #barbe h3{
              font-size:18px;
            }

          #barbe p{
              font-size:16px;
            }
          }
          
       #greffeNav #health_expert_logo {
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=1JHYrI8DUkyAU7PHO7QLhZxzrZq7QMzIS); 
          height: 60px;
          width:60px;
          /*width:100%;*/
         background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: transparent;

          

          
          
        }

       /*#greffeNav #barbeOverlay{
           position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.4);

        }*/
        


      </style>
 
{% endblock  %}


<nav id=\"greffeNav\" class=\"navbar navbar-expand-lg navbar-light py-0 cloudy-knoxville-gradient sticky-top \">

            <a class=\"navbar-brand pl-3 py-3\" href=\"{{URLROOT}}/homes\"> <div id=\"health_expert_logo\"> <!-- /public/img/logo/health_expert_logo.png  -->
           
               <div class=\"pl-5 ml-1 pt-3 text-capitalize h4 \" > Hair Experts </div> </div>
            </a>
        
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">

                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"{{URLROOT}}\">Accueil</a>
                </li>

                <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{URLROOT}}/greffe-cheveux-Turquie\">Greffe Cheveux </a>
                </li>

                <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"{{URLROOT}}/greffe-barbe\">Greffe Barbe </a>
                </li>


                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/greffe-sourcils\">Greffe Sourcils </a>
                </li>

                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/qui-sommes-nous\">Qui Sommes Nous </a>
                </li> 
                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/contact\">Contact </a>
                </li>

                {# <li class=\"nav-item d-flex\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/ar\">arabic </a>
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/fr\">french </a>
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/en\">english</a>
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/en\">{{lang}}----</a>
                  
                </li> #}

            </div>
        


</nav>





 
  
", "/inc/navbar.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/navbar.html.twig");
    }
}
