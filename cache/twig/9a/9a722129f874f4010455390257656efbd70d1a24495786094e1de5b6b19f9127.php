<?php

/* partials/cookiespolicy.html.twig */
class __TwigTemplate_0709f312673b6d72a5eff87359fb545f884dd4349d7466997213547072abbe0e extends Twig_Template
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
        echo "<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsent";
        // line 3
        echo twig_capitalize_string_filter($this->env, (isset($context["cookiespolicy_cookie_type"]) ? $context["cookiespolicy_cookie_type"] : null));
        echo "(\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.COOKIES_POLICY.MESSAGE");
        echo "\",\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.COOKIES_POLICY.CLOSE");
        echo "\",\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.COOKIES_POLICY.PRIVACY");
        echo "\",\"";
        echo (isset($context["cookiespolicy_url"]) ? $context["cookiespolicy_url"] : null);
        echo "\");
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/cookiespolicy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsent{{ cookiespolicy_cookie_type|capitalize }}(\"{{ 'PLUGINS.COOKIES_POLICY.MESSAGE'|t }}\",\"{{ 'PLUGINS.COOKIES_POLICY.CLOSE'|t }}\",\"{{ 'PLUGINS.COOKIES_POLICY.PRIVACY'|t }}\",\"{{ cookiespolicy_url }}\");
  });
</script>
", "partials/cookiespolicy.html.twig", "/var/www/public/user/plugins/cookiespolicy/templates/partials/cookiespolicy.html.twig");
    }
}
