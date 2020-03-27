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

/* /components/index/lead_form_float.twig */
class __TwigTemplate_bf298587099d1ab4ff1c978f68f921ee7df874a03a3411e6d02ef4547110b863 extends Template
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
        echo "<!-- lead_form_float-->

<style>
form#lead_form_float {
            width:400px;
            position:absolute;
            top:-100px;
            /*left:1000px;*/
            /*visibility:hidden;*/
            z-index:900;
            background: rgb(2,0,36);
            background: linear-gradient(55deg, rgba(2,0,76,1) 3%, rgba(9,9,121,1) 31%, rgba(25,195,229,1) 90%);
            color:white;
            border: 1px solid grey; }

  #btnFormindex2:hover{
  background: rgba(45,125,190,1);
  }
 </style>

<section style=\"position:relative\">
          <form  id=\"lead_form_float\" action=\"#\" method=\"post\" 
          class=\" my-0 p-3 text-center d-none d-xl-block  z-depth-3 \">

            <h4 class=\"text-center  mb-3\">Demander un devis </h4><br>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\" 
                placeholder=\"Votre nom au complet\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\"
                placeholder=\"Votre numéro de téléphone\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\" placeholder=\"Votre adresse email\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"inputGroupSelect22\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
              </div>
              <select class=\"custom-select\" id=\"inputGroupSelect22\">
                <option selected>Intervention souhaitée...</option>
                 <option value=\"1\">greffe cheveux</option>
                          <option value=\"2\">greffe barbe </option>
                          <option value=\"3\">greffe sourcils</option>
              </select>
            </div>

            <br>
              <button 
                  id=\"btnFormindex2\"
                  style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                  class=\"ml-4 rounded btn   z-depth-1 winter-neva-gradient\">
                  Envoyer
              </button>
          </form>
</section>  

 <script>
       
      //  document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
            var w = parseInt(window.innerWidth);
            pos=w-450;
         // document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
          
         

      /*  window.addEventListener('load', function(event){
          var w = parseInt(window.innerWidth);
          
          pos=w-450;
          document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });*/


        window.addEventListener('resize', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
           pos=w-450;
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });

      /*
         gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 }); 
        gsap.to(\".box\", {rotation: -55, x: 10, duration: 4}); */

      window.addEventListener('scroll', function(e){
     
            var docScrollHeight=document.documentElement.scrollHeight;
            var windowScrollHeight=window.innerHeight;
            var endScrollDoc=docScrollHeight - windowScrollHeight;
            var scrolled=Math.ceil(window.scrollY);
            var formHeight=document.getElementById(\"lead_form_float\").clientHeight;
            var posDown=endScrollDoc - (formHeight);

            console.log('docScrollHeight ' + docScrollHeight);
            console.log('windowScrollHeight ' + windowScrollHeight);
            console.log('endScrollDoc ' + endScrollDoc);
            console.log('formHeight ' + formHeight);
            console.log('scrolled ' + scrolled );
            console.log('posDown ' + posDown );
            console.log('scrolled end at ' +  scrolled);

            if( (scrolled < posDown) ){
              document.getElementById(\"lead_form_float\").style.top = (scrolled -200) + 'px';
            }else{
               document.getElementById(\"lead_form_float\").style.visibility = \"hidden\";
            } 
            
            if( (scrolled < posDown) ){
               document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
            }

            });

            /*document.getElementById(\"lead_form_float\").style.top =  (scrolled)+'px';

            if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                document.getElementById(\"lead_form_float\").style.background= \"red\";   
                console.log((scrolledGap)+'px');
            } else {
              
              document.getElementById(\"lead_form_float\").style.background= \"blue\";
            }
        */

</script>";
    }

    public function getTemplateName()
    {
        return "/components/index/lead_form_float.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_float-->

<style>
form#lead_form_float {
            width:400px;
            position:absolute;
            top:-100px;
            /*left:1000px;*/
            /*visibility:hidden;*/
            z-index:900;
            background: rgb(2,0,36);
            background: linear-gradient(55deg, rgba(2,0,76,1) 3%, rgba(9,9,121,1) 31%, rgba(25,195,229,1) 90%);
            color:white;
            border: 1px solid grey; }

  #btnFormindex2:hover{
  background: rgba(45,125,190,1);
  }
 </style>

<section style=\"position:relative\">
          <form  id=\"lead_form_float\" action=\"#\" method=\"post\" 
          class=\" my-0 p-3 text-center d-none d-xl-block  z-depth-3 \">

            <h4 class=\"text-center  mb-3\">Demander un devis </h4><br>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\" 
                placeholder=\"Votre nom au complet\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\"
                placeholder=\"Votre numéro de téléphone\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">
                <i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
              </div>
              <input type=\"text\" class=\"form-control\" placeholder=\"Votre adresse email\" >
            </div>

            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"inputGroupSelect22\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
              </div>
              <select class=\"custom-select\" id=\"inputGroupSelect22\">
                <option selected>Intervention souhaitée...</option>
                 <option value=\"1\">greffe cheveux</option>
                          <option value=\"2\">greffe barbe </option>
                          <option value=\"3\">greffe sourcils</option>
              </select>
            </div>

            <br>
              <button 
                  id=\"btnFormindex2\"
                  style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                  class=\"ml-4 rounded btn   z-depth-1 winter-neva-gradient\">
                  Envoyer
              </button>
          </form>
</section>  

 <script>
       
      //  document.getElementById(\"lead_form_float\").style.visibility = \"hidden\"; 
            var w = parseInt(window.innerWidth);
            pos=w-450;
         // document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
          
         

      /*  window.addEventListener('load', function(event){
          var w = parseInt(window.innerWidth);
          
          pos=w-450;
          document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });*/


        window.addEventListener('resize', function(event){
          var w = parseInt(window.innerWidth);
          var h = parseInt(window.innerHeight);
           pos=w-450;
          document.getElementById(\"lead_form_float\").style.left = pos + 'px';
        });

      /*
         gsap.from(\".box\", { opacity: 0,  y: 100,  duration: 1 }); 
        gsap.to(\".box\", {rotation: -55, x: 10, duration: 4}); */

      window.addEventListener('scroll', function(e){
     
            var docScrollHeight=document.documentElement.scrollHeight;
            var windowScrollHeight=window.innerHeight;
            var endScrollDoc=docScrollHeight - windowScrollHeight;
            var scrolled=Math.ceil(window.scrollY);
            var formHeight=document.getElementById(\"lead_form_float\").clientHeight;
            var posDown=endScrollDoc - (formHeight);

            console.log('docScrollHeight ' + docScrollHeight);
            console.log('windowScrollHeight ' + windowScrollHeight);
            console.log('endScrollDoc ' + endScrollDoc);
            console.log('formHeight ' + formHeight);
            console.log('scrolled ' + scrolled );
            console.log('posDown ' + posDown );
            console.log('scrolled end at ' +  scrolled);

            if( (scrolled < posDown) ){
              document.getElementById(\"lead_form_float\").style.top = (scrolled -200) + 'px';
            }else{
               document.getElementById(\"lead_form_float\").style.visibility = \"hidden\";
            } 
            
            if( (scrolled < posDown) ){
               document.getElementById(\"lead_form_float\").style.visibility = \"visible\";
            }

            });

            /*document.getElementById(\"lead_form_float\").style.top =  (scrolled)+'px';

            if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                document.getElementById(\"lead_form_float\").style.background= \"red\";   
                console.log((scrolledGap)+'px');
            } else {
              
              document.getElementById(\"lead_form_float\").style.background= \"blue\";
            }
        */

</script>", "/components/index/lead_form_float.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/lead_form_float.twig");
    }
}
