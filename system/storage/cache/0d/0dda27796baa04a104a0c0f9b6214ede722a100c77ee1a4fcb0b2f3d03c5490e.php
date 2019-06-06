<?php

/* extension/d_blog_module/post_form.twig */
class __TwigTemplate_29b4a5075df47eb8850ce6e9044145a554e2bbce6cdd53881fc92c0b240cd094 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-post\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 23
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 28
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-post\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-related\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_related"]) ? $context["tab_related"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-youtube\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_youtube"]) ? $context["tab_youtube"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"";
            echo $this->getAttribute($context["language"], "flag", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "                                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 48
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"post_description[";
            // line 50
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][title]\" value=\"";
            echo (($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array(), "array")) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" id=\"input-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                                            <input type=\"hidden\" name=\"post_description[";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][user_id]\" value=\"";
            echo (((isset($context["user_id"]) ? $context["user_id"] : null)) ? ((isset($context["user_id"]) ? $context["user_id"] : null)) : (0));
            echo "\" id=\"get-user_id\" class=\"form-control\" />
                                            ";
            // line 52
            if ($this->getAttribute((isset($context["error_title"]) ? $context["error_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 53
                echo "                                            <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_title"]) ? $context["error_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                                            ";
            }
            // line 55
            echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-short-description";
            // line 58
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_short_description"]) ? $context["entry_short_description"] : null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 60
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][short_description]\" placeholder=\"";
            echo (isset($context["entry_short_description"]) ? $context["entry_short_description"] : null);
            echo "\" class=\"form-control\" id=\"input-short-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "short_description", array())) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 64
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" class=\"d_visual_designer summernote\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" data-toggle=\"summernote\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 70
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"post_description[";
            // line 72
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                                            ";
            // line 73
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 74
                echo "                                            <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                                            ";
            }
            // line 76
            echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 81
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 85
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 87
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 91
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"post_description[";
            // line 93
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\" data-role=\"tagsinput\" value=\"";
            echo (($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["post_description"]) ? $context["post_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\" id=\"input-tag";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 102
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 104
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                                    <input type=\"hidden\" name=\"image\" value=\"";
        // line 105
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
                                </div>
                            </div>
                            <div class=\"form-group ";
        // line 108
        echo (((isset($context["change_author"]) ? $context["change_author"] : null)) ? ("") : ("hidden"));
        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 109
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select class=\"form-control\" name=\"current_author\">
                                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 113
            echo "                                        ";
            if (($this->getAttribute($context["author"], "user_id", array()) == (isset($context["current_author"]) ? $context["current_author"] : null))) {
                // line 114
                echo "                                        <option selected=\"selected\" value=\"";
                echo $this->getAttribute($context["author"], "user_id", array());
                echo "\">";
                echo $this->getAttribute($context["author"], "name", array());
                echo "</option>
                                        ";
            } else {
                // line 116
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["author"], "user_id", array());
                echo "\">";
                echo $this->getAttribute($context["author"], "name", array());
                echo "</option>
                                        ";
            }
            // line 118
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-keyword\"><span data-toggle=\"tooltip\" title=\"";
        // line 123
        echo (isset($context["help_date_published"]) ? $context["help_date_published"] : null);
        echo "\">";
        echo (isset($context["entry_date_published"]) ? $context["entry_date_published"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_published\" value=\"";
        // line 126
        echo (((isset($context["date_published"]) ? $context["date_published"] : null)) ? ((isset($context["date_published"]) ? $context["date_published"] : null)) : (""));
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_published"]) ? $context["entry_date_published"] : null);
        echo "\" id=\"input-keyword\" class=\"form-control\" data-date-format=\"YYYY-MM-DD\"  />
                                        <span class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 134
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 137
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 138
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\">";
            // line 139
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        } else {
            // line 141
            echo "                                        <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 142
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        }
        // line 144
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-review-display\">";
        // line 148
        echo (isset($context["entry_review_display"]) ? $context["entry_review_display"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"review_display\" id=\"input-review-display\" class=\"form-control\">
                                        ";
        // line 151
        if (((isset($context["review_display"]) ? $context["review_display"] : null) == 0)) {
            // line 152
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                                        <option value=\"1\">";
            // line 153
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                        <option value=\"2\">";
            // line 154
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                        ";
        }
        // line 156
        echo "                                        ";
        if (((isset($context["review_display"]) ? $context["review_display"] : null) == 1)) {
            // line 157
            echo "                                        <option value=\"0\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 158
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                        <option value=\"2\">";
            // line 159
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                        ";
        }
        // line 161
        echo "                                        ";
        if (((isset($context["review_display"]) ? $context["review_display"] : null) == 2)) {
            // line 162
            echo "                                        <option value=\"0\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                                        <option value=\"1\">";
            // line 163
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 164
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                       ";
        }
        // line 166
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-images-review\">";
        // line 170
        echo (isset($context["entry_images_review"]) ? $context["entry_images_review"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"images_review\" id=\"input-images-review\" class=\"form-control\">
                                        ";
        // line 173
        if (((isset($context["images_review"]) ? $context["images_review"] : null) == 0)) {
            // line 174
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                                        <option value=\"1\">";
            // line 175
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                        <option value=\"2\">";
            // line 176
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                        ";
        }
        // line 178
        echo "                                        ";
        if (((isset($context["images_review"]) ? $context["images_review"] : null) == 1)) {
            // line 179
            echo "                                        <option value=\"0\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 180
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                        <option value=\"2\">";
            // line 181
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                        ";
        }
        // line 183
        echo "                                        ";
        if (((isset($context["images_review"]) ? $context["images_review"] : null) == 2)) {
            // line 184
            echo "                                        <option value=\"0\">";
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                                        <option value=\"1\">";
            // line 185
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 186
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                        ";
        }
        // line 188
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-youtube\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th style=\"width:15%;\">";
        // line 196
        echo (isset($context["text_youtube_url"]) ? $context["text_youtube_url"] : null);
        echo "</th>
                                        <th style=\"width:66%;\">";
        // line 197
        echo (isset($context["text_youtube_title"]) ? $context["text_youtube_title"] : null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 198
        echo (isset($context["text_youtube_width"]) ? $context["text_youtube_width"] : null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 199
        echo (isset($context["text_youtube_height"]) ? $context["text_youtube_height"] : null);
        echo "</th>
                                        <th style=\"width:6%;\">";
        // line 200
        echo (isset($context["text_youtube_sort_order"]) ? $context["text_youtube_sort_order"] : null);
        echo "</th>
                                        <th style=\"width:3%;\">";
        // line 201
        echo (isset($context["text_youtube_action"]) ? $context["text_youtube_action"] : null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody id=\"tbody\">
                                    ";
        // line 205
        if ((isset($context["post_videos"]) ? $context["post_videos"] : null)) {
            // line 206
            echo "                                    ";
            $context["video_row"] = 0;
            // line 207
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_videos"]) ? $context["post_videos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_video"]) {
                // line 208
                echo "                                    <tr id=\"video_row_";
                echo (isset($context["video_row"]) ? $context["video_row"] : null);
                echo "\">
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 209
                echo $this->getAttribute($context["post_video"], "video", array());
                echo "\" name=\"post_video[";
                echo (isset($context["video_row"]) ? $context["video_row"] : null);
                echo "][video]\"></td>
                                        <td>

                                            ";
                // line 212
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 213
                    echo "                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><img src=\"";
                    // line 214
                    echo $this->getAttribute($context["language"], "flag", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" /></span>
                                                <textarea style=\"min-width: 100%;\" class=\"form-control\" type=\"text\" name=\"post_video[";
                    // line 215
                    echo (isset($context["video_row"]) ? $context["video_row"] : null);
                    echo "][text][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "]\">";
                    echo $this->getAttribute($this->getAttribute($context["post_video"], "text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</textarea>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 219
                echo $this->getAttribute($context["post_video"], "width", array());
                echo "\" name=\"post_video[";
                echo (isset($context["video_row"]) ? $context["video_row"] : null);
                echo "][width]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 220
                echo $this->getAttribute($context["post_video"], "height", array());
                echo "\" name=\"post_video[";
                echo (isset($context["video_row"]) ? $context["video_row"] : null);
                echo "][height]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 221
                echo $this->getAttribute($context["post_video"], "sort_order", array());
                echo "\" name=\"post_video[";
                echo (isset($context["video_row"]) ? $context["video_row"] : null);
                echo "][sort_order]\"></td>
                                        <td><a class=\"btn btn-danger\" onclick=\"RemoveVideo('video_row_";
                // line 222
                echo (isset($context["video_row"]) ? $context["video_row"] : null);
                echo "');\"><i class=\"fa fa-minus\"></i></a></td>
                                    </tr>
                                    ";
                // line 224
                $context["video_row"] = ((isset($context["video_row"]) ? $context["video_row"] : null) + 1);
                // line 225
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                                    ";
        }
        // line 227
        echo "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a class=\"btn btn-primary\" onclick=\"AddVideo();\"><i class=\"fa fa-plus\"></i></a></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-links\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 242
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 244
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                                    <div id=\"post-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 246
        if ($this->getAttribute((isset($context["error_post_category"]) ? $context["error_post_category"] : null), $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array()), array(), "array")) {
            // line 247
            echo "                                        <div class=\"text-danger\">";
            echo $this->getAttribute((isset($context["error_post_category"]) ? $context["error_post_category"] : null), $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array()), array(), "array");
            echo "</div>
                                        ";
        }
        // line 249
        echo "                                        ";
        if ((isset($context["post_categories"]) ? $context["post_categories"] : null)) {
            // line 250
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_categories"]) ? $context["post_categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_category"]) {
                // line 251
                echo "                                        <div id=\"post-category";
                echo $this->getAttribute($context["post_category"], "category_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["post_category"], "title", array());
                echo "
                                            <input type=\"hidden\" name=\"post_category[]\" value=\"";
                // line 252
                echo $this->getAttribute($context["post_category"], "category_id", array());
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "                                        ";
        }
        // line 256
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 260
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 265
        if (twig_in_filter(0, (isset($context["post_store"]) ? $context["post_store"] : null))) {
            // line 266
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 267
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "
                                                ";
        } else {
            // line 269
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" />
                                                ";
            // line 270
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "
                                                ";
        }
        // line 272
        echo "                                            </label>
                                        </div>
                                        ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 275
            echo "                                        <div class=\"checkbox\">
                                            <label>
                                                ";
            // line 277
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["post_store"]) ? $context["post_store"] : null))) {
                // line 278
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                                                ";
                // line 279
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                                                ";
            } else {
                // line 281
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                                                ";
                // line 282
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                                                ";
            }
            // line 284
            echo "                                            </label>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-related\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 293
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 295
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"post_product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 297
        if ((twig_length_filter($this->env, (isset($context["post_products"]) ? $context["post_products"] : null)) > 0)) {
            // line 298
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_products"]) ? $context["post_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_product"]) {
                // line 299
                echo "                                        <div id=\"post_product";
                echo $this->getAttribute($context["post_product"], "product_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["post_product"], "title", array());
                echo "
                                            <input type=\"hidden\" name=\"post_product[]\" value=\"";
                // line 300
                echo $this->getAttribute($context["post_product"], "product_id", array());
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "                                        ";
        }
        // line 304
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 308
        echo (isset($context["entry_post"]) ? $context["entry_post"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"post\" value=\"\" placeholder=\"";
        // line 310
        echo (isset($context["entry_post"]) ? $context["entry_post"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"related_post\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 312
        if ((twig_length_filter($this->env, (isset($context["related_posts"]) ? $context["related_posts"] : null)) > 0)) {
            // line 313
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related_posts"]) ? $context["related_posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["related_post"]) {
                // line 314
                echo "                                        <div id=\"related_post";
                echo $this->getAttribute($context["related_post"], "post_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["related_post"], "title", array());
                echo "
                                            <input type=\"hidden\" name=\"related_post[]\" value=\"";
                // line 315
                echo $this->getAttribute($context["related_post"], "post_id", array());
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo "                                        ";
        }
        // line 319
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-design\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 328
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 329
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 334
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[0]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 338
            echo "                                                ";
            if (($this->getAttribute((isset($context["post_layout"]) ? $context["post_layout"] : null), 0, array(), "array") && ($this->getAttribute((isset($context["post_layout"]) ? $context["post_layout"] : null), 0, array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                // line 339
                echo "                                                <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                                                ";
            } else {
                // line 341
                echo "                                                <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                                                ";
            }
            // line 343
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                                            </select></td>
                                        </tr>
                                        ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 347
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 348
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[";
            // line 349
            echo $this->getAttribute($context["store"], "store_id", array(), "array");
            echo "]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 352
                echo "                                                ";
                if (($this->getAttribute((isset($context["post_layout"]) ? $context["post_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["post_layout"]) ? $context["post_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 353
                    echo "                                                <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                                                ";
                } else {
                    // line 355
                    echo "                                                <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                                                ";
                }
                // line 357
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "                                            </select></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
                ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 373
            echo "                ";
            if ((isset($context["style_short_description_display"]) ? $context["style_short_description_display"] : null)) {
                // line 374
                echo "                    \$(\"#input-short-description";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\").summernote({ height: 100 });
                ";
            }
            // line 376
            echo "                ";
            if ( !(isset($context["store_2302"]) ? $context["store_2302"] : null)) {
                // line 377
                echo "                    \$(\"#input-description";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\").summernote({ height: 300 });
                ";
            }
            // line 379
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "                //--></script>
                <script type=\"text/javascript\"><!--
\t\t\t\t// Category
                \$('input[name=\\'category\\']').autocomplete({
                    'source': function (request, response) {
                        \$.ajax({
                            url: '";
        // line 386
        echo (isset($context["category_autocomplete"]) ? $context["category_autocomplete"] : null);
        echo "' + '&filter_title=' + encodeURIComponent(request),
                            dataType: 'json',
                            success: function (json) {
                                response(\$.map(json, function (item) {
                                    return {
                                        label: item['title'],
                                        value: item['category_id']
                                    }
                                }));
                            }
                        });
                    },
                    'select': function (item) {
                        \$('input[name=\\'category\\']').val('');

                        \$('#post-category' + item['value']).remove();

                        \$('#post-category').append('<div id=\"post-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"post_category[]\" value=\"' + item['value'] + '\" /></div>');
                    }
                });

\$('#post-category').delegate('.fa-minus-circle', 'click', function () {
    \$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        pickTime: false
    });

    \$('.time').datetimepicker({
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
    });
    //--></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
        \$('#related_language a:first').tab('show');

        //--></script>
        <script type=\"text/javascript\"><!--
            \$('input[name=\\'product\\']').autocomplete({
              source: function(request, response) {
                \$.ajax({
                  url: '";
        // line 435
        echo (isset($context["product_autocomplete"]) ? $context["product_autocomplete"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
                  dataType: 'json',
                  success: function(json) {
                    response(\$.map(json, function(item) {
                      return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
                }
            });
            },
            'select': function(item) {
               \$('input[name=\\'product\\']').val('');

               \$('#post_product' + item['value']).remove();

               \$('#post_product').append('<div id=\"post_product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"post_product[]\" value=\"' + item['value'] + '\" /></div>');
   /* \$('input[name=\\'subscribers\\']').val('');

    \$('#subscriber' + item['value']).remove();

    \$('#subscriber').append('<div id=\"subscriber' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"subscriber[]\" value=\"' + item['value'] + '\" /></div>'); */
}
});

\$('#post_product').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
            \$('input[name=\\'post\\']').autocomplete({
              source: function(request, response) {
                \$.ajax({
                  url: '";
        // line 469
        echo (isset($context["post_autocomplete"]) ? $context["post_autocomplete"] : null);
        echo "&filter_title=' +  encodeURIComponent(request),
                  dataType: 'json',
                  success: function(json) {
                    response(\$.map(json, function(item) {
                      return {
                        label: item['title'],
                        value: item['post_id']
                    }
                }));
                }
            });
            },
            'select': function(item) {
               \$('input[name=\\'post\\']').val('');

               \$('#related_post' + item['value']).remove();

               \$('#related_post').append('<div id=\"related_post' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"related_post[]\" value=\"' + item['value'] + '\" /></div>');
   /* \$('input[name=\\'subscribers\\']').val('');

    \$('#subscriber' + item['value']).remove();

    \$('#subscriber').append('<div id=\"subscriber' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"subscriber[]\" value=\"' + item['value'] + '\" /></div>'); */
}
});

\$('#related_post').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
function AddVideo()
{
    var token = Math.random().toString(36).substr(2);
    var html = '';
    html += '<tr id=\"video_row_'+token+'\">';
    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][video]\"></td>';
    html +='<td>';
    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 506
            echo "            html += ' <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"";
            echo $this->getAttribute($context["language"], "flag", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea class=\"form-control\" name=\"post_video['+token+'][text][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "    html +='</td>';

    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][width]\" value=\"0\"></td>';
    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][height]\" value=\"0\"></td>';
    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][sort_order]\" value=\"0\"></td>';
    html += '<td><a class=\"btn btn-danger\" onclick=\"RemoveVideo(\\'video_row_'+token+'\\');\"><i class=\"fa fa-minus\"></i></a></td>';

    html += '</tr>';

    \$('#tbody').append(html);
}
function RemoveVideo(id)
{
    \$('#'+id).remove();
}
//--></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    pickTime: false
});
//--></script>
";
        // line 531
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/d_blog_module/post_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1245 => 531,  1220 => 508,  1207 => 506,  1203 => 505,  1164 => 469,  1127 => 435,  1075 => 386,  1067 => 380,  1061 => 379,  1055 => 377,  1052 => 376,  1046 => 374,  1043 => 373,  1039 => 372,  1026 => 361,  1018 => 358,  1012 => 357,  1004 => 355,  996 => 353,  993 => 352,  989 => 351,  984 => 349,  980 => 348,  977 => 347,  973 => 346,  969 => 344,  963 => 343,  955 => 341,  947 => 339,  944 => 338,  940 => 337,  934 => 334,  926 => 329,  922 => 328,  911 => 319,  908 => 318,  899 => 315,  892 => 314,  887 => 313,  885 => 312,  880 => 310,  875 => 308,  869 => 304,  866 => 303,  857 => 300,  850 => 299,  845 => 298,  843 => 297,  838 => 295,  833 => 293,  825 => 287,  817 => 284,  812 => 282,  807 => 281,  802 => 279,  797 => 278,  795 => 277,  791 => 275,  787 => 274,  783 => 272,  778 => 270,  775 => 269,  770 => 267,  767 => 266,  765 => 265,  757 => 260,  751 => 256,  748 => 255,  739 => 252,  732 => 251,  727 => 250,  724 => 249,  718 => 247,  716 => 246,  711 => 244,  704 => 242,  687 => 227,  684 => 226,  678 => 225,  676 => 224,  671 => 222,  665 => 221,  659 => 220,  653 => 219,  650 => 218,  637 => 215,  631 => 214,  628 => 213,  624 => 212,  616 => 209,  611 => 208,  606 => 207,  603 => 206,  601 => 205,  594 => 201,  590 => 200,  586 => 199,  582 => 198,  578 => 197,  574 => 196,  564 => 188,  559 => 186,  555 => 185,  550 => 184,  547 => 183,  542 => 181,  538 => 180,  533 => 179,  530 => 178,  525 => 176,  521 => 175,  516 => 174,  514 => 173,  508 => 170,  502 => 166,  497 => 164,  493 => 163,  488 => 162,  485 => 161,  480 => 159,  476 => 158,  471 => 157,  468 => 156,  463 => 154,  459 => 153,  454 => 152,  452 => 151,  446 => 148,  440 => 144,  435 => 142,  430 => 141,  425 => 139,  420 => 138,  418 => 137,  412 => 134,  399 => 126,  391 => 123,  385 => 119,  379 => 118,  371 => 116,  363 => 114,  360 => 113,  356 => 112,  350 => 109,  346 => 108,  340 => 105,  334 => 104,  329 => 102,  323 => 98,  306 => 93,  297 => 91,  284 => 87,  277 => 85,  264 => 81,  257 => 79,  252 => 76,  246 => 74,  244 => 73,  234 => 72,  227 => 70,  214 => 66,  207 => 64,  194 => 60,  187 => 58,  182 => 55,  176 => 53,  174 => 52,  168 => 51,  158 => 50,  151 => 48,  145 => 46,  141 => 45,  137 => 43,  122 => 41,  118 => 40,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  85 => 28,  79 => 25,  75 => 23,  67 => 19,  65 => 18,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{header}}{{column_left}}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-post" data-toggle="tooltip" title="{{button_save}}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{cancel}}" data-toggle="tooltip" title="{{button_cancel}}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*             </div>*/
/*             <h1>{{heading_title}}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{error_warning}}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{text_form}}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{action}}" method="post" enctype="multipart/form-data" id="form-post" class="form-horizontal">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a href="#tab-general" data-toggle="tab">{{tab_general}}</a></li>*/
/*                         <li><a href="#tab-data" data-toggle="tab">{{tab_data}}</a></li>*/
/*                         <li><a href="#tab-related" data-toggle="tab">{{tab_related}}</a></li>*/
/*                         <li><a href="#tab-youtube" data-toggle="tab">{{tab_youtube}}</a></li>*/
/*                         <li><a href="#tab-links" data-toggle="tab">{{tab_links}}</a></li>*/
/*                         <li><a href="#tab-design" data-toggle="tab">{{tab_design}}</a></li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="tab-general">*/
/*                             <ul class="nav nav-tabs" id="language">*/
/*                                 {% for language in languages %}*/
/*                                 <li><a href="#language{{language.language_id}}" data-toggle="tab"><img src="{{language.flag}}" title="{{language.name}}" /> {{language.name}}</a></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                             <div class="tab-content">*/
/*                                 {% for language in languages %}*/
/*                                 <div class="tab-pane" id="language{{language.language_id}}">*/
/*                                     <div class="form-group required">*/
/*                                         <label class="col-sm-2 control-label" for="input-title{{language.language_id}}">{{entry_title}}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <input type="text" name="post_description[{{language.language_id}}][title]" value="{{post_description[language.language_id] ? post_description[language.language_id]['title'] : ''}}" placeholder="{{entry_title}}" id="input-title{{language.language_id}}" class="form-control" />*/
/*                                             <input type="hidden" name="post_description[{{language.language_id}}][user_id]" value="{{user_id ? user_id : 0 }}" id="get-user_id" class="form-control" />*/
/*                                             {% if error_title[language.language_id] %}*/
/*                                             <div class="text-danger">{{error_title[language.language_id]}}</div>*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-short-description{{language.language_id}}">{{entry_short_description}}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <textarea name="post_description[{{language.language_id}}][short_description]" placeholder="{{entry_short_description}}" class="form-control" id="input-short-description{{language.language_id}}">{{ post_description[language.language_id] ? post_description[language.language_id].short_description : ''}}</textarea>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-description{{language.language_id}}">{{entry_description}}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <textarea name="post_description[{{language.language_id}}][description]" class="d_visual_designer summernote" placeholder="{{entry_description}}" data-toggle="summernote" id="input-description{{language.language_id}}">{{ post_description[language.language_id] ? post_description[language.language_id].description : ''}}</textarea>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group required">*/
/*                                         <label class="col-sm-2 control-label" for="input-meta-title{{language.language_id}}">{{entry_meta_title}}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <input type="text" name="post_description[{{language.language_id}}][meta_title]" value="{{ post_description[language.language_id] ? post_description[language.language_id].meta_title : ''}}" placeholder="{{entry_meta_title}}" id="input-meta-title{{language.language_id}}" class="form-control" />*/
/*                                             {% if error_meta_title[language.language_id] %}*/
/*                                             <div class="text-danger">{{error_meta_title[language.language_id]}}</div>*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-meta-description{{language.language_id}}">{{entry_meta_description}}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <textarea name="post_description[{{language.language_id}}][meta_description]" rows="5" placeholder="{{entry_meta_description}}" id="input-meta-description{{language.language_id}}" class="form-control">{{post_description[language.language_id] ? post_description[language.language_id].meta_description : ''}}</textarea>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-meta-keyword{{language.language_id}}">{{entry_meta_keyword}}</label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <textarea name="post_description[{{language.language_id}}][meta_keyword]" rows="5" placeholder="{{entry_meta_keyword}}" id="input-meta-keyword{{language.language_id}}" class="form-control">{{post_description[language.language_id] ? post_description[language.language_id].meta_keyword : ''}}</textarea>*/
/*                                         </div>*/
/*                                     </div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-2 control-label" for="input-tag{{language.language_id}}"><span data-toggle="tooltip" title="{{help_tag}}">{{entry_tag}}</span></label>*/
/* 										<div class="col-sm-10">*/
/* 											<input type="text" name="post_description[{{language.language_id}}][tag]" data-role="tagsinput" value="{{ post_description[language.language_id] ? post_description[language.language_id].tag : ''}}" placeholder="{{entry_tag}}" id="input-tag{{language.language_id}}" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/*                                 </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-data">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-image">{{entry_image}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{thumb}}" alt="" title="" data-placeholder="{{placeholder}}" /></a>*/
/*                                     <input type="hidden" name="image" value="{{image}}" id="input-image" />*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group {{change_author?'':'hidden'}}">*/
/*                                 <label class="col-sm-2 control-label" for="input-author">{{entry_author}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select class="form-control" name="current_author">*/
/*                                         {% for author in authors %}*/
/*                                         {% if author.user_id == current_author %}*/
/*                                         <option selected="selected" value="{{author.user_id}}">{{author.name}}</option>*/
/*                                         {% else %}*/
/*                                         <option value="{{author.user_id}}">{{author.name}}</option>*/
/*                                         {% endif %}*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-keyword"><span data-toggle="tooltip" title="{{help_date_published}}">{{entry_date_published}}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="input-group date">*/
/*                                         <input type="text" name="date_published" value="{{date_published ? date_published : '' }}" placeholder="{{entry_date_published}}" id="input-keyword" class="form-control" data-date-format="YYYY-MM-DD"  />*/
/*                                         <span class="input-group-btn">*/
/*                                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-status">{{entry_status}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="status" id="input-status" class="form-control">*/
/*                                         {% if status %}*/
/*                                         <option value="1" selected="selected">{{text_enabled}}</option>*/
/*                                         <option value="0">{{text_disabled}}</option>*/
/*                                         {% else %}*/
/*                                         <option value="1">{{text_enabled}}</option>*/
/*                                         <option value="0" selected="selected">{{text_disabled}}</option>*/
/*                                         {% endif %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-review-display">{{entry_review_display}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="review_display" id="input-review-display" class="form-control">*/
/*                                         {% if review_display == 0 %}*/
/*                                         <option value="0" selected="selected">{{text_default}}</option>*/
/*                                         <option value="1">{{text_yes}}</option>*/
/*                                         <option value="2">{{text_no}}</option>*/
/*                                         {% endif %}*/
/*                                         {% if review_display == 1 %}*/
/*                                         <option value="0">{{text_default}}</option>*/
/*                                         <option value="1" selected="selected">{{text_yes}}</option>*/
/*                                         <option value="2">{{text_no}}</option>*/
/*                                         {% endif %}*/
/*                                         {% if review_display == 2 %}*/
/*                                         <option value="0">{{text_default}}</option>*/
/*                                         <option value="1">{{text_yes}}</option>*/
/*                                         <option value="2" selected="selected">{{text_no}}</option>*/
/*                                        {% endif %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-images-review">{{entry_images_review}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="images_review" id="input-images-review" class="form-control">*/
/*                                         {% if images_review == 0 %}*/
/*                                         <option value="0" selected="selected">{{text_default}}</option>*/
/*                                         <option value="1">{{text_yes}}</option>*/
/*                                         <option value="2">{{text_no}}</option>*/
/*                                         {% endif %}*/
/*                                         {% if images_review == 1 %}*/
/*                                         <option value="0">{{text_default}}</option>*/
/*                                         <option value="1" selected="selected">{{text_yes}}</option>*/
/*                                         <option value="2">{{text_no}}</option>*/
/*                                         {% endif %}*/
/*                                         {% if images_review == 2 %}*/
/*                                         <option value="0">{{text_default}}</option>*/
/*                                         <option value="1">{{text_yes}}</option>*/
/*                                         <option value="2" selected="selected">{{text_no}}</option>*/
/*                                         {% endif %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-youtube">*/
/*                             <table class="table table-bordered">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th style="width:15%;">{{text_youtube_url}}</th>*/
/*                                         <th style="width:66%;">{{text_youtube_title}}</th>*/
/*                                         <th style="width:5%;">{{text_youtube_width}}</th>*/
/*                                         <th style="width:5%;">{{text_youtube_height}}</th>*/
/*                                         <th style="width:6%;">{{text_youtube_sort_order}}</th>*/
/*                                         <th style="width:3%;">{{text_youtube_action}}</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody id="tbody">*/
/*                                     {% if post_videos %}*/
/*                                     {% set video_row = 0 %}*/
/*                                     {% for post_video in post_videos %}*/
/*                                     <tr id="video_row_{{video_row}}">*/
/*                                         <td><input class="form-control" type="text" value="{{post_video.video}}" name="post_video[{{video_row}}][video]"></td>*/
/*                                         <td>*/
/* */
/*                                             {% for language in languages %}*/
/*                                             <div class="input-group">*/
/*                                                 <span class="input-group-addon"><img src="{{language.flag}}" title="{{language.name}}" /></span>*/
/*                                                 <textarea style="min-width: 100%;" class="form-control" type="text" name="post_video[{{video_row}}][text][{{language.language_id}}]">{{post_video.text[language.language_id]}}</textarea>*/
/*                                             </div>*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                         <td><input class="form-control" type="text" value="{{post_video.width}}" name="post_video[{{video_row}}][width]"></td>*/
/*                                         <td><input class="form-control" type="text" value="{{post_video.height}}" name="post_video[{{video_row}}][height]"></td>*/
/*                                         <td><input class="form-control" type="text" value="{{post_video.sort_order}}" name="post_video[{{video_row}}][sort_order]"></td>*/
/*                                         <td><a class="btn btn-danger" onclick="RemoveVideo('video_row_{{video_row}}');"><i class="fa fa-minus"></i></a></td>*/
/*                                     </tr>*/
/*                                     {% set video_row = video_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     {% endif %}*/
/*                                 </tbody>*/
/*                                 <tfoot>*/
/*                                     <tr>*/
/*                                         <td></td>*/
/*                                         <td></td>*/
/*                                         <td></td>*/
/*                                         <td></td>*/
/*                                         <td></td>*/
/*                                         <td><a class="btn btn-primary" onclick="AddVideo();"><i class="fa fa-plus"></i></a></td>*/
/*                                     </tr>*/
/*                                 </tfoot>*/
/*                             </table>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-links">*/
/*                             <div class="form-group required">*/
/*                                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{help_category}}">{{entry_category}}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="category" value="" placeholder="{{entry_category}}" id="input-category" class="form-control" />*/
/*                                     <div id="post-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                                         {% if error_post_category[language.language_id] %}*/
/*                                         <div class="text-danger">{{error_post_category[language.language_id]}}</div>*/
/*                                         {% endif %}*/
/*                                         {% if post_categories %}*/
/*                                         {% for post_category in post_categories %}*/
/*                                         <div id="post-category{{post_category.category_id}}"><i class="fa fa-minus-circle"></i> {{post_category.title}}*/
/*                                             <input type="hidden" name="post_category[]" value="{{post_category.category_id}}" />*/
/*                                         </div>*/
/*                                         {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">{{entry_store}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                                         <div class="checkbox">*/
/*                                             <label>*/
/*                                                 {% if 0 in post_store %}*/
/*                                                 <input type="checkbox" name="post_store[]" value="0" checked="checked" />*/
/*                                                 {{text_default}}*/
/*                                                 {% else %}*/
/*                                                 <input type="checkbox" name="post_store[]" value="0" />*/
/*                                                 {{text_default}}*/
/*                                                 {% endif %}*/
/*                                             </label>*/
/*                                         </div>*/
/*                                         {% for store in stores %}*/
/*                                         <div class="checkbox">*/
/*                                             <label>*/
/*                                                 {% if store.store_id in post_store %}*/
/*                                                 <input type="checkbox" name="post_store[]" value="{{store.store_id}}" checked="checked" />*/
/*                                                 {{store.name}}*/
/*                                                 {% else %}*/
/*                                                 <input type="checkbox" name="post_store[]" value="{{store.store_id}}" />*/
/*                                                 {{store.name}}*/
/*                                                 {% endif %}*/
/*                                             </label>*/
/*                                         </div>*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-related">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-product">{{entry_product}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="product" value="" placeholder="{{entry_product}}" id="input-product" class="form-control" />*/
/*                                     <div id="post_product" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                                         {% if post_products|length > 0 %}*/
/*                                         {% for post_product in post_products %}*/
/*                                         <div id="post_product{{post_product.product_id}}"><i class="fa fa-minus-circle"></i> {{post_product.title}}*/
/*                                             <input type="hidden" name="post_product[]" value="{{post_product.product_id}}" />*/
/*                                         </div>*/
/*                                         {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-product">{{entry_post}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="post" value="" placeholder="{{entry_post}}" id="input-product" class="form-control" />*/
/*                                     <div id="related_post" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                                         {% if related_posts|length > 0 %}*/
/*                                         {% for related_post in related_posts %}*/
/*                                         <div id="related_post{{related_post.post_id}}"><i class="fa fa-minus-circle"></i> {{related_post.title}}*/
/*                                             <input type="hidden" name="related_post[]" value="{{related_post.post_id}}" />*/
/*                                         </div>*/
/*                                         {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-design">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{entry_store}}</td>*/
/*                                             <td class="text-left">{{entry_layout}}</td>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{text_default}}</td>*/
/*                                             <td class="text-left"><select name="post_layout[0]" class="form-control">*/
/*                                                 <option value=""></option>*/
/*                                                 {% for layout in layouts %}*/
/*                                                 {% if post_layout[0] and post_layout[0] == layout.layout_id %}*/
/*                                                 <option value="{{layout.layout_id}}" selected="selected">{{layout.name}}</option>*/
/*                                                 {% else %}*/
/*                                                 <option value="{{layout.layout_id}}">{{layout.name}}</option>*/
/*                                                 {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             </select></td>*/
/*                                         </tr>*/
/*                                         {% for store in stores %}*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{store.name}}</td>*/
/*                                             <td class="text-left"><select name="post_layout[{{store['store_id']}}]" class="form-control">*/
/*                                                 <option value=""></option>*/
/*                                                 {% for layout in layouts %}*/
/*                                                 {% if post_layout[store.store_id] and post_layout[store.store_id] == layout.layout_id %}*/
/*                                                 <option value="{{layout.layout_id}}" selected="selected">{{layout.name}}</option>*/
/*                                                 {% else %}*/
/*                                                 <option value="{{layout.layout_id}}">{{layout.name}}</option>*/
/*                                                 {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             </select></td>*/
/*                                         </tr>*/
/*                                         {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*                 {% for language in languages %}*/
/*                 {% if style_short_description_display %}*/
/*                     $("#input-short-description{{language.language_id}}").summernote({ height: 100 });*/
/*                 {% endif %}*/
/*                 {% if not store_2302 %}*/
/*                     $("#input-description{{language.language_id}}").summernote({ height: 300 });*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*                 //--></script>*/
/*                 <script type="text/javascript"><!--*/
/* 				// Category*/
/*                 $('input[name=\'category\']').autocomplete({*/
/*                     'source': function (request, response) {*/
/*                         $.ajax({*/
/*                             url: '{{category_autocomplete}}' + '&filter_title=' + encodeURIComponent(request),*/
/*                             dataType: 'json',*/
/*                             success: function (json) {*/
/*                                 response($.map(json, function (item) {*/
/*                                     return {*/
/*                                         label: item['title'],*/
/*                                         value: item['category_id']*/
/*                                     }*/
/*                                 }));*/
/*                             }*/
/*                         });*/
/*                     },*/
/*                     'select': function (item) {*/
/*                         $('input[name=\'category\']').val('');*/
/* */
/*                         $('#post-category' + item['value']).remove();*/
/* */
/*                         $('#post-category').append('<div id="post-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="post_category[]" value="' + item['value'] + '" /></div>');*/
/*                     }*/
/*                 });*/
/* */
/* $('#post-category').delegate('.fa-minus-circle', 'click', function () {*/
/*     $(this).parent().remove();*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('.date').datetimepicker({*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         pickDate: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/*     //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('#language a:first').tab('show');*/
/*         $('#option a:first').tab('show');*/
/*         $('#related_language a:first').tab('show');*/
/* */
/*         //--></script>*/
/*         <script type="text/javascript"><!--*/
/*             $('input[name=\'product\']').autocomplete({*/
/*               source: function(request, response) {*/
/*                 $.ajax({*/
/*                   url: '{{product_autocomplete}}&filter_name=' +  encodeURIComponent(request),*/
/*                   dataType: 'json',*/
/*                   success: function(json) {*/
/*                     response($.map(json, function(item) {*/
/*                       return {*/
/*                         label: item['name'],*/
/*                         value: item['product_id']*/
/*                     }*/
/*                 }));*/
/*                 }*/
/*             });*/
/*             },*/
/*             'select': function(item) {*/
/*                $('input[name=\'product\']').val('');*/
/* */
/*                $('#post_product' + item['value']).remove();*/
/* */
/*                $('#post_product').append('<div id="post_product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="post_product[]" value="' + item['value'] + '" /></div>');*/
/*    /* $('input[name=\'subscribers\']').val('');*/
/* */
/*     $('#subscriber' + item['value']).remove();*/
/* */
/*     $('#subscriber').append('<div id="subscriber' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="subscriber[]" value="' + item['value'] + '" /></div>'); *//* */
/* }*/
/* });*/
/* */
/* $('#post_product').delegate('.fa-minus-circle', 'click', function() {*/
/*   $(this).parent().remove();*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/*             $('input[name=\'post\']').autocomplete({*/
/*               source: function(request, response) {*/
/*                 $.ajax({*/
/*                   url: '{{post_autocomplete}}&filter_title=' +  encodeURIComponent(request),*/
/*                   dataType: 'json',*/
/*                   success: function(json) {*/
/*                     response($.map(json, function(item) {*/
/*                       return {*/
/*                         label: item['title'],*/
/*                         value: item['post_id']*/
/*                     }*/
/*                 }));*/
/*                 }*/
/*             });*/
/*             },*/
/*             'select': function(item) {*/
/*                $('input[name=\'post\']').val('');*/
/* */
/*                $('#related_post' + item['value']).remove();*/
/* */
/*                $('#related_post').append('<div id="related_post' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="related_post[]" value="' + item['value'] + '" /></div>');*/
/*    /* $('input[name=\'subscribers\']').val('');*/
/* */
/*     $('#subscriber' + item['value']).remove();*/
/* */
/*     $('#subscriber').append('<div id="subscriber' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="subscriber[]" value="' + item['value'] + '" /></div>'); *//* */
/* }*/
/* });*/
/* */
/* $('#related_post').delegate('.fa-minus-circle', 'click', function() {*/
/*   $(this).parent().remove();*/
/* });*/
/* function AddVideo()*/
/* {*/
/*     var token = Math.random().toString(36).substr(2);*/
/*     var html = '';*/
/*     html += '<tr id="video_row_'+token+'">';*/
/*     html += '<td><input class="form-control" type="text" name="post_video['+token+'][video]"></td>';*/
/*     html +='<td>';*/
/*     {% for language in languages %}*/
/*             html += ' <div class="input-group"><span class="input-group-addon"><img src="{{language.flag}}" title="{{language.name}}" /></span><textarea class="form-control" name="post_video['+token+'][text][{{language.language_id}}]"></textarea></div>';*/
/*     {% endfor %}*/
/*     html +='</td>';*/
/* */
/*     html += '<td><input class="form-control" type="text" name="post_video['+token+'][width]" value="0"></td>';*/
/*     html += '<td><input class="form-control" type="text" name="post_video['+token+'][height]" value="0"></td>';*/
/*     html += '<td><input class="form-control" type="text" name="post_video['+token+'][sort_order]" value="0"></td>';*/
/*     html += '<td><a class="btn btn-danger" onclick="RemoveVideo(\'video_row_'+token+'\');"><i class="fa fa-minus"></i></a></td>';*/
/* */
/*     html += '</tr>';*/
/* */
/*     $('#tbody').append(html);*/
/* }*/
/* function RemoveVideo(id)*/
/* {*/
/*     $('#'+id).remove();*/
/* }*/
/* //--></script>*/
/* <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/* <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*     pickTime: false*/
/* });*/
/* //--></script>*/
/* {{footer}}*/
/* */
