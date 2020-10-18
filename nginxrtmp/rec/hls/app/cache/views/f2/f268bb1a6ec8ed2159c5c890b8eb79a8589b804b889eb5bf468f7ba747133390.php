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

/* components/scroll-to-top.twig */
class __TwigTemplate_a810693f2e864d9c430719ba5a9b2cc70d686de0dba580135d952d96ce4abc47 extends Template
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
        echo "<div class=\"fixed bottom-0 left-0 right-0 pointer-events-none\">
    <div class=\"container flex justify-end mx-auto px-4 py-10\">
        <button id=\"scroll-to-top\" ref=\"scrollToTop\"  title=\"";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), ["scroll_to_top"]), "html", null, true);
        echo "\"
            class=\"flex justify-center items-center w-12 h-12 right-0 rounded-full shadow-lg bg-blue-600 text-white cursor-pointer pointer-events-auto hover:bg-blue-700 hidden\"
            onclick=\"window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });\"
        >
            <i class=\"fas fa-arrow-up fa-lg\"></i>
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/scroll-to-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/scroll-to-top.twig", "C:\\inetpub\\wwwroot\\NetclassVideo\\app\\views\\components\\scroll-to-top.twig");
    }
}
