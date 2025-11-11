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

/* pages/management/document.html.twig */
class __TwigTemplate_dedcaf535933e8b9a30a26902e2ea07c extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap();
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 38, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name")]);
        yield "
    ";
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 40, $this->getSourceContext())->macro_nullField(...[]);
            yield "
    ";
        } else {
            // line 42
            yield "        ";
            $context["file_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 43
                yield "            ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getDownloadLink", [null, 45], "method", false, false, false, 43);
                yield "
            ";
                // line 44
                if (((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["users_id"] ?? null) : null) > 0)) {
                    // line 45
                    yield "                <br>
                ";
                    // line 46
                    yield Twig\Extension\CoreExtension::sprintf($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Added by %s")), ($context["uploader"] ?? null));
                    yield "
            ";
                }
                // line 48
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 49, $this->getSourceContext())->macro_htmlField(...["", ($context["file_info"] ?? null), __("Current file")]);
            yield "
        ";
            // line 50
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 50, $this->getSourceContext())->macro_hidden(...["current_filepath", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["filepath"] ?? null) : null)]);
            yield "
        ";
            // line 51
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 51, $this->getSourceContext())->macro_hidden(...["current_filename", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["filename"] ?? null) : null)]);
            yield "
    ";
        }
        // line 53
        yield "
    ";
        // line 54
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 54, $this->getSourceContext())->macro_dropdownField(...["DocumentCategory", "documentcategories_id", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["documentcategories_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("DocumentCategory")]);
        yield "
    ";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 56, $this->getSourceContext())->macro_nullField(...[]);
            yield "
    ";
        } else {
            // line 58
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 58, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["sha1sum"] ?? null) : null)), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Checksum"), __("SHA1"))]);
            yield "
    ";
        }
        // line 60
        yield "
    ";
        // line 61
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 61, $this->getSourceContext())->macro_textField(...["link", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["link"] ?? null) : null), __("Web link")]);
        yield "
    ";
        // line 62
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 62, $this->getSourceContext())->macro_textareaField(...["comment", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())]);
        yield "

    ";
        // line 64
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 64, $this->getSourceContext())->macro_textField(...["mime", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["mime"] ?? null) : null), __("MIME type")]);
        yield "
    ";
        // line 65
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 65, $this->getSourceContext())->macro_dropdownYesNo(...["is_blacklisted", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["is_blacklisted"] ?? null) : null), __("Blacklisted for import")]);
        yield "

    ";
        // line 67
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 67, $this->getSourceContext())->macro_dropdownArrayField(...["upload_file", 0, ($context["uploaded_files"] ?? null), __("Use a file uploaded on server"), ["display_emptychoice" => true]]);
        // line 69
        yield "
    ";
        // line 70
        yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 70, $this->getSourceContext())->macro_fileField(...["filename", null, null, ["no_label" => true]]);
        // line 72
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/management/document.html.twig";
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
        return array (  161 => 72,  159 => 70,  156 => 69,  154 => 67,  149 => 65,  145 => 64,  140 => 62,  136 => 61,  133 => 60,  127 => 58,  121 => 56,  119 => 55,  115 => 54,  112 => 53,  107 => 51,  103 => 50,  98 => 49,  94 => 48,  89 => 46,  86 => 45,  84 => 44,  79 => 43,  76 => 42,  70 => 40,  68 => 39,  63 => 38,  56 => 37,  51 => 33,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/management/document.html.twig", "/var/www/glpi/templates/pages/management/document.html.twig");
    }
}
