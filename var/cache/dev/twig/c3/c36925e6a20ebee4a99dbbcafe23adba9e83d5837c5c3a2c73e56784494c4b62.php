<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @KnpPaginator/Pagination/foundation_v5_pagination.html.twig */
class __TwigTemplate_acf584ad49e026010b4ee3ebc260835724438d3e6bdbf475c0054a90a48fb660 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig"));

        // line 20
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 21
            echo "    <ul class=\"pagination\">
        ";
            // line 22
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 23
                echo "                 <li class=\"arrow\">
                     <a rel=\"prev\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                 </li>
        ";
            } else {
                // line 27
                echo "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            if ((($context["startPage"] ?? null) > 1)) {
                // line 35
                echo "            <li>
                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 38
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 39
                    echo "                <li>
                    <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 42
($context["startPage"] ?? null) != 2)) {
                    // line 43
                    echo "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 51
                    echo "                <li>
                    <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">
                        ";
                    // line 53
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                } else {
                    // line 57
                    echo "                <li class=\"current\">
                    <a>";
                    // line 58
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 61
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
        ";
            // line 64
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 65
                echo "            ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 66
                    echo "                ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 67
                        echo "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 71
                        echo "                    <li>
                        <a href=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">
                            ";
                        // line 73
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 77
                    echo "            ";
                }
                // line 78
                echo "            <li>
                <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 82
            echo "
        ";
            // line 83
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 84
                echo "            <li class=\"arrow\">
                <a rel=\"next\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                    ";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 90
                echo "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 96
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 96,  214 => 92,  210 => 90,  203 => 86,  199 => 85,  196 => 84,  194 => 83,  191 => 82,  183 => 79,  180 => 78,  177 => 77,  170 => 73,  166 => 72,  163 => 71,  157 => 67,  154 => 66,  151 => 65,  149 => 64,  146 => 63,  139 => 61,  133 => 58,  130 => 57,  123 => 53,  119 => 52,  116 => 51,  113 => 50,  109 => 49,  106 => 48,  103 => 47,  97 => 43,  95 => 42,  90 => 40,  87 => 39,  85 => 38,  80 => 36,  77 => 35,  75 => 34,  72 => 33,  65 => 29,  61 => 27,  53 => 24,  50 => 23,  48 => 22,  45 => 21,  43 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Foundation 5 Sliding pagination control implementation.
 *
 * View that can be used with the pagination module 
 * from the Foundation 5 CSS Toolkit
 * https://get.foundation/sites/docs-v5/components/pagination.html
 *
 * @author Vincent Loy <vincent.loy1@gmail.com>
 *
 * This view have been ported from twitter bootstrap v3 pagination control implementation
 * from:
 * @author Pablo Díez <pablodip@gmail.com>
 * @author Jan Sorgalla <jsorgalla@gmail.com>
 * @author Artem Ponomarenko <imenem@inbox.ru>
 * @author Artem Zabelin <artjomzabelin@gmail.com>
 */
#}
{% if pageCount > 1 %}
    <ul class=\"pagination\">
        {% if previous is defined %}
                 <li class=\"arrow\">
                     <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo; {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
                 </li>
        {% else %}
            <li class=\"arrow unavailable\">
                <a>
                    &laquo; {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
                </a>
            </li>
        {% endif %}

        {% if startPage > 1 %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
            </li>
            {% if startPage == 3 %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                </li>
            {% elseif startPage != 2 %}
                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            {% endif %}
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">
                        {{ page }}
                    </a>
                </li>
            {% else %}
                <li class=\"current\">
                    <a>{{ page }}</a>
                </li>
            {% endif %}

        {% endfor %}

        {% if pageCount > endPage %}
            {% if pageCount > (endPage + 1) %}
                {% if pageCount > (endPage + 2) %}
                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                {% else %}
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">
                            {{ pageCount -1 }}
                        </a>
                    </li>
                {% endif %}
            {% endif %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
            </li>
        {% endif %}

        {% if next is defined %}
            <li class=\"arrow\">
                <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                    {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }} &nbsp;&raquo;
                </a>
            </li>
        {% else %}
            <li class=\"arrow unavailable\">
                <a>
                    {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }} &nbsp;&raquo;
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}
", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v5_pagination.html.twig");
    }
}
