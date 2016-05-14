<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b42fb664011bc65a2cae39e70ce269b7ff60fa1063f7f96586b544d70da7d1bc extends Twig_Template
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
        $__internal_0fb5e16ca724dc3a28bc8f93353a3365ffd50bb5c2e4f6ee3b8a96a9d7027130 = $this->env->getExtension("native_profiler");
        $__internal_0fb5e16ca724dc3a28bc8f93353a3365ffd50bb5c2e4f6ee3b8a96a9d7027130->enter($__internal_0fb5e16ca724dc3a28bc8f93353a3365ffd50bb5c2e4f6ee3b8a96a9d7027130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0fb5e16ca724dc3a28bc8f93353a3365ffd50bb5c2e4f6ee3b8a96a9d7027130->leave($__internal_0fb5e16ca724dc3a28bc8f93353a3365ffd50bb5c2e4f6ee3b8a96a9d7027130_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
