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

/* layouts/app.twig */
class __TwigTemplate_3f1e9880908ec5be3a4ecdb9a727aee7835f0f0b9c2bbd5070640daaade7902f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('config')->getCallable(), ["dark_mode"])) ? (call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon.dark.png"])) : (call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon.light.png"]))), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["app.css"]), "html", null, true);
        echo "\">

";
        // line 9
        if (call_user_func_array($this->env->getFunction('config')->getCallable(), ["google_analytics_id", false])) {
            // line 10
            echo "    ";
            $this->loadTemplate("components/google-analytics.twig", "layouts/app.twig", 10)->display($context);
        }
        // line 12
        echo "
<title>14班网课自动点播系统 / ";
        // line 13
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>

<div id=\"app\" class=\"flex flex-col min-h-screen font-sans ";
        // line 15
        echo ((call_user_func_array($this->env->getFunction('config')->getCallable(), ["dark_mode"])) ? ("dark-mode") : ("light-mode"));
        echo "\">
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "</div>

<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["app.js"]), "html", null, true);
        echo "\" defer></script>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  78 => 19,  74 => 17,  72 => 16,  68 => 15,  63 => 13,  60 => 12,  56 => 10,  54 => 9,  49 => 7,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/app.twig", "C:\\inetpub\\wwwroot\\NetclassVideo\\app\\views\\layouts\\app.twig");
    }
}
