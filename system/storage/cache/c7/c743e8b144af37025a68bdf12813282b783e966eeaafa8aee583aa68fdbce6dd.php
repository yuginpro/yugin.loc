<?php

/* default/template/d_blog_module/search.twig */
class __TwigTemplate_4cee758587527650d307b7a42b9f5c52b4b8f44f1af2b129ca49484f3d6e82dc extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<style>
    ";
        // line 3
        echo (isset($context["custom_style"]) ? $context["custom_style"] : null);
        echo "
</style>
";
        // line 5
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_breadcrumb"), "default/template/d_blog_module/search.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_layout_open"), "default/template/d_blog_module/search.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"bm\">
            <div class=\"bm-search-info clearfix\">
                 <h1 class=\"h1 title\">";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            </div>
            ";
        // line 11
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 12
            echo "                ";
            $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("/d_blog_module/layout_grid"), "default/template/d_blog_module/search.twig", 12)->display(array_merge($context, (isset($context["posts"]) ? $context["posts"] : null)));
            // line 13
            echo "            ";
        }
        // line 14
        echo "            ";
        if ( !(isset($context["posts"]) ? $context["posts"] : null)) {
            // line 15
            echo "                <p class=\"bm-empty\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\"><a href=\"";
            // line 17
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
                </div>
            ";
        }
        // line 20
        echo "        </div>
    ";
        // line 21
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_layout_close"), "default/template/d_blog_module/search.twig", 21)->display($context);
        // line 22
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/d_blog_module/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  71 => 21,  68 => 20,  60 => 17,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  43 => 11,  38 => 9,  34 => 7,  31 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{header}}*/
/* <style>*/
/*     {{custom_style}}*/
/* </style>*/
/* {% include template('partial/d_breadcrumb') %}*/
/*     {% include template('partial/d_layout_open') %}*/
/*         <div class="bm">*/
/*             <div class="bm-search-info clearfix">*/
/*                  <h1 class="h1 title">{{heading_title}}</h1>*/
/*             </div>*/
/*             {% if posts %}*/
/*                 {% include template('/d_blog_module/layout_grid') with posts %}*/
/*             {% endif %}*/
/*             {% if not posts %}*/
/*                 <p class="bm-empty">{{text_empty}}</p>*/
/*                 <div class="buttons">*/
/*                     <div class="pull-right"><a href="{{continue}}" class="btn btn-primary">{{button_continue}}</a></div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% include template('partial/d_layout_close') %}*/
/* {{footer}}*/
