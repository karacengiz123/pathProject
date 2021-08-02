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

/* SgDatatablesBundle:i18n:ru.json.twig */
class __TwigTemplate_dba63aabd0d3973c3fa5ff074186d39dd0a76bd4cde90767bb445fdbed7cd289 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ru.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ru.json.twig"));

        // line 1
        echo "/**
 * Russian translation
 *  @name Russian
 *  @anchor Russian
 *  @author Tjoma
 *  @autor aspyatkin 
 */
{
  \"sProcessing\": \"Подождите...\",
  \"sSearch\": \"Поиск:\",
  \"sLengthMenu\": \"Показать _MENU_ записей\",
  \"sInfo\": \"Записи с _START_ до _END_ из _TOTAL_ записей\",
  \"sInfoEmpty\": \"Записи с 0 до 0 из 0 записей\",
  \"sInfoFiltered\": \"(отфильтровано из _MAX_ записей)\",
  \"sInfoPostFix\": \"\",
  \"sLoadingRecords\": \"Загрузка записей...\",
  \"sZeroRecords\": \"Записи отсутствуют.\",
  \"sEmptyTable\": \"В таблице отсутствуют данные\",
  \"oPaginate\": {
    \"sFirst\": \"Первая\",
    \"sPrevious\": \"Предыдущая\",
    \"sNext\": \"Следующая\",
    \"sLast\": \"Последняя\"
  },
  \"aria\": {
    \"sSortAscending\": \": активировать для сортировки столбца по возрастанию\",
    \"sSortDescending\": \": активировать для сортировки столбца по убыванию\"
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ru.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Russian translation
 *  @name Russian
 *  @anchor Russian
 *  @author Tjoma
 *  @autor aspyatkin 
 */
{
  \"sProcessing\": \"Подождите...\",
  \"sSearch\": \"Поиск:\",
  \"sLengthMenu\": \"Показать _MENU_ записей\",
  \"sInfo\": \"Записи с _START_ до _END_ из _TOTAL_ записей\",
  \"sInfoEmpty\": \"Записи с 0 до 0 из 0 записей\",
  \"sInfoFiltered\": \"(отфильтровано из _MAX_ записей)\",
  \"sInfoPostFix\": \"\",
  \"sLoadingRecords\": \"Загрузка записей...\",
  \"sZeroRecords\": \"Записи отсутствуют.\",
  \"sEmptyTable\": \"В таблице отсутствуют данные\",
  \"oPaginate\": {
    \"sFirst\": \"Первая\",
    \"sPrevious\": \"Предыдущая\",
    \"sNext\": \"Следующая\",
    \"sLast\": \"Последняя\"
  },
  \"aria\": {
    \"sSortAscending\": \": активировать для сортировки столбца по возрастанию\",
    \"sSortDescending\": \": активировать для сортировки столбца по убыванию\"
  }
}
", "SgDatatablesBundle:i18n:ru.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ru.json.twig");
    }
}
