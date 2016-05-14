<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d104dc67ff809eede0f2b5cefb876c0fb7e8cf4a03ff8c59fb97ab23e022295a extends Twig_Template
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
        $__internal_bd540a4bf43246fb7322106e9b828d82bba020140db23ce856d0b0ad2192222d = $this->env->getExtension("native_profiler");
        $__internal_bd540a4bf43246fb7322106e9b828d82bba020140db23ce856d0b0ad2192222d->enter($__internal_bd540a4bf43246fb7322106e9b828d82bba020140db23ce856d0b0ad2192222d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bd540a4bf43246fb7322106e9b828d82bba020140db23ce856d0b0ad2192222d->leave($__internal_bd540a4bf43246fb7322106e9b828d82bba020140db23ce856d0b0ad2192222d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
