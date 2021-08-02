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

/* SgDatatablesBundle:i18n:nn.json.twig */
class __TwigTemplate_ead98ab424d0bcdc2e223fef8d13e5eaff409ad395036e6b50afdaafdc57607b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:nn.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:nn.json.twig"));

        // line 1
        echo "/**
 * Norwegian Nynorsk translation
 *  @name Norwegian-Nynorsk
 *  @anchor Norwegian-Nynorsk
 *  @author Andreas-Johann Østerdal Ulvestad
 */
{
    \"sEmptyTable\": \"Inga data tilgjengeleg i tabellen\",
    \"sInfo\": \"Syner _START_ til _END_ av _TOTAL_ linjer\",
    \"sInfoEmpty\": \"Syner 0 til 0 av 0 linjer\",
    \"sInfoFiltered\": \"(filtrert frå _MAX_ totalt antal linjer)\",
    \"sInfoPostFix\": \"\",
    \"sInfoThousands\": \" \",
    \"sLoadingRecords\": \"Lastar...\",
    \"sLengthMenu\": \"Syn _MENU_ linjer\",
    \"sProcessing\": \"Lastar...\",
    \"sSearch\": \"S&oslash;k:\",
    \"sUrl\": \"\",
    \"sZeroRecords\": \"Inga linjer treff p&aring; s&oslash;ket\",
    \"oPaginate\": {
        \"sFirst\": \"Fyrste\",
        \"sPrevious\": \"Forrige\",
        \"sNext\": \"Neste\",
        \"sLast\": \"Siste\"
    },
    \"oAria\": {
        \"sSortAscending\": \": aktiver for å sortere kolonna stigande\",
        \"sSortDescending\": \": aktiver for å sortere kolonna synkande\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:nn.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Norwegian Nynorsk translation
 *  @name Norwegian-Nynorsk
 *  @anchor Norwegian-Nynorsk
 *  @author Andreas-Johann Østerdal Ulvestad
 */
{
    \"sEmptyTable\": \"Inga data tilgjengeleg i tabellen\",
    \"sInfo\": \"Syner _START_ til _END_ av _TOTAL_ linjer\",
    \"sInfoEmpty\": \"Syner 0 til 0 av 0 linjer\",
    \"sInfoFiltered\": \"(filtrert frå _MAX_ totalt antal linjer)\",
    \"sInfoPostFix\": \"\",
    \"sInfoThousands\": \" \",
    \"sLoadingRecords\": \"Lastar...\",
    \"sLengthMenu\": \"Syn _MENU_ linjer\",
    \"sProcessing\": \"Lastar...\",
    \"sSearch\": \"S&oslash;k:\",
    \"sUrl\": \"\",
    \"sZeroRecords\": \"Inga linjer treff p&aring; s&oslash;ket\",
    \"oPaginate\": {
        \"sFirst\": \"Fyrste\",
        \"sPrevious\": \"Forrige\",
        \"sNext\": \"Neste\",
        \"sLast\": \"Siste\"
    },
    \"oAria\": {
        \"sSortAscending\": \": aktiver for å sortere kolonna stigande\",
        \"sSortDescending\": \": aktiver for å sortere kolonna synkande\"
    }
}
", "SgDatatablesBundle:i18n:nn.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/nn.json.twig");
    }
}
