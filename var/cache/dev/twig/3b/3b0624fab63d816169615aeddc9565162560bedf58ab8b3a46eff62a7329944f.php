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

/* SgDatatablesBundle:i18n:mk.json.twig */
class __TwigTemplate_02ae03f15000ac15f95d13766daf39e4dcaa2d0273295abe5c132e5a2bd7bba1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:mk.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:mk.json.twig"));

        // line 1
        echo "/**
 * Macedonian translation
 *  @name Macedonian
 *  @anchor Macedonian
 *  @author Bojan Petkovski
 */
{
    \"sProcessing\":     \"Процесирање...\",
    \"sLengthMenu\":     \"Прикажи _MENU_ записи\",
    \"sZeroRecords\":    \"Не се пронајдени записи\",
    \"sEmptyTable\":\t   \"Нема податоци во табелата\",
    \"sLoadingRecords\": \"Вчитување...\",
    \"sInfo\":           \"Прикажани _START_ до _END_ од _TOTAL_ записи\",
    \"sInfoEmpty\":      \"Прикажани 0 до 0 од 0 записи\",
    \"sInfoFiltered\":   \"(филтрирано од вкупно _MAX_ записи)\",
    \"sInfoPostFix\":    \"\",
    \"sSearch\":         \"Барај\",
    \"sUrl\": \"\",
    \"oPaginate\": {
        \"sFirst\":      \"Почетна\",
        \"sPrevious\":   \"Претходна\",
        \"sNext\":       \"Следна\",
        \"sLast\":       \"Последна\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:mk.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Macedonian translation
 *  @name Macedonian
 *  @anchor Macedonian
 *  @author Bojan Petkovski
 */
{
    \"sProcessing\":     \"Процесирање...\",
    \"sLengthMenu\":     \"Прикажи _MENU_ записи\",
    \"sZeroRecords\":    \"Не се пронајдени записи\",
    \"sEmptyTable\":\t   \"Нема податоци во табелата\",
    \"sLoadingRecords\": \"Вчитување...\",
    \"sInfo\":           \"Прикажани _START_ до _END_ од _TOTAL_ записи\",
    \"sInfoEmpty\":      \"Прикажани 0 до 0 од 0 записи\",
    \"sInfoFiltered\":   \"(филтрирано од вкупно _MAX_ записи)\",
    \"sInfoPostFix\":    \"\",
    \"sSearch\":         \"Барај\",
    \"sUrl\": \"\",
    \"oPaginate\": {
        \"sFirst\":      \"Почетна\",
        \"sPrevious\":   \"Претходна\",
        \"sNext\":       \"Следна\",
        \"sLast\":       \"Последна\"
    }
}
", "SgDatatablesBundle:i18n:mk.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/mk.json.twig");
    }
}
