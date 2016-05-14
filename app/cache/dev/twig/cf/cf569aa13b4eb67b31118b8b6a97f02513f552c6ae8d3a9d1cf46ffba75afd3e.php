<?php

/* AccueilBundle:Billet:jourf1.html.twig */
class __TwigTemplate_0af1cccf2912147cb97d40eae40d7b8bc8b900e2495a371e35e749faaa5def69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:jourf1.html.twig", 1);
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
        $__internal_fe3365207ed2660e0de56c81eda732039ca1a24cc9d5721d48c64d133f315612 = $this->env->getExtension("native_profiler");
        $__internal_fe3365207ed2660e0de56c81eda732039ca1a24cc9d5721d48c64d133f315612->enter($__internal_fe3365207ed2660e0de56c81eda732039ca1a24cc9d5721d48c64d133f315612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:jourf1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3365207ed2660e0de56c81eda732039ca1a24cc9d5721d48c64d133f315612->leave($__internal_fe3365207ed2660e0de56c81eda732039ca1a24cc9d5721d48c64d133f315612_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac9e5737c56bae008da465044d51f3b76edfd2f5c7ec24cb2f39afb86f0f85f6 = $this->env->getExtension("native_profiler");
        $__internal_ac9e5737c56bae008da465044d51f3b76edfd2f5c7ec24cb2f39afb86f0f85f6->enter($__internal_ac9e5737c56bae008da465044d51f3b76edfd2f5c7ec24cb2f39afb86f0f85f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ac9e5737c56bae008da465044d51f3b76edfd2f5c7ec24cb2f39afb86f0f85f6->leave($__internal_ac9e5737c56bae008da465044d51f3b76edfd2f5c7ec24cb2f39afb86f0f85f6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f8c94654bbd93bf1bcc0282baaa0b706d6b249dc106089777da6f9d8d34a20 = $this->env->getExtension("native_profiler");
        $__internal_20f8c94654bbd93bf1bcc0282baaa0b706d6b249dc106089777da6f9d8d34a20->enter($__internal_20f8c94654bbd93bf1bcc0282baaa0b706d6b249dc106089777da6f9d8d34a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"menu\"><br/><br/><br/><br/><br/><br/><br/>
        <div class=\"row\">
            <div class=\"col-md-offset-3 col-md-6\">
                
                <div class=\"col-md-12 login-head\">
                    <h2 style=\"color:white\">Réservez-Maintenant votre villet</h2> 
                </div>   

                <div class=\"back-form\">

                    <form action=\"\" method=\"get\">
                        <div class=\"col-md-offset-2 col-md-8\">

                            <strong>Date de reservation (format: dd-mm-yyyy)</strong><br>
                            <input type=\"text\" class=\"date form-control\" name=\"date\"><br><br>

                            <strong>Nom </strong><br>
                            <input type=\"text\" class=\"form-control\" name=\"nom\"/><br><br>

                            <strong>Pays</strong><br>
                            <input type=\"text\" class=\"form-control\" name=\"pays\"/><br><br>


                            <strong>Heure:</strong><br>
                            <input type=\"radio\" name=\"demijournee\" class=\"form-horizontal\" value=\"1\" id=\"1\" />
                             <label for=\"1\">Avant 14h</label><br>

                             <input type=\"radio\" name=\"demijournee\" class=\"form-horizontal\" value=\"0\" id=\"0\" checked=\"checked\"/>
                             <label for=\"0\">Après 14h</label><br>

                            
                         </div>    
                        <div class=\"sign-up\">
                            <button type=\"submit\" class=\"btn-default btn\">Valider</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

        <script>
            function twRequeteVariable(sVariable) {
                // Éliminer le \"?\"
                var sReq = window.location.search.substring(1);
                // Matrice de la requête
                var aReq = sReq.split(\"&\");
                // Boucle les variables
                for (var i=0;i<aReq.length;i++) {
                    // Matrice de la variables / valeur
                    var aVar = aReq[i].split(\"=\");
                    // Retourne la valeur si la variable
                    // demandée = la variable de la boucle
                    if(aVar[0] == sVariable){return aVar[1];}
                }
                // Aucune variable de trouvée.
                return(false);
            }

            var date = twRequeteVariable(\"date\");
            var dj = twRequeteVariable(\"demijournee\");
            var nom = twRequeteVariable(\"nom\");
            var pays = twRequeteVariable(\"pays\");

            if(date && dj && places)
            {
                document.location.href=date+\"/\"+dj+\"/\"+nom+\"/\"+pays;
            }

        </script>
";
        
        $__internal_20f8c94654bbd93bf1bcc0282baaa0b706d6b249dc106089777da6f9d8d34a20->leave($__internal_20f8c94654bbd93bf1bcc0282baaa0b706d6b249dc106089777da6f9d8d34a20_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:jourf1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AccueilBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="menu"><br/><br/><br/><br/><br/><br/><br/>*/
/*         <div class="row">*/
/*             <div class="col-md-offset-3 col-md-6">*/
/*                 */
/*                 <div class="col-md-12 login-head">*/
/*                     <h2 style="color:white">Réservez-Maintenant votre villet</h2> */
/*                 </div>   */
/* */
/*                 <div class="back-form">*/
/* */
/*                     <form action="" method="get">*/
/*                         <div class="col-md-offset-2 col-md-8">*/
/* */
/*                             <strong>Date de reservation (format: dd-mm-yyyy)</strong><br>*/
/*                             <input type="text" class="date form-control" name="date"><br><br>*/
/* */
/*                             <strong>Nom </strong><br>*/
/*                             <input type="text" class="form-control" name="nom"/><br><br>*/
/* */
/*                             <strong>Pays</strong><br>*/
/*                             <input type="text" class="form-control" name="pays"/><br><br>*/
/* */
/* */
/*                             <strong>Heure:</strong><br>*/
/*                             <input type="radio" name="demijournee" class="form-horizontal" value="1" id="1" />*/
/*                              <label for="1">Avant 14h</label><br>*/
/* */
/*                              <input type="radio" name="demijournee" class="form-horizontal" value="0" id="0" checked="checked"/>*/
/*                              <label for="0">Après 14h</label><br>*/
/* */
/*                             */
/*                          </div>    */
/*                         <div class="sign-up">*/
/*                             <button type="submit" class="btn-default btn">Valider</button>*/
/*                         </div>*/
/*                     </form>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*         <script>*/
/*             function twRequeteVariable(sVariable) {*/
/*                 // Éliminer le "?"*/
/*                 var sReq = window.location.search.substring(1);*/
/*                 // Matrice de la requête*/
/*                 var aReq = sReq.split("&");*/
/*                 // Boucle les variables*/
/*                 for (var i=0;i<aReq.length;i++) {*/
/*                     // Matrice de la variables / valeur*/
/*                     var aVar = aReq[i].split("=");*/
/*                     // Retourne la valeur si la variable*/
/*                     // demandée = la variable de la boucle*/
/*                     if(aVar[0] == sVariable){return aVar[1];}*/
/*                 }*/
/*                 // Aucune variable de trouvée.*/
/*                 return(false);*/
/*             }*/
/* */
/*             var date = twRequeteVariable("date");*/
/*             var dj = twRequeteVariable("demijournee");*/
/*             var nom = twRequeteVariable("nom");*/
/*             var pays = twRequeteVariable("pays");*/
/* */
/*             if(date && dj && places)*/
/*             {*/
/*                 document.location.href=date+"/"+dj+"/"+nom+"/"+pays;*/
/*             }*/
/* */
/*         </script>*/
/* {% endblock %}*/
/* */
