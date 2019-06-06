<?php

/* extension/d_blog_module/category_list.twig */
class __TwigTemplate_0889bb6ce7fe633a83f6bc72903a60aa66dc9498c8591208478b96297ebd2499 extends Twig_Template
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
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\" onclick=\"\$('#form-category').attr('action', '";
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "').submit();\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "title")) {
            // line 40
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        } else {
            // line 42
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        }
        // line 43
        echo "</td>
                  <td class=\"text-right\">";
        // line 44
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            // line 45
            echo "                    <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        } else {
            // line 47
            echo "                    <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        }
        // line 48
        echo "</td>
                  <td class=\"text-right\">";
        // line 49
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 50
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 54
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 55
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 56
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 57
                if (twig_in_filter($this->getAttribute($context["category"], "category_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 58
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 60
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" />
                    ";
                }
                // line 61
                echo "</td>
                  <td class=\"text-left\">";
                // line 62
                echo $this->getAttribute($context["category"], "title", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 63
                echo $this->getAttribute($context["category"], "sort_order", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 64
                echo $this->getAttribute($context["category"], "status", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 65
                echo $this->getAttribute($context["category"], "edit", array(), "array");
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                ";
        } else {
            // line 69
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 70
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 73
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 78
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 79
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 85
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/d_blog_module/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 85,  242 => 79,  238 => 78,  231 => 73,  225 => 70,  222 => 69,  219 => 68,  208 => 65,  204 => 64,  200 => 63,  196 => 62,  193 => 61,  187 => 60,  181 => 58,  179 => 57,  176 => 56,  171 => 55,  169 => 54,  162 => 50,  158 => 49,  155 => 48,  147 => 47,  137 => 45,  135 => 44,  132 => 43,  124 => 42,  114 => 40,  112 => 39,  103 => 33,  97 => 30,  93 => 28,  85 => 24,  82 => 23,  74 => 19,  72 => 18,  66 => 14,  55 => 12,  51 => 11,  46 => 9,  39 => 7,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{header}}{{column_left}}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{add}}" data-toggle="tooltip" title="{{button_add}}" class="btn btn-primary"><i class="fa fa-plus"></i></a> */
/* 										<button type="button" data-toggle="tooltip" title="{{button_copy}}" class="btn btn-default" onclick="$('#form-category').attr('action', '{{copy}}').submit();"><i class="fa fa-copy"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{button_delete}}" class="btn btn-danger" onclick="confirm('{{text_confirm}}') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
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
/*     {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{success}}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{text_list}}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{delete}}" method="post" enctype="multipart/form-data" id="form-category">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'title' %}*/
/*                     <a href="{{sort_title}}" class="{{order|lower}}">{{column_title}}</a>*/
/*                     {% else %}*/
/*                     <a href="{{sort_title}}">{{column_title}}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'sort_order' %}*/
/*                     <a href="{{sort_order}}" class="{{order|lower}}">{{column_sort_order}}</a>*/
/*                     {% else %}*/
/*                     <a href="{{sort_order}}">{{column_sort_order}}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{column_status}}</td>*/
/*                   <td class="text-right">{{column_action}}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if categories %}*/
/*                 {% for category in categories %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if category.category_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{category.category_id}}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{category.category_id}}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{category.title}}</td>*/
/*                   <td class="text-right">{{category.sort_order}}</td>*/
/*                   <td class="text-right">{{category.status}}</td>*/
/*                   <td class="text-right"><a href="{{category['edit']}}" data-toggle="tooltip" title="{{button_edit}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="5">{{text_no_results}}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{pagination}}</div>*/
/*           <div class="col-sm-6 text-right">{{results}}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{footer}}*/
