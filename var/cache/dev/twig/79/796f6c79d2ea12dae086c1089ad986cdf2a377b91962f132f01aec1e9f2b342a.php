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

/* SgDatatablesBundle:i18n:ks.json.twig */
class __TwigTemplate_6ffe5add6e5b6c586995680351ec8efeec1c21cca372e7b61e4241b483c2edac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ks.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ks.json.twig"));

        // line 1
        echo "/**
 *  @name Kyrgyz
 *  @anchor Kyrgyz
 *  @author <a href=\"https://github.com/nursultan92/\">Nursultan Turdaliev</a> and _tynar_
 */
{
    \"sEmptyTable\":     \"Таблицада эч кандай берилиш жок\",
    \"sInfo\":           \"Жалпы _TOTAL_ саптын ичинен _START_-саптан _END_-сапка чейинкилер\",
    \"sInfoEmpty\":      \"Жалпы 0 саптын ичинен 0-саптан 0-сапка чейинкилер\",
    \"sInfoFiltered\":   \"(жалпы _MAX_ саптан фильтрленди)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \" \",
    \"sLengthMenu\":     \"_MENU_ саптан көрсөт\",
    \"sLoadingRecords\": \"Жүктөлүүдө...\",
    \"sProcessing\":     \"Иштеп жатат...\",
    \"sSearch\":         \"Издөө:\",
    \"sZeroRecords\":    \"Туура келген бир да сап жок\",
    \"oPaginate\": {
        \"sFirst\":    \"Биринчи\",
        \"sLast\":     \"Акыркы\",
        \"sNext\":     \"Кийинки\",
        \"sPrevious\": \"Мурунку\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": иретте\",
        \"sSortDescending\": \": тескери иретте\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ks.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 *  @name Kyrgyz
 *  @anchor Kyrgyz
 *  @author <a href=\"https://github.com/nursultan92/\">Nursultan Turdaliev</a> and _tynar_
 */
{
    \"sEmptyTable\":     \"Таблицада эч кандай берилиш жок\",
    \"sInfo\":           \"Жалпы _TOTAL_ саптын ичинен _START_-саптан _END_-сапка чейинкилер\",
    \"sInfoEmpty\":      \"Жалпы 0 саптын ичинен 0-саптан 0-сапка чейинкилер\",
    \"sInfoFiltered\":   \"(жалпы _MAX_ саптан фильтрленди)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \" \",
    \"sLengthMenu\":     \"_MENU_ саптан көрсөт\",
    \"sLoadingRecords\": \"Жүктөлүүдө...\",
    \"sProcessing\":     \"Иштеп жатат...\",
    \"sSearch\":         \"Издөө:\",
    \"sZeroRecords\":    \"Туура келген бир да сап жок\",
    \"oPaginate\": {
        \"sFirst\":    \"Биринчи\",
        \"sLast\":     \"Акыркы\",
        \"sNext\":     \"Кийинки\",
        \"sPrevious\": \"Мурунку\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": иретте\",
        \"sSortDescending\": \": тескери иретте\"
    }
}
", "SgDatatablesBundle:i18n:ks.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ks.json.twig");
    }
}
