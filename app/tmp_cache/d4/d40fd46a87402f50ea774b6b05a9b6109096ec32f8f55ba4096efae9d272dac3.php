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
class __TwigTemplate_91180d3bcba259205a0682cac814c4b405be2277429a48005817b88e808ac884 extends Template
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
          style=\" 
           
            
            background:rgba(55,166,222,.9);
            
            border-radius:10px;
            
            \" 
          id=\"lead_form_float\" 
          action=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes\" method=\"post\"
           class=\"form p-3 d-block d-lg-none \">
      
                
                 <h4 class=\"text-center white-text mb-4\" >Demander un devis </h4>
                 
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 25
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 25), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom complet\">
                          <div class=\"invalid-feedback\"> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 26), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 30
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 30), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 31), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 ";
        // line 35
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 35), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 36), "html", null, true);
        echo "</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 ";
        // line 40
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 40), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 41), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                      <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn blue white-text darken-2  \">
                        Envoyer
                        </button>
          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      ";
        // line 54
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
        return array (  120 => 54,  104 => 41,  100 => 40,  93 => 36,  89 => 35,  82 => 31,  78 => 30,  71 => 26,  67 => 25,  57 => 18,  42 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_fix-->


{# visible on xl and below  #}
   <section  class=\" text-center p-5 \">
    

          <form 
          style=\" 
           
            
            background:rgba(55,166,222,.9);
            
            border-radius:10px;
            
            \" 
          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes\" method=\"post\"
           class=\"form p-3 d-block d-lg-none \">
      
                
                 <h4 class=\"text-center white-text mb-4\" >Demander un devis </h4>
                 
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"Veuillez entrer votre nom complet\">
                          <div class=\"invalid-feedback\"> {{data.name_err }} </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"text\" name=\"tel\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                       <div class=\"form-group\">
                            <input type=\"text\" name=\"intervention\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Intervention souhaitée\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                      
                      <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn blue white-text darken-2  \">
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

", "/components/index/lead_form_fix.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/components/index/lead_form_fix.twig");
    }
}
