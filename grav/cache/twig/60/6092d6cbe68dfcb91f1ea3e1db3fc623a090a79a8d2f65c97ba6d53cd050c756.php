<?php

/* partials/base.html.twig */
class __TwigTemplate_d682b9719c829254fced57eaa1d33c02f9aae3b1b46199ca1fc07201c241592e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["showsidebar"] = false;
        // line 3
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "show", array()), "categories", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "show", array()), "popular", array())) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "show", array()), "latest", array()))) {
            // line 4
            echo "    ";
            $context["showsidebar"] = true;
        }
        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

<div class=\"pure-g wrapper\">
";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        if (($context["showsidebar"] ?? null)) {
            // line 69
            echo "<div class=\"pure-u-1 pure-u-md-16-24\">
";
        } else {
            // line 71
            echo "<div class=\"pure-u-1\">
";
        }
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "</div> <!-- pure-u-16-24 -->

";
        // line 82
        if (($context["showsidebar"] ?? null)) {
            // line 83
            echo "<div class=\"pure-u-1 pure-u-md-8-24\">
";
            // line 84
            $this->displayBlock('sidebar', $context, $blocks);
            // line 91
            echo "</div> <!-- pure-u-8-24 -->
";
        }
        // line 93
        echo "
<div class=\"pure-u-1\">
";
        // line 95
        $this->displayBlock('footer', $context, $blocks);
        // line 104
        echo "</div> <!-- pure-u-1 -->

</div> <!-- pure-g -->

";
        // line 108
        $this->displayBlock('bottom', $context, $blocks);
        // line 111
        echo "</body>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 11
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/herzen-logo-small-orig.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Inconsolata|Lato"), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css", 1 => 100), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css", 1 => 99), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 95), "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/knowledge-base.css", 1 => 90), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 80), "method");
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 32
        echo "    ";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"header\">
    <div class=\"pure-u-1 pure-u-md-2-5\">
        <div class=\"padding\">
            <a class=\"logo left\" href=\"";
        // line 44
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
\t\t\t\t<img style=\"width: 100px;\" src=\"";
        // line 45
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/herzen-logo-small-orig.png");
        echo "\"/>
                <!--<i class=\"fa fa-rebel\"></i>-->
                ";
        // line 47
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
            </a>
        </div>
    </div>
    <div class=\"pure-u-1 pure-u-md-3-5\">
        <div class=\"padding\">
            ";
        // line 53
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "        </div>
    </div>
    <div class=\"pure-u-1 search\">
        <div class=\"padding\">
            ";
        // line 62
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 62)->display($context);
        // line 63
        echo "        </div>
    </div>
    </div>
";
    }

    // line 53
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 54
        echo "            <nav class=\"pure-menu pure-menu-horizontal\">
                ";
        // line 55
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "            </nav>
            ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "    <section id=\"body\">
        <div class=\"padding\">
        ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "        </div>
    </section>
";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        // line 85
        echo "    <section id=\"sidebar\">
        <div class=\"padding\">
            ";
        // line 87
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 87)->display($context);
        // line 88
        echo "        </div>
    </section>
";
    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["footertext"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FOOTER_TEXT");
        // line 97
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array(), "any", false, true), "footertext", array(), "any", true, true)) {
            // line 98
            echo "        ";
            $context["footertext"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "footertext", array());
            // line 99
            echo "    ";
        }
        // line 100
        echo "    <div class=\"footer\">
        ";
        // line 101
        echo ($context["footertext"] ?? null);
        echo "
    </div>
";
    }

    // line 108
    public function block_bottom($context, array $blocks = array())
    {
        // line 109
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
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
        return array (  312 => 109,  309 => 108,  302 => 101,  299 => 100,  296 => 99,  293 => 98,  290 => 97,  287 => 96,  284 => 95,  278 => 88,  276 => 87,  272 => 85,  269 => 84,  264 => 76,  258 => 77,  256 => 76,  252 => 74,  249 => 73,  244 => 56,  242 => 55,  239 => 54,  236 => 53,  229 => 63,  227 => 62,  221 => 58,  219 => 53,  210 => 47,  205 => 45,  201 => 44,  196 => 41,  193 => 40,  189 => 32,  186 => 31,  183 => 30,  179 => 27,  176 => 26,  173 => 25,  170 => 24,  167 => 23,  164 => 22,  161 => 21,  158 => 20,  150 => 33,  148 => 30,  142 => 28,  140 => 20,  135 => 18,  131 => 17,  128 => 16,  126 => 15,  115 => 11,  112 => 10,  109 => 9,  104 => 111,  102 => 108,  96 => 104,  94 => 95,  90 => 93,  86 => 91,  84 => 84,  81 => 83,  79 => 82,  75 => 80,  73 => 73,  69 => 71,  65 => 69,  63 => 68,  60 => 67,  58 => 40,  52 => 37,  49 => 36,  47 => 9,  42 => 7,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set showsidebar = false %}
{% if (config.themes['knowledge-base'].params.sidebar.show.categories) or (config.themes['knowledge-base'].params.sidebar.show.popular) or (config.themes['knowledge-base'].params.sidebar.show.latest) %}
    {% set showsidebar = true %}
{% endif %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/herzen-logo-small-orig.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Inconsolata|Lato') %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css', 100) %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css', 99) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 95) %}
        {% do assets.addCss('theme://css/knowledge-base.css', 90) %}
        {% do assets.addCss('theme://css/custom.css', 80) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

<div class=\"pure-g wrapper\">
{% block header %}
    <div class=\"header\">
    <div class=\"pure-u-1 pure-u-md-2-5\">
        <div class=\"padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
\t\t\t\t<img style=\"width: 100px;\" src=\"{{ url('theme://images/herzen-logo-small-orig.png') }}\"/>
                <!--<i class=\"fa fa-rebel\"></i>-->
                {{ config.site.title }}
            </a>
        </div>
    </div>
    <div class=\"pure-u-1 pure-u-md-3-5\">
        <div class=\"padding\">
            {% block header_navigation %}
            <nav class=\"pure-menu pure-menu-horizontal\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
    <div class=\"pure-u-1 search\">
        <div class=\"padding\">
            {% include 'partials/simplesearch_searchbox.html.twig' %}
        </div>
    </div>
    </div>
{% endblock %}

{% if showsidebar %}
<div class=\"pure-u-1 pure-u-md-16-24\">
{% else %}
<div class=\"pure-u-1\">
{% endif %}
{% block body %}
    <section id=\"body\">
        <div class=\"padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}
</div> <!-- pure-u-16-24 -->

{% if showsidebar %}
<div class=\"pure-u-1 pure-u-md-8-24\">
{% block sidebar %}
    <section id=\"sidebar\">
        <div class=\"padding\">
            {% include 'partials/sidebar.html.twig' %}
        </div>
    </section>
{% endblock %}
</div> <!-- pure-u-8-24 -->
{% endif %}

<div class=\"pure-u-1\">
{% block footer %}
    {% set footertext = 'FOOTER_TEXT'|t %}
    {% if config.site.footertext is defined %}
        {% set footertext = config.site.footertext %}
    {% endif %}
    <div class=\"footer\">
        {{footertext}}
    </div>
{% endblock %}
</div> <!-- pure-u-1 -->

</div> <!-- pure-g -->

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
</body>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\knowledge-base\\templates\\partials\\base.html.twig");
    }
}
