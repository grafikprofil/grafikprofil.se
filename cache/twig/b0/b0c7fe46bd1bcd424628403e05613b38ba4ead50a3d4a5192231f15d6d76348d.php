<?php

/* @Page:/var/www/public/user/pages/01.home/_subscribe */
class __TwigTemplate_95157847bc81e87e726fdf1bdd396177ec90871e7c86046af2e409cd50a9b631 extends Twig_Template
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
    \t\t<h1 class=\"text-center\"><i class=\"fa fa-paper-plane\"></i><span>Vill du ha hjälp av oss, eller bara veta mer?</span></h1>
    \t\t";
        // line 6
        $this->loadTemplate("forms/form.html.twig", "@Page:/var/www/public/user/pages/01.home/_subscribe", 6)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("short-contact-form")))));
        // line 7
        echo "    \t\t<div id=\"short-contact-form-result\" class=\"hidden\"></div>
    \t</div>
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
        return array (  28 => 7,  26 => 6,  19 => 1,);
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
    \t\t<h1 class=\"text-center\"><i class=\"fa fa-paper-plane\"></i><span>Vill du ha hjälp av oss, eller bara veta mer?</span></h1>
    \t\t{% include \"forms/form.html.twig\" with { form: forms('short-contact-form') } %}
    \t\t<div id=\"short-contact-form-result\" class=\"hidden\"></div>
    \t</div>
    </div>
  </div>
</section>
", "@Page:/var/www/public/user/pages/01.home/_subscribe", "");
    }
}
