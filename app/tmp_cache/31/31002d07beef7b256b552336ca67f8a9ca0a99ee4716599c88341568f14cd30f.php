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

/* ./inc/scrollToTop.html.twig */
class __TwigTemplate_4824c299fa416bd360a0706f92f6cfc300446fc5ee913833f4011c7ebca1465f extends Template
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
        echo "<!-- scroll to top button-->


";
        // line 4
        $this->displayBlock('style', $context, $blocks);
        // line 39
        echo "
<div id=\"scroll_to_top\" >

            <a href=\"#\" class=\"go-top\"><i class=\"animated fadeOutUp infinite fas fa-angle-double-up fa-3x\"></i></a>
";
        // line 44
        echo "</div>

<script>

\$(document).ready(function() {

    // Show or hide the sticky footer button
    \$(window).scroll(function() {
        if (\$(this).scrollTop() > 200) {
            \$('.go-top').fadeIn(200);
        } else {
            \$('.go-top').fadeOut(200);
        }
    });
    
    // Animate the scroll to top
    \$('.go-top').click(function(event) {
        event.preventDefault();
        
        \$('html, body').animate({scrollTop: 0}, 300);
    })
});

</script>






 ";
    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

      #scroll_to_top .go-top {
        position: fixed;
        bottom: 2.5em;
        right: 2em;
        text-decoration: none;
        color: white;
        background-color: rgba(0, 0, 0, 0.3);
        font-size: 12px;
        padding: 15px;
        display: none;
        border-radius:5px;
    }

      #scroll_to_top .go-top:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }
    

      @media(max-width:900px){
      
          #scroll_to_top h1{
              font-size:25px;
              
            }

         
          }
       

      </style>
 
";
    }

    public function getTemplateName()
    {
        return "./inc/scrollToTop.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 4,  51 => 44,  45 => 39,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- scroll to top button-->


{% block style %}   
      <style>

      #scroll_to_top .go-top {
        position: fixed;
        bottom: 2.5em;
        right: 2em;
        text-decoration: none;
        color: white;
        background-color: rgba(0, 0, 0, 0.3);
        font-size: 12px;
        padding: 15px;
        display: none;
        border-radius:5px;
    }

      #scroll_to_top .go-top:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }
    

      @media(max-width:900px){
      
          #scroll_to_top h1{
              font-size:25px;
              
            }

         
          }
       

      </style>
 
{% endblock  %}

<div id=\"scroll_to_top\" >

            <a href=\"#\" class=\"go-top\"><i class=\"animated fadeOutUp infinite fas fa-angle-double-up fa-3x\"></i></a>
{# <i class=\"fas fa-angle-double-up\"></i> #}
</div>

<script>

\$(document).ready(function() {

    // Show or hide the sticky footer button
    \$(window).scroll(function() {
        if (\$(this).scrollTop() > 200) {
            \$('.go-top').fadeIn(200);
        } else {
            \$('.go-top').fadeOut(200);
        }
    });
    
    // Animate the scroll to top
    \$('.go-top').click(function(event) {
        event.preventDefault();
        
        \$('html, body').animate({scrollTop: 0}, 300);
    })
});

</script>






 ", "./inc/scrollToTop.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/scrollToTop.html.twig");
    }
}
