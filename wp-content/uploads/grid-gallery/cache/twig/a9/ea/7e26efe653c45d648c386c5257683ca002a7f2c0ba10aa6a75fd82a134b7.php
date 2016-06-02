<?php

/* @galleries/shortcode/style.twig */
class __TwigTemplate_a9ea7e26efe653c45d648c386c5257683ca002a7f2c0ba10aa6a75fd82a134b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getprop($_prop = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "prop" => $_prop,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo ";";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 2
    public function getobject($_values = null)
    {
        $context = $this->env->mergeGlobals(array(
            "values" => $_values,
        ));

        $blocks = array();

        ob_start();
        try {
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/style.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  21 => 1,  663 => 112,  660 => 111,  657 => 109,  654 => 108,  651 => 107,  648 => 106,  645 => 105,  632 => 104,  628 => 226,  625 => 225,  621 => 217,  615 => 216,  612 => 215,  609 => 214,  604 => 213,  601 => 212,  598 => 211,  590 => 207,  587 => 206,  583 => 195,  580 => 194,  569 => 170,  564 => 167,  561 => 166,  557 => 164,  554 => 163,  550 => 161,  548 => 160,  542 => 159,  538 => 158,  534 => 157,  530 => 155,  526 => 154,  524 => 153,  521 => 152,  517 => 150,  515 => 149,  512 => 148,  508 => 146,  504 => 144,  502 => 143,  495 => 140,  493 => 115,  490 => 114,  487 => 103,  484 => 102,  481 => 100,  478 => 99,  475 => 98,  472 => 97,  469 => 96,  467 => 95,  464 => 94,  458 => 92,  456 => 91,  451 => 90,  445 => 88,  442 => 87,  437 => 85,  433 => 84,  428 => 83,  426 => 82,  422 => 81,  418 => 80,  414 => 79,  410 => 78,  406 => 77,  402 => 76,  398 => 75,  394 => 74,  390 => 73,  386 => 72,  380 => 70,  378 => 69,  375 => 68,  370 => 66,  367 => 65,  361 => 63,  358 => 62,  353 => 60,  350 => 59,  344 => 57,  339 => 55,  336 => 54,  332 => 52,  329 => 51,  323 => 49,  320 => 48,  316 => 46,  313 => 45,  309 => 43,  306 => 42,  301 => 40,  298 => 39,  295 => 38,  289 => 36,  285 => 34,  283 => 33,  275 => 32,  267 => 31,  263 => 30,  256 => 29,  249 => 28,  244 => 27,  235 => 25,  231 => 23,  229 => 22,  225 => 21,  221 => 20,  217 => 19,  213 => 18,  208 => 17,  205 => 16,  201 => 13,  191 => 10,  183 => 9,  173 => 8,  163 => 7,  160 => 6,  157 => 5,  154 => 4,  142 => 233,  134 => 227,  132 => 225,  123 => 218,  121 => 211,  117 => 209,  115 => 206,  110 => 203,  106 => 201,  102 => 199,  99 => 198,  97 => 197,  94 => 196,  92 => 194,  89 => 193,  86 => 192,  81 => 189,  74 => 187,  70 => 186,  64 => 185,  61 => 184,  50 => 175,  47 => 174,  45 => 173,  41 => 171,  39 => 16,  35 => 14,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }
}
