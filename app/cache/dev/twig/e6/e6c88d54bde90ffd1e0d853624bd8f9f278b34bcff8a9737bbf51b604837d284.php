<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_175ed8cdaefeab46edb775a4d4c19a52272425a15ff1ea2c640ad73ee8f4b326 extends Twig_Template
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
        $__internal_b3588626839addd181e6c32fd5647e679f4dee615a878826eaee445c6c02d96b = $this->env->getExtension("native_profiler");
        $__internal_b3588626839addd181e6c32fd5647e679f4dee615a878826eaee445c6c02d96b->enter($__internal_b3588626839addd181e6c32fd5647e679f4dee615a878826eaee445c6c02d96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b3588626839addd181e6c32fd5647e679f4dee615a878826eaee445c6c02d96b->leave($__internal_b3588626839addd181e6c32fd5647e679f4dee615a878826eaee445c6c02d96b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
