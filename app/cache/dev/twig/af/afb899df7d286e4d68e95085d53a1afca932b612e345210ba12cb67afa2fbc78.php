<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8851e6638a6670f38e006e08a2b65e10a10c3d7ca08f6b11925830e2b1d8c1d7 extends Twig_Template
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
        $__internal_d8314123132d4065d4805bd8347f9b044bc49664b41c01e22bddda574897f05b = $this->env->getExtension("native_profiler");
        $__internal_d8314123132d4065d4805bd8347f9b044bc49664b41c01e22bddda574897f05b->enter($__internal_d8314123132d4065d4805bd8347f9b044bc49664b41c01e22bddda574897f05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d8314123132d4065d4805bd8347f9b044bc49664b41c01e22bddda574897f05b->leave($__internal_d8314123132d4065d4805bd8347f9b044bc49664b41c01e22bddda574897f05b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
