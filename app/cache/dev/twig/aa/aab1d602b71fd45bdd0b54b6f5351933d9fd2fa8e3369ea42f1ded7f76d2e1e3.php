<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_493c2ce11a6fdcc6a5c8a05118602e87aeea86e2b9347bd5874e949b2cbd413f extends Twig_Template
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
        $__internal_ad1b1fb1eb6028c23182724e0ff68a3153599d5f016f192cf8f2817cf537748a = $this->env->getExtension("native_profiler");
        $__internal_ad1b1fb1eb6028c23182724e0ff68a3153599d5f016f192cf8f2817cf537748a->enter($__internal_ad1b1fb1eb6028c23182724e0ff68a3153599d5f016f192cf8f2817cf537748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ad1b1fb1eb6028c23182724e0ff68a3153599d5f016f192cf8f2817cf537748a->leave($__internal_ad1b1fb1eb6028c23182724e0ff68a3153599d5f016f192cf8f2817cf537748a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
