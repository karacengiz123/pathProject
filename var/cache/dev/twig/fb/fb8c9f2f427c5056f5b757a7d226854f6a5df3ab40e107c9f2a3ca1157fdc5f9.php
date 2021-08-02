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

/* SgDatatablesBundle:i18n:it.json.twig */
class __TwigTemplate_25df993f5a2042bb31d9a485ff7217c4e1854e39d836c7cd00198bd28c58a97d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:it.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:it.json.twig"));

        // line 1
        echo "/**
 * Italian translation
 *  @name Italian
 *  @anchor Italian
 *  @author Nicola Zecchin & Giulio Quaresima
 */
{
    \"sEmptyTable\":     \"Nessun dato presente nella tabella\",
    \"sInfo\":           \"Vista da _START_ a _END_ di _TOTAL_ elementi\",
    \"sInfoEmpty\":      \"Vista da 0 a 0 di 0 elementi\",
    \"sInfoFiltered\":   \"(filtrati da _MAX_ elementi totali)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \".\",
    \"sLengthMenu\":     \"Visualizza _MENU_ elementi\",
    \"sLoadingRecords\": \"Caricamento...\",
    \"sProcessing\":     \"Elaborazione...\",
    \"sSearch\":         \"Cerca:\",
    \"sZeroRecords\":    \"La ricerca non ha portato alcun risultato.\",
    \"oPaginate\": {
        \"sFirst\":      \"Inizio\",
        \"sPrevious\":   \"Precedente\",
        \"sNext\":       \"Successivo\",
        \"sLast\":       \"Fine\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": attiva per ordinare la colonna in ordine crescente\",
        \"sSortDescending\": \": attiva per ordinare la colonna in ordine decrescente\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:it.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Italian translation
 *  @name Italian
 *  @anchor Italian
 *  @author Nicola Zecchin & Giulio Quaresima
 */
{
    \"sEmptyTable\":     \"Nessun dato presente nella tabella\",
    \"sInfo\":           \"Vista da _START_ a _END_ di _TOTAL_ elementi\",
    \"sInfoEmpty\":      \"Vista da 0 a 0 di 0 elementi\",
    \"sInfoFiltered\":   \"(filtrati da _MAX_ elementi totali)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \".\",
    \"sLengthMenu\":     \"Visualizza _MENU_ elementi\",
    \"sLoadingRecords\": \"Caricamento...\",
    \"sProcessing\":     \"Elaborazione...\",
    \"sSearch\":         \"Cerca:\",
    \"sZeroRecords\":    \"La ricerca non ha portato alcun risultato.\",
    \"oPaginate\": {
        \"sFirst\":      \"Inizio\",
        \"sPrevious\":   \"Precedente\",
        \"sNext\":       \"Successivo\",
        \"sLast\":       \"Fine\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": attiva per ordinare la colonna in ordine crescente\",
        \"sSortDescending\": \": attiva per ordinare la colonna in ordine decrescente\"
    }
}
", "SgDatatablesBundle:i18n:it.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/it.json.twig");
    }
}
