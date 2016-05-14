<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_faac4bd74f151b2ea4f13e65bb319803aa94130ae19f8b1039ad21a81dbd3bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77cc32a8957c9e882492340231cb4819f02ac798a040e215e278a1f2f4d56097 = $this->env->getExtension("native_profiler");
        $__internal_77cc32a8957c9e882492340231cb4819f02ac798a040e215e278a1f2f4d56097->enter($__internal_77cc32a8957c9e882492340231cb4819f02ac798a040e215e278a1f2f4d56097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77cc32a8957c9e882492340231cb4819f02ac798a040e215e278a1f2f4d56097->leave($__internal_77cc32a8957c9e882492340231cb4819f02ac798a040e215e278a1f2f4d56097_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c238a16e61c4fdb91e96dabc3d6734fd3af019e1e4c28310a16c064eae914cec = $this->env->getExtension("native_profiler");
        $__internal_c238a16e61c4fdb91e96dabc3d6734fd3af019e1e4c28310a16c064eae914cec->enter($__internal_c238a16e61c4fdb91e96dabc3d6734fd3af019e1e4c28310a16c064eae914cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c238a16e61c4fdb91e96dabc3d6734fd3af019e1e4c28310a16c064eae914cec->leave($__internal_c238a16e61c4fdb91e96dabc3d6734fd3af019e1e4c28310a16c064eae914cec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_271a34964a51e323d8abb840e86400c9f97d6e5d2e975e07ed0a033be3be6b5f = $this->env->getExtension("native_profiler");
        $__internal_271a34964a51e323d8abb840e86400c9f97d6e5d2e975e07ed0a033be3be6b5f->enter($__internal_271a34964a51e323d8abb840e86400c9f97d6e5d2e975e07ed0a033be3be6b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_271a34964a51e323d8abb840e86400c9f97d6e5d2e975e07ed0a033be3be6b5f->leave($__internal_271a34964a51e323d8abb840e86400c9f97d6e5d2e975e07ed0a033be3be6b5f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85b61e59fcc0fa120f1781cd5cf5ea0e3217f1168569650d19a7a7562128aa61 = $this->env->getExtension("native_profiler");
        $__internal_85b61e59fcc0fa120f1781cd5cf5ea0e3217f1168569650d19a7a7562128aa61->enter($__internal_85b61e59fcc0fa120f1781cd5cf5ea0e3217f1168569650d19a7a7562128aa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_85b61e59fcc0fa120f1781cd5cf5ea0e3217f1168569650d19a7a7562128aa61->leave($__internal_85b61e59fcc0fa120f1781cd5cf5ea0e3217f1168569650d19a7a7562128aa61_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
