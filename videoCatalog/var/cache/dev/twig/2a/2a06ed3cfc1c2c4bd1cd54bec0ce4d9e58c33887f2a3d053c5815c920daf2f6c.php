<?php

/* catalog/catalog.html.twig */
class __TwigTemplate_ced364be41bbeacc2753ddd33edf900420f159e8845b5551912f7b6f0706e126 extends Twig_Template
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
        // line 27
        echo "
    ";
        // line 29
        echo "
        ";
        // line 31
        echo "

            ";
        // line 34
        echo "            ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        // line 37
        echo "


        ";
        // line 41
        echo "        ";
        // line 42
        echo "
            ";
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        // line 46
        echo "            ";
        // line 47
        echo "
        ";
        // line 49
        echo "

    ";
        // line 52
        echo "    ";
        // line 53
        echo "



";
        // line 58
        echo "    ";
        // line 59
        echo "
<body>


<!-- Page Content -->
<div class=\"container\">
    <!-- Page Heading -->
    <h1 class=\"my-4\">Tutoria's
        <small>Education video's</small>
    </h1>
</div>
";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "

";
            // line 73
            if ($context["item"]) {
                // line 74
                echo "






    <div class=\"col-sm-3\" style=\"background-color:white;\">
    <div class=\"card\" style=\"width: 18rem;\">
        <a href=/playNow/";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "><img class=\"card-img-top\" src=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "thumbnails", array()), "high", array()), "url", array()), "html", null, true);
                echo " height=\"200\" width=\"200\" alt=\"\"></a>
        <div class=\"card-body\">
            <h5 class=\"size\"> <a href=/playNow/";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "><p class=\"text-success\"><kbd>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "title", array()), "html", null, true);
                echo "</kbd></p></a></h5>
            ";
                // line 87
                echo "        </div>
    </div>
    </div>


    ";
            }
            // line 93
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
    ";
        // line 96
        echo "    ";
        // line 97
        echo "        ";
        // line 98
        echo "            ";
        // line 99
        echo "                ";
        // line 100
        echo "                ";
        // line 101
        echo "            ";
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        // line 104
        echo "            ";
        // line 105
        echo "        ";
        // line 106
        echo "        ";
        // line 107
        echo "            ";
        // line 108
        echo "        ";
        // line 109
        echo "        ";
        // line 110
        echo "            ";
        // line 111
        echo "        ";
        // line 112
        echo "        ";
        // line 113
        echo "            ";
        // line 114
        echo "                ";
        // line 115
        echo "                ";
        // line 116
        echo "            ";
        // line 117
        echo "        ";
        // line 118
        echo "    ";
        // line 119
        echo "
";
        // line 121
        echo "
</body>




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
        return array (  240 => 121,  237 => 119,  235 => 118,  233 => 117,  231 => 116,  229 => 115,  227 => 114,  225 => 113,  223 => 112,  221 => 111,  219 => 110,  217 => 109,  215 => 108,  213 => 107,  211 => 106,  209 => 105,  207 => 104,  205 => 103,  203 => 102,  201 => 101,  199 => 100,  197 => 99,  195 => 98,  193 => 97,  191 => 96,  188 => 94,  182 => 93,  174 => 87,  168 => 85,  161 => 83,  150 => 74,  148 => 73,  144 => 71,  140 => 70,  127 => 59,  125 => 58,  119 => 53,  117 => 52,  113 => 49,  110 => 47,  108 => 46,  106 => 45,  104 => 44,  101 => 42,  99 => 41,  94 => 37,  92 => 36,  90 => 35,  88 => 34,  84 => 31,  81 => 29,  78 => 27,  53 => 3,  44 => 2,  15 => 1,);
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


<!-- Page Content -->
<div class=\"container\">
    <!-- Page Heading -->
    <h1 class=\"my-4\">Tutoria's
        <small>Education video's</small>
    </h1>
</div>
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
        {#<li class=\"page-item\">#}
            {#<a class=\"page-link\" href=\"#\" aria-label=\"Previous\">#}
                {#<span aria-hidden=\"true\">&laquo;</span>#}
                {#<span class=\"sr-only\">Previous</span>#}
            {#</a>#}
        {#</li>#}
        {#<li class=\"page-item\">#}
            {#<a class=\"page-link\" href=\"#\">1</a>#}
        {#</li>#}
        {#<li class=\"page-item\">#}
            {#<a class=\"page-link\" href=\"#\">2</a>#}
        {#</li>#}
        {#<li class=\"page-item\">#}
            {#<a class=\"page-link\" href=\"#\">3</a>#}
        {#</li>#}
        {#<li class=\"page-item\">#}
            {#<a class=\"page-link\" href=\"#\" aria-label=\"Next\">#}
                {#<span aria-hidden=\"true\">&raquo;</span>#}
                {#<span class=\"sr-only\">Next</span>#}
            {#</a>#}
        {#</li>#}
    {#</ul>#}

{#</div>#}

</body>




{% endblock %}", "catalog/catalog.html.twig", "/videoCatalog/app/Resources/views/catalog/catalog.html.twig");
    }
}
