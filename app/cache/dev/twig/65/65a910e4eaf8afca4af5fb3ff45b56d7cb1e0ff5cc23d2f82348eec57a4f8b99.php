<?php

/* AccueilBundle:Billet:reservation.html.twig */
class __TwigTemplate_f5b053060d8886bb0f9475806723a1fbcfa246adc63e817891e3b876b3b1da4c extends Twig_Template
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
        $__internal_e3d631d2211e5f8a74dd90181fe50840e50f32099ffbf12ae5c663efb4303ecb = $this->env->getExtension("native_profiler");
        $__internal_e3d631d2211e5f8a74dd90181fe50840e50f32099ffbf12ae5c663efb4303ecb->enter($__internal_e3d631d2211e5f8a74dd90181fe50840e50f32099ffbf12ae5c663efb4303ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:reservation.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d631d2211e5f8a74dd90181fe50840e50f32099ffbf12ae5c663efb4303ecb->leave($__internal_e3d631d2211e5f8a74dd90181fe50840e50f32099ffbf12ae5c663efb4303ecb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c6566f99e98c830f69217402152f8d5a580b6f3df639438cbbf65ba2236271f = $this->env->getExtension("native_profiler");
        $__internal_5c6566f99e98c830f69217402152f8d5a580b6f3df639438cbbf65ba2236271f->enter($__internal_5c6566f99e98c830f69217402152f8d5a580b6f3df639438cbbf65ba2236271f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Réservation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c6566f99e98c830f69217402152f8d5a580b6f3df639438cbbf65ba2236271f->leave($__internal_5c6566f99e98c830f69217402152f8d5a580b6f3df639438cbbf65ba2236271f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ebe0e923d4d4636ab6256e6587e6d7008701b3dd84d21666689171133e48490 = $this->env->getExtension("native_profiler");
        $__internal_6ebe0e923d4d4636ab6256e6587e6d7008701b3dd84d21666689171133e48490->enter($__internal_6ebe0e923d4d4636ab6256e6587e6d7008701b3dd84d21666689171133e48490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"col-md-offset-2 col-md-10\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billet", array()));
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Email"));
            echo "
                        <div class=\"col-sm-5\">
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </form>

</div>                    
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6ebe0e923d4d4636ab6256e6587e6d7008701b3dd84d21666689171133e48490->leave($__internal_6ebe0e923d4d4636ab6256e6587e6d7008701b3dd84d21666689171133e48490_prof);

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
        return array (  176 => 69,  172 => 68,  169 => 67,  159 => 63,  154 => 61,  147 => 57,  142 => 55,  135 => 51,  130 => 49,  123 => 45,  118 => 43,  111 => 39,  106 => 37,  99 => 33,  94 => 31,  91 => 30,  87 => 29,  81 => 26,  77 => 25,  60 => 10,  54 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
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
