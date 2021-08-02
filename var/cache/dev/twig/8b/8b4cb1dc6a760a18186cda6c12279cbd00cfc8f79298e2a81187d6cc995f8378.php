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

/* SgDatatablesBundle:i18n:nl.json.twig */
class __TwigTemplate_b31d3e0efd00cdbd6208f794080944f0160058f6414ed73876fa08e66687f3bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:nl.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:nl.json.twig"));

        // line 1
        echo "/**
 * Dutch translation
 *  @name Dutch
 *  @anchor Dutch
 *  @author <a href=\"http://www.blikgooien.nl/\">Erwin Kerk</a> and <i>ashwin</i>
 */
{
    \"sProcessing\": \"Bezig...\",
    \"sLengthMenu\": \"_MENU_ resultaten weergeven\",
    \"sZeroRecords\": \"Geen resultaten gevonden\",
    \"sInfo\": \"_START_ tot _END_ van _TOTAL_ resultaten\",
    \"sInfoEmpty\": \"Geen resultaten om weer te geven\",
    \"sInfoFiltered\": \" (gefilterd uit _MAX_ resultaten)\",
    \"sInfoPostFix\": \"\",
    \"sSearch\": \"Zoeken:\",
    \"sEmptyTable\": \"Geen resultaten aanwezig in de tabel\",
    \"sInfoThousands\": \".\",
    \"sLoadingRecords\": \"Een moment geduld aub - bezig met laden...\",
    \"oPaginate\": {
        \"sFirst\": \"Eerste\",
        \"sLast\": \"Laatste\",
        \"sNext\": \"Volgende\",
        \"sPrevious\": \"Vorige\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activeer om kolom oplopend te sorteren\",
        \"sSortDescending\": \": activeer om kolom aflopend te sorteren\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:nl.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Dutch translation
 *  @name Dutch
 *  @anchor Dutch
 *  @author <a href=\"http://www.blikgooien.nl/\">Erwin Kerk</a> and <i>ashwin</i>
 */
{
    \"sProcessing\": \"Bezig...\",
    \"sLengthMenu\": \"_MENU_ resultaten weergeven\",
    \"sZeroRecords\": \"Geen resultaten gevonden\",
    \"sInfo\": \"_START_ tot _END_ van _TOTAL_ resultaten\",
    \"sInfoEmpty\": \"Geen resultaten om weer te geven\",
    \"sInfoFiltered\": \" (gefilterd uit _MAX_ resultaten)\",
    \"sInfoPostFix\": \"\",
    \"sSearch\": \"Zoeken:\",
    \"sEmptyTable\": \"Geen resultaten aanwezig in de tabel\",
    \"sInfoThousands\": \".\",
    \"sLoadingRecords\": \"Een moment geduld aub - bezig met laden...\",
    \"oPaginate\": {
        \"sFirst\": \"Eerste\",
        \"sLast\": \"Laatste\",
        \"sNext\": \"Volgende\",
        \"sPrevious\": \"Vorige\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activeer om kolom oplopend te sorteren\",
        \"sSortDescending\": \": activeer om kolom aflopend te sorteren\"
    }
}
", "SgDatatablesBundle:i18n:nl.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/nl.json.twig");
    }
}
