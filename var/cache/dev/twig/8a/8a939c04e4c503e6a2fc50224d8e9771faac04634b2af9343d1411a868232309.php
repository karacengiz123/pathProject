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

/* SgDatatablesBundle:i18n:en.json.twig */
class __TwigTemplate_a2b5aa0804284d5d71ebcdc118b7190c384acb7268c8ef88ed4c8bbd2bf7258b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:en.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:en.json.twig"));

        // line 1
        echo "/**
 * English - this is the default DataTables ships with
 *  @name English
 *  @anchor English
 *  @author <a href=\"http://www.sprymedia.co.uk/\">Allan Jardine</a>
 */
{
    \"sEmptyTable\":     \"No data available in table\",
    \"sInfo\":           \"Showing _START_ to _END_ of _TOTAL_ entries\",
    \"sInfoEmpty\":      \"Showing 0 to 0 of 0 entries\",
    \"sInfoFiltered\":   \"(filtered from _MAX_ total entries)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"Show _MENU_ entries\",
    \"sLoadingRecords\": \"Loading...\",
    \"sProcessing\":     \"Processing...\",
    \"sSearch\":         \"Search:\",
    \"sZeroRecords\":    \"No matching records found\",
    \"oPaginate\": {
        \"sFirst\":    \"First\",
        \"sLast\":     \"Last\",
        \"sNext\":     \"Next\",
        \"sPrevious\": \"Previous\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activate to sort column ascending\",
        \"sSortDescending\": \": activate to sort column descending\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:en.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * English - this is the default DataTables ships with
 *  @name English
 *  @anchor English
 *  @author <a href=\"http://www.sprymedia.co.uk/\">Allan Jardine</a>
 */
{
    \"sEmptyTable\":     \"No data available in table\",
    \"sInfo\":           \"Showing _START_ to _END_ of _TOTAL_ entries\",
    \"sInfoEmpty\":      \"Showing 0 to 0 of 0 entries\",
    \"sInfoFiltered\":   \"(filtered from _MAX_ total entries)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"Show _MENU_ entries\",
    \"sLoadingRecords\": \"Loading...\",
    \"sProcessing\":     \"Processing...\",
    \"sSearch\":         \"Search:\",
    \"sZeroRecords\":    \"No matching records found\",
    \"oPaginate\": {
        \"sFirst\":    \"First\",
        \"sLast\":     \"Last\",
        \"sNext\":     \"Next\",
        \"sPrevious\": \"Previous\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activate to sort column ascending\",
        \"sSortDescending\": \": activate to sort column descending\"
    }
}
", "SgDatatablesBundle:i18n:en.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/en.json.twig");
    }
}
