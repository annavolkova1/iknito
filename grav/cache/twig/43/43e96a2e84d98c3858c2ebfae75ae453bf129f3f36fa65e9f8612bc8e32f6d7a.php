<?php

/* partials/login.html.twig */
class __TwigTemplate_5b7cf574b99e511d540bd10f2fd552a1691a67a8a4faf76b7b877d55ca6b7154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/login.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
            'body' => array($this, 'block_body'),
            'instructions' => array($this, 'block_instructions'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-box-shadow ";
        // line 7
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">
        <h1>
            ";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
        </h1>

        ";
        // line 12
        $this->loadTemplate("partials/messages.html.twig", "partials/login.html.twig", 12)->display($context);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('instructions', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $context["redirect"] = ((($context["redirect"] ?? null)) ? (($context["redirect"] ?? null)) : ($this->getAttribute(($context["uri"] ?? null), "route", array(0 => false), "method")));
        // line 17
        echo "
        <form method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "\">
            <div class=\"padding\">
                ";
        // line 20
        $this->displayBlock('form', $context, $blocks);
        // line 21
        echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
                ";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
            </div>
        </form>
    </section>
</body>
";
    }

    // line 14
    public function block_instructions($context, array $blocks = array())
    {
    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  93 => 14,  83 => 22,  78 => 21,  76 => 20,  71 => 18,  68 => 17,  66 => 16,  63 => 15,  61 => 14,  58 => 13,  56 => 12,  50 => 9,  45 => 7,  42 => 6,  39 => 5,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set scope = scope ?: 'data.' %}
{% block messages %}{% endblock %}

{% block body %}
<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-box-shadow {{ classes }}\">
        <h1>
            {{ title }}
        </h1>

        {% include 'partials/messages.html.twig' %}

        {% block instructions %}{% endblock %}

        {% set redirect = redirect ?: uri.route(false) %}

        <form method=\"post\" action=\"{{ base_url_relative }}\">
            <div class=\"padding\">
                {% block form %}{% endblock %}
                <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
                {{ nonce_field('admin-form', 'admin-nonce')|raw }}
            </div>
        </form>
    </section>
</body>
{% endblock %}
", "partials/login.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login.html.twig");
    }
}
