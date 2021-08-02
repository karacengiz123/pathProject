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

/* SgDatatablesBundle:datatable:multiselect_actions.html.twig */
class __TwigTemplate_3e48d9de5874eea5c6d65158e1cdd45d22cee757917111972e7a99942d9ac7d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:multiselect_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:multiselect_actions.html.twig"));

        // line 9
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 10
        echo "
";
        // line 22
        echo "
";
        // line 28
        echo "
";
        // line 38
        echo "
";
        // line 54
        echo "
";
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
            // line 63
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "callRenderIfClosure", [], "any", false, false, false, 63) === true)) {
                // line 64
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["action"], "button", [], "any", false, false, false, 64) === false)) {
                    // line 65
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "startHtml", [], "any", false, false, false, 65);
                    echo "
                <a ";
                    // line 66
                    echo twig_call_macro($macros["macros"], "macro_href", [$context["action"], (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["route_parameters"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["actionKey"]] ?? null) : null)], 66, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_attributes", [$context["action"]], 66, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_confirm_dialog", [$context["action"]], 66, $context, $this->getSourceContext());
                    echo ">
                    ";
                    // line 67
                    echo twig_call_macro($macros["macros"], "macro_link_title", [$context["action"]], 67, $context, $this->getSourceContext());
                    echo "
                </a>
                ";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "endHtml", [], "any", false, false, false, 69);
                    echo "
            ";
                } else {
                    // line 71
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "startHtml", [], "any", false, false, false, 71);
                    echo "
                <button type=\"button\" ";
                    // line 72
                    echo twig_call_macro($macros["macros"], "macro_value", [(($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["values"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["actionKey"]] ?? null) : null)], 72, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_attributes", [$context["action"]], 72, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_confirm_dialog", [$context["action"]], 72, $context, $this->getSourceContext());
                    echo ">
                    ";
                    // line 73
                    echo twig_call_macro($macros["macros"], "macro_link_title", [$context["action"]], 73, $context, $this->getSourceContext());
                    echo "
                </button>
                ";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "endHtml", [], "any", false, false, false, 75);
                    echo "
            ";
                }
                // line 77
                echo "        ";
            }
            // line 78
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["multiselect_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "
";
        // line 82
        if ((null === ($context["dom_id"] ?? null))) {
            // line 83
            echo "    \$(\"#sg-datatables-";
            echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
            echo "-multiselect-actions\").append(\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["multiselect_actions"] ?? null), "js"), "html", null, true);
            echo "\");
";
        } else {
            // line 85
            echo "    \$(\"#";
            echo twig_escape_filter($this->env, ($context["dom_id"] ?? null), "html", null, true);
            echo "\").append(\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["multiselect_actions"] ?? null), "js"), "html", null, true);
            echo "\");
";
        }
        // line 87
        echo "
";
        // line 89
        echo "function updateCheckAll() {
    var cbox_all = \$(\"#sg-datatables-";
        // line 90
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo " tbody input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-checkbox:checkbox\");
    var cbox_checked = \$(\"#sg-datatables-";
        // line 91
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo " tbody input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-checkbox:checkbox:checked\");
    var cbox_checkall = \$(\"#sg-datatables-";
        // line 92
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo " input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-checkall:checkbox\");
    var action_links = \$(\".sg-datatables-";
        // line 93
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-action\");

    if(cbox_checked.length === 0){
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', false);
        action_links.prop('disabled', true);
        action_links.addClass('disabled');
    } else if (cbox_checked.length === cbox_all.length){
        cbox_checkall.prop('checked', true);
        cbox_checkall.prop('indeterminate', false);
        action_links.prop('disabled', false);
        action_links.removeClass('disabled');
    } else {
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', true);
        action_links.prop('disabled', false);
        action_links.removeClass('disabled');
    }
}

";
        // line 114
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "\").on(\"draw.dt\", function () {
    updateCheckAll();
});

";
        // line 119
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo " tbody\").on(\"click\", \"tr\", function () {
    ";
        // line 121
        echo "    if (\$(this).find(\"input\").length) {
        \$(this).toggleClass(\"selected\");
    }

    ";
        // line 126
        echo "    \$(this).find(\"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-checkbox:checkbox\").each(function() {
        this.checked = !this.checked;
    });

    updateCheckAll();
});

";
        // line 134
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo " tbody\").on(\"click\", \"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-checkbox:checkbox\", function () {
    this.checked = !this.checked;
    updateCheckAll();
});

";
        // line 140
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "\").on(\"click\", \"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-checkall:checkbox\", function () {
    \$(\"input.sg-datatables-";
        // line 141
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-checkbox\").prop('checked', \$(this).prop(\"checked\"));
    var propCheck = \$(this).prop(\"checked\");
    \$(\"#sg-datatables-";
        // line 143
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo " tbody tr\").each(function(){
        if (\$(this).find(\"input\").length) {
            if (true == propCheck) {
                \$(this).addClass(\"selected\");
            } else {
                \$(this).removeClass(\"selected\");
            }
        }
    });
    updateCheckAll();
});

";
        // line 156
        echo "\$(\".sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-multiselect-action\").on(\"click\", function(event) {
    event.preventDefault();

    if (oTable.rows(\".selected\").data().length > 0) {
        if (\$(this).data(\"message\")) {
            if (!confirm(\$(this).data(\"message\"))) {
                return;
            }
        }

        var items = \$.map(oTable.rows(\".selected\").data(), function (i) {
            return i
        });

        var pipeline = ";
        // line 170
        echo twig_escape_filter($this->env, ($context["pipeline"] ?? null), "html", null, true);
        echo ";

        ";
        // line 172
        $context["token"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("multiselect");
        // line 173
        echo "
        var url = \$(this).attr(\"href\");
        if (url != null) {
            \$.ajax({
                url: url,
                method: \"POST\",
                cache: false,
                data: {
                    'data': items,
                    'token': \"";
        // line 182
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\"
                },
                success: function(msg) {
                    if (pipeline > 0) {
                        oTable.clearPipeline().draw();
                    } else {
                        oTable.draw();
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest + ' ' + textStatus + ' '  + errorThrown);
                }
            })
        }
    } else {
        alert(\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.selectError", [], "messages"), "html", null, true);
        echo "\");
    }
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function macro_link_title($__action__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link_title"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link_title"));

            // line 12
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 12) === null) && (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 12) === null))) {
                // line 13
                echo "        ";
                if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 13) === null)) {
                    // line 14
                    echo "            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 14), "html", null, true);
                    echo "
        ";
                } else {
                    // line 16
                    echo "            null
        ";
                }
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 19), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 19), "html", null, true);
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
    public function macro_attributes($__action__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "attributes", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 25
                echo "        ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_confirm_dialog($__action__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            // line 30
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "confirm", [], "any", false, false, false, 30) === true)) {
                // line 31
                echo "        ";
                if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "confirmMessage", [], "any", false, false, false, 31) === null)) {
                    // line 32
                    echo "            data-message=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "confirmMessage", [], "any", false, false, false, 32), "html", null, true);
                    echo "\"
        ";
                } else {
                    // line 34
                    echo "            data-message=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.confirmMessage", [], "messages"), "html", null, true);
                    echo "\"
        ";
                }
                // line 36
                echo "    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_href($__action__ = null, $__route_parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "route_parameters" => $__route_parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "href"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "href"));

            // line 40
            echo "    ";
            if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "routeParameters", [], "any", false, false, false, 40) === null)) {
                // line 41
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 41), "locale", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "locale", [], "any", false, false, false, 41)))) {
                    // line 42
                    echo "            ";
                    if (twig_in_filter("_locale", twig_get_array_keys_filter(($context["route_parameters"] ?? null)))) {
                        // line 43
                        echo "                ";
                        $context["route_parameters"] = twig_array_merge(($context["route_parameters"] ?? null), ["_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "locale", [], "any", false, false, false, 43)]);
                        // line 44
                        echo "            ";
                    }
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 48) === null)) {
                // line 49
                echo "        href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 49), ($context["route_parameters"] ?? null)), "html", null, true);
                echo "\"
    ";
            } else {
                // line 51
                echo "        href=\"javascript:void(0);\"
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_value($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "value"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "value"));

            // line 56
            echo "    ";
            if ( !(null === ($context["value"] ?? null))) {
                // line 57
                echo "        value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\"
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:multiselect_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 57,  584 => 56,  565 => 55,  548 => 51,  542 => 49,  540 => 48,  537 => 47,  534 => 46,  531 => 45,  528 => 44,  525 => 43,  522 => 42,  519 => 41,  516 => 40,  496 => 39,  480 => 36,  474 => 34,  468 => 32,  465 => 31,  462 => 30,  443 => 29,  419 => 25,  414 => 24,  395 => 23,  374 => 19,  371 => 18,  367 => 16,  361 => 14,  358 => 13,  355 => 12,  336 => 11,  322 => 197,  304 => 182,  293 => 173,  291 => 172,  286 => 170,  268 => 156,  253 => 143,  248 => 141,  241 => 140,  230 => 134,  219 => 126,  213 => 121,  208 => 119,  200 => 114,  177 => 93,  171 => 92,  165 => 91,  159 => 90,  156 => 89,  153 => 87,  145 => 85,  137 => 83,  135 => 82,  132 => 80,  125 => 78,  122 => 77,  117 => 75,  112 => 73,  104 => 72,  99 => 71,  94 => 69,  89 => 67,  81 => 66,  76 => 65,  73 => 64,  70 => 63,  65 => 62,  63 => 61,  60 => 60,  57 => 54,  54 => 38,  51 => 28,  48 => 22,  45 => 10,  43 => 9,);
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
{% import _self as macros %}

{% macro link_title(action) %}
    {% if action.label is same as(null) and action.icon is same as(null) %}
        {% if action.route is not same as(null) %}
            {{ action.route }}
        {% else %}
            null
        {% endif %}
    {% else %}
        <span class=\"{{ action.icon }}\"></span> {{ action.label }}
    {% endif %}
{% endmacro %}

{% macro attributes(action) %}
    {% for key, value in action.attributes %}
        {{ key }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{% macro confirm_dialog(action) %}
    {% if action.confirm is same as(true) %}
        {% if action.confirmMessage is not same as(null) %}
            data-message=\"{{ action.confirmMessage }}\"
        {% else %}
            data-message=\"{{ 'sg.datatables.confirmMessage'|trans({}, 'messages') }}\"
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro href(action, route_parameters) %}
    {% if action.routeParameters is not same as(null) %}
        {% if app.request.locale is defined and app.request.locale is not null %}
            {% if '_locale' in route_parameters|keys %}
                {% set route_parameters = route_parameters|merge({ '_locale': app.request.locale }) %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if action.route is not same as(null) %}
        href=\"{{ path(action.route, route_parameters) }}\"
    {% else %}
        href=\"javascript:void(0);\"
    {% endif %}
{% endmacro %}

{% macro value(value) %}
    {% if value is not null %}
        value=\"{{ value }}\"
    {% endif %}
{% endmacro %}

{% set multiselect_actions %}
    {% for actionKey, action in actions %}
        {% if action.callRenderIfClosure is same as(true) %}
            {% if action.button is same as(false) %}
                {{ action.startHtml|raw }}
                <a {{ macros.href(action, route_parameters[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                    {{ macros.link_title(action) }}
                </a>
                {{ action.endHtml|raw }}
            {% else %}
                {{ action.startHtml|raw }}
                <button type=\"button\" {{ macros.value(values[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                    {{ macros.link_title(action) }}
                </button>
                {{ action.endHtml|raw }}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endset %}

{# add multiselect actions #}
{% if dom_id is null %}
    \$(\"#sg-datatables-{{ datatable_name }}-multiselect-actions\").append(\"{{ multiselect_actions|e('js') }}\");
{% else %}
    \$(\"#{{ dom_id }}\").append(\"{{ multiselect_actions|e('js') }}\");
{% endif %}

{# function to update the check-all-checkbox #}
function updateCheckAll() {
    var cbox_all = \$(\"#sg-datatables-{{ datatable_name }} tbody input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\");
    var cbox_checked = \$(\"#sg-datatables-{{ datatable_name }} tbody input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox:checked\");
    var cbox_checkall = \$(\"#sg-datatables-{{ datatable_name }} input.sg-datatables-{{ datatable_name }}-multiselect-checkall:checkbox\");
    var action_links = \$(\".sg-datatables-{{ datatable_name }}-multiselect-action\");

    if(cbox_checked.length === 0){
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', false);
        action_links.prop('disabled', true);
        action_links.addClass('disabled');
    } else if (cbox_checked.length === cbox_all.length){
        cbox_checkall.prop('checked', true);
        cbox_checkall.prop('indeterminate', false);
        action_links.prop('disabled', false);
        action_links.removeClass('disabled');
    } else {
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', true);
        action_links.prop('disabled', false);
        action_links.removeClass('disabled');
    }
}

{# handle table redraw #}
\$(\"#sg-datatables-{{ datatable_name }}\").on(\"draw.dt\", function () {
    updateCheckAll();
});

{# handle row <tr> click #}
\$(\"#sg-datatables-{{ datatable_name }} tbody\").on(\"click\", \"tr\", function () {
    {# add 'selected' class #}
    if (\$(this).find(\"input\").length) {
        \$(this).toggleClass(\"selected\");
    }

    {# set !checked for the row checkbox #}
    \$(this).find(\"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\").each(function() {
        this.checked = !this.checked;
    });

    updateCheckAll();
});

{# handle checkbox <input> click #}
\$(\"#sg-datatables-{{ datatable_name }} tbody\").on(\"click\", \"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\", function () {
    this.checked = !this.checked;
    updateCheckAll();
});

{# select/unselect all checkboxes #}
\$(\"#sg-datatables-{{ datatable_name }}\").on(\"click\", \"input.sg-datatables-{{ datatable_name }}-multiselect-checkall:checkbox\", function () {
    \$(\"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox\").prop('checked', \$(this).prop(\"checked\"));
    var propCheck = \$(this).prop(\"checked\");
    \$(\"#sg-datatables-{{ datatable_name }} tbody tr\").each(function(){
        if (\$(this).find(\"input\").length) {
            if (true == propCheck) {
                \$(this).addClass(\"selected\");
            } else {
                \$(this).removeClass(\"selected\");
            }
        }
    });
    updateCheckAll();
});

{# handle multiselect action click #}
\$(\".sg-datatables-{{ datatable_name }}-multiselect-action\").on(\"click\", function(event) {
    event.preventDefault();

    if (oTable.rows(\".selected\").data().length > 0) {
        if (\$(this).data(\"message\")) {
            if (!confirm(\$(this).data(\"message\"))) {
                return;
            }
        }

        var items = \$.map(oTable.rows(\".selected\").data(), function (i) {
            return i
        });

        var pipeline = {{ pipeline }};

        {% set token = csrf_token('multiselect') %}

        var url = \$(this).attr(\"href\");
        if (url != null) {
            \$.ajax({
                url: url,
                method: \"POST\",
                cache: false,
                data: {
                    'data': items,
                    'token': \"{{ token }}\"
                },
                success: function(msg) {
                    if (pipeline > 0) {
                        oTable.clearPipeline().draw();
                    } else {
                        oTable.draw();
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest + ' ' + textStatus + ' '  + errorThrown);
                }
            })
        }
    } else {
        alert(\"{{ 'sg.datatables.selectError'|trans({}, 'messages') }}\");
    }
});
", "SgDatatablesBundle:datatable:multiselect_actions.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/multiselect_actions.html.twig");
    }
}
