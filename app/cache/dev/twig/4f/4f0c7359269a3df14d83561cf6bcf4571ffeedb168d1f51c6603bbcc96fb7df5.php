<?php

/* AccueilBundle::layout.html.twig */
class __TwigTemplate_39818b09b85459001f4bccfdca4219c8747f918aad93c7ac745fdc51526bdfbd extends Twig_Template
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
        $__internal_f601c759230b992f463a78bc1857bf0964ecdb8853f8dbfc1334f488ab4f4b5f = $this->env->getExtension("native_profiler");
        $__internal_f601c759230b992f463a78bc1857bf0964ecdb8853f8dbfc1334f488ab4f4b5f->enter($__internal_f601c759230b992f463a78bc1857bf0964ecdb8853f8dbfc1334f488ab4f4b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle::layout.html.twig"));

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
        
        $__internal_f601c759230b992f463a78bc1857bf0964ecdb8853f8dbfc1334f488ab4f4b5f->leave($__internal_f601c759230b992f463a78bc1857bf0964ecdb8853f8dbfc1334f488ab4f4b5f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d64939e0a22cb78879e61cb9554a95fab205126473c28f6d765e0f9bc5279409 = $this->env->getExtension("native_profiler");
        $__internal_d64939e0a22cb78879e61cb9554a95fab205126473c28f6d765e0f9bc5279409->enter($__internal_d64939e0a22cb78879e61cb9554a95fab205126473c28f6d765e0f9bc5279409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_d64939e0a22cb78879e61cb9554a95fab205126473c28f6d765e0f9bc5279409->leave($__internal_d64939e0a22cb78879e61cb9554a95fab205126473c28f6d765e0f9bc5279409_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a158e980b0248d42afcc04e71d462722c601cfc4f109078e7697f85733d26bae = $this->env->getExtension("native_profiler");
        $__internal_a158e980b0248d42afcc04e71d462722c601cfc4f109078e7697f85733d26bae->enter($__internal_a158e980b0248d42afcc04e71d462722c601cfc4f109078e7697f85733d26bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a158e980b0248d42afcc04e71d462722c601cfc4f109078e7697f85733d26bae->leave($__internal_a158e980b0248d42afcc04e71d462722c601cfc4f109078e7697f85733d26bae_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb48e188f4f7c2ebe84238b7ddc01eac71ffe1242619d5e0b052b8ae2088bdf = $this->env->getExtension("native_profiler");
        $__internal_ecb48e188f4f7c2ebe84238b7ddc01eac71ffe1242619d5e0b052b8ae2088bdf->enter($__internal_ecb48e188f4f7c2ebe84238b7ddc01eac71ffe1242619d5e0b052b8ae2088bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "
        ";
        
        $__internal_ecb48e188f4f7c2ebe84238b7ddc01eac71ffe1242619d5e0b052b8ae2088bdf->leave($__internal_ecb48e188f4f7c2ebe84238b7ddc01eac71ffe1242619d5e0b052b8ae2088bdf_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_327ba5a9431c79e105c40b99a601c894e843cce7e2d2f6c836ad79cc7b91de94 = $this->env->getExtension("native_profiler");
        $__internal_327ba5a9431c79e105c40b99a601c894e843cce7e2d2f6c836ad79cc7b91de94->enter($__internal_327ba5a9431c79e105c40b99a601c894e843cce7e2d2f6c836ad79cc7b91de94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_327ba5a9431c79e105c40b99a601c894e843cce7e2d2f6c836ad79cc7b91de94->leave($__internal_327ba5a9431c79e105c40b99a601c894e843cce7e2d2f6c836ad79cc7b91de94_prof);

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
        return array (  186 => 68,  177 => 61,  171 => 60,  163 => 53,  157 => 52,  148 => 24,  144 => 23,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  117 => 13,  111 => 12,  99 => 10,  86 => 124,  84 => 60,  77 => 55,  75 => 52,  66 => 46,  44 => 26,  42 => 12,  37 => 10,  26 => 1,);
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
