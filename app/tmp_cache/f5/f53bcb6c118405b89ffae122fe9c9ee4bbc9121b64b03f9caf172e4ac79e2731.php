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

/* /components/index/lead_form_fix.twig */
class __TwigTemplate_cabd7d9b3e8b420f13ba6e0c3ebdf5932f019087c26f896a8c783ae1718aa0b0 extends Template
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
        echo "<!-- lead_form_fix-->


";
        // line 5
        echo "   <section  class=\" text-center p-5 \">
    

          <form 
          
          id=\"lead_form_fix\" 
          action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes\" method=\"post\"
           class=\"form p-3 winter-neva-gradient  d-xl-none  \">
      
                
                  <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
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

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      ";
        // line 61
        echo twig_escape_filter($this->env, ($context["register_success"] ?? null), "html", null, true);
        echo "
                  </div>
        </div>
      </div>
    </div>
  </section>

";
    }

    public function getTemplateName()
    {
        return "/components/index/lead_form_fix.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 61,  50 => 11,  42 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_fix-->


{# visible on xl and below  #}
   <section  class=\" text-center p-5 \">
    

          <form 
          
          id=\"lead_form_fix\" 
          action=\"{{URLROOT}}/homes\" method=\"post\"
           class=\"form p-3 winter-neva-gradient  d-xl-none  \">
      
                
                  <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
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

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      {{register_success}}
                  </div>
        </div>
      </div>
    </div>
  </section>

", "/components/index/lead_form_fix.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/lead_form_fix.twig");
    }
}
