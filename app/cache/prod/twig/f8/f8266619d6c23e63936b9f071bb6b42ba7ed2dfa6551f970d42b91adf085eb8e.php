<?php

/* AccueilBundle:Billet:reservationf.html.twig */
class __TwigTemplate_ce43cf51e02bb288d904f25512622cb231f5c3961fefc75e12d8bc96fddd4a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:reservationf.html.twig", 1);
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
<div class=\"alert alert-info col-md-offset-3 col-md-6\" role=\"alert\" style=\"text-align:center;color:white;font-size:18px;background-color:#222;\">
  <strong>Résérvez maintenant</strong> 
      </div>
    <br/><br/><br/><br/>
        <div class=\"row\">
            <div class=\"col-md-offset-1 col-md-9\">
                <div class=\"\">

<div class=\"back-form\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<div class=\"col-md-offset-2 col-md-10\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "billet", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gens"]) {
            // line 25
            echo "                      
                        <div class=\"form-group\">
                            ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Prénom"));
            echo "
                            <div class=\"col-sm-5\">
                                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "prenom", array()), 'widget');
            echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Email"));
            echo "
                        <div class=\"col-sm-5\">
                            ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "<br>
                        </div>
                    </div>

                        <div class=\"form-group\">
                            ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "dateNaissance", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de naissance"));
            echo "
                            <div class=\"col-md-5\">
                                ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["gens"], "dateNaissance", array()), 'widget');
            echo "
                            </div>
                        </div>
                        
                        <br><br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                        ";
        // line 51
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
        return "AccueilBundle:Billet:reservationf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  121 => 50,  118 => 49,  106 => 43,  101 => 41,  93 => 36,  88 => 34,  80 => 29,  75 => 27,  71 => 25,  67 => 24,  61 => 21,  57 => 20,  45 => 10,  42 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
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
/* <div class="alert alert-info col-md-offset-3 col-md-6" role="alert" style="text-align:center;color:white;font-size:18px;background-color:#222;">*/
/*   <strong>Résérvez maintenant</strong> */
/*       </div>*/
/*     <br/><br/><br/><br/>*/
/*         <div class="row">*/
/*             <div class="col-md-offset-1 col-md-9">*/
/*                 <div class="">*/
/* */
/* <div class="back-form">*/
/*                     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/* <div class="col-md-offset-2 col-md-10">*/
/*                         {% for gens in form.billet %}*/
/*                       */
/*                         <div class="form-group">*/
/*                             {{ form_label(gens.prenom, "Prénom", {'label_attr': {'class': 'col-sm-6 control-label'}}) }}*/
/*                             <div class="col-sm-5">*/
/*                                 {{ form_widget(gens.prenom) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                         {{ form_label(form.email, "Email", {'label_attr': {'class': 'col-sm-6 control-label'}}) }}*/
/*                         <div class="col-sm-5">*/
/*                             {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}<br>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                         <div class="form-group">*/
/*                             {{ form_label(gens.dateNaissance, "Date de naissance", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                             <div class="col-md-5">*/
/*                                 {{ form_widget(gens.dateNaissance) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <br><br>*/
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
