<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_881d8dca8119431d8ddf73393ca42979c5d94b8828714423622af774b168b10a extends Twig_Template
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
        $__internal_69ccc06f355de7479ec680ec5d0352d57d5d1fbb09a787b1d23ed2ebdcc6ff42 = $this->env->getExtension("native_profiler");
        $__internal_69ccc06f355de7479ec680ec5d0352d57d5d1fbb09a787b1d23ed2ebdcc6ff42->enter($__internal_69ccc06f355de7479ec680ec5d0352d57d5d1fbb09a787b1d23ed2ebdcc6ff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_69ccc06f355de7479ec680ec5d0352d57d5d1fbb09a787b1d23ed2ebdcc6ff42->leave($__internal_69ccc06f355de7479ec680ec5d0352d57d5d1fbb09a787b1d23ed2ebdcc6ff42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
