<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a6ac61c8c704dc96e586ad2fd220a23f5deebe71fae5568d711fb6cfa15086f4 extends Twig_Template
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
        $__internal_a012a4813a82b718b316317c78b96ffdb952ac8dd75931edd78d44e9eadca4a7 = $this->env->getExtension("native_profiler");
        $__internal_a012a4813a82b718b316317c78b96ffdb952ac8dd75931edd78d44e9eadca4a7->enter($__internal_a012a4813a82b718b316317c78b96ffdb952ac8dd75931edd78d44e9eadca4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a012a4813a82b718b316317c78b96ffdb952ac8dd75931edd78d44e9eadca4a7->leave($__internal_a012a4813a82b718b316317c78b96ffdb952ac8dd75931edd78d44e9eadca4a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
