<?php

/* extension/d_blog_module/post_list.twig */
class __TwigTemplate_0f43e5c10eca6e041ea2cf9dba21f252fb5865461c0bd1448e5065ec7e08141c extends Twig_Template
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
            <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\" onclick=\"\$('#form-post').attr('action', '";
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "').submit();\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-post').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
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
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"well\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-title\">";
        // line 37
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
                                <input type=\"text\" name=\"filter_title\" value=\"";
        // line 38
        echo (isset($context["filter_title"]) ? $context["filter_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-status\">";
        // line 41
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                    <option value=\"*\"></option>
                                    ";
        // line 44
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 45
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    ";
        } else {
            // line 47
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    ";
        }
        // line 49
        echo "                                    ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 50
            echo "                                    <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    ";
        } else {
            // line 52
            echo "                                    <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    ";
        }
        // line 54
        echo "                                </select>
                            </div>                                                                                                              
                        </div>
                        <div class=\"col-sm-4\">                            
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-category\">";
        // line 59
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</label>

                                <select name=\"filter_category\" id=\"input-category\" class=\"form-control\">
                                    <option value=\"*\"></option>                                                                                                                                             
                                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post_categories"]) ? $context["post_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post_category"]) {
            // line 64
            echo "                                    ";
            if (($this->getAttribute($context["post_category"], "category_id", array()) == (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                // line 65
                echo "                                    <option value=\"";
                echo $this->getAttribute($context["post_category"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["post_category"], "title", array());
                echo "</option>
                                    ";
            } else {
                // line 67
                echo "                                    <option value=\"";
                echo $this->getAttribute($context["post_category"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["post_category"], "title", array());
                echo "</option>
                                    ";
            }
            // line 69
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-tag\">";
        // line 73
        echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
        echo "</label>
                                <input type=\"text\" name=\"filter_tag\" value=\"";
        // line 74
        echo (isset($context["filter_tag"]) ? $context["filter_tag"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
        echo "\" id=\"input-tag\" class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-sm-4\">                                                                                                              
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-date-published\">";
        // line 79
        echo (isset($context["entry_date_published"]) ? $context["entry_date_published"] : null);
        echo "</label>
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"filter_date_published\" value=\"";
        // line 81
        echo (isset($context["filter_date_published"]) ? $context["filter_date_published"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_published"]) ? $context["entry_date_published"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-published\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-date-modified\">";
        // line 88
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "</label>
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 90
        echo (isset($context["filter_date_modified"]) ? $context["filter_date_modified"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 96
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
                        </div>                                                                                              

                    </div>
                </div>
            </div>
        </div>
        <form action=\"";
        // line 103
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-post\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                            <td class=\"text-center\">";
        // line 109
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 110
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.title")) {
            // line 111
            echo "                                <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                                ";
        } else {
            // line 113
            echo "                                <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                                ";
        }
        // line 115
        echo "                            </td>                            
                            <td class=\"text-left\">";
        // line 116
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.tag")) {
            // line 117
            echo "                                <a href=\"";
            echo (isset($context["sort_tag"]) ? $context["sort_tag"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_tag"]) ? $context["column_tag"] : null);
            echo "</a>
                                ";
        } else {
            // line 119
            echo "                                <a href=\"";
            echo (isset($context["sort_tag"]) ? $context["sort_tag"] : null);
            echo "\">";
            echo (isset($context["column_tag"]) ? $context["column_tag"] : null);
            echo "</a>
                                ";
        }
        // line 121
        echo "                            </td>                            
                            <td class=\"text-left\">";
        // line 122
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p2c.category_id")) {
            // line 123
            echo "                                <a href=\"";
            echo (isset($context["sort_category_id"]) ? $context["sort_category_id"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_categores"]) ? $context["column_categores"] : null);
            echo "</a>
                                ";
        } else {
            // line 125
            echo "                                <a href=\"";
            echo (isset($context["sort_category_id"]) ? $context["sort_category_id"] : null);
            echo "\">";
            echo (isset($context["column_categores"]) ? $context["column_categores"] : null);
            echo "</a>
                                ";
        }
        // line 127
        echo "                            </td>                            
                            <td class=\"text-left\">";
        // line 128
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
            // line 129
            echo "                                <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                                ";
        } else {
            // line 131
            echo "                                <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                                ";
        }
        // line 133
        echo "                            </td>
                            <td class=\"text-left\">";
        // line 134
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.date_published")) {
            // line 135
            echo "                                <a href=\"";
            echo (isset($context["sort_date_published"]) ? $context["sort_date_published"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_published"]) ? $context["column_date_published"] : null);
            echo "</a>
                                ";
        } else {
            // line 137
            echo "                                <a href=\"";
            echo (isset($context["sort_date_published"]) ? $context["sort_date_published"] : null);
            echo "\">";
            echo (isset($context["column_date_published"]) ? $context["column_date_published"] : null);
            echo "</a>
                                ";
        }
        // line 139
        echo "                            </td>
                            <td class=\"text-left\">";
        // line 140
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.date_modified")) {
            // line 141
            echo "                                <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>
                                ";
        } else {
            // line 143
            echo "                                <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>
                                ";
        }
        // line 145
        echo "                            </td>
                            <td class=\"text-right\">";
        // line 146
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 150
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 151
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 152
                echo "                        <tr>
                            <td class=\"text-center\">";
                // line 153
                if (twig_in_filter($this->getAttribute($context["post"], "post_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 154
                    echo "                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["post"], "post_id", array());
                    echo "\" checked=\"checked\" />
                                ";
                } else {
                    // line 156
                    echo "                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["post"], "post_id", array());
                    echo "\" />
                                ";
                }
                // line 158
                echo "                            </td>
                            <td class=\"text-center\">";
                // line 159
                if ($this->getAttribute($context["post"], "image", array())) {
                    // line 160
                    echo "                                <img src=\"";
                    echo $this->getAttribute($context["post"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["post"], "title", array());
                    echo "\" class=\"img-thumbnail\" />
                                ";
                } else {
                    // line 162
                    echo "                                <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                ";
                }
                // line 164
                echo "                            </td>
                            <td class=\"text-left\">";
                // line 165
                echo $this->getAttribute($context["post"], "title", array());
                echo "</td>                            
                            <td class=\"text-left\">";
                // line 166
                echo $this->getAttribute($context["post"], "tag", array());
                echo "</td>                            
                            <td class=\"text-left\">                                                                                                                      
                                ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "category", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 169
                    echo "                                ";
                    echo $this->getAttribute($context["category"], "category_title", array());
                    echo "</br>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "                                                                                                                                
                            </td>                            
                            <td class=\"text-left\">";
                // line 172
                echo $this->getAttribute($context["post"], "status", array());
                echo "</td>
                            <td class=\"text-left\">";
                // line 173
                echo $this->getAttribute($context["post"], "date_published", array());
                echo "</td>
                            <td class=\"text-left\">";
                // line 174
                echo $this->getAttribute($context["post"], "date_modified", array());
                echo "</td>
                            <td class=\"text-right\"><a href=\"";
                // line 175
                echo $this->getAttribute($context["post"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                        ";
        } else {
            // line 179
            echo "                        <tr>
                            <td class=\"text-center\" colspan=\"9\">";
            // line 180
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                        </tr>
                        ";
        }
        // line 183
        echo "                    </tbody>
                </table>
            </div>
        </form>
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 188
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 189
        echo (((isset($context["results"]) ? $context["results"] : null)) ? ((isset($context["results"]) ? $context["results"] : null)) : (""));
        echo "</div>
        </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function () {
    var url = '";
        // line 195
        echo (isset($context["post_search"]) ? $context["post_search"] : null);
        echo "';

    var filter_title = \$('input[name=\\'filter_title\\']').val();

    if (filter_title) {
        url += '&filter_title=' + encodeURIComponent(filter_title);
    }
    var filter_tag = \$('input[name=\\'filter_tag\\']').val();

    if (filter_tag) {
        url += '&filter_tag=' + encodeURIComponent(filter_tag);
    }

    var filter_category = \$('select[name=\\'filter_category\\']').val();

    if (filter_category !== '*') {
        url += '&filter_category=' + encodeURIComponent(filter_category);
    }

    var filter_status = \$('select[name=\\'filter_status\\']').val();

    if (filter_status !== '*') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    var filter_date_published = \$('input[name=\\'filter_date_published\\']').val();

    if (filter_date_published) {
        url += '&filter_date_published=' + encodeURIComponent(filter_date_published);
    }

    var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

    if (filter_date_modified) {
        url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }

    location = url;
});
//--></script>
<script type=\"text/javascript\"><!--
//              Posts
\$('input[name=\\'filter_title\\']').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: '";
        // line 240
        echo (isset($context["post_autocomplete"]) ? $context["post_autocomplete"] : null);
        echo "&filter_title=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['title'],
                        value: item['post_id']
                    };
                }));
            }
        });
    },
    'select': function (item) {
        \$('input[name=\\'filter_title\\']').val(item['label']);
    }
});

//--></script>
<script type=\"text/javascript\"><!--
//              Tags
\$('input[name=\\'filter_tag\\']').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: '";
        // line 263
        echo (isset($context["post_autocomplete"]) ? $context["post_autocomplete"] : null);
        echo "&filter_tag=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['tag'],
                        value: item['post_id']
                    };
                }));
            }
        });
    },
    'select': function (item) {
        \$('input[name=\\'filter_tag\\']').val(item['label']);
    }
});

//--></script>
<script type=\"text/javascript\"><!--
// Category
\$('select[name=\\'filter_category\\']').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: '";
        // line 286
        echo (isset($context["category_autocomplete"]) ? $context["category_autocomplete"] : null);
        echo "&filter_category=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['title'],
                        value: item['category_id']
                    };
                }));
            }
        });
    },
    'select': function (item) {
        \$('select[name=\\'filter_category\\']').val('');

        \$('#post-category' + item['value']).remove();

        \$('#post-category').append('<div id=\"post-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"post_category[]\" value=\"' + item['value'] + '\" /></div>');
    }
});

\$('#post-category').delegate('.fa-minus-circle', 'click', function () {
    \$(this).parent().remove();
});

\$('#post-filter').delegate('.fa-minus-circle', 'click', function () {
    \$(this).parent().remove();
});
//--></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    pickTime: false
});
//--></script>
";
        // line 322
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/d_blog_module/post_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 322,  642 => 286,  616 => 263,  590 => 240,  542 => 195,  533 => 189,  529 => 188,  522 => 183,  516 => 180,  513 => 179,  510 => 178,  499 => 175,  495 => 174,  491 => 173,  487 => 172,  483 => 170,  474 => 169,  470 => 168,  465 => 166,  461 => 165,  458 => 164,  454 => 162,  446 => 160,  444 => 159,  441 => 158,  435 => 156,  429 => 154,  427 => 153,  424 => 152,  419 => 151,  417 => 150,  410 => 146,  407 => 145,  399 => 143,  389 => 141,  387 => 140,  384 => 139,  376 => 137,  366 => 135,  364 => 134,  361 => 133,  353 => 131,  343 => 129,  341 => 128,  338 => 127,  330 => 125,  320 => 123,  318 => 122,  315 => 121,  307 => 119,  297 => 117,  295 => 116,  292 => 115,  284 => 113,  274 => 111,  272 => 110,  268 => 109,  259 => 103,  249 => 96,  238 => 90,  233 => 88,  221 => 81,  216 => 79,  206 => 74,  202 => 73,  197 => 70,  191 => 69,  183 => 67,  175 => 65,  172 => 64,  168 => 63,  161 => 59,  154 => 54,  148 => 52,  142 => 50,  139 => 49,  133 => 47,  127 => 45,  125 => 44,  119 => 41,  111 => 38,  107 => 37,  97 => 30,  93 => 28,  85 => 24,  82 => 23,  74 => 19,  72 => 18,  66 => 14,  55 => 12,  51 => 11,  46 => 9,  39 => 7,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{header}}{{column_left}}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right"><a href="{{add}}" data-toggle="tooltip" title="{{button_add}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*                 <button type="button" data-toggle="tooltip" title="{{button_copy}}" class="btn btn-default" onclick="$('#form-post').attr('action', '{{copy}}').submit();"><i class="fa fa-copy"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{button_delete}}" class="btn btn-danger" onclick="confirm('{{text_confirm}}') ? $('#form-post').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*             </div>*/
/*             <h1>{{heading_title}}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{breadcrumb['href']}}">{{breadcrumb.text}}</a></li>*/
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
/*         {% if success %}*/
/*         <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{success}}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-list"></i> {{text_list}}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="well">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-title">{{entry_title}}</label>*/
/*                                 <input type="text" name="filter_title" value="{{filter_title}}" placeholder="{{entry_title}}" id="input-title" class="form-control" />*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-status">{{entry_status}}</label>*/
/*                                 <select name="filter_status" id="input-status" class="form-control">*/
/*                                     <option value="*"></option>*/
/*                                     {% if filter_status == '1' %}*/
/*                                     <option value="1" selected="selected">{{text_enabled}}</option>*/
/*                                     {% else %}*/
/*                                     <option value="1">{{text_enabled}}</option>*/
/*                                     {% endif %}*/
/*                                     {% if filter_status == '0' %}*/
/*                                     <option value="0" selected="selected">{{text_disabled}}</option>*/
/*                                     {% else %}*/
/*                                     <option value="0">{{text_disabled}}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>                                                                                                              */
/*                         </div>*/
/*                         <div class="col-sm-4">                            */
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-category">{{entry_category}}</label>*/
/* */
/*                                 <select name="filter_category" id="input-category" class="form-control">*/
/*                                     <option value="*"></option>                                                                                                                                             */
/*                                     {% for post_category in post_categories %}*/
/*                                     {% if post_category.category_id == filter_category %}*/
/*                                     <option value="{{post_category.category_id}}" selected="selected">{{post_category.title}}</option>*/
/*                                     {% else %}*/
/*                                     <option value="{{post_category.category_id}}">{{post_category.title}}</option>*/
/*                                     {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-tag">{{entry_tag}}</label>*/
/*                                 <input type="text" name="filter_tag" value="{{filter_tag}}" placeholder="{{entry_tag}}" id="input-tag" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-4">                                                                                                              */
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-date-published">{{entry_date_published}}</label>*/
/*                                 <div class="input-group date">*/
/*                                     <input type="text" name="filter_date_published" value="{{filter_date_published}}" placeholder="{{entry_date_published}}" data-date-format="YYYY-MM-DD" id="input-date-published" class="form-control" />*/
/*                                     <span class="input-group-btn">*/
/*                                         <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-date-modified">{{entry_date_modified}}</label>*/
/*                                 <div class="input-group date">*/
/*                                     <input type="text" name="filter_date_modified" value="{{filter_date_modified}}" placeholder="{{entry_date_modified}}" data-date-format="YYYY-MM-DD" id="input-date-modified" class="form-control" />*/
/*                                     <span class="input-group-btn">*/
/*                                         <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> {{button_filter}}</button>*/
/*                         </div>                                                                                              */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <form action="{{delete}}" method="post" enctype="multipart/form-data" id="form-post">*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                             <td class="text-center">{{column_image}}</td>*/
/*                             <td class="text-left">{% if sort == 'pd.title' %}*/
/*                                 <a href="{{sort_title}}" class="{{order|lower}}">{{column_title}}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{sort_title}}">{{column_title}}</a>*/
/*                                 {% endif %}*/
/*                             </td>                            */
/*                             <td class="text-left">{% if sort == 'p.tag' %}*/
/*                                 <a href="{{sort_tag}}" class="{{order|lower}}">{{column_tag}}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{sort_tag}}">{{column_tag}}</a>*/
/*                                 {% endif %}*/
/*                             </td>                            */
/*                             <td class="text-left">{% if sort == 'p2c.category_id' %}*/
/*                                 <a href="{{sort_category_id}}" class="{{order|lower}}">{{column_categores}}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{sort_category_id}}">{{column_categores}}</a>*/
/*                                 {% endif %}*/
/*                             </td>                            */
/*                             <td class="text-left">{% if sort == 'p.status' %}*/
/*                                 <a href="{{sort_status}}" class="{{order|lower}}">{{column_status}}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{sort_status}}">{{column_status}}</a>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td class="text-left">{% if sort == 'p.date_published' %}*/
/*                                 <a href="{{sort_date_published}}" class="{{order|lower}}">{{column_date_published}}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{sort_date_published}}">{{column_date_published}}</a>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td class="text-left">{% if sort == 'p.date_modified' %}*/
/*                                 <a href="{{sort_date_modified}}" class="{{order|lower}}">{{column_date_modified}}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{sort_date_modified}}">{{column_date_modified}}</a>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td class="text-right">{{column_action}}</td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% if posts %}*/
/*                         {% for post in posts %}*/
/*                         <tr>*/
/*                             <td class="text-center">{% if post.post_id in selected %}*/
/*                                 <input type="checkbox" name="selected[]" value="{{post.post_id}}" checked="checked" />*/
/*                                 {% else %}*/
/*                                 <input type="checkbox" name="selected[]" value="{{post.post_id}}" />*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td class="text-center">{% if post.image %}*/
/*                                 <img src="{{post.image}}" alt="{{post.title}}" class="img-thumbnail" />*/
/*                                 {% else %}*/
/*                                 <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td class="text-left">{{post.title}}</td>                            */
/*                             <td class="text-left">{{post.tag}}</td>                            */
/*                             <td class="text-left">                                                                                                                      */
/*                                 {% for category in post.category %}*/
/*                                 {{category.category_title}}</br>*/
/*                                 {% endfor %}                                                                                                                                */
/*                             </td>                            */
/*                             <td class="text-left">{{post.status}}</td>*/
/*                             <td class="text-left">{{post.date_published}}</td>*/
/*                             <td class="text-left">{{post.date_modified}}</td>*/
/*                             <td class="text-right"><a href="{{post.edit}}" data-toggle="tooltip" title="{{button_edit}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         {% else %}*/
/*                         <tr>*/
/*                             <td class="text-center" colspan="9">{{text_no_results}}</td>*/
/*                         </tr>*/
/*                         {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </form>*/
/*         <div class="row">*/
/*             <div class="col-sm-6 text-left">{{pagination}}</div>*/
/*             <div class="col-sm-6 text-right">{{ results ? results : "" }}</div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function () {*/
/*     var url = '{{post_search}}';*/
/* */
/*     var filter_title = $('input[name=\'filter_title\']').val();*/
/* */
/*     if (filter_title) {*/
/*         url += '&filter_title=' + encodeURIComponent(filter_title);*/
/*     }*/
/*     var filter_tag = $('input[name=\'filter_tag\']').val();*/
/* */
/*     if (filter_tag) {*/
/*         url += '&filter_tag=' + encodeURIComponent(filter_tag);*/
/*     }*/
/* */
/*     var filter_category = $('select[name=\'filter_category\']').val();*/
/* */
/*     if (filter_category !== '*') {*/
/*         url += '&filter_category=' + encodeURIComponent(filter_category);*/
/*     }*/
/* */
/*     var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/*     if (filter_status !== '*') {*/
/*         url += '&filter_status=' + encodeURIComponent(filter_status);*/
/*     }*/
/* */
/*     var filter_date_published = $('input[name=\'filter_date_published\']').val();*/
/* */
/*     if (filter_date_published) {*/
/*         url += '&filter_date_published=' + encodeURIComponent(filter_date_published);*/
/*     }*/
/* */
/*     var filter_date_modified = $('input[name=\'filter_date_modified\']').val();*/
/* */
/*     if (filter_date_modified) {*/
/*         url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);*/
/*     }*/
/* */
/*     location = url;*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* //              Posts*/
/* $('input[name=\'filter_title\']').autocomplete({*/
/*     'source': function (request, response) {*/
/*         $.ajax({*/
/*             url: '{{post_autocomplete}}&filter_title=' + encodeURIComponent(request),*/
/*             dataType: 'json',*/
/*             success: function (json) {*/
/*                 response($.map(json, function (item) {*/
/*                     return {*/
/*                         label: item['title'],*/
/*                         value: item['post_id']*/
/*                     };*/
/*                 }));*/
/*             }*/
/*         });*/
/*     },*/
/*     'select': function (item) {*/
/*         $('input[name=\'filter_title\']').val(item['label']);*/
/*     }*/
/* });*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* //              Tags*/
/* $('input[name=\'filter_tag\']').autocomplete({*/
/*     'source': function (request, response) {*/
/*         $.ajax({*/
/*             url: '{{post_autocomplete}}&filter_tag=' + encodeURIComponent(request),*/
/*             dataType: 'json',*/
/*             success: function (json) {*/
/*                 response($.map(json, function (item) {*/
/*                     return {*/
/*                         label: item['tag'],*/
/*                         value: item['post_id']*/
/*                     };*/
/*                 }));*/
/*             }*/
/*         });*/
/*     },*/
/*     'select': function (item) {*/
/*         $('input[name=\'filter_tag\']').val(item['label']);*/
/*     }*/
/* });*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* // Category*/
/* $('select[name=\'filter_category\']').autocomplete({*/
/*     'source': function (request, response) {*/
/*         $.ajax({*/
/*             url: '{{category_autocomplete}}&filter_category=' + encodeURIComponent(request),*/
/*             dataType: 'json',*/
/*             success: function (json) {*/
/*                 response($.map(json, function (item) {*/
/*                     return {*/
/*                         label: item['title'],*/
/*                         value: item['category_id']*/
/*                     };*/
/*                 }));*/
/*             }*/
/*         });*/
/*     },*/
/*     'select': function (item) {*/
/*         $('select[name=\'filter_category\']').val('');*/
/* */
/*         $('#post-category' + item['value']).remove();*/
/* */
/*         $('#post-category').append('<div id="post-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="post_category[]" value="' + item['value'] + '" /></div>');*/
/*     }*/
/* });*/
/* */
/* $('#post-category').delegate('.fa-minus-circle', 'click', function () {*/
/*     $(this).parent().remove();*/
/* });*/
/* */
/* $('#post-filter').delegate('.fa-minus-circle', 'click', function () {*/
/*     $(this).parent().remove();*/
/* });*/
/* //--></script>*/
/* <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/* <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*     pickTime: false*/
/* });*/
/* //--></script>*/
/* {{footer}}*/
