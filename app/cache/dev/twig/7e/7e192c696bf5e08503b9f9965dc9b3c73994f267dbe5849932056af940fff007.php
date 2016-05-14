<?php

/* AccueilBundle:Billet:reservationf.html.twig */
class __TwigTemplate_56b7f24f9e6042054ad28d884cf072b1b30744cf5a1ccdf7bf3d571eeda68d97 extends Twig_Template
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
        $__internal_5175d320ec48d6d19da1f0e89d634465e16180ddd3536f240c8bd9148233be7a = $this->env->getExtension("native_profiler");
        $__internal_5175d320ec48d6d19da1f0e89d634465e16180ddd3536f240c8bd9148233be7a->enter($__internal_5175d320ec48d6d19da1f0e89d634465e16180ddd3536f240c8bd9148233be7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:reservationf.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5175d320ec48d6d19da1f0e89d634465e16180ddd3536f240c8bd9148233be7a->leave($__internal_5175d320ec48d6d19da1f0e89d634465e16180ddd3536f240c8bd9148233be7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c600452172f13b8c59edf16cba4e114f3b518b0dee007be10bec5a117fab5ae8 = $this->env->getExtension("native_profiler");
        $__internal_c600452172f13b8c59edf16cba4e114f3b518b0dee007be10bec5a117fab5ae8->enter($__internal_c600452172f13b8c59edf16cba4e114f3b518b0dee007be10bec5a117fab5ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Réservation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c600452172f13b8c59edf16cba4e114f3b518b0dee007be10bec5a117fab5ae8->leave($__internal_c600452172f13b8c59edf16cba4e114f3b518b0dee007be10bec5a117fab5ae8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66bf493a511cb1631ddb0c564c2f8a7be81ddb2ea072b16182dadcb37f52614 = $this->env->getExtension("native_profiler");
        $__internal_d66bf493a511cb1631ddb0c564c2f8a7be81ddb2ea072b16182dadcb37f52614->enter($__internal_d66bf493a511cb1631ddb0c564c2f8a7be81ddb2ea072b16182dadcb37f52614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"col-md-offset-2 col-md-10\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billet", array()));
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-6 control-label"), "label" => "Email"));
            echo "
                        <div class=\"col-sm-5\">
                            ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </form>

</div>                    
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d66bf493a511cb1631ddb0c564c2f8a7be81ddb2ea072b16182dadcb37f52614->leave($__internal_d66bf493a511cb1631ddb0c564c2f8a7be81ddb2ea072b16182dadcb37f52614_prof);

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
        return array (  140 => 51,  136 => 50,  133 => 49,  121 => 43,  116 => 41,  108 => 36,  103 => 34,  95 => 29,  90 => 27,  86 => 25,  82 => 24,  76 => 21,  72 => 20,  60 => 10,  54 => 9,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
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
