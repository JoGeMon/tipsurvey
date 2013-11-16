<?php

/* TipddySurveyBundle:Survey:new.html.twig */
class __TwigTemplate_0e2a7303f468fecc4f88cace633e255a49c509873140a6c57403f043777611e1 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
  <fieldset>
    <legend>Nueva Encueseta</legend>
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'row', array("label" => "Título"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'row', array("label" => "Descripción"));
        echo "
  </fieldset> 
";
        // line 10
        $this->env->loadTemplate("TipddyBackendBundle::includes/buttons-form.html.twig")->display(array_merge($context, array("btn_action" => "Crear", "route" => "survey")));
        echo "  
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo " 
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
  
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("survey");
        echo "\">
          Volver al listado
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TipddySurveyBundle:Survey:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  54 => 12,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  31 => 4,  28 => 3,);
    }
}
