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

/* SgDatatablesBundle:i18n:ko.json.twig */
class __TwigTemplate_083bde0cc324a05bec43b0ba9d0dc7b449f613f4b1102dcf44190c79468ca1d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ko.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ko.json.twig"));

        // line 1
        echo "/**
 * Korean translation
 *  @name Korean
 *  @anchor Korean
 *  @author WonGoo Lee
 */
{
   \"sEmptyTable\":     \"데이터가 없습니다\",
   \"sInfo\":           \"_START_ - _END_ / _TOTAL_\",
   \"sInfoEmpty\":      \"0 - 0 / 0\",
   \"sInfoFiltered\":   \"(총 _MAX_ 개)\",
   \"sInfoPostFix\":    \"\",
   \"sInfoThousands\":  \",\",
   \"sLengthMenu\":     \"페이지당 줄수 _MENU_\",
   \"sLoadingRecords\": \"읽는중...\",
   \"sProcessing\":     \"처리중...\",
   \"sSearch\":         \"검색:\",
   \"sZeroRecords\":    \"검색 결과가 없습니다\",
   \"oPaginate\": {
       \"sFirst\":    \"처음\",
       \"sLast\":     \"마지막\",
       \"sNext\":     \"다음\",
       \"sPrevious\": \"이전\"
   },
   \"oAria\": {
       \"sSortAscending\":  \": 오름차순 정렬\",
       \"sSortDescending\": \": 내림차순 정렬\"
   }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ko.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Korean translation
 *  @name Korean
 *  @anchor Korean
 *  @author WonGoo Lee
 */
{
   \"sEmptyTable\":     \"데이터가 없습니다\",
   \"sInfo\":           \"_START_ - _END_ / _TOTAL_\",
   \"sInfoEmpty\":      \"0 - 0 / 0\",
   \"sInfoFiltered\":   \"(총 _MAX_ 개)\",
   \"sInfoPostFix\":    \"\",
   \"sInfoThousands\":  \",\",
   \"sLengthMenu\":     \"페이지당 줄수 _MENU_\",
   \"sLoadingRecords\": \"읽는중...\",
   \"sProcessing\":     \"처리중...\",
   \"sSearch\":         \"검색:\",
   \"sZeroRecords\":    \"검색 결과가 없습니다\",
   \"oPaginate\": {
       \"sFirst\":    \"처음\",
       \"sLast\":     \"마지막\",
       \"sNext\":     \"다음\",
       \"sPrevious\": \"이전\"
   },
   \"oAria\": {
       \"sSortAscending\":  \": 오름차순 정렬\",
       \"sSortDescending\": \": 내림차순 정렬\"
   }
}
", "SgDatatablesBundle:i18n:ko.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ko.json.twig");
    }
}
