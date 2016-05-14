<?php

/* AccueilBundle::layout.html.twig */
class __TwigTemplate_3da0327f34b161f233e7ccfccc8fe5266d06360694d327efaf45153a0fcabe95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Client Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements\"./>

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "




</head>

<body class=\"body\">
<div class=\"container\">
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <a class=\"navbar-brand\" href=\"/museedul/web/\">Accueil</a>
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" width=\"50\">
            </div>
        </div>
    </nav>
    
    <div >
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>

   
</div>

";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "</body>
 <footer class=\"footer\">
      <div class=\"container\">
        <p class=\"text-muted\">Design by Mansony Rolly</p>
      </div>
    </footer>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Musée du Louvre";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"https://bootswatch.com/cosmo/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" media=\"all\"/>
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.flipster.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "
        ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.11.3/jquery-ui.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script> 
    <script src=\"jquery/jquery-ui.min.js\"></script>
    <script src=\"jquery/bootstrap.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flipster.js"), "html", null, true);
        echo "\"></script> 

    <script>
        function DisableTuesday(date) {

            var day = date.getDay();
            if (day == 2) {

                return [false] ;

            } else {

                return nationalDays(date);
            }

        }

        natDays = [
            [5, 1, 'fr'], [11, 1, 'fr'], [12, 25, 'fr']
        ];

        function nationalDays(date) {
            for (i = 0; i < natDays.length; i++) {
                if (date.getMonth() == natDays[i][0] - 1
                        && date.getDate() == natDays[i][1]) {
                    return [false, natDays[i][2] + '_day'];
                }
            }
            return DisableSunday(date);
        }

        function DisableSunday(date) {

            var day = date.getDay();
            if (day == 0) {

                return [false] ;

            } else {

                return [true, ''];
            }

        }

        \$('.date').datepicker({
            dateFormat: 'yy-mm-dd',
            firstDay: 1,
            minDate:0,
            beforeShowDay: DisableTuesday
        });


        \$(function(){ \$(\".flipster\").flipster({ style: 'carousel', start: 0 }); });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AccueilBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 68,  150 => 61,  147 => 60,  142 => 53,  139 => 52,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  102 => 13,  99 => 12,  93 => 10,  83 => 124,  81 => 60,  74 => 55,  72 => 52,  63 => 46,  41 => 26,  39 => 12,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <meta name="keywords" content="Client Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>*/
/* */
/*     <title>{% block title %}Musée du Louvre{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*         <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css" type="text/css" media="all"/>*/
/*         */
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/css.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/jquery.flipster.css') }}">*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*         <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>*/
/*     {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* </head>*/
/* */
/* <body class="body">*/
/* <div class="container">*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/* */
/*                 <a class="navbar-brand" href="/museedul/web/">Accueil</a>*/
/*                 <img src="{{ asset('img/logo.jpg') }}" width="50">*/
/*             </div>*/
/*         </div>*/
/*     </nav>*/
/*     */
/*     <div >*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/* */
/*    */
/* </div>*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> */
/*     <script src="jquery/jquery-ui.min.js"></script>*/
/*     <script src="jquery/bootstrap.min.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ asset('js/jquery.flipster.js') }}"></script> */
/* */
/*     <script>*/
/*         function DisableTuesday(date) {*/
/* */
/*             var day = date.getDay();*/
/*             if (day == 2) {*/
/* */
/*                 return [false] ;*/
/* */
/*             } else {*/
/* */
/*                 return nationalDays(date);*/
/*             }*/
/* */
/*         }*/
/* */
/*         natDays = [*/
/*             [5, 1, 'fr'], [11, 1, 'fr'], [12, 25, 'fr']*/
/*         ];*/
/* */
/*         function nationalDays(date) {*/
/*             for (i = 0; i < natDays.length; i++) {*/
/*                 if (date.getMonth() == natDays[i][0] - 1*/
/*                         && date.getDate() == natDays[i][1]) {*/
/*                     return [false, natDays[i][2] + '_day'];*/
/*                 }*/
/*             }*/
/*             return DisableSunday(date);*/
/*         }*/
/* */
/*         function DisableSunday(date) {*/
/* */
/*             var day = date.getDay();*/
/*             if (day == 0) {*/
/* */
/*                 return [false] ;*/
/* */
/*             } else {*/
/* */
/*                 return [true, ''];*/
/*             }*/
/* */
/*         }*/
/* */
/*         $('.date').datepicker({*/
/*             dateFormat: 'yy-mm-dd',*/
/*             firstDay: 1,*/
/*             minDate:0,*/
/*             beforeShowDay: DisableTuesday*/
/*         });*/
/* */
/* */
/*         $(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });*/
/*     </script>*/
/* {% endblock %}*/
/* </body>*/
/*  <footer class="footer">*/
/*       <div class="container">*/
/*         <p class="text-muted">Design by Mansony Rolly</p>*/
/*       </div>*/
/*     </footer>*/
/* </html>*/
