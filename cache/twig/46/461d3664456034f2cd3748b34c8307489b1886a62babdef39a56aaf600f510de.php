<?php

/* @Var:Vi har mottagit ditt meddelande och återkommer alldeles strax! */
class __TwigTemplate_25b897e1efda5d23a1167137b8b080fd4d4930e9896492cd624e3fa4db68a6f9 extends Twig_Template
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
        echo "Vi har mottagit ditt meddelande och återkommer alldeles strax!";
    }

    public function getTemplateName()
    {
        return "@Var:Vi har mottagit ditt meddelande och återkommer alldeles strax!";
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
        return new Twig_Source("Vi har mottagit ditt meddelande och återkommer alldeles strax!", "@Var:Vi har mottagit ditt meddelande och återkommer alldeles strax!", "");
    }
}
