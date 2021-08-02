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

/* SgDatatablesBundle:i18n:bg.json.twig */
class __TwigTemplate_0734e6389395235462db477d9835b1c50aacb6ec7169637124e98e450baf2531 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:bg.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:bg.json.twig"));

        // line 1
        echo "/**
 * Bulgarian translation
 *  @name Bulgarian
 *  @anchor Bulgarian
 *  @author Rostislav Stoyanov
 */
{
    \"sProcessing\":   \"Обработка на резултатите...\",
    \"sLengthMenu\":   \"Показване на _MENU_ резултата\",
    \"sZeroRecords\":  \"Няма намерени резултати\",
    \"sInfo\":         \"Показване на резултати от _START_ до _END_ от общо _TOTAL_\",
    \"sInfoEmpty\":    \"Показване на резултати от 0 до 0 от общо 0\",
    \"sInfoFiltered\": \"(филтрирани от общо _MAX_ резултата)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Търсене във всички колони:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Първа\",
        \"sPrevious\": \"Предишна\",
        \"sNext\":     \"Следваща\",
        \"sLast\":     \"Последна\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:bg.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Bulgarian translation
 *  @name Bulgarian
 *  @anchor Bulgarian
 *  @author Rostislav Stoyanov
 */
{
    \"sProcessing\":   \"Обработка на резултатите...\",
    \"sLengthMenu\":   \"Показване на _MENU_ резултата\",
    \"sZeroRecords\":  \"Няма намерени резултати\",
    \"sInfo\":         \"Показване на резултати от _START_ до _END_ от общо _TOTAL_\",
    \"sInfoEmpty\":    \"Показване на резултати от 0 до 0 от общо 0\",
    \"sInfoFiltered\": \"(филтрирани от общо _MAX_ резултата)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Търсене във всички колони:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Първа\",
        \"sPrevious\": \"Предишна\",
        \"sNext\":     \"Следваща\",
        \"sLast\":     \"Последна\"
    }
}
", "SgDatatablesBundle:i18n:bg.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/bg.json.twig");
    }
}
