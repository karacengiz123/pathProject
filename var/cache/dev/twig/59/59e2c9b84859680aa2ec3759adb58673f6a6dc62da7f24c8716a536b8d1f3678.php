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

/* SgDatatablesBundle:i18n:uz.json.twig */
class __TwigTemplate_70d9616b349f5511085d3e9a9f54ca0eb510662d35cf4ba0cc400543c4d9c675 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:uz.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:uz.json.twig"));

        // line 1
        echo "/**
 * Uzbek translation
 *  @name Uzbek
 *  @anchor Uzbek
 *  @author <a href=\"http://davlat.info\">Farkhod Dadajanov</a>
 */
{
    \"sEmptyTable\":     \"Ma'lumot yo'q\",
    \"sInfo\":           \"Umumiy _TOTAL_ yozuvlarlardan _START_ dan _END_ gachasi ko'rsatilmoqda\",
    \"sInfoEmpty\":      \"Umumiy 0 yozuvlardan 0 dan 0 gachasi ko'rsatilmoqda\",
    \"sInfoFiltered\":   \"(_MAX_ yozuvlardan filtrlandi)\",
    \"sInfoPostFix\":    \"\",
    \"sLengthMenu\":     \"_MENU_ ta yozuvlarni ko'rsat\",
    \"sLoadingRecords\": \"Yozuvlar yuklanmoqda...\",
    \"sProcessing\":     \"Ishlayapman...\",
    \"sSearch\":         \"Izlash:\",
    \"sZeroRecords\":    \"Ma'lumot yo'q.\",
    \"oPaginate\": {
        \"sFirst\":    \"Birinchi\",
        \"sPrevious\": \"Avvalgi\",
        \"sNext\":     \"Keyingi\",
        \"sLast\":     \"Son'ggi\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": to'g'ri tartiblash\",
        \"sSortDescending\": \": teskari tartiblash\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:uz.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Uzbek translation
 *  @name Uzbek
 *  @anchor Uzbek
 *  @author <a href=\"http://davlat.info\">Farkhod Dadajanov</a>
 */
{
    \"sEmptyTable\":     \"Ma'lumot yo'q\",
    \"sInfo\":           \"Umumiy _TOTAL_ yozuvlarlardan _START_ dan _END_ gachasi ko'rsatilmoqda\",
    \"sInfoEmpty\":      \"Umumiy 0 yozuvlardan 0 dan 0 gachasi ko'rsatilmoqda\",
    \"sInfoFiltered\":   \"(_MAX_ yozuvlardan filtrlandi)\",
    \"sInfoPostFix\":    \"\",
    \"sLengthMenu\":     \"_MENU_ ta yozuvlarni ko'rsat\",
    \"sLoadingRecords\": \"Yozuvlar yuklanmoqda...\",
    \"sProcessing\":     \"Ishlayapman...\",
    \"sSearch\":         \"Izlash:\",
    \"sZeroRecords\":    \"Ma'lumot yo'q.\",
    \"oPaginate\": {
        \"sFirst\":    \"Birinchi\",
        \"sPrevious\": \"Avvalgi\",
        \"sNext\":     \"Keyingi\",
        \"sLast\":     \"Son'ggi\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": to'g'ri tartiblash\",
        \"sSortDescending\": \": teskari tartiblash\"
    }
}
", "SgDatatablesBundle:i18n:uz.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/uz.json.twig");
    }
}
