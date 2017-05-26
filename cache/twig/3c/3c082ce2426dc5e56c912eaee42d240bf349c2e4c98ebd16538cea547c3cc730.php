<?php

/* @Page:/var/www/public/user/pages/01.home/_subscribe */
class __TwigTemplate_a31c3972419f45c1bdf5fe3f14fdd8074023fc802608ab11f685fef17f76ec96 extends Twig_Template
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
";
        // line 8
        $this->loadTemplate("forms/form.html.twig", "@Page:/var/www/public/user/pages/01.home/_subscribe", 8)->display($context);
        // line 9
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
        return array (  30 => 9,  28 => 8,  19 => 1,);
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
{% include \"forms/form.html.twig\" %}
  </div>
</section>
", "@Page:/var/www/public/user/pages/01.home/_subscribe", "");
    }
}
