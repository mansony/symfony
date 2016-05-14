<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cb322115c468cad98d28b6b21893c5c50e06f64c89fcc7d8fb2b1c2855c43e9c extends Twig_Template
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
        $__internal_f486e05297074496511ea429115b16fcf98fba958daec607f67f1ed5a96deac1 = $this->env->getExtension("native_profiler");
        $__internal_f486e05297074496511ea429115b16fcf98fba958daec607f67f1ed5a96deac1->enter($__internal_f486e05297074496511ea429115b16fcf98fba958daec607f67f1ed5a96deac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f486e05297074496511ea429115b16fcf98fba958daec607f67f1ed5a96deac1->leave($__internal_f486e05297074496511ea429115b16fcf98fba958daec607f67f1ed5a96deac1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
