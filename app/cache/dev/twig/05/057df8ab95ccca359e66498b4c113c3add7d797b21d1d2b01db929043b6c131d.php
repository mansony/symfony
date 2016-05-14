<?php

/* AccueilBundle:Billet:jourf.html.twig */
class __TwigTemplate_9854e4c83f74b04863220fa9cbe00d14f512ba9d4435d4a47308533318e66b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AccueilBundle::layout.html.twig", "AccueilBundle:Billet:jourf.html.twig", 1);
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
        $__internal_59cfcfb823d2368b4fe919e889f20cda7e0706d2300248a318a48a45854b21e9 = $this->env->getExtension("native_profiler");
        $__internal_59cfcfb823d2368b4fe919e889f20cda7e0706d2300248a318a48a45854b21e9->enter($__internal_59cfcfb823d2368b4fe919e889f20cda7e0706d2300248a318a48a45854b21e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Billet:jourf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59cfcfb823d2368b4fe919e889f20cda7e0706d2300248a318a48a45854b21e9->leave($__internal_59cfcfb823d2368b4fe919e889f20cda7e0706d2300248a318a48a45854b21e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b34c303fed70eba6d8e540d40d2a5fabc3f1b04192d0178c41141cec846fe06f = $this->env->getExtension("native_profiler");
        $__internal_b34c303fed70eba6d8e540d40d2a5fabc3f1b04192d0178c41141cec846fe06f->enter($__internal_b34c303fed70eba6d8e540d40d2a5fabc3f1b04192d0178c41141cec846fe06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b34c303fed70eba6d8e540d40d2a5fabc3f1b04192d0178c41141cec846fe06f->leave($__internal_b34c303fed70eba6d8e540d40d2a5fabc3f1b04192d0178c41141cec846fe06f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_de058003ab660efaaa387bf76a8075e4563e67a34c089d91f7e97348c3802ca0 = $this->env->getExtension("native_profiler");
        $__internal_de058003ab660efaaa387bf76a8075e4563e67a34c089d91f7e97348c3802ca0->enter($__internal_de058003ab660efaaa387bf76a8075e4563e67a34c089d91f7e97348c3802ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"menu\"><br/><br/><br/>
<div class=\"alert alert-info col-md-offset-3 col-md-6\" role=\"alert\" style=\"text-align:center;color:white;font-size:18px;background-color:#222;\">
  <strong>Résérvez maintenant, Vous viendrez en famille</strong> 
      </div>
<br/><br/><br/><br/>
        <div class=\"row\">
            <div class=\"col-md-offset-3 col-md-6\">
                 

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
            var nom = twRequeteVariable(\"nom\");
            var pays = twRequeteVariable(\"pays\");
            var dj = twRequeteVariable(\"demijournee\");

            if(date && nom && pays && dj)
            {
                document.location.href=date+\"/\"+dj+\"/\"+nom+\"/\"+pays;
            }

        </script>
";
        
        $__internal_de058003ab660efaaa387bf76a8075e4563e67a34c089d91f7e97348c3802ca0->leave($__internal_de058003ab660efaaa387bf76a8075e4563e67a34c089d91f7e97348c3802ca0_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Billet:jourf.html.twig";
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
/* <div class="alert alert-info col-md-offset-3 col-md-6" role="alert" style="text-align:center;color:white;font-size:18px;background-color:#222;">*/
/*   <strong>Résérvez maintenant, Vous viendrez en famille</strong> */
/*       </div>*/
/* <br/><br/><br/><br/>*/
/*         <div class="row">*/
/*             <div class="col-md-offset-3 col-md-6">*/
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
/*             var nom = twRequeteVariable("nom");*/
/*             var pays = twRequeteVariable("pays");*/
/*             var dj = twRequeteVariable("demijournee");*/
/* */
/*             if(date && nom && pays && dj)*/
/*             {*/
/*                 document.location.href=date+"/"+dj+"/"+nom+"/"+pays;*/
/*             }*/
/* */
/*         </script>*/
/* {% endblock %}*/
/* */
