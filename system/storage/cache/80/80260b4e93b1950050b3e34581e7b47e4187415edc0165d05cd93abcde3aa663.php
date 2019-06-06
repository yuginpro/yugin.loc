<?php

/* default/template/d_blog_module/review_thumb.twig */
class __TwigTemplate_d120ff66438afee5c606e5c21f5cb80107677c5a58eabab19571a5f964ecd280 extends Twig_Template
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
        echo "<div class=\"media review review-";
        echo $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "review_id", array());
        echo "\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review_thumb", array()), "rating_display", array())) {
            // line 3
            echo "    <div class=\"rating rating-";
            echo $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "rating", array());
            echo "\">
        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
    </div>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review_thumb", array()), "image_display", array())) {
            // line 13
            echo "    <div class=\"media-left\">
        <div class=\"image\">
            <img class=\"media-object\" src=\"";
            // line 15
            echo $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "author", array());
            echo "\"  style=\"max-width:";
            echo $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review_thumb", array()), "image_width", array());
            echo "px\">
            ";
            // line 16
            if ((isset($context["provider"]) ? $context["provider"] : null)) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "provider", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                    // line 18
                    echo "                <div id=\"d_social_login\">
                    <a id=\"dsl_";
                    // line 19
                    echo $this->getAttribute($context["provider"], "id", array());
                    echo "_button\" class=\"dsl-button dsl-button-icons\"><span class=\"l-side\"><span class=\"dsl-icon ";
                    echo $this->getAttribute($context["provider"], "icon", array());
                    echo "\"></span></span></a>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        </div>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"media-body\">
        <div class=\"btn-group btn-group-xs pull-right\" role=\"group\" aria-label=\"Extra-small button group\">
            <button type=\"button\" class=\"btn btn-default reply-to\" data-review-id=\"";
        // line 28
        echo (isset($context["review_id"]) ? $context["review_id"] : null);
        echo "\" data-author=\"";
        echo (isset($context["author"]) ? $context["author"] : null);
        echo "\" ><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["text_reply_to"]) ? $context["text_reply_to"] : null);
        echo "</button>
            ";
        // line 29
        if ((isset($context["delete"]) ? $context["delete"] : null)) {
            // line 30
            echo "                <button type=\"button\" class=\"btn btn-default delete\"  data-review-id=\"";
            echo (isset($context["review_id"]) ? $context["review_id"] : null);
            echo "\" ><i class=\"fa fa-trash-o\"></i> ";
            echo (isset($context["text_delete"]) ? $context["text_delete"] : null);
            echo "</button>
            ";
        }
        // line 32
        echo "            ";
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            // line 33
            echo "                <a type=\"button\" class=\"btn btn-default edit\" href=\"";
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-pencil\"></i> ";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a>
            ";
        }
        // line 35
        echo "        </div>

        <div class=\"media-heading\">
            <div class=\"h4\">";
        // line 38
        echo $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "author", array());
        echo "</div>
            ";
        // line 39
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review_thumb", array()), "date_display", array())) {
            // line 40
            echo "                <span class=\"date-added\">";
            echo $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "date_added", array());
            echo "</span>
            ";
        }
        // line 42
        echo "        </div>
        <p class=\"description\">";
        // line 43
        echo $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "description", array());
        echo "</p>
        ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review_thumb", array()), "image_user_display", array())) {
            // line 45
            echo "            ";
            if ($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "images", array())) {
                // line 46
                echo "                <div class=\"images\">

                    ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 49
                    echo "                        ";
                    if (($this->getAttribute($context["image"], "thumb", array()) || $this->getAttribute($context["image"], "popup", array()))) {
                        // line 50
                        echo "                           ";
                        if ($this->getAttribute($context["image"], "thumb", array())) {
                            // line 51
                            echo "                                ";
                            if ($this->getAttribute($context["image"], "popup", array())) {
                                // line 52
                                echo "                                    <a class=\"thumbnail ";
                                echo $this->getAttribute($context["image"], "popup_name", array());
                                echo "\" href=\"";
                                echo $this->getAttribute($context["image"], "popup", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["image"], "heading_title", array());
                                echo "\">
                                        <img src=\"";
                                // line 53
                                echo $this->getAttribute($context["image"], "thumb", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["image"], "heading_title", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["image"], "heading_title", array());
                                echo "\" />
                                    </a>
                                ";
                            } else {
                                // line 56
                                echo "                                    <img src=\"";
                                echo $this->getAttribute($context["image"], "thumb", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["image"], "heading_title", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["image"], "heading_title", array());
                                echo "\" />
                                ";
                            }
                            // line 58
                            echo "                            ";
                        }
                        // line 59
                        echo "                        ";
                    }
                    // line 60
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                </div>
            ";
            }
            // line 63
            echo "        ";
        }
        // line 64
        echo "        <div class=\"replies\">
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["replies"]) ? $context["replies"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 66
            echo "            ";
            $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("d_blog_module/review_thumb"), "default/template/d_blog_module/review_thumb.twig", 66)->display(array_merge($context, $context["review"]));
            // line 67
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/d_blog_module/review_thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 68,  234 => 67,  231 => 66,  214 => 65,  211 => 64,  208 => 63,  204 => 61,  198 => 60,  195 => 59,  192 => 58,  182 => 56,  172 => 53,  163 => 52,  160 => 51,  157 => 50,  154 => 49,  150 => 48,  146 => 46,  143 => 45,  141 => 44,  137 => 43,  134 => 42,  128 => 40,  126 => 39,  122 => 38,  117 => 35,  109 => 33,  106 => 32,  98 => 30,  96 => 29,  88 => 28,  84 => 26,  79 => 23,  76 => 22,  65 => 19,  62 => 18,  57 => 17,  55 => 16,  47 => 15,  43 => 13,  41 => 12,  38 => 11,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="media review review-{{review.review_id}}">*/
/*     {% if setting.review_thumb.rating_display %}*/
/*     <div class="rating rating-{{review.rating}}">*/
/*         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if setting.review_thumb.image_display %}*/
/*     <div class="media-left">*/
/*         <div class="image">*/
/*             <img class="media-object" src="{{review.image}}" alt="{{review.author}}"  style="max-width:{{setting.review_thumb.image_width}}px">*/
/*             {% if provider %}*/
/*                 {% for provider in review.provider %}*/
/*                 <div id="d_social_login">*/
/*                     <a id="dsl_{{provider.id}}_button" class="dsl-button dsl-button-icons"><span class="l-side"><span class="dsl-icon {{provider.icon}}"></span></span></a>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="media-body">*/
/*         <div class="btn-group btn-group-xs pull-right" role="group" aria-label="Extra-small button group">*/
/*             <button type="button" class="btn btn-default reply-to" data-review-id="{{review_id}}" data-author="{{author}}" ><i class="fa fa-reply"></i> {{text_reply_to}}</button>*/
/*             {% if delete %}*/
/*                 <button type="button" class="btn btn-default delete"  data-review-id="{{review_id}}" ><i class="fa fa-trash-o"></i> {{text_delete}}</button>*/
/*             {% endif %}*/
/*             {% if edit %}*/
/*                 <a type="button" class="btn btn-default edit" href="{{edit}}" target="_blank"><i class="fa fa-pencil"></i> {{text_edit}}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="media-heading">*/
/*             <div class="h4">{{review.author}}</div>*/
/*             {% if setting.review_thumb.date_display %}*/
/*                 <span class="date-added">{{review.date_added}}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*         <p class="description">{{review.description}}</p>*/
/*         {% if setting.review_thumb.image_user_display %}*/
/*             {% if review.images %}*/
/*                 <div class="images">*/
/* */
/*                     {% for image in review.images %}*/
/*                         {% if (image.thumb or image.popup) %}*/
/*                            {% if image.thumb %}*/
/*                                 {% if image.popup %}*/
/*                                     <a class="thumbnail {{image.popup_name}}" href="{{image.popup}}" title="{{image.heading_title}}">*/
/*                                         <img src="{{image.thumb}}" title="{{image.heading_title}}" alt="{{image.heading_title}}" />*/
/*                                     </a>*/
/*                                 {% else %}*/
/*                                     <img src="{{image.thumb}}" title="{{image.heading_title}}" alt="{{image.heading_title}}" />*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <div class="replies">*/
/*         {% for review in replies %}*/
/*             {% include template('d_blog_module/review_thumb') with review %}*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
