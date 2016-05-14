<?php

/* AccueilBundle:Billet:jour.html.twig */
class __TwigTemplate_083aa5042b8c1c562dff310d11a5e0fd5d8826b155ff1f9f1ec0eee6df0d7e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:jour.html.twig", 1);
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
        $__internal_0e0eaaefaf0a7c74e3c8eb4deefe58ab007ba7ac614f9394b03c3fc1d20fddac = $this->env->getExtension("native_profiler");
        $__internal_0e0eaaefaf0a7c74e3c8eb4deefe58ab007ba7ac614f9394b03c3fc1d20fddac->enter($__internal_0e0eaaefaf0a7c74e3c8eb4deefe58ab007ba7ac614f9394b03c3fc1d20fddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:jour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0eaaefaf0a7c74e3c8eb4deefe58ab007ba7ac614f9394b03c3fc1d20fddac->leave($__internal_0e0eaaefaf0a7c74e3c8eb4deefe58ab007ba7ac614f9394b03c3fc1d20fddac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d153cb2cf251de0aac456d52ce0f585e442489492bb5d23fe8426577388bab3 = $this->env->getExtension("native_profiler");
        $__internal_7d153cb2cf251de0aac456d52ce0f585e442489492bb5d23fe8426577388bab3->enter($__internal_7d153cb2cf251de0aac456d52ce0f585e442489492bb5d23fe8426577388bab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7d153cb2cf251de0aac456d52ce0f585e442489492bb5d23fe8426577388bab3->leave($__internal_7d153cb2cf251de0aac456d52ce0f585e442489492bb5d23fe8426577388bab3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa696858742dddf230581690ff30c6743c18784ff35a390889316c6d2be01d0 = $this->env->getExtension("native_profiler");
        $__internal_4aa696858742dddf230581690ff30c6743c18784ff35a390889316c6d2be01d0->enter($__internal_4aa696858742dddf230581690ff30c6743c18784ff35a390889316c6d2be01d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"menu\"><br/><br/><br/>
 <div class=\"alert alert-info col-md-offset-3 col-md-6\" role=\"alert\" style=\"text-align:center;color:white;font-size:18px;background-color:#222;\">
  <strong>Résérvez maintenant</strong> 
      </div>
<br/><br/><br/><br/>
        <div class=\"row\">
            <div class=\"col-md-offset-3 col-md-6\">
                
                 

                <div class=\"back-form\">

                    <form action=\"\" method=\"get\">
                        <div class=\"col-md-offset-2 col-md-8\">

                            <strong>Date de reservation (format: dd-mm-yyyy)</strong><br>
                            <input type=\"text\" class=\"date form-control\" name=\"date\"><br><br>

                            <strong>Total place</strong><br>
                            <input type=\"number\" class=\"form-control\" name=\"places\"/><br><br>

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
            var places = twRequeteVariable(\"places\");

            if(date && dj && places)
            {
                document.location.href=date+\"/\"+dj+\"/\"+places;
            }

        </script>
";
        
        $__internal_4aa696858742dddf230581690ff30c6743c18784ff35a390889316c6d2be01d0->leave($__internal_4aa696858742dddf230581690ff30c6743c18784ff35a390889316c6d2be01d0_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:jour.html.twig";
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
/* <div class="menu"><br/><br/><br/>*/
/*  <div class="alert alert-info col-md-offset-3 col-md-6" role="alert" style="text-align:center;color:white;font-size:18px;background-color:#222;">*/
/*   <strong>Résérvez maintenant</strong> */
/*       </div>*/
/* <br/><br/><br/><br/>*/
/*         <div class="row">*/
/*             <div class="col-md-offset-3 col-md-6">*/
/*                 */
/*                  */
/* */
/*                 <div class="back-form">*/
/* */
/*                     <form action="" method="get">*/
/*                         <div class="col-md-offset-2 col-md-8">*/
/* */
/*                             <strong>Date de reservation (format: dd-mm-yyyy)</strong><br>*/
/*                             <input type="text" class="date form-control" name="date"><br><br>*/
/* */
/*                             <strong>Total place</strong><br>*/
/*                             <input type="number" class="form-control" name="places"/><br><br>*/
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
/*             var places = twRequeteVariable("places");*/
/* */
/*             if(date && dj && places)*/
/*             {*/
/*                 document.location.href=date+"/"+dj+"/"+places;*/
/*             }*/
/* */
/*         </script>*/
/* {% endblock %}*/
/* */
