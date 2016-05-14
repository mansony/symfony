<?php

/* AccueilBundle:Billet:jour.html.twig */
class __TwigTemplate_745caa5e66a5ceab4c0ef6e3a351e020960f3758aaaa63fe6899347f0077fa9e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
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