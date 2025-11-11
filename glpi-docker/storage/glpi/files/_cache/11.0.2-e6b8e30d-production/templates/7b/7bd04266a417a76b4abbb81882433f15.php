<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pages/2fa/2fa_new_secret.html.twig */
class __TwigTemplate_05987440ed48897a3a5bab50a46e7c28 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $macros["tfa"] = $this->macros["tfa"] = $this->load("pages/2fa/macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        yield $macros["tfa"]->getTemplateForMacro("macro_tfa_setup", $context, 35, $this->getSourceContext())->macro_tfa_setup(...[($context["secret"] ?? null), ($context["qrcode"] ?? null)]);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/2fa/2fa_new_secret.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/2fa/2fa_new_secret.html.twig", "/var/www/glpi/templates/pages/2fa/2fa_new_secret.html.twig");
    }
}
