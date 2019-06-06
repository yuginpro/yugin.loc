<?php

/* default/template/d_blog_module/author.twig */
class __TwigTemplate_83952bb9b9d7a8217eace00c8aefad702e86b741efbe41d253d26ac3279b84bd extends Twig_Template
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
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_breadcrumb"), "default/template/d_blog_module/author.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_layout_open"), "default/template/d_blog_module/author.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"bm\">
            <div class=\"bm-author-info clearfix\">
                ";
        // line 9
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            echo "<div class=\"btn-group btn-group-xs pull-right\" ><a class=\"btn btn-default \" href=\"";
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-pencil\"></i> ";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a></div>";
        }
        // line 10
        echo "                <h1 class=\"h1 title\">";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                ";
        // line 11
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 12
            echo "                <div class=\"image\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"img-responsive\"  /></div>
                ";
        }
        // line 14
        echo "                ";
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "                <div class=\"description\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
                ";
        }
        // line 17
        echo "            </div>

            ";
        // line 19
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 20
            echo "            <div class=\"bm-categories\">
                <div class=\"h3\">";
            // line 21
            echo (isset($context["text_categories"]) ? $context["text_categories"] : null);
            echo "</div>

                <div class=\"row\">
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                    <div class=\"col-sm-";
                echo $this->getAttribute($context["category"], "col", array());
                echo " col-xs-4\">
                        <a class=\"item-category\" href=\"";
                // line 26
                echo (isset($context["href"]) ? $context["href"] : null);
                echo "\">
                            ";
                // line 27
                if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "category", array()), "sub_category_image", array())) {
                    // line 28
                    echo "                                <div class=\"image\"><img src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["title"]) ? $context["title"] : null);
                    echo "\" title=\"";
                    echo (isset($context["title"]) ? $context["title"] : null);
                    echo "\" /></div>
                            ";
                }
                // line 30
                echo "                            <div class=\"title\">";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "</div>
                        </a>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </div>
            </div>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 39
            echo "                ";
            $this->loadTemplate($this->env->getExtension('opencart')->templateFunction((isset($context["layout_template"]) ? $context["layout_template"] : null)), "default/template/d_blog_module/author.twig", 39)->display(array_merge($context, (isset($context["posts"]) ? $context["posts"] : null)));
            // line 40
            echo "            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if ( !(isset($context["posts"]) ? $context["posts"] : null)) {
            // line 43
            echo "                <p class=\"bm-empty\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\"><a href=\"";
            // line 45
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
                </div>
            ";
        }
        // line 48
        echo "        </div>
    ";
        // line 49
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_layout_close"), "default/template/d_blog_module/author.twig", 49)->display($context);
        // line 50
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/d_blog_module/author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 50,  161 => 49,  158 => 48,  150 => 45,  144 => 43,  142 => 42,  139 => 41,  136 => 40,  133 => 39,  131 => 38,  128 => 37,  123 => 34,  112 => 30,  102 => 28,  100 => 27,  96 => 26,  91 => 25,  87 => 24,  81 => 21,  78 => 20,  76 => 19,  72 => 17,  66 => 15,  63 => 14,  53 => 12,  51 => 11,  46 => 10,  38 => 9,  34 => 7,  31 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{header}}*/
/* <style>*/
/*     {{custom_style}}*/
/* </style>*/
/* {% include template('partial/d_breadcrumb') %}*/
/*     {% include template('partial/d_layout_open') %}*/
/*         <div class="bm">*/
/*             <div class="bm-author-info clearfix">*/
/*                 {% if edit %}<div class="btn-group btn-group-xs pull-right" ><a class="btn btn-default " href="{{edit}}" target="_blank"><i class="fa fa-pencil"></i> {{text_edit}}</a></div>{% endif %}*/
/*                 <h1 class="h1 title">{{heading_title}}</h1>*/
/*                 {% if thumb %}*/
/*                 <div class="image"><img src="{{thumb}}" alt="{{heading_title}}" title="{{heading_title}}" class="img-responsive"  /></div>*/
/*                 {% endif %}*/
/*                 {% if description %}*/
/*                 <div class="description">{{description}}</div>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {% if categories %}*/
/*             <div class="bm-categories">*/
/*                 <div class="h3">{{text_categories}}</div>*/
/* */
/*                 <div class="row">*/
/*                     {% for category in categories %}*/
/*                     <div class="col-sm-{{category.col}} col-xs-4">*/
/*                         <a class="item-category" href="{{href}}">*/
/*                             {% if setting.category.sub_category_image %}*/
/*                                 <div class="image"><img src="{{thumb}}" alt="{{title}}" title="{{title}}" /></div>*/
/*                             {% endif %}*/
/*                             <div class="title">{{title}}</div>*/
/*                         </a>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             {% if posts %}*/
/*                 {% include template(layout_template) with posts %}*/
/*             {% endif %}*/
/* */
/*             {% if not posts %}*/
/*                 <p class="bm-empty">{{text_empty}}</p>*/
/*                 <div class="buttons">*/
/*                     <div class="pull-right"><a href="{{continue}}" class="btn btn-primary">{{button_continue}}</a></div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% include template('partial/d_layout_close') %}*/
/* {{footer}}*/
/* */
