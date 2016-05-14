<?php

/* AccueilBundle:Billet:commande.html.twig */
class __TwigTemplate_7320588efad16e8493abbbc0984e510e223a3c0cb7965a68f58189f79bbaf49c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Paiement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        return array (  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
