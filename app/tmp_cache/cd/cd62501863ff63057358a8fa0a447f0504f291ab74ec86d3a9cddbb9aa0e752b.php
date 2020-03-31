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

/* /components/contact/page_header.twig */
class __TwigTemplate_64bbbbbd2bd2bb19b8a422ec924fe70cba53e81a2f4da908f5c4b9f5f4205d00 extends Template
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
        echo "<!-- PAGE HEADER -->

 ";
        // line 3
        $this->displayBlock('style', $context, $blocks);
        // line 130
        echo "
  <header id=\"page-header1\">
    <div class=\"container9\">
      <div class=\"row\">
        <div class=\"col-12 m-auto text-center blockVid\">
          <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1fnN1TvhsAd4KzXBcFaMxLvTxuaZiviLc\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                              <h1 class=\"heading\">Contacter-Nous</h1>
                              <hr class=\"hr\">
                              <h2 class=\"sub\">hair&nbsp;Experts</h2>
                          </div>
                        </div>
                      </div>
        </div>
      </div>
    </div>
  </header>

  <script>
  \$(function() {
\t// extract every character using lettering.js
\t\$(\"#page-header1 .heading\").lettering(); 
\t\$(\".sub\").lettering(); 
\t
\t// \t gsap animation
\tgsap.from(\"#page-header1 .heading span\", {
    
\t\tduration: 1,
\t\tx: 100,
\t\trotation: 180,
\t\tscale: 0,
\t\topacity: 0,
\t\tstagger: .1, // delay every character in .1 second
\t\tease: \"bounce.in\"
\t});
\t
\tgsap.from(\"#page-header1 .sub span\", {
\t\tduration: 1,
\t\tx: -100,
\t\topacity: 0,
\t\trotation: 180,
\t\tdelay: 1,
\t\tstagger: .1, // delay every character in .1 second
\t\tease: \"bounce.in\"
\t});
\t
\tgsap.from(\"#page-header1 hr\", {
\t\tduration: 2,
\t\tx: 400,
\t\topacity: 0,
\t\tdelay: 4,
\t\tease: \"circ.out\"
\t});
});
  </script>";
    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

 #page-header1  {
             box-shadow:1px 1px 5px rgba(0,0,0,0.6), -1px -1px 5px rgba(0,0,0,0.6);
              
            }

      #page-header1 h1 {
              font-weight:530;
              color:white;
              font-size:44px;
              text-shadow: 2px 2px 4px #000000;
              line-height:2rem;
              
            }

      #page-header1 h2 {
              font-weight:530;
              color:white;
              font-size:29px;
              text-shadow: 2px 2px 4px #000000;
              letter-spacing: 15px;
\t            text-transform: uppercase;
              
            }

      #page-header1 hr {
                    
        width: 500px;
        margin: 0 auto;
        height: 2px;
        border: none;
        background: linear-gradient(to left, transparent, #fff, transparent);
         
            }

      #page-header1 .heading span,
       #page-header1 .sub span {
          display: inline-block;
        }

      #page-header1 .blockVid{
            position: relative;
            background-color: black;
            height: 15vh;
            min-height: 10rem;
            width: 100%;
            overflow: hidden;
            
          }

        #page-header1  .blockVid video {
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

        #page-header1  .blockVid .caption {
            position: relative;
            z-index: 2;
          }

        #page-header1 .blockVid .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
          }

    
       /* #page-header1 {
          height: 200px;
            background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 

          background-position: 0 -360px;
          background-attachment: fixed;
          color: #fff;
          border-bottom: 1px #eee solid;
          padding-top: 50px;
        }*/








 @media(max-width:900px){
              
                  #page-header1 h1{
                      font-size:25px;
                      
                    }

                  #page-header1 h2{
                      font-size:20px;
                    }

                  #page-header1 h3{
                      font-size:18px;
                    }

                  #page-header1 p{
                      font-size:16px;
                    }
                  }



      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/components/contact/page_header.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 3,  44 => 130,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- PAGE HEADER -->

 {% block style %}   
      <style>

 #page-header1  {
             box-shadow:1px 1px 5px rgba(0,0,0,0.6), -1px -1px 5px rgba(0,0,0,0.6);
              
            }

      #page-header1 h1 {
              font-weight:530;
              color:white;
              font-size:44px;
              text-shadow: 2px 2px 4px #000000;
              line-height:2rem;
              
            }

      #page-header1 h2 {
              font-weight:530;
              color:white;
              font-size:29px;
              text-shadow: 2px 2px 4px #000000;
              letter-spacing: 15px;
\t            text-transform: uppercase;
              
            }

      #page-header1 hr {
                    
        width: 500px;
        margin: 0 auto;
        height: 2px;
        border: none;
        background: linear-gradient(to left, transparent, #fff, transparent);
         
            }

      #page-header1 .heading span,
       #page-header1 .sub span {
          display: inline-block;
        }

      #page-header1 .blockVid{
            position: relative;
            background-color: black;
            height: 15vh;
            min-height: 10rem;
            width: 100%;
            overflow: hidden;
            
          }

        #page-header1  .blockVid video {
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

        #page-header1  .blockVid .caption {
            position: relative;
            z-index: 2;
          }

        #page-header1 .blockVid .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
          }

    
       /* #page-header1 {
          height: 200px;
            background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 

          background-position: 0 -360px;
          background-attachment: fixed;
          color: #fff;
          border-bottom: 1px #eee solid;
          padding-top: 50px;
        }*/








 @media(max-width:900px){
              
                  #page-header1 h1{
                      font-size:25px;
                      
                    }

                  #page-header1 h2{
                      font-size:20px;
                    }

                  #page-header1 h3{
                      font-size:18px;
                    }

                  #page-header1 p{
                      font-size:16px;
                    }
                  }



      </style>
 
{% endblock  %}

  <header id=\"page-header1\">
    <div class=\"container9\">
      <div class=\"row\">
        <div class=\"col-12 m-auto text-center blockVid\">
          <div class=\"overlay\"></div>

                      <video playsinline=\"playsinline\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"https://drive.google.com/uc?export=view&id=1fnN1TvhsAd4KzXBcFaMxLvTxuaZiviLc\" type=\"video/mp4\">
                      </video>

                      <div class=\"caption h-100\">
                        <div class=\"d-flex h-100 text-center align-items-center\">
                          <div class=\"w-100 text-white\">
                              <h1 class=\"heading\">Contacter-Nous</h1>
                              <hr class=\"hr\">
                              <h2 class=\"sub\">hair&nbsp;Experts</h2>
                          </div>
                        </div>
                      </div>
        </div>
      </div>
    </div>
  </header>

  <script>
  \$(function() {
\t// extract every character using lettering.js
\t\$(\"#page-header1 .heading\").lettering(); 
\t\$(\".sub\").lettering(); 
\t
\t// \t gsap animation
\tgsap.from(\"#page-header1 .heading span\", {
    
\t\tduration: 1,
\t\tx: 100,
\t\trotation: 180,
\t\tscale: 0,
\t\topacity: 0,
\t\tstagger: .1, // delay every character in .1 second
\t\tease: \"bounce.in\"
\t});
\t
\tgsap.from(\"#page-header1 .sub span\", {
\t\tduration: 1,
\t\tx: -100,
\t\topacity: 0,
\t\trotation: 180,
\t\tdelay: 1,
\t\tstagger: .1, // delay every character in .1 second
\t\tease: \"bounce.in\"
\t});
\t
\tgsap.from(\"#page-header1 hr\", {
\t\tduration: 2,
\t\tx: 400,
\t\topacity: 0,
\t\tdelay: 4,
\t\tease: \"circ.out\"
\t});
});
  </script>", "/components/contact/page_header.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/contact/page_header.twig");
    }
}
