<?php

/* @Var:{% include 'forms/data.txt.twig' %} */
class __TwigTemplate_8cde5d2c378dd63621f6a44bfba6144f3aa7884c2ce2d6691a2877ae5d057a78 extends Twig_Template
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
        $this->loadTemplate("forms/data.txt.twig", "@Var:{% include 'forms/data.txt.twig' %}", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Var:{% include 'forms/data.txt.twig' %}";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'forms/data.txt.twig' %}", "@Var:{% include 'forms/data.txt.twig' %}", "");
    }
}