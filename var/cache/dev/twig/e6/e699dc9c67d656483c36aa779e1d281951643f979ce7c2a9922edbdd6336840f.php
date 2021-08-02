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

/* SgDatatablesBundle:i18n:nb.json.twig */
class __TwigTemplate_4abfbeaed49f64ff0c1c60f2a03e35239d164c07bc1c2537b87dac2445ac6462 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:nb.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:nb.json.twig"));

        // line 1
        echo "/**
 * Norwegian Bokmål translation
 *  @name Norwegian-Bokmal
 *  @anchor Norwegian-Bokmal
 *  @author Petter Ekrann
 *  @author Vegard Johannessen
 */
{
    \"sEmptyTable\": \"Ingen data tilgjengelig i tabellen\",
    \"sInfo\": \"Viser _START_ til _END_ av _TOTAL_ linjer\",
    \"sInfoEmpty\": \"Viser 0 til 0 av 0 linjer\",
    \"sInfoFiltered\": \"(filtrert fra _MAX_ totalt antall linjer)\",
    \"sInfoPostFix\": \"\",
    \"sInfoThousands\": \" \",
    \"sLoadingRecords\": \"Laster...\",
    \"sLengthMenu\": \"Vis _MENU_ linjer\",
    \"sLoadingRecords\": \"Laster...\",
    \"sProcessing\": \"Laster...\",
    \"sSearch\": \"S&oslash;k:\",
    \"sUrl\": \"\",
    \"sZeroRecords\": \"Ingen linjer matcher s&oslash;ket\",
    \"oPaginate\": {
        \"sFirst\": \"F&oslash;rste\",
        \"sPrevious\": \"Forrige\",
        \"sNext\": \"Neste\",
        \"sLast\": \"Siste\"
    },
    \"oAria\": {
        \"sSortAscending\": \": aktiver for å sortere kolonnen stigende\",
        \"sSortDescending\": \": aktiver for å sortere kolonnen synkende\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:nb.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Norwegian Bokmål translation
 *  @name Norwegian-Bokmal
 *  @anchor Norwegian-Bokmal
 *  @author Petter Ekrann
 *  @author Vegard Johannessen
 */
{
    \"sEmptyTable\": \"Ingen data tilgjengelig i tabellen\",
    \"sInfo\": \"Viser _START_ til _END_ av _TOTAL_ linjer\",
    \"sInfoEmpty\": \"Viser 0 til 0 av 0 linjer\",
    \"sInfoFiltered\": \"(filtrert fra _MAX_ totalt antall linjer)\",
    \"sInfoPostFix\": \"\",
    \"sInfoThousands\": \" \",
    \"sLoadingRecords\": \"Laster...\",
    \"sLengthMenu\": \"Vis _MENU_ linjer\",
    \"sLoadingRecords\": \"Laster...\",
    \"sProcessing\": \"Laster...\",
    \"sSearch\": \"S&oslash;k:\",
    \"sUrl\": \"\",
    \"sZeroRecords\": \"Ingen linjer matcher s&oslash;ket\",
    \"oPaginate\": {
        \"sFirst\": \"F&oslash;rste\",
        \"sPrevious\": \"Forrige\",
        \"sNext\": \"Neste\",
        \"sLast\": \"Siste\"
    },
    \"oAria\": {
        \"sSortAscending\": \": aktiver for å sortere kolonnen stigende\",
        \"sSortDescending\": \": aktiver for å sortere kolonnen synkende\"
    }
}
", "SgDatatablesBundle:i18n:nb.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/nb.json.twig");
    }
}
