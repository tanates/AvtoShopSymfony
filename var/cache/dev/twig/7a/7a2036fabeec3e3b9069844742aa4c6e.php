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

/* crud/index.html.twig */
class __TwigTemplate_653e1575064749238c4bd663fac3beb0 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "crud/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Add avto";
        
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
   #smile{
    width: 2vw; height: 2vw; /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */ object-fit: cover; 
   }
   body{
    margin:0;
    padding:0;
   }
   </style>
   
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
  ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "flashbag", [], "any", false, false, false, 21), "has", ["success"], "method", false, false, false, 21)) {
            // line 22
            echo "    <script> 
    
      document.addEventListener('DOMContentLoaded', function () {
        var toastEl = document.getElementById('liveToast');
        var toast = new bootstrap.Toast(toastEl);
        
        var toastBtn = document.getElementById('liveToastBtn');
        toastBtn.addEventListener('click', function() {
          toast.show();
        });
      });
    </script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "<form class=\"bg-dark mt-0\" method=\"post\">
   <div class=\"container py-5 h-100\">
      <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
          <div class=\"card bg-light text-dark\" style=\"border-radius: 1rem;\">
            <div class=\"card-body p-5 text-center\">
                <div class=\"mb-md-5 mt-md-4 pb-5\">
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
                    <div class=\"form-outline form-white mb-4\">
                      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "AvtoName", [], "any", false, false, false, 46), 'row');
        echo "
                       </div>
                      <div class=\"form-outline form-white mb-4\">
                      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "PriceAvto", [], "any", false, false, false, 49), 'row');
        echo "
                       </div>
                      <div class=\"form-outline form-white mb-4\">
                      ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "AvtoImagesLink", [], "any", false, false, false, 52), 'row');
        echo "
                      </div>
                       <div class=\"btn-group row\">
                          <button type=\"submit\" id=\"liveToastBtn\" class=\"btn btn-primary mt-4\">Добавить товар</button>
                          <a  href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexApp");
        echo "\" class=\"btn btn-primary mt-4\">Магазин</a>
                       </div>
                    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
                 </div>
               </div>
        </div>
      </div>
    </div>
  </div>
    <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 11\">
          <div id=\"liveToast\" class=\"toast hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"toast-header\">
                  <img id =\"smile\" src=\"https://steamuserimages-a.akamaihd.net/ugc/1627478697953887211/D83ED851B2DB78DFA12514FE48E0355647C6A38C/\" class=\"rounded me-2\" alt=\"...\">
                  <strong class=\" me-auto\">Добовлен</strong>
                    <small> ";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d H:i:s"), "html", null, true);
        echo "</small>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body text-center\">
                   Товар успешно добавлен!
                </div>
            </div>
       </div>   
</form>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "crud/index.html.twig";
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
        return array (  212 => 70,  197 => 58,  192 => 56,  185 => 52,  179 => 49,  173 => 46,  168 => 44,  159 => 37,  149 => 36,  126 => 22,  124 => 21,  121 => 20,  111 => 19,  90 => 6,  80 => 5,  61 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/form.html.twig #}

{% extends 'base.html.twig' %}
{% block title %}Add avto{% endblock %}
{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\"> 
   <style>
   #smile{
    width: 2vw; height: 2vw; /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */ object-fit: cover; 
   }
   body{
    margin:0;
    padding:0;
   }
   </style>
   
    {% endblock %}

{% block javascripts %}
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
  {% if app.session.flashbag.has('success') %}
    <script> 
    
      document.addEventListener('DOMContentLoaded', function () {
        var toastEl = document.getElementById('liveToast');
        var toast = new bootstrap.Toast(toastEl);
        
        var toastBtn = document.getElementById('liveToastBtn');
        toastBtn.addEventListener('click', function() {
          toast.show();
        });
      });
    </script>
  {% endif %}
{% endblock %}
{% block body %}
<form class=\"bg-dark mt-0\" method=\"post\">
   <div class=\"container py-5 h-100\">
      <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
          <div class=\"card bg-light text-dark\" style=\"border-radius: 1rem;\">
            <div class=\"card-body p-5 text-center\">
                <div class=\"mb-md-5 mt-md-4 pb-5\">
                    {{ form_start(form) }}
                    <div class=\"form-outline form-white mb-4\">
                      {{ form_row(form.AvtoName) }}
                       </div>
                      <div class=\"form-outline form-white mb-4\">
                      {{ form_row(form.PriceAvto) }}
                       </div>
                      <div class=\"form-outline form-white mb-4\">
                      {{ form_row(form.AvtoImagesLink   ) }}
                      </div>
                       <div class=\"btn-group row\">
                          <button type=\"submit\" id=\"liveToastBtn\" class=\"btn btn-primary mt-4\">Добавить товар</button>
                          <a  href=\"{{path('indexApp')}}\" class=\"btn btn-primary mt-4\">Магазин</a>
                       </div>
                    {{ form_end(form) }}
                 </div>
               </div>
        </div>
      </div>
    </div>
  </div>
    <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 11\">
          <div id=\"liveToast\" class=\"toast hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"toast-header\">
                  <img id =\"smile\" src=\"https://steamuserimages-a.akamaihd.net/ugc/1627478697953887211/D83ED851B2DB78DFA12514FE48E0355647C6A38C/\" class=\"rounded me-2\" alt=\"...\">
                  <strong class=\" me-auto\">Добовлен</strong>
                    <small> {{ \"now\"|date('d H:i:s') }}</small>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body text-center\">
                   Товар успешно добавлен!
                </div>
            </div>
       </div>   
</form>  
{% endblock %}", "crud/index.html.twig", "C:\\Users\\Acer\\Desktop\\examPhpBykov\\templates\\crud\\index.html.twig");
    }
}
