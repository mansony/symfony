<?php

/* AccueilBundle:Billet:resume.html.twig */
class __TwigTemplate_90080e7a033a44b217ba3104fb4c0bfaed89daf3631fb7be94b5451a6d284961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:resume.html.twig", 1);
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
        $__internal_73c380c6a53787fcdcc530a776d8fd0d058c0fd5170c6ca680424e4ed035279b = $this->env->getExtension("native_profiler");
        $__internal_73c380c6a53787fcdcc530a776d8fd0d058c0fd5170c6ca680424e4ed035279b->enter($__internal_73c380c6a53787fcdcc530a776d8fd0d058c0fd5170c6ca680424e4ed035279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c380c6a53787fcdcc530a776d8fd0d058c0fd5170c6ca680424e4ed035279b->leave($__internal_73c380c6a53787fcdcc530a776d8fd0d058c0fd5170c6ca680424e4ed035279b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d2e3284c6abf9c21592ad76e5d0b913c7d841dfb6d386f384d1b13805dc100d = $this->env->getExtension("native_profiler");
        $__internal_8d2e3284c6abf9c21592ad76e5d0b913c7d841dfb6d386f384d1b13805dc100d->enter($__internal_8d2e3284c6abf9c21592ad76e5d0b913c7d841dfb6d386f384d1b13805dc100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Récapitulatif - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8d2e3284c6abf9c21592ad76e5d0b913c7d841dfb6d386f384d1b13805dc100d->leave($__internal_8d2e3284c6abf9c21592ad76e5d0b913c7d841dfb6d386f384d1b13805dc100d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2753d5bb31d8930fc8f43905dc0ae04bd16393b1f7b22f35839504f0f542cb1 = $this->env->getExtension("native_profiler");
        $__internal_b2753d5bb31d8930fc8f43905dc0ae04bd16393b1f7b22f35839504f0f542cb1->enter($__internal_b2753d5bb31d8930fc8f43905dc0ae04bd16393b1f7b22f35839504f0f542cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "billets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gens"]) {
            // line 19
            echo "                            <h4>Nom & Prenom:<strong>";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["gens"], "nom", array()) . " ") . $this->getAttribute($context["gens"], "prenom", array())), "html", null, true);
            echo "</strong></h4>
                            <h4>Date de naissance: ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gens"], "dateNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</h4>
                            <h4>Type de tarif: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gens"], "tarifs", array()), "nom", array()), "html", null, true);
            echo " </h4>
                            <h4>Prix: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gens"], "tarifs", array()), "prix", array()), "html", null, true);
            echo "€</h4>
                            <h4>Pays d'origine: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gens"], "pays", array()), "nomFr", array()), "html", null, true);
            echo "</h4>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
                        <h4>Email: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "email", array()), "html", null, true);
        echo "</h4>
                        ";
        // line 27
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "demiJournee", array()) == 1)) {
            // line 28
            echo "                            <h4>Demi journée</h4>
                        ";
        } elseif (($this->getAttribute(        // line 29
(isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "demiJournee", array()) == 0)) {
            // line 30
            echo "                            <h4>Journée entière</h4>
                        ";
        }
        // line 32
        echo "                        <h4>Date de réservation:";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "dateResa", array()), "d-m-Y"), "html", null, true);
        echo "</h4>

                        
                        <h4><strong>Total : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "prixTotal", array()), "html", null, true);
        echo " €</strong></h4>

                        <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validation", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                            <script
                                    src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                                    data-key=\"pk_test_MQEN4HNJ1LfQGUSCRuo09lOL\"
                                    data-amount=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "prixTotal", array()), "html", null, true);
        echo "00\"
                                    data-name=\"Musée du Louvre\"
                                    data-description=\"Billets (€";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "prixTotal", array()), "html", null, true);
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
        
        $__internal_b2753d5bb31d8930fc8f43905dc0ae04bd16393b1f7b22f35839504f0f542cb1->leave($__internal_b2753d5bb31d8930fc8f43905dc0ae04bd16393b1f7b22f35839504f0f542cb1_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  135 => 41,  128 => 37,  123 => 35,  116 => 32,  112 => 30,  110 => 29,  107 => 28,  105 => 27,  101 => 26,  98 => 25,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  73 => 19,  69 => 18,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*                     {% for gens in reservation.billets %}*/
/*                             <h4>Nom & Prenom:<strong>{{ gens.nom~' '~gens.prenom }}</strong></h4>*/
/*                             <h4>Date de naissance: {{ gens.dateNaissance|date('d-m-Y') }}</h4>*/
/*                             <h4>Type de tarif: {{ gens.tarifs.nom }} </h4>*/
/*                             <h4>Prix: {{ gens.tarifs.prix }}€</h4>*/
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
