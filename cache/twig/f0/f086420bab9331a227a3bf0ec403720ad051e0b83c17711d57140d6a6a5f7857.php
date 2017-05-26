<?php

/* form-messages.html.twig */
class __TwigTemplate_836977f67b3155f2a6cee8f752da91857cb81fbd20a31ced3fdb2f3cf6dbdf67 extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array()) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()))) {
                // line 3
                echo "    <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL");
                echo "</p></div>
    ";
            } else {
                // line 5
                echo "    <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
                echo "</p></div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.message %}
    {% if form.inline_errors and form.messages %}
    <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ \"FORM.VALIDATION_FAIL\"|t|raw }}</p></div>
    {% else %}
    <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ form.message|raw }}</p></div>
    {% endif %}
{% endif %}
", "form-messages.html.twig", "/var/www/public/user/plugins/form/templates/form-messages.html.twig");
    }
}
