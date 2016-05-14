<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c34c9303793c45be7a6029e2a00aefc7b8b42254771b47a24152264c84cc95da extends Twig_Template
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
        $__internal_f9718d1f0dc70d43e7a14d54994a4af3ea1df737b5648772d2118a5cbdf8532b = $this->env->getExtension("native_profiler");
        $__internal_f9718d1f0dc70d43e7a14d54994a4af3ea1df737b5648772d2118a5cbdf8532b->enter($__internal_f9718d1f0dc70d43e7a14d54994a4af3ea1df737b5648772d2118a5cbdf8532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f9718d1f0dc70d43e7a14d54994a4af3ea1df737b5648772d2118a5cbdf8532b->leave($__internal_f9718d1f0dc70d43e7a14d54994a4af3ea1df737b5648772d2118a5cbdf8532b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
