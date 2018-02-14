<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_dbc63156be9161e2b990cd5a575f180088a6d350948cce58ade61d34cb996e30 extends Twig_Template
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
        $context["catlist"] = twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "taxonomy", array()), "category", array(), "array"));
        // line 2
        $context["blist"] = array();
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array(), "any", false, true), "knowledge-base", array(), "array", false, true), "params", array(), "any", false, true), "articles", array(), "any", false, true), "blacklist", array(), "any", true, true)) {
            // line 4
            echo "    ";
            $context["blist"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "articles", array()), "blacklist", array());
            // line 5
            echo "    ";
            $context["tmplst"] = array();
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["catlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 7
                echo "        ";
                if (!twig_in_filter($context["cat"], ($context["blist"] ?? null))) {
                    // line 8
                    echo "            ";
                    $context["tmplst"] = twig_array_merge(($context["tmplst"] ?? null), array(0 => $context["cat"]));
                    // line 9
                    echo "        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
            $context["catlist"] = ($context["tmplst"] ?? null);
        }
        // line 13
        echo "
";
        // line 14
        $context["homeroute"] = "/home";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array(), "any", false, true), "knowledge-base", array(), "array", false, true), "params", array(), "any", false, true), "articleroot", array(), "any", true, true)) {
            // line 16
            echo "    ";
            $context["homeroute"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "articleroot", array());
        }
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array(), "any", false, true), "knowledge-base", array(), "array", false, true), "params", array(), "any", false, true), "articles", array(), "any", false, true), "root", array(), "any", true, true)) {
            // line 19
            echo "    ";
            $context["homeroute"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "articles", array()), "root", array());
        }
        // line 21
        echo "
";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "show", array()), "categories", array())) {
            // line 23
            echo "<div>
    <h1><span>";
            // line 24
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("CATEGORIES");
            echo "</span></h1>
    <ul style=\"padding-left: 1rem\">
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["catlist"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 27
                echo "    \t<li><a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/taxonomy?name=category&amp;val=";
                echo twig_urlencode_filter($context["cat"]);
                echo "\">";
                echo $context["cat"];
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </ul>
</div>
";
        }
        // line 32
        echo "
";
        // line 33
        $context["maxcount"] = 5;
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array(), "any", false, true), "knowledge-base", array(), "array", false, true), "params", array(), "any", false, true), "sidebar", array(), "any", false, true), "maxentries", array(), "any", true, true)) {
            // line 35
            echo "    ";
            $context["maxcount"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "maxentries", array());
        }
        // line 37
        echo "
";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "show", array()), "popular", array())) {
            // line 39
            echo "<div class=\"topiclist\">
\t";
            // line 40
            $context["counts"] = twig_reverse_filter($this->env, twig_sort_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "count-views", array(), "array"), "counts", array())));
            // line 41
            echo "\t";
            $context["popular"] = array();
            // line 42
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["counts"] ?? null));
            foreach ($context['_seq'] as $context["route"] => $context["views"]) {
                // line 43
                echo "\t\t";
                if ((is_string($__internal_14bd72deb543d41db8faa8354388992bef78b1d1d646a2724bdf9dacae79d7a7 = $context["route"]) && is_string($__internal_2b31187767f149f5c877137d9bff2e045482ec621a2e5f43a9bb1470dfecb20e = ($context["homeroute"] ?? null)) && ('' === $__internal_2b31187767f149f5c877137d9bff2e045482ec621a2e5f43a9bb1470dfecb20e || 0 === strpos($__internal_14bd72deb543d41db8faa8354388992bef78b1d1d646a2724bdf9dacae79d7a7, $__internal_2b31187767f149f5c877137d9bff2e045482ec621a2e5f43a9bb1470dfecb20e)))) {
                    // line 44
                    echo "            ";
                    $context["thispage"] = $this->getAttribute(($context["page"] ?? null), "find", array(0 => $context["route"]), "method");
                    // line 45
                    echo "            ";
                    if ( !(null === ($context["thispage"] ?? null))) {
                        // line 46
                        echo "\t\t\t    ";
                        $context["popular"] = twig_array_merge(($context["popular"] ?? null), array(0 => ($context["thispage"] ?? null)));
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "\t\t";
                }
                // line 49
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['route'], $context['views'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
            $context["tmplst"] = array();
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["popular"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 52
                echo "        ";
                $context["blisted"] = false;
                // line 53
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blist"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["bcat"]) {
                    // line 54
                    echo "            ";
                    if (twig_in_filter($context["bcat"], $this->getAttribute($this->getAttribute($context["page"], "taxonomy", array()), "category", array(), "array"))) {
                        // line 55
                        echo "                ";
                        $context["blisted"] = true;
                        // line 56
                        echo "            ";
                    }
                    // line 57
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "        ";
                if ( !($context["blisted"] ?? null)) {
                    // line 59
                    echo "            ";
                    $context["tmplst"] = twig_array_merge(($context["tmplst"] ?? null), array(0 => $context["page"]));
                    // line 60
                    echo "        ";
                }
                // line 61
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
            $context["popular"] = ($context["tmplst"] ?? null);
            // line 63
            echo "\t<h1><span>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("POPULAR_ARTICLES");
            echo "</span></h1>
    ";
            // line 64
            $this->loadTemplate("partials/topiclist.html.twig", "partials/sidebar.html.twig", 64)->display(array_merge($context, array("articles" => ($context["popular"] ?? null), "maxcount" => ($context["maxcount"] ?? null))));
            // line 65
            echo "</div>
";
        }
        // line 67
        echo "
";
        // line 68
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "knowledge-base", array(), "array"), "params", array()), "sidebar", array()), "show", array()), "latest", array())) {
            // line 69
            echo "<div class=\"topiclist\">
\t<h1><span>";
            // line 70
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("LATEST_ARTICLES");
            echo "</span></h1>
    ";
            // line 71
            $context["articles"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => ($context["homeroute"] ?? null)), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method");
            // line 72
            echo "    ";
            $context["tmplst"] = array();
            // line 73
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 74
                echo "        ";
                $context["blisted"] = false;
                // line 75
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blist"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["bcat"]) {
                    // line 76
                    echo "            ";
                    if (twig_in_filter($context["bcat"], $this->getAttribute($this->getAttribute($context["page"], "taxonomy", array()), "category", array(), "array"))) {
                        // line 77
                        echo "                ";
                        $context["blisted"] = true;
                        // line 78
                        echo "            ";
                    }
                    // line 79
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "        ";
                if ( !($context["blisted"] ?? null)) {
                    // line 81
                    echo "            ";
                    $context["tmplst"] = twig_array_merge(($context["tmplst"] ?? null), array(0 => $context["page"]));
                    // line 82
                    echo "        ";
                }
                // line 83
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    ";
            $context["articles"] = twig_slice($this->env, ($context["tmplst"] ?? null), 0, ($context["maxcount"] ?? null));
            // line 85
            echo "    ";
            $this->loadTemplate("partials/topiclist.html.twig", "partials/sidebar.html.twig", 85)->display(array_merge($context, array("articles" => ($context["articles"] ?? null), "maxcount" => ($context["maxcount"] ?? null))));
            // line 86
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 86,  283 => 85,  280 => 84,  274 => 83,  271 => 82,  268 => 81,  265 => 80,  259 => 79,  256 => 78,  253 => 77,  250 => 76,  245 => 75,  242 => 74,  237 => 73,  234 => 72,  232 => 71,  228 => 70,  225 => 69,  223 => 68,  220 => 67,  216 => 65,  214 => 64,  209 => 63,  206 => 62,  200 => 61,  197 => 60,  194 => 59,  191 => 58,  185 => 57,  182 => 56,  179 => 55,  176 => 54,  171 => 53,  168 => 52,  163 => 51,  160 => 50,  154 => 49,  151 => 48,  148 => 47,  145 => 46,  142 => 45,  139 => 44,  136 => 43,  131 => 42,  128 => 41,  126 => 40,  123 => 39,  121 => 38,  118 => 37,  114 => 35,  112 => 34,  110 => 33,  107 => 32,  102 => 29,  89 => 27,  85 => 26,  80 => 24,  77 => 23,  75 => 22,  72 => 21,  68 => 19,  66 => 18,  62 => 16,  60 => 15,  58 => 14,  55 => 13,  51 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set catlist = taxonomy.taxonomy[\"category\"]|keys %}
{% set blist = [] %}
{% if config.themes['knowledge-base'].params.articles.blacklist is defined %}
    {% set blist = config.themes['knowledge-base'].params.articles.blacklist %}
    {% set tmplst = [] %}
    {% for cat in catlist %}
        {% if cat not in blist %}
            {% set tmplst = tmplst|merge([cat]) %}
        {% endif %}
    {% endfor %}
    {% set catlist = tmplst %}
{% endif %}

{% set homeroute = '/home' %}
{% if config.themes['knowledge-base'].params.articleroot is defined %}
    {% set homeroute = config.themes['knowledge-base'].params.articleroot %}
{% endif %}
{% if config.themes['knowledge-base'].params.articles.root is defined %}
    {% set homeroute = config.themes['knowledge-base'].params.articles.root %}
{% endif %}

{% if config.themes['knowledge-base'].params.sidebar.show.categories %}
<div>
    <h1><span>{{ 'CATEGORIES'|t }}</span></h1>
    <ul style=\"padding-left: 1rem\">
    {% for cat in catlist|sort %}
    \t<li><a href=\"{{ base_url }}/taxonomy?name=category&amp;val={{ cat|url_encode }}\">{{ cat }}</a></li>
    {% endfor %}
    </ul>
</div>
{% endif %}

{% set maxcount = 5 %}
{% if config.themes['knowledge-base'].params.sidebar.maxentries is defined %}
    {% set maxcount = config.themes['knowledge-base'].params.sidebar.maxentries %}
{% endif %}

{% if config.themes['knowledge-base'].params.sidebar.show.popular %}
<div class=\"topiclist\">
\t{% set counts = config.plugins['count-views'].counts|sort|reverse %}
\t{% set popular = [] %}
\t{% for route,views in counts %}
\t\t{% if route starts with homeroute %}
            {% set thispage = page.find(route) %}
            {% if thispage is not null %}
\t\t\t    {% set popular = popular|merge([thispage]) %}
            {% endif %}
\t\t{% endif %}
\t{% endfor %}
    {% set tmplst = [] %}
    {% for page in popular %}
        {% set blisted = false %}
        {% for bcat in blist %}
            {% if bcat in page.taxonomy[\"category\"] %}
                {% set blisted = true %}
            {% endif %}
        {% endfor %}
        {% if not blisted %}
            {% set tmplst = tmplst|merge([page]) %}
        {% endif %}
    {% endfor %}
    {% set popular = tmplst %}
\t<h1><span>{{ 'POPULAR_ARTICLES'|t }}</span></h1>
    {% include 'partials/topiclist.html.twig' with {'articles': popular, 'maxcount': maxcount} %}
</div>
{% endif %}

{% if config.themes['knowledge-base'].params.sidebar.show.latest %}
<div class=\"topiclist\">
\t<h1><span>{{ 'LATEST_ARTICLES'|t }}</span></h1>
    {% set articles = page.find(homeroute).children.order('date', 'desc') %}
    {% set tmplst = [] %}
    {% for page in articles %}
        {% set blisted = false %}
        {% for bcat in blist %}
            {% if bcat in page.taxonomy[\"category\"] %}
                {% set blisted = true %}
            {% endif %}
        {% endfor %}
        {% if not blisted %}
            {% set tmplst = tmplst|merge([page]) %}
        {% endif %}
    {% endfor %}
    {% set articles = tmplst|slice(0,maxcount) %}
    {% include 'partials/topiclist.html.twig' with {'articles': articles, 'maxcount': maxcount} %}
</div>
{% endif %}
", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\knowledge-base\\templates\\partials\\sidebar.html.twig");
    }
}
