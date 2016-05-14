<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_edb17f8ec5d1b144e2df6f3298e446da44b9153a206d085a3826c476e8cd1a0b extends Twig_Template
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
        $__internal_bbfdea30c285480af0cd3b0684483a30fce88c17a5e882e230fa314b9d6c3c76 = $this->env->getExtension("native_profiler");
        $__internal_bbfdea30c285480af0cd3b0684483a30fce88c17a5e882e230fa314b9d6c3c76->enter($__internal_bbfdea30c285480af0cd3b0684483a30fce88c17a5e882e230fa314b9d6c3c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bbfdea30c285480af0cd3b0684483a30fce88c17a5e882e230fa314b9d6c3c76->leave($__internal_bbfdea30c285480af0cd3b0684483a30fce88c17a5e882e230fa314b9d6c3c76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
