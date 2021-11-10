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

/* view.html.twig */
class __TwigTemplate_f33c9cc7916de9eaf5e4f5a2c5f72a0563ac51a7979d10f560c371a6177f0b0b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "View files";
        
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
<div class=\"container\" style=\"margin-top:60px\">
  ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            echo "    
    <table class=\"table table-striped table-hover\">
      <tr class=\"table-dark\">
          <th>Id file</th>
          <th>Catalog</th>
          <th>File</th>
          <th>Action</th>
      </tr>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 16
                echo "      <tr>
          <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "</td>
          <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "catalog", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
          <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "files", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
          <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteFiles", ["user_id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "files_id" => twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">delete</a></td>
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </table>

  ";
        } else {
            // line 26
            echo "    <div>No files uploaded yet</div>
  ";
        }
        // line 28
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  122 => 26,  117 => 23,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  93 => 16,  89 => 15,  79 => 7,  77 => 6,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
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
          <th>Id file</th>
          <th>Catalog</th>
          <th>File</th>
          <th>Action</th>
      </tr>
    {% for file in files %}
      <tr>
          <td>{{ file.id }}</td>
          <td>{{ file.catalog }}</td>
          <td>{{ file.files }}</td>
          <td><a href=\"{{ path('deleteFiles', {'user_id': user.id, 'files_id': file.id}) }}\" class=\"btn btn-sm btn-danger\">delete</a></td>
      </tr>
    {% endfor %}
    </table>

  {% else %}
    <div>No files uploaded yet</div>
  {% endif %}

</div>

{% endblock %}", "view.html.twig", "/home/nuria/onixProject/templates/view.html.twig");
    }
}
