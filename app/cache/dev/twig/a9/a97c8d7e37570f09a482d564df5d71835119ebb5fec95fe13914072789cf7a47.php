<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_094fadaf9f1e50ce3f242b723378aa93694c9571c246caa618ed160c4f6bb2e7 extends Twig_Template
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
        $__internal_c8d34354af6b10ed4a1f811e8a2abb0370d1417ed3581e017b0101744d090bf1 = $this->env->getExtension("native_profiler");
        $__internal_c8d34354af6b10ed4a1f811e8a2abb0370d1417ed3581e017b0101744d090bf1->enter($__internal_c8d34354af6b10ed4a1f811e8a2abb0370d1417ed3581e017b0101744d090bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c8d34354af6b10ed4a1f811e8a2abb0370d1417ed3581e017b0101744d090bf1->leave($__internal_c8d34354af6b10ed4a1f811e8a2abb0370d1417ed3581e017b0101744d090bf1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
