<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ad7fe8bea8597991bb7838d75f87da275c0c510d3bb39d30b2c8492f634f8129 extends Twig_Template
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
        $__internal_287cfbdcc89aca5d1730af2fb4b606d349c053ab14d5a5288f62332be0628a00 = $this->env->getExtension("native_profiler");
        $__internal_287cfbdcc89aca5d1730af2fb4b606d349c053ab14d5a5288f62332be0628a00->enter($__internal_287cfbdcc89aca5d1730af2fb4b606d349c053ab14d5a5288f62332be0628a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_287cfbdcc89aca5d1730af2fb4b606d349c053ab14d5a5288f62332be0628a00->leave($__internal_287cfbdcc89aca5d1730af2fb4b606d349c053ab14d5a5288f62332be0628a00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
