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

/* SgDatatablesBundle:i18n:tr.json.twig */
class __TwigTemplate_219204d9fd6a237365349de7cebe522f8b85fa3587a3067c97d649ce15c9be41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:tr.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:tr.json.twig"));

        // line 1
        echo "/**
 * Turkish translation
 *  @name Turkish
 *  @anchor Turkish
 *  @author Umit Gorkem & Erdal TAŞKESEN
 */
{
    \"sDecimal\":        \",\",
    \"sEmptyTable\":     \"Tabloda herhangi bir veri mevcut değil\",
    \"sInfo\":           \"_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor\",
    \"sInfoEmpty\":      \"Kayıt yok\",
    \"sInfoFiltered\":   \"(_MAX_ kayıt içerisinden bulunan)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \".\",
    \"sLengthMenu\":     \"Sayfada _MENU_ kayıt göster\",
    \"sLoadingRecords\": \"Yükleniyor...\",
    \"sProcessing\":     \"İşleniyor...\",
    \"sSearch\":         \"Ara:\",
    \"sZeroRecords\":    \"Eşleşen kayıt bulunamadı\",
    \"oPaginate\": {
        \"sFirst\":    \"İlk\",
        \"sLast\":     \"Son\",
        \"sNext\":     \"Sonraki\",
        \"sPrevious\": \"Önceki\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": artan sütun sıralamasını aktifleştir\",
        \"sSortDescending\": \": azalan sütun soralamasını aktifleştir\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:tr.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Turkish translation
 *  @name Turkish
 *  @anchor Turkish
 *  @author Umit Gorkem & Erdal TAŞKESEN
 */
{
    \"sDecimal\":        \",\",
    \"sEmptyTable\":     \"Tabloda herhangi bir veri mevcut değil\",
    \"sInfo\":           \"_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor\",
    \"sInfoEmpty\":      \"Kayıt yok\",
    \"sInfoFiltered\":   \"(_MAX_ kayıt içerisinden bulunan)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \".\",
    \"sLengthMenu\":     \"Sayfada _MENU_ kayıt göster\",
    \"sLoadingRecords\": \"Yükleniyor...\",
    \"sProcessing\":     \"İşleniyor...\",
    \"sSearch\":         \"Ara:\",
    \"sZeroRecords\":    \"Eşleşen kayıt bulunamadı\",
    \"oPaginate\": {
        \"sFirst\":    \"İlk\",
        \"sLast\":     \"Son\",
        \"sNext\":     \"Sonraki\",
        \"sPrevious\": \"Önceki\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": artan sütun sıralamasını aktifleştir\",
        \"sSortDescending\": \": azalan sütun soralamasını aktifleştir\"
    }
}
", "SgDatatablesBundle:i18n:tr.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/tr.json.twig");
    }
}
