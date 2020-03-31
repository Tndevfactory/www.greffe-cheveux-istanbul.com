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

/* /homes/index.twig */
class __TwigTemplate_fd48423459d98680ac735a49fc7e51a5fd41d43ca75783b76a00692e9b1f3c8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'carousel' => [$this, 'block_carousel'],
            'lead_form_float' => [$this, 'block_lead_form_float'],
            'home_text_intro' => [$this, 'block_home_text_intro'],
            'home_icon_section' => [$this, 'block_home_icon_section'],
            'home_heading_section' => [$this, 'block_home_heading_section'],
            'photo_gallery_section' => [$this, 'block_photo_gallery_section'],
            'home_heading_section2' => [$this, 'block_home_heading_section2'],
            'video_gallery_section' => [$this, 'block_video_gallery_section'],
            'home_text_outro' => [$this, 'block_home_text_outro'],
            'newsletter_section' => [$this, 'block_newsletter_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "/homes/index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <title>Greffe cheveux Istanbul : Prix greffe cheveux Turquie </title>
    <meta name=\"description\" content=\"Greffe de cheveux à Istanbul|Méthode DHI, FUE|Meilleure clinique Turquie,séjour tout compris|Implants capillaires garantis\" />
     <meta name=\"title\" content=\"Greffe de cheveux à Istanbul|Méthode DHI experts hautement qualifiés en greffe de cheveux en Turquie \">
      <meta name=\"keywords\" content=\" experts, hautement qualifiés \">
     <style>
         

     </style>

";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('carousel', $context, $blocks);
        // line 23
        echo "   
    ";
        // line 24
        $this->displayBlock('lead_form_float', $context, $blocks);
        // line 27
        echo "
    ";
        // line 31
        echo "    
    ";
        // line 32
        $this->displayBlock('home_text_intro', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('home_icon_section', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('home_heading_section', $context, $blocks);
        // line 45
        echo "
    ";
        // line 51
        echo "
    ";
        // line 55
        echo "
     ";
        // line 56
        $this->displayBlock('photo_gallery_section', $context, $blocks);
        // line 60
        echo " 


    ";
        // line 63
        $this->displayBlock('home_heading_section2', $context, $blocks);
        // line 66
        echo "    
    
    ";
        // line 68
        $this->displayBlock('video_gallery_section', $context, $blocks);
        // line 72
        echo " 

    ";
        // line 77
        echo "
    ";
        // line 78
        $this->displayBlock('home_text_outro', $context, $blocks);
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock('newsletter_section', $context, $blocks);
        // line 85
        echo "
    ";
        // line 89
        echo "

";
    }

    // line 20
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        ";
        $this->loadTemplate("/components/index/showcase_caroussel.twig", "/homes/index.twig", 21)->display($context);
        // line 22
        echo "    ";
    }

    // line 24
    public function block_lead_form_float($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
          ";
        // line 25
        $this->loadTemplate("/components/index/lead_form_float.twig", "/homes/index.twig", 25)->display($context);
        // line 26
        echo "    ";
    }

    // line 32
    public function block_home_text_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "         ";
        $this->loadTemplate("/components/index/home_text_intro.twig", "/homes/index.twig", 33)->display($context);
        // line 34
        echo "    ";
    }

    // line 36
    public function block_home_icon_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        <div class=\"container \">
         ";
        // line 38
        $this->loadTemplate("/components/index/home_icon_section.twig", "/homes/index.twig", 38)->display($context);
        // line 39
        echo "        </div>
    ";
    }

    // line 42
    public function block_home_heading_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "        ";
        $this->loadTemplate("/components/index/home_heading_section.twig", "/homes/index.twig", 43)->display($context);
        // line 44
        echo "    ";
    }

    // line 56
    public function block_photo_gallery_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "      <div class=\"container \">
        ";
        // line 58
        $this->loadTemplate("/components/index/photo_gallery_section.twig", "/homes/index.twig", 58)->display($context);
        // line 59
        echo "      </div>
    ";
    }

    // line 63
    public function block_home_heading_section2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        ";
        $this->loadTemplate("/components/index/home_heading_section2.twig", "/homes/index.twig", 64)->display($context);
        // line 65
        echo "    ";
    }

    // line 68
    public function block_video_gallery_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "      <div class=\"container \">
        ";
        // line 70
        $this->loadTemplate("/components/index/video_play_gallery_section.twig", "/homes/index.twig", 70)->display($context);
        // line 71
        echo "      </div>
    ";
    }

    // line 78
    public function block_home_text_outro($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "         ";
        $this->loadTemplate("/components/index/home_text_outro.twig", "/homes/index.twig", 79)->display($context);
        // line 80
        echo "    ";
    }

    // line 82
    public function block_newsletter_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "     ";
        $this->loadTemplate("/components/index/lead_form-fix_bottom.twig", "/homes/index.twig", 83)->display($context);
        // line 84
        echo "    ";
    }

    public function getTemplateName()
    {
        return "/homes/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 84,  266 => 83,  262 => 82,  258 => 80,  255 => 79,  251 => 78,  246 => 71,  244 => 70,  241 => 69,  237 => 68,  233 => 65,  230 => 64,  226 => 63,  221 => 59,  219 => 58,  216 => 57,  212 => 56,  208 => 44,  205 => 43,  201 => 42,  196 => 39,  194 => 38,  191 => 37,  187 => 36,  183 => 34,  180 => 33,  176 => 32,  172 => 26,  170 => 25,  164 => 24,  160 => 22,  157 => 21,  153 => 20,  147 => 89,  144 => 85,  142 => 82,  139 => 81,  137 => 78,  134 => 77,  130 => 72,  128 => 68,  124 => 66,  122 => 63,  117 => 60,  115 => 56,  112 => 55,  109 => 51,  106 => 45,  104 => 42,  101 => 41,  99 => 36,  96 => 35,  94 => 32,  91 => 31,  88 => 27,  86 => 24,  83 => 23,  81 => 20,  78 => 19,  74 => 18,  61 => 5,  57 => 4,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}

{% block head %}
    <title>Greffe cheveux Istanbul : Prix greffe cheveux Turquie </title>
    <meta name=\"description\" content=\"Greffe de cheveux à Istanbul|Méthode DHI, FUE|Meilleure clinique Turquie,séjour tout compris|Implants capillaires garantis\" />
     <meta name=\"title\" content=\"Greffe de cheveux à Istanbul|Méthode DHI experts hautement qualifiés en greffe de cheveux en Turquie \">
      <meta name=\"keywords\" content=\" experts, hautement qualifiés \">
     <style>
         

     </style>

{% endblock  %}



{% block content %}

    {% block carousel %}
        {% include('/components/index/showcase_caroussel.twig') %}
    {% endblock  %}
   
    {% block lead_form_float %} 
          {% include('/components/index/lead_form_float.twig') %}
    {% endblock  %}

    {# {% block lead_form_fix %} 
          {% include('/components/index/lead_form_fix.twig') %}
    {% endblock  %} #}
    
    {% block home_text_intro %}
         {% include('/components/index/home_text_intro.twig') %}
    {% endblock  %}

    {% block home_icon_section %}
        <div class=\"container \">
         {% include('/components/index/home_icon_section.twig') %}
        </div>
    {% endblock  %}

    {% block home_heading_section %}
        {% include('/components/index/home_heading_section.twig') %}
    {% endblock  %}

    {# {% block info_section %}
      <div class=\"container \">
        {% include('/components/index/info_section.twig') %}
      </div>
    {% endblock  %} #}

    {# {% block video_play_section %}
    {% include('/components/index/video_play_section.twig') %}
    {% endblock  %} #}

     {% block photo_gallery_section %}
      <div class=\"container \">
        {% include('/components/index/photo_gallery_section.twig') %}
      </div>
    {% endblock  %} 


    {% block home_heading_section2 %}
        {% include('/components/index/home_heading_section2.twig') %}
    {% endblock  %}
    
    
    {% block video_gallery_section %}
      <div class=\"container \">
        {% include('/components/index/video_play_gallery_section.twig') %}
      </div>
    {% endblock  %} 

    {# {% block home_video_ghost %}
         {% include('/components/index/videoGalleryG-host.twig') %}
    {% endblock  %} #}

    {% block home_text_outro %}
         {% include('/components/index/home_text_outro.twig') %}
    {% endblock  %}

    {% block newsletter_section %}
     {% include('/components/index/lead_form-fix_bottom.twig') %}
    {% endblock  %}

    {# {% block lead_form-fix_bottom %}
      {% include('/components/index/lead_form-fix_bottom.twig') %}
    {% endblock  %} #}


{% endblock  %}


", "/homes/index.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/homes/index.twig");
    }
}
