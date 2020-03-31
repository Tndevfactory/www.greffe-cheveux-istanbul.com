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
class __TwigTemplate_7d78ecd5f416da9cc2ab759bf9eca4632da6100f2e453ba44e4dd5529e9be113 extends Template
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
        echo "<!-- Developer: Tn dev factory  -->
<!-- phone: 00216 55 385 474   -->
<!-- email: tndevfactory@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <meta name=\"author\" content=\"barhoumi med chawki tndevfactory\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    ";
        // line 14
        $this->displayBlock('meta', $context, $blocks);
        // line 19
        echo "
     ";
        // line 20
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 20)->display($context);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('head', $context, $blocks);
        // line 25
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
        // line 42
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 42)->display($context);
        // line 43
        $this->loadTemplate("/inc/navbar.html.twig", "layout.twig", 43)->display($context);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "

";
        // line 59
        $this->loadTemplate("./inc/scrollToTop.html.twig", "layout.twig", 59)->display($context);
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

    // line 14
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "      <meta name=\"title\" content=\"Greffe cheveux \">
      <meta name=\"description\" content=\"clinique istanbul \">
      <meta name=\"keywords\" content=\"DHI\">
    ";
    }

    // line 22
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "      <title> ";
        echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
        echo "</title>
    ";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "
    ";
        // line 55
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
        return array (  157 => 64,  153 => 63,  148 => 55,  145 => 46,  141 => 45,  134 => 23,  130 => 22,  123 => 15,  119 => 14,  111 => 67,  109 => 63,  106 => 62,  104 => 61,  102 => 60,  100 => 59,  96 => 57,  94 => 45,  91 => 44,  89 => 43,  87 => 42,  68 => 25,  66 => 22,  63 => 21,  61 => 20,  58 => 19,  56 => 14,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Developer: Tn dev factory  -->
<!-- phone: 00216 55 385 474   -->
<!-- email: tndevfactory@gmail.com -->
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


{% include('./inc/scrollToTop.html.twig') %}
{% include('./inc/footer.html.twig') %}
{% include('./inc/scripts.html.twig') %}

{% block script %}


{% endblock  %}

 

</body>
</html>", "layout.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/layout.twig");
    }
}
