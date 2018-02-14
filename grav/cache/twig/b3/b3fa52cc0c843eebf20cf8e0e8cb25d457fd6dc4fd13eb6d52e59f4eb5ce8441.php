<?php

/* partials/topiclist.html.twig */
class __TwigTemplate_a76958170e014f55b91beac58206150d97f43736e37aee99200ce8ea61a33950 extends Twig_Template
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
        if ( !array_key_exists("maxcount", $context)) {
            // line 2
            echo "    ";
            $context["maxcount"] = (twig_length_filter($this->env, ($context["articles"] ?? null)) + 1);
        }
        // line 4
        echo "<ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articles"] ?? null), 0, ($context["maxcount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["p"], "header", array()), "media", array()) == "video")) {
                // line 7
                echo "    <li class=\"video\">
    ";
            } else {
                // line 9
                echo "    <li class=\"text\">
    ";
            }
            // line 11
            echo "        <a href=\"";
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()));
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/topiclist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  43 => 11,  39 => 9,  35 => 7,  32 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if maxcount is not defined %}
    {% set maxcount = (articles|length) + 1 %}
{% endif %}
<ul>
{% for p in articles|slice(0,maxcount) %}
    {% if p.header.media == 'video' %}
    <li class=\"video\">
    {% else %}
    <li class=\"text\">
    {% endif %}
        <a href=\"{{p.url}}\">{{ p.title|e }}</a>
    </li>
{% endfor %}
</ul>
", "partials/topiclist.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\knowledge-base\\templates\\partials\\topiclist.html.twig");
    }
}
