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

/* SgDatatablesBundle:i18n:sv.json.twig */
class __TwigTemplate_71b7733940a4aa1aa470737e180f75b72414d684eca793bf008e69029eee1552 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sv.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sv.json.twig"));

        // line 1
        echo "/**
 * Swedish translation
 * @name Swedish
 * @anchor Swedish
 * @author <a href=\"http://www.kmmtiming.se/\">Kristoffer Karlström</a>
 */
{
  \"sEmptyTable\": \"Tabellen innehåller ingen data\",
  \"sInfo\": \"Visar _START_ till _END_ av totalt _TOTAL_ rader\",
  \"sInfoEmpty\": \"Visar 0 till 0 av totalt 0 rader\",
  \"sInfoFiltered\": \"(filtrerade från totalt _MAX_ rader)\",
  \"sInfoPostFix\": \"\",
  \"sInfoThousands\": \" \",
  \"sLengthMenu\": \"Visa _MENU_ rader\",
  \"sLoadingRecords\": \"Laddar...\",
  \"sProcessing\": \"Bearbetar...\",
  \"sSearch\": \"Sök:\",
  \"sZeroRecords\": \"Hittade inga matchande resultat\",
  \"oPaginate\": {
    \"sFirst\": \"Första\",
    \"sLast\": \"Sista\",
    \"sNext\": \"Nästa\",
    \"sPrevious\": \"Föregående\"
  },
  \"oAria\": {
    \"sSortAscending\": \": aktivera för att sortera kolumnen i stigande ordning\",
    \"sSortDescending\": \": aktivera för att sortera kolumnen i fallande ordning\"
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:sv.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Swedish translation
 * @name Swedish
 * @anchor Swedish
 * @author <a href=\"http://www.kmmtiming.se/\">Kristoffer Karlström</a>
 */
{
  \"sEmptyTable\": \"Tabellen innehåller ingen data\",
  \"sInfo\": \"Visar _START_ till _END_ av totalt _TOTAL_ rader\",
  \"sInfoEmpty\": \"Visar 0 till 0 av totalt 0 rader\",
  \"sInfoFiltered\": \"(filtrerade från totalt _MAX_ rader)\",
  \"sInfoPostFix\": \"\",
  \"sInfoThousands\": \" \",
  \"sLengthMenu\": \"Visa _MENU_ rader\",
  \"sLoadingRecords\": \"Laddar...\",
  \"sProcessing\": \"Bearbetar...\",
  \"sSearch\": \"Sök:\",
  \"sZeroRecords\": \"Hittade inga matchande resultat\",
  \"oPaginate\": {
    \"sFirst\": \"Första\",
    \"sLast\": \"Sista\",
    \"sNext\": \"Nästa\",
    \"sPrevious\": \"Föregående\"
  },
  \"oAria\": {
    \"sSortAscending\": \": aktivera för att sortera kolumnen i stigande ordning\",
    \"sSortDescending\": \": aktivera för att sortera kolumnen i fallande ordning\"
  }
}
", "SgDatatablesBundle:i18n:sv.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/sv.json.twig");
    }
}
