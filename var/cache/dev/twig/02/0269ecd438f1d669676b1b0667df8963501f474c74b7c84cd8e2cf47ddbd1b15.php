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

/* backend_layout/sidebar.html.twig */
class __TwigTemplate_74f68b3e26f0a81f2a2032c30c5013e9793f163220734af89050291efaed6575 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/sidebar.html.twig"));

        // line 1
        echo "<aside class=\"left-sidebar\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\">
                ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "                    <li>
                        <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                            <i class=\"icons-Security-Settings\"></i>
                            <span class=\"hide-menu\">
                                ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin"), "html", null, true);
            echo "
                                <span class=\"badge badge-pill badge-cyan ml-auto\">5</span>
                            </span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse\">

";
            // line 21
            echo "
                            </a>
                                </a>
                                <ul aria-expanded=\"false\" class=\"collapse\">
                                    ";
            // line 25
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 26
                echo "                                        <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home_page");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("testSuperAdmin"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 28
            echo "                                    ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") == false) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 29
                echo "                                        <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home_page");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("testAdmin"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 31
            echo "                                </ul>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 36
        echo "            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend_layout/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  95 => 31,  87 => 29,  84 => 28,  76 => 26,  74 => 25,  68 => 21,  59 => 12,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"left-sidebar\">
    <!-- Sidebar scroll-->
    <div class=\"scroll-sidebar\">
        <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\">
                {% if is_granted('ROLE_ADMIN') %}
                    <li>
                        <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                            <i class=\"icons-Security-Settings\"></i>
                            <span class=\"hide-menu\">
                                {{ \"admin\"|trans }}
                                <span class=\"badge badge-pill badge-cyan ml-auto\">5</span>
                            </span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse\">

{#                            <li><a href=\"{{ path('level_index') }}\">{{ \"level\"|trans }} - {{ \"list\"|trans }}</a></li>#}
{#                            <li><a href=\"{{ path('category_index') }}\">{{ \"category\"|trans }} - {{ \"list\"|trans }}</a></li>#}
{#                            <li><a href=\"{{ path('word_index') }}\">{{ \"word\"|trans }} - {{ \"list\"|trans }}</a></li>#}

                            </a>
                                </a>
                                <ul aria-expanded=\"false\" class=\"collapse\">
                                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                                        <li><a href=\"{{ path('admin_home_page') }}\">{{ \"testSuperAdmin\"|trans }}</a></li>
                                    {% endif %}
                                    {% if is_granted('ROLE_SUPER_ADMIN') == false and is_granted('ROLE_ADMIN') %}
                                        <li><a href=\"{{ path('admin_home_page') }}\">{{ \"testAdmin\"|trans }}</a></li>
                                    {% endif %}
                                </ul>
                            </li>
                        </ul>
                    </li>
                {% endif %}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
", "backend_layout/sidebar.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/backend_layout/sidebar.html.twig");
    }
}
