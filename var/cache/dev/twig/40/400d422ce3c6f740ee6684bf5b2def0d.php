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

/* cart/index.html.twig */
class __TwigTemplate_7ecc5f814d77513b200e59a575043ab4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Корзина";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"> 
  <style>
    img{
    width: 20vw; height: 20vw; /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */ object-fit: cover; 
   }
   </style>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
 <script>
    function updateQuantity(productId, increment) {
        var quantityInput = document.getElementById('quantity_' + productId);
        var priceElement = document.getElementById('price_' + productId);

        var newQuantity = parseInt(quantityInput.value) + increment;
        if (newQuantity < 1) {
            newQuantity = 1;
        }

        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/update-quantity?productId=' + productId + '&quantity=' + newQuantity, true);
        xhr.onload = function () {
            if (this.status == 200) {
                var response = JSON.parse(this.responseText);
                quantityInput.value = response.quantity;
                priceElement.textContent = response.price;
            }
        };
        xhr.send();
    }

    function increaseQuantity(productId ,count) {
        updateQuantity(productId,count+1);
    }

    function decreaseQuantity(productId ,count) {
        updateQuantity(productId, count-1);
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "<section class=\"h-100\" style=\"background-color: #eee;\">
  <div class=\"container h-100 py-5\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-10\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
          <h3 class=\"fw-normal mb-0 text-black\">Shopping Cart</h3>
          <div>
            <p class=\"mb-0\"><span class=\"text-muted\">Shop:</span> <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexApp");
        echo "\" class=\"text-body\"> Clic<i
                  class=\"fas fa-angle-down mt-1\"></i></a></p>
          </div>
        </div>
        <div class=\"card rounded-3 mb-4\">
          <div class=\"card-body p-4\">
            <div class=\"row d-flex justify-content-between align-items-center\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            echo "              <div class=\"col-md-2 col-lg-2 col-xl-2\">
                <img src=\"";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["product"], "AvtoImagesLink", [], "any", true, true, false, 63)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "AvtoImagesLink", [], "any", false, false, false, 63), "html", null, true);
            }
            echo "\" 
                 class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
              </div>
              <div class=\"col-md-3 col-lg-3 col-xl-3\">
                <p class=\"lead fw-normal mb-2\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "AvtoName", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
              </div>
              <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                  <button class=\"btn btn-link px-2\" onclick=\"decreaseQuantity(1)\">
                    <i class=\"fas fa-minus\"></i>
                </button>
                 <input id=\"quantity_";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" min=\"0\" name=\"quantity\" value=\"1\" type=\"number\" class=\"form-control form-control-sm\" onchange=\"updateQuantity('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "', this.value)\" />
                <button class=\"btn btn-link px-2\" onclick=\"increaseQuantity(";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo ", quantity_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo ".count)\">
                    <i class=\"fas fa-plus\"></i>
                </button>
              </div>
              <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                <h5 class=\"mb-0\" id=\"price_";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "PriceAvto", [], "any", false, false, false, 79), "html", null, true);
            echo "</h5>
              </div>
              <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                <a href=\"#!\" class=\"text-danger\"><i class=\"fas fa-trash fa-lg\"></i></a>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        <div class=\"card mb-4\">
          <div class=\"card-body p-4 d-flex flex-row\">
            <div class=\"form-outline flex-fill\">
              <input type=\"text\" id=\"form1\" class=\"form-control form-control-lg\" />
              <label class=\"form-label\" for=\"form1\">Discound code</label>
            </div>
            <button type=\"button\" class=\"btn btn-outline-warning btn-lg ms-3\">Apply</button>
          </div>
        </div>

        <div class=\"card\">
          <div class=\"card-body\">
            <button type=\"button\" class=\"btn btn-warning btn-block btn-lg\">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  245 => 88,  228 => 79,  218 => 74,  212 => 73,  203 => 67,  193 => 63,  190 => 62,  186 => 61,  176 => 54,  167 => 47,  157 => 46,  116 => 14,  106 => 13,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Корзина{% endblock %}
{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"> 
  <style>
    img{
    width: 20vw; height: 20vw; /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */ object-fit: cover; 
   }
   </style>
  {% endblock %}

{% block javascripts %}
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
 <script>
    function updateQuantity(productId, increment) {
        var quantityInput = document.getElementById('quantity_' + productId);
        var priceElement = document.getElementById('price_' + productId);

        var newQuantity = parseInt(quantityInput.value) + increment;
        if (newQuantity < 1) {
            newQuantity = 1;
        }

        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/update-quantity?productId=' + productId + '&quantity=' + newQuantity, true);
        xhr.onload = function () {
            if (this.status == 200) {
                var response = JSON.parse(this.responseText);
                quantityInput.value = response.quantity;
                priceElement.textContent = response.price;
            }
        };
        xhr.send();
    }

    function increaseQuantity(productId ,count) {
        updateQuantity(productId,count+1);
    }

    function decreaseQuantity(productId ,count) {
        updateQuantity(productId, count-1);
    }
</script>
{% endblock %}
{% block body %}
<section class=\"h-100\" style=\"background-color: #eee;\">
  <div class=\"container h-100 py-5\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-10\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
          <h3 class=\"fw-normal mb-0 text-black\">Shopping Cart</h3>
          <div>
            <p class=\"mb-0\"><span class=\"text-muted\">Shop:</span> <a href=\"{{path('indexApp')}}\" class=\"text-body\"> Clic<i
                  class=\"fas fa-angle-down mt-1\"></i></a></p>
          </div>
        </div>
        <div class=\"card rounded-3 mb-4\">
          <div class=\"card-body p-4\">
            <div class=\"row d-flex justify-content-between align-items-center\">
            {% for product in products %}
              <div class=\"col-md-2 col-lg-2 col-xl-2\">
                <img src=\"{% if product.AvtoImagesLink is defined %} {{ product.AvtoImagesLink }}{% endif %}\" 
                 class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
              </div>
              <div class=\"col-md-3 col-lg-3 col-xl-3\">
                <p class=\"lead fw-normal mb-2\">{{product.AvtoName}}</p>
              </div>
              <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                  <button class=\"btn btn-link px-2\" onclick=\"decreaseQuantity(1)\">
                    <i class=\"fas fa-minus\"></i>
                </button>
                 <input id=\"quantity_{{ product.id }}\" min=\"0\" name=\"quantity\" value=\"1\" type=\"number\" class=\"form-control form-control-sm\" onchange=\"updateQuantity('{{ product.id }}', this.value)\" />
                <button class=\"btn btn-link px-2\" onclick=\"increaseQuantity({{product.id}}, quantity_{{product.id}}.count)\">
                    <i class=\"fas fa-plus\"></i>
                </button>
              </div>
              <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                <h5 class=\"mb-0\" id=\"price_{{ product.id }}\">{{product.PriceAvto}}</h5>
              </div>
              <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                <a href=\"#!\" class=\"text-danger\"><i class=\"fas fa-trash fa-lg\"></i></a>
              </div>
            </div>
          </div>
        </div>
      {% endfor %}
        <div class=\"card mb-4\">
          <div class=\"card-body p-4 d-flex flex-row\">
            <div class=\"form-outline flex-fill\">
              <input type=\"text\" id=\"form1\" class=\"form-control form-control-lg\" />
              <label class=\"form-label\" for=\"form1\">Discound code</label>
            </div>
            <button type=\"button\" class=\"btn btn-outline-warning btn-lg ms-3\">Apply</button>
          </div>
        </div>

        <div class=\"card\">
          <div class=\"card-body\">
            <button type=\"button\" class=\"btn btn-warning btn-block btn-lg\">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
{% endblock %}", "cart/index.html.twig", "C:\\Users\\Acer\\Desktop\\examPhpBykov\\templates\\cart\\index.html.twig");
    }
}
