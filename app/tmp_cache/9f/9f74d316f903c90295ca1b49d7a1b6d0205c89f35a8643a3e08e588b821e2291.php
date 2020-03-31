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

/* /components/greffe_cheveux/blog_section.twig */
class __TwigTemplate_38b41c0f6274165ed1718c3311becd890d073d995622bd094814ccf80ff511fd extends Template
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
        // line 99
        echo "  <section id=\"greffeCheveux\" class=\"py-3\">
    <div class=\"container\">

        <nav aria-label=\"breadcrumb\">
          <ol class=\"breadcrumb \">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Greffe Cheuveux</a></li>
            <li class=\"breadcrumb-item active\">Contenu</li>
          </ol>
        </nav>


      <div class=\"row\">
        <div class=\"col-lg-7\">
           <h2>A qui s’adresse la greffe cheveux en Turquie ?</h2>
          <p><b>La greffe cheveux Turquie </b>s’adresse aux patients souffrant de calvitie ou d’alopécie androgénique, quel que soit son stade d’avancement. Elle traite la chute de cheveux grâce à l’implantation de follicules capillaires dans les zones dégarnies. </p><p> La greffe capillaire permet également de dissimuler les pelades et les cicatrices touchant le cuir chevelu. Grâce à l’emploi de techniques médicales innovantes, les processus d’extraction et d’implantation des bulbes capillaires sont peu invasifs et permettent une guérison rapide et sans complications. </p>
          <h2>Avantages de la greffe cheveux Turquie</h2>
          <p>En optant pour la greffe cheveux à Istanbul, vous bénéficiez d’un traitement capillaire optimal grâce à :</p>
          <h3><ul>
          <li>Des médecins expérimentés et avec une réputation infaillible à l’échelle mondiale</li>
          <li>Une équipe soignante professionnelle et spécialisée dans l’implantation capillaire</li>
          
          <li>Une intervention dans une <b>clinique greffe cheveux Turquie </b>moderne et parfaitement équipée. </li>

          <li>Un suivi rigoureux et permanent : nos assistants s’enquièrent de l’évolution du résultat au fil des mois et vous mettent en contact avec le chirurgien en cas de besoin. </li>
          </ul></h3>
          <h2>Comment se déroule la séance de greffe cheveux dans votre clinique à Istanbul ? </h2>
          <p>La chirurgie d’implantation est pratiquement indolore. Elle se déroule sous anesthésie locale avec injection intradermique, et dure entre 5 et 8 heures. Vous serez pris en charge par le<b> meilleur docteur greffe cheveux Turquie</b>, et l’équipe soignante veillera à votre confort en instaurant des pauses-collation et un divertissement multimédia pendant l’intervention. </p>
          </div>

        <div class=\"col-lg-5\">
            <div class=\"card p-2\">
             <div id=\"imgCheuveux\" > <!-- /public/img/cheuveux/cheveux1.jpg  --><div id=\"cheuveuxOverlay\"  > </div> </div> 
              <div class=\"card-body\">
                <h4 class=\"card-title text-center\">Greffe de cheveux</h4>
              </div>
            </div>

               <form 
          id=\"ff\" 
          action=\"#\" 
          method=\"post\" 
          class=\" box text-center form blue-gradient  my-3 p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center  white-text mb-4 \" >Demander un devis </h4>
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


          
          <div class=\"col-lg-12\">
          
          <p>La séance de greffe capillaire se déroule en plusieurs étapes :</p>
          <h3><ul>
              <li>Prélèvement des follicules pileux depuis la zone donneuse, un par un en cas de <b>greffe cheveux FUE</b>, ou par bandelette en cas de <b>greffe cheveux FUT</b></li>
              <li>Conservation des greffons dans une solution nutritive vitaminée</li>

              <li>Préparation de la zone receveuse en ouvrant des canaux d’implantation </li>

              <li>Implantation des follicules</li>
              </ul></h3>
              <h2>Quel est le nombre de greffons idéal pour une implantation capillaire réussie ?</h2>
              <p> Le nombre de greffons capillaires nécessaires varie selon la technique d’implantation choisie, l’étendue de l’alopécie et l’état de la zone de prélèvement des follicules pileux. Afin de mieux évaluer le nombre de greffons requis, un diagnostic préliminaire personnalisé est effectué à distance grâce à des photos de la chevelure.</p><p> Les images de la zone dégarnie permettent d’estimer la densité de greffons requise. De même, la partie donneuse (généralement située à l’arrière du crâne) doit être photographiée.</p>
              <p>Même s’il est important, le nombre de greffons capillaires n’est pas toujours le meilleur indicateur. C’est plutôt le taux de survie des follicules implantés qui détermine le degré de réussite de votre <b>greffe cheveux Istanbul</b>.</p>
              <h2>Quel est le prix greffe cheveux en Turquie ?</h2>
              <p>Le <b>prix greffe cheveux en Turquie </b>coute jusqu’à 50% moins cher qu’en France. <b>Le cout greffe cheveux</b> dépend de la technique d’implantation (greffe cheveux FUT, FUE ou DHI), du nombre de greffons ainsi que des modalités du séjour médical en Turquie. Il inclut notamment :</p>
             <h3> <ul>
              <li>La consultation avant et après greffe cheveux Turquie</li>
              <li>Les tests médicaux préopératoires</li>

              <li>Les frais de l’intervention et de l’anesthésie</li>

              <li>Les soins médicaux (lotion et shampoing désinfectant, solution vitaminée…)</li>

              <li>Un séjour de convalescence dans un hôtel stambouliote</li>
              
              <li>Un chauffeur privé ainsi qu’un interprète</li>
              </ul></h3>
              <h2>Combien de temps prend la repousse capillaire après la greffe cheveux Turquie ?</h2>
              <p>Les cheveux issus des follicules greffés tombent après 3 à 6 semaines. Cette chute est tout à fait normale et fait partie du processus de régénération capillaire après la transplantation des follicules pileux. La repousse des cheveux définitifs reprend progressivement vers le 3ème mois postopératoire. </p>
              <p>Le résultat greffe cheveux Turquie est visible après 6 à 12 mois. La couleur, l’épaisseur et la densité des cheveux transplantés sont quasi-identiques à celles des cheveux naturels.</p>

        </div>


      </div> ";
        // line 229
        echo "
    </div>
  </section>";
    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
        #greffeCheveux h1{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
                                      
            }

          #greffeCheveux h2{
              font-weight:600;
              color:#00ace6;;
              font-size:28px;
            }

          #greffeCheveux h3{
              font-weight:600;
              color:#00bfff;
              font-size:24px;
            }

          #greffeCheveux p{
                color:#010203;
               font-size:1rem;
               padding-left:10px;
            }

           #greffeCheveux ul{
             list-style-type: none;
            list-style-image: url(https://drive.google.com/uc?export=view&id=139xudGyOapAvQJv2jqMhm6gQkpkRr1iJ);}
     



      #greffeCheveux #imgCheuveux {
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=119tx-ODwATUoKFp50DozY3uohw09vD1F); 
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

       #greffeCheveux #cheuveuxOverlay{
           position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.4);

        }
        
      #greffeCheveux .breadcrumb-item a{
                    color:rgb(0,128,128);
                    
                  }

      @media(max-width:900px){
      
          #greffeCheveux h1{
              font-size:25px;
              
            }

          #greffeCheveux h2{
              font-size:20px;
            }

          #greffeCheveux h3{
              font-size:18px;
            }

          #greffeCheveux p{
              font-size:16px;
            }
          }




      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/greffe_cheveux/blog_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 4,  179 => 229,  52 => 104,  45 => 99,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
  

 {% block style %}   
      <style>

     
        #greffeCheveux h1{
              font-weight:600;
              color:#0099cc;
              font-size:33px;
                                      
            }

          #greffeCheveux h2{
              font-weight:600;
              color:#00ace6;;
              font-size:28px;
            }

          #greffeCheveux h3{
              font-weight:600;
              color:#00bfff;
              font-size:24px;
            }

          #greffeCheveux p{
                color:#010203;
               font-size:1rem;
               padding-left:10px;
            }

           #greffeCheveux ul{
             list-style-type: none;
            list-style-image: url(https://drive.google.com/uc?export=view&id=139xudGyOapAvQJv2jqMhm6gQkpkRr1iJ);}
     



      #greffeCheveux #imgCheuveux {
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=119tx-ODwATUoKFp50DozY3uohw09vD1F); 
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

       #greffeCheveux #cheuveuxOverlay{
           position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.4);

        }
        
      #greffeCheveux .breadcrumb-item a{
                    color:rgb(0,128,128);
                    
                  }

      @media(max-width:900px){
      
          #greffeCheveux h1{
              font-size:25px;
              
            }

          #greffeCheveux h2{
              font-size:20px;
            }

          #greffeCheveux h3{
              font-size:18px;
            }

          #greffeCheveux p{
              font-size:16px;
            }
          }




      </style>
 
{% endblock  %}
  <section id=\"greffeCheveux\" class=\"py-3\">
    <div class=\"container\">

        <nav aria-label=\"breadcrumb\">
          <ol class=\"breadcrumb \">
            <li class=\"breadcrumb-item\"><a href=\"{{URLROOT}}\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Greffe Cheuveux</a></li>
            <li class=\"breadcrumb-item active\">Contenu</li>
          </ol>
        </nav>


      <div class=\"row\">
        <div class=\"col-lg-7\">
           <h2>A qui s’adresse la greffe cheveux en Turquie ?</h2>
          <p><b>La greffe cheveux Turquie </b>s’adresse aux patients souffrant de calvitie ou d’alopécie androgénique, quel que soit son stade d’avancement. Elle traite la chute de cheveux grâce à l’implantation de follicules capillaires dans les zones dégarnies. </p><p> La greffe capillaire permet également de dissimuler les pelades et les cicatrices touchant le cuir chevelu. Grâce à l’emploi de techniques médicales innovantes, les processus d’extraction et d’implantation des bulbes capillaires sont peu invasifs et permettent une guérison rapide et sans complications. </p>
          <h2>Avantages de la greffe cheveux Turquie</h2>
          <p>En optant pour la greffe cheveux à Istanbul, vous bénéficiez d’un traitement capillaire optimal grâce à :</p>
          <h3><ul>
          <li>Des médecins expérimentés et avec une réputation infaillible à l’échelle mondiale</li>
          <li>Une équipe soignante professionnelle et spécialisée dans l’implantation capillaire</li>
          
          <li>Une intervention dans une <b>clinique greffe cheveux Turquie </b>moderne et parfaitement équipée. </li>

          <li>Un suivi rigoureux et permanent : nos assistants s’enquièrent de l’évolution du résultat au fil des mois et vous mettent en contact avec le chirurgien en cas de besoin. </li>
          </ul></h3>
          <h2>Comment se déroule la séance de greffe cheveux dans votre clinique à Istanbul ? </h2>
          <p>La chirurgie d’implantation est pratiquement indolore. Elle se déroule sous anesthésie locale avec injection intradermique, et dure entre 5 et 8 heures. Vous serez pris en charge par le<b> meilleur docteur greffe cheveux Turquie</b>, et l’équipe soignante veillera à votre confort en instaurant des pauses-collation et un divertissement multimédia pendant l’intervention. </p>
          </div>

        <div class=\"col-lg-5\">
            <div class=\"card p-2\">
             <div id=\"imgCheuveux\" > <!-- /public/img/cheuveux/cheveux1.jpg  --><div id=\"cheuveuxOverlay\"  > </div> </div> 
              <div class=\"card-body\">
                <h4 class=\"card-title text-center\">Greffe de cheveux</h4>
              </div>
            </div>

               <form 
          id=\"ff\" 
          action=\"#\" 
          method=\"post\" 
          class=\" box text-center form blue-gradient  my-3 p-3 z-depth-1 \"
          >
                 
                 <h4 class=\"text-center  white-text mb-4 \" >Demander un devis </h4>
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


          
          <div class=\"col-lg-12\">
          
          <p>La séance de greffe capillaire se déroule en plusieurs étapes :</p>
          <h3><ul>
              <li>Prélèvement des follicules pileux depuis la zone donneuse, un par un en cas de <b>greffe cheveux FUE</b>, ou par bandelette en cas de <b>greffe cheveux FUT</b></li>
              <li>Conservation des greffons dans une solution nutritive vitaminée</li>

              <li>Préparation de la zone receveuse en ouvrant des canaux d’implantation </li>

              <li>Implantation des follicules</li>
              </ul></h3>
              <h2>Quel est le nombre de greffons idéal pour une implantation capillaire réussie ?</h2>
              <p> Le nombre de greffons capillaires nécessaires varie selon la technique d’implantation choisie, l’étendue de l’alopécie et l’état de la zone de prélèvement des follicules pileux. Afin de mieux évaluer le nombre de greffons requis, un diagnostic préliminaire personnalisé est effectué à distance grâce à des photos de la chevelure.</p><p> Les images de la zone dégarnie permettent d’estimer la densité de greffons requise. De même, la partie donneuse (généralement située à l’arrière du crâne) doit être photographiée.</p>
              <p>Même s’il est important, le nombre de greffons capillaires n’est pas toujours le meilleur indicateur. C’est plutôt le taux de survie des follicules implantés qui détermine le degré de réussite de votre <b>greffe cheveux Istanbul</b>.</p>
              <h2>Quel est le prix greffe cheveux en Turquie ?</h2>
              <p>Le <b>prix greffe cheveux en Turquie </b>coute jusqu’à 50% moins cher qu’en France. <b>Le cout greffe cheveux</b> dépend de la technique d’implantation (greffe cheveux FUT, FUE ou DHI), du nombre de greffons ainsi que des modalités du séjour médical en Turquie. Il inclut notamment :</p>
             <h3> <ul>
              <li>La consultation avant et après greffe cheveux Turquie</li>
              <li>Les tests médicaux préopératoires</li>

              <li>Les frais de l’intervention et de l’anesthésie</li>

              <li>Les soins médicaux (lotion et shampoing désinfectant, solution vitaminée…)</li>

              <li>Un séjour de convalescence dans un hôtel stambouliote</li>
              
              <li>Un chauffeur privé ainsi qu’un interprète</li>
              </ul></h3>
              <h2>Combien de temps prend la repousse capillaire après la greffe cheveux Turquie ?</h2>
              <p>Les cheveux issus des follicules greffés tombent après 3 à 6 semaines. Cette chute est tout à fait normale et fait partie du processus de régénération capillaire après la transplantation des follicules pileux. La repousse des cheveux définitifs reprend progressivement vers le 3ème mois postopératoire. </p>
              <p>Le résultat greffe cheveux Turquie est visible après 6 à 12 mois. La couleur, l’épaisseur et la densité des cheveux transplantés sont quasi-identiques à celles des cheveux naturels.</p>

        </div>


      </div> {# row end #}

    </div>
  </section>", "/components/greffe_cheveux/blog_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/greffe_cheveux/blog_section.twig");
    }
}
