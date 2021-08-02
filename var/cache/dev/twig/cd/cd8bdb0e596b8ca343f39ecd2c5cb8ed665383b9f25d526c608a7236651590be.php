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

/* SgDatatablesBundle:i18n:ja.json.twig */
class __TwigTemplate_2b8aec6cae574f940ee56e3ad994ddeccd08b06883d980745fbd62862292386a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ja.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ja.json.twig"));

        // line 1
        echo "/**
 * Japanese translation
 *  @name Japanese
 *  @anchor Japanese
 *  @author <i>yusuke</i> and <a href=\"https://github.com/wiraqutra\">Seigo ISHINO</a>
 */
{
  \"sEmptyTable\":     \"テーブルにデータがありません\",
  \"sInfo\":           \" _TOTAL_ 件中 _START_ から _END_ まで表示\",
    \"sInfoEmpty\":      \" 0 件中 0 から 0 まで表示\",
    \"sInfoFiltered\":   \"（全 _MAX_ 件より抽出）\",
  \"sInfoPostFix\":    \"\",
  \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"_MENU_ 件表示\",
  \"sLoadingRecords\": \"読み込み中...\",
    \"sProcessing\":     \"処理中...\",
  \"sSearch\":         \"検索:\",
    \"sZeroRecords\":    \"一致するレコードがありません\",
    \"oPaginate\": {
        \"sFirst\":    \"先頭\",
        \"sLast\":     \"最終\",
        \"sNext\":     \"次\",
        \"sPrevious\": \"前\"
    },
  \"oAria\": {
        \"sSortAscending\":  \": 列を昇順に並べ替えるにはアクティブにする\",
        \"sSortDescending\": \": 列を降順に並べ替えるにはアクティブにする\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ja.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Japanese translation
 *  @name Japanese
 *  @anchor Japanese
 *  @author <i>yusuke</i> and <a href=\"https://github.com/wiraqutra\">Seigo ISHINO</a>
 */
{
  \"sEmptyTable\":     \"テーブルにデータがありません\",
  \"sInfo\":           \" _TOTAL_ 件中 _START_ から _END_ まで表示\",
    \"sInfoEmpty\":      \" 0 件中 0 から 0 まで表示\",
    \"sInfoFiltered\":   \"（全 _MAX_ 件より抽出）\",
  \"sInfoPostFix\":    \"\",
  \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"_MENU_ 件表示\",
  \"sLoadingRecords\": \"読み込み中...\",
    \"sProcessing\":     \"処理中...\",
  \"sSearch\":         \"検索:\",
    \"sZeroRecords\":    \"一致するレコードがありません\",
    \"oPaginate\": {
        \"sFirst\":    \"先頭\",
        \"sLast\":     \"最終\",
        \"sNext\":     \"次\",
        \"sPrevious\": \"前\"
    },
  \"oAria\": {
        \"sSortAscending\":  \": 列を昇順に並べ替えるにはアクティブにする\",
        \"sSortDescending\": \": 列を降順に並べ替えるにはアクティブにする\"
    }
}
", "SgDatatablesBundle:i18n:ja.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ja.json.twig");
    }
}
