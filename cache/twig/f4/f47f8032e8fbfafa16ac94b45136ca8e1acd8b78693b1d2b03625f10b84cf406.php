<?php

/* modular/swag.html.twig */
class __TwigTemplate_58b2b8ee81dd5b0a04efffdb7fea400e5c3bccf51eb8c396a851b6ec06020640 extends Twig_Template
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
        echo "<section class=\"swag text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        <!--<a href=\"#portfolio\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>-->
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/swag.html.twig";
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
        return new Twig_Source("<section class=\"swag text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        {{ page.content }}
        <!--<a href=\"#portfolio\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>-->
      </div>
    </div>
  </div>
</section>
", "modular/swag.html.twig", "/var/www/public/user/themes/halcyon/templates/modular/swag.html.twig");
    }
}
