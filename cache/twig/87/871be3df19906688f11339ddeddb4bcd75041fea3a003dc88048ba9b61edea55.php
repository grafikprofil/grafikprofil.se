<?php

/* modular/intro.html.twig */
class __TwigTemplate_dddac00d2fec73eb1c60ae3cb28a637d2414f70cff2553ac32e9e96b8e8e076a extends Twig_Template
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
        echo "<section class=\"intro text-center section-padding\" id=\"historien_om_oss\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 wp1\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"intro text-center section-padding\" id=\"historien_om_oss\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 wp1\">
        {{ page.content }}
      </div>
    </div>
  </div>
</section>
", "modular/intro.html.twig", "/var/www/public/user/themes/halcyon/templates/modular/intro.html.twig");
    }
}
