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

/* /inc/header.html.twig */
class __TwigTemplate_786ad6581ac16c42310821d8b3b6858fefcad0fb1cb0923c221fda412d9b2fa4 extends Template
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
        // line 2
        $this->displayBlock('style', $context, $blocks);
        // line 74
        echo "
<section id=\"greffeHeader\">
    <div  class=\"jumbotron blue-gradient py-3 mb-0 \">
      <div class=\"header-content \">

                  <div class=\"info\">
                    <span> Appeler au </span > 
                    <span> </span > 
                    <span> <i class=\"animated tada fas fa-mobile-alt \"> </i> </span>
                    <span> +90 555 300 6798 </span> 
                  </div> 

                  <div class=\"icons-social\" data-aos=\"zoom-in-right\">
                        <ul class=\"social_icons  d-block d-md-flex text-center list-group list-group-horizontal  justify-content-center \">
                            
                                <li class=\" list-group-item \">
                                    <a href=\"#\" style=\"width:35px;background:#355A96\" title=\"facebook\" class=\"btn  rounded p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-facebook-f \"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\" style=\"width:35px;background:#EB2464\" title=\"instagram\" class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-instagram \"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\" style=\"width:35px;background:#46ADEC\" title=\"twitter\"class=\"btn rounded p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-twitter\"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\"style=\"width:35px;background:#F34D22\" title=\"google-plus\"class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-google-plus-g\"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\" style=\"width:35px;background:#F8F434;color:black\" title=\"snapchat\" class=\"btn rounded  p-2 border-0  z-depth-1 waves-effect\"><i style=\"color:black\" class=\"fab fa-snapchat \"></i></a>
                                </li>

                        </ul>
             
                  </div>
      </div>
    </div>
</section>


";
        // line 124
        echo "
";
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
        #greffeHeader .header-content {
              font-weight:530;
              color:white;
              font-size:33px;
              display:flex;
              justify-content:space-between;
            }

        #greffeHeader .info span:nth-child(1) {
              
              color:white;
              font-size:27px;
              font-style: italic;
            }

        #greffeHeader .info span:nth-child(2)  {
              
              color:#295AAE;
              font-size:40px;
            }

        #greffeHeader .info span:nth-child(3) i{
              
              color:#006400;
              font-size:44px;
              padding-left:5px;
            }

        #greffeHeader .info span:nth-child(4) {
              
              color:#006400;
              font-size:25px;
              font-style: italic;
            }


          #greffeHeader  .social_icons li  {
                      border:none;
                      padding:0;
                      background:transparent;
             }

          #greffeHeader  .social_icons li:hover  {
              border-bottom:1px solid black;
              padding-left:3px;
           }


        @media(max-width:900px){

              #greffeHeader .info span {
              
              color:white;
              font-size:22px;
              display:block;
              
            }

             #greffeHeader .info span:nth-child(3) i{
              display:none;
              
            }

            }

      </style>
 
";
    }

    public function getTemplateName()
    {
        return "/inc/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 2,  92 => 124,  43 => 74,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block style %}   
      <style>

     
        #greffeHeader .header-content {
              font-weight:530;
              color:white;
              font-size:33px;
              display:flex;
              justify-content:space-between;
            }

        #greffeHeader .info span:nth-child(1) {
              
              color:white;
              font-size:27px;
              font-style: italic;
            }

        #greffeHeader .info span:nth-child(2)  {
              
              color:#295AAE;
              font-size:40px;
            }

        #greffeHeader .info span:nth-child(3) i{
              
              color:#006400;
              font-size:44px;
              padding-left:5px;
            }

        #greffeHeader .info span:nth-child(4) {
              
              color:#006400;
              font-size:25px;
              font-style: italic;
            }


          #greffeHeader  .social_icons li  {
                      border:none;
                      padding:0;
                      background:transparent;
             }

          #greffeHeader  .social_icons li:hover  {
              border-bottom:1px solid black;
              padding-left:3px;
           }


        @media(max-width:900px){

              #greffeHeader .info span {
              
              color:white;
              font-size:22px;
              display:block;
              
            }

             #greffeHeader .info span:nth-child(3) i{
              display:none;
              
            }

            }

      </style>
 
{% endblock  %}

<section id=\"greffeHeader\">
    <div  class=\"jumbotron blue-gradient py-3 mb-0 \">
      <div class=\"header-content \">

                  <div class=\"info\">
                    <span> Appeler au </span > 
                    <span> </span > 
                    <span> <i class=\"animated tada fas fa-mobile-alt \"> </i> </span>
                    <span> +90 555 300 6798 </span> 
                  </div> 

                  <div class=\"icons-social\" data-aos=\"zoom-in-right\">
                        <ul class=\"social_icons  d-block d-md-flex text-center list-group list-group-horizontal  justify-content-center \">
                            
                                <li class=\" list-group-item \">
                                    <a href=\"#\" style=\"width:35px;background:#355A96\" title=\"facebook\" class=\"btn  rounded p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-facebook-f \"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\" style=\"width:35px;background:#EB2464\" title=\"instagram\" class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-instagram \"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\" style=\"width:35px;background:#46ADEC\" title=\"twitter\"class=\"btn rounded p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-twitter\"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\"style=\"width:35px;background:#F34D22\" title=\"google-plus\"class=\"btn rounded  p-2 border-0 z-depth-1 waves-effect\">
                                    <i class=\"white-text fab fa-google-plus-g\"></i></a>
                                </li>

                                <li class=\" list-group-item\">
                                    <a href=\"#\" style=\"width:35px;background:#F8F434;color:black\" title=\"snapchat\" class=\"btn rounded  p-2 border-0  z-depth-1 waves-effect\"><i style=\"color:black\" class=\"fab fa-snapchat \"></i></a>
                                </li>

                        </ul>
             
                  </div>
      </div>
    </div>
</section>


{# <a href=\"#\" ><i class=\"fab fa-facebook-messenger\"></i></a>
<a href=\"#\" ><i class=\"far fa-envelope\"></i> </a>
<a href=\"#\" ><i class=\"fab fa-whatsapp\"></i> </a> #}

", "/inc/header.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/header.html.twig");
    }
}
