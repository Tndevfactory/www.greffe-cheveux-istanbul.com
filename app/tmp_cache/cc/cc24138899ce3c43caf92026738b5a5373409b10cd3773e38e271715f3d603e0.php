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
class __TwigTemplate_6170ba415befdb361dea76606699f14235a0774c6f0bb883bf165ab5cdd51dc4 extends Template
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
        echo "/homes/newsletter\" method=\"post\"
           class=\"form p-3 d-block d-lg-none \">
      
                
                 <h4 class=\"text-center white-text\" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 24
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 24), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom \">
                          <div class=\"invalid-feedback\"> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 25), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 29
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 29), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 30), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 34
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 34), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 35), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn indigo accent-2 white-text \">
                        Envoyer
                        </button>
          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      ";
        // line 48
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
        return array (  108 => 48,  92 => 35,  88 => 34,  81 => 30,  77 => 29,  70 => 25,  66 => 24,  57 => 18,  42 => 5,  37 => 1,);
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
          action=\"{{URLROOT}}/homes/newsletter\" method=\"post\"
           class=\"form p-3 d-block d-lg-none \">
      
                
                 <h4 class=\"text-center white-text\" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"Veuillez entrer votre nom \">
                          <div class=\"invalid-feedback\"> {{data.name_err }} </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn indigo accent-2 white-text \">
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

", "/components/index/lead_form_fix.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/index/lead_form_fix.twig");
    }
}
