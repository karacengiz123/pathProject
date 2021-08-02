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

/* SgDatatablesBundle:i18n:af.json.twig */
class __TwigTemplate_0a7797dd8071f1471df77d8c222be39fbb4f112a4a48d3bd36e6e1225664704d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:af.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:af.json.twig"));

        // line 1
        echo "/**
 * Afrikaans translation
 *  @name Afrikaans
 *  @anchor Afrikaans
 *  @author <a href=\"http://www.ajoft.com\">Ajoft Software</a>
 */
{
    \"sEmptyTable\":     \"Geen data beskikbaar in tabel\",
    \"sInfo\":           \"uitstalling _START_ to _END_ of _TOTAL_ inskrywings\",
    \"sInfoEmpty\":      \"uitstalling 0 to 0 of 0 inskrywings\",
    \"sInfoFiltered\":   \"(gefiltreer uit _MAX_ totaal inskrywings)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"uitstal _MENU_ inskrywings\",
    \"sLoadingRecords\": \"laai...\",
    \"sProcessing\":     \"verwerking...\",
    \"sSearch\":         \"soektog:\",
    \"sZeroRecords\":    \"Geen treffers gevind\",
    \"oPaginate\": {
        \"sFirst\":    \"eerste\",
        \"sLast\":     \"laaste\",
        \"sNext\":     \"volgende\",
        \"sPrevious\": \"vorige\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktiveer kolom stygende te sorteer\",
        \"sSortDescending\": \": aktiveer kolom orde te sorteer\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:af.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Afrikaans translation
 *  @name Afrikaans
 *  @anchor Afrikaans
 *  @author <a href=\"http://www.ajoft.com\">Ajoft Software</a>
 */
{
    \"sEmptyTable\":     \"Geen data beskikbaar in tabel\",
    \"sInfo\":           \"uitstalling _START_ to _END_ of _TOTAL_ inskrywings\",
    \"sInfoEmpty\":      \"uitstalling 0 to 0 of 0 inskrywings\",
    \"sInfoFiltered\":   \"(gefiltreer uit _MAX_ totaal inskrywings)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"uitstal _MENU_ inskrywings\",
    \"sLoadingRecords\": \"laai...\",
    \"sProcessing\":     \"verwerking...\",
    \"sSearch\":         \"soektog:\",
    \"sZeroRecords\":    \"Geen treffers gevind\",
    \"oPaginate\": {
        \"sFirst\":    \"eerste\",
        \"sLast\":     \"laaste\",
        \"sNext\":     \"volgende\",
        \"sPrevious\": \"vorige\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktiveer kolom stygende te sorteer\",
        \"sSortDescending\": \": aktiveer kolom orde te sorteer\"
    }
}
", "SgDatatablesBundle:i18n:af.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/af.json.twig");
    }
}
