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
class __TwigTemplate_ce15ceb50a57f590b7090d52921c7b4997730eeae668ccf76e35f5aa02221a76 extends Template
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
        echo "<!-- TESTIMONIALS -->

 

 ";
        // line 5
        $this->displayBlock('style', $context, $blocks);
        // line 52
        echo "
  <section id=\"testimonials\" class=\"pt-4 blue-gradient text-white\">
    <div class=\"container\">
      <h2 class=\"text-center h2\" style=\"color: white;text-shadow: 2px 2px 4px #000000;\">Témoignages</h2>
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
                 Très bon suivi avant, pendant et après mon séjour: assistantes médicales très disponibles et maîtrisant parfaitement le français, très belle clinique.
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

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     


    #testimonials h1{
                      font-size:33px;
                      
                    }

                  #testimonials h2{
                      font-size:25px;
                    }

                  #testimonials h3{
                      font-size:21px;
                    }

                  #testimonials p{
                      font-size:1rem;
                    }

    @media(max-width:900px){
              
                  #testimonials h1{
                      font-size:25px;
                      
                    }

                  #testimonials h2{
                      font-size:20px;
                    }

                  #testimonials h3{
                      font-size:18px;
                    }

                  #testimonials p{
                      font-size:16px;
                    }
                  }


      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/qui_somme_nous/testimonial.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 5,  46 => 52,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- TESTIMONIALS -->

 

 {% block style %}   
      <style>

     


    #testimonials h1{
                      font-size:33px;
                      
                    }

                  #testimonials h2{
                      font-size:25px;
                    }

                  #testimonials h3{
                      font-size:21px;
                    }

                  #testimonials p{
                      font-size:1rem;
                    }

    @media(max-width:900px){
              
                  #testimonials h1{
                      font-size:25px;
                      
                    }

                  #testimonials h2{
                      font-size:20px;
                    }

                  #testimonials h3{
                      font-size:18px;
                    }

                  #testimonials p{
                      font-size:16px;
                    }
                  }


      </style>
 
{% endblock  %}

  <section id=\"testimonials\" class=\"pt-4 blue-gradient text-white\">
    <div class=\"container\">
      <h2 class=\"text-center h2\" style=\"color: white;text-shadow: 2px 2px 4px #000000;\">Témoignages</h2>
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
                 Très bon suivi avant, pendant et après mon séjour: assistantes médicales très disponibles et maîtrisant parfaitement le français, très belle clinique.
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
  </section>", "/components/qui_somme_nous/testimonial.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/qui_somme_nous/testimonial.twig");
    }
}
