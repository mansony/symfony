<?php

/* AccueilBundle:Billet:commande.html.twig */
class __TwigTemplate_b959b2202ec273cfe91e2c3136249de2d1a652d8507aa575be47f9096f0f1dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:commande.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AccueilBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf3e6cfbbbdc7454cedf602708abd1850be8c9cd75b8504e051fe8096b65b00c = $this->env->getExtension("native_profiler");
        $__internal_cf3e6cfbbbdc7454cedf602708abd1850be8c9cd75b8504e051fe8096b65b00c->enter($__internal_cf3e6cfbbbdc7454cedf602708abd1850be8c9cd75b8504e051fe8096b65b00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:commande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3e6cfbbbdc7454cedf602708abd1850be8c9cd75b8504e051fe8096b65b00c->leave($__internal_cf3e6cfbbbdc7454cedf602708abd1850be8c9cd75b8504e051fe8096b65b00c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ab299d905faa731ad756e6cec74f19fffb756955af594bd5bdeca5404e802ff = $this->env->getExtension("native_profiler");
        $__internal_7ab299d905faa731ad756e6cec74f19fffb756955af594bd5bdeca5404e802ff->enter($__internal_7ab299d905faa731ad756e6cec74f19fffb756955af594bd5bdeca5404e802ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Paiement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7ab299d905faa731ad756e6cec74f19fffb756955af594bd5bdeca5404e802ff->leave($__internal_7ab299d905faa731ad756e6cec74f19fffb756955af594bd5bdeca5404e802ff_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_da41fa7a9135cb65c4bdc9887c91bb15bfc1f2d5fead210363ac493056f60fb2 = $this->env->getExtension("native_profiler");
        $__internal_da41fa7a9135cb65c4bdc9887c91bb15bfc1f2d5fead210363ac493056f60fb2->enter($__internal_da41fa7a9135cb65c4bdc9887c91bb15bfc1f2d5fead210363ac493056f60fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <br/><br/><br/><div class=\"menu login-head\">
        <div class=\"row\">
            <div class=\"col-md-offset-1 col-md-10\">
                <div class=\"\">
                    <h2>Commande reussie</h2>
                    <h3>
                       
                        Vous pouvez maintenant verifier maintenant votre mail.
                    </h3>

                    <a class=\"btn btn-primary\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Accueil</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_da41fa7a9135cb65c4bdc9887c91bb15bfc1f2d5fead210363ac493056f60fb2->leave($__internal_da41fa7a9135cb65c4bdc9887c91bb15bfc1f2d5fead210363ac493056f60fb2_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AccueilBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Paiement - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <br/><br/><br/><div class="menu login-head">*/
/*         <div class="row">*/
/*             <div class="col-md-offset-1 col-md-10">*/
/*                 <div class="">*/
/*                     <h2>Commande reussie</h2>*/
/*                     <h3>*/
/*                        */
/*                         Vous pouvez maintenant verifier maintenant votre mail.*/
/*                     </h3>*/
/* */
/*                     <a class="btn btn-primary" href="{{ path('accueil') }}"><span class="glyphicon glyphicon-home"></span> Accueil</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
