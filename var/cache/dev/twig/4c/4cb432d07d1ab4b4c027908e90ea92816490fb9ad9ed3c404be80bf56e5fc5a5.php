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

/* SgDatatablesBundle:i18n:pl.json.twig */
class __TwigTemplate_337440b2bde469e983a8e0a7f240537ab801a70f343ef08a3a14b06f3870d964 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:pl.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:pl.json.twig"));

        // line 1
        echo "/**
 * Polish translation
 *  @name Polish
 *  @anchor Polish
 *  @author Tomasz Kowalski
 *  @author Michał Grzelak
 */
{
    \"sProcessing\":     \"Przetwarzanie...\",
    \"sSearch\":         \"Szukaj:\",
    \"sLengthMenu\":     \"Pokaż _MENU_ pozycji\",
    \"sInfo\":           \"Pozycje od _START_ do _END_, _TOTAL_ łącznie\",
    \"sInfoEmpty\":      \"Pozycji 0 z 0 dostępnych\",
    \"sInfoFiltered\":   \"(filtrowanie spośród _MAX_ dostępnych pozycji)\",
    \"sInfoPostFix\":    \"\",
    \"sLoadingRecords\": \"Wczytywanie...\",
    \"sZeroRecords\":    \"Nie znaleziono pasujących pozycji\",
    \"sEmptyTable\":     \"Brak danych\",
    \"oPaginate\": {
        \"sFirst\":      \"Pierwsza\",
        \"sPrevious\":   \"Poprzednia\",
        \"sNext\":       \"Następna\",
        \"sLast\":       \"Ostatnia\"
    },
    \"aria\": {
        \"sSortAscending\": \": aktywuj, by posortować kolumnę rosnąco\",
        \"sSortDescending\": \": aktywuj, by posortować kolumnę malejąco\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:pl.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Polish translation
 *  @name Polish
 *  @anchor Polish
 *  @author Tomasz Kowalski
 *  @author Michał Grzelak
 */
{
    \"sProcessing\":     \"Przetwarzanie...\",
    \"sSearch\":         \"Szukaj:\",
    \"sLengthMenu\":     \"Pokaż _MENU_ pozycji\",
    \"sInfo\":           \"Pozycje od _START_ do _END_, _TOTAL_ łącznie\",
    \"sInfoEmpty\":      \"Pozycji 0 z 0 dostępnych\",
    \"sInfoFiltered\":   \"(filtrowanie spośród _MAX_ dostępnych pozycji)\",
    \"sInfoPostFix\":    \"\",
    \"sLoadingRecords\": \"Wczytywanie...\",
    \"sZeroRecords\":    \"Nie znaleziono pasujących pozycji\",
    \"sEmptyTable\":     \"Brak danych\",
    \"oPaginate\": {
        \"sFirst\":      \"Pierwsza\",
        \"sPrevious\":   \"Poprzednia\",
        \"sNext\":       \"Następna\",
        \"sLast\":       \"Ostatnia\"
    },
    \"aria\": {
        \"sSortAscending\": \": aktywuj, by posortować kolumnę rosnąco\",
        \"sSortDescending\": \": aktywuj, by posortować kolumnę malejąco\"
    }
}
", "SgDatatablesBundle:i18n:pl.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/pl.json.twig");
    }
}
