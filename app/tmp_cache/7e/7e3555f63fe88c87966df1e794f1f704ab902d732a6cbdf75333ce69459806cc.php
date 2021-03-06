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

/* /components/index/photo_gallery_section.twig */
class __TwigTemplate_64ef5cc06e9a652fc297a4eb5045e644a3c96ae2fd2e863b82a87887c77aef05 extends Template
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
        $this->displayBlock('style', $context, $blocks);
        // line 35
        echo "
<!-- PHOTO GALLERY -->
<!-- photo_gallery_section -->
  <section id=\"photo-gallery\" class=\"py-5\">
    <div class=\"container\">
      <h1 class=\"pb-3 text-center\">Photos greffes cheveux avant-après </h1>

      <div class=\"row mb-4\">
        <div class=\"col-md-4 \" data-aos=\"zoom-in-right\">
          <a href=\"https://drive.google.com/uc?export=view&id=1UDqYew-reYJy62o7xS_OgMRznaUSHuoB\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"https://drive.google.com/uc?export=view&id=1UDqYew-reYJy62o7xS_OgMRznaUSHuoB\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\" data-aos=\"zoom-in\">
          <a href=\"https://drive.google.com/uc?export=view&id=1PYncFtUyCNEmtM4DkaKDkOnSOVObSY-y\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"https://drive.google.com/uc?export=view&id=1PYncFtUyCNEmtM4DkaKDkOnSOVObSY-y\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

          <div class=\"col-md-4\" data-aos=\"zoom-in-left\">
            <a href=\"https://drive.google.com/uc?export=view&id=1CxxlF8SU0Rz4l2dhW7D_h8Yoh1OePJxW\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
              data-width=\"560\">
              <img src=\"https://drive.google.com/uc?export=view&id=1CxxlF8SU0Rz4l2dhW7D_h8Yoh1OePJxW\" alt=\"\" class=\"img-fluid\">
            </a>
          </div>
      </div>
      <div class=\"row mb-4\">
        <div class=\"col-md-4\" data-aos=\"zoom-in-right\">
          <a href=\"https://drive.google.com/uc?export=view&id=1XfnCqqLlqDY6tF0rKMv2nlNV4CgOWj3X\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"https://drive.google.com/uc?export=view&id=1XfnCqqLlqDY6tF0rKMv2nlNV4CgOWj3X\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\" data-aos=\"zoom-in\">
          <a href=\"https://drive.google.com/uc?export=view&id=1Y3Jg_b2Uc5M83hzL6m-0gaSuRE9u-W9M\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"https://drive.google.com/uc?export=view&id=1Y3Jg_b2Uc5M83hzL6m-0gaSuRE9u-W9M\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

          <div class=\"col-md-4\" data-aos=\"zoom-in-left\">
            <a href=\"https://drive.google.com/uc?export=view&id=1nLiQmRZOXn2VGlQ6eZ8KYPJo8x06W31j\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
              data-width=\"560\">
              <img src=\"https://drive.google.com/uc?export=view&id=1nLiQmRZOXn2VGlQ6eZ8KYPJo8x06W31j\" alt=\"\" class=\"img-fluid\">
            </a>
          </div>
      </div>

     


    </div>
  </section>";
    }

    // line 1
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

       #photo-gallery h1{
         z-index:999;
         
         position:relative;
       
        margin-top:-77px;

              font-weight:600;
              color:#0099cc;
              font-size:33px;

       }

      

      
         @media(max-width:900px){
            
                #photo-gallery h1{
                z-index:999;
                 font-weight:600;
              color:#0099cc;
                position:relative;
                font-size:24px;
                margin-top:0px;
              }
       }

      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/index/photo_gallery_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 1,  40 => 35,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block style %}   
      <style>

       #photo-gallery h1{
         z-index:999;
         
         position:relative;
       
        margin-top:-77px;

              font-weight:600;
              color:#0099cc;
              font-size:33px;

       }

      

      
         @media(max-width:900px){
            
                #photo-gallery h1{
                z-index:999;
                 font-weight:600;
              color:#0099cc;
                position:relative;
                font-size:24px;
                margin-top:0px;
              }
       }

      </style>
 
{% endblock  %}

<!-- PHOTO GALLERY -->
<!-- photo_gallery_section -->
  <section id=\"photo-gallery\" class=\"py-5\">
    <div class=\"container\">
      <h1 class=\"pb-3 text-center\">Photos greffes cheveux avant-après </h1>

      <div class=\"row mb-4\">
        <div class=\"col-md-4 \" data-aos=\"zoom-in-right\">
          <a href=\"https://drive.google.com/uc?export=view&id=1UDqYew-reYJy62o7xS_OgMRznaUSHuoB\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"https://drive.google.com/uc?export=view&id=1UDqYew-reYJy62o7xS_OgMRznaUSHuoB\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\" data-aos=\"zoom-in\">
          <a href=\"https://drive.google.com/uc?export=view&id=1PYncFtUyCNEmtM4DkaKDkOnSOVObSY-y\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"https://drive.google.com/uc?export=view&id=1PYncFtUyCNEmtM4DkaKDkOnSOVObSY-y\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

          <div class=\"col-md-4\" data-aos=\"zoom-in-left\">
            <a href=\"https://drive.google.com/uc?export=view&id=1CxxlF8SU0Rz4l2dhW7D_h8Yoh1OePJxW\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
              data-width=\"560\">
              <img src=\"https://drive.google.com/uc?export=view&id=1CxxlF8SU0Rz4l2dhW7D_h8Yoh1OePJxW\" alt=\"\" class=\"img-fluid\">
            </a>
          </div>
      </div>
      <div class=\"row mb-4\">
        <div class=\"col-md-4\" data-aos=\"zoom-in-right\">
          <a href=\"https://drive.google.com/uc?export=view&id=1XfnCqqLlqDY6tF0rKMv2nlNV4CgOWj3X\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"https://drive.google.com/uc?export=view&id=1XfnCqqLlqDY6tF0rKMv2nlNV4CgOWj3X\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\" data-aos=\"zoom-in\">
          <a href=\"https://drive.google.com/uc?export=view&id=1Y3Jg_b2Uc5M83hzL6m-0gaSuRE9u-W9M\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"https://drive.google.com/uc?export=view&id=1Y3Jg_b2Uc5M83hzL6m-0gaSuRE9u-W9M\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

          <div class=\"col-md-4\" data-aos=\"zoom-in-left\">
            <a href=\"https://drive.google.com/uc?export=view&id=1nLiQmRZOXn2VGlQ6eZ8KYPJo8x06W31j\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
              data-width=\"560\">
              <img src=\"https://drive.google.com/uc?export=view&id=1nLiQmRZOXn2VGlQ6eZ8KYPJo8x06W31j\" alt=\"\" class=\"img-fluid\">
            </a>
          </div>
      </div>

     


    </div>
  </section>", "/components/index/photo_gallery_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/photo_gallery_section.twig");
    }
}
