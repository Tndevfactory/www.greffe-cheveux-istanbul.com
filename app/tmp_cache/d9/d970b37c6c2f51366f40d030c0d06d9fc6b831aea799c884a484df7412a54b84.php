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

/* /components/qui_somme_nous/about_section.twig */
class __TwigTemplate_a8a4ba6e6045620b3cf0787d418a08aef63be62e2994d78fb1d00b3b3613b50a extends Template
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
        // line 3
        $this->displayBlock('style', $context, $blocks);
        // line 45
        echo "
  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-12\">
          <h1>What We Do</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
        </div>
        <div class=\"col-lg-6 col-md-12\">
          
          <div id=\"imgAbout\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\"> <!-- /public/img/quisommenous/quisommenous2.jpg  --><div id=\"aboutOverlay\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\" > </div> </div> 

        </div>
      </div>
    </div>
  </section>

  ";
    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     


      #about #imgAbout {
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=1b-0prRucWYdtXTKbmPRFpyXJtc4Qm6Oc); 
          height: 100%;;
          width:100%;
          /*width:100%;*/
        /* background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: transparent;

          padding:15px;

          
          
        }

       #about #aboutOverlay{
           position: absolute;
          top: 50px;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0,0,0,.4);

        }
        





      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/qui_somme_nous/about_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 3,  44 => 45,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 

 {% block style %}   
      <style>

     


      #about #imgAbout {
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=1b-0prRucWYdtXTKbmPRFpyXJtc4Qm6Oc); 
          height: 100%;;
          width:100%;
          /*width:100%;*/
        /* background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: transparent;

          padding:15px;

          
          
        }

       #about #aboutOverlay{
           position: absolute;
          top: 50px;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0,0,0,.4);

        }
        





      </style>
 
{% endblock  %}

  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-12\">
          <h1>What We Do</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
        </div>
        <div class=\"col-lg-6 col-md-12\">
          
          <div id=\"imgAbout\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\"> <!-- /public/img/quisommenous/quisommenous2.jpg  --><div id=\"aboutOverlay\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\" > </div> </div> 

        </div>
      </div>
    </div>
  </section>

  ", "/components/qui_somme_nous/about_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/qui_somme_nous/about_section.twig");
    }
}
