<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_750019e4f1fae7f41d7af345bbe6215c3273f784943f1275f445c6445cf9fc70 extends Twig_Template
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
        $__internal_a1f022e8f5cab6b85392ef304f1db147a74797f49d8c88e238a9d88d7fe84f2f = $this->env->getExtension("native_profiler");
        $__internal_a1f022e8f5cab6b85392ef304f1db147a74797f49d8c88e238a9d88d7fe84f2f->enter($__internal_a1f022e8f5cab6b85392ef304f1db147a74797f49d8c88e238a9d88d7fe84f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a1f022e8f5cab6b85392ef304f1db147a74797f49d8c88e238a9d88d7fe84f2f->leave($__internal_a1f022e8f5cab6b85392ef304f1db147a74797f49d8c88e238a9d88d7fe84f2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
