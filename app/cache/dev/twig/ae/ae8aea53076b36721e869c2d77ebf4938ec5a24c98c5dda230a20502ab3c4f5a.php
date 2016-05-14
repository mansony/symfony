<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6025eb822a4741f21d403fe0421e5ba58f6e60317d38e13062657e7355b8c89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0db45f0df30c095a48f1f1ddf382e55700e58d0c5877170a23e8cbfae023d979 = $this->env->getExtension("native_profiler");
        $__internal_0db45f0df30c095a48f1f1ddf382e55700e58d0c5877170a23e8cbfae023d979->enter($__internal_0db45f0df30c095a48f1f1ddf382e55700e58d0c5877170a23e8cbfae023d979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0db45f0df30c095a48f1f1ddf382e55700e58d0c5877170a23e8cbfae023d979->leave($__internal_0db45f0df30c095a48f1f1ddf382e55700e58d0c5877170a23e8cbfae023d979_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
