<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f16a7983e6383b4fe74741c1e30c7006495e95d26f2cb3b9167c4a100cd6c617 extends Twig_Template
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
        $__internal_de613e0686201e30b72731048f4d3bb6c0fef81788da8e4c99b349558a3c32ea = $this->env->getExtension("native_profiler");
        $__internal_de613e0686201e30b72731048f4d3bb6c0fef81788da8e4c99b349558a3c32ea->enter($__internal_de613e0686201e30b72731048f4d3bb6c0fef81788da8e4c99b349558a3c32ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_de613e0686201e30b72731048f4d3bb6c0fef81788da8e4c99b349558a3c32ea->leave($__internal_de613e0686201e30b72731048f4d3bb6c0fef81788da8e4c99b349558a3c32ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
