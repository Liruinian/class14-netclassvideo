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

/* components/header.twig */
class __TwigTemplate_0a85661a97372547431612c4510a80b8f342a91fde35d26cb888f1d21d4594ab extends Template
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
        // line 1
        echo "<header id=\"header\" class=\"bg-blue-600 shadow sticky top-0\">
    <div class=\"container flex flex-col flex-coljustify-between items-center mx-auto p-4 md:flex-row\">
        <div class=\"flex-grow font-mono text-white text-sm tracking-tight mb-2 md:my-1\">
            <a href=\".\" class=\"inline-block hover:underline\">
                ";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["home"]), "html", null, true);
        echo "
            </a>

            ";
        // line 8
        if ( !(null === ($context["path"] ?? null))) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('breadcrumbs')->getCallable(), [$context["path"]]));
            foreach ($context['_seq'] as $context["name"] => $context["path"]) {
                // line 10
                echo "                    / <a href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" class=\"inline-block hover:underline\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        }
        // line 13
        echo "        </div>

        <div class=\"flex justify-end items-center\">
            ";
        // line 16
        if (((($context["path"] ?? null) &&  !twig_test_empty(($context["files"] ?? null))) && call_user_func_array($this->env->getFunction('config')->getCallable(), ["zip_downloads"]))) {
            // line 17
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('zip_url')->getCallable(), [($context["path"] ?? null)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["download"]), "html", null, true);
            echo "\" class=\"inline-block text-white mx-2 p-1 hover:text-gray-400\">
                    <i class=\"fas fa-download fa-lg\"></i>
                </a>
            ";
        }
        // line 21
        echo "
            ";
        // line 22
        $this->loadTemplate("components/search.twig", "components/header.twig", 22)->display($context);
        // line 23
        echo "        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "components/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  90 => 22,  87 => 21,  77 => 17,  75 => 16,  70 => 13,  67 => 12,  56 => 10,  51 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/header.twig", "C:\\inetpub\\wwwroot\\NetclassVideo\\app\\views\\components\\header.twig");
    }
}
