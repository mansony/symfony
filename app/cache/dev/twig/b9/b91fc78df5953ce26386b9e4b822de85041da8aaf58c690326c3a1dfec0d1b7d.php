<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_aa0fd18d7f425283ecf4989ce996ab7d7b89043f6566801d60805cdd2ea4bcf5 extends Twig_Template
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
        $__internal_46fe2e5f8877bf690145380baca6de3ba20a747aca9db54feb6f798654becae3 = $this->env->getExtension("native_profiler");
        $__internal_46fe2e5f8877bf690145380baca6de3ba20a747aca9db54feb6f798654becae3->enter($__internal_46fe2e5f8877bf690145380baca6de3ba20a747aca9db54feb6f798654becae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_46fe2e5f8877bf690145380baca6de3ba20a747aca9db54feb6f798654becae3->leave($__internal_46fe2e5f8877bf690145380baca6de3ba20a747aca9db54feb6f798654becae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
