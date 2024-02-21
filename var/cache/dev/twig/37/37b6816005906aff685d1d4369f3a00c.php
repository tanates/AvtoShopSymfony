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

/* index.html.twig */
class __TwigTemplate_d99674a8d2dc329df0ae21acc9266be7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Avto ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"> 
 <style>
  #profile-dropdown { border: 1px solid #ccc; width: 300px; } img { width: 100%; height: 5vw; /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */ object-fit: cover; } 
 </style> 
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
   <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.buy-button').forEach(function(button) {
        button.addEventListener('click', function(event) {
          event.preventDefault();
          var productId = this.dataset.productId;
          fetch('/cart/add/' + productId, {
            method: 'POST',
          })
          .then(response => response.json())
          .then(data => {
            document.getElementById('cart-count').innerText = data;
          });
        });
      });
    });
  </script>
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "    <header class=\"d-flex justify-content-between p-3 bg-light\">
        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexApp");
        echo "\" class=\"btn btn-light btn-outline-secondary\">Avto</a>
        <div class=\"d-flex\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartApp");
        echo "\" class=\"btn-light btn btn-outline-secondary\" id=\"cart\">Корзина (<span id=\"cart-count\">0</span>)</a>
            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "                <div class=\"btn-group bg-light\">
                    <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Профиль
                    </a>
                    <ul class=\"dropdown-menu bg-light\" aria-labelledby=\"dropdownMenuLink\">
                        <li><a class=\"dropdown-item\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"btn btn-light btn-outline-secondary\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Выход</a></li>
                        ";
            // line 48
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "roles", [], "any", false, false, false, 48))) {
                // line 49
                echo "                            <li><a class=\"mt-1 btn btn-light btn-outline-secondary\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_avto");
                echo "\">Добавить товар</a></li>
                        ";
            }
            // line 51
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 54
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-light btn-outline-secondary\">
                    Вход
                </a>
            ";
        }
        // line 58
        echo "        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo " <div class=\"p-3 bg-dark\">
  <main class=\"container bg-light\">
        <div class=\"row\">
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 66
            echo "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "AvtoImagesLink", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "AvtoName", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
                        <div class=\"card-body bg-dark\">
                            <h5 class=\"card-title text-light\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "AvtoName", [], "any", false, false, false, 70), "html", null, true);
            echo "</h5>
                            <p class=\"card-text text-light\">\$ ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "PriceAvto", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
                            <div class=\"d-flex\">
                              <a class=\"btn btn-secondary buy-button\" id=\"btn_buy\" data-product-id=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\">Купить</a>
                              ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "roles", [], "any", false, false, false, 74)))) {
                // line 75
                echo "                                 <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avto_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\" class=\"btn btn-secondary  ms-auto\">Удалить товар</a>
                              ";
            }
            // line 77
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </div>
    </main>
 </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 88
        echo "  <footer class=\"py-1 p-3 bg-light\">
    <p class=\"text-center text-body-secondary\">© 2024 Company, Inc</p>
  </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  302 => 88,  292 => 87,  279 => 82,  269 => 77,  263 => 75,  261 => 74,  257 => 73,  252 => 71,  248 => 70,  241 => 68,  237 => 66,  233 => 65,  228 => 62,  218 => 61,  206 => 58,  198 => 54,  193 => 51,  187 => 49,  185 => 48,  181 => 47,  176 => 45,  169 => 40,  167 => 39,  163 => 38,  158 => 36,  155 => 35,  145 => 34,  116 => 13,  106 => 12,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Avto {% endblock %}

{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"> 
 <style>
  #profile-dropdown { border: 1px solid #ccc; width: 300px; } img { width: 100%; height: 5vw; /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */ object-fit: cover; } 
 </style> 
  {% endblock %}

{% block javascripts %}
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
   <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.buy-button').forEach(function(button) {
        button.addEventListener('click', function(event) {
          event.preventDefault();
          var productId = this.dataset.productId;
          fetch('/cart/add/' + productId, {
            method: 'POST',
          })
          .then(response => response.json())
          .then(data => {
            document.getElementById('cart-count').innerText = data;
          });
        });
      });
    });
  </script>
  
{% endblock %}

{% block header %}
    <header class=\"d-flex justify-content-between p-3 bg-light\">
        <a href=\"{{ path('indexApp') }}\" class=\"btn btn-light btn-outline-secondary\">Avto</a>
        <div class=\"d-flex\">
            <a href=\"{{path('cartApp')}}\" class=\"btn-light btn btn-outline-secondary\" id=\"cart\">Корзина (<span id=\"cart-count\">0</span>)</a>
            {% if app.user %}
                <div class=\"btn-group bg-light\">
                    <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Профиль
                    </a>
                    <ul class=\"dropdown-menu bg-light\" aria-labelledby=\"dropdownMenuLink\">
                        <li><a class=\"dropdown-item\">{{ app.user.email }}</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"btn btn-light btn-outline-secondary\" href=\"{{ path('app_logout') }}\">Выход</a></li>
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            <li><a class=\"mt-1 btn btn-light btn-outline-secondary\" href=\"{{ path('add_avto') }}\">Добавить товар</a></li>
                        {% endif %}
                    </ul>
                </div>
            {% else %}
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-light btn-outline-secondary\">
                    Вход
                </a>
            {% endif %}
        </div>
    </header>
{% endblock %}
{% block body %}
 <div class=\"p-3 bg-dark\">
  <main class=\"container bg-light\">
        <div class=\"row\">
            {% for product in data %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"{{ product.AvtoImagesLink }}\" class=\"card-img-top\" alt=\"{{ product.AvtoName }}\">
                        <div class=\"card-body bg-dark\">
                            <h5 class=\"card-title text-light\">{{ product.AvtoName }}</h5>
                            <p class=\"card-text text-light\">\$ {{ product.PriceAvto }}</p>
                            <div class=\"d-flex\">
                              <a class=\"btn btn-secondary buy-button\" id=\"btn_buy\" data-product-id=\"{{ product.id }}\">Купить</a>
                              {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                                 <a href=\"{{ path('avto_delete', {'id': product.id}) }}\" class=\"btn btn-secondary  ms-auto\">Удалить товар</a>
                              {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </main>
 </div>
{% endblock %}

{% block footer %}
  <footer class=\"py-1 p-3 bg-light\">
    <p class=\"text-center text-body-secondary\">© 2024 Company, Inc</p>
  </footer>
{% endblock %}
", "index.html.twig", "C:\\Users\\Acer\\Desktop\\examPhpBykov\\templates\\index.html.twig");
    }
}
