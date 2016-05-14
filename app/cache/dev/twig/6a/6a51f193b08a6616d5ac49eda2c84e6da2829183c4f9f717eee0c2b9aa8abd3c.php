<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f7592fecff2d7240fbfb752bd74af9b8f32acc756004a86e6a9a011aae332580 extends Twig_Template
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
        $__internal_0c58e301002d61b528ce3d652306053926243ca50ac38648b26e32312454689b = $this->env->getExtension("native_profiler");
        $__internal_0c58e301002d61b528ce3d652306053926243ca50ac38648b26e32312454689b->enter($__internal_0c58e301002d61b528ce3d652306053926243ca50ac38648b26e32312454689b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0c58e301002d61b528ce3d652306053926243ca50ac38648b26e32312454689b->leave($__internal_0c58e301002d61b528ce3d652306053926243ca50ac38648b26e32312454689b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
