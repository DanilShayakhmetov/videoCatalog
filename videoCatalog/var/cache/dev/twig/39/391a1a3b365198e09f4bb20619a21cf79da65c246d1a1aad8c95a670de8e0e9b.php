<?php

/* catalog/catalog.html.twig */
class __TwigTemplate_a17994598bc36dc59d6f04a368f01d3aa3af2795ea9d11411dc97884a0c76dcd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalog/catalog.html.twig", 1);
        $this->blocks = array(
            'catalog' => array($this, 'block_catalog'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_catalog($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        // line 3
        echo "    <head>

        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
        <style>
        .size {
        width:200px;
        height: 100px;
        overflow: hidden; /* Обрезаем содержимое */
        padding: 5px; /* Поля */
        text-overflow: ellipsis; /* Многоточие */
        }
        img {
            border-radius: 50%;
        }


        </style>
    </head>


    ";
        // line 28
        echo "
    ";
        // line 30
        echo "
        ";
        // line 32
        echo "

            ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        // line 37
        echo "            ";
        // line 38
        echo "


        ";
        // line 42
        echo "        ";
        // line 43
        echo "
            ";
        // line 45
        echo "            ";
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        // line 48
        echo "
        ";
        // line 50
        echo "

    ";
        // line 53
        echo "    ";
        // line 54
        echo "



";
        // line 59
        echo "    ";
        // line 60
        echo "
<body>


<h1 class=\"my-4\">Tutoria's
    <small>Education video's</small>
</h1>
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            if ($context["item"]) {
                // line 69
                echo "






    <div class=\"col-sm-3\" style=\"background-color:white;\">
    <div class=\"card\" style=\"width: 18rem;\">
        <a href=/playNow/";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "><img class=\"card-img-top\" src=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "thumbnails", array()), "high", array()), "url", array()), "html", null, true);
                echo " height=\"200\" width=\"200\" alt=\"\"></a>
        <div class=\"card-body\">
            <h5 class=\"size\"> <a href=/playNow/";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "><p class=\"text-success\"><kbd>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "title", array()), "html", null, true);
                echo "</kbd></p></a></h5>
            ";
                // line 82
                echo "        </div>
    </div>
    </div>


    ";
            }
            // line 88
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
    ";
        // line 91
        echo "    ";
        // line 93
        echo "    ";
        // line 95
        echo "    ";
        // line 96
        echo "

<footer class=\"container-fluid text-center\">
    <p></p>
    <p></p>
    <div class=\"navigation\">
                ";
        // line 102
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 102, $this->source); })()));
        echo "
            </div>
</footer>
";
        // line 106
        echo "
";
        // line 108
        echo "    ";
        // line 110
        echo "</body>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalog/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 110,  207 => 108,  204 => 106,  198 => 102,  190 => 96,  188 => 95,  186 => 93,  184 => 91,  181 => 89,  175 => 88,  167 => 82,  161 => 80,  154 => 78,  143 => 69,  141 => 68,  137 => 67,  128 => 60,  126 => 59,  120 => 54,  118 => 53,  114 => 50,  111 => 48,  109 => 47,  107 => 46,  105 => 45,  102 => 43,  100 => 42,  95 => 38,  93 => 37,  91 => 36,  89 => 35,  85 => 32,  82 => 30,  79 => 28,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block catalog %}
    <head>

        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
        <style>
        .size {
        width:200px;
        height: 100px;
        overflow: hidden; /* Обрезаем содержимое */
        padding: 5px; /* Поля */
        text-overflow: ellipsis; /* Многоточие */
        }
        img {
            border-radius: 50%;
        }


        </style>
    </head>


    {#{% for item in full %}#}

    {#{% if item %}#}

        {#<div class=\"col-sm-3\" style=\"background-color:white;\">#}


            {#<h3>{{ item.snippet.title}}</h3>#}
            {#<li>{{ item.player.embedHtml|raw }}</li>#}
            {#<li>{{ item.snippet.localized.description }}</li>#}
            {#<li>{{ item.snippet.title}}</li>#}



        {#</div>#}
        {#<div class=\"col-sm-3\" style=\"background-color:white;\">#}

            {#<h3>{{ item.snippet.title}}</h3>#}
            {#<li>{{ item.player.embedHtml|raw }}</li>#}
            {#<li>{{ item.snippet.localized.description }}</li>#}
            {#<h3>{{ item.snippet.thumbnails.default.url}}</h3>#}

        {#</div>#}


    {#{% endif %}#}
    {#{% endfor %}#}




{#<head>    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">#}
    {#<link href=\"css/3-col-portfolio.css\" rel=\"stylesheet\"></head>#}

<body>


<h1 class=\"my-4\">Tutoria's
    <small>Education video's</small>
</h1>
{% for item in full %}
{% if item %}







    <div class=\"col-sm-3\" style=\"background-color:white;\">
    <div class=\"card\" style=\"width: 18rem;\">
        <a href=/playNow/{{ item.id }}><img class=\"card-img-top\" src={{ item.snippet.thumbnails.high.url}} height=\"200\" width=\"200\" alt=\"\"></a>
        <div class=\"card-body\">
            <h5 class=\"size\"> <a href=/playNow/{{ item.id }}><p class=\"text-success\"><kbd>{{ item.snippet.title}}</kbd></p></a></h5>
            {#<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>#}
        </div>
    </div>
    </div>


    {% endif %}
    {% endfor %}

    {#<!-- Pagination -->#}
    {#<ul class=\"pagination justify-content-center\">#}
{#<div class=\"navigation\">#}
    {#{{ knp_pagination_render(full) }}#}
{#</div>#}
    {#</ul>#}


<footer class=\"container-fluid text-center\">
    <p></p>
    <p></p>
    <div class=\"navigation\">
                {{ knp_pagination_render(full) }}
            </div>
</footer>
{#</div>#}

{#<div class=\"navigation\">#}
    {#{{ knp_pagination_render(full) }}#}
{#</div>#}
</body>




{% endblock %}", "catalog/catalog.html.twig", "/videoCatalog/app/Resources/views/catalog/catalog.html.twig");
    }
}
