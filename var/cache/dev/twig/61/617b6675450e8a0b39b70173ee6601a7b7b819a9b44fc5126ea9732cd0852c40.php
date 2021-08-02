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

/* SgDatatablesBundle:i18n:hy.json.twig */
class __TwigTemplate_4803a82246d13a337d8a1717666f2202ad917ae900eff64e4c98e009c1233ec3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:hy.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:hy.json.twig"));

        // line 1
        echo "/**
 * Armenian - translation
 *  @name Armenian
 *  @anchor Armenian
 *  @author <a href=\"http://www.voznisoft.com/\">Levon Levonyan</a>
 */
{
  \"sEmptyTable\": \"Տվյալները բացակայում են\",
  \"sProcessing\": \"Կատարվում է...\",
  \"sInfoThousands\":  \",\",
  \"sLengthMenu\": \"Ցուցադրել _MENU_ արդյունքներ մեկ էջում\",
  \"sLoadingRecords\": \"Բեռնվում է ...\",
  \"sZeroRecords\": \"Հարցմանը համապատասխանող արդյունքներ չկան\",
  \"sInfo\": \"Ցուցադրված են _START_-ից _END_ արդյունքները ընդհանուր _TOTAL_-ից\",
  \"sInfoEmpty\": \"Արդյունքներ գտնված չեն\",
  \"sInfoFiltered\": \"(ֆիլտրվել է ընդհանուր _MAX_ արդյունքներից)\",
  \"sInfoPostFix\":  \"\",
  \"sSearch\": \"Փնտրել\",
  \"oPaginate\": {
      \"sFirst\": \"Առաջին էջ\",
      \"sPrevious\": \"Նախորդ էջ\",
      \"sNext\": \"Հաջորդ էջ\",
      \"sLast\": \"Վերջին էջ\"
  },
  \"oAria\": {
      \"sSortAscending\":  \": ակտիվացրեք աճման կարգով դասավորելու համար\",
      \"sSortDescending\": \": ակտիվացրեք նվազման կարգով դասավորելու համար\"
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:hy.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Armenian - translation
 *  @name Armenian
 *  @anchor Armenian
 *  @author <a href=\"http://www.voznisoft.com/\">Levon Levonyan</a>
 */
{
  \"sEmptyTable\": \"Տվյալները բացակայում են\",
  \"sProcessing\": \"Կատարվում է...\",
  \"sInfoThousands\":  \",\",
  \"sLengthMenu\": \"Ցուցադրել _MENU_ արդյունքներ մեկ էջում\",
  \"sLoadingRecords\": \"Բեռնվում է ...\",
  \"sZeroRecords\": \"Հարցմանը համապատասխանող արդյունքներ չկան\",
  \"sInfo\": \"Ցուցադրված են _START_-ից _END_ արդյունքները ընդհանուր _TOTAL_-ից\",
  \"sInfoEmpty\": \"Արդյունքներ գտնված չեն\",
  \"sInfoFiltered\": \"(ֆիլտրվել է ընդհանուր _MAX_ արդյունքներից)\",
  \"sInfoPostFix\":  \"\",
  \"sSearch\": \"Փնտրել\",
  \"oPaginate\": {
      \"sFirst\": \"Առաջին էջ\",
      \"sPrevious\": \"Նախորդ էջ\",
      \"sNext\": \"Հաջորդ էջ\",
      \"sLast\": \"Վերջին էջ\"
  },
  \"oAria\": {
      \"sSortAscending\":  \": ակտիվացրեք աճման կարգով դասավորելու համար\",
      \"sSortDescending\": \": ակտիվացրեք նվազման կարգով դասավորելու համար\"
  }
}
", "SgDatatablesBundle:i18n:hy.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/hy.json.twig");
    }
}
