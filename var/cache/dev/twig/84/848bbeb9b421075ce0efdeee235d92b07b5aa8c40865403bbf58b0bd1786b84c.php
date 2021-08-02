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

/* SgDatatablesBundle:i18n:hr.json.twig */
class __TwigTemplate_f936eb09c2d346b0f670311d7c74b27458486ff2cfe225394dadc7f2a58e0d56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:hr.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:hr.json.twig"));

        // line 1
        echo "/**
 * Croatian translation
 *  @name Croatian
 *  @anchor Croatian
 *  @author Predrag Mušić and _hrvoj3e_
 */
{
    \"sEmptyTable\":      \"Nema podataka u tablici\",
    \"sInfo\":            \"Prikazano _START_ do _END_ od _TOTAL_ rezultata\",
    \"sInfoEmpty\":       \"Prikazano 0 do 0 od 0 rezultata\",
    \"sInfoFiltered\":    \"(filtrirano iz _MAX_ ukupnih rezultata)\",
    \"sInfoPostFix\":     \"\",
    \"sInfoThousands\":   \",\",
    \"sLengthMenu\":      \"Prikaži _MENU_ rezultata po stranici\",
    \"sLoadingRecords\":  \"Dohvaćam...\",
    \"sProcessing\":      \"Obrađujem...\",
    \"sSearch\":          \"Pretraži:\",
    \"sZeroRecords\":     \"Ništa nije pronađeno\",
    \"oPaginate\": {
        \"sFirst\":       \"Prva\",
        \"sPrevious\":    \"Nazad\",
        \"sNext\":        \"Naprijed\",
        \"sLast\":        \"Zadnja\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktiviraj za rastući poredak\",
        \"sSortDescending\": \": aktiviraj za padajući poredak\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:hr.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Croatian translation
 *  @name Croatian
 *  @anchor Croatian
 *  @author Predrag Mušić and _hrvoj3e_
 */
{
    \"sEmptyTable\":      \"Nema podataka u tablici\",
    \"sInfo\":            \"Prikazano _START_ do _END_ od _TOTAL_ rezultata\",
    \"sInfoEmpty\":       \"Prikazano 0 do 0 od 0 rezultata\",
    \"sInfoFiltered\":    \"(filtrirano iz _MAX_ ukupnih rezultata)\",
    \"sInfoPostFix\":     \"\",
    \"sInfoThousands\":   \",\",
    \"sLengthMenu\":      \"Prikaži _MENU_ rezultata po stranici\",
    \"sLoadingRecords\":  \"Dohvaćam...\",
    \"sProcessing\":      \"Obrađujem...\",
    \"sSearch\":          \"Pretraži:\",
    \"sZeroRecords\":     \"Ništa nije pronađeno\",
    \"oPaginate\": {
        \"sFirst\":       \"Prva\",
        \"sPrevious\":    \"Nazad\",
        \"sNext\":        \"Naprijed\",
        \"sLast\":        \"Zadnja\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktiviraj za rastući poredak\",
        \"sSortDescending\": \": aktiviraj za padajući poredak\"
    }
}
", "SgDatatablesBundle:i18n:hr.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/hr.json.twig");
    }
}
