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

/* SgDatatablesBundle:i18n:sq.json.twig */
class __TwigTemplate_c085bf11918b6c7001c42caa17219578ea7d31f9607c92bd9f7dcc877042d43c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sq.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sq.json.twig"));

        // line 1
        echo "/**
 * Albanian translation
 *  @name Albanian
 *  @anchor Albanian
 *  @author Besnik Belegu
 */
{
   \"sEmptyTable\":     \"Nuk ka asnjë të dhënë në tabele\",
   \"sInfo\":           \"Duke treguar _START_ deri _END_ prej _TOTAL_ reshtave\",
   \"sInfoEmpty\":      \"Duke treguar 0 deri 0 prej 0 reshtave\",
   \"sInfoFiltered\":   \"(të filtruara nga gjithësej _MAX_  reshtave)\",
   \"sInfoPostFix\":    \"\",
   \"sInfoThousands\":  \",\",
   \"sLengthMenu\":     \"Shiko _MENU_ reshta\",
   \"sLoadingRecords\": \"Duke punuar...\",
   \"sProcessing\":     \"Duke procesuar...\",
   \"sSearch\":         \"Kërkoni:\",
   \"sZeroRecords\":    \"Asnjë e dhënë nuk u gjet\",
   \"oPaginate\": {
       \"sFirst\":    \"E para\",
       \"sLast\":     \"E Fundit\",
       \"sNext\":     \"Tjetra\",
       \"sPrevious\": \"E Kaluara\"
   },
   \"oAria\": {
       \"sSortAscending\":  \": aktivizo për të sortuar kolumnin me vlera në ngritje\",
       \"sSortDescending\": \": aktivizo për të sortuar kolumnin me vlera në zbritje\"
   }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:sq.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Albanian translation
 *  @name Albanian
 *  @anchor Albanian
 *  @author Besnik Belegu
 */
{
   \"sEmptyTable\":     \"Nuk ka asnjë të dhënë në tabele\",
   \"sInfo\":           \"Duke treguar _START_ deri _END_ prej _TOTAL_ reshtave\",
   \"sInfoEmpty\":      \"Duke treguar 0 deri 0 prej 0 reshtave\",
   \"sInfoFiltered\":   \"(të filtruara nga gjithësej _MAX_  reshtave)\",
   \"sInfoPostFix\":    \"\",
   \"sInfoThousands\":  \",\",
   \"sLengthMenu\":     \"Shiko _MENU_ reshta\",
   \"sLoadingRecords\": \"Duke punuar...\",
   \"sProcessing\":     \"Duke procesuar...\",
   \"sSearch\":         \"Kërkoni:\",
   \"sZeroRecords\":    \"Asnjë e dhënë nuk u gjet\",
   \"oPaginate\": {
       \"sFirst\":    \"E para\",
       \"sLast\":     \"E Fundit\",
       \"sNext\":     \"Tjetra\",
       \"sPrevious\": \"E Kaluara\"
   },
   \"oAria\": {
       \"sSortAscending\":  \": aktivizo për të sortuar kolumnin me vlera në ngritje\",
       \"sSortDescending\": \": aktivizo për të sortuar kolumnin me vlera në zbritje\"
   }
}
", "SgDatatablesBundle:i18n:sq.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/sq.json.twig");
    }
}
