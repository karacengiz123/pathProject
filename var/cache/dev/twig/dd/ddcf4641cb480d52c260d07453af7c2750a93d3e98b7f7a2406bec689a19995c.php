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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_97d315a60f47ad0b6612c5a77802988ac4eb37ba1ea10fe82848f41c2a429780 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<section id=\"wrapper\" class=\"login-register login-sidebar\" style=\"background-image:url('";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/images/background/login-register.jpg"), "html", null, true);
        echo "');\">
    <div class=\"login-box card\">
        <div class=\"card-body\">
            <form class=\"form-horizontal form-material text-center\" id=\"loginform\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <a href=\"javascript:void(0)\" class=\"db\"><img id=\"loginLogo\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/backend/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Home\" /></a>
                ";
        // line 8
        if (($context["csrf_token"] ?? null)) {
            // line 9
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\"/>
                ";
        }
        // line 11
        echo "                <br>
                ";
        // line 12
        if (($context["error"] ?? null)) {
            // line 13
            echo "                    <div id=\"loginError\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 15
        echo "                <div class=\"form-group m-t-40\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.username", [], "FOSUserBundle"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.password", [], "FOSUserBundle"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-md-12\">
                        <div class=\"d-flex no-block align-items-center\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"ml-auto\">
                                <a href=\"javascript:void(0)\" id=\"to-recover\" class=\"text-muted\"><i class=\"fas fa-lock m-r-5\"></i>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group text-center m-t-20\">
                    <div class=\"col-xs-12\">
                        <button class=\"btn btn-info btn-lg btn-block text-uppercase btn-rounded\" type=\"submit\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
            <form class=\"form-horizontal\" id=\"recoverform\" action=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page_action");
        echo "\">
                <div class=\"form-group \">
                    <div class=\"col-xs-12\">
                        <h3>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.username", [], "FOSUserBundle"), "html", null, true);
        echo "</h3>
                        <h3 id=\"cancelResetPasswordForm\">x</h3>
                    </div>
                </div>
                <div class=\"form-group \">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control\" name=\"mail\" type=\"text\" required=\"\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"form-group text-center m-t-20\">
                    <div class=\"col-xs-12\">
                        <button class=\"btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light\" type=\"submit\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  133 => 47,  127 => 44,  120 => 40,  110 => 33,  104 => 30,  93 => 22,  83 => 17,  79 => 15,  73 => 13,  71 => 12,  68 => 11,  62 => 9,  60 => 8,  56 => 7,  52 => 6,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

<section id=\"wrapper\" class=\"login-register login-sidebar\" style=\"background-image:url('{{ asset('assets/themes/eliteadmin/assets/images/background/login-register.jpg') }}');\">
    <div class=\"login-box card\">
        <div class=\"card-body\">
            <form class=\"form-horizontal form-material text-center\" id=\"loginform\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                <a href=\"javascript:void(0)\" class=\"db\"><img id=\"loginLogo\" src=\"{{ asset('assets/backend/images/logo.jpg') }}\" alt=\"Home\" /></a>
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                {% endif %}
                <br>
                {% if error %}
                    <div id=\"loginError\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <div class=\"form-group m-t-40\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" placeholder=\"{{ 'form.username'|trans }}\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"{{ 'form.password'|trans }}\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-md-12\">
                        <div class=\"d-flex no-block align-items-center\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">{{ \"security.login.remember_me\"|trans }}</label>
                            </div>
                            <div class=\"ml-auto\">
                                <a href=\"javascript:void(0)\" id=\"to-recover\" class=\"text-muted\"><i class=\"fas fa-lock m-r-5\"></i>{{ \"resetting.request.submit\"|trans }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group text-center m-t-20\">
                    <div class=\"col-xs-12\">
                        <button class=\"btn btn-info btn-lg btn-block text-uppercase btn-rounded\" type=\"submit\">{{ 'layout.login'|trans }}</button>
                    </div>
                </div>
            </form>
            <form class=\"form-horizontal\" id=\"recoverform\" action=\"{{ path('home_page_action') }}\">
                <div class=\"form-group \">
                    <div class=\"col-xs-12\">
                        <h3>{{ \"resetting.request.username\"|trans }}</h3>
                        <h3 id=\"cancelResetPasswordForm\">x</h3>
                    </div>
                </div>
                <div class=\"form-group \">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control\" name=\"mail\" type=\"text\" required=\"\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"form-group text-center m-t-20\">
                    <div class=\"col-xs-12\">
                        <button class=\"btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light\" type=\"submit\">{{ \"resetting.request.submit\"|trans }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
", "@FOSUser/Security/login_content.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/bundles/FOSUserBundle/Security/login_content.html.twig");
    }
}
