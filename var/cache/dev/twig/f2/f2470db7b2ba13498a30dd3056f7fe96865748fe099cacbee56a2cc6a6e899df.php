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

/* SgDatatablesBundle:i18n:sl.json.twig */
class __TwigTemplate_f16db6194a7dc92297546e19f7a0be33a15b81f8b2c0cff28bad0115a3a61a49 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sl.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sl.json.twig"));

        // line 1
        echo "/**
 * Slovenian translation
 *  @name Slovenian
 *  @anchor Slovenian
 *  @author Marko Kroflic, Blaž Brenčič and Andrej Florjančič
 */
{
    \"sEmptyTable\": \"Nobenih podatkov ni na voljo\",
    \"sInfo\": \"Prikazujem _START_ do _END_ od _TOTAL_ zapisov\",
    \"sInfoEmpty\": \"Prikazujem 0 do 0 od 0 zapisov\",
    \"sInfoFiltered\": \"(filtrirano od _MAX_ vseh zapisov)\",
    \"sInfoPostFix\": \"\",
    \"sInfoThousands\": \",\",
    \"sLengthMenu\": \"Prikaži _MENU_ zapisov\",
    \"sLoadingRecords\": \"Nalagam...\",
    \"sProcessing\": \"Obdelujem...\",
    \"sSearch\": \"Išči:\",
    \"sZeroRecords\": \"Nobeden zapis ne ustreza\",
    \"oPaginate\": {
        \"sFirst\": \"Prvi\",
        \"sLast\": \"Zadnji\",
        \"sNext\": \"Nasl.\",
        \"sPrevious\": \"Pred.\"
    },
    \"oAria\": {
        \"sSortAscending\": \": vključite za naraščujoči sort\",
        \"sSortDescending\": \": vključite za padajoči sort\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:sl.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Slovenian translation
 *  @name Slovenian
 *  @anchor Slovenian
 *  @author Marko Kroflic, Blaž Brenčič and Andrej Florjančič
 */
{
    \"sEmptyTable\": \"Nobenih podatkov ni na voljo\",
    \"sInfo\": \"Prikazujem _START_ do _END_ od _TOTAL_ zapisov\",
    \"sInfoEmpty\": \"Prikazujem 0 do 0 od 0 zapisov\",
    \"sInfoFiltered\": \"(filtrirano od _MAX_ vseh zapisov)\",
    \"sInfoPostFix\": \"\",
    \"sInfoThousands\": \",\",
    \"sLengthMenu\": \"Prikaži _MENU_ zapisov\",
    \"sLoadingRecords\": \"Nalagam...\",
    \"sProcessing\": \"Obdelujem...\",
    \"sSearch\": \"Išči:\",
    \"sZeroRecords\": \"Nobeden zapis ne ustreza\",
    \"oPaginate\": {
        \"sFirst\": \"Prvi\",
        \"sLast\": \"Zadnji\",
        \"sNext\": \"Nasl.\",
        \"sPrevious\": \"Pred.\"
    },
    \"oAria\": {
        \"sSortAscending\": \": vključite za naraščujoči sort\",
        \"sSortDescending\": \": vključite za padajoči sort\"
    }
}
", "SgDatatablesBundle:i18n:sl.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/sl.json.twig");
    }
}
