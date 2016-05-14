<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d2a00ddc45c84ec809ee4f9f1d23d9d4b9e9079e75b303144a1893717d7e1b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_110ac585140381999addac232380cfecfa657b792c30690cb82ea5acb9e33772 = $this->env->getExtension("native_profiler");
        $__internal_110ac585140381999addac232380cfecfa657b792c30690cb82ea5acb9e33772->enter($__internal_110ac585140381999addac232380cfecfa657b792c30690cb82ea5acb9e33772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110ac585140381999addac232380cfecfa657b792c30690cb82ea5acb9e33772->leave($__internal_110ac585140381999addac232380cfecfa657b792c30690cb82ea5acb9e33772_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c79dbb3ed080779abae43fda57aebdc3d9ea8b2e47626e6b06e414d013647f14 = $this->env->getExtension("native_profiler");
        $__internal_c79dbb3ed080779abae43fda57aebdc3d9ea8b2e47626e6b06e414d013647f14->enter($__internal_c79dbb3ed080779abae43fda57aebdc3d9ea8b2e47626e6b06e414d013647f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c79dbb3ed080779abae43fda57aebdc3d9ea8b2e47626e6b06e414d013647f14->leave($__internal_c79dbb3ed080779abae43fda57aebdc3d9ea8b2e47626e6b06e414d013647f14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f4784d65b0771deee3980c258df24889e089e8b5a9ce712210554668e495e9a = $this->env->getExtension("native_profiler");
        $__internal_5f4784d65b0771deee3980c258df24889e089e8b5a9ce712210554668e495e9a->enter($__internal_5f4784d65b0771deee3980c258df24889e089e8b5a9ce712210554668e495e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f4784d65b0771deee3980c258df24889e089e8b5a9ce712210554668e495e9a->leave($__internal_5f4784d65b0771deee3980c258df24889e089e8b5a9ce712210554668e495e9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66384a12d8bb04d9bb604c425b94e38f5026143fec254ffdae27a2353671350b = $this->env->getExtension("native_profiler");
        $__internal_66384a12d8bb04d9bb604c425b94e38f5026143fec254ffdae27a2353671350b->enter($__internal_66384a12d8bb04d9bb604c425b94e38f5026143fec254ffdae27a2353671350b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66384a12d8bb04d9bb604c425b94e38f5026143fec254ffdae27a2353671350b->leave($__internal_66384a12d8bb04d9bb604c425b94e38f5026143fec254ffdae27a2353671350b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
