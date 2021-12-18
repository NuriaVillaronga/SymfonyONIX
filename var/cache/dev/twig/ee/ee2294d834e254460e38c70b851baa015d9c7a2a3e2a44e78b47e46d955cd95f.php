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
class __TwigTemplate_cac26a4b6021ac5347f37f4296f232d01adf2d30478888f843525c95c4b43920 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "messageCatalog"], "method", false, false, false, 15));
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
        <th>Catalog</th>
        <th>Actions</th>
    </tr>
      ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 35, $this->source); })()));
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
                // line 36
                echo "          <tr>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 40), "d-m-Y H:i"), "html", null, true);
                echo "</td>
            <td>
              ";
                // line 42
                if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 42))) {
                    echo " <!-- Compruebo si ROLE_ADMIN se encuentra en el array de roles-->
                <strong>Admin</strong>
              ";
                } else {
                    // line 45
                    echo "                <strong>User</strong>  
              ";
                }
                // line 46
                echo " 
            </td>
            <td>
              ";
                // line 49
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 49), 0))) {
                    echo " 
                <strong>No</strong>
              ";
                } else {
                    // line 52
                    echo "                <strong>Yes</strong>  
              ";
                }
                // line 53
                echo " 
            </td> 
            <td>
              ";
                // line 56
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isDeleted", [], "any", false, false, false, 56), 0))) {
                    echo " 
                <strong>No</strong>
              ";
                } else {
                    // line 59
                    echo "                <strong>Yes</strong>  
              ";
                }
                // line 60
                echo " 
            </td> 
            <td>
              <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_catalog", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">create</a>
              <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_catalog", ["user_id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">view</a>
            </td>
            <td>
              <a id=\"update-";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 67), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">update</a>
              <a id=\"delete-";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 68), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68)]), "html", null, true);
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
            // line 72
            echo "      ";
        } else {
            // line 73
            echo "        <tr>
          <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
          <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
          <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "email", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
          <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "lastLogin", [], "any", false, false, false, 77), "d-m-Y H:i"), "html", null, true);
            echo "</td>  
          <td><strong>User</strong></td>
          <td>
              ";
            // line 80
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "isActive", [], "any", false, false, false, 80), 0))) {
                echo " 
                <strong>No</strong>
              ";
            } else {
                // line 83
                echo "                <strong>Yes</strong>  
              ";
            }
            // line 84
            echo " 
          </td>
          <td>
              ";
            // line 87
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "isDeleted", [], "any", false, false, false, 87), 0))) {
                echo " 
                <strong>No</strong>
              ";
            } else {
                // line 90
                echo "                <strong>Yes</strong>  
              ";
            }
            // line 91
            echo " 
          </td>
          <td>
            <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_catalog", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">create</a>
            <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_catalog", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">view</a>
          </td>
          <td>
            <a id=\"update\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">update</a>
          </td>
        </tr>
      ";
        }
        // line 102
        echo "
  </table>

  ";
        // line 105
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 106
            echo "    <div class=\"navigation\">
      ";
            // line 107
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 107, $this->source); })()));
            echo "
    </div>
  ";
        }
        // line 110
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  363 => 110,  357 => 107,  354 => 106,  352 => 105,  347 => 102,  340 => 98,  334 => 95,  330 => 94,  325 => 91,  321 => 90,  315 => 87,  310 => 84,  306 => 83,  300 => 80,  294 => 77,  290 => 76,  286 => 75,  282 => 74,  279 => 73,  276 => 72,  256 => 68,  250 => 67,  244 => 64,  240 => 63,  235 => 60,  231 => 59,  225 => 56,  220 => 53,  216 => 52,  210 => 49,  205 => 46,  201 => 45,  195 => 42,  190 => 40,  186 => 39,  182 => 38,  178 => 37,  175 => 36,  157 => 35,  155 => 34,  139 => 20,  130 => 17,  127 => 16,  123 => 15,  114 => 12,  111 => 11,  107 => 10,  98 => 7,  95 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
{% for message in app.flashes('messageCatalog') %}
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
        <th>Catalog</th>
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
              <a href=\"{{ path('create_catalog', {'id': user.id}) }}\" class=\"btn btn-sm btn-success\">create</a>
              <a href=\"{{ path('view_catalog', {'user_id': user.id}) }}\" class=\"btn btn-sm btn-info\">view</a>
            </td>
            <td>
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
            <a href=\"{{ path('create_catalog', {'id': user.id}) }}\" class=\"btn btn-sm btn-success\">create</a>
            <a href=\"{{ path('view_catalog', {'id': user.id}) }}\" class=\"btn btn-sm btn-info\">view</a>
          </td>
          <td>
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

{% endblock %}", "list.html.twig", "/home/nuria/SymfonyONIX/templates/list.html.twig");
    }
}
