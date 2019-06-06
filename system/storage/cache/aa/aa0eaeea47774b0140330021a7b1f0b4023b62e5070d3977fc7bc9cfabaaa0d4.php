<?php

/* extension/d_blog_module/category_form.twig */
class __TwigTemplate_87c2256458b95107fddf57301036dee03106727a9a9ecb9e93f75ff9f1cd5afa extends Twig_Template
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
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-setting\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_setting"]) ? $context["tab_setting"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active in\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "                <li><a href=\"#language";
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
        // line 40
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 45
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 47
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][title]\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 48
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 49
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 51
            echo "                    </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-short-description";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_short_description"]) ? $context["entry_short_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 56
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][short_description]\" placeholder=\"";
            echo (isset($context["entry_short_description"]) ? $context["entry_short_description"] : null);
            echo "\" class=\"form-control\" id=\"input-short-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "short_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 60
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 62
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" class=\"d_visual_designer form-control summernote\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" >";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 68
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 69
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 70
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 72
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 75
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 77
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 81
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 83
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 92
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 94
        echo (isset($context["path"]) ? $context["path"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 95
        echo (isset($context["parent_id"]) ? $context["parent_id"] : null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 99
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 104
        if (twig_in_filter(0, (isset($context["category_store"]) ? $context["category_store"] : null))) {
            // line 105
            echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"0\" checked=\"checked\" />
                        ";
            // line 106
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "
                        ";
        } else {
            // line 108
            echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"0\" />
                        ";
            // line 109
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "
                        ";
        }
        // line 111
        echo "                      </label>
                    </div>
                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 114
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 116
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["category_store"]) ? $context["category_store"] : null))) {
                // line 117
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 118
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 120
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                        ";
                // line 121
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 123
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                  </div>
                </div>
              </div>
              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 131
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 132
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 133
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 137
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 139
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 143
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 146
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 147
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 148
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 150
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 151
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 153
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-setting\">
                <div class=\"tab-body\">

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input_category_custom\">";
        // line 161
        echo (isset($context["entry_category_custom"]) ? $context["entry_category_custom"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"hidden\" name=\"custom\" value=\"0\" />
                            <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 164
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "\" id=\"input_category_custom\" name=\"custom\" ";
        echo (((isset($context["custom"]) ? $context["custom"] : null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                        </div>
                    </div><!-- //checkbox -->
                    <div id=\"input_category_custom_form\" ";
        // line 167
        echo (((isset($context["custom"]) ? $context["custom"] : null)) ? ("") : ("class=\"hide\""));
        echo " >
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_category_layout_type\">";
        // line 169
        echo (isset($context["entry_category_layout_type"]) ? $context["entry_category_layout_type"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"btn-group colors\" data-toggle=\"buttons\">
                                    ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_types"]) ? $context["layout_types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_type"]) {
            // line 173
            echo "                                    <label class=\"btn btn-default ";
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "layout_type", array()) && ($this->getAttribute($context["layout_type"], "id", array()) == $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "layout_type", array())))) {
                echo "active";
            }
            echo "\"
                                     data-toggle=\"tooltip\" data-html=\"true\" title=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["layout_type"], "description", array()), "html");
            echo "\">
                                        <input type=\"radio\" name=\"setting[layout_type]\" value=\"";
            // line 175
            echo $this->getAttribute($context["layout_type"], "id", array());
            echo "\" autocomplete=\"off\" ";
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "layout_type", array()) && ($this->getAttribute($context["layout_type"], "id", array()) == $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "layout_type", array())))) {
                echo "checked";
            }
            echo "> ";
            echo $this->getAttribute($context["layout_type"], "name", array());
            echo "
                                    </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                                </div>
                            </div>
                        </div><!-- //status -->



                        <div class=\"form-group\" id=\"category_layout\">
                            <label class=\"col-sm-2 control-label\" for=\"input_category_layout\">";
        // line 185
        echo (isset($context["entry_category_layout"]) ? $context["entry_category_layout"] : null);
        echo "</label>
                            <div class=\"col-sm-10 \">
                                <div class=\"input\">

                                ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "layout", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 190
            echo "
                                <div class=\"input-group m-b\">
                                    <select name=\"setting[layout][]\"  class=\"form-control\">
                                        ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 194
                echo "                                        <option value=\"";
                echo $context["col"];
                echo "\" ";
                if (($context["layout"] == $context["col"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["col"];
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                                    </select>
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default remove\" >";
            // line 198
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "</button>
                                    </span>
                                </div><!-- /input-group -->

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                                </div>
                                <button class=\"btn btn-default add m-b\">";
        // line 204
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "</button>
                                <div class=\"bs-callout bs-callout-warning\">
                                    ";
        // line 206
        echo (isset($context["help_layout"]) ? $context["help_layout"] : null);
        echo "
                                </div>
                            </div>
                            <script type=\"text\" id=\"template_input_category_layout\">
                                <div class=\"input-group m-b\">
                                        <select name=\"setting[layout][]\" class=\"form-control\">
                                            ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 213
            echo "                                               <option value=\"";
            echo $context["col"];
            echo "\">";
            echo $context["col"];
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                                        </select>

                                      <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default remove\" >";
        // line 218
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "</button>
                                      </span>
                                </div>
                            </script>
                            <script>
                            var \$category_layout = \$('#category_layout');
                            \$(document).on('click', '#category_layout .add', function(e){

                                var html = \$('#template_input_category_layout').html();
                                \$category_layout.find('.input').append(html);
                                e.preventDefault();
                            })
                            \$(document).on('click', '#category_layout .remove', function(e){
                                \$(this).parents('.input-group').remove()
                                e.preventDefault();
                            })

                            </script>
                        </div>


                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_text\">";
        // line 240
        echo (isset($context["entry_category_post_page_limit"]) ? $context["entry_category_post_page_limit"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"setting[post_page_limit]\" value=\"";
        // line 242
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_page_limit", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_category_post_page_limit"]) ? $context["entry_category_post_page_limit"] : null);
        echo "\"  class=\"form-control\" />
                            </div>
                        </div><!-- //post_page_limit -->
                        
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 247
        echo (isset($context["entry_category_image_display"]) ? $context["entry_category_image_display"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[image_display]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 250
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "\" id=\"input_category_image_display\" name=\"setting[image_display]\" ";
        echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "image_display", array())) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_text\">";
        // line 255
        echo (isset($context["entry_category_image_size"]) ? $context["entry_category_image_size"] : null);
        echo "</label>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 258
        echo (isset($context["text_width"]) ? $context["text_width"] : null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[image_width]\" value=\"";
        // line 259
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "image_width", array());
        echo "\" placeholder=\"";
        echo (isset($context["text_width"]) ? $context["text_width"] : null);
        echo "\"  class=\"form-control\" />
                                </div>


                            </div>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 266
        echo (isset($context["text_height"]) ? $context["text_height"] : null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[image_height]\" value=\"";
        // line 267
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "image_height", array());
        echo "\" placeholder=\"";
        echo (isset($context["text_height"]) ? $context["text_height"] : null);
        echo "\"  class=\"form-control\" />
                                </div>
                            </div>
                        </div><!-- //category_image -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 273
        echo (isset($context["entry_category_sub_category_display"]) ? $context["entry_category_sub_category_display"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[sub_category_display]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 276
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "\" id=\"input_category_sub_category_display\" name=\"setting[sub_category_display]\" ";
        echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "sub_category_display", array())) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->


                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_select\">";
        // line 282
        echo (isset($context["entry_category_sub_category_col"]) ? $context["entry_category_sub_category_col"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"setting[sub_category_col]\" id=\"input_category_sub_category_col\" class=\"form-control\">
                                    ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 286
            echo "                                    <option value=\"";
            echo $context["col"];
            echo "\" ";
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "sub_category_col", array()) == $context["col"])) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo $context["col"];
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                </select>
                            </div>
                        </div><!-- //select -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 293
        echo (isset($context["entry_category_sub_category_image"]) ? $context["entry_category_sub_category_image"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[sub_category_image]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 296
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "\"id=\"input_category_sub_category_image\" name=\"setting[sub_category_image]\" ";
        echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "sub_category_image", array())) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 301
        echo (isset($context["entry_category_sub_category_post_count"]) ? $context["entry_category_sub_category_post_count"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[sub_category_post_count]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 304
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "\" id=\"input_category_sub_category_post_count\" name=\"setting[sub_category_post_count]\" ";
        echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "sub_category_post_count", array())) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_text\">";
        // line 309
        echo (isset($context["entry_category_sub_category_image_size"]) ? $context["entry_category_sub_category_image_size"] : null);
        echo "</label>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 312
        echo (isset($context["text_width"]) ? $context["text_width"] : null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[sub_category_image_width]\" value=\"";
        // line 313
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "sub_category_image_width", array());
        echo "\" placeholder=\"";
        echo (isset($context["text_width"]) ? $context["text_width"] : null);
        echo "\" class=\"form-control\" />
                                </div>


                            </div>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 320
        echo (isset($context["text_height"]) ? $context["text_height"] : null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[sub_category_image_height]\" value=\"";
        // line 321
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "sub_category_image_height", array());
        echo "\" placeholder=\"";
        echo (isset($context["text_height"]) ? $context["text_height"] : null);
        echo "\"  class=\"form-control\" />
                                </div>
                            </div>
                        </div><!-- //category_image -->
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 333
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 334
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\">";
        // line 339
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[0]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 343
            echo "                          ";
            if (($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), 0, array(), "array") && ($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), 0, array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                // line 344
                echo "                          <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                          ";
            } else {
                // line 346
                echo "                          <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                          ";
            }
            // line 348
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                        </select></td>
                    </tr>
                    ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 352
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 353
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[";
            // line 354
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 356
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 357
                echo "                          ";
                if (($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 358
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 360
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                }
                // line 362
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 377
            if ( !(isset($context["store_2302"]) ? $context["store_2302"] : null)) {
                // line 378
                echo "\$('#input-description";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "').summernote({
\theight: 300
});
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "
//checkbox
    \$(\".switcher[type='checkbox']\").bootstrapSwitch({
        'onColor': 'success',
        'labelWidth': '50',
        'onText': '";
        // line 388
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "',
        'offText': '";
        // line 389
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "',
    }).on('switchChange.bootstrapSwitch', function(event, state) {

        if(\$(this).attr('id') == 'input_category_custom'){
            if(state){
                \$('#input_category_custom_form').removeClass('hide')
            }else{
                 \$('#input_category_custom_form').addClass('hide')
            }
        }
    });

\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 404
        echo (isset($context["category_autocomplete"]) ? $context["category_autocomplete"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 409
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['title'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>

  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 431
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/d_blog_module/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1018 => 431,  993 => 409,  985 => 404,  967 => 389,  963 => 388,  956 => 383,  944 => 378,  942 => 377,  938 => 376,  926 => 366,  918 => 363,  912 => 362,  904 => 360,  896 => 358,  893 => 357,  889 => 356,  884 => 354,  880 => 353,  877 => 352,  873 => 351,  869 => 349,  863 => 348,  855 => 346,  847 => 344,  844 => 343,  840 => 342,  834 => 339,  826 => 334,  822 => 333,  805 => 321,  801 => 320,  789 => 313,  785 => 312,  779 => 309,  769 => 304,  763 => 301,  753 => 296,  747 => 293,  740 => 288,  725 => 286,  721 => 285,  715 => 282,  704 => 276,  698 => 273,  687 => 267,  683 => 266,  671 => 259,  667 => 258,  661 => 255,  651 => 250,  645 => 247,  635 => 242,  630 => 240,  605 => 218,  600 => 215,  589 => 213,  585 => 212,  576 => 206,  571 => 204,  568 => 203,  557 => 198,  553 => 196,  538 => 194,  534 => 193,  529 => 190,  525 => 189,  518 => 185,  509 => 178,  494 => 175,  490 => 174,  483 => 173,  479 => 172,  473 => 169,  468 => 167,  460 => 164,  454 => 161,  444 => 153,  439 => 151,  434 => 150,  429 => 148,  424 => 147,  422 => 146,  416 => 143,  407 => 139,  402 => 137,  395 => 133,  389 => 132,  385 => 131,  378 => 126,  370 => 123,  365 => 121,  360 => 120,  355 => 118,  350 => 117,  348 => 116,  344 => 114,  340 => 113,  336 => 111,  331 => 109,  328 => 108,  323 => 106,  320 => 105,  318 => 104,  310 => 99,  303 => 95,  297 => 94,  292 => 92,  286 => 88,  269 => 83,  262 => 81,  249 => 77,  242 => 75,  237 => 72,  231 => 70,  229 => 69,  219 => 68,  212 => 66,  199 => 62,  192 => 60,  179 => 56,  172 => 54,  167 => 51,  161 => 49,  159 => 48,  149 => 47,  142 => 45,  136 => 43,  132 => 42,  128 => 40,  113 => 38,  109 => 37,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{header}}{{column_left}}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-category" data-toggle="tooltip" title="{{button_save}}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{cancel}}" data-toggle="tooltip" title="{{button_cancel}}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{heading_title}}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{error_warning}}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{text_form}}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{action}}" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{tab_general}}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{tab_data}}</a></li>*/
/*             <li><a href="#tab-setting" data-toggle="tab">{{tab_setting}}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{tab_design}}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active in" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{language.language_id}}" data-toggle="tab"><img src="{{language.flag}}" title="{{language.name}}" /> {{language.name}}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 {% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{language.language_id}}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{language.language_id}}">{{entry_title}}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{language.language_id}}][title]" value="{{ category_description[language.language_id] ? category_description[language.language_id].title : '' }}" placeholder="{{entry_title}}" id="input-name{{language.language_id}}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{error_name[language.language_id]}}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/* 				  <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-short-description{{language.language_id}}">{{entry_short_description}}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <textarea name="category_description[{{language.language_id}}][short_description]" placeholder="{{entry_short_description}}" class="form-control" id="input-short-description{{language.language_id}}">{{ category_description[language.language_id] ? category_description[language.language_id].short_description : ''}}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{language.language_id}}">{{entry_description}}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{language.language_id}}][description]" placeholder="{{entry_description}}" class="d_visual_designer form-control summernote" id="input-description{{language.language_id}}" data-toggle="summernote" >{{category_description[language.language_id] ? category_description[language.language_id].description : ''}}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{language.language_id}}">{{entry_meta_title}}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{language.language_id}}][meta_title]" value="{{category_description[language.language_id] ? category_description[language.language_id].meta_title : ''}}" placeholder="{{entry_meta_title}}" id="input-meta-title{{language.language_id}}" class="form-control" />*/
/*                       {% if error_meta_title[language.language_id] %}*/
/*                       <div class="text-danger">{{error_meta_title[language.language_id]}}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{language.language_id}}">{{entry_meta_description}}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{language.language_id}}][meta_description]" rows="5" placeholder="{{entry_meta_description}}" id="input-meta-description{{language.language_id}}" class="form-control">{{category_description[language.language_id] ? category_description[language.language_id].meta_description : ''}}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{language.language_id}}">{{entry_meta_keyword}}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{language.language_id}}][meta_keyword]" rows="5" placeholder="{{entry_meta_keyword}}" id="input-meta-keyword{{language.language_id}}" class="form-control">{{category_description[language.language_id] ? category_description[language.language_id].meta_keyword : ''}}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane fade" id="tab-data">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-parent">{{entry_parent}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="path" value="{{path}}" placeholder="{{entry_parent}}" id="input-parent" class="form-control" />*/
/*                   <input type="hidden" name="parent_id" value="{{parent_id}}" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{entry_store}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if 0 in category_store %}*/
/*                         <input type="checkbox" name="category_store[]" value="0" checked="checked" />*/
/*                         {{text_default}}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="category_store[]" value="0" />*/
/*                         {{text_default}}*/
/*                         {% endif %}*/
/*                       </label>*/
/*                     </div>*/
/*                     {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if store.store_id in category_store %}*/
/*                         <input type="checkbox" name="category_store[]" value="{{store.store_id}}" checked="checked" />*/
/*                         {{store.name}}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="category_store[]" value="{{store.store_id}}" />*/
/*                         {{store.name}}*/
/*                         {% endif %}*/
/*                       </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{entry_image}}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{thumb}}" alt="" title="" data-placeholder="{{placeholder}}" /></a>*/
/*                   <input type="hidden" name="image" value="{{image}}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{entry_sort_order}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{sort_order}}" placeholder="{{entry_sort_order}}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{entry_status}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %}*/
/*                     <option value="1" selected="selected">{{text_enabled}}</option>*/
/*                     <option value="0">{{text_disabled}}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{text_enabled}}</option>*/
/*                     <option value="0" selected="selected">{{text_disabled}}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-setting">*/
/*                 <div class="tab-body">*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input_category_custom">{{entry_category_custom}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="hidden" name="custom" value="0" />*/
/*                             <input type="checkbox" class="switcher" data-label-text="{{text_enabled}}" id="input_category_custom" name="custom" {{ custom ? 'checked="checked"' : '' }} value="1" />*/
/*                         </div>*/
/*                     </div><!-- //checkbox -->*/
/*                     <div id="input_category_custom_form" {{ custom ? '' : 'class="hide"' }} >*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_category_layout_type">{{entry_category_layout_type}}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <div class="btn-group colors" data-toggle="buttons">*/
/*                                     {% for layout_type in layout_types %}*/
/*                                     <label class="btn btn-default {% if setting.layout_type and layout_type.id == setting.layout_type %}active{% endif %}"*/
/*                                      data-toggle="tooltip" data-html="true" title="{{layout_type.description|e('html')}}">*/
/*                                         <input type="radio" name="setting[layout_type]" value="{{layout_type.id}}" autocomplete="off" {% if setting.layout_type and layout_type.id == setting.layout_type %}checked{% endif %}> {{layout_type.name}}*/
/*                                     </label>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- //status -->*/
/* */
/* */
/* */
/*                         <div class="form-group" id="category_layout">*/
/*                             <label class="col-sm-2 control-label" for="input_category_layout">{{entry_category_layout}}</label>*/
/*                             <div class="col-sm-10 ">*/
/*                                 <div class="input">*/
/* */
/*                                 {% for layout in setting.layout %}*/
/* */
/*                                 <div class="input-group m-b">*/
/*                                     <select name="setting[layout][]"  class="form-control">*/
/*                                         {% for col in cols %}*/
/*                                         <option value="{{col}}" {% if layout == col %} selected="selected" {% endif %}>{{col}}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                     <span class="input-group-btn">*/
/*                                         <button class="btn btn-default remove" >{{button_remove}}</button>*/
/*                                     </span>*/
/*                                 </div><!-- /input-group -->*/
/* */
/*                                 {% endfor %}*/
/*                                 </div>*/
/*                                 <button class="btn btn-default add m-b">{{button_add}}</button>*/
/*                                 <div class="bs-callout bs-callout-warning">*/
/*                                     {{help_layout}}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <script type="text" id="template_input_category_layout">*/
/*                                 <div class="input-group m-b">*/
/*                                         <select name="setting[layout][]" class="form-control">*/
/*                                             {% for col in cols %}*/
/*                                                <option value="{{col}}">{{col}}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/* */
/*                                       <span class="input-group-btn">*/
/*                                         <button class="btn btn-default remove" >{{button_remove}}</button>*/
/*                                       </span>*/
/*                                 </div>*/
/*                             </script>*/
/*                             <script>*/
/*                             var $category_layout = $('#category_layout');*/
/*                             $(document).on('click', '#category_layout .add', function(e){*/
/* */
/*                                 var html = $('#template_input_category_layout').html();*/
/*                                 $category_layout.find('.input').append(html);*/
/*                                 e.preventDefault();*/
/*                             })*/
/*                             $(document).on('click', '#category_layout .remove', function(e){*/
/*                                 $(this).parents('.input-group').remove()*/
/*                                 e.preventDefault();*/
/*                             })*/
/* */
/*                             </script>*/
/*                         </div>*/
/* */
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_text">{{entry_category_post_page_limit}}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="setting[post_page_limit]" value="{{setting.post_page_limit}}" placeholder="{{entry_category_post_page_limit}}"  class="form-control" />*/
/*                             </div>*/
/*                         </div><!-- //post_page_limit -->*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_checkbox">{{entry_category_image_display}}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="hidden" name="setting[image_display]" value="0" />*/
/*                                 <input type="checkbox" class="switcher" data-label-text="{{text_enabled}}" id="input_category_image_display" name="setting[image_display]" {{ setting.image_display ? 'checked="checked"' : '' }} value="1" />*/
/*                             </div>*/
/*                         </div><!-- //checkbox -->*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_text">{{entry_category_image_size}}</label>*/
/*                             <div class="col-sm-5">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon">{{text_width}}</span>*/
/*                                     <input type="text" name="setting[image_width]" value="{{setting.image_width}}" placeholder="{{text_width}}"  class="form-control" />*/
/*                                 </div>*/
/* */
/* */
/*                             </div>*/
/*                             <div class="col-sm-5">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon">{{text_height}}</span>*/
/*                                     <input type="text" name="setting[image_height]" value="{{setting.image_height}}" placeholder="{{text_height}}"  class="form-control" />*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- //category_image -->*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_checkbox">{{entry_category_sub_category_display}}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="hidden" name="setting[sub_category_display]" value="0" />*/
/*                                 <input type="checkbox" class="switcher" data-label-text="{{text_enabled}}" id="input_category_sub_category_display" name="setting[sub_category_display]" {{ setting.sub_category_display ? 'checked="checked"' : '' }} value="1" />*/
/*                             </div>*/
/*                         </div><!-- //checkbox -->*/
/* */
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_select">{{entry_category_sub_category_col}}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="setting[sub_category_col]" id="input_category_sub_category_col" class="form-control">*/
/*                                     {% for col in cols %}*/
/*                                     <option value="{{col}}" {% if setting.sub_category_col == col %} selected="selected" {% endif %}>{{col}}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div><!-- //select -->*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_checkbox">{{entry_category_sub_category_image}}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="hidden" name="setting[sub_category_image]" value="0" />*/
/*                                 <input type="checkbox" class="switcher" data-label-text="{{text_enabled}}"id="input_category_sub_category_image" name="setting[sub_category_image]" {{ setting.sub_category_image ? 'checked="checked"' : '' }} value="1" />*/
/*                             </div>*/
/*                         </div><!-- //checkbox -->*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_checkbox">{{entry_category_sub_category_post_count}}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="hidden" name="setting[sub_category_post_count]" value="0" />*/
/*                                 <input type="checkbox" class="switcher" data-label-text="{{text_enabled}}" id="input_category_sub_category_post_count" name="setting[sub_category_post_count]" {{ setting.sub_category_post_count ? 'checked="checked"' : '' }} value="1" />*/
/*                             </div>*/
/*                         </div><!-- //checkbox -->*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input_text">{{entry_category_sub_category_image_size}}</label>*/
/*                             <div class="col-sm-5">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon">{{text_width}}</span>*/
/*                                     <input type="text" name="setting[sub_category_image_width]" value="{{setting.sub_category_image_width}}" placeholder="{{text_width}}" class="form-control" />*/
/*                                 </div>*/
/* */
/* */
/*                             </div>*/
/*                             <div class="col-sm-5">*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon">{{text_height}}</span>*/
/*                                     <input type="text" name="setting[sub_category_image_height]" value="{{setting.sub_category_image_height}}" placeholder="{{text_height}}"  class="form-control" />*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- //category_image -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{entry_store}}</td>*/
/*                       <td class="text-left">{{entry_layout}}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left">{{text_default}}</td>*/
/*                       <td class="text-left"><select name="category_layout[0]" class="form-control">*/
/*                           <option value=""></option>*/
/*                           {% for layout in layouts %}*/
/*                           {% if category_layout[0] and category_layout[0] == layout.layout_id %}*/
/*                           <option value="{{layout.layout_id}}" selected="selected">{{layout.name}}</option>*/
/*                           {% else %}*/
/*                           <option value="{{layout.layout_id}}">{{layout.name}}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select></td>*/
/*                     </tr>*/
/*                     {% for store in stores %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{store.name}}</td>*/
/*                       <td class="text-left"><select name="category_layout[{{store.store_id}}]" class="form-control">*/
/*                           <option value=""></option>*/
/*                           {% for layout in layouts %}*/
/*                           {% if category_layout[store.store_id] and category_layout[store.store_id] == layout.layout_id %}*/
/*                           <option value="{{layout.layout_id}}" selected="selected">{{layout.name}}</option>*/
/*                           {% else %}*/
/*                           <option value="{{layout.layout_id}}">{{layout.name}}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* {% for language in languages %}*/
/* {% if not store_2302 %}*/
/* $('#input-description{{language.language_id}}').summernote({*/
/* 	height: 300*/
/* });*/
/* {% endif %}*/
/* {% endfor %}*/
/* */
/* //checkbox*/
/*     $(".switcher[type='checkbox']").bootstrapSwitch({*/
/*         'onColor': 'success',*/
/*         'labelWidth': '50',*/
/*         'onText': '{{text_yes}}',*/
/*         'offText': '{{text_no}}',*/
/*     }).on('switchChange.bootstrapSwitch', function(event, state) {*/
/* */
/*         if($(this).attr('id') == 'input_category_custom'){*/
/*             if(state){*/
/*                 $('#input_category_custom_form').removeClass('hide')*/
/*             }else{*/
/*                  $('#input_category_custom_form').addClass('hide')*/
/*             }*/
/*         }*/
/*     });*/
/* */
/* $('input[name=\'path\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: '{{category_autocomplete}}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					category_id: 0,*/
/* 					name: '{{text_none}}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['title'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'path\']').val(item['label']);*/
/* 		$('input[name=\'parent_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* //--></script>*/
/* */
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* //--></script></div>*/
/* {{footer}}*/
/* */
