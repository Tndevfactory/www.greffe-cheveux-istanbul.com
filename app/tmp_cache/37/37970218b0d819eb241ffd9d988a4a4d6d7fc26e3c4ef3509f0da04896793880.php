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
class __TwigTemplate_ea4f07a95608911cfff952ea26666405908ee2f48d9f39ecce6dd597b8b44aa4 extends Template
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
<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">
<!-- Google Fonts -->
";
        // line 21
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
  


<style>

 @import url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap');

body {
  overflow-x: hidden;
  font-family: 'Poppins', sans-serif;
  
}

.navbar .nav-link {
  font-size: 18px;
  text-transform: uppercase;
  padding-left: 1rem !important;
  padding-right: 1rem !important;
}

.navbar a.nav-link:hover {
 
  border-bottom: 2px solid rgb(11, 146, 224);
  border-radius: 3%;
}

.navbar .nav-link:hover a.nav-link{
    color: #eee;
  
}



.carousel-item {
  height: 580px;
}

 
.carousel-image-1 {
  background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 
  /*img/showcase/image1.jpg*/
  background-size: cover;
}

.carousel-image-2 {
  background-image:url(https://drive.google.com/uc?export=view&id=1XziSn92JmVntkv-mJoYMTBkS4sKmlC7k); 
  /*img/showcase/image2.jpg*/
  background-size: cover;
}

.carousel-image-3 {
  background-image:url(https://drive.google.com/uc?export=view&id=13BiMipQ_e9RSqPbk9zq6J-Muxn1nlWow); 
   /*img/showcase/image3.jpg*/
  background-size: cover;
}

#home-heading {
  position: relative;
  min-height: 200px;
  background-image:url(https://drive.google.com/uc?export=view&id=1lMYiUfQuH9lVaQAEOuVu7ewHpJEzGiAC); 
  /* ../img/home_heading_section/lights.jpg */
  background-attachment: fixed;
  background-repeat: no-repeat;
  text-align: center;
  color: #fff;
  width: 100%;
  
}

.dark-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

#video-play {
  position: relative;
  min-height: 200px;
  background-image:url(https://drive.google.com/uc?export=view&id=11Lz_FKlZIyvSts2LseOYUKZCBkYUPMpp); 
  /* ../img/video_play_section/media.jpg */
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: 0 -300px;
  text-align: center;
  color: #fff;
  width: 100%;
}

#video-play a {
  color: #fff;
}

#page-header {
  height: 200px;
    background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 

  /* ../img/showcase/image1.jpg */
  background-position: 0 -360px;
  background-attachment: fixed;
  color: #fff;
  border-bottom: 1px #eee solid;
  padding-top: 50px;
}

.about-img {
  margin-top: -50px;
}

#faq .card {
  border: #444;
}

#faq a {
  color: #fff;
  text-decoration: none;
}

#faq .card-body,
#faq .card-header {
  background: #333;
}

#main-footer {
  background: #000;
  color: #fff;
}

</style>

";
    }

    public function getTemplateName()
    {
        return "./inc/styles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  42 => 12,  39 => 6,  37 => 1,);
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

<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

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
  


<style>

 @import url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap');

body {
  overflow-x: hidden;
  font-family: 'Poppins', sans-serif;
  
}

.navbar .nav-link {
  font-size: 18px;
  text-transform: uppercase;
  padding-left: 1rem !important;
  padding-right: 1rem !important;
}

.navbar a.nav-link:hover {
 
  border-bottom: 2px solid rgb(11, 146, 224);
  border-radius: 3%;
}

.navbar .nav-link:hover a.nav-link{
    color: #eee;
  
}



.carousel-item {
  height: 580px;
}

 
.carousel-image-1 {
  background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 
  /*img/showcase/image1.jpg*/
  background-size: cover;
}

.carousel-image-2 {
  background-image:url(https://drive.google.com/uc?export=view&id=1XziSn92JmVntkv-mJoYMTBkS4sKmlC7k); 
  /*img/showcase/image2.jpg*/
  background-size: cover;
}

.carousel-image-3 {
  background-image:url(https://drive.google.com/uc?export=view&id=13BiMipQ_e9RSqPbk9zq6J-Muxn1nlWow); 
   /*img/showcase/image3.jpg*/
  background-size: cover;
}

#home-heading {
  position: relative;
  min-height: 200px;
  background-image:url(https://drive.google.com/uc?export=view&id=1lMYiUfQuH9lVaQAEOuVu7ewHpJEzGiAC); 
  /* ../img/home_heading_section/lights.jpg */
  background-attachment: fixed;
  background-repeat: no-repeat;
  text-align: center;
  color: #fff;
  width: 100%;
  
}

.dark-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

#video-play {
  position: relative;
  min-height: 200px;
  background-image:url(https://drive.google.com/uc?export=view&id=11Lz_FKlZIyvSts2LseOYUKZCBkYUPMpp); 
  /* ../img/video_play_section/media.jpg */
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: 0 -300px;
  text-align: center;
  color: #fff;
  width: 100%;
}

#video-play a {
  color: #fff;
}

#page-header {
  height: 200px;
    background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 

  /* ../img/showcase/image1.jpg */
  background-position: 0 -360px;
  background-attachment: fixed;
  color: #fff;
  border-bottom: 1px #eee solid;
  padding-top: 50px;
}

.about-img {
  margin-top: -50px;
}

#faq .card {
  border: #444;
}

#faq a {
  color: #fff;
  text-decoration: none;
}

#faq .card-body,
#faq .card-header {
  background: #333;
}

#main-footer {
  background: #000;
  color: #fff;
}

</style>

", "./inc/styles.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/styles.html.twig");
    }
}
