<?php

/* AccueilBundle:Billet:resumef.html.twig */
class __TwigTemplate_53c0a9bfe70598026862322227391723b8bff8e29c261e557f495667463af73c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:resumef.html.twig", 1);
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
        echo "    Récapitulatif - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"menu\">
        <div class=\"row\">
            <div class=\"col-md-offset-2 col-md-8\"><br/><br/><br/><br/>
                <div class=\"back-form\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-8\">
                            <h2>Synthèse de la commande</h2>



              ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "billets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gens"]) {
            // line 19
            echo "                            <h4>Nom & Prenom:<strong>";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["gens"], "nom", array()) . " ") . $this->getAttribute($context["gens"], "prenom", array())), "html", null, true);
            echo "</strong></h4>
                            <h4>Date de naissance: ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gens"], "dateNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</h4>
                            <h4>Pays d'origine: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gens"], "pays", array()), "nomFr", array()), "html", null, true);
            echo "</h4>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
                        <h4>Email: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "email", array()), "html", null, true);
        echo "</h4>
                        ";
        // line 25
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "demiJournee", array()) == 1)) {
            // line 26
            echo "                            <h4>Demi journée</h4>
                        ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["reservation"]) ? $context["reservation"] : null), "demiJournee", array()) == 0)) {
            // line 28
            echo "                            <h4>Journée entière</h4>
                        ";
        }
        // line 30
        echo "                        <h4>Date de réservation:";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "dateResa", array()), "d-m-Y"), "html", null, true);
        echo "</h4>

                        
                        <h4><strong>Total : ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "prixTotal", array()), "html", null, true);
        echo " €</strong></h4>

                        <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validation", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                            <script
                                    src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                                    data-key=\"pk_test_MQEN4HNJ1LfQGUSCRuo09lOL\"
                                    data-amount=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "prixTotal", array()), "html", null, true);
        echo "00\"
                                    data-name=\"Musée du Louvre\"
                                    data-description=\"Billets (€";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "prixTotal", array()), "html", null, true);
        echo ".00)\"
                                    data-image=\"http://www.iphon.fr/public/2009/Q4/.musee-louvre-iphone-1_s.jpg\"
                                    data-locale=\"auto\"
                                    data-currency=\"eur\">
                            </script>
                        </form>

                        <br><img src=\"https://www.paypal.com/fr_XC/i/btn/btn_xpressCheckout.gif\" align=\"left\" >

  </div>
            </div>

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:resumef.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 41,  112 => 39,  105 => 35,  100 => 33,  93 => 30,  89 => 28,  87 => 27,  84 => 26,  82 => 25,  78 => 24,  75 => 23,  67 => 21,  63 => 20,  58 => 19,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "AccueilBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Récapitulatif - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="menu">*/
/*         <div class="row">*/
/*             <div class="col-md-offset-2 col-md-8"><br/><br/><br/><br/>*/
/*                 <div class="back-form">*/
/*                     <div class="row">*/
/*                         <div class="col-md-offset-3 col-md-8">*/
/*                             <h2>Synthèse de la commande</h2>*/
/* */
/* */
/* */
/*               {% for gens in reservation.billets %}*/
/*                             <h4>Nom & Prenom:<strong>{{ gens.nom~' '~gens.prenom }}</strong></h4>*/
/*                             <h4>Date de naissance: {{ gens.dateNaissance|date('d-m-Y') }}</h4>*/
/*                             <h4>Pays d'origine: {{ gens.pays.nomFr }}</h4>*/
/*                         {% endfor %}*/
/* */
/*                         <h4>Email: {{ reservation.email }}</h4>*/
/*                         {% if reservation.demiJournee == 1 %}*/
/*                             <h4>Demi journée</h4>*/
/*                         {% elseif reservation.demiJournee == 0 %}*/
/*                             <h4>Journée entière</h4>*/
/*                         {% endif %}*/
/*                         <h4>Date de réservation:{{ reservation.dateResa|date('d-m-Y') }}</h4>*/
/* */
/*                         */
/*                         <h4><strong>Total : {{ reservation.prixTotal }} €</strong></h4>*/
/* */
/*                         <form action="{{ path('validation', {'id': reservation.id }) }}" method="POST">*/
/*                             <script*/
/*                                     src="https://checkout.stripe.com/checkout.js" class="stripe-button"*/
/*                                     data-key="pk_test_MQEN4HNJ1LfQGUSCRuo09lOL"*/
/*                                     data-amount="{{ reservation.prixTotal }}00"*/
/*                                     data-name="Musée du Louvre"*/
/*                                     data-description="Billets (€{{ reservation.prixTotal }}.00)"*/
/*                                     data-image="http://www.iphon.fr/public/2009/Q4/.musee-louvre-iphone-1_s.jpg"*/
/*                                     data-locale="auto"*/
/*                                     data-currency="eur">*/
/*                             </script>*/
/*                         </form>*/
/* */
/*                         <br><img src="https://www.paypal.com/fr_XC/i/btn/btn_xpressCheckout.gif" align="left" >*/
/* */
/*   </div>*/
/*             </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
