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

/* SgDatatablesBundle:i18n:de.json.twig */
class __TwigTemplate_535a6c9e6961027d51abe1259c5c2c3d6822c3a6c4e159b842465390fd33a177 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:de.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:de.json.twig"));

        // line 1
        echo "/**
 * German translation
 *  @name German
 *  @anchor German
 *  @author Joerg Holz
 */
{
    \"sEmptyTable\":     \"Keine Daten in der Tabelle vorhanden\",
    \"sInfo\":           \"_START_ bis _END_ von _TOTAL_ Einträgen\",
    \"sInfoEmpty\":      \"0 bis 0 von 0 Einträgen\",
    \"sInfoFiltered\":   \"(gefiltert von _MAX_ Einträgen)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \".\",
    \"sLengthMenu\":     \"_MENU_ Einträge anzeigen\",
    \"sLoadingRecords\": \"Wird geladen...\",
    \"sProcessing\":    \"Bitte warten...\",
    \"sSearch\":        \"Suchen\",
    \"sZeroRecords\":   \"Keine Einträge vorhanden.\",
    \"oPaginate\": {
        \"sFirst\":    \"Erste\",
        \"sPrevious\": \"Zurück\",
        \"sNext\":     \"Nächste\",
        \"sLast\":     \"Letzte\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktivieren, um Spalte aufsteigend zu sortieren\",
        \"sSortDescending\": \": aktivieren, um Spalte absteigend zu sortieren\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:de.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * German translation
 *  @name German
 *  @anchor German
 *  @author Joerg Holz
 */
{
    \"sEmptyTable\":     \"Keine Daten in der Tabelle vorhanden\",
    \"sInfo\":           \"_START_ bis _END_ von _TOTAL_ Einträgen\",
    \"sInfoEmpty\":      \"0 bis 0 von 0 Einträgen\",
    \"sInfoFiltered\":   \"(gefiltert von _MAX_ Einträgen)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \".\",
    \"sLengthMenu\":     \"_MENU_ Einträge anzeigen\",
    \"sLoadingRecords\": \"Wird geladen...\",
    \"sProcessing\":    \"Bitte warten...\",
    \"sSearch\":        \"Suchen\",
    \"sZeroRecords\":   \"Keine Einträge vorhanden.\",
    \"oPaginate\": {
        \"sFirst\":    \"Erste\",
        \"sPrevious\": \"Zurück\",
        \"sNext\":     \"Nächste\",
        \"sLast\":     \"Letzte\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktivieren, um Spalte aufsteigend zu sortieren\",
        \"sSortDescending\": \": aktivieren, um Spalte absteigend zu sortieren\"
    }
}
", "SgDatatablesBundle:i18n:de.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/de.json.twig");
    }
}
