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

/* /components/index/video_play_gallery_section.twig */
class __TwigTemplate_1c71d69dba2e48c36f06db7c937070f28fe9a187dc5e6a748ad1102fe2cc661b extends Template
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
        echo "<style>

#vidgallery img:hover {
  transform:scale(1.05, 1.05);
  box-shadow:1px 1px 5px 3px grey,-1px -1px 5px 3px grey;
}
#vidgallery h1 {
           font-weight:600;
              color:#0099cc;
              font-size:33px;
}
#vidgallery p{
z-index:999;
font-size:22px;

}

 @media(max-width:900px){
            
                #vidgallery h1{
                z-index:999;
                 font-weight:600;
              color:#0099cc;
                position:relative;
                font-size:24px;
                margin-top:0px;
              }

              #vidgallery p{
            z-index:999;
            font-size:16px;

            }
       }

</style>



<!-- video GALLERY -->
<!-- video gllery_section -->
  <section id=\"vidgallery\" class=\"pt-5\">
    <div class=\"container\">
     <p>Hair Experts vous accompagne avec professionnalisme dans la préparation de votre greffe de cheveux à Istanbul et s’occupe de vous durant l’intégralité de votre voyage médical en Turquie.</p>

      <h1 class=\"text-center\">Les techniques de greffe cheveux utilisées  </h1>

    <div class=\"videos pt-2\">  
      
      <div class=\"row mb-4\">
            <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-right\">
            
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/6T_gmfHSb2M?t=29\" data-gall=\"myGallery\">
                      <img src=\"https://drive.google.com/uc?export=view&id=1Ijs-F1ki0GuDJBJL842KeM7d5E9qpUbn\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            
            </div>
            <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in\" >
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/_Hq-WHqkofk\" data-gall=\"myGallery\">
                      <img src=\"https://drive.google.com/uc?export=view&id=1tannZkDnf2beokGmPIDYaq53HPUSlIjn\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
            
            <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-left\">
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/bJMehqOLqHM\" data-gall=\"myGallery\">
                      <img src=\"https://drive.google.com/uc?export=view&id=1F6ISG0Cj2PXcWsLEZXBod3PW-ZhkRaLf\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
        </div>

    </div>

     
            <!--<div class=\"col-md-4  mb-2\">
                <video class=\"video-fluid z-depth-1\" controls loop muted>
                  <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
                </video>
            </div>

            <div class=\"col-md-4  mb-2\">
              <video class=\"video-fluid z-depth-1\" controls loop muted>
                  <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
                </video>
            </div>

            <div class=\"col-md-4  mb-2\">
              <video class=\"video-fluid z-depth-1\" controls loop muted>
                  <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
                </video>
            </div>-->



      

    </div>
  </section>


  ";
    }

    public function getTemplateName()
    {
        return "/components/index/video_play_gallery_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

#vidgallery img:hover {
  transform:scale(1.05, 1.05);
  box-shadow:1px 1px 5px 3px grey,-1px -1px 5px 3px grey;
}
#vidgallery h1 {
           font-weight:600;
              color:#0099cc;
              font-size:33px;
}
#vidgallery p{
z-index:999;
font-size:22px;

}

 @media(max-width:900px){
            
                #vidgallery h1{
                z-index:999;
                 font-weight:600;
              color:#0099cc;
                position:relative;
                font-size:24px;
                margin-top:0px;
              }

              #vidgallery p{
            z-index:999;
            font-size:16px;

            }
       }

</style>



<!-- video GALLERY -->
<!-- video gllery_section -->
  <section id=\"vidgallery\" class=\"pt-5\">
    <div class=\"container\">
     <p>Hair Experts vous accompagne avec professionnalisme dans la préparation de votre greffe de cheveux à Istanbul et s’occupe de vous durant l’intégralité de votre voyage médical en Turquie.</p>

      <h1 class=\"text-center\">Les techniques de greffe cheveux utilisées  </h1>

    <div class=\"videos pt-2\">  
      
      <div class=\"row mb-4\">
            <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-right\">
            
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/6T_gmfHSb2M?t=29\" data-gall=\"myGallery\">
                      <img src=\"https://drive.google.com/uc?export=view&id=1Ijs-F1ki0GuDJBJL842KeM7d5E9qpUbn\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            
            </div>
            <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in\" >
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/_Hq-WHqkofk\" data-gall=\"myGallery\">
                      <img src=\"https://drive.google.com/uc?export=view&id=1tannZkDnf2beokGmPIDYaq53HPUSlIjn\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
            
            <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-left\">
                <div class=\"video d-flex justify-content-center  \" style=\"position:relative\">
                    <a class=\"venobox align-items-center\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"http://youtu.be/bJMehqOLqHM\" data-gall=\"myGallery\">
                      <img src=\"https://drive.google.com/uc?export=view&id=1F6ISG0Cj2PXcWsLEZXBod3PW-ZhkRaLf\" alt=\"\" style=\"width:100%\" class=\"img-thumbnail\">
                          <i class=\"fas fa-play-circle fa-3x rounded-circle\" style=\"border:1px solid #C3922E;position:absolute;z-index:999;left:40%;top:50%; color:#fff;background-color:#0C3537;\"> </i>
                    </a>
                </div>
            </div>
        </div>

    </div>

     
            <!--<div class=\"col-md-4  mb-2\">
                <video class=\"video-fluid z-depth-1\" controls loop muted>
                  <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
                </video>
            </div>

            <div class=\"col-md-4  mb-2\">
              <video class=\"video-fluid z-depth-1\" controls loop muted>
                  <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
                </video>
            </div>

            <div class=\"col-md-4  mb-2\">
              <video class=\"video-fluid z-depth-1\" controls loop muted>
                  <source src=\"https://mdbootstrap.com/img/video/Sail-Away.mp4\" type=\"video/mp4\" />
                </video>
            </div>-->



      

    </div>
  </section>


  {# {% block script %}
    <script>
          \$(document).ready(function(){
              \$('.venobox').venobox(); 
          });


          
    </script>

  {% endblock  %} #}", "/components/index/video_play_gallery_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/video_play_gallery_section.twig");
    }
}
