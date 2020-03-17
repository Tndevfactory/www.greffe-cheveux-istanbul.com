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

/* /components/greffe_sourcils/blog_section.twig */
class __TwigTemplate_ac2d8bfe80b7505f137e398b0ce79e5b841243407e0e28e934f1f8a5da45d0cf extends Template
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
        echo "
  <!-- BLOG SECTION -->
  <section id=\"blog\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"card-columns\">
            <div class=\"card\">
            
              <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/sourcils/sourcil1.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post One</h4>
                <small class=\"text-muted\">Written by Jeff on 05/20</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/sourcils/sourcil2.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Two</h4>
                <small class=\"text-muted\">Written by Karen on 05/22</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3 blue text-white\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-white\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/sourcils/sourcil3.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Three</h4>
                <small class=\"text-muted\">Written by Harry on 05/23</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/greffe_sourcils/blog_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 58,  75 => 34,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
  <!-- BLOG SECTION -->
  <section id=\"blog\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"card-columns\">
            <div class=\"card\">
            
              <img src=\"{{URLROOT}}/public/img/sourcils/sourcil1.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post One</h4>
                <small class=\"text-muted\">Written by Jeff on 05/20</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"{{URLROOT}}/public/img/sourcils/sourcil2.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Two</h4>
                <small class=\"text-muted\">Written by Karen on 05/22</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3 blue text-white\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-white\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class=\"card\">
              <img src=\"{{URLROOT}}/public/img/sourcils/sourcil3.jpg\" alt=\"\" class=\"img-fluid card-img-top\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">Blog Post Three</h4>
                <small class=\"text-muted\">Written by Harry on 05/23</small>
                <hr>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class=\"card p-3\">
              <blockquote class=\"card-blockquote card-body\">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class=\"blockquote-footer\">
                  <small class=\"text-muted\">Someone Famous in
                    <cite title=\"Source Title\">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>", "/components/greffe_sourcils/blog_section.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\components\\greffe_sourcils\\blog_section.twig");
    }
}
