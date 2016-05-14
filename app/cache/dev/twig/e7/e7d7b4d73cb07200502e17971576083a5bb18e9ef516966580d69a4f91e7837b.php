<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_88de7fdc130f3ac97fd899d22d21b3ba50fa95f3b10e5cf8aaf8b3ea240bc71b extends Twig_Template
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
        $__internal_291c1a0356da8aa09cecf9eb4a3bea2b4615851de6744d126e905b2f701b4bc2 = $this->env->getExtension("native_profiler");
        $__internal_291c1a0356da8aa09cecf9eb4a3bea2b4615851de6744d126e905b2f701b4bc2->enter($__internal_291c1a0356da8aa09cecf9eb4a3bea2b4615851de6744d126e905b2f701b4bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_291c1a0356da8aa09cecf9eb4a3bea2b4615851de6744d126e905b2f701b4bc2->leave($__internal_291c1a0356da8aa09cecf9eb4a3bea2b4615851de6744d126e905b2f701b4bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
