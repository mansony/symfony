<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bd9acd6e9759743ebbdd545f5d0ee4986835a1273b3c0dd60c1abc1965d556ff extends Twig_Template
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
        $__internal_f041ff5906da2b6a3c9b039d8000520483554bc523364c7928e1b40020d7cd8e = $this->env->getExtension("native_profiler");
        $__internal_f041ff5906da2b6a3c9b039d8000520483554bc523364c7928e1b40020d7cd8e->enter($__internal_f041ff5906da2b6a3c9b039d8000520483554bc523364c7928e1b40020d7cd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f041ff5906da2b6a3c9b039d8000520483554bc523364c7928e1b40020d7cd8e->leave($__internal_f041ff5906da2b6a3c9b039d8000520483554bc523364c7928e1b40020d7cd8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
