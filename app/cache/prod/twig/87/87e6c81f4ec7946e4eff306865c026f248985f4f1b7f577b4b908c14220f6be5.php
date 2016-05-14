<?php

/* AccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_593665ea3b5e028f73d4cbc750952a469073dee3828f1ffd5359c58f0818d021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Accueil:accueil.html.twig", 1);
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
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"\"><br/><br/><br/>

  <div class=\"alert alert-info col-md-offset-2 col-md-8\" role=\"alert\" style=\"text-align:center;color:white;font-size:18px;background-color:#222;\">
  <strong>Bienvenue sur le  musée du louvre, veillez selectioner le type de billet qui vous convient</strong> 
      </div>

    <br/><br/><br/>
        <div class=\"row\">
        </div>
        <div class=\"content\" id=\"Main-Content\">

      

<div class=\"flipster\">
          <ul>
            <li>
                <div class=\"col-md-12 pricing\">
                    <div class=\"pricing-top green-top\">
                        <h3>Normal</h3>
                        <p>16 €</p>
                    </div>
                    <div class=\"pricing-bottom\">
                        <div class=\"pricing-bottom-top\"><br/><br/>
                            <p>à partir de 12 ans</p><br/><br/>
                        </div>
                        <div class=\"buy-button\">
                         <a class=\"btn btn-primary\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("date_reserve");
        echo "\">Commander</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"col-md-12 pricing\">
                    <div class=\"pricing-top blue-top\">
                        <h3>Enfant</h3>
                        <p>8 €</p>
                    </div>
                    <div class=\"pricing-bottom\">
                        <div class=\"pricing-bottom-top\">
                            <p>à partir de 4 ans et jusqu’à 12 ans(gratuite pour les enfants de moins de 4 ans) </p>
                        </div>
                        <div class=\"buy-button\">
                           <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("date_reserve");
        echo "\">Commander</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"col-md-12 pricing\">
                    <div class=\"pricing-top\">
                        <h3>Famille</h3>
                        <p>35 €</p>
                    </div>
                    <div class=\"pricing-bottom\">
                        <div class=\"pricing-bottom-top\">
                            <p>2 adultes et 2 enfants ayant le même nom de famille</p>
                        </div>
                        <div class=\"buy-button\">
                          <a class=\"btn btn-primary\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("famille");
        echo "\">Commander</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"col-md-12 pricing\">
                    <div class=\"pricing-top green-top\">
                        <h3>Senior</h3>
                        <p>12 €</p>
                    </div>
                    <div class=\"pricing-bottom\">
                        <div class=\"pricing-bottom-top\"><br/><br/>
                            <p>à partir de 60 ans</p><br/><br/>
                        </div>
                        <div class=\"buy-button\">
                            <a class=\"btn btn-primary\" href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("date_reserve");
        echo "\">Commander</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"col-md-12 pricing\">
                    <div class=\"pricing-top\">
                        <h3>Réduit</h3>
                        <p>10 €</p>
                    </div>
                    <div class=\"pricing-bottom\">
                        <div class=\"pricing-bottom-top\">
                        <p>Si vous êtes étudiant, militaire,employé du musée ou du Ministère de la Culture…</p>
                        </div>
                        <div class=\"buy-button\">
                           <a class=\"btn btn-primary\" href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("date_reserve");
        echo "\">Commander</a>
                        </div>
                    </div>
                </div>
            </li>
          </ul>
        </div>
            

        </div>
    </div>

    <script>
<!--

    \$(function(){ \$(\".flipster\").flipster({ style: 'carousel', start: 0 }); });

-->
</script>
";
    }

    public function getTemplateName()
    {
        return "AccueilBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 98,  127 => 82,  108 => 66,  89 => 50,  70 => 34,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "AccueilBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class=""><br/><br/><br/>*/
/* */
/*   <div class="alert alert-info col-md-offset-2 col-md-8" role="alert" style="text-align:center;color:white;font-size:18px;background-color:#222;">*/
/*   <strong>Bienvenue sur le  musée du louvre, veillez selectioner le type de billet qui vous convient</strong> */
/*       </div>*/
/* */
/*     <br/><br/><br/>*/
/*         <div class="row">*/
/*         </div>*/
/*         <div class="content" id="Main-Content">*/
/* */
/*       */
/* */
/* <div class="flipster">*/
/*           <ul>*/
/*             <li>*/
/*                 <div class="col-md-12 pricing">*/
/*                     <div class="pricing-top green-top">*/
/*                         <h3>Normal</h3>*/
/*                         <p>16 €</p>*/
/*                     </div>*/
/*                     <div class="pricing-bottom">*/
/*                         <div class="pricing-bottom-top"><br/><br/>*/
/*                             <p>à partir de 12 ans</p><br/><br/>*/
/*                         </div>*/
/*                         <div class="buy-button">*/
/*                          <a class="btn btn-primary" href="{{ path('date_reserve') }}">Commander</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="col-md-12 pricing">*/
/*                     <div class="pricing-top blue-top">*/
/*                         <h3>Enfant</h3>*/
/*                         <p>8 €</p>*/
/*                     </div>*/
/*                     <div class="pricing-bottom">*/
/*                         <div class="pricing-bottom-top">*/
/*                             <p>à partir de 4 ans et jusqu’à 12 ans(gratuite pour les enfants de moins de 4 ans) </p>*/
/*                         </div>*/
/*                         <div class="buy-button">*/
/*                            <a class="btn btn-primary" href="{{ path('date_reserve') }}">Commander</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="col-md-12 pricing">*/
/*                     <div class="pricing-top">*/
/*                         <h3>Famille</h3>*/
/*                         <p>35 €</p>*/
/*                     </div>*/
/*                     <div class="pricing-bottom">*/
/*                         <div class="pricing-bottom-top">*/
/*                             <p>2 adultes et 2 enfants ayant le même nom de famille</p>*/
/*                         </div>*/
/*                         <div class="buy-button">*/
/*                           <a class="btn btn-primary" href="{{ path('famille') }}">Commander</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="col-md-12 pricing">*/
/*                     <div class="pricing-top green-top">*/
/*                         <h3>Senior</h3>*/
/*                         <p>12 €</p>*/
/*                     </div>*/
/*                     <div class="pricing-bottom">*/
/*                         <div class="pricing-bottom-top"><br/><br/>*/
/*                             <p>à partir de 60 ans</p><br/><br/>*/
/*                         </div>*/
/*                         <div class="buy-button">*/
/*                             <a class="btn btn-primary" href="{{ path('date_reserve') }}">Commander</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             <li>*/
/*                 <div class="col-md-12 pricing">*/
/*                     <div class="pricing-top">*/
/*                         <h3>Réduit</h3>*/
/*                         <p>10 €</p>*/
/*                     </div>*/
/*                     <div class="pricing-bottom">*/
/*                         <div class="pricing-bottom-top">*/
/*                         <p>Si vous êtes étudiant, militaire,employé du musée ou du Ministère de la Culture…</p>*/
/*                         </div>*/
/*                         <div class="buy-button">*/
/*                            <a class="btn btn-primary" href="{{ path('date_reserve') }}">Commander</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*             */
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/* <!--*/
/* */
/*     $(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });*/
/* */
/* -->*/
/* </script>*/
/* {% endblock %}*/
/* */
