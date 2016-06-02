<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_c0c994cb26d6b8f40e47d40a1976cc4c3f3e1a8c57e26efd45dc80fc84781f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'figure_before' => array($this, 'block_figure_before'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "type") != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "width"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "type"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "color"), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "x"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "y"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "blur"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "color"), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "distance"), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 12
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 15
            echo "\t\twidth:auto;
\t";
        } else {
            // line 17
            echo "\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
";
        // line 21
        ob_start();
        // line 22
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"))))) {
            // line 23
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"), "html", null, true);
            echo "
\t";
        } else {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "\t";
        if (((((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link")))) && ((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0"))) {
            // line 31
            echo "\t\tgg-colorbox
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if ((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0"))) {
            // line 35
            echo "\t\tgg-video
\t";
        }
        // line 37
        echo "
\t";
        // line 38
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && (((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link")))) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video")))))))) {
            // line 39
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
            // line 45
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))), "html", null, true);
            echo "
\t\t";
            // line 46
            $context["link"] = true;
            // line 47
            echo "\t";
        } else {
            // line 48
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
";
        // line 52
        ob_start();
        // line 53
        echo "\t";
        if (((isset($context["link"]) ? $context["link"] : null) && $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 54
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "rel"), "html", null, true);
            echo "
\t";
        }
        // line 56
        echo "\t";
        if ((((isset($context["link"]) ? $context["link"] : null) == false) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "enabled") == "false"))) {
            // line 57
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 84
        echo "
\t";
        // line 85
        ob_start();
        // line 86
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false")) {
            // line 87
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
                // line 88
                echo "\t\t\t\ticons
\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\tnone
\t\t\t";
            }
            // line 92
            echo "\t\t";
        } else {
            // line 93
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
                // line 94
                echo "\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "personal") == "true") && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "captionEffect"), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 95
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "captionEffect"), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "personal") == "true")) {
                    // line 101
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 105
                echo "\t\t\t";
            }
            // line 106
            echo "\t\t";
        }
        // line 107
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 108
        echo "
\t\t<figure
\t\t\t";
        // line 110
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 130
        echo ">
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 132
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "overlay") == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 133
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 134
        echo "\"
\t\t\t\tstyle=\"
\t\t\t\t";
        // line 136
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "0") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3"))) {
            // line 137
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\theight:";
            // line 138
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\toverflow:hidden;
\t\t\t\t";
        }
        // line 140
        echo "\">

\t\t\t\t";
        // line 142
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 143
        echo "
\t\t\t\t";
        // line 144
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 0)) {
            // line 145
            echo "\t\t\t\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width");
            // line 146
            echo "\t\t\t\t";
        } else {
            // line 147
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "width") < 500)) {
                // line 148
                echo "\t\t\t\t\t\t";
                $context["width"] = null;
                // line 149
                echo "\t\t\t\t\t";
            } else {
                // line 150
                echo "\t\t\t\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "width") / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width")));
                // line 151
                echo "\t\t\t\t\t";
            }
            echo "\t
\t\t\t\t";
        }
        // line 153
        echo "
\t\t\t\t";
        // line 154
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 0)) {
            // line 155
            echo "\t\t\t\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height");
            // line 156
            echo "\t\t\t\t";
        } else {
            // line 157
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "height") < 500)) {
                // line 158
                echo "\t\t\t\t\t\t";
                $context["height"] = null;
                // line 159
                echo "\t\t\t\t\t";
            } else {
                // line 160
                echo "\t\t\t\t\t\t";
                $context["height"] = round((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "height") / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height")));
                // line 161
                echo "\t\t\t\t\t";
            }
            echo "\t
\t\t\t\t";
        }
        // line 163
        echo "
\t\t\t\t";
        // line 164
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 3))) {
            // line 165
            echo "\t\t\t\t\t";
            $context["crop"] = 1;
            // line 166
            echo "\t\t\t\t";
        }
        // line 167
        echo "
\t\t\t\t";
        // line 168
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 1)) {
            // line 169
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 170
            echo "\t\t\t\t";
        }
        // line 171
        echo "
\t\t\t\t";
        // line 172
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 2)) {
            // line 173
            echo "\t\t\t\t\t";
            $context["width"] = null;
            // line 174
            echo "\t\t\t\t";
        }
        // line 175
        echo "

\t\t\t\t<img 
\t\t\t\t\t";
        // line 178
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 193
        echo "\t\t\t\t/>
\t\t\t</div>

\t\t\t";
        // line 196
        ob_start();
        // line 197
        echo "\t\t\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 220
        echo "\t\t\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 221
        echo "
\t\t\t<figcaption
\t\t\t\t";
        // line 223
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 229
        echo ">

\t\t\t\t<div
\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 234
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 235
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";
\t\t\t\t\t";
        }
        // line 236
        echo "\">

\t\t\t\t\t";
        // line 238
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 306
        echo "\t\t\t\t</div>
\t\t\t</figcaption>

\t\t\t";
        // line 309
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 349
        echo "\t\t</figure>

\t";
        // line 351
        $this->displayBlock('figure_after', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_figure_before($context, array $blocks = array())
    {
        // line 63
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 64
            echo "\t\t\t<a
\t\t\t\t";
            // line 65
            $this->displayBlock('a_attributes', $context, $blocks);
            // line 81
            echo "\t\t\t>
\t\t";
        }
        // line 83
        echo "\t";
    }

    // line 65
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\tid=\"gg-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id"), "html", null, true);
        echo "\"
\t\t\t\t\tclass=\"gg-link ";
        // line 67
        echo twig_escape_filter($this->env, trim((isset($context["aClass"]) ? $context["aClass"] : null)), "html", null, true);
        echo " ";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto") == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t\t\thref=\"";
        // line 68
        echo twig_escape_filter($this->env, htmlspecialchars_decode(trim((isset($context["aHref"]) ? $context["aHref"] : null))), "html", null, true);
        echo "\"
\t\t\t\t\ttarget=\"";
        // line 69
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target"), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 70
        echo twig_escape_filter($this->env, trim((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t\t";
        // line 71
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
            // line 72
            echo "\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, (isset($context["aRel"]) ? $context["aRel"] : null), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t";
        if (((isset($context["link"]) ? $context["link"] : null) == true)) {
            // line 77
            echo "\t\t\t\t\t\tdata-type=\"link\"
\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t\t\t";
    }

    // line 110
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 111
        echo "\t\t\t\tclass=\"grid-gallery-caption
\t\t\t\t";
        // line 112
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto") == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        // line 113
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 114
            echo "\t\t\t\t\tshadow-show
\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 117
            echo "\t\t\t\t shadow-hide
\t\t\t\t";
        }
        // line 118
        echo "\"
\t\t\t\tdata-grid-gallery-type=\"";
        // line 119
        echo twig_escape_filter($this->env, trim((isset($context["galleryType"]) ? $context["galleryType"] : null)), "html", null, true);
        echo "\"
\t\t\t\tstyle=\"display:none;";
        // line 120
        echo twig_escape_filter($this->env, trim((isset($context["figureStyle"]) ? $context["figureStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 121
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true")) {
            // line 122
            echo "\t\t\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) {
                // line 124
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 126
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 129
            echo "\t\t\t\t";
        }
        // line 130
        echo "\t\t\t";
    }

    // line 178
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 179
        echo "\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "id"), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "cropPosition"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality"), "100")) : ("100")))), "html", null, true);
        echo "\"
\t\t\t\t\talt=\"";
        // line 180
        if ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt")) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt") == " "))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt"), "html", null, true);
        }
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 181
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-caption=\"";
        // line 182
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-title=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 185
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 0) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"))))) {
            // line 186
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 0) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"))))) {
            // line 189
            echo "\t\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 191
        echo "\t\t\t\t\t\"
\t\t\t\t\t";
    }

    // line 197
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 198
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 199
            echo "\t\t\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 200
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_enabled") == "true")) {
                // line 201
                echo "\t\t\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color"), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\t";
                // line 204
                echo "\t\t\t\t\t\t";
            } else {
                // line 205
                echo "\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t\t";
        } else {
            // line 209
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\ttext-align:";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 214
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 215
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t";
    }

    // line 223
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 224
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 225
            echo "\t\t\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, trim((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency"), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 227
        echo "\t\t\t\t\tdata-alpha=\"";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "transparency")), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"";
        // line 228
        echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
    }

    // line 238
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 239
        echo "\t\t\t\t\t\t";
        // line 240
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 241
            echo "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 242
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tdata-margin=\"";
            // line 243
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t";
            // line 245
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) {
                // line 246
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 247
                ob_start();
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) {
                    // line 249
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"), (isset($context["youtube"]) ? $context["youtube"] : null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 250
                    $context["videoSource"] = "youtube";
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) {
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"), (isset($context["vimeoPattern"]) ? $context["vimeoPattern"] : null), (isset($context["vimeoReplace"]) ? $context["vimeoReplace"] : null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 253
                    $context["videoSource"] = "vimeo";
                    // line 254
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 255
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 257
                echo "\t\t\t\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 258
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 259
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 260
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 261
                ob_start();
                // line 262
                echo "\t\t\t\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t\tmargin-right:";
                // line 263
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 265
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 266
                echo twig_escape_filter($this->env, trim((isset($context["videoUrl"]) ? $context["videoUrl"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"hi-icon gg-video ";
                // line 267
                echo twig_escape_filter($this->env, (isset($context["videoIcon"]) ? $context["videoIcon"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 268
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2")) {
                    echo " pbox";
                }
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\tstyle=\"";
                // line 270
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-video-source=\"";
                // line 271
                echo twig_escape_filter($this->env, (isset($context["videoSource"]) ? $context["videoSource"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t";
                // line 273
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1")) {
                    // line 274
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 276
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 279
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 280
                echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t";
                // line 282
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 284
            echo "
\t\t\t\t\t\t\t\t";
            // line 285
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
                // line 286
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target"), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link\" style=\"";
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t";
            }
            // line 288
            echo "
\t\t\t\t\t\t\t\t";
            // line 289
            if (((!array_key_exists("videoUrl", $context)) && ((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
                // line 290
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && (!array_key_exists("link", $context)))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 291
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
                    // line 292
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t";
                }
                // line 293
                echo ">Open in pop-up window</a>
\t\t\t\t\t\t\t\t";
            }
            // line 295
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 297
        echo "
\t\t\t\t\t\t";
        // line 298
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 299
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "true")) {
                // line 300
                echo "\t\t\t\t\t\t\t\t";
                if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
                    // line 301
                    echo "\t\t\t\t\t\t\t\t\t<span style=\"font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption");
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 303
                echo "\t\t\t\t\t\t\t";
            }
            // line 304
            echo "\t\t\t\t\t\t";
        }
        // line 305
        echo "\t\t\t\t\t";
    }

    // line 309
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 310
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "true"))) {
            // line 311
            echo "
\t\t\t\t\t";
            // line 312
            ob_start();
            // line 313
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 314
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 315
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 316
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 317
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align") != 3)) {
                // line 318
                echo "\t\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 321
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 324
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";
\t\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 326
            echo "
\t\t\t\t\t";
            // line 327
            if (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption"))) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "tooltip") == "false"))) {
                // line 328
                echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"caption-with-";
                // line 329
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\tstyle=\"";
                // line 330
                echo twig_escape_filter($this->env, (isset($context["captionStyle"]) ? $context["captionStyle"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\tdata-alpha=\"";
                // line 331
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "transparency")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 333
                if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
                    // line 334
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 335
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 336
                    echo $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption");
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 339
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 340
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 341
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 344
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 347
            echo "\t\t\t\t";
        }
        // line 348
        echo "\t\t\t";
    }

    // line 351
    public function block_figure_after($context, array $blocks = array())
    {
        // line 352
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 353
            echo "\t\t\t</a>
\t\t";
        }
        // line 355
        echo "\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1080 => 355,  1076 => 353,  1073 => 352,  1070 => 351,  1066 => 348,  1063 => 347,  1058 => 344,  1052 => 341,  1048 => 340,  1042 => 339,  1036 => 336,  1032 => 335,  1026 => 334,  1024 => 333,  1019 => 331,  1015 => 330,  1007 => 329,  1004 => 328,  1002 => 327,  999 => 326,  993 => 324,  988 => 321,  985 => 320,  979 => 318,  977 => 317,  973 => 316,  968 => 315,  964 => 314,  959 => 313,  957 => 312,  954 => 311,  951 => 310,  948 => 309,  944 => 305,  941 => 304,  938 => 303,  929 => 301,  926 => 300,  923 => 299,  921 => 298,  918 => 297,  914 => 295,  910 => 293,  906 => 292,  904 => 291,  893 => 290,  891 => 289,  888 => 288,  878 => 286,  876 => 285,  873 => 284,  869 => 282,  866 => 280,  863 => 279,  860 => 277,  858 => 276,  854 => 274,  851 => 273,  847 => 271,  843 => 270,  840 => 269,  836 => 268,  832 => 267,  828 => 266,  825 => 265,  820 => 263,  815 => 262,  813 => 261,  810 => 260,  808 => 259,  805 => 258,  802 => 257,  796 => 255,  793 => 254,  791 => 253,  786 => 252,  783 => 251,  781 => 250,  776 => 249,  773 => 248,  771 => 247,  768 => 246,  766 => 245,  761 => 243,  755 => 242,  752 => 241,  749 => 240,  747 => 239,  744 => 238,  738 => 228,  733 => 227,  727 => 225,  724 => 224,  721 => 223,  717 => 219,  714 => 218,  709 => 215,  707 => 214,  703 => 213,  699 => 212,  694 => 211,  690 => 210,  685 => 209,  682 => 208,  677 => 205,  674 => 204,  668 => 201,  666 => 200,  661 => 199,  658 => 198,  655 => 197,  650 => 191,  644 => 189,  641 => 188,  635 => 186,  633 => 185,  620 => 182,  599 => 179,  596 => 178,  592 => 130,  589 => 129,  586 => 128,  582 => 126,  576 => 124,  573 => 123,  570 => 122,  568 => 121,  560 => 119,  553 => 117,  546 => 114,  543 => 113,  539 => 112,  536 => 111,  533 => 110,  522 => 77,  519 => 76,  513 => 74,  509 => 72,  507 => 71,  503 => 70,  499 => 69,  480 => 66,  477 => 65,  473 => 83,  461 => 63,  453 => 351,  449 => 349,  447 => 309,  440 => 238,  436 => 236,  430 => 235,  421 => 229,  419 => 223,  415 => 221,  412 => 220,  409 => 197,  407 => 196,  400 => 178,  395 => 175,  392 => 174,  389 => 173,  387 => 172,  384 => 171,  381 => 170,  376 => 168,  373 => 167,  365 => 164,  362 => 163,  356 => 161,  347 => 158,  341 => 156,  338 => 155,  333 => 153,  327 => 151,  324 => 150,  321 => 149,  318 => 148,  315 => 147,  312 => 146,  307 => 144,  304 => 143,  302 => 142,  292 => 138,  287 => 137,  281 => 134,  277 => 133,  271 => 130,  269 => 110,  265 => 108,  262 => 107,  259 => 106,  250 => 103,  241 => 100,  238 => 99,  232 => 97,  226 => 95,  223 => 94,  220 => 93,  209 => 88,  206 => 87,  203 => 86,  198 => 84,  195 => 62,  193 => 61,  190 => 60,  185 => 57,  182 => 56,  176 => 54,  171 => 52,  168 => 51,  161 => 48,  158 => 47,  156 => 46,  151 => 45,  148 => 44,  146 => 43,  143 => 42,  138 => 39,  136 => 38,  133 => 37,  129 => 35,  127 => 34,  124 => 33,  120 => 31,  112 => 28,  105 => 25,  96 => 22,  91 => 20,  84 => 17,  80 => 15,  77 => 14,  71 => 12,  68 => 11,  65 => 9,  62 => 8,  48 => 6,  43 => 5,  33 => 3,  28 => 1,  46 => 2,  21 => 1,  663 => 112,  660 => 111,  657 => 109,  654 => 108,  651 => 107,  648 => 106,  645 => 105,  632 => 104,  628 => 183,  625 => 225,  621 => 217,  615 => 216,  612 => 181,  609 => 214,  604 => 180,  601 => 212,  598 => 211,  590 => 207,  587 => 206,  583 => 195,  580 => 194,  569 => 170,  564 => 120,  561 => 166,  557 => 118,  554 => 163,  550 => 116,  548 => 160,  542 => 159,  538 => 158,  534 => 157,  530 => 155,  526 => 79,  524 => 153,  521 => 152,  517 => 150,  515 => 149,  512 => 148,  508 => 146,  504 => 144,  502 => 143,  495 => 68,  493 => 115,  490 => 114,  487 => 67,  484 => 102,  481 => 100,  478 => 99,  475 => 98,  472 => 97,  469 => 81,  467 => 65,  464 => 64,  458 => 62,  456 => 91,  451 => 90,  445 => 88,  442 => 306,  437 => 85,  433 => 84,  428 => 234,  426 => 82,  422 => 81,  418 => 80,  414 => 79,  410 => 78,  406 => 77,  402 => 193,  398 => 75,  394 => 74,  390 => 73,  386 => 72,  380 => 70,  378 => 169,  375 => 68,  370 => 166,  367 => 165,  361 => 63,  358 => 62,  353 => 160,  350 => 159,  344 => 157,  339 => 55,  336 => 154,  332 => 52,  329 => 51,  323 => 49,  320 => 48,  316 => 46,  313 => 45,  309 => 145,  306 => 42,  301 => 40,  298 => 140,  295 => 38,  289 => 36,  285 => 136,  283 => 33,  275 => 132,  267 => 31,  263 => 30,  256 => 105,  249 => 28,  244 => 101,  235 => 25,  231 => 23,  229 => 22,  225 => 21,  221 => 20,  217 => 92,  213 => 90,  208 => 17,  205 => 16,  201 => 85,  191 => 10,  183 => 9,  173 => 53,  163 => 7,  160 => 6,  157 => 5,  154 => 4,  142 => 233,  134 => 227,  132 => 225,  123 => 218,  121 => 211,  117 => 30,  115 => 29,  110 => 203,  106 => 201,  102 => 199,  99 => 23,  97 => 197,  94 => 21,  92 => 194,  89 => 193,  86 => 192,  81 => 189,  74 => 187,  70 => 186,  64 => 185,  61 => 184,  50 => 7,  47 => 174,  45 => 173,  41 => 171,  39 => 16,  35 => 14,  32 => 4,  30 => 2,  27 => 2,  25 => 1,);
    }
}
