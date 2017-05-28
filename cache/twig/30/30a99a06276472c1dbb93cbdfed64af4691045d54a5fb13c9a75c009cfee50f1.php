<?php

/* modular/subscribe.html.twig */
class __TwigTemplate_d077417dc7bceadebfb69d74db1636d2731118fcdb6d2f085e5c0d38c131a334 extends Twig_Template
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
        echo "<section class=\"subscribe section-padding\" id=\"help_me\">
  <div class=\"container\">
  \t<div class=\"row\">
  \t\t<div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
    \t\t<h1 class=\"text-center\"><i class=\"fa fa-paper-plane\"></i><span>";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</span></h1>
    \t\t";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    \t\t<div id=\"short-contact-form-result\" class=\"hidden\"></div>
    \t</div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"subscribe section-padding\" id=\"help_me\">
  <div class=\"container\">
  \t<div class=\"row\">
  \t\t<div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
    \t\t<h1 class=\"text-center\"><i class=\"fa fa-paper-plane\"></i><span>{{ page.header.title }}</span></h1>
    \t\t{{ page.content }}
    \t\t<div id=\"short-contact-form-result\" class=\"hidden\"></div>
    \t</div>
    </div>
  </div>
</section>
", "modular/subscribe.html.twig", "/var/www/public/user/themes/halcyon/templates/modular/subscribe.html.twig");
    }
}
