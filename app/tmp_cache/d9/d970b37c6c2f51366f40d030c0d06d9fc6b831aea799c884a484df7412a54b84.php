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
        // line 85
        echo "
  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-12\">
         
          <p class=\"pt-3\">Hair Experts collabore avec les meilleurs spécialistes de greffe cheveux en Turquie. Nos chirurgiens sont des références mondiales dans l’implantation capillaire, et ont opéré avec succès des centaines de patients, venus des quatre coins du monde. </p>
          <p> Le professionnalisme et le savoir-faire sont également la devise de notre personnel médical et de nos assistants. Toute l’équipe de Hair Experts s’engage pour vous garantir un séjour esthétique agréable en Turquie, et une greffe capillaire qui répond parfaitement à vos attentes. </p>

        </div>
        <div class=\"col-lg-6 col-md-12\">
          
          <div id=\"imgAbout\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\"> <!-- /public/img/quisommenous/quisommenous2.jpg  --><div id=\"aboutOverlay\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\" > </div> </div> 

        </div>
      </div>
    </div>
  </section>

<script>
\$(document).ready(function(){

  \$(\"#about p:first-child\").html(function(){
  var text= \$(this).text().trim().split(\" \");
  console.log(text);
  var first = text.shift();
  
  return (text.length > 0 ? 
  \" <span class='font-weight-bold' style='color:#1A5BAC'>\"
  + first + 
  \"</span> \" : first) + text.join(\" \");
});

});


</script>
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
          min-height:545px;
          max-width:455px;
          /*width:100%;*/
        /* background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: transparent;
          z-index:999;
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
        
    .about-img {
      margin-top: -50px;
    }

    #about p{
              font-size:1rem;
              text-indent: 30px;
            }

    ";
        // line 51
        echo "
    #about p::first-letter {
      
      font-size:25px;
      font-family:verdana;
      text-transform:uppercase;
      color:#000;
      
    }         

    @media(max-width:900px){
              
                  #about h1{
                      font-size:25px;
                      
                    }

                  #about h2{
                      font-size:20px;
                    }

                  #about h3{
                      font-size:18px;
                    }

                  #about p{
                      font-size:16px;
                    }
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
        return array (  130 => 51,  85 => 3,  44 => 85,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 

 {% block style %}   
      <style>

     


      #about #imgAbout {
          position:relative;
          background-image:url(https://drive.google.com/uc?export=view&id=1b-0prRucWYdtXTKbmPRFpyXJtc4Qm6Oc); 
          min-height:545px;
          max-width:455px;
          /*width:100%;*/
        /* background-position: 50% 50%;
         background-repeat: no-repeat;
         /* background-attachment: fixed;*/
          background-size: cover;
          background-color: transparent;
          z-index:999;
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
        
    .about-img {
      margin-top: -50px;
    }

    #about p{
              font-size:1rem;
              text-indent: 30px;
            }

    {# #about p::first-line{
     
      font-size:25px;
      font-family:verdana;
      text-transform:uppercase;
      color:red;
      
    }    #}

    #about p::first-letter {
      
      font-size:25px;
      font-family:verdana;
      text-transform:uppercase;
      color:#000;
      
    }         

    @media(max-width:900px){
              
                  #about h1{
                      font-size:25px;
                      
                    }

                  #about h2{
                      font-size:20px;
                    }

                  #about h3{
                      font-size:18px;
                    }

                  #about p{
                      font-size:16px;
                    }
                  }


      </style>
 
{% endblock  %}

  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-12\">
         
          <p class=\"pt-3\">Hair Experts collabore avec les meilleurs spécialistes de greffe cheveux en Turquie. Nos chirurgiens sont des références mondiales dans l’implantation capillaire, et ont opéré avec succès des centaines de patients, venus des quatre coins du monde. </p>
          <p> Le professionnalisme et le savoir-faire sont également la devise de notre personnel médical et de nos assistants. Toute l’équipe de Hair Experts s’engage pour vous garantir un séjour esthétique agréable en Turquie, et une greffe capillaire qui répond parfaitement à vos attentes. </p>

        </div>
        <div class=\"col-lg-6 col-md-12\">
          
          <div id=\"imgAbout\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\"> <!-- /public/img/quisommenous/quisommenous2.jpg  --><div id=\"aboutOverlay\" class=\"img-fluid rounded-circle d-none d-lg-block about-img\" > </div> </div> 

        </div>
      </div>
    </div>
  </section>

<script>
\$(document).ready(function(){

  \$(\"#about p:first-child\").html(function(){
  var text= \$(this).text().trim().split(\" \");
  console.log(text);
  var first = text.shift();
  
  return (text.length > 0 ? 
  \" <span class='font-weight-bold' style='color:#1A5BAC'>\"
  + first + 
  \"</span> \" : first) + text.join(\" \");
});

});


</script>
  ", "/components/qui_somme_nous/about_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/qui_somme_nous/about_section.twig");
    }
}
