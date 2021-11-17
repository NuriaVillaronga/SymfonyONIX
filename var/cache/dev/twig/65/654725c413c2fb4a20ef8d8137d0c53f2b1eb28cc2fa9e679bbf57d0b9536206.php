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

/* view_catalog.html.twig */
class __TwigTemplate_9ebc6e0ba0b440ca2c0afe3ba26e4e73856ef360fd91b305b6664329d0d391d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view_catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view_catalog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "view_catalog.html.twig", 1);
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

        echo "View catalogs";
        
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
<div class=\"container\" style=\"margin-top:60px\">
  ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["catalogs"]) || array_key_exists("catalogs", $context) ? $context["catalogs"] : (function () { throw new RuntimeError('Variable "catalogs" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            echo "    
    <table class=\"table table-striped table-hover\">
      <tr class=\"table-dark\">
          <th>Catalog</th>
          <th>Files</th>
          <th>Products</th>
          <th>Action</th>
      </tr>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["catalogs"]) || array_key_exists("catalogs", $context) ? $context["catalogs"] : (function () { throw new RuntimeError('Variable "catalogs" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["catalog"]) {
                // line 16
                echo "      <tr>
        <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalog"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</td>
        <td>
            <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_onix", ["user_id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "id" => twig_get_attribute($this->env, $this->source, $context["catalog"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">upload</a>
        </td>
        <td>
            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_product", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "id" => twig_get_attribute($this->env, $this->source, $context["catalog"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">view products</a>
        </td>
        <td>
            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_catalog", ["user_id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "id" => twig_get_attribute($this->env, $this->source, $context["catalog"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">delete</a>
        </td>
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </table>

  ";
        } else {
            // line 32
            echo "    <div>No catalogs created yet</div>
  ";
        }
        // line 34
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "view_catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 34,  143 => 32,  138 => 29,  128 => 25,  122 => 22,  116 => 19,  111 => 17,  108 => 16,  104 => 15,  94 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}View catalogs{% endblock %}
{% block body %}

<div class=\"container\" style=\"margin-top:60px\">
  {% if catalogs|length > 0 %}
    
    <table class=\"table table-striped table-hover\">
      <tr class=\"table-dark\">
          <th>Catalog</th>
          <th>Files</th>
          <th>Products</th>
          <th>Action</th>
      </tr>
    {% for catalog in catalogs %}
      <tr>
        <td>{{ catalog.name }}</td>
        <td>
            <a href=\"{{ path('upload_onix', {'user_id': user.id, 'id': catalog.id}) }}\" class=\"btn btn-sm btn-primary\">upload</a>
        </td>
        <td>
            <a href=\"{{ path('view_product', {'id_user': user.id, 'id': catalog.id}) }}\" class=\"btn btn-sm btn-info\">view products</a>
        </td>
        <td>
            <a href=\"{{ path('delete_catalog', {'user_id': user.id, 'id': catalog.id}) }}\" class=\"btn btn-sm btn-danger\">delete</a>
        </td>
      </tr>
    {% endfor %}
    </table>

  {% else %}
    <div>No catalogs created yet</div>
  {% endif %}

</div>

{% endblock %}", "view_catalog.html.twig", "/home/nuria/SymfonyONIX/templates/view_catalog.html.twig");
    }
}
