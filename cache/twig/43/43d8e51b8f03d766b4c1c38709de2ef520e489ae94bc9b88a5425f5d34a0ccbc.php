<?php

/* @Page:/var/www/public/user/pages/01.home/_subscribe */
class __TwigTemplate_b44f8d1771158ef91c888bc0e1988b44e4fedc0b697c5d5ab29439e3173046d2 extends Twig_Template
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
        echo "<section class=\"subscribe text-center\" id=\"help_me\">
  <div class=\"container\">
    <h1><i class=\"fa fa-paper-plane\"></i><span>Vill du ha mer information från oss?</span></h1>
    <!-- <form action=\"#\">
<input type=\"text\" name=\"\" value=\"\" placeholder=\"min@e-postadress.se\" required>
<input type=\"submit\" name=\"\" value=\"Jag vill veta mer!\">
</form> -->
<div id=\"short-contact-form-result\" class=\"hidden\"></div>
";
        // line 9
        $this->loadTemplate("forms/form.html.twig", "@Page:/var/www/public/user/pages/01.home/_subscribe", 9)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("short-contact-form")))));
        // line 10
        echo "  </div>
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
        return array (  31 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"subscribe text-center\" id=\"help_me\">
  <div class=\"container\">
    <h1><i class=\"fa fa-paper-plane\"></i><span>Vill du ha mer information från oss?</span></h1>
    <!-- <form action=\"#\">
<input type=\"text\" name=\"\" value=\"\" placeholder=\"min@e-postadress.se\" required>
<input type=\"submit\" name=\"\" value=\"Jag vill veta mer!\">
</form> -->
<div id=\"short-contact-form-result\" class=\"hidden\"></div>
{% include \"forms/form.html.twig\" with { form: forms('short-contact-form') } %}
  </div>
</section>
", "@Page:/var/www/public/user/pages/01.home/_subscribe", "");
    }
}
