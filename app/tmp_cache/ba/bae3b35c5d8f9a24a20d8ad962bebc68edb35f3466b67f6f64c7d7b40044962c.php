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

/* /components/video_play_section.twig */
class __TwigTemplate_6ed26374febdf196e6a6ccd566d92872408f8a9badff53be30fac382c2301222 extends Template
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
        echo "<!-- VIDEO PLAY -->
<!-- video_play_section -->
  <section id=\"video-play\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container p-5\">
            <a href=\"#\" class=\"video\" data-video=\"https://www.youtube.com/embed/HnwsG9a5riA\" data-toggle=\"modal\" data-target=\"#videoModal\">
              <i class=\"fas fa-play fa-3x\"></i>
            </a>
            <h1>See What We Dolang ";
        // line 11
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "</h1>
          </div>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/video_play_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- VIDEO PLAY -->
<!-- video_play_section -->
  <section id=\"video-play\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container p-5\">
            <a href=\"#\" class=\"video\" data-video=\"https://www.youtube.com/embed/HnwsG9a5riA\" data-toggle=\"modal\" data-target=\"#videoModal\">
              <i class=\"fas fa-play fa-3x\"></i>
            </a>
            <h1>See What We Dolang {{lang}}</h1>
          </div>
        </div>
      </div>
    </div>
  </section>", "/components/video_play_section.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\components\\video_play_section.twig");
    }
}
