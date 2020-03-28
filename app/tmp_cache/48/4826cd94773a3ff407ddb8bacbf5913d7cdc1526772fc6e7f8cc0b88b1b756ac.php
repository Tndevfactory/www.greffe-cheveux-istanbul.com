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
class __TwigTemplate_d1f2eefec0519ac30423210a35e7e7a4af1a7cc834ad90d0a507bb43dd952590 extends Template
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
        // line 28
        $this->displayBlock('lead_form_fix', $context, $blocks);
        // line 31
        echo "    
    ";
        // line 32
        $this->displayBlock('home_icon_section', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('home_heading_section', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('info_section', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('video_play_section', $context, $blocks);
        // line 51
        echo "
    ";
        // line 52
        $this->displayBlock('photo_gallery_section', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('newsletter_section', $context, $blocks);
        // line 61
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

    // line 28
    public function block_lead_form_fix($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
          ";
        // line 29
        $this->loadTemplate("/components/index/lead_form_fix.twig", "/homes/index.twig", 29)->display($context);
        // line 30
        echo "    ";
    }

    // line 32
    public function block_home_icon_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "        <div class=\"container \">
         ";
        // line 34
        $this->loadTemplate("/components/index/home_icon_section.twig", "/homes/index.twig", 34)->display($context);
        // line 35
        echo "        </div>
    ";
    }

    // line 38
    public function block_home_heading_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        ";
        $this->loadTemplate("/components/index/home_heading_section.twig", "/homes/index.twig", 39)->display($context);
        // line 40
        echo "    ";
    }

    // line 42
    public function block_info_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "      <div class=\"container \">
        ";
        // line 44
        $this->loadTemplate("/components/index/info_section.twig", "/homes/index.twig", 44)->display($context);
        // line 45
        echo "      </div>
    ";
    }

    // line 48
    public function block_video_play_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        $this->loadTemplate("/components/index/video_play_section.twig", "/homes/index.twig", 49)->display($context);
        // line 50
        echo "    ";
    }

    // line 52
    public function block_photo_gallery_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "      <div class=\"container \">
        ";
        // line 54
        $this->loadTemplate("/components/index/photo_gallery_section.twig", "/homes/index.twig", 54)->display($context);
        // line 55
        echo "      </div>
    ";
    }

    // line 58
    public function block_newsletter_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "      ";
        $this->loadTemplate("/components/index/newsletter_section.twig", "/homes/index.twig", 59)->display($context);
        // line 60
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
        return array (  234 => 60,  231 => 59,  227 => 58,  222 => 55,  220 => 54,  217 => 53,  213 => 52,  209 => 50,  206 => 49,  202 => 48,  197 => 45,  195 => 44,  192 => 43,  188 => 42,  184 => 40,  181 => 39,  177 => 38,  172 => 35,  170 => 34,  167 => 33,  163 => 32,  159 => 30,  157 => 29,  151 => 28,  147 => 26,  145 => 25,  139 => 24,  135 => 22,  132 => 21,  128 => 20,  122 => 61,  120 => 58,  117 => 57,  115 => 52,  112 => 51,  110 => 48,  107 => 47,  105 => 42,  102 => 41,  100 => 38,  97 => 37,  95 => 32,  92 => 31,  90 => 28,  87 => 27,  85 => 24,  82 => 23,  80 => 20,  77 => 19,  73 => 18,  60 => 5,  56 => 4,  45 => 2,);
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


", "/homes/index.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/homes/index.twig");
    }
}
