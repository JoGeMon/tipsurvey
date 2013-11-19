<?php

/* TipddySecurityBundle:User:show.html.twig */
class __TwigTemplate_d64aa6324981e208b74248a1fe209baf034ef8a6f156d3a8bf6116cf84b9c4be extends Twig_Template
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
        echo "<fieldset>
<legend>Mostrando Usuario</legend>
";
        // line 6
        echo $this->getAttribute($this, "fieldReadText", array(0 => "firstName", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), 2 => "Nombre"), "method");
        echo "
";
        // line 7
        echo $this->getAttribute($this, "fieldReadText", array(0 => "firstName", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName"), 2 => "Apellido"), "method");
        echo "
";
        // line 8
        echo $this->getAttribute($this, "fieldReadText", array(0 => "email", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), 2 => "Email"), "method");
        echo "
";
        // line 9
        echo $this->getAttribute($this, "fieldReadText", array(0 => "address", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), 2 => "Dirección"), "method");
        echo "
";
        // line 10
        echo " 
</fieldset>
<p id=\"nav\">
<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Volver a listado</a>
|
<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Editar</a>
|
<a href=\"#\">Borrar</a>
</p>
";
    }

    // line 21
    public function getfieldReadText($_element = null, $_value = null, $_label = null)
    {
        $context = $this->env->mergeGlobals(array(
            "element" => $_element,
            "value" => $_value,
            "label" => $_label,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "<div class=\"\">
<label for=\"tipddy_securitybundle_show_";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</label>

<div class=\"field-wrapper\">
";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
</div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TipddySecurityBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  86 => 23,  83 => 22,  70 => 21,  61 => 15,  56 => 13,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
