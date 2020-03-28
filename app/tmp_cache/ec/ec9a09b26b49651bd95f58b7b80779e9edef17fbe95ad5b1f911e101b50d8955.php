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

/* /components/qui_somme_nous/testimonial.twig */
class __TwigTemplate_5965358fd0cf10ccd7164ec3430d09b2a3d12a5346a6df4d9cbd3c1db8eb842d extends Template
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
        echo "<!-- TESTIMONIALS -->
  <section id=\"testimonials\" class=\"pt-4 blue-gradient text-white\">
    <div class=\"container\">
      <h2 class=\"text-center purple-text\">Témoignages</h2>
      <div class=\"row text-center\">
        <div class=\"col\">
          <div class=\"slider\">
            <div>
              <blockquote  class=\"blockquote\">
                <p class=\"mb-0\">
                  Un grand merci pour la prise de contact sur le site internet , pendant et après mon intervention jusqu'au retour en France Expérience réussie.
                </p>
                <footer class=\"white-text blockquote-footer\">PHILIPPE, 55 Ans
                  <cite  title=\"patient1\">Toulouse, France</cite><span class=\" pl-1 yellow-text\"> <i class=\"fas fa-star\"> </i> <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i> </span>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  très bon suivi avant, pendant et après mon séjour: assistantes médicales très disponibles et maîtrisant parfaitement le français, très belle clinique.
                </p>
                <footer class=\"white-text blockquote-footer\">ANTOINE, 37 Ans
                  <cite  title=\"patient2\">Nancy, France</cite><span class=\" pl-1 yellow-text\"> <i class=\"fas fa-star\"> </i> <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i> </span>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  La personne avec qui j'ai été en contact depuis le début s'appelle Gulsum, très gentille et disponible et maitrisant parfaitement le français.
                </p>
                <footer class=\"white-text blockquote-footer\">SAVARESE F., 41 Ans
                  <cite title=\"patient3\">BRUXELLES, Belgique</cite> <span class=\" pl-1 yellow-text\"> <i class=\"fas fa-star\"> </i> <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i> </span>
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
        return "/components/qui_somme_nous/testimonial.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- TESTIMONIALS -->
  <section id=\"testimonials\" class=\"pt-4 blue-gradient text-white\">
    <div class=\"container\">
      <h2 class=\"text-center purple-text\">Témoignages</h2>
      <div class=\"row text-center\">
        <div class=\"col\">
          <div class=\"slider\">
            <div>
              <blockquote  class=\"blockquote\">
                <p class=\"mb-0\">
                  Un grand merci pour la prise de contact sur le site internet , pendant et après mon intervention jusqu'au retour en France Expérience réussie.
                </p>
                <footer class=\"white-text blockquote-footer\">PHILIPPE, 55 Ans
                  <cite  title=\"patient1\">Toulouse, France</cite><span class=\" pl-1 yellow-text\"> <i class=\"fas fa-star\"> </i> <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i> </span>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  très bon suivi avant, pendant et après mon séjour: assistantes médicales très disponibles et maîtrisant parfaitement le français, très belle clinique.
                </p>
                <footer class=\"white-text blockquote-footer\">ANTOINE, 37 Ans
                  <cite  title=\"patient2\">Nancy, France</cite><span class=\" pl-1 yellow-text\"> <i class=\"fas fa-star\"> </i> <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i> </span>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class=\"blockquote\">
                <p class=\"mb-0\">
                  La personne avec qui j'ai été en contact depuis le début s'appelle Gulsum, très gentille et disponible et maitrisant parfaitement le français.
                </p>
                <footer class=\"white-text blockquote-footer\">SAVARESE F., 41 Ans
                  <cite title=\"patient3\">BRUXELLES, Belgique</cite> <span class=\" pl-1 yellow-text\"> <i class=\"fas fa-star\"> </i> <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i>  <i class=\"fas fa-star\"> </i> </span>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>", "/components/qui_somme_nous/testimonial.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/components/qui_somme_nous/testimonial.twig");
    }
}
