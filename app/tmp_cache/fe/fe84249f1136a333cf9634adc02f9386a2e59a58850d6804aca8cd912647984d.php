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

/* /components/index/lead_form-fix_bottom.twig */
class __TwigTemplate_a32e72f3cc0e19f4586e32727b3ebbb2fc58726d11780a6a60a8a9302d496c32 extends Template
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
<!-- d-block d-xl-none leadFormFixBottom_fix-->

<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


";
        // line 7
        $this->displayBlock('style', $context, $blocks);
        // line 78
        echo "

  <section id=\"form_fixBottom \" class=\"py-4 blue-gradient white-text\" >
      <div class=\"container-fluid\"> 
          <div class=\"row\"> 
              
              <div class=\"col-md-10 col-lg-4 text-center mx-auto offset-lg-2 \">
                  <form id=\"lead_form_fixBottom\" 
                        action=\"#\" method=\"post\"
                        class=\"form  p-3 transparent rounded white-text z-depth-1\">
                  
                            
                            <h4 class=\"text-center  mb-3\">Demander un devis </h4><br>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">
                                <i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                              </div>
                              <input type=\"text\" class=\"form-control\" 
                                placeholder=\"Votre nom au complet\" >
                            </div>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">
                                <i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                              </div>
                              <input type=\"text\" class=\"form-control\"
                                placeholder=\"Votre numéro de téléphone\" >
                            </div>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">
                                <i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                              </div>
                              <input type=\"text\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                            </div>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <label class=\"input-group-text\" for=\"inputGroupSelect55\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                              </div>
                              <select class=\"custom-select\" id=\"inputGroupSelect55\">
                                <option selected>Intervention souhaitée...</option>
                                <option value=\"1\">Greffe cheveux </option>
                                <option value=\"2\">Greffe barbe </option>
                                <option value=\"3\">Greffe sourcils</option>
                              </select>
                            </div>

                            <br>
                          <button 
                             
                              class=\" ml-4 rounded btn  blue-gradient\">
                              Envoyer
                          </button>
                  </form>
              </div>
              <div class=\"col-lg-6 \">

                    <div class=\"row \">

                      <div class=\"col-lg-8 col-offset-2 \">
                          <div class=\"menu-vertical list-group  z-depth-1\">
                            <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "\" class=\"list-group-item list-group-item-action\">Accueil</a>
                            <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-cheveux-Turquie\" class=\"list-group-item list-group-item-action\">Greffe Cheveux</a>
                            <a href=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-barbe\" class=\"list-group-item list-group-item-action\">Greffe Barbe</a>
                            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-sourcils\" class=\"list-group-item list-group-item-action\">Greffe Sourcils</a>
                            <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/qui-sommes-nous\" class=\"list-group-item list-group-item-action\">Qui sommes Nous</a>
                            <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/contact\" class=\"list-group-item list-group-item-action\">Contact</a>
                          </div>
                      </div>

                      <div class=\"col-lg-1\">
                      </div>

                      <div class=\"col-lg-12 \">

                        <ul class=\"isologo mt-5 list-group list-group-horizontal \">
     
                          <li class=\" list-group-item \">
                               <img src=\"https://drive.google.com/uc?export=view&id=1auOnQ9VGXH75JqzjrU5H5ScTDKDVOuHn\" alt=\"pdca badge\" />
                          </li>

                          <li class=\" list-group-item\">
                               <img src=\"https://drive.google.com/uc?export=view&id=1_gH8W_SWoMajIkV65aI4Xc0nVrrcuiYS\" alt=\"pdca badge\" />
                          </li>

                          <li class=\" list-group-item\">
                               <img src=\"https://drive.google.com/uc?export=view&id=1ceANC1ShtEeswmSFXkBxrsrATTq-Exor\" alt=\"pdca badge\" />
                          </li>

                          <li class=\" list-group-item\">
                               <img src=\"https://drive.google.com/uc?export=view&id=1NSGsIm5P6oKrTjkBEce7a809YIbqSIOF\" alt=\"pdca badge\" />
                          </li>

                        </ul>
                        
                      </div>
                    </div>
              </div>
             
          </div>
      </div>

  </section>
";
    }

    // line 7
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

        .menu-vertical  {
               
              padding:5px;
              background-color:transparent;
              border:0px solid grey;
              margin:10px;
              border-radius:5px;
          }

        .menu-vertical .list-group-item {
               
              padding:5px;
              background-color:transparent;
              color:rgba(255,255,255,.6);
              font-size:22px;
              border:0px solid grey;
              border-bottom: 1px solid grey;
              overflow:hidden;
              
          }

        .menu-vertical .list-group-item:hover {
               
              padding-left:5px;
              background-color:#26AAE4;
              color:white;
              border-bottom: 1px solid white;
            
          }

        .isologo  {
            display: flex;
            justify-content:start;
            flex-flow: row wrap;
          }

        .isologo .list-group-item {
            position: relative;
            display: block;
            padding:0;
            background-color:transparent;
            border: none;
            margin-right:10px;
            margin-bottom:10px;
         }

       
               
           .isologo .list-group-item img{
              width:130px;
              height:95px;
            }

            
    
          @media(max-width:900px){
          
             .isologo .list-group-item img{
              width:110px;
              height:75px;
            }
            
              }
       

      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/index/lead_form-fix_bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 7,  136 => 149,  132 => 148,  128 => 147,  124 => 146,  120 => 145,  116 => 144,  48 => 78,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- d-block d-xl-none leadFormFixBottom_fix-->

<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


{% block style %}   
      <style>

        .menu-vertical  {
               
              padding:5px;
              background-color:transparent;
              border:0px solid grey;
              margin:10px;
              border-radius:5px;
          }

        .menu-vertical .list-group-item {
               
              padding:5px;
              background-color:transparent;
              color:rgba(255,255,255,.6);
              font-size:22px;
              border:0px solid grey;
              border-bottom: 1px solid grey;
              overflow:hidden;
              
          }

        .menu-vertical .list-group-item:hover {
               
              padding-left:5px;
              background-color:#26AAE4;
              color:white;
              border-bottom: 1px solid white;
            
          }

        .isologo  {
            display: flex;
            justify-content:start;
            flex-flow: row wrap;
          }

        .isologo .list-group-item {
            position: relative;
            display: block;
            padding:0;
            background-color:transparent;
            border: none;
            margin-right:10px;
            margin-bottom:10px;
         }

       
               
           .isologo .list-group-item img{
              width:130px;
              height:95px;
            }

            
    
          @media(max-width:900px){
          
             .isologo .list-group-item img{
              width:110px;
              height:75px;
            }
            
              }
       

      </style>
 
{% endblock  %}


  <section id=\"form_fixBottom \" class=\"py-4 blue-gradient white-text\" >
      <div class=\"container-fluid\"> 
          <div class=\"row\"> 
              
              <div class=\"col-md-10 col-lg-4 text-center mx-auto offset-lg-2 \">
                  <form id=\"lead_form_fixBottom\" 
                        action=\"#\" method=\"post\"
                        class=\"form  p-3 transparent rounded white-text z-depth-1\">
                  
                            
                            <h4 class=\"text-center  mb-3\">Demander un devis </h4><br>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">
                                <i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                              </div>
                              <input type=\"text\" class=\"form-control\" 
                                placeholder=\"Votre nom au complet\" >
                            </div>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">
                                <i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                              </div>
                              <input type=\"text\" class=\"form-control\"
                                placeholder=\"Votre numéro de téléphone\" >
                            </div>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">
                                <i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                              </div>
                              <input type=\"text\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                            </div>

                            <div class=\"input-group mb-3\">
                              <div class=\"input-group-prepend\">
                                <label class=\"input-group-text\" for=\"inputGroupSelect55\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                              </div>
                              <select class=\"custom-select\" id=\"inputGroupSelect55\">
                                <option selected>Intervention souhaitée...</option>
                                <option value=\"1\">Greffe cheveux </option>
                                <option value=\"2\">Greffe barbe </option>
                                <option value=\"3\">Greffe sourcils</option>
                              </select>
                            </div>

                            <br>
                          <button 
                             
                              class=\" ml-4 rounded btn  blue-gradient\">
                              Envoyer
                          </button>
                  </form>
              </div>
              <div class=\"col-lg-6 \">

                    <div class=\"row \">

                      <div class=\"col-lg-8 col-offset-2 \">
                          <div class=\"menu-vertical list-group  z-depth-1\">
                            <a href=\"{{URLROOT}}\" class=\"list-group-item list-group-item-action\">Accueil</a>
                            <a href=\"{{URLROOT}}/greffe-cheveux-Turquie\" class=\"list-group-item list-group-item-action\">Greffe Cheveux</a>
                            <a href=\"{{URLROOT}}/greffe-barbe\" class=\"list-group-item list-group-item-action\">Greffe Barbe</a>
                            <a href=\"{{URLROOT}}/greffe-sourcils\" class=\"list-group-item list-group-item-action\">Greffe Sourcils</a>
                            <a href=\"{{URLROOT}}/qui-sommes-nous\" class=\"list-group-item list-group-item-action\">Qui sommes Nous</a>
                            <a href=\"{{URLROOT}}/contact\" class=\"list-group-item list-group-item-action\">Contact</a>
                          </div>
                      </div>

                      <div class=\"col-lg-1\">
                      </div>

                      <div class=\"col-lg-12 \">

                        <ul class=\"isologo mt-5 list-group list-group-horizontal \">
     
                          <li class=\" list-group-item \">
                               <img src=\"https://drive.google.com/uc?export=view&id=1auOnQ9VGXH75JqzjrU5H5ScTDKDVOuHn\" alt=\"pdca badge\" />
                          </li>

                          <li class=\" list-group-item\">
                               <img src=\"https://drive.google.com/uc?export=view&id=1_gH8W_SWoMajIkV65aI4Xc0nVrrcuiYS\" alt=\"pdca badge\" />
                          </li>

                          <li class=\" list-group-item\">
                               <img src=\"https://drive.google.com/uc?export=view&id=1ceANC1ShtEeswmSFXkBxrsrATTq-Exor\" alt=\"pdca badge\" />
                          </li>

                          <li class=\" list-group-item\">
                               <img src=\"https://drive.google.com/uc?export=view&id=1NSGsIm5P6oKrTjkBEce7a809YIbqSIOF\" alt=\"pdca badge\" />
                          </li>

                        </ul>
                        
                      </div>
                    </div>
              </div>
             
          </div>
      </div>

  </section>
", "/components/index/lead_form-fix_bottom.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/lead_form-fix_bottom.twig");
    }
}
