<?php

/* @Var:[KONTAKTFORMULÄR] {{ form.value.name|e }} */
class __TwigTemplate_e301dd5cdfe6cf54de8b1b71122bce32e5254460d1863e7ba472ee54b41ceb4d extends Twig_Template
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
        echo "[KONTAKTFORMULÄR] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:[KONTAKTFORMULÄR] {{ form.value.name|e }}";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("[KONTAKTFORMULÄR] {{ form.value.name|e }}", "@Var:[KONTAKTFORMULÄR] {{ form.value.name|e }}", "");
    }
}
