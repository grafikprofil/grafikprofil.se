<?php

/* @Page:/var/www/public/user/pages/01.home/_subscribe */
class __TwigTemplate_0ca3d9a388878c1a1515ae3ebf7e37af001c74bd4bd330682ce6282a8ce931d0 extends Twig_Template
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
        echo "<section class=\"subscribe\" id=\"help_me\">
  <div class=\"container\">
  \t<div class=\"row\">
  \t\t<div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
    \t\t<h1><i class=\"fa fa-paper-plane\"></i><span>Vill du ha mer information från oss?</span></h1>
    \t\t<!-- <form action=\"#\">
<input type=\"text\" name=\"\" value=\"\" placeholder=\"min@e-postadress.se\" required>
<input type=\"submit\" name=\"\" value=\"Jag vill veta mer!\">
</form> -->
<div id=\"short-contact-form-result\" class=\"hidden\"></div>
";
        // line 11
        $this->loadTemplate("forms/form.html.twig", "@Page:/var/www/public/user/pages/01.home/_subscribe", 11)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("short-contact-form")))));
        // line 12
        echo "    \t</div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/public/user/pages/01.home/_subscribe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"subscribe\" id=\"help_me\">
  <div class=\"container\">
  \t<div class=\"row\">
  \t\t<div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
    \t\t<h1><i class=\"fa fa-paper-plane\"></i><span>Vill du ha mer information från oss?</span></h1>
    \t\t<!-- <form action=\"#\">
<input type=\"text\" name=\"\" value=\"\" placeholder=\"min@e-postadress.se\" required>
<input type=\"submit\" name=\"\" value=\"Jag vill veta mer!\">
</form> -->
<div id=\"short-contact-form-result\" class=\"hidden\"></div>
{% include \"forms/form.html.twig\" with { form: forms('short-contact-form') } %}
    \t</div>
    </div>
  </div>
</section>
", "@Page:/var/www/public/user/pages/01.home/_subscribe", "");
    }
}
