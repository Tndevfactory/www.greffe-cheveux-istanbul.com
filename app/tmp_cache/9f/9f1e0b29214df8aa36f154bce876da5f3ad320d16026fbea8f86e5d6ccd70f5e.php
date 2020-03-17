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
class __TwigTemplate_ea3d08cffc979dc9403d6bb4661268da142ee14b2b2f36bc2fbdb491e328a63b extends Template
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
        echo "<!-- CONTACT SECTION -->
  <section id=\"contact\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"card p-4\">
            <div class=\"card-body\">
              <h4>Get In Touch</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, odio!</p>
              <h4>Address</h4>
              <p>550 Main st, Boston MA</p>
              <h4>Email</h4>
              <p>test@test.com</p>
              <h4>Phone</h4>
              <p>(555) 555-5555</p>
            </div>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"card p-4\">
            <div class=\"card-body\">
              <h3 class=\"text-center\">Please fill out this form to contact us</h3>
              <hr>
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"First Name\">
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\">
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\">
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\">
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"form-group\">
                    <textarea class=\"form-control\" placeholder=\"Message\"></textarea>
                  </div>
                </div>
                <div class=\"col-md-12\">
                  <div class=\"form-group\">
                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-outline-blue btn-block\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/contact/contact_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CONTACT SECTION -->
  <section id=\"contact\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"card p-4\">
            <div class=\"card-body\">
              <h4>Get In Touch</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, odio!</p>
              <h4>Address</h4>
              <p>550 Main st, Boston MA</p>
              <h4>Email</h4>
              <p>test@test.com</p>
              <h4>Phone</h4>
              <p>(555) 555-5555</p>
            </div>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"card p-4\">
            <div class=\"card-body\">
              <h3 class=\"text-center\">Please fill out this form to contact us</h3>
              <hr>
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"First Name\">
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\">
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\">
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\">
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"form-group\">
                    <textarea class=\"form-control\" placeholder=\"Message\"></textarea>
                  </div>
                </div>
                <div class=\"col-md-12\">
                  <div class=\"form-group\">
                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-outline-blue btn-block\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>", "/components/contact/contact_section.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/components/contact/contact_section.twig");
    }
}