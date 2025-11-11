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

/* pages/2fa/macros.html.twig */
class __TwigTemplate_f545e692e1a18414336fab84876b3149 extends Template
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
        // line 90
        yield "
";
        // line 151
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_tfa_code_input($digits = 6, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "digits" => $digits,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   <div class=\"d-flex justify-content-center\">
      ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["digits"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                yield "         <input type=\"text\" class=\"form-control text-center ";
                yield ((($context["i"] != 1)) ? ("ms-2") : (""));
                yield " fw-bold\" name=\"totp_code[]\"
             maxlength=\"1\" pattern=\"[0-9]\" inputmode=\"numeric\" required style=\"width: 2.5em; font-size: 1.5em\"
             aria-label=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("2FA code digit %s of %s"), $context["i"], ($context["digits"] ?? null)), "html", null, true);
                yield "\">
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "   </div>
   <script>
       \$(document).ready(function() {
           const input_fields = \$('input[name=\"totp_code[]\"]');
           input_fields.first().focus();
           input_fields.parent().on('keyup', 'input[name=\"totp_code[]\"]', function(e) {
               if (e.which === 8) {
                   return;
               }
               if (\$(this).val().length === 1) {
                   const next = \$(this).next();
                   if (next.length === 0) {
                       \$(this).closest('form').find('button[name=\"continue\"]').click();
                       input_fields.prop('disabled', true);
                   }
               }
           });
           input_fields.parent().on('keydown', 'input[name=\"totp_code[]\"]', function(e) {
               if (e.which === 8) {
                   \$(this).prev().focus();
               }
               if (\$(this).val().length === 1) {
                   // Move to the next input if there is one, otherwise submit the form
                   const next = \$(this).next();
                   if (next.length) {
                       next.focus();
                   } else {
                       \$(this).closest('form').find('button[name=\"continue\"]').click();
                       input_fields.prop('disabled', true);
                   }
               }
           });
           // Pasting in any of the fields will fill all of them
           input_fields.on('paste', function(e) {
              const pasted_data = e.originalEvent.clipboardData.getData('text');
              // Clear all fields
              input_fields.val('');
              let last_filled = 0;
              input_fields.each(function(index) {
                 if (pasted_data[index]) {
                    \$(this).val(pasted_data[index]);
                    last_filled = index;
                 }
              });
              // focus on the field after the last one filled (or the last if all filled)
              input_fields.eq(Math.min(input_fields.length, last_filled + 1)).focus();
          });
       });
   </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function macro_tfa_setup($secret = null, $qrcode = null, $enforced = false, $in_grace_period = false, $grace_period_days_left = 0, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "secret" => $secret,
            "qrcode" => $qrcode,
            "enforced" => $enforced,
            "in_grace_period" => $in_grace_period,
            "grace_period_days_left" => $grace_period_days_left,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 92
            yield "   <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("MFA/Verify"), "html", null, true);
            yield "\" autocomplete=\"off\" class=\"";
            yield (((($tmp = ($context["enforced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("m-n5") : (""));
            yield "\">
      <div class=\"card mx-auto\" style=\"width: fit-content\">
         <div class=\"card-header\">
            ";
            // line 95
            if ((($tmp = ($context["enforced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "               <h1 class=\"card-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("2FA is required for your account"), "html", null, true);
                yield "</h1>
            ";
            } else {
                // line 98
                yield "               <h1 class=\"card-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("2FA Setup"), "html", null, true);
                yield "</h1>
            ";
            }
            // line 100
            yield "         </div>
         <div class=\"card-body\">
            <div class=\"col\">
               <div>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("1. Install an authenticator app on your mobile device such as Google Authenticator or Authy."), "html", null, true);
            yield "</div>
               <div class=\"mt-2\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("2. Scan the following QR code or enter the code shown into your authenticator app."), "html", null, true);
            yield "</div>
               <div class=\"col-md-6 mx-auto\">
                  <div class=\"text-center\">
                     <img src=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["qrcode"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("QR Code"), "html", null, true);
            yield "\" />
                  </div>
               </div>
               <div class=\"mx-auto\">
                  <div>
                     <div class=\"btn-group d-flex\">
                        <input class=\"form-control\" alt=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("2FA secret"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["secret"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("2FA secret"), "html", null, true);
            yield "\" />
                        <button type=\"button\" class=\"btn btn-icon flex-grow-0 flex-shrink-0\" name=\"copy_secret\" data-clipboard-text=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["secret"] ?? null), "html", null, true);
            yield "\">
                           <i class=\"ti ti-clipboard-copy\"></i>
                        </button>
                        <script>
                           \$(document).ready(function() {
                               \$('button[name=\"copy_secret\"]').on('click', function() {
                                   navigator.clipboard.writeText(\$(this).data('clipboard-text'));
                               });
                           });
                        </script>
                     </div>
                     <input type=\"hidden\" name=\"secret\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["secret"] ?? null), "html", null, true);
            yield "\" />
                     <input type=\"hidden\" name=\"_idor_token\" value=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken("", ["secret" => ($context["secret"] ?? null)]), "html", null, true);
            yield "\" />
                     <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                  </div>
               </div>
               <div class=\"mt-3\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("3. After entering the code into your authenticator, enter the code shown in the app to finish the setup"), "html", null, true);
            yield "</div>
               <div class=\"col-md-6 mx-auto mt-2\">
                  ";
            // line 133
            yield "                  ";
            yield $this->getTemplateForMacro("macro_tfa_code_input", $context, 133, $this->getSourceContext())->macro_tfa_code_input(...[]);
            yield "
               </div>
            </div>
         </div>
         <div class=\"card-footer d-flex flex-wrap\">
            ";
            // line 138
            if ((($context["enforced"] ?? null) && ($context["in_grace_period"] ?? null))) {
                // line 139
                yield "               <div>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("You can skip this step for now, but you will be required to set it up later (%s days)"), ($context["grace_period_days_left"] ?? null)), "html", null, true);
                yield "</div>
            ";
            }
            // line 141
            yield "            <div class=\"ms-auto\">
               ";
            // line 142
            if ((($context["enforced"] ?? null) && ($context["in_grace_period"] ?? null))) {
                // line 143
                yield "                  <button type=\"submit\" formnovalidate class=\"btn btn-outline-secondary\" name=\"skip_mfa\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Skip"), "html", null, true);
                yield "</button>
               ";
            }
            // line 145
            yield "               <button type=\"submit\" name=\"continue\" class=\"btn btn-primary ms-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Verify"), "html", null, true);
            yield "</button>
            </div>
         </div>
      </div>
   </form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 152
    public function macro_tfa_backup_codes_container($backup_codes = [], $regen_button_name = "regenerate_backup_codes", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "backup_codes" => $backup_codes,
            "regen_button_name" => $regen_button_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 153
            yield "    <div id=\"backup_codes\" class=\"d-none py-2\" style=\"width: fit-content;\">
        <h3 class=\"mb-2 alert alert-warning\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Backup codes (This is the only time these will be shown)"), "html", null, true);
            yield "</h3>
        <h4 class=\"mb-2\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("These are one-time use codes in case your authenticator is inaccessible"), "html", null, true);
            yield "</h4>
    </div>
    <script type=\"module\">
        \$('#backup_codes').on('click', 'button[name=\"copy_backup_codes\"]', function() {
            const codes = [];
            \$('#backup_codes').find('td.backup-code').each(function () {
                codes.push(\$(this).text());
            });
            const newline = navigator.platform.match(/Windows/) ? \"\\r\\n\" : \"\\n\";
            navigator.clipboard.writeText(codes.join(newline));
            const btn = \$(this);

            btn.find('i').removeClass('ti ti-copy').addClass('ti ti-check');
            btn.removeClass('btn-outline-secondary').addClass('btn-success');
            btn.text('";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copied"), "html", null, true);
            yield "');
        });

        function showCodes(codes) {
            const backup_code_container = \$('#backup_codes');
            if (codes.length === 0) {
                // An error occurred
                backup_code_container.html('";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An error occurred"), "js"), "html", null, true);
            yield "');
            } else {
                //Remove any previous code table
                backup_code_container.find('table').remove();
                backup_code_container.append(`<table class=\"table table-bordered mx-auto text-center\" style=\"width: fit-content\"><tbody></tbody></table>`);
                const table_body = backup_code_container.find('tbody');
                \$.each(codes, function (index, value) {
                    let code_item = \$('<tr><td class=\"backup-code\"></td></tr>');
                    // Stylize the codes to make them easier to read and reduce ambiguity
                    for (let i = 0; i < value.length; i++) {
                        if (isNaN(value[i])) {
                            if (value[i] === value[i].toUpperCase()) {
                                code_item.find('td').append(\$('<u></u>').text(value[i]));
                            } else {
                                code_item.find('td').append(value[i]);
                            }
                        } else {
                            code_item.find('td').append(\$('<span></span>').addClass('text-info').text(value[i]));
                        }
                    }
                    table_body.append(code_item);
                });
                table_body.append(`<tr><td>
                            <button class=\"btn btn-outline-secondary\" type=\"button\" name=\"copy_backup_codes\">
                                <i class=\"ti ti-copy\"></i>
                                ";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy backup codes"), "html", null, true);
            yield "
                            </button>
                        </td></tr>`);
            }
            backup_code_container.removeClass('d-none');
        }

        if (\$('button[name=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["regen_button_name"] ?? null), "html", null, true);
            yield "\"]').length > 0) {
            \$('button[name=\"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["regen_button_name"] ?? null), "html", null, true);
            yield "\"]').on('click', function () {
                \$.ajax({
                    url: CFG_GLPI.root_doc + '/ajax/2fa.php',
                    method: 'POST',
                    data: {
                        regenerate_backup_codes: 1
                    },
                    success: function (data) {
                        showCodes(JSON.parse(data));
                    },
                    error: function () {
                        const backup_code_container = \$('#backup_codes');
                        backup_code_container.html('";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An error occurred"), "js"), "html", null, true);
            yield "');
                        backup_code_container.removeClass('d-none');
                    }
                });
            });
        }

        ";
            // line 228
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["backup_codes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 229
                yield "            showCodes(";
                yield json_encode(($context["backup_codes"] ?? null));
                yield ");
        ";
            }
            // line 231
            yield "    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/2fa/macros.html.twig";
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
        return array (  411 => 231,  405 => 229,  403 => 228,  393 => 221,  378 => 209,  374 => 208,  364 => 201,  336 => 176,  326 => 169,  309 => 155,  305 => 154,  302 => 153,  289 => 152,  276 => 145,  270 => 143,  268 => 142,  265 => 141,  259 => 139,  257 => 138,  248 => 133,  243 => 130,  237 => 127,  233 => 126,  229 => 125,  215 => 114,  207 => 113,  196 => 107,  190 => 104,  186 => 103,  181 => 100,  175 => 98,  169 => 96,  167 => 95,  158 => 92,  142 => 91,  87 => 40,  79 => 38,  73 => 36,  69 => 35,  66 => 34,  54 => 33,  48 => 151,  45 => 90,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/2fa/macros.html.twig", "/var/www/glpi/templates/pages/2fa/macros.html.twig");
    }
}
