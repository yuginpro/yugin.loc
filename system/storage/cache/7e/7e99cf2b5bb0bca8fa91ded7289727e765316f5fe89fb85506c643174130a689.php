<?php

/* default/template/d_blog_module/layout_grid.twig */
class __TwigTemplate_9f7fa7067a67b690350320c34090190146bdbb33863f5e0030ea5fdcc034f847 extends Twig_Template
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
        echo "<div class=\"bm-posts\">
    <div class=\"bm-grid bm-grid\">
        <div class=\"row\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "                ";
            if ($this->getAttribute($context["post"], "row", array())) {
                // line 6
                echo "                    </div><div class=\"row\">
                ";
            }
            // line 8
            echo "                <div class=\"bm-grid-item col-sm-";
            echo $this->getAttribute($context["post"], "col", array());
            echo "\" ";
            if ($this->getAttribute($context["post"], "animate", array())) {
                echo "animate=\"";
                echo $this->getAttribute($context["post"], "animate", array());
                echo "\"";
            }
            echo ">
                    <div class=\"bm-grid-item-body animated\">
                        ";
            // line 10
            $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("d_blog_module/post_thumb"), "default/template/d_blog_module/layout_grid.twig", 10)->display(array_merge($context, $context["post"]));
            // line 11
            echo "                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
    </div>
    <div class=\"bm-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 18
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 19
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/d_blog_module/layout_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  84 => 18,  78 => 14,  62 => 11,  60 => 10,  48 => 8,  44 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="bm-posts">*/
/*     <div class="bm-grid bm-grid">*/
/*         <div class="row">*/
/*             {% for post in posts %}*/
/*                 {% if post.row %}*/
/*                     </div><div class="row">*/
/*                 {% endif %}*/
/*                 <div class="bm-grid-item col-sm-{{post.col}}" {% if post.animate %}animate="{{post.animate}}"{% endif %}>*/
/*                     <div class="bm-grid-item-body animated">*/
/*                         {% include template('d_blog_module/post_thumb') with post %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="bm-pagination">*/
/*         <div class="row">*/
/*             <div class="col-sm-6 text-left">{{pagination}}</div>*/
/*             <div class="col-sm-6 text-right">{{results}}</div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
