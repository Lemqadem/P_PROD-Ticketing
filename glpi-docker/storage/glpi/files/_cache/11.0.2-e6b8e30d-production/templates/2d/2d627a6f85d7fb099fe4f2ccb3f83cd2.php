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

/* components/itilobject/timeline/document/document_list_item.html.twig */
class __TwigTemplate_a26a57381a537e7660745e752ee3b008 extends Template
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
        // line 34
        yield "<div class=\"row align-items-center m-n2 test\">
    ";
        // line 35
        $context["name"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "name", [], "array", true, true, false, 35) &&  !(null === (($_v0 = ($context["entry_i"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)))) ? ((($_v1 = ($context["entry_i"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null)) : ((($_v2 = ($context["entry_i"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["filename"] ?? null) : null)));
        // line 36
        yield "    ";
        $context["filename"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "filename", [], "array", true, true, false, 36) &&  !(null === (($_v3 = ($context["entry_i"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["filename"] ?? null) : null)))) ? ((($_v4 = ($context["entry_i"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["filename"] ?? null) : null)) : ((($_v5 = ($context["entry_i"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["name"] ?? null) : null)));
        // line 37
        yield "    ";
        $context["fk"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 37);
        // line 38
        yield "
    ";
        // line 39
        if ((($tmp = (($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["filename"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "        ";
            $context["docpath"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(((((("front/document.send.php?docid=" . (($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["id"] ?? null) : null)) . "&") . ($context["fk"] ?? null)) . "=") . (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null)));
            // line 41
            yield "        <div class=\"col text-truncate\">
            <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["docpath"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">
                <img src=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DocumentExtension']->getDocumentIcon(($context["filename"] ?? null)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File extension"), "html", null, true);
            yield "\" />
                ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        // line 48
        yield "
    ";
        // line 49
        if ((($tmp = (($_v9 = ($context["entry_i"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["link"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "        <div class=\"col-auto\">
            <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["entry_i"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["link"] ?? null) : null), "html", null, true);
            yield "\" target=\"_blank\">
                <i class=\"ti ti-external-link\"></i>
                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = ($context["entry_i"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["name"] ?? null) : null), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        // line 57
        yield "
    ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "filepath", [], "array", true, true, false, 58) &&  !(null === (($_v12 = ($context["entry_i"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["filepath"] ?? null) : null)))) {
            // line 59
            yield "        <div class=\"col-auto text-muted ms-2\">
            ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DocumentExtension']->getDocumentSize((($_v13 = ($context["entry_i"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["filepath"] ?? null) : null)), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 63
        yield "
    <div class=\"col-auto\">
        <div class=\"list-group-item-actions\">
            ";
        // line 66
        if ((($tmp = (($_v14 = ($context["entry_i"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["_can_edit"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document", (($_v15 = ($context["entry_i"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["id"] ?? null) : null)), "html", null, true);
            yield "\"
                   class=\"btn btn-sm btn-ghost-secondary\" title=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Edit"), "html", null, true);
            yield "\"
                   data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                    <i class=\"ti ti-edit\"></i>
                </a>
            ";
        }
        // line 73
        yield "
            ";
        // line 74
        if ((($tmp = (($_v16 = ($context["entry_i"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["_can_delete"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                <form class=\"d-inline\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 75), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fk"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["id"] ?? null) : null), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"documents_id\" value=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["entry_i"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["id"] ?? null) : null), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                    <button type=\"submit\" class=\"btn btn-sm btn-ghost-secondary\" name=\"delete_document\"
                            title=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
            yield "\"
                            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                    </button>
                </form>
            ";
        }
        // line 86
        yield "            ";
        if ((($tmp = (($_v19 = ($context["entry_i"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["_can_edit"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "                ";
            $context["blacklisted_class"] = (((($tmp = (($_v20 = ($context["entry_i"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["is_blacklisted"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
            // line 88
            yield "                ";
            $context["blacklisted_title"] = (((($tmp = (($_v21 = ($context["entry_i"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["is_blacklisted"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (_x("button", "Remove from import exclusion list")) : (_x("button", "Add to import exclusion list")));
            // line 89
            yield "                ";
            $context["blacklisted_value"] = (((($tmp = (($_v22 = ($context["entry_i"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["is_blacklisted"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : (1));
            // line 90
            yield "                <form class=\"d-inline\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document"), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = ($context["entry_i"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["id"] ?? null) : null), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"is_blacklisted\" value=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blacklisted_value"] ?? null), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                    <button type=\"submit\" class=\"btn btn-sm btn-ghost-secondary\" name=\"update\"
                            title=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blacklisted_title"] ?? null), "html", null, true);
            yield "\"
                            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-ban ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blacklisted_class"] ?? null), "html", null, true);
            yield "\"></i>
                    </button>
                </form>
            ";
        }
        // line 101
        yield "        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/document/document_list_item.html.twig";
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
        return array (  216 => 101,  209 => 97,  204 => 95,  199 => 93,  195 => 92,  191 => 91,  186 => 90,  183 => 89,  180 => 88,  177 => 87,  174 => 86,  165 => 80,  160 => 78,  156 => 77,  150 => 76,  145 => 75,  143 => 74,  140 => 73,  132 => 68,  127 => 67,  125 => 66,  120 => 63,  114 => 60,  111 => 59,  109 => 58,  106 => 57,  99 => 53,  94 => 51,  91 => 50,  89 => 49,  86 => 48,  79 => 44,  73 => 43,  67 => 42,  64 => 41,  61 => 40,  59 => 39,  56 => 38,  53 => 37,  50 => 36,  48 => 35,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/document/document_list_item.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/document/document_list_item.html.twig");
    }
}
