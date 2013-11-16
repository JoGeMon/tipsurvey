<?php

/* TipddySurveyBundle:Survey:edit.html.twig */
class __TwigTemplate_526a27cb89dae8d5428f4bf3f11aa21a7e7c86bfbc9da2878e8e35a84f69dcae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TipddyBackendBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TipddyBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "  
  <fieldset>
    <legend>Editando</legend>
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title"), 'row', array("label" => "Título"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'row', array("label" => "Descripción"));
        echo "
  </fieldset>
";
        // line 10
        echo twig_include($this->env, $context, "TipddyBackendBundle::includes/buttons-form.html.twig", array("btn_action" => "Actualizar", "route" => "survey"));
        echo "

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'row');
        echo "

";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo "

  <p id=\"nav\">
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("survey");
        echo "\">Volver Listado</a>
    |
    <a href=\"#\">Borrar</a>
    </p>  

<ul class=\"record_actions\">
        <li>";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>



  
";
    }

    public function getTemplateName()
    {
        return "TipddySurveyBundle:Survey:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  62 => 17,  56 => 14,  51 => 12,  46 => 10,  41 => 8,  37 => 7,  31 => 4,  28 => 3,);
    }
}
