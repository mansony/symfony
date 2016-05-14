<?php

/* ::base.html.twig */
class __TwigTemplate_cd70b5144be088763314064894c5fcedf99104aaad4e084f2e3abb4e2a42ed74 extends Twig_Template
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
        $__internal_4205ed9b6abfb65e2ef61d5b689803c6de9af396f3bfd7ed689cb867b4de77f0 = $this->env->getExtension("native_profiler");
        $__internal_4205ed9b6abfb65e2ef61d5b689803c6de9af396f3bfd7ed689cb867b4de77f0->enter($__internal_4205ed9b6abfb65e2ef61d5b689803c6de9af396f3bfd7ed689cb867b4de77f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4205ed9b6abfb65e2ef61d5b689803c6de9af396f3bfd7ed689cb867b4de77f0->leave($__internal_4205ed9b6abfb65e2ef61d5b689803c6de9af396f3bfd7ed689cb867b4de77f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8017ad20daad74800c4d7d61887c1f90fac9447691e19953e9ae2e3ac1ea920e = $this->env->getExtension("native_profiler");
        $__internal_8017ad20daad74800c4d7d61887c1f90fac9447691e19953e9ae2e3ac1ea920e->enter($__internal_8017ad20daad74800c4d7d61887c1f90fac9447691e19953e9ae2e3ac1ea920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Soyez les bienvenues!";
        
        $__internal_8017ad20daad74800c4d7d61887c1f90fac9447691e19953e9ae2e3ac1ea920e->leave($__internal_8017ad20daad74800c4d7d61887c1f90fac9447691e19953e9ae2e3ac1ea920e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57b45c9045a404618bc9210897728b0c000be64af71956866619db04ea4cd45c = $this->env->getExtension("native_profiler");
        $__internal_57b45c9045a404618bc9210897728b0c000be64af71956866619db04ea4cd45c->enter($__internal_57b45c9045a404618bc9210897728b0c000be64af71956866619db04ea4cd45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57b45c9045a404618bc9210897728b0c000be64af71956866619db04ea4cd45c->leave($__internal_57b45c9045a404618bc9210897728b0c000be64af71956866619db04ea4cd45c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b689379ab5261cb5f9ca0607afcd4c41f5dbab5b8d125cd26e52c6fa104bbdac = $this->env->getExtension("native_profiler");
        $__internal_b689379ab5261cb5f9ca0607afcd4c41f5dbab5b8d125cd26e52c6fa104bbdac->enter($__internal_b689379ab5261cb5f9ca0607afcd4c41f5dbab5b8d125cd26e52c6fa104bbdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b689379ab5261cb5f9ca0607afcd4c41f5dbab5b8d125cd26e52c6fa104bbdac->leave($__internal_b689379ab5261cb5f9ca0607afcd4c41f5dbab5b8d125cd26e52c6fa104bbdac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_801f146485d69ad51f12a2303d35593ae506a1cac038c4fc369c98d21c0abd9a = $this->env->getExtension("native_profiler");
        $__internal_801f146485d69ad51f12a2303d35593ae506a1cac038c4fc369c98d21c0abd9a->enter($__internal_801f146485d69ad51f12a2303d35593ae506a1cac038c4fc369c98d21c0abd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_801f146485d69ad51f12a2303d35593ae506a1cac038c4fc369c98d21c0abd9a->leave($__internal_801f146485d69ad51f12a2303d35593ae506a1cac038c4fc369c98d21c0abd9a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Soyez les bienvenues!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
