<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f36b990b3e1b53d55042acc1d755d65a1a5c56093354cbf2497b6ed7a928250f extends Twig_Template
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
        $__internal_8fc1cf103ab009fe946d2c89048fe37fbd3e6a45116e9a800c4b54374d8fa65f = $this->env->getExtension("native_profiler");
        $__internal_8fc1cf103ab009fe946d2c89048fe37fbd3e6a45116e9a800c4b54374d8fa65f->enter($__internal_8fc1cf103ab009fe946d2c89048fe37fbd3e6a45116e9a800c4b54374d8fa65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8fc1cf103ab009fe946d2c89048fe37fbd3e6a45116e9a800c4b54374d8fa65f->leave($__internal_8fc1cf103ab009fe946d2c89048fe37fbd3e6a45116e9a800c4b54374d8fa65f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
