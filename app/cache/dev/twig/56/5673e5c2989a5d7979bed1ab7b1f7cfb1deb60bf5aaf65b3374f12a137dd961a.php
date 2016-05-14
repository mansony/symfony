<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4f39a3968784920393c0b6c8f1ecc297e63dd58a2c61fd93cd6c3207e77e0f7b extends Twig_Template
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
        $__internal_3879c8e2b1181448018067d41c1ae1ca95965dbb01c84d889e6fd822854d4f2e = $this->env->getExtension("native_profiler");
        $__internal_3879c8e2b1181448018067d41c1ae1ca95965dbb01c84d889e6fd822854d4f2e->enter($__internal_3879c8e2b1181448018067d41c1ae1ca95965dbb01c84d889e6fd822854d4f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3879c8e2b1181448018067d41c1ae1ca95965dbb01c84d889e6fd822854d4f2e->leave($__internal_3879c8e2b1181448018067d41c1ae1ca95965dbb01c84d889e6fd822854d4f2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
