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

/* /components/index/videoGalleryG-host.twig */
class __TwigTemplate_fd43ff5245c6b390a427004077d3e8d44267894eff45257a0395f8645e5d9365 extends Template
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
<!-- d-block d-xl-none leadFormFixBottom_fix-->

<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


";
        // line 7
        $this->displayBlock('style', $context, $blocks);
        // line 64
        echo "


<section id=\"video-g-host\" class=\"py-3\">

  <div class=\"container\">
    <div class=\"row\">
                <div class=\"col-md-4 blockVid\">
                      <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1bns8j7I_pbNjE_80CRg5tCWAvZVlC6lw\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                            <h1 class=\"display-3\">Video Header</h1>
                            <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
                          </div>
                        </div>
                      </div>
                </div>

                <div class=\"col-md-4 blockVid\">
                      <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1bns8j7I_pbNjE_80CRg5tCWAvZVlC6lw\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                            <h1 class=\"display-3\">Video Header</h1>
                            <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class=\"col-md-4 blockVid\">
                      <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1bns8j7I_pbNjE_80CRg5tCWAvZVlC6lw\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                            <h1 class=\"display-3\">Video Header</h1>
                            <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div>
    </div>

</section>

";
    }

    // line 7
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     #video-g-host .blockVid{
            position: relative;
            background-color: black;
            height: 50vh;
           min-height: 25rem;
            width: 100%;
            overflow: hidden;
          }

        #video-g-host  .blockVid video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
          }

        #video-g-host  .blockVid .caption {
            position: relative;
            z-index: 2;
          }

        #video-g-host .blockVid .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
          }

    
          @media(max-width:900px){
          
          #video-g-host  .isologo{
              width:110px;
              height:75px;
               }
            
          }
       

      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/index/videoGalleryG-host.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 7,  48 => 64,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- d-block d-xl-none leadFormFixBottom_fix-->

<!-- Footer style=\"background-color:#1A5EA4\" fixed-bottom-->


{% block style %}   
      <style>

     #video-g-host .blockVid{
            position: relative;
            background-color: black;
            height: 50vh;
           min-height: 25rem;
            width: 100%;
            overflow: hidden;
          }

        #video-g-host  .blockVid video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
          }

        #video-g-host  .blockVid .caption {
            position: relative;
            z-index: 2;
          }

        #video-g-host .blockVid .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
          }

    
          @media(max-width:900px){
          
          #video-g-host  .isologo{
              width:110px;
              height:75px;
               }
            
          }
       

      </style>
 
{% endblock  %}



<section id=\"video-g-host\" class=\"py-3\">

  <div class=\"container\">
    <div class=\"row\">
                <div class=\"col-md-4 blockVid\">
                      <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1bns8j7I_pbNjE_80CRg5tCWAvZVlC6lw\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                            <h1 class=\"display-3\">Video Header</h1>
                            <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
                          </div>
                        </div>
                      </div>
                </div>

                <div class=\"col-md-4 blockVid\">
                      <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1bns8j7I_pbNjE_80CRg5tCWAvZVlC6lw\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                            <h1 class=\"display-3\">Video Header</h1>
                            <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class=\"col-md-4 blockVid\">
                      <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1bns8j7I_pbNjE_80CRg5tCWAvZVlC6lw\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                            <h1 class=\"display-3\">Video Header</h1>
                            <p class=\"lead mb-0\">With HTML5 Video and Bootstrap 4</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div>
    </div>

</section>

{# <iframe width=\"1195\" height=\"672\" src=\"https://www.youtube.com/embed/UA8Yd7a08HM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> #}", "/components/index/videoGalleryG-host.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/videoGalleryG-host.twig");
    }
}
