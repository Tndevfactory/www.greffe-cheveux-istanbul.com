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

/* /components/contact/contact_section.twig */
class __TwigTemplate_fb42d068db6f39a3dbd4691e8b56bda79fa35ea70d7c19432f501163066d7ab9 extends Template
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
        echo "<!-- CONTACT SECTION -->


 

 ";
        // line 6
        $this->displayBlock('style', $context, $blocks);
        // line 94
        echo "  <section id=\"contact\" class=\"py-3\">
    <div class=\"container\">

      <div class=\"row d-flex\">
        <div class=\"col-md-4 order-2 d-flex align-items-stretch \" >
          <div class=\"card blue-gradient p-4 \">
            <div class=\"card-body\">
              <h4 class=\" white-text\">Get In Touch</h4>
              <p>La meilleure clinique Hair experts</p>
              <h4 class=\" white-text\">Address</h4>
              <p>550 Main st, Istanbul MA</p>
              <h4 class=\" white-text\">Email</h4>
              <p>hair.experts@greffe-cheveux-istanbul.com</p>
              <h4 class=\" white-text\">Phone</h4>
              <p>+90 555 300 6798</p>
            </div>
          </div>
        </div>
        <div class=\"col-md-8 order-1\">
          <div class=\"card blue-gradient p-4\">
            <div class=\"card-body\">
             <form 
          id=\"ff\" 
          action=\"#\" 
          method=\"post\" 
          class=\" box text-center form transparent  p-1  \"
          >
                 
                 <h4 class=\"text-center  white-text mb-4 \" >Contacter Nous </h4>
                 <br>
                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom au complet\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                        </div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                     </div>

                      <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <label class=\"input-group-text\" for=\"inputGroupSelect01\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\">
                          <option selected>Intervention souhaitée...</option>
                          <option value=\"1\">greffe cheveux</option>
                          <option value=\"2\">greffe barbe </option>
                          <option value=\"3\">greffe sourcils</option>
                        </select>
                      </div>


                      <br>
                        <button 
                        style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn blue-gradient darken-3 z-depth-0  \">
                        Envoyer
                        </button>
          </form>


            </div>
          </div>
        </div>


      </div>
    </div>
  </section>";
    }

    // line 6
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
        #sourcil h1{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
                                      
            }

          #sourcil h2{
              font-weight:600;
              color:#00ace6;;
              font-size:28px;
            }

          #sourcil h3{
              font-weight:600;
              color:#00bfff;
              font-size:24px;
            }

          #sourcil p{
                color:#010203;
               font-size:1rem;
               padding-left:10px;
            }

           #sourcil ul{list-style-type: none;
            list-style-image: url(https://drive.google.com/uc?export=view&id=139xudGyOapAvQJv2jqMhm6gQkpkRr1iJ);}
     

      #sourcil #imgSourcil{
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=1XQR5mZsT_yhYDwqBsM-DYa3Vk7AWP4ck); 
          height: 350px;
          width:100%;
          /*width:100%;*/
         background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: rgba(0,0,0,.5);

          padding:15px;

          
          
        }

       #sourcil #sourcilOverlay{
           position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.4);

        }

          #sourcil .breadcrumb-item a{
                    color:rgb(0,128,128);
                    
                  }

      @media(max-width:900px){
          
              #sourcil h1{
                  font-size:25px;
                  
                }

              #sourcil h2{
                  font-size:20px;
                }

              #sourcil h3{
                  font-size:18px;
                }

              #sourcil p{
                  font-size:16px;
                }
              }
      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/contact/contact_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 6,  47 => 94,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CONTACT SECTION -->


 

 {% block style %}   
      <style>

     
        #sourcil h1{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
                                      
            }

          #sourcil h2{
              font-weight:600;
              color:#00ace6;;
              font-size:28px;
            }

          #sourcil h3{
              font-weight:600;
              color:#00bfff;
              font-size:24px;
            }

          #sourcil p{
                color:#010203;
               font-size:1rem;
               padding-left:10px;
            }

           #sourcil ul{list-style-type: none;
            list-style-image: url(https://drive.google.com/uc?export=view&id=139xudGyOapAvQJv2jqMhm6gQkpkRr1iJ);}
     

      #sourcil #imgSourcil{
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=1XQR5mZsT_yhYDwqBsM-DYa3Vk7AWP4ck); 
          height: 350px;
          width:100%;
          /*width:100%;*/
         background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: rgba(0,0,0,.5);

          padding:15px;

          
          
        }

       #sourcil #sourcilOverlay{
           position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.4);

        }

          #sourcil .breadcrumb-item a{
                    color:rgb(0,128,128);
                    
                  }

      @media(max-width:900px){
          
              #sourcil h1{
                  font-size:25px;
                  
                }

              #sourcil h2{
                  font-size:20px;
                }

              #sourcil h3{
                  font-size:18px;
                }

              #sourcil p{
                  font-size:16px;
                }
              }
      </style>
 
{% endblock  %}
  <section id=\"contact\" class=\"py-3\">
    <div class=\"container\">

      <div class=\"row d-flex\">
        <div class=\"col-md-4 order-2 d-flex align-items-stretch \" >
          <div class=\"card blue-gradient p-4 \">
            <div class=\"card-body\">
              <h4 class=\" white-text\">Get In Touch</h4>
              <p>La meilleure clinique Hair experts</p>
              <h4 class=\" white-text\">Address</h4>
              <p>550 Main st, Istanbul MA</p>
              <h4 class=\" white-text\">Email</h4>
              <p>hair.experts@greffe-cheveux-istanbul.com</p>
              <h4 class=\" white-text\">Phone</h4>
              <p>+90 555 300 6798</p>
            </div>
          </div>
        </div>
        <div class=\"col-md-8 order-1\">
          <div class=\"card blue-gradient p-4\">
            <div class=\"card-body\">
             <form 
          id=\"ff\" 
          action=\"#\" 
          method=\"post\" 
          class=\" box text-center form transparent  p-1  \"
          >
                 
                 <h4 class=\"text-center  white-text mb-4 \" >Contacter Nous </h4>
                 <br>
                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom au complet\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                        </div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                     </div>

                      <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <label class=\"input-group-text\" for=\"inputGroupSelect01\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\">
                          <option selected>Intervention souhaitée...</option>
                          <option value=\"1\">greffe cheveux</option>
                          <option value=\"2\">greffe barbe </option>
                          <option value=\"3\">greffe sourcils</option>
                        </select>
                      </div>


                      <br>
                        <button 
                        style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn blue-gradient darken-3 z-depth-0  \">
                        Envoyer
                        </button>
          </form>


            </div>
          </div>
        </div>


      </div>
    </div>
  </section>", "/components/contact/contact_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/contact/contact_section.twig");
    }
}
