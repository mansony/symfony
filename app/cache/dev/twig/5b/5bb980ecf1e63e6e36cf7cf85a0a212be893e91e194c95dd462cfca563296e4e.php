<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1bcdcec79719f03b38c85dc851cf5bdacbba50a518b61ca60eb956b44d1c875c extends Twig_Template
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
        $__internal_2451fa5324444c6ae1d43008e07170e799f96b01d494dd7270f3f7c312d3bdf8 = $this->env->getExtension("native_profiler");
        $__internal_2451fa5324444c6ae1d43008e07170e799f96b01d494dd7270f3f7c312d3bdf8->enter($__internal_2451fa5324444c6ae1d43008e07170e799f96b01d494dd7270f3f7c312d3bdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2451fa5324444c6ae1d43008e07170e799f96b01d494dd7270f3f7c312d3bdf8->leave($__internal_2451fa5324444c6ae1d43008e07170e799f96b01d494dd7270f3f7c312d3bdf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
