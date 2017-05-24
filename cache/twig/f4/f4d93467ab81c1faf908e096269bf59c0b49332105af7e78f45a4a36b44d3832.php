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
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "    </head>
    <body id=\"top\">
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        <script src=\"https://use.typekit.net/dst8yoy.js\"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        
        <link href=\"https://fonts.googleapis.com/css?family=Varela+Round&amp;subset=latin-ext\" rel=\"stylesheet\">

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/apple-touch-icon.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon-32x32.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon-16x16.png");
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
        <meta name=\"theme-color\" content=\"#ffffff\">

         ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

        ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css"), "method");
        // line 23
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jquery.fancybox.css"), "method");
        // line 24
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/flexslider.css"), "method");
        // line 25
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 26
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/queries.css"), "method");
        // line 27
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 28
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 29
        echo "        ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "        ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "        ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 58
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 59
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 60
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 61
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 62
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.js"), "method");
        // line 63
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/custom.min.js"), "method");
        // line 64
        echo "        ";
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
        return array (  215 => 64,  212 => 63,  209 => 62,  206 => 61,  203 => 60,  200 => 59,  197 => 58,  194 => 57,  191 => 56,  187 => 54,  184 => 53,  181 => 52,  176 => 49,  172 => 50,  169 => 49,  166 => 48,  162 => 46,  159 => 45,  156 => 44,  152 => 29,  149 => 28,  146 => 27,  143 => 26,  140 => 25,  137 => 24,  134 => 23,  131 => 22,  128 => 21,  111 => 30,  109 => 21,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  82 => 8,  80 => 7,  72 => 6,  69 => 5,  66 => 4,  57 => 65,  55 => 56,  52 => 55,  50 => 52,  47 => 51,  45 => 48,  42 => 47,  40 => 44,  36 => 42,  34 => 4,  29 => 2,  26 => 1,);
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
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        <script src=\"https://use.typekit.net/dst8yoy.js\"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        
        <link href=\"https://fonts.googleapis.com/css?family=Varela+Round&amp;subset=latin-ext\" rel=\"stylesheet\">

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://img/apple-touch-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://img/favicon-32x32.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://img/favicon-16x16.png') }}\">
        <link rel=\"mask-icon\" href=\"{{ url('theme://img/safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
        <meta name=\"theme-color\" content=\"#ffffff\">

         {% block stylesheets %}
                {% do assets.addCss('theme://css/bootstrap.min.css') %}
                {% do assets.addCss('theme://css/jquery.fancybox.css') %}
                {% do assets.addCss('theme://css/flexslider.css') %}
                {% do assets.addCss('theme://css/styles.css') %}
                {% do assets.addCss('theme://css/queries.css') %}
                {% do assets.addCss('theme://css/animate.css') %}
                {% do assets.addCss('theme://css/custom.css') %}
        {% endblock %}
        {{ assets.css() }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

        {% endblock %}
    </head>
    <body id=\"top\">
        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/waypoints.min.js') %}
            {% do assets.addJs('theme://js/bootstrap.min.js') %}
            {% do assets.addJs('theme://js/scripts.js') %}
            {% do assets.addJs('theme://js/jquery.flexslider.js') %}
            {% do assets.addJs('theme://js/modernizr.js') %}
            {% do assets.addJs('theme://js/custom.min.js') %}
        {% endblock %}
        {{ assets.js() }}
    </body>
</html>
", "partials/base.html.twig", "/var/www/public/user/themes/halcyon/templates/partials/base.html.twig");
    }
}
