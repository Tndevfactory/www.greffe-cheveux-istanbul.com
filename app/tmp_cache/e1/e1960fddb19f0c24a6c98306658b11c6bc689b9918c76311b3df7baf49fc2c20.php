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

/* \homes\index.twig */
class __TwigTemplate_5ae2ed3ba6508fff7937316ea1e67743d07f1f68d5ca45e19a3bd2f16c8b0b20 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "\\homes\\index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <title> HOME </title>
    
     <style>
         

     </style>

";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('carousel', $context, $blocks);
        // line 21
        echo "   
    ";
        // line 22
        $this->displayBlock('lead_form_float', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('lead_form_fix', $context, $blocks);
        // line 29
        echo "    
    ";
        // line 30
        $this->displayBlock('home_icon_section', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('home_heading_section', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('info_section', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('video_play_section', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('photo_gallery_section', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('newsletter_section', $context, $blocks);
        // line 59
        echo "

";
    }

    // line 18
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
        $this->loadTemplate("/components/index/showcase_caroussel.twig", "\\homes\\index.twig", 19)->display($context);
        // line 20
        echo "    ";
    }

    // line 22
    public function block_lead_form_float($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
          ";
        // line 23
        $this->loadTemplate("/components/index/lead_form_float.twig", "\\homes\\index.twig", 23)->display($context);
        // line 24
        echo "    ";
    }

    // line 26
    public function block_lead_form_fix($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
          ";
        // line 27
        $this->loadTemplate("/components/index/lead_form_fix.twig", "\\homes\\index.twig", 27)->display($context);
        // line 28
        echo "    ";
    }

    // line 30
    public function block_home_icon_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <div class=\"container \">
         ";
        // line 32
        $this->loadTemplate("/components/index/home_icon_section.twig", "\\homes\\index.twig", 32)->display($context);
        // line 33
        echo "        </div>
    ";
    }

    // line 36
    public function block_home_heading_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        ";
        $this->loadTemplate("/components/index/home_heading_section.twig", "\\homes\\index.twig", 37)->display($context);
        // line 38
        echo "    ";
    }

    // line 40
    public function block_info_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "      <div class=\"container \">
        ";
        // line 42
        $this->loadTemplate("/components/index/info_section.twig", "\\homes\\index.twig", 42)->display($context);
        // line 43
        echo "      </div>
    ";
    }

    // line 46
    public function block_video_play_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->loadTemplate("/components/index/video_play_section.twig", "\\homes\\index.twig", 47)->display($context);
        // line 48
        echo "    ";
    }

    // line 50
    public function block_photo_gallery_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "      <div class=\"container \">
        ";
        // line 52
        $this->loadTemplate("/components/index/photo_gallery_section.twig", "\\homes\\index.twig", 52)->display($context);
        // line 53
        echo "      </div>
    ";
    }

    // line 56
    public function block_newsletter_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "      ";
        $this->loadTemplate("/components/index/newsletter_section.twig", "\\homes\\index.twig", 57)->display($context);
        // line 58
        echo "    ";
    }

    public function getTemplateName()
    {
        return "\\homes\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 58,  229 => 57,  225 => 56,  220 => 53,  218 => 52,  215 => 51,  211 => 50,  207 => 48,  204 => 47,  200 => 46,  195 => 43,  193 => 42,  190 => 41,  186 => 40,  182 => 38,  179 => 37,  175 => 36,  170 => 33,  168 => 32,  165 => 31,  161 => 30,  157 => 28,  155 => 27,  149 => 26,  145 => 24,  143 => 23,  137 => 22,  133 => 20,  130 => 19,  126 => 18,  120 => 59,  118 => 56,  115 => 55,  113 => 50,  110 => 49,  108 => 46,  105 => 45,  103 => 40,  100 => 39,  98 => 36,  95 => 35,  93 => 30,  90 => 29,  88 => 26,  85 => 25,  83 => 22,  80 => 21,  78 => 18,  75 => 17,  71 => 16,  60 => 5,  56 => 4,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}

{% block head %}
    <title> HOME </title>
    
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


", "\\homes\\index.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\homes\\index.twig");
    }
}
