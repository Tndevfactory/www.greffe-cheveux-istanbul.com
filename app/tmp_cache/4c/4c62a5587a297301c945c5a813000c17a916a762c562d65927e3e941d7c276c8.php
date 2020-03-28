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

/* ./inc/styles.html.twig */
class __TwigTemplate_015d2effcbc9972eca7ae874fb40595db7e9e80bdd205ad540732bc314edcd4c extends Template
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
        echo "  ";
        // line 6
        echo "
  ";
        // line 12
        echo "

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">
<!-- Google Fonts -->
";
        // line 19
        echo "
<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">

<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
  
<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/css/main.css\"> 

";
    }

    public function getTemplateName()
    {
        return "./inc/styles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 32,  50 => 19,  42 => 12,  39 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {# <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/font/css/all.css\">
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/mdb.min.css\" >
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/mdb.min.css\" >
  <link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/main.css\"> #}

  {# <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" /> #}


  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">
<!-- Google Fonts -->
{# font #}

<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">

<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
  
<link rel=\"stylesheet\" href=\"{{URLROOT}}/public/css/main.css\"> 

", "./inc/styles.html.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/inc/styles.html.twig");
    }
}
