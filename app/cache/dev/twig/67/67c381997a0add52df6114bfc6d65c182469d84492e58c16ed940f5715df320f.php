<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_10fcfcd4d166d3cfdcb5f29c6c856bf351d56494c5c95d71954660eb303dc288 extends Twig_Template
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
        $__internal_679e62fa84cfcc57afe2829c3901863e1157fae92fa9be117402e047c404f963 = $this->env->getExtension("native_profiler");
        $__internal_679e62fa84cfcc57afe2829c3901863e1157fae92fa9be117402e047c404f963->enter($__internal_679e62fa84cfcc57afe2829c3901863e1157fae92fa9be117402e047c404f963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_679e62fa84cfcc57afe2829c3901863e1157fae92fa9be117402e047c404f963->leave($__internal_679e62fa84cfcc57afe2829c3901863e1157fae92fa9be117402e047c404f963_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
