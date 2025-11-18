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

/* pages/admin/rules/form.html.twig */
class __TwigTemplate_204157c88117d9b4fd766f99910583b8 extends Template
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

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $context["no_header"] = true;
        // line 36
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 36)->unwrap();
        // line 37
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 37)->unwrap();
        // line 34
        $this->parent = $this->load("generic_show_form.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 41, $this->getSourceContext())->macro_hidden(...["ranking", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["ranking"] ?? null) : null)]);
            yield "
    ";
        }
        // line 43
        yield "    ";
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 43, $this->getSourceContext())->macro_hidden(...["sub_type", get_class(($context["item"] ?? null))]);
        yield "
    ";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 44, $this->getSourceContext())->macro_textField(...["name", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null), __("Name")]);
        yield "
    ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 45, $this->getSourceContext())->macro_textField(...["description", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["description"] ?? null) : null), __("Description")]);
        yield "
    ";
        // line 46
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 46, $this->getSourceContext())->macro_dropdownArrayField(...["match", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["match"] ?? null) : null), ($context["match_operators"] ?? null), __("Logical operator")]);
        yield "

    ";
        // line 48
        if ((($tmp =  !(((array_key_exists("short", $context) &&  !(null === $context["short"]))) ? ($context["short"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 49, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["is_active"] ?? null) : null), __("Active")]);
            yield "
        ";
            // line 50
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["conditions"] ?? null)) > 0)) {
                // line 51
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 51, $this->getSourceContext())->macro_dropdownArrayField(...["condition", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["condition"] ?? null) : null), ($context["conditions"] ?? null), __("Use rule for")]);
                yield "
        ";
            }
            // line 53
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 53, $this->getSourceContext())->macro_textareaField(...["comment", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["comment"] ?? null) : null), __("Comments")]);
            yield "

        ";
            // line 55
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 55) && (($_v7 = ($context["params"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["canedit"] ?? null) : null))) {
                // line 56
                yield "            ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::createIframeModalWindow", ["ruletestmodal", ((((                // line 58
($context["test_url"] ?? null) . "?sub_type=") . (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["sub_type"] ?? null) : null)) . "&rules_id=") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "any", false, false, false, 58)), ["title" => _x("button", "Test")]]);
                // line 63
                yield "        ";
            }
            // line 64
            yield "    ";
        } else {
            // line 65
            yield "        ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 65, $this->getSourceContext())->macro_hidden(...["entities_id", 0]);
            yield "
        ";
            // line 66
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 66, $this->getSourceContext())->macro_hidden(...["affectentity", ($context["entities_id"] ?? null)]);
            yield "
        ";
            // line 67
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 67, $this->getSourceContext())->macro_hidden(...["_method", "AddRule"]);
            yield "
    ";
        }
        // line 69
        yield "    ";
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/rules/form.html.twig";
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
        return array (  152 => 70,  140 => 69,  135 => 67,  131 => 66,  126 => 65,  123 => 64,  120 => 63,  118 => 58,  116 => 56,  114 => 55,  108 => 53,  102 => 51,  100 => 50,  95 => 49,  93 => 48,  88 => 46,  84 => 45,  80 => 44,  75 => 43,  69 => 41,  66 => 40,  59 => 39,  54 => 34,  52 => 37,  50 => 36,  48 => 33,  41 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/rules/form.html.twig", "/var/www/glpi/templates/pages/admin/rules/form.html.twig");
    }
}
