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

/* SgDatatablesBundle:datatable:search.js.twig */
class __TwigTemplate_51a5a02e8843947923e602cd4d318cd7d0cafaa15e023bae11401f30b854c029 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:search.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:search.js.twig"));

        // line 9
        echo "function drawTable() {
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 10), "pipeline", [], "any", false, false, false, 10) > 0)) {
            // line 11
            echo "        oTable.clearPipeline().draw();
    ";
        } else {
            // line 13
            echo "        oTable.draw();
    ";
        }
        // line 15
        echo "}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector + '-filterrow').find(\"input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector + '-filterrow').find(\"select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:search.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 13,  48 => 11,  46 => 10,  43 => 9,);
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
function drawTable() {
    {% if sg_datatables_view.ajax.pipeline > 0 %}
        oTable.clearPipeline().draw();
    {% else %}
        oTable.draw();
    {% endif %}
}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector + '-filterrow').find(\"input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector + '-filterrow').find(\"select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
", "SgDatatablesBundle:datatable:search.js.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/search.js.twig");
    }
}
