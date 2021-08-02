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

/* SgDatatablesBundle:datatable:extensions.html.twig */
class __TwigTemplate_ebbb540c4c401a17106a1706561287bc961fd0074cf1329fde1a1d3540a65c33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:extensions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:extensions.html.twig"));

        // line 9
        echo "
";
        // line 11
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 11), "buttons", [], "any", false, false, false, 11) === null)) {
            // line 12
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 12), "buttons", [], "any", false, false, false, 12) === true)) {
                // line 13
                echo "        ";
                // line 14
                echo "        buttons: true,
    ";
            } else {
                // line 16
                echo "        ";
                // line 17
                echo "        buttons: [
            ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 18), "buttons", [], "any", false, true, false, 18), "showButtons", [], "any", true, true, false, 18) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 18), "buttons", [], "any", false, false, false, 18), "showButtons", [], "any", false, false, false, 18) === null))) {
                    // line 19
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 19), "buttons", [], "any", false, false, false, 19), "showButtons", [], "any", false, false, false, 19);
                    echo ",
            ";
                }
                // line 21
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 21), "buttons", [], "any", false, true, false, 21), "createButtons", [], "any", true, true, false, 21) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 21), "buttons", [], "any", false, false, false, 21), "createButtons", [], "any", false, false, false, 21) === null))) {
                    // line 22
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 22), "buttons", [], "any", false, false, false, 22), "createButtons", [], "any", false, false, false, 22));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 23
                        echo "                    ";
                        $this->loadTemplate("@SgDatatables/datatable/button.html.twig", "SgDatatablesBundle:datatable:extensions.html.twig", 23)->display($context);
                        // line 24
                        echo "                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "        ],
    ";
            }
        }
        // line 29
        echo "
";
        // line 31
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 31), "responsive", [], "any", false, false, false, 31) === null)) {
            // line 32
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 32), "responsive", [], "any", false, false, false, 32) === true)) {
                // line 33
                echo "        ";
                // line 34
                echo "        responsive: true,
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 35), "responsive", [], "any", false, true, false, 35), "details", [], "any", true, true, false, 35) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 35), "responsive", [], "any", false, false, false, 35), "details", [], "any", false, false, false, 35) === null))) {
                // line 36
                echo "        ";
                // line 37
                echo "        responsive: {
            ";
                // line 38
                if ( !twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 38), "responsive", [], "any", false, false, false, 38), "details", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "                ";
                    // line 40
                    echo "                details: ";
                    echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 40), "responsive", [], "any", false, false, false, 40), "details", [], "any", false, false, false, 40)), "html", null, true);
                    echo ",
            ";
                } else {
                    // line 42
                    echo "                ";
                    // line 43
                    echo "                details: {
                    ";
                    // line 44
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 44), "responsive", [], "any", false, true, false, 44), "details", [], "any", false, true, false, 44), "type", [], "any", true, true, false, 44)) {
                        // line 45
                        echo "                        type: \"sg_datatables_view.extensions.responsive.details.type\",
                    ";
                    }
                    // line 47
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 47), "responsive", [], "any", false, true, false, 47), "details", [], "any", false, true, false, 47), "target", [], "any", true, true, false, 47)) {
                        // line 48
                        echo "                        target: \"sg_datatables_view.extensions.responsive.details.target\",
                    ";
                    }
                    // line 50
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 50), "responsive", [], "any", false, true, false, 50), "details", [], "any", false, true, false, 50), "renderer", [], "any", true, true, false, 50)) {
                        // line 51
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 51), "responsive", [], "any", false, true, false, 51), "details", [], "any", false, true, false, 51), "renderer", [], "any", false, true, false, 51), "vars", [], "array", true, true, false, 51)) {
                            // line 52
                            echo "                            ";
                            $context["vars"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 52), "responsive", [], "any", false, false, false, 52), "details", [], "any", false, false, false, 52), "renderer", [], "any", false, false, false, 52)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["vars"] ?? null) : null);
                            // line 53
                            echo "                        ";
                        } else {
                            // line 54
                            echo "                            ";
                            $context["vars"] = [];
                            // line 55
                            echo "                        ";
                        }
                        // line 56
                        echo "                        renderer: ";
                        $this->loadTemplate((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 56), "responsive", [], "any", false, false, false, 56), "details", [], "any", false, false, false, 56), "renderer", [], "any", false, false, false, 56)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["template"] ?? null) : null), "SgDatatablesBundle:datatable:extensions.html.twig", 56)->display(twig_array_merge($context, ($context["vars"] ?? null)));
                        echo ",
                    ";
                    }
                    // line 58
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 58), "responsive", [], "any", false, true, false, 58), "details", [], "any", false, true, false, 58), "display", [], "any", true, true, false, 58)) {
                        // line 59
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 59), "responsive", [], "any", false, true, false, 59), "details", [], "any", false, true, false, 59), "display", [], "any", false, true, false, 59), "vars", [], "array", true, true, false, 59)) {
                            // line 60
                            echo "                            ";
                            $context["vars"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 60), "responsive", [], "any", false, false, false, 60), "details", [], "any", false, false, false, 60), "display", [], "any", false, false, false, 60)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["vars"] ?? null) : null);
                            // line 61
                            echo "                        ";
                        } else {
                            // line 62
                            echo "                            ";
                            $context["vars"] = [];
                            // line 63
                            echo "                        ";
                        }
                        // line 64
                        echo "                        display: ";
                        $this->loadTemplate((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 64), "responsive", [], "any", false, false, false, 64), "details", [], "any", false, false, false, 64), "display", [], "any", false, false, false, 64)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["template"] ?? null) : null), "SgDatatablesBundle:datatable:extensions.html.twig", 64)->display(twig_array_merge($context, ($context["vars"] ?? null)));
                        echo ",
                    ";
                    }
                    // line 66
                    echo "                },
            ";
                }
                // line 68
                echo "        },
    ";
            }
        }
        // line 71
        echo "
";
        // line 73
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 73), "select", [], "any", false, false, false, 73) === null)) {
            // line 74
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 74), "select", [], "any", false, false, false, 74) === true)) {
                // line 75
                echo "        ";
                // line 76
                echo "        select: true,
    ";
            } else {
                // line 78
                echo "        ";
                // line 79
                echo "        select: {
            ";
                // line 80
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 80), "select", [], "any", false, true, false, 80), "blurable", [], "any", true, true, false, 80) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 80), "select", [], "any", false, false, false, 80), "blurable", [], "any", false, false, false, 80) === null))) {
                    // line 81
                    echo "                blurable: ";
                    echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 81), "select", [], "any", false, false, false, 81), "blurable", [], "any", false, false, false, 81)), "html", null, true);
                    echo ",
            ";
                }
                // line 83
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 83), "select", [], "any", false, true, false, 83), "className", [], "any", true, true, false, 83) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 83), "select", [], "any", false, false, false, 83), "className", [], "any", false, false, false, 83) === null))) {
                    // line 84
                    echo "                className: \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 84), "select", [], "any", false, false, false, 84), "className", [], "any", false, false, false, 84), "html", null, true);
                    echo "\",
            ";
                }
                // line 86
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 86), "select", [], "any", false, true, false, 86), "info", [], "any", true, true, false, 86) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 86), "select", [], "any", false, false, false, 86), "info", [], "any", false, false, false, 86) === null))) {
                    // line 87
                    echo "                info: ";
                    echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 87), "select", [], "any", false, false, false, 87), "info", [], "any", false, false, false, 87)), "html", null, true);
                    echo ",
            ";
                }
                // line 89
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 89), "select", [], "any", false, true, false, 89), "items", [], "any", true, true, false, 89) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 89), "select", [], "any", false, false, false, 89), "items", [], "any", false, false, false, 89) === null))) {
                    // line 90
                    echo "                items: \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 90), "select", [], "any", false, false, false, 90), "items", [], "any", false, false, false, 90), "html", null, true);
                    echo "\",
            ";
                }
                // line 92
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 92), "select", [], "any", false, true, false, 92), "selector", [], "any", true, true, false, 92) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 92), "select", [], "any", false, false, false, 92), "selector", [], "any", false, false, false, 92) === null))) {
                    // line 93
                    echo "                selector: \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 93), "select", [], "any", false, false, false, 93), "selector", [], "any", false, false, false, 93), "html", null, true);
                    echo "\",
            ";
                }
                // line 95
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 95), "select", [], "any", false, true, false, 95), "style", [], "any", true, true, false, 95) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 95), "select", [], "any", false, false, false, 95), "style", [], "any", false, false, false, 95) === null))) {
                    // line 96
                    echo "                style: \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 96), "select", [], "any", false, false, false, 96), "style", [], "any", false, false, false, 96), "html", null, true);
                    echo "\",
            ";
                }
                // line 98
                echo "        },
    ";
            }
        }
        // line 101
        echo "
";
        // line 103
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 103), "rowGroup", [], "any", false, false, false, 103) === null)) {
            // line 104
            echo "    rowGroup: {
    ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 105), "rowGroup", [], "any", false, false, false, 105), "enable", [], "any", false, false, false, 105) === true)) {
                // line 106
                echo "        enable: true,
    ";
            }
            // line 108
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 108), "rowGroup", [], "any", false, true, false, 108), "dataSrc", [], "any", true, true, false, 108) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 108), "rowGroup", [], "any", false, false, false, 108), "dataSrc", [], "any", false, false, false, 108) === null))) {
                // line 109
                echo "        dataSrc: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 109), "rowGroup", [], "any", false, false, false, 109), "dataSrc", [], "any", false, false, false, 109), "html", null, true);
                echo "',
    ";
            }
            // line 111
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 111), "rowGroup", [], "any", false, true, false, 111), "startRender", [], "any", true, true, false, 111) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 111), "rowGroup", [], "any", false, false, false, 111), "startRender", [], "any", false, false, false, 111) === null))) {
                // line 112
                echo "        ";
                $context["vars"] = [];
                // line 113
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 113), "rowGroup", [], "any", false, true, false, 113), "startRender", [], "any", false, true, false, 113), "vars", [], "any", true, true, false, 113)) {
                    // line 114
                    echo "            ";
                    $context["vars"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 114), "rowGroup", [], "any", false, false, false, 114), "startRender", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114);
                    // line 115
                    echo "        ";
                }
                // line 116
                echo "        startRender: ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 116), "rowGroup", [], "any", false, false, false, 116), "startRender", [], "any", false, false, false, 116), "template", [], "any", false, false, false, 116), "SgDatatablesBundle:datatable:extensions.html.twig", 116)->display(twig_array_merge($context, ($context["vars"] ?? null)));
                echo ",
    ";
            }
            // line 118
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 118), "rowGroup", [], "any", false, true, false, 118), "endRender", [], "any", true, true, false, 118) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 118), "rowGroup", [], "any", false, false, false, 118), "endRender", [], "any", false, false, false, 118) === null))) {
                // line 119
                echo "        ";
                $context["vars"] = [];
                // line 120
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 120), "rowGroup", [], "any", false, true, false, 120), "endRender", [], "any", false, true, false, 120), "vars", [], "any", true, true, false, 120)) {
                    // line 121
                    echo "            ";
                    $context["vars"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 121), "rowGroup", [], "any", false, false, false, 121), "endRender", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121);
                    // line 122
                    echo "        ";
                }
                // line 123
                echo "        endRender: ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 123), "rowGroup", [], "any", false, false, false, 123), "endRender", [], "any", false, false, false, 123), "template", [], "any", false, false, false, 123), "SgDatatablesBundle:datatable:extensions.html.twig", 123)->display(twig_array_merge($context, ($context["vars"] ?? null)));
                echo ",
    ";
            }
            // line 125
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 125), "rowGroup", [], "any", false, true, false, 125), "className", [], "any", true, true, false, 125) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 125), "rowGroup", [], "any", false, false, false, 125), "className", [], "any", false, false, false, 125) === null))) {
                // line 126
                echo "        className: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 126), "rowGroup", [], "any", false, false, false, 126), "className", [], "any", false, false, false, 126), "html", null, true);
                echo "'
    ";
            }
            // line 128
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 128), "rowGroup", [], "any", false, true, false, 128), "emptyDataGroup", [], "any", true, true, false, 128) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 128), "rowGroup", [], "any", false, false, false, 128), "emptyDataGroup", [], "any", false, false, false, 128) === null))) {
                // line 129
                echo "        emptyDataGroup: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 129), "rowGroup", [], "any", false, false, false, 129), "emptyDataGroup", [], "any", false, false, false, 129), "html", null, true);
                echo "'
    ";
            }
            // line 131
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 131), "rowGroup", [], "any", false, true, false, 131), "endClassName", [], "any", true, true, false, 131) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 131), "rowGroup", [], "any", false, false, false, 131), "endClassName", [], "any", false, false, false, 131) === null))) {
                // line 132
                echo "        endClassName: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 132), "rowGroup", [], "any", false, false, false, 132), "endClassName", [], "any", false, false, false, 132), "html", null, true);
                echo "'
    ";
            }
            // line 134
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, true, false, 134), "rowGroup", [], "any", false, true, false, 134), "startClassName", [], "any", true, true, false, 134) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 134), "rowGroup", [], "any", false, false, false, 134), "startClassName", [], "any", false, false, false, 134) === null))) {
                // line 135
                echo "        startClassName: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "extensions", [], "any", false, false, false, 135), "rowGroup", [], "any", false, false, false, 135), "startClassName", [], "any", false, false, false, 135), "html", null, true);
                echo "'
    ";
            }
            // line 137
            echo "    },
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:extensions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 137,  393 => 135,  390 => 134,  384 => 132,  381 => 131,  375 => 129,  372 => 128,  366 => 126,  363 => 125,  357 => 123,  354 => 122,  351 => 121,  348 => 120,  345 => 119,  342 => 118,  336 => 116,  333 => 115,  330 => 114,  327 => 113,  324 => 112,  321 => 111,  315 => 109,  312 => 108,  308 => 106,  306 => 105,  303 => 104,  301 => 103,  298 => 101,  293 => 98,  287 => 96,  284 => 95,  278 => 93,  275 => 92,  269 => 90,  266 => 89,  260 => 87,  257 => 86,  251 => 84,  248 => 83,  242 => 81,  240 => 80,  237 => 79,  235 => 78,  231 => 76,  229 => 75,  226 => 74,  224 => 73,  221 => 71,  216 => 68,  212 => 66,  206 => 64,  203 => 63,  200 => 62,  197 => 61,  194 => 60,  191 => 59,  188 => 58,  182 => 56,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  164 => 50,  160 => 48,  157 => 47,  153 => 45,  151 => 44,  148 => 43,  146 => 42,  140 => 40,  138 => 39,  136 => 38,  133 => 37,  131 => 36,  129 => 35,  126 => 34,  124 => 33,  121 => 32,  119 => 31,  116 => 29,  111 => 26,  108 => 25,  94 => 24,  91 => 23,  73 => 22,  70 => 21,  64 => 19,  62 => 18,  59 => 17,  57 => 16,  53 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 9,);
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

{# Buttons Extension #}
{% if sg_datatables_view.extensions.buttons is not same as(null) %}
    {% if sg_datatables_view.extensions.buttons is same as(true) %}
        {# the easiest way to activate the extension - buttons is a boolean value (true) #}
        buttons: true,
    {% else %}
        {# buttons is defined and not boolean, rather given as an object - handle the Buttons class options #}
        buttons: [
            {% if sg_datatables_view.extensions.buttons.showButtons is defined and sg_datatables_view.extensions.buttons.showButtons is not same as(null) %}
                {{ sg_datatables_view.extensions.buttons.showButtons|raw }},
            {% endif %}
            {% if sg_datatables_view.extensions.buttons.createButtons is defined and sg_datatables_view.extensions.buttons.createButtons is not same as(null) %}
                {% for button in sg_datatables_view.extensions.buttons.createButtons %}
                    {% include '@SgDatatables/datatable/button.html.twig' %}
                {% endfor %}
            {% endif %}
        ],
    {% endif %}
{% endif %}

{# Responsive Extension #}
{% if sg_datatables_view.extensions.responsive is not same as(null) %}
    {% if sg_datatables_view.extensions.responsive is same as(true) %}
        {# the easiest way to activate the extension - responsive is a boolean value (true) #}
        responsive: true,
    {% elseif sg_datatables_view.extensions.responsive.details is defined and sg_datatables_view.extensions.responsive.details is not same as(null) %}
        {# responsive is given as an object to handle the 'details' options #}
        responsive: {
            {% if sg_datatables_view.extensions.responsive.details is not iterable %}
                {# details is a simple boolean value #}
                details: {{ sg_datatables_view.extensions.responsive.details|sg_datatables_bool_var }},
            {% else %}
                {# details is an array #}
                details: {
                    {% if sg_datatables_view.extensions.responsive.details.type is defined %}
                        type: \"sg_datatables_view.extensions.responsive.details.type\",
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.target is defined %}
                        target: \"sg_datatables_view.extensions.responsive.details.target\",
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.renderer is defined %}
                        {% if sg_datatables_view.extensions.responsive.details.renderer['vars'] is defined %}
                            {% set vars = sg_datatables_view.extensions.responsive.details.renderer['vars'] %}
                        {% else %}
                            {% set vars = {} %}
                        {% endif %}
                        renderer: {% include sg_datatables_view.extensions.responsive.details.renderer['template'] with vars %},
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.display is defined %}
                        {% if sg_datatables_view.extensions.responsive.details.display['vars'] is defined %}
                            {% set vars = sg_datatables_view.extensions.responsive.details.display['vars'] %}
                        {% else %}
                            {% set vars = {} %}
                        {% endif %}
                        display: {% include sg_datatables_view.extensions.responsive.details.display['template'] with vars %},
                    {% endif %}
                },
            {% endif %}
        },
    {% endif %}
{% endif %}

{# Select Extension #}
{% if sg_datatables_view.extensions.select is not same as(null) %}
    {% if sg_datatables_view.extensions.select is same as(true) %}
        {# the easiest way to activate the extension - select is a boolean value (true) #}
        select: true,
    {% else %}
        {# select is defined and not boolean, rather given as an object - handle the Select class options #}
        select: {
            {% if sg_datatables_view.extensions.select.blurable is defined and sg_datatables_view.extensions.select.blurable is not same as(null) %}
                blurable: {{ sg_datatables_view.extensions.select.blurable|sg_datatables_bool_var }},
            {% endif %}
            {% if sg_datatables_view.extensions.select.className is defined and sg_datatables_view.extensions.select.className is not same as(null) %}
                className: \"{{ sg_datatables_view.extensions.select.className }}\",
            {% endif %}
            {% if sg_datatables_view.extensions.select.info is defined and sg_datatables_view.extensions.select.info is not same as(null) %}
                info: {{ sg_datatables_view.extensions.select.info|sg_datatables_bool_var }},
            {% endif %}
            {% if sg_datatables_view.extensions.select.items is defined and sg_datatables_view.extensions.select.items is not same as(null) %}
                items: \"{{ sg_datatables_view.extensions.select.items }}\",
            {% endif %}
            {% if sg_datatables_view.extensions.select.selector is defined and sg_datatables_view.extensions.select.selector is not same as(null) %}
                selector: \"{{ sg_datatables_view.extensions.select.selector }}\",
            {% endif %}
            {% if sg_datatables_view.extensions.select.style is defined and sg_datatables_view.extensions.select.style is not same as(null) %}
                style: \"{{ sg_datatables_view.extensions.select.style }}\",
            {% endif %}
        },
    {% endif %}
{% endif %}

{# RowGroup Extension #}
{% if sg_datatables_view.extensions.rowGroup is not same as(null) %}
    rowGroup: {
    {% if sg_datatables_view.extensions.rowGroup.enable is same as(true) %}
        enable: true,
    {% endif %}
    {% if sg_datatables_view.extensions.rowGroup.dataSrc is defined and sg_datatables_view.extensions.rowGroup.dataSrc is not same as(null) %}
        dataSrc: '{{ sg_datatables_view.extensions.rowGroup.dataSrc }}',
    {% endif %}
    {% if sg_datatables_view.extensions.rowGroup.startRender is defined and sg_datatables_view.extensions.rowGroup.startRender is not same as(null) %}
        {% set vars = {} %}
        {% if sg_datatables_view.extensions.rowGroup.startRender.vars is defined %}
            {% set vars = sg_datatables_view.extensions.rowGroup.startRender.vars %}
        {% endif %}
        startRender: {% include sg_datatables_view.extensions.rowGroup.startRender.template with vars %},
    {% endif %}
    {% if sg_datatables_view.extensions.rowGroup.endRender is defined and sg_datatables_view.extensions.rowGroup.endRender is not same as(null) %}
        {% set vars = {} %}
        {% if sg_datatables_view.extensions.rowGroup.endRender.vars is defined %}
            {% set vars = sg_datatables_view.extensions.rowGroup.endRender.vars %}
        {% endif %}
        endRender: {% include sg_datatables_view.extensions.rowGroup.endRender.template with vars %},
    {% endif %}
    {% if sg_datatables_view.extensions.rowGroup.className is defined and sg_datatables_view.extensions.rowGroup.className is not same as(null) %}
        className: '{{ sg_datatables_view.extensions.rowGroup.className }}'
    {% endif %}
    {% if sg_datatables_view.extensions.rowGroup.emptyDataGroup is defined and sg_datatables_view.extensions.rowGroup.emptyDataGroup is not same as(null) %}
        emptyDataGroup: '{{ sg_datatables_view.extensions.rowGroup.emptyDataGroup }}'
    {% endif %}
    {% if sg_datatables_view.extensions.rowGroup.endClassName is defined and sg_datatables_view.extensions.rowGroup.endClassName is not same as(null) %}
        endClassName: '{{ sg_datatables_view.extensions.rowGroup.endClassName }}'
    {% endif %}
    {% if sg_datatables_view.extensions.rowGroup.startClassName is defined and sg_datatables_view.extensions.rowGroup.startClassName is not same as(null) %}
        startClassName: '{{ sg_datatables_view.extensions.rowGroup.startClassName }}'
    {% endif %}
    },
{% endif %}", "SgDatatablesBundle:datatable:extensions.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/extensions.html.twig");
    }
}
