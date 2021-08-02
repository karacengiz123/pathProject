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

/* SgDatatablesBundle:i18n:sk.json.twig */
class __TwigTemplate_0465415899d8c615c806f347e93a2b3029cc7c9fed4ca393ae9d29bd3182cc47 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sk.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sk.json.twig"));

        // line 1
        echo "/**
 * Slovak translation
 *  @name Slovak
 *  @anchor Slovak
 *  @author <a href=\"https://github.com/dlugos\">Ivan Dlugoš</a>
 *  @author (original translation) <a href=\"http://miskerik.com/\">Maroš Miškerik</a>
 */
{
    \"sEmptyTable\":     \"Nie sú k dispozícii žiadne dáta\",
    \"sInfo\":           \"Záznamy _START_ až _END_ z celkom _TOTAL_\",
    \"sInfoEmpty\":      \"Záznamy 0 až 0 z celkom 0 \",
    \"sInfoFiltered\":   \"(vyfiltrované spomedzi _MAX_ záznamov)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"Zobraz _MENU_ záznamov\",
    \"sLoadingRecords\": \"Načítavam...\",
    \"sProcessing\":     \"Spracúvam...\",
    \"sSearch\":         \"Hľadať:\",
    \"sZeroRecords\":    \"Nenašli sa žiadne vyhovujúce záznamy\",
    \"oPaginate\": {
        \"sFirst\":    \"Prvá\",
        \"sLast\":     \"Posledná\",
        \"sNext\":     \"Nasledujúca\",
        \"sPrevious\": \"Predchádzajúca\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktivujte na zoradenie stĺpca vzostupne\",
        \"sSortDescending\": \": aktivujte na zoradenie stĺpca zostupne\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:sk.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Slovak translation
 *  @name Slovak
 *  @anchor Slovak
 *  @author <a href=\"https://github.com/dlugos\">Ivan Dlugoš</a>
 *  @author (original translation) <a href=\"http://miskerik.com/\">Maroš Miškerik</a>
 */
{
    \"sEmptyTable\":     \"Nie sú k dispozícii žiadne dáta\",
    \"sInfo\":           \"Záznamy _START_ až _END_ z celkom _TOTAL_\",
    \"sInfoEmpty\":      \"Záznamy 0 až 0 z celkom 0 \",
    \"sInfoFiltered\":   \"(vyfiltrované spomedzi _MAX_ záznamov)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"Zobraz _MENU_ záznamov\",
    \"sLoadingRecords\": \"Načítavam...\",
    \"sProcessing\":     \"Spracúvam...\",
    \"sSearch\":         \"Hľadať:\",
    \"sZeroRecords\":    \"Nenašli sa žiadne vyhovujúce záznamy\",
    \"oPaginate\": {
        \"sFirst\":    \"Prvá\",
        \"sLast\":     \"Posledná\",
        \"sNext\":     \"Nasledujúca\",
        \"sPrevious\": \"Predchádzajúca\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": aktivujte na zoradenie stĺpca vzostupne\",
        \"sSortDescending\": \": aktivujte na zoradenie stĺpca zostupne\"
    }
}
", "SgDatatablesBundle:i18n:sk.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/sk.json.twig");
    }
}
