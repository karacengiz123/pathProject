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

/* SgDatatablesBundle:i18n:cs.json.twig */
class __TwigTemplate_9769486e86602d876b0a760a93e7f55fc5719a60adbad4a0df452f4b0c9248c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:cs.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:cs.json.twig"));

        // line 1
        echo "/**
 * Czech translation
 *  @name Czech
 *  @anchor Czech
 *  @author <a href=\"http://blog.magerio.cz/\">Magerio</a>
 */
{
    \"sEmptyTable\":     \"Tabulka neobsahuje žádná data\",
    \"sInfo\":           \"Zobrazuji _START_ až _END_ z celkem _TOTAL_ záznamů\",
    \"sInfoEmpty\":      \"Zobrazuji 0 až 0 z 0 záznamů\",
    \"sInfoFiltered\":   \"(filtrováno z celkem _MAX_ záznamů)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \" \",
    \"sLengthMenu\":     \"Zobraz záznamů _MENU_\",
    \"sLoadingRecords\": \"Načítám...\",
    \"sProcessing\":     \"Provádím...\",
    \"sSearch\":         \"Hledat:\",
    \"sZeroRecords\":    \"Žádné záznamy nebyly nalezeny\",
    \"oPaginate\": {
        \"sFirst\":    \"První\",
        \"sLast\":     \"Poslední\",
        \"sNext\":     \"Další\",
        \"sPrevious\": \"Předchozí\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktivujte pro řazení sloupce vzestupně\",
        \"sSortDescending\": \": aktivujte pro řazení sloupce sestupně\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:cs.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Czech translation
 *  @name Czech
 *  @anchor Czech
 *  @author <a href=\"http://blog.magerio.cz/\">Magerio</a>
 */
{
    \"sEmptyTable\":     \"Tabulka neobsahuje žádná data\",
    \"sInfo\":           \"Zobrazuji _START_ až _END_ z celkem _TOTAL_ záznamů\",
    \"sInfoEmpty\":      \"Zobrazuji 0 až 0 z 0 záznamů\",
    \"sInfoFiltered\":   \"(filtrováno z celkem _MAX_ záznamů)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \" \",
    \"sLengthMenu\":     \"Zobraz záznamů _MENU_\",
    \"sLoadingRecords\": \"Načítám...\",
    \"sProcessing\":     \"Provádím...\",
    \"sSearch\":         \"Hledat:\",
    \"sZeroRecords\":    \"Žádné záznamy nebyly nalezeny\",
    \"oPaginate\": {
        \"sFirst\":    \"První\",
        \"sLast\":     \"Poslední\",
        \"sNext\":     \"Další\",
        \"sPrevious\": \"Předchozí\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktivujte pro řazení sloupce vzestupně\",
        \"sSortDescending\": \": aktivujte pro řazení sloupce sestupně\"
    }
}
", "SgDatatablesBundle:i18n:cs.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/cs.json.twig");
    }
}
