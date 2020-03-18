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
class __TwigTemplate_08bdc07a97d9dd74c5ca771492c1a180a0131db8a56cac0bec6b2f135c9c3963 extends Template
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
            'lead_form_fix' => [$this, 'block_lead_form_fix'],
            'home_icon_section' => [$this, 'block_home_icon_section'],
            'home_heading_section' => [$this, 'block_home_heading_section'],
            'info_section' => [$this, 'block_info_section'],
            'video_play_section' => [$this, 'block_video_play_section'],
            'photo_gallery_section' => [$this, 'block_photo_gallery_section'],
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
    
     <style>
         

     </style>

";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('carousel', $context, $blocks);
        // line 22
        echo "   
    ";
        // line 23
        $this->displayBlock('lead_form_float', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('lead_form_fix', $context, $blocks);
        // line 30
        echo "    
    ";
        // line 31
        $this->displayBlock('home_icon_section', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('home_heading_section', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('info_section', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $this->displayBlock('video_play_section', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('photo_gallery_section', $context, $blocks);
        // line 56
        echo "
    ";
        // line 57
        $this->displayBlock('newsletter_section', $context, $blocks);
        // line 60
        echo "

";
    }

    // line 19
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        ";
        $this->loadTemplate("/components/index/showcase_caroussel.twig", "/homes/index.twig", 20)->display($context);
        // line 21
        echo "    ";
    }

    // line 23
    public function block_lead_form_float($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
          ";
        // line 24
        $this->loadTemplate("/components/index/lead_form_float.twig", "/homes/index.twig", 24)->display($context);
        // line 25
        echo "    ";
    }

    // line 27
    public function block_lead_form_fix($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
          ";
        // line 28
        $this->loadTemplate("/components/index/lead_form_fix.twig", "/homes/index.twig", 28)->display($context);
        // line 29
        echo "    ";
    }

    // line 31
    public function block_home_icon_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <div class=\"container \">
         ";
        // line 33
        $this->loadTemplate("/components/index/home_icon_section.twig", "/homes/index.twig", 33)->display($context);
        // line 34
        echo "        </div>
    ";
    }

    // line 37
    public function block_home_heading_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        ";
        $this->loadTemplate("/components/index/home_heading_section.twig", "/homes/index.twig", 38)->display($context);
        // line 39
        echo "    ";
    }

    // line 41
    public function block_info_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "      <div class=\"container \">
        ";
        // line 43
        $this->loadTemplate("/components/index/info_section.twig", "/homes/index.twig", 43)->display($context);
        // line 44
        echo "      </div>
    ";
    }

    // line 47
    public function block_video_play_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $this->loadTemplate("/components/index/video_play_section.twig", "/homes/index.twig", 48)->display($context);
        // line 49
        echo "    ";
    }

    // line 51
    public function block_photo_gallery_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "      <div class=\"container \">
        ";
        // line 53
        $this->loadTemplate("/components/index/photo_gallery_section.twig", "/homes/index.twig", 53)->display($context);
        // line 54
        echo "      </div>
    ";
    }

    // line 57
    public function block_newsletter_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "      ";
        $this->loadTemplate("/components/index/newsletter_section.twig", "/homes/index.twig", 58)->display($context);
        // line 59
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
        return array (  233 => 59,  230 => 58,  226 => 57,  221 => 54,  219 => 53,  216 => 52,  212 => 51,  208 => 49,  205 => 48,  201 => 47,  196 => 44,  194 => 43,  191 => 42,  187 => 41,  183 => 39,  180 => 38,  176 => 37,  171 => 34,  169 => 33,  166 => 32,  162 => 31,  158 => 29,  156 => 28,  150 => 27,  146 => 25,  144 => 24,  138 => 23,  134 => 21,  131 => 20,  127 => 19,  121 => 60,  119 => 57,  116 => 56,  114 => 51,  111 => 50,  109 => 47,  106 => 46,  104 => 41,  101 => 40,  99 => 37,  96 => 36,  94 => 31,  91 => 30,  89 => 27,  86 => 26,  84 => 23,  81 => 22,  79 => 19,  76 => 18,  72 => 17,  60 => 5,  56 => 4,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}

{% block head %}
    <title>Greffe cheveux Istanbul : Prix greffe cheveux Turquie </title>
    <meta name=\"description\" content=\"Greffe de cheveux à Istanbul|Méthode DHI, FUE|Meilleure clinique Turquie,séjour tout compris|Implants capillaires garantis\" />
    
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

    {% block lead_form_fix %} 
          {% include('/components/index/lead_form_fix.twig') %}
    {% endblock  %}
    
    {% block home_icon_section %}
        <div class=\"container \">
         {% include('/components/index/home_icon_section.twig') %}
        </div>
    {% endblock  %}

    {% block home_heading_section %}
        {% include('/components/index/home_heading_section.twig') %}
    {% endblock  %}

    {% block info_section %}
      <div class=\"container \">
        {% include('/components/index/info_section.twig') %}
      </div>
    {% endblock  %}

    {% block video_play_section %}
    {% include('/components/index/video_play_section.twig') %}
    {% endblock  %}

    {% block photo_gallery_section %}
      <div class=\"container \">
        {% include('/components/index/photo_gallery_section.twig') %}
      </div>
    {% endblock  %}

    {% block newsletter_section %}
      {% include('/components/index/newsletter_section.twig') %}
    {% endblock  %}


{% endblock  %}


", "/homes/index.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/homes/index.twig");
    }
}
