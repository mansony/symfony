<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a617db3e221c12528cff5a6b5870d6d58420a1eb098c97ba542d1b81933034a3 extends Twig_Template
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
        $__internal_f88b08344036f8d79d367069ab3b272fb42f64ba4e053e4da7c449b2aa12bce7 = $this->env->getExtension("native_profiler");
        $__internal_f88b08344036f8d79d367069ab3b272fb42f64ba4e053e4da7c449b2aa12bce7->enter($__internal_f88b08344036f8d79d367069ab3b272fb42f64ba4e053e4da7c449b2aa12bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f88b08344036f8d79d367069ab3b272fb42f64ba4e053e4da7c449b2aa12bce7->leave($__internal_f88b08344036f8d79d367069ab3b272fb42f64ba4e053e4da7c449b2aa12bce7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
