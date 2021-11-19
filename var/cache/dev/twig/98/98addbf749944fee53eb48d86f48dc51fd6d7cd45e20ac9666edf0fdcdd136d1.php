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

/* view_product.html.twig */
class __TwigTemplate_7901113b6f8f0f9d4413ee20aa84ea87efd94ad88dab3b96751db0ca3883ae84 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view_product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "view_product.html.twig", 1);
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

        echo "View files";
        
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
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            echo "    
    <table class=\"table table-striped table-hover\">
      <tr class=\"table-dark\">
          <th>Arbitro</th>
          <th>Titulo</th>
          <th>ISBN</th>
          <th>Forma producto</th>
          <th>Autores</th>
          <th>Asignaturas</th>
          <th>Actions</th>
      </tr>
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 19
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "            <tr>
                <td>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "recordReference", [], "any", false, false, false, 21), "html", null, true);
                    echo "</td>
                <td>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "titleText", [], "any", false, false, false, 22), "html", null, true);
                    echo "</td>
                <td>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productIDType", [], "any", false, false, false, 23), "html", null, true);
                    echo "</td>
                <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productForm", [], "any", false, false, false, 24), "html", null, true);
                    echo "</td>
                <td>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "personName", [], "any", false, false, false, 25), "html", null, true);
                    echo "</td>
                <td>";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subjectHeadingText", [], "any", false, false, false, 26), "html", null, true);
                    echo "</td>
                <td>
                    <a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "id_catalog" => twig_get_attribute($this->env, $this->source, (isset($context["catalog"]) || array_key_exists("catalog", $context) ? $context["catalog"] : (function () { throw new RuntimeError('Variable "catalog" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "id_file" => twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 28), "id_product" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger\">delete</a>
                    <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_product", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "id_catalog" => twig_get_attribute($this->env, $this->source, (isset($context["catalog"]) || array_key_exists("catalog", $context) ? $context["catalog"] : (function () { throw new RuntimeError('Variable "catalog" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "id_product" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">update</a>
                </td>
            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </table>

    <div class=\"navigation\">
      ";
            // line 37
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()));
            echo "
    </div>

  ";
        } else {
            // line 41
            echo "    <div>No products loaded yet</div>
  ";
        }
        // line 43
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "view_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 43,  176 => 41,  169 => 37,  164 => 34,  158 => 33,  148 => 29,  144 => 28,  139 => 26,  135 => 25,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  116 => 20,  111 => 19,  107 => 18,  94 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}View files{% endblock %}
{% block body %}

<div class=\"container\" style=\"margin-top:60px\">
  {% if files|length > 0 %}
    
    <table class=\"table table-striped table-hover\">
      <tr class=\"table-dark\">
          <th>Arbitro</th>
          <th>Titulo</th>
          <th>ISBN</th>
          <th>Forma producto</th>
          <th>Autores</th>
          <th>Asignaturas</th>
          <th>Actions</th>
      </tr>
    {% for file in files %}
        {% for product in pagination %}
            <tr>
                <td>{{ product.recordReference }}</td>
                <td>{{ product.titleText }}</td>
                <td>{{ product.productIDType }}</td>
                <td>{{ product.productForm }}</td>
                <td>{{ product.personName }}</td>
                <td>{{ product.subjectHeadingText }}</td>
                <td>
                    <a href=\"{{ path('delete_product', {'id_user': user.id, 'id_catalog': catalog.id, 'id_file': file.id, 'id_product': product.id}) }}\" class=\"btn btn-sm btn-danger\">delete</a>
                    <a href=\"{{ path('update_product', {'id_user': user.id, 'id_catalog': catalog.id, 'id_product': product.id}) }}\" class=\"btn btn-sm btn-primary\">update</a>
                </td>
            </tr>
        {% endfor %}
    {% endfor %}
    </table>

    <div class=\"navigation\">
      {{ knp_pagination_render(pagination) }}
    </div>

  {% else %}
    <div>No products loaded yet</div>
  {% endif %}

</div>
{% endblock %}
", "view_product.html.twig", "/home/nuria/SymfonyONIX/templates/view_product.html.twig");
    }
}
