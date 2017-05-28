<?php

/* partials/base.html.twig */
class __TwigTemplate_50f8c8bf15936750eb9c834c801986de3dd509a98749ee715ec9e2c48b84ca90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 60
        echo "\t</head>
\t<body id=\"top\">

\t\t<!-- Google Tag Manager (noscript) -->
\t\t<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TXGNS9X\"
\t\theight=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
\t\t<!-- End Google Tag Manager (noscript) -->
\t\t
\t\t";
        // line 68
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
\t\t";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
\t\t";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "
\t\t";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
\t</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<meta charset=\"utf-8\" />
\t\t<title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
\t\t";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t<!-- Google Tag Manager -->
\t\t<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
\t\tnew Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
\t\tj=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
\t\t'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
\t\t})(window,document,'script','dataLayer','GTM-TXGNS9X');</script>
\t\t<!-- End Google Tag Manager -->

\t\t<script>
\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

\t\t\tga('create', 'UA-99821474-1', 'auto');
\t\t\tga('send', 'pageview');
\t\t</script>

\t\t<script src=\"https://use.typekit.net/dst8yoy.js\"></script>
\t\t<script>try{Typekit.load({ async: true });}catch(e){}</script>
\t\t
\t\t<link href=\"https://fonts.googleapis.com/css?family=Varela+Round&amp;subset=latin-ext\" rel=\"stylesheet\">

\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 33
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-touch-icon.png");
        echo "\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 34
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon-32x32.png");
        echo "\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 35
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon-16x16.png");
        echo "\">
\t\t<link rel=\"mask-icon\" href=\"";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">

\t\t ";
        // line 39
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->

\t\t<link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

\t\t";
    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css"), "method");
        // line 41
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jquery.fancybox.css"), "method");
        // line 42
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/flexslider.css"), "method");
        // line 43
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 44
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/queries.css"), "method");
        // line 45
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 46
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 47
        echo "\t\t";
    }

    // line 68
    public function block_header($context, array $blocks = array())
    {
        // line 69
        echo "\t\t\t ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "\t\t";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "\t\t";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "\t\t\t ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "\t\t";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 82
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 83
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 84
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 85
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 86
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.js"), "method");
        // line 87
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.min.js"), "method");
        // line 88
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 88,  236 => 87,  233 => 86,  230 => 85,  227 => 84,  224 => 83,  221 => 82,  218 => 81,  215 => 80,  211 => 78,  208 => 77,  205 => 76,  200 => 73,  196 => 74,  193 => 73,  190 => 72,  186 => 70,  183 => 69,  180 => 68,  176 => 47,  173 => 46,  170 => 45,  167 => 44,  164 => 43,  161 => 42,  158 => 41,  155 => 40,  152 => 39,  135 => 48,  133 => 39,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  88 => 8,  86 => 7,  78 => 6,  75 => 5,  72 => 4,  63 => 89,  61 => 80,  58 => 79,  56 => 76,  53 => 75,  51 => 72,  48 => 71,  46 => 68,  36 => 60,  34 => 4,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
\t{% block head %}
\t\t<meta charset=\"utf-8\" />
\t\t<title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
\t\t{% include 'partials/metadata.html.twig' %}
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t<!-- Google Tag Manager -->
\t\t<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
\t\tnew Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
\t\tj=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
\t\t'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
\t\t})(window,document,'script','dataLayer','GTM-TXGNS9X');</script>
\t\t<!-- End Google Tag Manager -->

\t\t<script>
\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

\t\t\tga('create', 'UA-99821474-1', 'auto');
\t\t\tga('send', 'pageview');
\t\t</script>

\t\t<script src=\"https://use.typekit.net/dst8yoy.js\"></script>
\t\t<script>try{Typekit.load({ async: true });}catch(e){}</script>
\t\t
\t\t<link href=\"https://fonts.googleapis.com/css?family=Varela+Round&amp;subset=latin-ext\" rel=\"stylesheet\">

\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://img/apple-touch-icon.png') }}\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://img/favicon-32x32.png') }}\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://img/favicon-16x16.png') }}\">
\t\t<link rel=\"mask-icon\" href=\"{{ url('theme://img/safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">

\t\t {% block stylesheets %}
\t\t\t\t{% do assets.addCss('theme://css/bootstrap.min.css') %}
\t\t\t\t{% do assets.addCss('theme://css/jquery.fancybox.css') %}
\t\t\t\t{% do assets.addCss('theme://css/flexslider.css') %}
\t\t\t\t{% do assets.addCss('theme://css/styles.css') %}
\t\t\t\t{% do assets.addCss('theme://css/queries.css') %}
\t\t\t\t{% do assets.addCss('theme://css/animate.css') %}
\t\t\t\t{% do assets.addCss('theme://css/custom.css') %}
\t\t{% endblock %}
\t\t{{ assets.css() }}

\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->

\t\t<link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

\t\t{% endblock %}
\t</head>
\t<body id=\"top\">

\t\t<!-- Google Tag Manager (noscript) -->
\t\t<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TXGNS9X\"
\t\theight=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
\t\t<!-- End Google Tag Manager (noscript) -->
\t\t
\t\t{% block header %}
\t\t\t {% include 'partials/header.html.twig' %}
\t\t{% endblock %}

\t\t{% block body %}
\t\t\t{% block content %}{% endblock %}
\t\t{% endblock %}

\t\t{% block footer %}
\t\t\t {% include 'partials/footer.html.twig' %}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{% do assets.addJs('jquery',101) %}
\t\t\t{% do assets.addJs('theme://js/waypoints.min.js') %}
\t\t\t{% do assets.addJs('theme://js/bootstrap.min.js') %}
\t\t\t{% do assets.addJs('theme://js/scripts.js') %}
\t\t\t{% do assets.addJs('theme://js/jquery.flexslider.js') %}
\t\t\t{% do assets.addJs('theme://js/modernizr.js') %}
\t\t\t{% do assets.addJs('theme://js/scripts.min.js') %}
\t\t{% endblock %}
\t\t{{ assets.js() }}
\t</body>
</html>
", "partials/base.html.twig", "/var/www/public/user/themes/halcyon/templates/partials/base.html.twig");
    }
}
