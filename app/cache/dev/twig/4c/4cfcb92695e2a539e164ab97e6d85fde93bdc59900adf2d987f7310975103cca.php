<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4fdca2a5b20e85059ed77bc0d6efe97bdec428dd50f6e2f855a1104969ee20c extends Twig_Template
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
        $__internal_213e458cb8383d04919495b8fa1aa1ea1f5da4dba861d748100444a5ce4eac1e = $this->env->getExtension("native_profiler");
        $__internal_213e458cb8383d04919495b8fa1aa1ea1f5da4dba861d748100444a5ce4eac1e->enter($__internal_213e458cb8383d04919495b8fa1aa1ea1f5da4dba861d748100444a5ce4eac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_213e458cb8383d04919495b8fa1aa1ea1f5da4dba861d748100444a5ce4eac1e->leave($__internal_213e458cb8383d04919495b8fa1aa1ea1f5da4dba861d748100444a5ce4eac1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
