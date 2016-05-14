<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4a3b4d579b0646dae175f6d222bc8e7bfeff317ec7637339bc80b4ed67884785 extends Twig_Template
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
        $__internal_b28cdeb106ba725e4a36aee668403d685cdec2e4469c8eec1ee9a31bfeb4e09e = $this->env->getExtension("native_profiler");
        $__internal_b28cdeb106ba725e4a36aee668403d685cdec2e4469c8eec1ee9a31bfeb4e09e->enter($__internal_b28cdeb106ba725e4a36aee668403d685cdec2e4469c8eec1ee9a31bfeb4e09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b28cdeb106ba725e4a36aee668403d685cdec2e4469c8eec1ee9a31bfeb4e09e->leave($__internal_b28cdeb106ba725e4a36aee668403d685cdec2e4469c8eec1ee9a31bfeb4e09e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
