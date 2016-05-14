<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cd27cba283b9545ce3c7c6e766a9b0111d5e5c548311d6966df3b76128b08e0f extends Twig_Template
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
        $__internal_c84f31e0ed2292c7ace38b0e6b9f3d657a8ef1575d37fcc364b69fee22be1f42 = $this->env->getExtension("native_profiler");
        $__internal_c84f31e0ed2292c7ace38b0e6b9f3d657a8ef1575d37fcc364b69fee22be1f42->enter($__internal_c84f31e0ed2292c7ace38b0e6b9f3d657a8ef1575d37fcc364b69fee22be1f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c84f31e0ed2292c7ace38b0e6b9f3d657a8ef1575d37fcc364b69fee22be1f42->leave($__internal_c84f31e0ed2292c7ace38b0e6b9f3d657a8ef1575d37fcc364b69fee22be1f42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
