<?php

/* AccueilBundle:Billet:billet.html.twig */
class __TwigTemplate_1991ec8e842d3e4f0e6bd4c79ec141988a1f2277816173c2e44425c92fe06cd9 extends Twig_Template
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
        $__internal_e9f86b37b957266bf840b2001bda034c01a05a73c907ed94b85b645e3b7ff58d = $this->env->getExtension("native_profiler");
        $__internal_e9f86b37b957266bf840b2001bda034c01a05a73c907ed94b85b645e3b7ff58d->enter($__internal_e9f86b37b957266bf840b2001bda034c01a05a73c907ed94b85b645e3b7ff58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:billet.html.twig"));

        // line 1
        echo "<style>
    .demipage{
        height: 48%;
    }
</style>



<h2 style=\"color:#9c2d23;text-align:center\">Billets - Musée du louvre</h2>

<h2 style=\"color:#9c2d23;text-align:center\">";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "dateResa", array()), "d-m-Y"), "html", null, true);
        echo "</h2>

";
        // line 13
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "demiJournee", array()) == 1)) {
            // line 14
            echo "    <h2 style=\"color:#9c2d23;text-align:center\">Réservation pour une Demi journée</h2>
";
        } elseif (($this->getAttribute(        // line 15
(isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "demiJournee", array()) == 0)) {
            // line 16
            echo "    <h2 style=\"color:#9c2d23;text-align:center\">Réservation pour une Journée entière</h2>
";
        }
        // line 18
        echo "
<h3 style=\"color:#9c2d23;text-align:center\">Date de réservation le ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "dateJour", array()), "d-m-Y"), "html", null, true);
        echo "</h3>


";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "billets", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["gens"]) {
            // line 23
            echo "    ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                // line 24
                echo "        <page>
    ";
            }
            // line 26
            echo "        <div class=\"demipage\">
            <h2 style=\"text-align:center\"><strong>";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($context["gens"], "nom", array()) . " ") . $this->getAttribute($context["gens"], "prenom", array())), "html", null, true);
            echo "</strong></h2>
            <h2 style=\"text-align:center\"><strong>Tarif : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gens"], "tarifs", array()), "nom", array()), "html", null, true);
            echo "</strong></h2>
            <h2 style=\"text-align:center\"><strong>Montant: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gens"], "tarifs", array()), "prix", array()), "html", null, true);
            echo " € </strong></h2>
            <h4>Pays d'origine: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gens"], "pays", array()), "nomFr", array()), "html", null, true);
            echo "</h4>
            <h4>Date de Naissance : ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gens"], "dateNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</h4>
            <qrcode value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["gens"], "code", array()), "html", null, true);
            echo "\" ec=\"H\" style=\"width: 50mm; background-color: white; color: black;\"></qrcode>
        </div>
    ";
            // line 34
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                // line 35
                echo "        </page>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e9f86b37b957266bf840b2001bda034c01a05a73c907ed94b85b645e3b7ff58d->leave($__internal_e9f86b37b957266bf840b2001bda034c01a05a73c907ed94b85b645e3b7ff58d_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:billet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  111 => 34,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  83 => 26,  79 => 24,  76 => 23,  59 => 22,  53 => 19,  50 => 18,  46 => 16,  44 => 15,  41 => 14,  39 => 13,  34 => 11,  22 => 1,);
    }
}
/* <style>*/
/*     .demipage{*/
/*         height: 48%;*/
/*     }*/
/* </style>*/
/* */
/* */
/* */
/* <h2 style="color:#9c2d23;text-align:center">Billets - Musée du louvre</h2>*/
/* */
/* <h2 style="color:#9c2d23;text-align:center">{{ reservation.dateResa|date('d-m-Y') }}</h2>*/
/* */
/* {% if reservation.demiJournee == 1 %}*/
/*     <h2 style="color:#9c2d23;text-align:center">Réservation pour une Demi journée</h2>*/
/* {% elseif reservation.demiJournee == 0 %}*/
/*     <h2 style="color:#9c2d23;text-align:center">Réservation pour une Journée entière</h2>*/
/* {% endif %}*/
/* */
/* <h3 style="color:#9c2d23;text-align:center">Date de réservation le {{ reservation.dateJour|date('d-m-Y') }}</h3>*/
/* */
/* */
/* {% for gens in reservation.billets %}*/
/*     {% if loop.index % 2 == 1 %}*/
/*         <page>*/
/*     {% endif %}*/
/*         <div class="demipage">*/
/*             <h2 style="text-align:center"><strong>{{ gens.nom~' '~gens.prenom }}</strong></h2>*/
/*             <h2 style="text-align:center"><strong>Tarif : {{ gens.tarifs.nom }}</strong></h2>*/
/*             <h2 style="text-align:center"><strong>Montant: {{ gens.tarifs.prix }} € </strong></h2>*/
/*             <h4>Pays d'origine: {{ gens.pays.nomFr }}</h4>*/
/*             <h4>Date de Naissance : {{ gens.dateNaissance|date('d-m-Y') }}</h4>*/
/*             <qrcode value="{{ gens.code }}" ec="H" style="width: 50mm; background-color: white; color: black;"></qrcode>*/
/*         </div>*/
/*     {% if loop.index % 2 == 1 %}*/
/*         </page>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
