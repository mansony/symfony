<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9416c4c87a6b51f6f2c589c6ee93001753b3a7fd8ece5808291509f26094f921 extends Twig_Template
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
        $__internal_d698314a2feef5fd9f8a810b5cc2c6229baa53f9fa5068a61b5229bc16511e9c = $this->env->getExtension("native_profiler");
        $__internal_d698314a2feef5fd9f8a810b5cc2c6229baa53f9fa5068a61b5229bc16511e9c->enter($__internal_d698314a2feef5fd9f8a810b5cc2c6229baa53f9fa5068a61b5229bc16511e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d698314a2feef5fd9f8a810b5cc2c6229baa53f9fa5068a61b5229bc16511e9c->leave($__internal_d698314a2feef5fd9f8a810b5cc2c6229baa53f9fa5068a61b5229bc16511e9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
