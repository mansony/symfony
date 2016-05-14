<?php

/* AccueilBundle:Billet:reservation.html.twig */
class __TwigTemplate_736b57241403e34071798e2575b819dffd6afc2a4159cf1c0ba5427d67a42714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:reservation.html.twig", 1);
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Réservation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"menu\"><br/><br/><br/>
 <div class=\"menu\"><br/><br/><br/>
<div class=\"alert alert-info col-md-offset-3 col-md-6\" role=\"alert\" style=\"text-align:center;color:white;font-size:18px;background-color:#222;\">
  <strong>Résérvez maintenant</strong> 
      </div>
    <br/><br/><br/><br/>
        <div class=\"row\">
            <div class=\"col-md-offset-1 col-md-9\">
                <div class=\"\">

<div class=\"back-form\">

                    <h1 style=\"text-align:center\">Completez vos informations</h1>
                    

                    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<div class=\"col-md-offset-2 col-md-10\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "billet", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gens"]) {
            // line 30
            echo "                        <div class=\"form-group\">
                            ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Nom"));
            echo "
                            <div class=\"col-sm-5\">
                                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Prénom"));
            echo "
                            <div class=\"col-sm-5\">
                                ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "prenom", array()), 'widget');
            echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                        ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Email"));
            echo "
                        <div class=\"col-sm-5\">
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "<br>
                        </div>
                    </div>
                        <div class=\"form-group\">
                            ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "dateNaissance", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de naissance"));
            echo "
                            <div class=\"col-md-5\">
                                ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "dateNaissance", array()), 'widget');
            echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "tarifReduit", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Tarif réduit"));
            echo "
                            <div class=\"col-sm-5\">
                                ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "tarifReduit", array()), 'widget');
            echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "pays", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Pays"));
            echo "
                            <div class=\"col-md-5\">
                                ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "pays", array()), 'widget');
            echo "
                            </div>
                        </div><br><br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</div>
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget');
        echo "
                    </form>

</div>                    
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 69,  157 => 68,  154 => 67,  144 => 63,  139 => 61,  132 => 57,  127 => 55,  120 => 51,  115 => 49,  108 => 45,  103 => 43,  96 => 39,  91 => 37,  84 => 33,  79 => 31,  76 => 30,  72 => 29,  66 => 26,  62 => 25,  45 => 10,  42 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends "AccueilBundle::layout.html.twig" %}*/
/* */
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Réservation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="menu"><br/><br/><br/>*/
/*  <div class="menu"><br/><br/><br/>*/
/* <div class="alert alert-info col-md-offset-3 col-md-6" role="alert" style="text-align:center;color:white;font-size:18px;background-color:#222;">*/
/*   <strong>Résérvez maintenant</strong> */
/*       </div>*/
/*     <br/><br/><br/><br/>*/
/*         <div class="row">*/
/*             <div class="col-md-offset-1 col-md-9">*/
/*                 <div class="">*/
/* */
/* <div class="back-form">*/
/* */
/*                     <h1 style="text-align:center">Completez vos informations</h1>*/
/*                     */
/* */
/*                     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/* <div class="col-md-offset-2 col-md-10">*/
/*                         {% for gens in form.billet %}*/
/*                         <div class="form-group">*/
/*                             {{ form_label(gens.nom, "Nom", {'label_attr': {'class': 'col-sm-6 control-label'}}) }}*/
/*                             <div class="col-sm-5">*/
/*                                 {{ form_widget(gens.nom, {'attr': {'class': 'form-control'}}) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(gens.prenom, "Prénom", {'label_attr': {'class': 'col-sm-6 control-label'}}) }}*/
/*                             <div class="col-sm-5">*/
/*                                 {{ form_widget(gens.prenom) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                         {{ form_label(form.email, "Email", {'label_attr': {'class': 'col-sm-6 control-label'}}) }}*/
/*                         <div class="col-sm-5">*/
/*                             {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}<br>*/
/*                         </div>*/
/*                     </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(gens.dateNaissance, "Date de naissance", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                             <div class="col-md-5">*/
/*                                 {{ form_widget(gens.dateNaissance) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(gens.tarifReduit, "Tarif réduit", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                             <div class="col-sm-5">*/
/*                                 {{ form_widget(gens.tarifReduit) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(gens.pays, "Pays", {'label_attr': {'class': 'col-sm-6 control-label'}}) }}*/
/*                             <div class="col-md-5">*/
/*                                 {{ form_widget(gens.pays) }}*/
/*                             </div>*/
/*                         </div><br><br>*/
/*                         {% endfor %}*/
/* </div>*/
/*                         {{ form_rest(form) }}*/
/*                         {{ form_widget(form.save) }}*/
/*                     </form>*/
/* */
/* </div>                    */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
