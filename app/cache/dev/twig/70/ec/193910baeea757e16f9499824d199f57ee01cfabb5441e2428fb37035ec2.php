<?php

/* TipddySecurityBundle:Default:login.html.twig */
class __TwigTemplate_70ec193910baeea757e16f9499824d199f57ee01cfabb5441e2428fb37035ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tipddysecurity/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo " <div id=\"login\">
   <h1><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tipddysecurity/images/logo-tipsurvey.png"), "html", null, true);
        echo "\" /></h1>

";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "    <div id=\"login_error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 15
        echo "
<form id=\"login-form\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
 <p>
   <label for=\"user_login\">Usuario</label>  <br />
    <input type=\"text\" id=\"input_login\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
 </p>
 
 <p>
   <label for=\"user_password\">Contraseña</label>  <br />
    <input type=\"password\" id=\"input_password\" name=\"_password\" />
 </p>
 
  <button type=\"submit\">Ingresar</button>

   </form>
 </div>

";
    }

    public function getTemplateName()
    {
        return "TipddySecurityBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  61 => 16,  58 => 15,  52 => 13,  50 => 12,  45 => 10,  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
