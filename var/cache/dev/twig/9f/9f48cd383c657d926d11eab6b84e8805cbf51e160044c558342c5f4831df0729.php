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

/* SgDatatablesBundle:i18n:zh.json.twig */
class __TwigTemplate_702d1f3e5434c66a9e7342e0b96c5e11416af012f9e940b6e08fad1f2b33574c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:zh.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:zh.json.twig"));

        // line 1
        echo "/**
 * Chinese translation
 *  @name Chinese
 *  @anchor Chinese
 *  @author <a href=\"http://docs.jquery.com/UI\">Chi Cheng</a>
 */
{
    \"sProcessing\":   \"处理中...\",
    \"sLengthMenu\":   \"显示 _MENU_ 项结果\",
    \"sZeroRecords\":  \"没有匹配结果\",
    \"sInfo\":         \"显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项\",
    \"sInfoEmpty\":    \"显示第 0 至 0 项结果，共 0 项\",
    \"sInfoFiltered\": \"(由 _MAX_ 项结果过滤)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"搜索:\",
    \"sUrl\":          \"\",
    \"sEmptyTable\":     \"表中数据为空\",
    \"sLoadingRecords\": \"载入中...\",
    \"sInfoThousands\":  \",\",
    \"oPaginate\": {
        \"sFirst\":    \"首页\",
        \"sPrevious\": \"上页\",
        \"sNext\":     \"下页\",
        \"sLast\":     \"末页\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": 以升序排列此列\",
        \"sSortDescending\": \": 以降序排列此列\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:zh.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Chinese translation
 *  @name Chinese
 *  @anchor Chinese
 *  @author <a href=\"http://docs.jquery.com/UI\">Chi Cheng</a>
 */
{
    \"sProcessing\":   \"处理中...\",
    \"sLengthMenu\":   \"显示 _MENU_ 项结果\",
    \"sZeroRecords\":  \"没有匹配结果\",
    \"sInfo\":         \"显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项\",
    \"sInfoEmpty\":    \"显示第 0 至 0 项结果，共 0 项\",
    \"sInfoFiltered\": \"(由 _MAX_ 项结果过滤)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"搜索:\",
    \"sUrl\":          \"\",
    \"sEmptyTable\":     \"表中数据为空\",
    \"sLoadingRecords\": \"载入中...\",
    \"sInfoThousands\":  \",\",
    \"oPaginate\": {
        \"sFirst\":    \"首页\",
        \"sPrevious\": \"上页\",
        \"sNext\":     \"下页\",
        \"sLast\":     \"末页\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": 以升序排列此列\",
        \"sSortDescending\": \": 以降序排列此列\"
    }
}
", "SgDatatablesBundle:i18n:zh.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/zh.json.twig");
    }
}
