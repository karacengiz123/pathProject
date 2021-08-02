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

/* SgDatatablesBundle:i18n:ar.json.twig */
class __TwigTemplate_ea6b85d6cbc032689ccd6dcd3a57a69640c7f67930deed2a4139aa8cf28cbd97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ar.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ar.json.twig"));

        // line 1
        echo "/**
 * Arabic translation
 *  @name Arabic
 *  @anchor Arabic
 *  @author Ossama Khayat
 */
{
    \"sProcessing\":   \"جارٍ التحميل...\",
    \"sLengthMenu\":   \"أظهر _MENU_ مدخلات\",
    \"sZeroRecords\":  \"لم يعثر على أية سجلات\",
    \"sInfo\":         \"إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل\",
    \"sInfoEmpty\":    \"يعرض 0 إلى 0 من أصل 0 سجل\",
    \"sInfoFiltered\": \"(منتقاة من مجموع _MAX_ مُدخل)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"ابحث:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"الأول\",
        \"sPrevious\": \"السابق\",
        \"sNext\":     \"التالي\",
        \"sLast\":     \"الأخير\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ar.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Arabic translation
 *  @name Arabic
 *  @anchor Arabic
 *  @author Ossama Khayat
 */
{
    \"sProcessing\":   \"جارٍ التحميل...\",
    \"sLengthMenu\":   \"أظهر _MENU_ مدخلات\",
    \"sZeroRecords\":  \"لم يعثر على أية سجلات\",
    \"sInfo\":         \"إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل\",
    \"sInfoEmpty\":    \"يعرض 0 إلى 0 من أصل 0 سجل\",
    \"sInfoFiltered\": \"(منتقاة من مجموع _MAX_ مُدخل)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"ابحث:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"الأول\",
        \"sPrevious\": \"السابق\",
        \"sNext\":     \"التالي\",
        \"sLast\":     \"الأخير\"
    }
}
", "SgDatatablesBundle:i18n:ar.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ar.json.twig");
    }
}
