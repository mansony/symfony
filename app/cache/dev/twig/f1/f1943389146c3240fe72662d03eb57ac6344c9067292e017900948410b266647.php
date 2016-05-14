<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_200d84d4909608108681060fef4ae8c1c66317e1211af66c7ff55a2932b21d10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_442389d5de611ba024f55d89e05db1df47842c684a176da0e1139be33f452be7 = $this->env->getExtension("native_profiler");
        $__internal_442389d5de611ba024f55d89e05db1df47842c684a176da0e1139be33f452be7->enter($__internal_442389d5de611ba024f55d89e05db1df47842c684a176da0e1139be33f452be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442389d5de611ba024f55d89e05db1df47842c684a176da0e1139be33f452be7->leave($__internal_442389d5de611ba024f55d89e05db1df47842c684a176da0e1139be33f452be7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3078c35736205c948b594bfc6737b8d20d36791ac230d4bca2847541b371430 = $this->env->getExtension("native_profiler");
        $__internal_c3078c35736205c948b594bfc6737b8d20d36791ac230d4bca2847541b371430->enter($__internal_c3078c35736205c948b594bfc6737b8d20d36791ac230d4bca2847541b371430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c3078c35736205c948b594bfc6737b8d20d36791ac230d4bca2847541b371430->leave($__internal_c3078c35736205c948b594bfc6737b8d20d36791ac230d4bca2847541b371430_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_13456f472982aefca139a67c7c08c905941b743057d6d0b29829aa20ad1cc63f = $this->env->getExtension("native_profiler");
        $__internal_13456f472982aefca139a67c7c08c905941b743057d6d0b29829aa20ad1cc63f->enter($__internal_13456f472982aefca139a67c7c08c905941b743057d6d0b29829aa20ad1cc63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_13456f472982aefca139a67c7c08c905941b743057d6d0b29829aa20ad1cc63f->leave($__internal_13456f472982aefca139a67c7c08c905941b743057d6d0b29829aa20ad1cc63f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
