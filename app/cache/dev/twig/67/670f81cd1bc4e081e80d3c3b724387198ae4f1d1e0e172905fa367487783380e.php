<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bd6551e8d3d9cf4166469f684c3f3871e6d14b9c1b983e7042b60cf782d490b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_888202caf7d3fbf18c9b5d411ffa1f5b3090e75fc8a678f235ea8e606d57be3a = $this->env->getExtension("native_profiler");
        $__internal_888202caf7d3fbf18c9b5d411ffa1f5b3090e75fc8a678f235ea8e606d57be3a->enter($__internal_888202caf7d3fbf18c9b5d411ffa1f5b3090e75fc8a678f235ea8e606d57be3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_888202caf7d3fbf18c9b5d411ffa1f5b3090e75fc8a678f235ea8e606d57be3a->leave($__internal_888202caf7d3fbf18c9b5d411ffa1f5b3090e75fc8a678f235ea8e606d57be3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c951a5153baf5ba1b95d092530dfd3f22149ba288dd6d06e9eb02bb27368e62 = $this->env->getExtension("native_profiler");
        $__internal_5c951a5153baf5ba1b95d092530dfd3f22149ba288dd6d06e9eb02bb27368e62->enter($__internal_5c951a5153baf5ba1b95d092530dfd3f22149ba288dd6d06e9eb02bb27368e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5c951a5153baf5ba1b95d092530dfd3f22149ba288dd6d06e9eb02bb27368e62->leave($__internal_5c951a5153baf5ba1b95d092530dfd3f22149ba288dd6d06e9eb02bb27368e62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
