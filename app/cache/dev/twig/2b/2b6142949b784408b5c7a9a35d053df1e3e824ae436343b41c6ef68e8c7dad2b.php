<?php

/* AccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_34575fff951a32324f504b4654ae8c3d2190ecd6f80c07cb4b1129807450ff31 extends Twig_Template
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
        $__internal_023f05ab1ccd35ab117aec94445b80f6dd4d1b49d001c19a267b775afabb6b3a = $this->env->getExtension("native_profiler");
        $__internal_023f05ab1ccd35ab117aec94445b80f6dd4d1b49d001c19a267b775afabb6b3a->enter($__internal_023f05ab1ccd35ab117aec94445b80f6dd4d1b49d001c19a267b775afabb6b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_023f05ab1ccd35ab117aec94445b80f6dd4d1b49d001c19a267b775afabb6b3a->leave($__internal_023f05ab1ccd35ab117aec94445b80f6dd4d1b49d001c19a267b775afabb6b3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a011e22cf03b14613301e898dc9c0f1cf908c28c85d4e477fe1da63a2edd978 = $this->env->getExtension("native_profiler");
        $__internal_2a011e22cf03b14613301e898dc9c0f1cf908c28c85d4e477fe1da63a2edd978->enter($__internal_2a011e22cf03b14613301e898dc9c0f1cf908c28c85d4e477fe1da63a2edd978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a011e22cf03b14613301e898dc9c0f1cf908c28c85d4e477fe1da63a2edd978->leave($__internal_2a011e22cf03b14613301e898dc9c0f1cf908c28c85d4e477fe1da63a2edd978_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_732eefe13b956916475e4cbe4aa659a6d2b09b8d1731b229c061d14299294611 = $this->env->getExtension("native_profiler");
        $__internal_732eefe13b956916475e4cbe4aa659a6d2b09b8d1731b229c061d14299294611->enter($__internal_732eefe13b956916475e4cbe4aa659a6d2b09b8d1731b229c061d14299294611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_732eefe13b956916475e4cbe4aa659a6d2b09b8d1731b229c061d14299294611->leave($__internal_732eefe13b956916475e4cbe4aa659a6d2b09b8d1731b229c061d14299294611_prof);

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
        return array (  161 => 98,  142 => 82,  123 => 66,  104 => 50,  85 => 34,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
