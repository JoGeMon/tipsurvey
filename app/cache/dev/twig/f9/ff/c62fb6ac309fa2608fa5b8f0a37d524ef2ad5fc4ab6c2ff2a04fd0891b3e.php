<?php

/* TipddySurveyBundle:Question:includes/form-data-prototype-text.html.twig */
class __TwigTemplate_f9ffc62fb6ac309fa2608fa5b8f0a37d524ef2ad5fc4ab6c2ff2a04fd0891b3e extends Twig_Template
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
        // line 1
        echo "<table class=\"new-answers\" id=\"tipddy_tipsurveybundle_questiontype_answers_\$\$name\$\$\">
   <tr>
     <td>&nbsp;</td>
     <td colspan=\"2\">Answer</td>     
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td colspan=\"2\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "answer"), 'widget');
        echo "</td>
     <td class=\"adelete\"></td>
   </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "TipddySurveyBundle:Question:includes/form-data-prototype-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
