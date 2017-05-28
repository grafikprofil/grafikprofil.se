<?php

/* partials/cookiesnotice.html.twig */
class __TwigTemplate_db1c5cd70e5dc6d53dd839aa166dce10a34166a0fb2de0e41af8710375ee7c7d extends Twig_Template
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
\t\$(document).ready(function() {
 \t\t\$.showCookiesNotice(\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.COOKIES_NOTICE.COOKIE");
        echo "\", \"";
        echo (isset($context["cookiesnotice_url"]) ? $context["cookiesnotice_url"] : null);
        echo "\", \"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.COOKIES_NOTICE.LINK");
        echo "\", \"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.COOKIES_NOTICE.DIMISS");
        echo "\", \"";
        echo (isset($context["cookiesnotice_position"]) ? $context["cookiesnotice_position"] : null);
        echo "\");
 \t});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/cookiesnotice.html.twig";
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
\t\$(document).ready(function() {
 \t\t\$.showCookiesNotice(\"{{ 'PLUGINS.COOKIES_NOTICE.COOKIE'|t }}\", \"{{ cookiesnotice_url }}\", \"{{ 'PLUGINS.COOKIES_NOTICE.LINK'|t }}\", \"{{ 'PLUGINS.COOKIES_NOTICE.DIMISS'|t }}\", \"{{ cookiesnotice_position }}\");
 \t});
</script>
", "partials/cookiesnotice.html.twig", "/var/www/public/user/plugins/cookiesnotice/templates/partials/cookiesnotice.html.twig");
    }
}
