<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c8684fb53115a5c588a4d74cfe7b66d217983bd61fd8b76f2758eb1be13a1491 extends Twig_Template
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
        $__internal_3173341ea071cdfdc9ee04f1e27b12fc4d48b8ab306939dc6ec379849e5aff32 = $this->env->getExtension("native_profiler");
        $__internal_3173341ea071cdfdc9ee04f1e27b12fc4d48b8ab306939dc6ec379849e5aff32->enter($__internal_3173341ea071cdfdc9ee04f1e27b12fc4d48b8ab306939dc6ec379849e5aff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3173341ea071cdfdc9ee04f1e27b12fc4d48b8ab306939dc6ec379849e5aff32->leave($__internal_3173341ea071cdfdc9ee04f1e27b12fc4d48b8ab306939dc6ec379849e5aff32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
