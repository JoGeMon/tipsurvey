<?php

/* TipddyBackendBundle:Default:index.html.twig */
class __TwigTemplate_475aaa97ec3840220c9f7e25f722e4f2d373748fdab29b279316061cfd255336 extends Twig_Template
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
        echo " <form id=\"new-list\" method=\"post\" action=\"\">
  <fieldset>
     <legend>Seleccionar Encuesta</legend>  
     <div class=\"field-group\">
        <label class=\"invalid\" for=\"name\">
          Encuesta
          <span class=\"asterisk\">*</span>  
        </label>
        <div class=\"field-wrapper\">
          <select id=\"company\" name=\"company\">
                <option value=\"\">No hay encuestas</option>
          </select>
          
        </div>
     </div>
  </fieldset>
  <div class=\"save-cancel-group\">
    <button id=\"new-list-save\" class=\"button\" type=\"submit\">Seleccionar</button>
  </div>
 </form>
<p id=\"nav\">
   <a href=\"#\">Organizaciones</a>
   |
   <a href=\"#\">Usuarios</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "TipddyBackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
