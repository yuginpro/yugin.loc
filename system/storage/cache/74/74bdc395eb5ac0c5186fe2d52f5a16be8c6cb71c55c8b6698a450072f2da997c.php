<?php

/* default/template/d_blog_module/review.twig */
class __TwigTemplate_874444a36a5cb903b5c202201d4ebd8b109b9bedfc88fdc99f369b0d7423abb5 extends Twig_Template
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
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 2
            echo "<div class=\"bm-reviews\">
    <div class=\"h2\"><span>";
            // line 3
            echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
            echo "</span></div>
    <div id=\"reviews\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
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
                // line 6
                echo "            ";
                $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("d_blog_module/review_thumb"), "default/template/d_blog_module/review.twig", 6)->display(array_merge($context, $context["review"]));
                // line 7
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
            // line 8
            echo "        <div class=\"row bm-pagination\">
            <div class=\"col-sm-6 text-left\">";
            // line 9
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right\">";
            // line 10
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
    </div>
</div>
";
        }
        // line 15
        echo "
<form id=\"form_review\" class=\"form-horizontal form-review\">
    <div class=\"h2 text-write\"><span>";
        // line 17
        echo (isset($context["text_write"]) ? $context["text_write"] : null);
        echo "</span></div>
    <div class=\"h2 text-reply hidden\"><span>";
        // line 18
        echo (isset($context["text_reply"]) ? $context["text_reply"] : null);
        echo "</span></div>
    <div id=\"review_notification\"></div>
    ";
        // line 20
        if ((isset($context["review_write"]) ? $context["review_write"] : null)) {
            // line 21
            echo "
        <div class=\"form-group\">
            <div id=\"guest_info\" class=\"";
            // line 23
            if ((isset($context["customer"]) ? $context["customer"] : null)) {
                echo "hidden";
            }
            echo "\">
                <div class=\"col-sm-4 required\" id=\"input_author\">
                    <label class=\"control-label\" for=\"review_author\">";
            // line 25
            echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
            echo "</label>
                    <input type=\"text\" name=\"author\" value=\"\" id=\"review_author\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-4 required\" id=\"input_email\">
                    <label class=\"control-label\" for=\"review_email\">";
            // line 29
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
                    <input type=\"text\" name=\"email\" value=\"\" id=\"review_email\" class=\"form-control\" />
                </div>
            </div>
            ";
            // line 33
            if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post", array()), "rating_display", array())) {
                // line 34
                echo "            <div class=\"col-sm-4 required input-rating\" id=\"input_rating\">
                <label class=\"control-label\">";
                // line 35
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                <div class=\"rating\">
                    <input type=\"hidden\" id=\"review_rating\" name=\"rating\" data-start=\"0\" data-stop=\"5\" data-filled=\"fa fa-star fa-stack-2x, fa fa-star-o fa-stack-2x\" data-empty=\"fa fa-star-o fa-2x\" >
                </div>
            </div>
            ";
            }
            // line 41
            echo "

            <div class=\"col-sm-4 required hidden\" id=\"input_cancel_reply\">
                <label class=\"control-label\">";
            // line 44
            echo (isset($context["entry_reply_to"]) ? $context["entry_reply_to"] : null);
            echo " </label>
                <div class=\"input-group\">
                  <div class=\"input-group-addon name\"></div>
                  <span class=\"input-group-btn\">
                    <a class=\"btn btn-danger cancel-reply\"><i class=\"fa fa-trash-o\"></i></a>
                  </span>
                </div>
            </div>
        </div>
        <div class=\"form-group required\">
            <div class=\"col-sm-12\">
                <label class=\"control-label\" for=\"input-review\">";
            // line 55
            echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
            echo "</label>
                <textarea name=\"description\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                <div class=\"help-block\">";
            // line 57
            echo (isset($context["text_note"]) ? $context["text_note"] : null);
            echo "</div>
            </div>
        </div>
        ";
            // line 61
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review", array()), "image_user_display", array())) {
                // line 62
                echo "        <div class=\"form-group required\">
            <div class=\"col-sm-12\">
                <input id=\"fileupload\" name=\"fileupload[]\" type=\"file\" multiple class=\"file-loading\" accept=\"image/*\">
            </div>
        </div>
        ";
            }
            // line 68
            echo "        ";
            if ((isset($context["captcha"]) ? $context["captcha"] : null)) {
                // line 69
                echo "            <div id=\"captcha\">
                ";
                // line 70
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
            </div>
        ";
            }
            // line 73
            echo "        <div class=\"form-group\">
            <div class=\"col-xs-8\">
                ";
            // line 75
            if ((isset($context["customer"]) ? $context["customer"] : null)) {
                // line 76
                echo "                    ";
                if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review", array()), "customer_display", array())) {
                    // line 77
                    echo "                    <div id=\"customer_info\" class=\"customer-info clearfix\">
                        <a href=\"#\" class=\"image\">
                            <img class=\"img-responsive\" src=\"";
                    // line 79
                    echo (isset($context["customer_image"]) ? $context["customer_image"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["author"]) ? $context["author"] : null);
                    echo "\">
                        </a>
                        <a href=\"#\" class=\"name\">
                            ";
                    // line 82
                    echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                    echo "
                        </a>
                    </div>
                    ";
                }
                // line 86
                echo "                ";
            } else {
                // line 87
                echo "                    ";
                echo (isset($context["d_social_login"]) ? $context["d_social_login"] : null);
                echo "
                ";
            }
            // line 89
            echo "            </div>
            <div class=\"col-xs-4\">
                <div class=\"buttons clearfix\">
                    <div class=\"pull-right\">
                        <button type=\"button\" id=\"button_review\" data-loading-text=\"";
            // line 93
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</button>
                    </div>
                </div>
            </div>
        </div>
        ";
            // line 98
            if ((isset($context["select_from"]) ? $context["select_from"] : null)) {
                // line 99
                echo "        <div class=\"form-group\">
            <div class=\"col-sm-6 required\" id=\"select_account\">
                <label class=\"control-label \" for=\"input-review\">";
                // line 101
                echo (isset($context["entry_mode"]) ? $context["entry_mode"] : null);
                echo "</label>
                <div class=\"input-group btn-group\" data-toggle=\"buttons\">

                    <label class=\"btn btn-primary ";
                // line 104
                if (((isset($context["from"]) ? $context["from"] : null) == "user")) {
                    echo "active";
                }
                echo " ";
                if ( !(isset($context["select_from_user"]) ? $context["select_from_user"] : null)) {
                    echo "hidden";
                }
                echo "\">
                        <input type=\"radio\" name=\"from\" ";
                // line 105
                if (((isset($context["from"]) ? $context["from"] : null) == "user")) {
                    echo "checked=\"checked\"";
                }
                echo " value=\"user\"/>
                           ";
                // line 106
                echo (isset($context["text_author"]) ? $context["text_author"] : null);
                echo "
                    </label>
                    <label class=\"btn btn-primary ";
                // line 108
                if (((isset($context["from"]) ? $context["from"] : null) == "customer")) {
                    echo "active";
                }
                echo " ";
                if ( !(isset($context["select_from_customer"]) ? $context["select_from_customer"] : null)) {
                    echo "hidden";
                }
                echo "\">
                        <input type=\"radio\" name=\"from\" ";
                // line 109
                if (((isset($context["from"]) ? $context["from"] : null) == "customer")) {
                    echo "checked=\"checked\"";
                }
                echo " value=\"customer\"/>
                           ";
                // line 110
                echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
                echo "
                    </label>
                    <label class=\"btn btn-primary ";
                // line 112
                if (((isset($context["from"]) ? $context["from"] : null) == "guest")) {
                    echo "active";
                }
                echo " \">
                        <input type=\"radio\" name=\"from\" ";
                // line 113
                if (((isset($context["from"]) ? $context["from"] : null) == "guest")) {
                    echo "checked=\"checked\"";
                }
                echo " value=\"guest\"/>
                           ";
                // line 114
                echo (isset($context["text_guest"]) ? $context["text_guest"] : null);
                echo "
                    </label>
                </div>
            </div>
        </div>
        ";
            }
            // line 120
            echo "        <div class=\"hidden\">";
            echo (isset($context["d_social_login"]) ? $context["d_social_login"] : null);
            echo "</div>
    ";
        } else {
            // line 122
            echo "        <div class=\"form-group\"><div class=\"col-md-12\"><p>";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</p><p>";
            echo (isset($context["d_social_login"]) ? $context["d_social_login"] : null);
            echo "</p></div></div>
    ";
        }
        // line 124
        echo "    <input id=\"post_id\" type=\"hidden\" name=\"post_id\" type=\"text\" value=\"";
        echo (isset($context["post_id"]) ? $context["post_id"] : null);
        echo "\">
    <input id=\"reply_to_review_id\" type=\"hidden\" name=\"reply_to_review_id\" type=\"text\">
</form>

<script>
\$(function(){
    var imageCount=0;
    bm.review = \$.extend(true, {}, Review);
    bm.review.init({
        form: \$(\"#form_review\"),
        reviews: \$(\"#reviews\")
    })

    \$(document).on('click', '#button_review', function() {
        bm.review.write();
    });

    \$(document).on('click', '.review .reply-to', function() {
        bm.review.reply(\$(this).data('review-id'), \$(this).data('author'));
    });

    \$(document).on('click', '.cancel-reply', function(e) {
        bm.review.cancelReply();
        e.preventDefault();
    });
    \$(document).on('click', '.review .delete', function(e) {
        bm.review.delete(\$(this).data('review-id'));
    });
    \$(document).on('change', 'input[name=from]', function(e) {
        bm.review.mode();
    });    

    var countImage = 0;
    \$(\"#fileupload\").fileinput({
        uploadUrl: 'index.php?route=extension/d_blog_module/review/uploadFile',
        allowedFileExtensions: [\"jpg\", \"png\", \"gif\"],
        maxImageWidth: ";
        // line 160
        echo $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review", array()), "image_upload_width", array());
        echo ",
        maxImageHeight: ";
        // line 161
        echo $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review", array()), "image_upload_height", array());
        echo ",
        maxFileCount: ";
        // line 162
        echo $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "review", array()), "image_limit", array());
        echo ",
    }).on('filesuccessremove', function(event, id) {
        var code =  \$('#'+id+' > input[type=hidden]').val();
        \$.ajax({
            url: 'index.php?route=extension/d_blog_module/review/deleteFile',
            type: 'post',
            data: 'code='+code,
            dataType: 'json',
            success: function() {
                if(json['success'])
                {
                    console.log(json['success']);
                }
            },
        });
    }).on('fileuploaded', function(event, data, previewId, index) {
        var d = new Date();
        var n = d.getTime();
        var html = '<input type=\"hidden\" name=\"images['+countImage+']\" value=\"'+data.response.code+'\">';
        \$('#'+previewId).append(html);
        countImage++;
    });

    \$('.review [class^=\\'thumbnail\\']').magnificPopup({
        type:'image',
        gallery: {
            enabled:true
        }
    });
})
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_blog_module/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 162,  371 => 161,  367 => 160,  327 => 124,  319 => 122,  313 => 120,  304 => 114,  298 => 113,  292 => 112,  287 => 110,  281 => 109,  271 => 108,  266 => 106,  260 => 105,  250 => 104,  244 => 101,  240 => 99,  238 => 98,  228 => 93,  222 => 89,  216 => 87,  213 => 86,  206 => 82,  198 => 79,  194 => 77,  191 => 76,  189 => 75,  185 => 73,  179 => 70,  176 => 69,  173 => 68,  165 => 62,  162 => 61,  156 => 57,  151 => 55,  137 => 44,  132 => 41,  123 => 35,  120 => 34,  118 => 33,  111 => 29,  104 => 25,  97 => 23,  93 => 21,  91 => 20,  86 => 18,  82 => 17,  78 => 15,  70 => 10,  66 => 9,  63 => 8,  49 => 7,  46 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if reviews %}*/
/* <div class="bm-reviews">*/
/*     <div class="h2"><span>{{text_reviews}}</span></div>*/
/*     <div id="reviews">*/
/*         {% for review in reviews %}*/
/*             {% include template('d_blog_module/review_thumb') with review %}*/
/*         {% endfor %}*/
/*         <div class="row bm-pagination">*/
/*             <div class="col-sm-6 text-left">{{pagination}}</div>*/
/*             <div class="col-sm-6 text-right">{{results}}</div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* <form id="form_review" class="form-horizontal form-review">*/
/*     <div class="h2 text-write"><span>{{text_write}}</span></div>*/
/*     <div class="h2 text-reply hidden"><span>{{text_reply}}</span></div>*/
/*     <div id="review_notification"></div>*/
/*     {% if review_write %}*/
/* */
/*         <div class="form-group">*/
/*             <div id="guest_info" class="{% if customer %}hidden{% endif %}">*/
/*                 <div class="col-sm-4 required" id="input_author">*/
/*                     <label class="control-label" for="review_author">{{entry_author}}</label>*/
/*                     <input type="text" name="author" value="" id="review_author" class="form-control" />*/
/*                 </div>*/
/*                 <div class="col-sm-4 required" id="input_email">*/
/*                     <label class="control-label" for="review_email">{{entry_email}}</label>*/
/*                     <input type="text" name="email" value="" id="review_email" class="form-control" />*/
/*                 </div>*/
/*             </div>*/
/*             {% if setting.post.rating_display %}*/
/*             <div class="col-sm-4 required input-rating" id="input_rating">*/
/*                 <label class="control-label">{{entry_rating}}</label>*/
/*                 <div class="rating">*/
/*                     <input type="hidden" id="review_rating" name="rating" data-start="0" data-stop="5" data-filled="fa fa-star fa-stack-2x, fa fa-star-o fa-stack-2x" data-empty="fa fa-star-o fa-2x" >*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/* */
/*             <div class="col-sm-4 required hidden" id="input_cancel_reply">*/
/*                 <label class="control-label">{{entry_reply_to}} </label>*/
/*                 <div class="input-group">*/
/*                   <div class="input-group-addon name"></div>*/
/*                   <span class="input-group-btn">*/
/*                     <a class="btn btn-danger cancel-reply"><i class="fa fa-trash-o"></i></a>*/
/*                   </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*             <div class="col-sm-12">*/
/*                 <label class="control-label" for="input-review">{{entry_review}}</label>*/
/*                 <textarea name="description" rows="5" id="input-review" class="form-control"></textarea>*/
/*                 <div class="help-block">{{text_note}}</div>*/
/*             </div>*/
/*         </div>*/
/*         {# <input type="hidden" name="mode" value="{{mode}}"/> #}*/
/*         {% if setting.review.image_user_display %}*/
/*         <div class="form-group required">*/
/*             <div class="col-sm-12">*/
/*                 <input id="fileupload" name="fileupload[]" type="file" multiple class="file-loading" accept="image/*">*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if captcha %}*/
/*             <div id="captcha">*/
/*                 {{captcha}}*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="form-group">*/
/*             <div class="col-xs-8">*/
/*                 {% if customer %}*/
/*                     {% if setting.review.customer_display %}*/
/*                     <div id="customer_info" class="customer-info clearfix">*/
/*                         <a href="#" class="image">*/
/*                             <img class="img-responsive" src="{{customer_image}}" alt="{{author}}">*/
/*                         </a>*/
/*                         <a href="#" class="name">*/
/*                             {{customer_name}}*/
/*                         </a>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     {{d_social_login}}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="col-xs-4">*/
/*                 <div class="buttons clearfix">*/
/*                     <div class="pull-right">*/
/*                         <button type="button" id="button_review" data-loading-text="{{text_loading}}" class="btn btn-primary">{{button_continue}}</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% if select_from %}*/
/*         <div class="form-group">*/
/*             <div class="col-sm-6 required" id="select_account">*/
/*                 <label class="control-label " for="input-review">{{entry_mode}}</label>*/
/*                 <div class="input-group btn-group" data-toggle="buttons">*/
/* */
/*                     <label class="btn btn-primary {% if (from == 'user') %}active{% endif %} {% if not select_from_user %}hidden{% endif %}">*/
/*                         <input type="radio" name="from" {% if (from == 'user') %}checked="checked"{% endif %} value="user"/>*/
/*                            {{text_author}}*/
/*                     </label>*/
/*                     <label class="btn btn-primary {% if (from == 'customer') %}active{% endif %} {% if not select_from_customer %}hidden{% endif %}">*/
/*                         <input type="radio" name="from" {% if (from == 'customer') %}checked="checked"{% endif %} value="customer"/>*/
/*                            {{text_customer}}*/
/*                     </label>*/
/*                     <label class="btn btn-primary {% if from == 'guest' %}active{% endif %} ">*/
/*                         <input type="radio" name="from" {% if (from == 'guest') %}checked="checked"{% endif %} value="guest"/>*/
/*                            {{text_guest}}*/
/*                     </label>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="hidden">{{d_social_login}}</div>*/
/*     {% else %}*/
/*         <div class="form-group"><div class="col-md-12"><p>{{text_login}}</p><p>{{d_social_login}}</p></div></div>*/
/*     {% endif %}*/
/*     <input id="post_id" type="hidden" name="post_id" type="text" value="{{post_id}}">*/
/*     <input id="reply_to_review_id" type="hidden" name="reply_to_review_id" type="text">*/
/* </form>*/
/* */
/* <script>*/
/* $(function(){*/
/*     var imageCount=0;*/
/*     bm.review = $.extend(true, {}, Review);*/
/*     bm.review.init({*/
/*         form: $("#form_review"),*/
/*         reviews: $("#reviews")*/
/*     })*/
/* */
/*     $(document).on('click', '#button_review', function() {*/
/*         bm.review.write();*/
/*     });*/
/* */
/*     $(document).on('click', '.review .reply-to', function() {*/
/*         bm.review.reply($(this).data('review-id'), $(this).data('author'));*/
/*     });*/
/* */
/*     $(document).on('click', '.cancel-reply', function(e) {*/
/*         bm.review.cancelReply();*/
/*         e.preventDefault();*/
/*     });*/
/*     $(document).on('click', '.review .delete', function(e) {*/
/*         bm.review.delete($(this).data('review-id'));*/
/*     });*/
/*     $(document).on('change', 'input[name=from]', function(e) {*/
/*         bm.review.mode();*/
/*     });    */
/* */
/*     var countImage = 0;*/
/*     $("#fileupload").fileinput({*/
/*         uploadUrl: 'index.php?route=extension/d_blog_module/review/uploadFile',*/
/*         allowedFileExtensions: ["jpg", "png", "gif"],*/
/*         maxImageWidth: {{setting.review.image_upload_width}},*/
/*         maxImageHeight: {{setting.review.image_upload_height}},*/
/*         maxFileCount: {{setting.review.image_limit}},*/
/*     }).on('filesuccessremove', function(event, id) {*/
/*         var code =  $('#'+id+' > input[type=hidden]').val();*/
/*         $.ajax({*/
/*             url: 'index.php?route=extension/d_blog_module/review/deleteFile',*/
/*             type: 'post',*/
/*             data: 'code='+code,*/
/*             dataType: 'json',*/
/*             success: function() {*/
/*                 if(json['success'])*/
/*                 {*/
/*                     console.log(json['success']);*/
/*                 }*/
/*             },*/
/*         });*/
/*     }).on('fileuploaded', function(event, data, previewId, index) {*/
/*         var d = new Date();*/
/*         var n = d.getTime();*/
/*         var html = '<input type="hidden" name="images['+countImage+']" value="'+data.response.code+'">';*/
/*         $('#'+previewId).append(html);*/
/*         countImage++;*/
/*     });*/
/* */
/*     $('.review [class^=\'thumbnail\']').magnificPopup({*/
/*         type:'image',*/
/*         gallery: {*/
/*             enabled:true*/
/*         }*/
/*     });*/
/* })*/
/* </script>*/
