<?php

/* default/template/d_blog_module/post.twig */
class __TwigTemplate_b8dad5836dfa564ffdff95dd8176c198fe4aeb37319976c260abce85ff933a2f extends Twig_Template
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
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_breadcrumb"), "default/template/d_blog_module/post.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_layout_open"), "default/template/d_blog_module/post.twig", 6)->display($context);
        // line 7
        echo "        <article class=\"bm\">
            <div class=\"heading bm-post-info clearfix\">
                ";
        // line 9
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            echo "<div class=\"btn-group btn-group-xs btn-edit\" ><a class=\"btn btn-default \" href=\"";
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-pencil\"></i> ";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a></div>";
        }
        // line 10
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post", array()), "category_label_display", array())) {
            // line 11
            echo "                    <ul class=\"category list-unstyled\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "                        <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "title", array());
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </ul>
                ";
        }
        // line 17
        echo "                <h1 class=\"h1 title\">";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <span class=\"title-divider\"></span>
                <div class=\"title-information\">
                    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post", array()), "rating_display", array())) {
            // line 21
            echo "                    <div class=\"rating rating-";
            echo (isset($context["rating"]) ? $context["rating"] : null);
            echo "\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    </div>
                    ";
        }
        // line 29
        echo "                    <div class=\"details\">
                        ";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post", array()), "author_display", array())) {
            // line 31
            echo "                            ";
            echo (isset($context["text_posted_by"]) ? $context["text_posted_by"] : null);
            echo "
                            <a href=\"";
            // line 32
            echo (isset($context["author_link"]) ? $context["author_link"] : null);
            echo "\" rel=\"bookmark\">
                                ";
            // line 33
            echo (isset($context["author"]) ? $context["author"] : null);
            echo "
                            </a>
                        ";
        }
        // line 36
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post", array()), "date_display", array())) {
            // line 37
            echo "                            ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                            <a href=\"";
            // line 38
            echo (isset($context["date_published_link"]) ? $context["date_published_link"] : null);
            echo "\" rel=\"bookmark\">
                                <time class=\"entry-date published\" datetime=\"";
            // line 39
            echo (isset($context["date_published_utc"]) ? $context["date_published_utc"] : null);
            echo "\">";
            echo (isset($context["date_published"]) ? $context["date_published"] : null);
            echo "</time>
                                <time class=\"updated hidden\" datetime=\"";
            // line 40
            echo (isset($context["date_modified_utc"]) ? $context["date_modified_utc"] : null);
            echo "\">";
            echo (isset($context["date_modified"]) ? $context["date_modified"] : null);
            echo "</time>
                            </a>
                        ";
        }
        // line 43
        echo "                    </div>

                </div>
                ";
        // line 46
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["popup"]) ? $context["popup"] : null))) {
            // line 47
            echo "                    <div class=\"image\">
                    ";
            // line 48
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 49
                echo "                        ";
                if ((isset($context["popup"]) ? $context["popup"] : null)) {
                    // line 50
                    echo "                        <a class=\"popup\" href=\"";
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\">
                            <img src=\"";
                    // line 51
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" title=\"";
                    echo (isset($context["image_title"]) ? $context["image_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["image_alt"]) ? $context["image_alt"] : null);
                    echo "\" class=\"img-responsive\" />
                        </a>
                        ";
                } else {
                    // line 54
                    echo "                             <img src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" title=\"";
                    echo (isset($context["image_title"]) ? $context["image_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["image_alt"]) ? $context["image_alt"] : null);
                    echo "\" class=\"img-responsive\" />
                        ";
                }
                // line 56
                echo "                    ";
            }
            // line 57
            echo "                    </div>
                ";
        }
        // line 59
        echo "            </div>            
            <div class=\"content bm-post-content\">
                <div id=\"description\" class=\"description\">";
        // line 61
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>               
                ";
        // line 62
        if ((isset($context["post_videos"]) ? $context["post_videos"] : null)) {
            // line 63
            echo "                    <div class=\"bm-videos\">
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_videos"]) ? $context["post_videos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_video"]) {
                // line 65
                echo "                            <div class=\"bm-video\">
                                <h2>";
                // line 66
                echo $this->getAttribute($context["post_video"], "text", array());
                echo "</h2>
                                <div style=\"text-align: center;\">
                                    ";
                // line 68
                echo $this->getAttribute($context["post_video"], "code", array());
                echo "
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </div>
                ";
        }
        // line 74
        echo "
                ";
        // line 75
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 76
            echo "                <div class=\"tag\">
                    <span class=\"tag-title\">";
            // line 77
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 79
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
            // line 81
            echo "                </div>
                ";
        }
        // line 83
        echo "

                ";
        // line 85
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post", array()), "nav_display", array()) && ((isset($context["prev_post"]) ? $context["prev_post"] : null) || (isset($context["next_post"]) ? $context["next_post"] : null)))) {
            // line 86
            echo "                <div class=\"row post-nav\">
                    <div class=\"col-md-6 post-nav-left\">
                        ";
            // line 88
            if ((isset($context["prev_post"]) ? $context["prev_post"] : null)) {
                // line 89
                echo "                            <a href=\"";
                echo $this->getAttribute((isset($context["prev_post"]) ? $context["prev_post"] : null), "href", array());
                echo "\" class=\"media\">
                                ";
                // line 90
                if ($this->getAttribute((isset($context["prev_post"]) ? $context["prev_post"] : null), "thumb", array())) {
                    // line 91
                    echo "                                    <div class=\"media-left\">
                                         <img class=\"media-object\"  src=\"";
                    // line 92
                    echo $this->getAttribute((isset($context["prev_post"]) ? $context["prev_post"] : null), "thumb", array());
                    echo "\" data-holder-rendered=\"true\">
                                    </div>
                                ";
                }
                // line 95
                echo "                                <div class=\"media-body\">
                                    <div class=\"h4 media-heading\">";
                // line 96
                echo $this->getAttribute((isset($context["prev_post"]) ? $context["prev_post"] : null), "text", array());
                echo "</div>
                                    <div class=\"media-body\">";
                // line 97
                echo $this->getAttribute((isset($context["prev_post"]) ? $context["prev_post"] : null), "short_description", array());
                echo "</div>
                                </div>
                            </a>
                            ";
                // line 101
                echo "                        ";
            }
            // line 102
            echo "                    </div>
                    <div class=\"col-md-6 post-nav-right\">
                        ";
            // line 104
            if ((isset($context["next_post"]) ? $context["next_post"] : null)) {
                // line 105
                echo "                            <a href=\"";
                echo $this->getAttribute((isset($context["next_post"]) ? $context["next_post"] : null), "href", array());
                echo "\" class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"h4 media-heading\">";
                // line 107
                echo $this->getAttribute((isset($context["next_post"]) ? $context["next_post"] : null), "text", array());
                echo "</div>
                                    <div class=\"media-body\">";
                // line 108
                echo $this->getAttribute((isset($context["next_post"]) ? $context["next_post"] : null), "short_description", array());
                echo "</div>
                                </div>
                                ";
                // line 110
                if ($this->getAttribute((isset($context["next_post"]) ? $context["next_post"] : null), "thumb", array())) {
                    // line 111
                    echo "                                    <div class=\"media-right\">
                                         <img class=\"media-object\" src=\"";
                    // line 112
                    echo $this->getAttribute((isset($context["next_post"]) ? $context["next_post"] : null), "thumb", array());
                    echo "\" data-holder-rendered=\"true\">
                                    </div>
                                ";
                }
                // line 115
                echo "                            </a>
                            ";
                // line 117
                echo "                        ";
            }
            // line 118
            echo "                    </div>
                </div>
                ";
        }
        // line 121
        echo "     

                ";
        // line 123
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post", array()), "author_display", array())) {
            // line 124
            echo "                <div class=\"bm-author\">
                    <div class=\"author-image\">
                        <a href=\"";
            // line 126
            echo (isset($context["author_link"]) ? $context["author_link"] : null);
            echo "\"><img src=\"";
            echo (isset($context["author_image"]) ? $context["author_image"] : null);
            echo "\" class=\"img-responsive\" /></a>
                    </div>
                    <div class=\"author-body\">
                        <a href=\"";
            // line 129
            echo (isset($context["author_link"]) ? $context["author_link"] : null);
            echo "\"><div class=\"h4 author-name\">";
            echo (isset($context["author_name"]) ? $context["author_name"] : null);
            echo "</div></a>
                        <div class=\"author-description\">";
            // line 130
            echo (isset($context["author_description"]) ? $context["author_description"] : null);
            echo "</div>
                        <a href=\"";
            // line 131
            echo (isset($context["author_link"]) ? $context["author_link"] : null);
            echo "\" class=\"read-more\">";
            echo (isset($context["text_read_more"]) ? $context["text_read_more"] : null);
            echo "</a>
                    </div>
                </div>
                ";
        }
        // line 135
        echo "
                ";
        // line 136
        if ((isset($context["review_display"]) ? $context["review_display"] : null)) {
            // line 137
            echo "                    ";
            echo (isset($context["review"]) ? $context["review"] : null);
            echo "
                ";
        }
        // line 139
        echo "            </div>
        </article>
        <script>
        \$(function(){
            \$('.popup').magnificPopup({
                type:'image',
                gallery: {
                    enabled:true
                }
            });
        })
        </script>
    ";
        // line 151
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_layout_close"), "default/template/d_blog_module/post.twig", 151)->display($context);
        // line 152
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/d_blog_module/post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 152,  406 => 151,  392 => 139,  386 => 137,  384 => 136,  381 => 135,  372 => 131,  368 => 130,  362 => 129,  354 => 126,  350 => 124,  348 => 123,  344 => 121,  339 => 118,  336 => 117,  333 => 115,  327 => 112,  324 => 111,  322 => 110,  317 => 108,  313 => 107,  307 => 105,  305 => 104,  301 => 102,  298 => 101,  292 => 97,  288 => 96,  285 => 95,  279 => 92,  276 => 91,  274 => 90,  269 => 89,  267 => 88,  263 => 86,  261 => 85,  257 => 83,  253 => 81,  242 => 79,  238 => 78,  234 => 77,  231 => 76,  229 => 75,  226 => 74,  222 => 72,  212 => 68,  207 => 66,  204 => 65,  200 => 64,  197 => 63,  195 => 62,  191 => 61,  187 => 59,  183 => 57,  180 => 56,  170 => 54,  160 => 51,  153 => 50,  150 => 49,  148 => 48,  145 => 47,  143 => 46,  138 => 43,  130 => 40,  124 => 39,  120 => 38,  115 => 37,  112 => 36,  106 => 33,  102 => 32,  97 => 31,  95 => 30,  92 => 29,  80 => 21,  78 => 20,  71 => 17,  67 => 15,  56 => 13,  52 => 12,  49 => 11,  46 => 10,  38 => 9,  34 => 7,  31 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{header}}*/
/* <style>*/
/*     {{custom_style}}*/
/* </style>*/
/* {% include template('partial/d_breadcrumb') %}*/
/*     {% include template('partial/d_layout_open') %}*/
/*         <article class="bm">*/
/*             <div class="heading bm-post-info clearfix">*/
/*                 {% if edit %}<div class="btn-group btn-group-xs btn-edit" ><a class="btn btn-default " href="{{edit}}" target="_blank"><i class="fa fa-pencil"></i> {{text_edit}}</a></div>{% endif %}*/
/*                 {% if setting.post.category_label_display %}*/
/*                     <ul class="category list-unstyled">*/
/*                     {% for category in categories %}*/
/*                         <li><a href="{{category.href}}">{{category.title}}</a></li>*/
/*                     {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*                 <h1 class="h1 title">{{heading_title}}</h1>*/
/*                 <span class="title-divider"></span>*/
/*                 <div class="title-information">*/
/*                     {% if setting.post.rating_display %}*/
/*                     <div class="rating rating-{{rating}}">*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                     <div class="details">*/
/*                         {% if setting.post.author_display %}*/
/*                             {{text_posted_by}}*/
/*                             <a href="{{author_link}}" rel="bookmark">*/
/*                                 {{author}}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                         {% if setting.post.date_display %}*/
/*                             {{text_on}}*/
/*                             <a href="{{date_published_link}}" rel="bookmark">*/
/*                                 <time class="entry-date published" datetime="{{date_published_utc}}">{{date_published}}</time>*/
/*                                 <time class="updated hidden" datetime="{{date_modified_utc}}">{{date_modified}}</time>*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 {% if (thumb or popup) %}*/
/*                     <div class="image">*/
/*                     {% if thumb %}*/
/*                         {% if popup %}*/
/*                         <a class="popup" href="{{popup}}" title="{{heading_title}}">*/
/*                             <img src="{{thumb}}" title="{{image_title}}" alt="{{image_alt}}" class="img-responsive" />*/
/*                         </a>*/
/*                         {% else %}*/
/*                              <img src="{{thumb}}" title="{{image_title}}" alt="{{image_alt}}" class="img-responsive" />*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>            */
/*             <div class="content bm-post-content">*/
/*                 <div id="description" class="description">{{description}}</div>               */
/*                 {% if post_videos %}*/
/*                     <div class="bm-videos">*/
/*                         {% for post_video in post_videos %}*/
/*                             <div class="bm-video">*/
/*                                 <h2>{{post_video.text}}</h2>*/
/*                                 <div style="text-align: center;">*/
/*                                     {{post_video.code}}*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if tags %}*/
/*                 <div class="tag">*/
/*                     <span class="tag-title">{{text_tags}}</span>*/
/*                     {% for tag in tags %}*/
/*                         <a href="{{tag.href}}">{{tag.text}}</a>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/* */
/*                 {% if setting.post.nav_display and (prev_post or next_post) %}*/
/*                 <div class="row post-nav">*/
/*                     <div class="col-md-6 post-nav-left">*/
/*                         {% if prev_post %}*/
/*                             <a href="{{prev_post.href}}" class="media">*/
/*                                 {% if (prev_post.thumb) %}*/
/*                                     <div class="media-left">*/
/*                                          <img class="media-object"  src="{{prev_post.thumb}}" data-holder-rendered="true">*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <div class="media-body">*/
/*                                     <div class="h4 media-heading">{{prev_post.text}}</div>*/
/*                                     <div class="media-body">{{prev_post.short_description}}</div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             {# <a class="btn btn-default" href="{{prev_post.href}}">⟵ {{prev_post.text}}</a> #}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="col-md-6 post-nav-right">*/
/*                         {% if next_post %}*/
/*                             <a href="{{next_post.href}}" class="media">*/
/*                                 <div class="media-body">*/
/*                                     <div class="h4 media-heading">{{next_post.text}}</div>*/
/*                                     <div class="media-body">{{next_post.short_description}}</div>*/
/*                                 </div>*/
/*                                 {% if (next_post.thumb) %}*/
/*                                     <div class="media-right">*/
/*                                          <img class="media-object" src="{{next_post.thumb}}" data-holder-rendered="true">*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             </a>*/
/*                             {# <a class="btn btn-default pull-right" href="{{next_post.href}}">{{next_post.text}} ⟶</a> #}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*      */
/* */
/*                 {% if setting.post.author_display %}*/
/*                 <div class="bm-author">*/
/*                     <div class="author-image">*/
/*                         <a href="{{author_link}}"><img src="{{author_image}}" class="img-responsive" /></a>*/
/*                     </div>*/
/*                     <div class="author-body">*/
/*                         <a href="{{author_link}}"><div class="h4 author-name">{{author_name}}</div></a>*/
/*                         <div class="author-description">{{author_description}}</div>*/
/*                         <a href="{{author_link}}" class="read-more">{{text_read_more}}</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if review_display %}*/
/*                     {{review}}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </article>*/
/*         <script>*/
/*         $(function(){*/
/*             $('.popup').magnificPopup({*/
/*                 type:'image',*/
/*                 gallery: {*/
/*                     enabled:true*/
/*                 }*/
/*             });*/
/*         })*/
/*         </script>*/
/*     {% include template('partial/d_layout_close') %}*/
/* {{footer}}*/
