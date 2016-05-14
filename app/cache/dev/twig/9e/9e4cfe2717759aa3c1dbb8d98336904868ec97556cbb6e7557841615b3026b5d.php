<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7c8c43cecb4c832adc247038dfcbdbf3e8dcaf4ff4d3141a6c28df0cc36fe875 extends Twig_Template
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
        $__internal_7be6c0a964e41f379e3531441bfdb41db6954a8312fb2287ac7478f1dd5c94e2 = $this->env->getExtension("native_profiler");
        $__internal_7be6c0a964e41f379e3531441bfdb41db6954a8312fb2287ac7478f1dd5c94e2->enter($__internal_7be6c0a964e41f379e3531441bfdb41db6954a8312fb2287ac7478f1dd5c94e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7be6c0a964e41f379e3531441bfdb41db6954a8312fb2287ac7478f1dd5c94e2->leave($__internal_7be6c0a964e41f379e3531441bfdb41db6954a8312fb2287ac7478f1dd5c94e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
