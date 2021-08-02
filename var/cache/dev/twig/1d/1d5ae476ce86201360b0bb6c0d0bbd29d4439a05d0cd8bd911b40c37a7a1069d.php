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

/* SgDatatablesBundle:i18n:uk.json.twig */
class __TwigTemplate_6d9445e611ec7659b7d876b6541d8ca4610621e4fe7c1389713336bfde64db67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:uk.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:uk.json.twig"));

        // line 1
        echo "/**
 * Ukranian translation
 *  @name Ukranian
 *  @anchor Ukranian
 *  @author <i>antyrat</i>
 */
{
    \"sProcessing\":   \"Зачекайте...\",
    \"sLengthMenu\":   \"Показати _MENU_ записів\",
    \"sZeroRecords\":  \"Записи відсутні.\",
    \"sInfo\":         \"Записи з _START_ по _END_ із _TOTAL_ записів\",
    \"sInfoEmpty\":    \"Записи з 0 по 0 із 0 записів\",
    \"sInfoFiltered\": \"(відфільтровано з _MAX_ записів)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Пошук:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\": \"Перша\",
        \"sPrevious\": \"Попередня\",
        \"sNext\": \"Наступна\",
        \"sLast\": \"Остання\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": активувати для сортування стовпців за зростанням\",
        \"sSortDescending\": \": активувати для сортування стовпців за спаданням\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:uk.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Ukranian translation
 *  @name Ukranian
 *  @anchor Ukranian
 *  @author <i>antyrat</i>
 */
{
    \"sProcessing\":   \"Зачекайте...\",
    \"sLengthMenu\":   \"Показати _MENU_ записів\",
    \"sZeroRecords\":  \"Записи відсутні.\",
    \"sInfo\":         \"Записи з _START_ по _END_ із _TOTAL_ записів\",
    \"sInfoEmpty\":    \"Записи з 0 по 0 із 0 записів\",
    \"sInfoFiltered\": \"(відфільтровано з _MAX_ записів)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Пошук:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\": \"Перша\",
        \"sPrevious\": \"Попередня\",
        \"sNext\": \"Наступна\",
        \"sLast\": \"Остання\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": активувати для сортування стовпців за зростанням\",
        \"sSortDescending\": \": активувати для сортування стовпців за спаданням\"
    }
}
", "SgDatatablesBundle:i18n:uk.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/uk.json.twig");
    }
}
