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

/* SgDatatablesBundle:i18n:th.json.twig */
class __TwigTemplate_23e04fb4d97f983567277dc34666509ced9005ed86eac7ca48018a5ba90d0c46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:th.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:th.json.twig"));

        // line 1
        echo "/**
 * Thai translation
 *  @name Thai
 *  @anchor Thai
 *  @author Thanva Thonglor
 */
{
    \"sProcessing\":   \"กำลังดำเนินการ...\",
    \"sLengthMenu\":   \"แสดง _MENU_ แถว\",
    \"sZeroRecords\":  \"ไม่พบข้อมูล\",
    \"sInfo\":         \"แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว\",
    \"sInfoEmpty\":    \"แสดง 0 ถึง 0 จาก 0 แถว\",
    \"sInfoFiltered\": \"(กรองข้อมูล _MAX_ ทุกแถว)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"ค้นหา: \",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"หน้าแรก\",
        \"sPrevious\": \"ก่อนหน้า\",
        \"sNext\":     \"ถัดไป\",
        \"sLast\":     \"หน้าสุดท้าย\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:th.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Thai translation
 *  @name Thai
 *  @anchor Thai
 *  @author Thanva Thonglor
 */
{
    \"sProcessing\":   \"กำลังดำเนินการ...\",
    \"sLengthMenu\":   \"แสดง _MENU_ แถว\",
    \"sZeroRecords\":  \"ไม่พบข้อมูล\",
    \"sInfo\":         \"แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว\",
    \"sInfoEmpty\":    \"แสดง 0 ถึง 0 จาก 0 แถว\",
    \"sInfoFiltered\": \"(กรองข้อมูล _MAX_ ทุกแถว)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"ค้นหา: \",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"หน้าแรก\",
        \"sPrevious\": \"ก่อนหน้า\",
        \"sNext\":     \"ถัดไป\",
        \"sLast\":     \"หน้าสุดท้าย\"
    }
}
", "SgDatatablesBundle:i18n:th.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/th.json.twig");
    }
}
