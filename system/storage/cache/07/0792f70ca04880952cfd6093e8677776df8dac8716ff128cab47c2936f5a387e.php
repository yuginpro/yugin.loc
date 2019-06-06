<?php

/* default/template//partial/d_layout_close.twig */
class __TwigTemplate_b2f99f8c6c1e7e9bf596d56ee5b5785332cef3a837ab5340ff59376ea0975239 extends Twig_Template
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
        // line 1
        echo "<!-- > d_layout_close -->
    ";
        // line 2
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</main>
";
        // line 3
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<!-- /> d_layout_close -->
";
    }

    public function getTemplateName()
    {
        return "default/template//partial/d_layout_close.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- > d_layout_close -->*/
/*     {{content_bottom}}</main>*/
/* {{column_right}}</div>*/
/* </div>*/
/* <!-- /> d_layout_close -->*/
/* */
