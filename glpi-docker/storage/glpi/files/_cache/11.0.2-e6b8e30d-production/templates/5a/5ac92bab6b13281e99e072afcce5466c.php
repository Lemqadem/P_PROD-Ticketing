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

/* pages/admin/customobjects/main.html.twig */
class __TwigTemplate_ceefb9a135e6eabef92d16aac1b872b8 extends Template
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
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 38
        $context["customobj_ns"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getCustomObjectNamespace", [], "method", false, false, false, 38);
        // line 39
        $context["customobj_suffix"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getCustomObjectClassSuffix", [], "method", false, false, false, 39);
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 42) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isActive", [], "method", false, false, false, 42)) &&  !($context["has_rights_enabled"] ?? null))) {
            // line 43
            yield "        ";
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_warning", $context, 43, $this->getSourceContext())->macro_alert_warning(...[__("There is currently no profile with access to items with current definition.")]);
            yield "
    ";
        }
        // line 45
        yield "
    ";
        // line 46
        $context["helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The system name field corresponds to what will be used when development is involved. Examples: API calls, webhooks, etc."), "html", null, true);
            yield "
        ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("It can be personalized, but some words are reserved such as classes from GLPI like Computer, Monitor, etc."), "html", null, true);
            yield "
        ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Items linked to the system name \"%s\" will have the class \"%s\"."), "Example", ((($context["customobj_ns"] ?? null) . "\\Example") . ($context["customobj_suffix"] ?? null))), "html", null, true);
            yield "
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 51, $this->getSourceContext())->macro_textField(...["label", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["label"] ?? null) : null), __("Label")]);
        yield "
    ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 52, $this->getSourceContext())->macro_textField(...["system_name", (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["system_name"] ?? null) : null), __("System name"), ["disabled" =>  !CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 57), "helper" =>         // line 58
($context["helper"] ?? null)]]);
        // line 60
        yield "
    ";
        // line 61
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "        ";
            $context["helper_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 63
                yield "            <em class=\"text-muted\">
                ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("The class of items related to current definition is \"%s\"."), (($context["customobj_ns"] ?? null) . Twig\Extension\CoreExtension::sprintf("\\%s", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["system_name"] ?? null) : null)))), "html", null, true);
                yield "
            </em>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            yield "    ";
        }
        // line 68
        yield "
    ";
        // line 69
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "        <div class=\"modal fade\" id=\"deletionWarningModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <a type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Close"), "html", null, true);
            yield "\"></a>
                    <div class=\"modal-status bg-danger\"></div>
                    <div class=\"modal-body text-center py-4\">
                        ";
            // line 77
            yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon mb-2 text-danger icon-lg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 9v4\"></path><path d=\"M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z\"></path><path d=\"M12 16h.01\"></path></svg>

                        <h3>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Are you sure?"), "html", null, true);
            yield "</h3>
                        <div class=\"text-muted\">
                            ";
            // line 81
            if ((($context["item_count"] ?? null) > 0)) {
                // line 82
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("This item definition is used by %d items."), ($context["item_count"] ?? null)), "html", null, true);
                yield "
                                <br>
                                ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All items that are using this definition will be deleted."), "html", null, true);
                yield "
                            ";
            } else {
                // line 86
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This item definition is not used by any items."), "html", null, true);
                yield "
                            ";
            }
            // line 88
            yield "                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"w-100\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <a class=\"btn w-100\" data-bs-dismiss=\"modal\">
                                        ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Cancel"), "html", null, true);
            yield "
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <button type=\"button\" class=\"btn btn-danger w-100\" name=\"save\">
                                        ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Yes, delete it!"), "html", null, true);
            yield "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script defer>
            \$('#mainformtable button[name=\"purge\"]').on('click', { is_from_modal: false }, (event, data) => {
                data = data || event.data;

                if (data.is_from_modal !== true) {
                    event.preventDefault();
                    \$('#deletionWarningModal').modal('show');
                }
            });

            \$('#deletionWarningModal button[name=\"save\"]').on('click', () => {
                \$('#deletionWarningModal').modal('hide');
                \$('#mainformtable button[name=\"purge\"]').trigger(
                    'click',
                    {
                        'is_from_modal': true,
                    }
                );
            });
        </script>
    ";
        }
        // line 130
        yield "    <script type=\"module\">
        \$('#mainformtable input[name=\"system_name\"]').on('change', () => {
            if (\$('input[name=\"system_name\"]').val() === '') {
                \$('input[name=\"system_name\"]').data('manually_changed', false);
            } else {
                \$('input[name=\"system_name\"]').data('manually_changed', true);
            }
        });
        \$('#mainformtable input[name=\"system_name\"]').on('input', () => {
            const reserved_system_names_pattern = ";
        // line 139
        yield ($context["reserved_system_names_pattern"] ?? null);
        yield ";
            const existing_names = ";
        // line 140
        yield json_encode(($context["existing_system_names"] ?? null));
        yield ";
            const system_name = \$('#mainformtable input[name=\"system_name\"]').val();
            const system_name_pattern = /^";
        // line 142
        yield Twig\Extension\CoreExtension::constant("Glpi\\CustomObject\\AbstractDefinition::SYSTEM_NAME_PATTERN");
        yield "\$/;

            if (reserved_system_names_pattern.test(system_name) === true) {
                \$('#mainformtable input[name=\"system_name\"]').get(0).setCustomValidity(__('The system name is a reserved name. Please enter a different label or manually change the system name.'));
            } else if (existing_names.map((n) => n.toLowerCase()).includes(system_name.toLowerCase())) {
                \$('#mainformtable input[name=\"system_name\"]').get(0).setCustomValidity(__('The system name is already in use. Please enter a different label or manually change the system name.'));
            } else if (system_name_pattern.test(system_name) === false) {
                ";
        // line 150
        yield "                \$('#mainformtable input[name=\"system_name\"]').get(0).setCustomValidity(__('The system name is invalid. It must start with a letter and contain only alphanumeric chars.'));
            } else {
                \$('#mainformtable input[name=\"system_name\"]').get(0).setCustomValidity('');
            }
        });
        function autoUpdateNameField() {
            if (";
        // line 156
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield " || \$('#mainformtable input[name=\"system_name\"]').data('manually_changed')) {
                return;
            }

            \$('#mainformtable input[name=\"system_name\"]').val(
                \$('#mainformtable input[name=\"label\"]').val().normalize('NFD').replace(/[^a-z0-9_]/gi, '')
            );
            \$('#mainformtable input[name=\"system_name\"]').trigger('input');
        };
        \$('#mainformtable input[name=\"label\"]').on('input', () => {
            autoUpdateNameField();
        });
    </script>
    ";
        // line 169
        yield from $this->yieldParentBlock("form_fields", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 173
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownWebIcons", $context, 173, $this->getSourceContext())->macro_dropdownWebIcons(...["icon", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 175
($context["item"] ?? null), "fields", [], "any", false, false, false, 175)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["icon"] ?? null) : null), __("Icon")]);
        // line 177
        yield "

    ";
        // line 179
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["picture"], "method", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 180
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["picture"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 181
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_imageField", $context, 181, $this->getSourceContext())->macro_imageField(...["picture", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["picture"] ?? null) : null)), (($_v6 = ($context["field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["label"] ?? null) : null), ["clearable" => ( !CoreExtension::getAttribute($this->env, $this->source,                 // line 182
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 182) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 182))]]);
                // line 183
                yield "
        ";
            } else {
                // line 185
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 185, $this->getSourceContext())->macro_fileField(...["picture", null, _n("Picture", "Pictures", 1), ["onlyimages" => true]]);
                // line 187
                yield "
        ";
            }
            // line 189
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/customobjects/main.html.twig";
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
        return array (  320 => 189,  316 => 187,  313 => 185,  309 => 183,  307 => 182,  305 => 181,  302 => 180,  300 => 179,  296 => 177,  294 => 175,  292 => 173,  285 => 172,  278 => 169,  262 => 156,  254 => 150,  244 => 142,  239 => 140,  235 => 139,  224 => 130,  191 => 100,  183 => 95,  174 => 88,  168 => 86,  163 => 84,  157 => 82,  155 => 81,  150 => 79,  146 => 77,  140 => 73,  135 => 70,  133 => 69,  130 => 68,  127 => 67,  120 => 64,  117 => 63,  114 => 62,  112 => 61,  109 => 60,  107 => 58,  106 => 57,  105 => 54,  104 => 52,  99 => 51,  93 => 49,  89 => 48,  84 => 47,  82 => 46,  79 => 45,  73 => 43,  70 => 42,  63 => 41,  58 => 33,  56 => 39,  54 => 38,  52 => 36,  50 => 35,  48 => 34,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/customobjects/main.html.twig", "/var/www/glpi/templates/pages/admin/customobjects/main.html.twig");
    }
}
