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

/* components/footer.twig */
class __TwigTemplate_570990411692de739c6dead9647cd3a04533b5e346f70d33cebcc4a2d995d20b extends Template
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
        echo "<footer class=\"container border-t-2 border-gray-800 text-center mx-auto px-4 py-8\">
    <div class=\"flex flex-col justify-center items-center\">
        <p class=\"mb-4\">
            哈尔滨市第三中学校 群力校区 高一十四班的一个渣渣
        </p>

    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "components/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/footer.twig", "C:\\inetpub\\wwwroot\\NetclassVideo\\app\\views\\components\\footer.twig");
    }
}
