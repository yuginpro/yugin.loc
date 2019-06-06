<?php

/* default/template/d_blog_module/post_thumb.twig */
class __TwigTemplate_817eb0db3c23cd86c22c56b93e314a1c0579d3af59b7d8d32ef7715636c6b9ff extends Twig_Template
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
        echo "<article class=\"post-layout post-grid\">
    <div class=\"post-thumb\">
        <div class=\"image\">
            <a href=\"";
        // line 4
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
        echo "\">
                <img src=\"";
        // line 5
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "image_alt", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "image_title", array());
        echo "\" class=\"img-responsive\"/>
            </a>
        </div>
    
        <div class=\"post-thumb-heading\">
            ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "rating_display", array()) || $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "date_display", array()))) {
            // line 11
            echo "            <div class=\"row\">
                <div class=\"";
            // line 12
            if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "rating_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating", array()))) {
                echo "col-md-6";
            } else {
                echo "col-md-12";
            }
            echo "\">
                    ";
            // line 13
            if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "author_display", array())) {
                // line 14
                echo "                    <span class=\"author\"><i class=\"fa fa-user\"></i> ";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array());
                echo "</span>
                    ";
            }
            // line 16
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "date_display", array())) {
                // line 17
                echo "                    <span class=\"date-published\"><i class=\"fa fa-clock-o\"></i> ";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date_published", array());
                echo "</span>
                    ";
            }
            // line 19
            echo "                </div>
                ";
            // line 20
            if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "rating_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating", array()))) {
                // line 21
                echo "                <div class=\"col-md-6\">
                    <a href=\"";
                // line 22
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
                echo "\">
                    <div data-rating=\"";
                // line 23
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\" class=\"rating pull-right rating-";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating", array());
                echo "\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    </div>
                    </a>
                </div>
                ";
            }
            // line 33
            echo "            </div>
            ";
        }
        // line 35
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "category_label_display", array())) {
            // line 36
            echo "                <ul class=\"category list-unstyled\">
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "                    <li><a class=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "category_label", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "title", array());
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </ul>
            ";
        }
        // line 42
        echo "            <h3 class=\"title\"><a href=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
        echo "\">";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
        echo "</a></h3>
            <span class=\"title-divider\"></span>
        </div>
        <div class=\"post-thumb-body\">
            ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "description_display", array())) {
            // line 47
            echo "                <div class=\"short-description\">";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "short_description", array());
            echo "</div>
            ";
        }
        // line 49
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "tag_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags", array()))) {
            // line 50
            echo "                <div class=\"tag\">
                    <span class=\"tag-title\">";
            // line 51
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 53
                echo "                        <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "text", array());
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </div>
            ";
        }
        // line 57
        echo "        </div>
        <div class=\"post-thumb-footer clearfix\">
            ";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "review_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "review", array()))) {
            echo "<a class=\"review\" href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
            echo "\"><i class=\"fa fa-comment\"></i> ";
            echo (isset($context["text_review"]) ? $context["text_review"] : null);
            echo " (";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "review", array());
            echo ")</a>";
        }
        // line 60
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "views_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "views", array()))) {
            echo "<span class=\"view\"><i class=\"fa fa-eye\"></i> ";
            echo (isset($context["text_views"]) ? $context["text_views"] : null);
            echo " ";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "views", array());
            echo "</span>";
        }
        // line 61
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "read_more_display", array())) {
            echo "<a href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
            echo "\" class=\"read-more pull-right\">";
            echo (isset($context["text_read_more"]) ? $context["text_read_more"] : null);
            echo "</a>";
        }
        // line 62
        echo "        </div>
    
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "default/template/d_blog_module/post_thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 62,  198 => 61,  189 => 60,  179 => 59,  175 => 57,  171 => 55,  160 => 53,  156 => 52,  152 => 51,  149 => 50,  146 => 49,  140 => 47,  138 => 46,  128 => 42,  124 => 40,  111 => 38,  107 => 37,  104 => 36,  101 => 35,  97 => 33,  82 => 23,  78 => 22,  75 => 21,  73 => 20,  70 => 19,  64 => 17,  61 => 16,  55 => 14,  53 => 13,  45 => 12,  42 => 11,  40 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <article class="post-layout post-grid">*/
/*     <div class="post-thumb">*/
/*         <div class="image">*/
/*             <a href="{{post.href}}">*/
/*                 <img src="{{post.thumb}}" alt="{{post.image_alt}}" title="{{post.image_title}}" class="img-responsive"/>*/
/*             </a>*/
/*         </div>*/
/*     */
/*         <div class="post-thumb-heading">*/
/*             {% if (setting.post_thumb.rating_display or setting.post_thumb.date_display) %}*/
/*             <div class="row">*/
/*                 <div class="{% if (setting.post_thumb.rating_display and post.rating) %}col-md-6{% else %}col-md-12{% endif %}">*/
/*                     {% if setting.post_thumb.author_display %}*/
/*                     <span class="author"><i class="fa fa-user"></i> {{post.author}}</span>*/
/*                     {% endif %}*/
/*                     {% if setting.post_thumb.date_display %}*/
/*                     <span class="date-published"><i class="fa fa-clock-o"></i> {{post.date_published}}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {% if (setting.post_thumb.rating_display and post.rating) %}*/
/*                 <div class="col-md-6">*/
/*                     <a href="{{post.href}}">*/
/*                     <div data-rating="{{rating}}" class="rating pull-right rating-{{post.rating}}">*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if setting.post_thumb.category_label_display %}*/
/*                 <ul class="category list-unstyled">*/
/*                     {% for category in post.categories %}*/
/*                     <li><a class="{{setting.post_thumb.category_label}}" href="{{category.href}}">{{category.title}}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*             <h3 class="title"><a href="{{post.href}}">{{post.title}}</a></h3>*/
/*             <span class="title-divider"></span>*/
/*         </div>*/
/*         <div class="post-thumb-body">*/
/*             {% if setting.post_thumb.description_display %}*/
/*                 <div class="short-description">{{post.short_description}}</div>*/
/*             {% endif %}*/
/*             {% if (setting.post_thumb.tag_display and post.tags) %}*/
/*                 <div class="tag">*/
/*                     <span class="tag-title">{{text_tags}}</span>*/
/*                     {% for tag in post.tags %}*/
/*                         <a href="{{tag.href}}">{{tag.text}}</a>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="post-thumb-footer clearfix">*/
/*             {% if (setting.post_thumb.review_display and post.review) %}<a class="review" href="{{post.href}}"><i class="fa fa-comment"></i> {{text_review}} ({{post.review}})</a>{% endif %}*/
/*             {% if (setting.post_thumb.views_display and post.views) %}<span class="view"><i class="fa fa-eye"></i> {{text_views}} {{post.views}}</span>{% endif %}*/
/*             {% if setting.post_thumb.read_more_display %}<a href="{{post.href}}" class="read-more pull-right">{{text_read_more}}</a>{% endif %}*/
/*         </div>*/
/*     */
/*     </div>*/
/* </article>*/
