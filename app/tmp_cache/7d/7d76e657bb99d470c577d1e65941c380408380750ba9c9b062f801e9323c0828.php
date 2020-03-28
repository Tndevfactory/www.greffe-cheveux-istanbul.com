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

/* layout.twig */
class __TwigTemplate_668e7ead3066524520596b94b1022be785d23d89d0d69a15047917b36b124619 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Developer: Chawki   -->
<!-- phone: 00216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"barhoumi med chawki tndevfactory\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    ";
        // line 15
        $this->displayBlock('meta', $context, $blocks);
        // line 20
        echo "
     ";
        // line 21
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 21)->display($context);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-161994021-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161994021-1');
</script>



</head>

<body class=\"d-flex flex-column \" >

";
        // line 43
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 43)->display($context);
        // line 44
        $this->loadTemplate("/inc/navbar.html.twig", "layout.twig", 44)->display($context);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "

";
        // line 60
        $this->loadTemplate("./inc/footer.html.twig", "layout.twig", 60)->display($context);
        // line 61
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 61)->display($context);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('script', $context, $blocks);
        // line 67
        echo "
 

</body>
</html>";
    }

    // line 15
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "      <meta name=\"title\" content=\"Greffe cheveux \">
      <meta name=\"description\" content=\"clinique istanbul \">
      <meta name=\"keywords\" content=\"DHI\">
    ";
    }

    // line 23
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "      <title> ";
        echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
        echo "</title>
    ";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "
    ";
        // line 56
        echo "
";
    }

    // line 63
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "

";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 64,  152 => 63,  147 => 56,  144 => 47,  140 => 46,  133 => 24,  129 => 23,  122 => 16,  118 => 15,  110 => 67,  108 => 63,  105 => 62,  103 => 61,  101 => 60,  97 => 58,  95 => 46,  92 => 45,  90 => 44,  88 => 43,  69 => 26,  67 => 23,  64 => 22,  62 => 21,  59 => 20,  57 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Developer: Chawki   -->
<!-- phone: 00216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"barhoumi med chawki tndevfactory\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    {% block meta %}
      <meta name=\"title\" content=\"Greffe cheveux \">
      <meta name=\"description\" content=\"clinique istanbul \">
      <meta name=\"keywords\" content=\"DHI\">
    {% endblock  %}

     {% include('./inc/styles.html.twig') %}

    {% block head %}
      <title> {{SITENAME}}</title>
    {% endblock  %}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-161994021-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161994021-1');
</script>



</head>

<body class=\"d-flex flex-column \" >

{% include('/inc/header.html.twig') %}
{% include('/inc/navbar.html.twig') %}

{% block content %}

    {# {% block carousel %} {% endblock  %}
    {% block lead_form %} {% endblock  %}
    {% block home_icon_section %}{% endblock  %}
    {% block home_heading_section %}{% endblock  %}
    {% block info_section %}{% endblock  %}
    {% block video_play_section %}{% endblock  %}
    {% block photo_gallery_section %}{% endblock  %}
    {% block newsletter_section %}{% endblock  %} #}

{% endblock  %}


{% include('./inc/footer.html.twig') %}
{% include('./inc/scripts.html.twig') %}

{% block script %}


{% endblock  %}

 

</body>
</html>", "layout.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/layout.twig");
    }
}
