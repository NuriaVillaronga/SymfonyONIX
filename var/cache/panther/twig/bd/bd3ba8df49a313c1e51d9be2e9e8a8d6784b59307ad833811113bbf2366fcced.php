<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* list.html.twig */
class __TwigTemplate_0c661787eea8c6677d7206047f566cc5a9b77a2c0fe3f9395b5d82616272d609 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "messageCreate"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "    <div class=\"alert alert-success\" role=\"alert\" style=\"width:50%; text-align:center; margin-left:23.5%; margin-top:1.5%;\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "messageUpdate"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"alert alert-success\" role=\"alert\" style=\"width:50%; text-align:center; margin-left:23.5%; margin-top:1.5%;\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "messageUpload"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "    <div class=\"alert alert-success\" role=\"alert\" style=\"width:50%; text-align:center; margin-left:23.5%; margin-top:1.5%;\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<div class=\"container\" style=\"margin-top:60px\">
  <table class=\"table table-striped table-hover\">
    <tr class=\"table-dark\">
        <th>Id</th>
        <th>Name</th> 
        <th>Email</th> 
        <th>Last Login</th>
        <th>Role</th> 
        <th>Active</th>
        <th>Deleted</th>
        <th>Actions</th>
    </tr>
      ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 35
                echo "          <tr>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 39), "d-m-Y H:i"), "html", null, true);
                echo "</td>
            <td>
              ";
                // line 41
                if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41))) {
                    echo " <!-- Compruebo si ROLE_ADMIN se encuentra en el array de roles-->
                <strong>Admin</strong>
              ";
                } else {
                    // line 44
                    echo "                <strong>User</strong>  
              ";
                }
                // line 45
                echo " 
            </td>
            <td>
              ";
                // line 48
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 48), 0))) {
                    echo " 
                <strong>No</strong>
              ";
                } else {
                    // line 51
                    echo "                <strong>Yes</strong>  
              ";
                }
                // line 52
                echo " 
            </td> 
            <td>
              ";
                // line 55
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isDeleted", [], "any", false, false, false, 55), 0))) {
                    echo " 
                <strong>No</strong>
              ";
                } else {
                    // line 58
                    echo "                <strong>Yes</strong>  
              ";
                }
                // line 59
                echo " 
            </td> 
            <td>
              <a id=\"upload-";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_onix", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">upload</a>
              <a id=\"view-";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_file", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">view files</a>
              <a id=\"update-";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">update</a>
              <a id=\"delete-";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">delete</a>
            </td>
          </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "      ";
        } else {
            // line 70
            echo "        <tr>
          <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
          <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
          <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "email", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
          <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "lastLogin", [], "any", false, false, false, 74), "d-m-Y H:i"), "html", null, true);
            echo "</td>  
          <td><strong>User</strong></td>
          <td>
              ";
            // line 77
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "isActive", [], "any", false, false, false, 77), 0))) {
                echo " 
                <strong>No</strong>
              ";
            } else {
                // line 80
                echo "                <strong>Yes</strong>  
              ";
            }
            // line 81
            echo " 
          </td>
          <td>
              ";
            // line 84
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "isDeleted", [], "any", false, false, false, 84), 0))) {
                echo " 
                <strong>No</strong>
              ";
            } else {
                // line 87
                echo "                <strong>Yes</strong>  
              ";
            }
            // line 88
            echo " 
          </td>
          <td>
            <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_onix", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">upload</a>
            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_file", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">view files</a>
            <a id=\"update\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">update</a>
          </td>
        </tr>
      ";
        }
        // line 97
        echo "
  </table>

  ";
        // line 100
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 101
            echo "    <div class=\"navigation\">
      ";
            // line 102
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()));
            echo "
    </div>
  ";
        }
        // line 105
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 105,  341 => 102,  338 => 101,  336 => 100,  331 => 97,  324 => 93,  320 => 92,  316 => 91,  311 => 88,  307 => 87,  301 => 84,  296 => 81,  292 => 80,  286 => 77,  280 => 74,  276 => 73,  272 => 72,  268 => 71,  265 => 70,  262 => 69,  242 => 65,  236 => 64,  230 => 63,  224 => 62,  219 => 59,  215 => 58,  209 => 55,  204 => 52,  200 => 51,  194 => 48,  189 => 45,  185 => 44,  179 => 41,  174 => 39,  170 => 38,  166 => 37,  162 => 36,  159 => 35,  141 => 34,  139 => 33,  124 => 20,  115 => 17,  112 => 16,  108 => 15,  99 => 12,  96 => 11,  92 => 10,  83 => 7,  80 => 6,  76 => 5,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Dashboard admin{% endblock %}
{% block body %}

{% for message in app.flashes('messageCreate') %}
    <div class=\"alert alert-success\" role=\"alert\" style=\"width:50%; text-align:center; margin-left:23.5%; margin-top:1.5%;\">
        {{ message }}
    </div>
{% endfor %}
{% for message in app.flashes('messageUpdate') %}
    <div class=\"alert alert-success\" role=\"alert\" style=\"width:50%; text-align:center; margin-left:23.5%; margin-top:1.5%;\">
        {{ message }}
    </div>
{% endfor %}
{% for message in app.flashes('messageUpload') %}
    <div class=\"alert alert-success\" role=\"alert\" style=\"width:50%; text-align:center; margin-left:23.5%; margin-top:1.5%;\">
        {{ message }}
    </div>
{% endfor %}

<div class=\"container\" style=\"margin-top:60px\">
  <table class=\"table table-striped table-hover\">
    <tr class=\"table-dark\">
        <th>Id</th>
        <th>Name</th> 
        <th>Email</th> 
        <th>Last Login</th>
        <th>Role</th> 
        <th>Active</th>
        <th>Deleted</th>
        <th>Actions</th>
    </tr>
      {% if is_granted('ROLE_ADMIN') %}
        {% for user in pagination %}
          <tr>
            <td>{{ user.id }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.lastLogin|date('d-m-Y H:i') }}</td>
            <td>
              {% if 'ROLE_ADMIN' in user.roles %} <!-- Compruebo si ROLE_ADMIN se encuentra en el array de roles-->
                <strong>Admin</strong>
              {% else %}
                <strong>User</strong>  
              {% endif %} 
            </td>
            <td>
              {% if user.isActive == 0 %} 
                <strong>No</strong>
              {% else %}
                <strong>Yes</strong>  
              {% endif %} 
            </td> 
            <td>
              {% if user.isDeleted == 0 %} 
                <strong>No</strong>
              {% else %}
                <strong>Yes</strong>  
              {% endif %} 
            </td> 
            <td>
              <a id=\"upload-{{loop.index}}\" href=\"{{ path('upload_onix', {'id': user.id}) }}\" class=\"btn btn-sm btn-success\">upload</a>
              <a id=\"view-{{loop.index}}\" href=\"{{ path('view_file', {'id': user.id}) }}\" class=\"btn btn-sm btn-info\">view files</a>
              <a id=\"update-{{loop.index}}\" href=\"{{ path('user_update', {'id': user.id}) }}\" class=\"btn btn-sm btn-primary\">update</a>
              <a id=\"delete-{{loop.index}}\" href=\"{{ path('user_delete', {'id': user.id}) }}\" class=\"btn btn-sm btn-danger\">delete</a>
            </td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td>{{ app.user.id }}</td>
          <td>{{ app.user.name }}</td>
          <td>{{ app.user.email }}</td>
          <td>{{ app.user.lastLogin|date('d-m-Y H:i') }}</td>  
          <td><strong>User</strong></td>
          <td>
              {% if app.user.isActive == 0 %} 
                <strong>No</strong>
              {% else %}
                <strong>Yes</strong>  
              {% endif %} 
          </td>
          <td>
              {% if app.user.isDeleted == 0 %} 
                <strong>No</strong>
              {% else %}
                <strong>Yes</strong>  
              {% endif %} 
          </td>
          <td>
            <a href=\"{{ path('upload_onix', {'id': app.user.id}) }}\" class=\"btn btn-sm btn-success\">upload</a>
            <a href=\"{{ path('view_file', {'id': app.user.id}) }}\" class=\"btn btn-sm btn-info\">view files</a>
            <a id=\"update\" href=\"{{ path('user_update', {'id': app.user.id }) }}\" class=\"btn btn-sm btn-primary\">update</a>
          </td>
        </tr>
      {% endif %}

  </table>

  {% if is_granted('ROLE_ADMIN') %}
    <div class=\"navigation\">
      {{ knp_pagination_render(pagination) }}
    </div>
  {% endif %}

</div>

{% endblock %}", "list.html.twig", "/home/nuria/onixProject/templates/list.html.twig");
    }
}
