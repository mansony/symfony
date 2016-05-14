<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8d1cc0d7b4e818ddb0d42fda68520b0b8c288d1e7181c6ad9d3fc6a46e8f750a extends Twig_Template
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
        $__internal_b38dad4c3784709c86cce085bfedc45d0494fef55bc61d8172d905513d236f55 = $this->env->getExtension("native_profiler");
        $__internal_b38dad4c3784709c86cce085bfedc45d0494fef55bc61d8172d905513d236f55->enter($__internal_b38dad4c3784709c86cce085bfedc45d0494fef55bc61d8172d905513d236f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b38dad4c3784709c86cce085bfedc45d0494fef55bc61d8172d905513d236f55->leave($__internal_b38dad4c3784709c86cce085bfedc45d0494fef55bc61d8172d905513d236f55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
