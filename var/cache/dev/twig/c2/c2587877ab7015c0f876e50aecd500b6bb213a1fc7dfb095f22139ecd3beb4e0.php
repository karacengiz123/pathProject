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

/* SgDatatablesBundle:filter:input.html.twig */
class __TwigTemplate_bc410ed46c70bc67cd2da56c2a8c625eedce32eecd211a16e7ffd87f4924c08b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html' => [$this, 'block_html'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:input.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:input.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 10), "type", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
";
        $context["filter_input_type"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        ob_start();
        // line 14
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-filter-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 14), "html", null, true);
        $context["filter_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        ob_start();
        // line 18
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
        echo "\"";
        $context["filter_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        ob_start();
        // line 22
        echo "    class=\"sg-datatables-individual-filtering";
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 22), "classes", [], "any", false, false, false, 22) === null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 22), "classes", [], "any", false, false, false, 22), "html", null, true);
        }
        echo "\"
";
        $context["filter_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
";
        // line 25
        ob_start();
        // line 26
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 26) === null)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 26), "html", null, true);
            echo ";\"";
        }
        $context["filter_width"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 30), "placeholder", [], "any", false, false, false, 30) === true)) {
            // line 31
            echo "        placeholder=\"";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 31), "placeholderText", [], "any", false, false, false, 31) === null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 31), "placeholderText", [], "any", false, false, false, 31), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "title", [], "any", false, false, false, 31))), "html", null, true);
            }
            echo "\"
    ";
        }
        $context["filter_input_placeholder"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "    data-search-column-index=\"";
        echo twig_escape_filter($this->env, ($context["search_column_index"] ?? null), "html", null, true);
        echo "\"
";
        $context["filter_search_column_index"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 40) === null)) {
            echo "name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\"";
        }
        $context["filter_column_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "    ";
        if ((("number" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44)) || ("range" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44)))) {
            // line 45
            echo "        min=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 45), "min", [], "any", false, false, false, 45), "html", null, true);
            echo "\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 45), "max", [], "any", false, false, false, 45), "html", null, true);
            echo "\" step=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 45), "step", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
    ";
        }
        $context["filter_input_minmax"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "
";
        // line 49
        ob_start();
        // line 50
        echo "    ";
        if ((("number" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 50), "type", [], "any", false, false, false, 50)) || ("range" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 50), "type", [], "any", false, false, false, 50)))) {
            // line 51
            echo "        ";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 51), "datalist", [], "any", false, false, false, 51) === null)) {
                // line 52
                echo "            list=\"";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "-datalist\"
        ";
            }
            // line 54
            echo "    ";
        }
        $context["filter_input_datalist"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
";
        // line 57
        ob_start();
        // line 58
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 58), "initialSearch", [], "any", false, false, false, 58)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 58), "initialSearch", [], "any", false, false, false, 58), "html", null, true);
            echo "\"";
        }
        $context["filter_input_initial_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "    ";
        if ((("number" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 62), "type", [], "any", false, false, false, 62)) || ("range" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 62), "type", [], "any", false, false, false, 62)))) {
            // line 63
            echo "        ";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 63), "datalist", [], "any", false, false, false, 63) === null)) {
                // line 64
                echo "            <datalist id=\"";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "-datalist\">
                ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 65), "datalist", [], "any", false, false, false, 65));
                foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                    // line 66
                    echo "                    <option>";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "            </datalist>
        ";
            }
            // line 70
            echo "    ";
        }
        $context["filter_input_datalist_values"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        ob_start();
        // line 74
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-filter-cancel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 74), "html", null, true);
        $context["cancel_button_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        ob_start();
        // line 78
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 78), "cancelButton", [], "any", false, false, false, 78) === true)) {
            // line 79
            echo "        <button type=\"button\"
                id=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? null), "html", null, true);
            echo "\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    ";
        }
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
";
        // line 86
        ob_start();
        // line 87
        echo "    ";
        if ((("number" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 87), "type", [], "any", false, false, false, 87)) || ("range" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 87), "type", [], "any", false, false, false, 87)))) {
            // line 88
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 88), "showLabel", [], "any", false, false, false, 88) === true)) {
                // line 89
                echo "            <span id=\"";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "-range-label\"></span>
        ";
            }
            // line 91
            echo "    ";
        }
        $context["filter_input_range_label_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "
";
        // line 94
        ob_start();
        // line 95
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 95), "cancelButton", [], "any", false, false, false, 95) === true)) {
            // line 96
            echo "        <script type=\"text/javascript\">
            \$(\"#";
            // line 97
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? null), "html", null, true);
            echo "\").click(function() {
                if ('' != \$(\"#";
            // line 98
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
            echo "\").val()) {
                    \$(\"#";
            // line 99
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
            echo "\")
                        .val('')
                        .change();
                }
            });
        </script>
    ";
        }
        $context["cancel_button_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "
";
        // line 108
        ob_start();
        // line 109
        echo "    ";
        if ((("number" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 109), "type", [], "any", false, false, false, 109)) || ("range" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 109), "type", [], "any", false, false, false, 109)))) {
            // line 110
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 110), "showLabel", [], "any", false, false, false, 110) === true)) {
                // line 111
                echo "            <script type=\"text/javascript\">
                var interval;

                \$(\"#";
                // line 114
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "-range-label\").html(\$(\"#";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "\").val());

                \$(\"#";
                // line 116
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "\").mousedown(function(event) {
                    interval = setInterval(function() {
                        \$(\"#";
                // line 118
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "-range-label\").html(\$(\"#";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "\").val());
                    }, 15);
                });

                \$(\"#";
                // line 122
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "\").mouseup(function(event) {
                    clearInterval(interval);
                });

                \$(\"#";
                // line 126
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "\").change(function(event) {
                    \$(\"#";
                // line 127
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "-range-label\").html(\$(\"#";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
                echo "\").val());
                });
            </script>
        ";
            }
            // line 131
            echo "    ";
        }
        $context["filter_input_range_label_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('html', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        // line 135
        echo "    <input ";
        echo twig_escape_filter($this->env, ($context["filter_input_type"] ?? null), "html", null, true);
        echo "            ";
        // line 136
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_selector"] ?? null), "html", null, true);
        echo "             ";
        // line 137
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_classes"] ?? null), "html", null, true);
        echo "              ";
        // line 138
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_width"] ?? null), "html", null, true);
        echo "                ";
        // line 139
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_placeholder"] ?? null), "html", null, true);
        echo "    ";
        // line 140
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_search_column_index"] ?? null), "html", null, true);
        echo "  ";
        // line 141
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
        echo "          ";
        // line 142
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_minmax"] ?? null), "html", null, true);
        echo "         ";
        // line 143
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_datalist"] ?? null), "html", null, true);
        echo "       ";
        // line 144
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_initial_search"] ?? null), "html", null, true);
        echo " ";
        // line 145
        echo "    />
    ";
        // line 146
        echo twig_escape_filter($this->env, ($context["filter_input_datalist_values"] ?? null), "html", null, true);
        echo "        ";
        // line 147
        echo "    ";
        echo twig_escape_filter($this->env, ($context["cancel_button_html"] ?? null), "html", null, true);
        echo "
    ";
        // line 148
        echo twig_escape_filter($this->env, ($context["filter_input_range_label_html"] ?? null), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 152
        echo "    ";
        echo twig_escape_filter($this->env, ($context["cancel_button_js"] ?? null), "html", null, true);
        echo "
    ";
        // line 153
        echo twig_escape_filter($this->env, ($context["filter_input_range_label_js"] ?? null), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 153,  466 => 152,  456 => 151,  444 => 148,  439 => 147,  436 => 146,  433 => 145,  429 => 144,  425 => 143,  421 => 142,  417 => 141,  413 => 140,  409 => 139,  405 => 138,  401 => 137,  397 => 136,  393 => 135,  383 => 134,  373 => 151,  370 => 150,  368 => 134,  365 => 133,  361 => 131,  352 => 127,  348 => 126,  341 => 122,  332 => 118,  327 => 116,  320 => 114,  315 => 111,  312 => 110,  309 => 109,  307 => 108,  304 => 107,  293 => 99,  289 => 98,  285 => 97,  282 => 96,  279 => 95,  277 => 94,  274 => 93,  270 => 91,  264 => 89,  261 => 88,  258 => 87,  256 => 86,  253 => 85,  245 => 80,  242 => 79,  239 => 78,  237 => 77,  229 => 74,  227 => 73,  223 => 70,  219 => 68,  210 => 66,  206 => 65,  201 => 64,  198 => 63,  195 => 62,  193 => 61,  190 => 60,  182 => 58,  180 => 57,  177 => 56,  173 => 54,  167 => 52,  164 => 51,  161 => 50,  159 => 49,  156 => 48,  145 => 45,  142 => 44,  140 => 43,  137 => 42,  129 => 40,  127 => 39,  124 => 38,  118 => 36,  116 => 35,  113 => 34,  102 => 31,  99 => 30,  97 => 29,  94 => 28,  86 => 26,  84 => 25,  81 => 24,  72 => 22,  70 => 21,  65 => 18,  63 => 17,  55 => 14,  53 => 13,  47 => 10,  45 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% set filter_input_type %}
    type=\"{{ column.filter.type }}\"
{% endset %}

{%- set filter_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-{{ column.index }}
{%- endset -%}

{%- set filter_selector -%}
    id=\"{{ filter_id_selector }}\"
{%- endset -%}

{% set filter_classes %}
    class=\"sg-datatables-individual-filtering{% if column.filter.classes is not same as(null) %} {{ column.filter.classes }}{% endif %}\"
{% endset %}

{% set filter_width %}
    {% if column.width is not same as(null) %}style=\"width:{{ column.width }};\"{% endif %}
{% endset %}

{% set filter_input_placeholder %}
    {% if column.filter.placeholder is same as(true) %}
        placeholder=\"{% if column.filter.placeholderText is not same as(null) %}{{ column.filter.placeholderText }}{% else %}{{ column.title|striptags|trim }}{% endif %}\"
    {% endif %}
{% endset %}

{% set filter_search_column_index %}
    data-search-column-index=\"{{ search_column_index }}\"
{% endset %}

{% set filter_column_name %}
    {% if column.name is not same as(null) %}name=\"{{ column.name }}\"{% endif %}
{% endset %}

{% set filter_input_minmax %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        min=\"{{ column.filter.min }}\" max=\"{{ column.filter.max }}\" step=\"{{ column.filter.step }}\"
    {% endif %}
{% endset %}

{% set filter_input_datalist %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.datalist is not same as(null) %}
            list=\"{{ filter_id_selector }}-datalist\"
        {% endif %}
    {% endif %}
{% endset %}

{% set filter_input_initial_search %}
    {% if column.filter.initialSearch %}value=\"{{ column.filter.initialSearch }}\"{% endif %}
{% endset %}

{% set filter_input_datalist_values %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.datalist is not same as(null) %}
            <datalist id=\"{{ filter_id_selector }}-datalist\">
                {% for key, name in column.filter.datalist %}
                    <option>{{ name }}</option>
                {% endfor %}
            </datalist>
        {% endif %}
    {% endif %}
{% endset %}

{%- set cancel_button_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-cancel-{{ column.index }}
{%- endset -%}

{% set cancel_button_html %}
    {% if column.filter.cancelButton is same as(true) %}
        <button type=\"button\"
                id=\"{{ cancel_button_id_selector }}\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    {% endif %}
{% endset %}

{% set filter_input_range_label_html %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.showLabel is same as(true) %}
            <span id=\"{{ filter_id_selector }}-range-label\"></span>
        {% endif %}
    {% endif %}
{% endset %}

{% set cancel_button_js %}
    {% if column.filter.cancelButton is same as(true) %}
        <script type=\"text/javascript\">
            \$(\"#{{ cancel_button_id_selector }}\").click(function() {
                if ('' != \$(\"#{{ filter_id_selector }}\").val()) {
                    \$(\"#{{ filter_id_selector }}\")
                        .val('')
                        .change();
                }
            });
        </script>
    {% endif %}
{% endset %}

{% set filter_input_range_label_js %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.showLabel is same as(true) %}
            <script type=\"text/javascript\">
                var interval;

                \$(\"#{{ filter_id_selector }}-range-label\").html(\$(\"#{{ filter_id_selector }}\").val());

                \$(\"#{{ filter_id_selector }}\").mousedown(function(event) {
                    interval = setInterval(function() {
                        \$(\"#{{ filter_id_selector }}-range-label\").html(\$(\"#{{ filter_id_selector }}\").val());
                    }, 15);
                });

                \$(\"#{{ filter_id_selector }}\").mouseup(function(event) {
                    clearInterval(interval);
                });

                \$(\"#{{ filter_id_selector }}\").change(function(event) {
                    \$(\"#{{ filter_id_selector }}-range-label\").html(\$(\"#{{ filter_id_selector }}\").val());
                });
            </script>
        {% endif %}
    {% endif %}
{% endset %}

{% block html %}
    <input {{ filter_input_type }}            {# type = \"\" text, number or range #}
            {{ filter_selector }}             {# id = \"\" #}
            {{ filter_classes }}              {# class = \"\" #}
            {{ filter_width }}                {# style = \"width:\" #}
            {{ filter_input_placeholder }}    {# placeholder = \"\" #}
            {{ filter_search_column_index }}  {# data-search-column-index = \"\" #}
            {{ filter_column_name }}          {# name = \"\" #}
            {{ filter_input_minmax }}         {# min = \"\" max = \"\" step = \"\" #}
            {{ filter_input_datalist }}       {# list = \"\" #}
            {{ filter_input_initial_search }} {# value = \"\" #}
    />
    {{ filter_input_datalist_values }}        {# <datalist> #}
    {{ cancel_button_html }}
    {{ filter_input_range_label_html }}
{% endblock %}

{% block javascript %}
    {{ cancel_button_js }}
    {{ filter_input_range_label_js }}
{% endblock %}
", "SgDatatablesBundle:filter:input.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/filter/input.html.twig");
    }
}
