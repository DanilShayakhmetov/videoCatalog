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

    // line 3
    public function block_catalog($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        // line 4
        echo "    ";
        // line 5
        echo "
        ";
        // line 7
        echo "        ";
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        // line 10
        echo "
        ";
        // line 12
        echo "
        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "
        ";
        // line 20
        echo "            ";
        // line 21
        echo "                ";
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        // line 26
        echo "            ";
        // line 27
        echo "
        ";
        // line 29
        echo "    ";
        // line 30
        echo "
    <head>

        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
        <style>
        .size {
        width:300px;
        height: 185px;
        overflow: hidden; /* Обрезаем содержимое */
        padding: 5px; /* Поля */
        text-overflow: ellipsis; /* Многоточие */
        }

        </style>
    </head>


    ";
        // line 52
        echo "
    ";
        // line 54
        echo "
        ";
        // line 56
        echo "

            ";
        // line 59
        echo "            ";
        // line 60
        echo "            ";
        // line 61
        echo "            ";
        // line 62
        echo "


        ";
        // line 66
        echo "        ";
        // line 67
        echo "
            ";
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        // line 71
        echo "            ";
        // line 72
        echo "
        ";
        // line 74
        echo "

    ";
        // line 77
        echo "    ";
        // line 78
        echo "



";
        // line 83
        echo "    ";
        // line 84
        echo "
<body>

<!-- Page Content -->
<div class=\"container\">

    <!-- Page Heading -->
    <h1 class=\"my-4\">Tutoria's
        <small>Education video's</small>
    </h1>

";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            echo "

";
            // line 98
            if ($context["item"]) {
                // line 99
                echo "






    <div class=\"col-sm-3\" style=\"background-color:white;\">
    <div class=\"card\" style=\"width: 18rem;\">
        <a href=/playNow/";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "><img class=\"card-img-top\" src=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "thumbnails", array()), "high", array()), "url", array()), "html", null, true);
                echo " height=\"150\" width=\"250\" alt=\"\"></a>
        <div class=\"card-body\">
            <h5 class=\"size\"> <a href=/playNow/";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "title", array()), "html", null, true);
                echo "</a></h5>
            ";
                // line 112
                echo "        </div>
    </div>
    </div>

    ";
                // line 117
                echo "

        ";
                // line 120
                echo "            ";
                // line 121
                echo "                ";
                // line 122
                echo "                ";
                // line 123
                echo "                ";
                // line 124
                echo "                    ";
                // line 125
                echo "                        ";
                // line 126
                echo "                    ";
                // line 127
                echo "                    ";
                // line 128
                echo "                ";
                // line 129
                echo "            ";
                // line 130
                echo "        ";
                // line 131
                echo "

    ";
                // line 134
                echo "        ";
                // line 135
                echo "            ";
                // line 136
                echo "                ";
                // line 137
                echo "                ";
                // line 138
                echo "                    ";
                // line 139
                echo "                        ";
                // line 140
                echo "                    ";
                // line 141
                echo "                    ";
                // line 142
                echo "                ";
                // line 143
                echo "            ";
                // line 144
                echo "        ";
                // line 145
                echo "
    ";
                // line 147
                echo "

    ";
            }
            // line 150
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "
    ";
        // line 153
        echo "    ";
        // line 154
        echo "        ";
        // line 155
        echo "            ";
        // line 156
        echo "                ";
        // line 157
        echo "                ";
        // line 158
        echo "            ";
        // line 159
        echo "        ";
        // line 160
        echo "        ";
        // line 161
        echo "            ";
        // line 162
        echo "        ";
        // line 163
        echo "        ";
        // line 164
        echo "            ";
        // line 165
        echo "        ";
        // line 166
        echo "        ";
        // line 167
        echo "            ";
        // line 168
        echo "        ";
        // line 169
        echo "        ";
        // line 170
        echo "            ";
        // line 171
        echo "                ";
        // line 172
        echo "                ";
        // line 173
        echo "            ";
        // line 174
        echo "        ";
        // line 175
        echo "    ";
        // line 176
        echo "
";
        // line 178
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
        return array (  343 => 178,  340 => 176,  338 => 175,  336 => 174,  334 => 173,  332 => 172,  330 => 171,  328 => 170,  326 => 169,  324 => 168,  322 => 167,  320 => 166,  318 => 165,  316 => 164,  314 => 163,  312 => 162,  310 => 161,  308 => 160,  306 => 159,  304 => 158,  302 => 157,  300 => 156,  298 => 155,  296 => 154,  294 => 153,  291 => 151,  285 => 150,  280 => 147,  277 => 145,  275 => 144,  273 => 143,  271 => 142,  269 => 141,  267 => 140,  265 => 139,  263 => 138,  261 => 137,  259 => 136,  257 => 135,  255 => 134,  251 => 131,  249 => 130,  247 => 129,  245 => 128,  243 => 127,  241 => 126,  239 => 125,  237 => 124,  235 => 123,  233 => 122,  231 => 121,  229 => 120,  225 => 117,  219 => 112,  213 => 110,  206 => 108,  195 => 99,  193 => 98,  189 => 96,  185 => 95,  172 => 84,  170 => 83,  164 => 78,  162 => 77,  158 => 74,  155 => 72,  153 => 71,  151 => 70,  149 => 69,  146 => 67,  144 => 66,  139 => 62,  137 => 61,  135 => 60,  133 => 59,  129 => 56,  126 => 54,  123 => 52,  100 => 30,  98 => 29,  95 => 27,  93 => 26,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  83 => 21,  81 => 20,  78 => 18,  76 => 17,  74 => 16,  72 => 15,  70 => 14,  67 => 12,  64 => 10,  62 => 9,  60 => 8,  58 => 7,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block catalog %}
    {#<head>#}

        {#<meta charset=\"utf-8\">#}
        {#<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">#}
        {#<meta name=\"description\" content=\"\">#}
        {#<meta name=\"author\" content=\"\">#}

        {#<title>3 Col Portfolio - Start Bootstrap Template</title>#}

        {#<!-- Bootstrap core CSS -->#}
        {#<link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">#}
        {#<script src=\"/js/bootstrap.min.js\"></script>#}
        {#<!-- Custom styles for this template -->#}
        {#<link href=\"css/3-col-portfolio.css\" rel=\"stylesheet\">#}

        {#<style>#}
            {#.size {#}
                {#width:300px;#}
                {#height: 185px;#}
                {#overflow: hidden; /* Обрезаем содержимое */#}
                {#padding: 5px; /* Поля */#}
                {#text-overflow: ellipsis; /* Многоточие */#}
            {#}#}

        {#</style>#}
    {#</head>#}

    <head>

        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
        <style>
        .size {
        width:300px;
        height: 185px;
        overflow: hidden; /* Обрезаем содержимое */
        padding: 5px; /* Поля */
        text-overflow: ellipsis; /* Многоточие */
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

{% for item in full %}


{% if item %}







    <div class=\"col-sm-3\" style=\"background-color:white;\">
    <div class=\"card\" style=\"width: 18rem;\">
        <a href=/playNow/{{ item.id }}><img class=\"card-img-top\" src={{ item.snippet.thumbnails.high.url}} height=\"150\" width=\"250\" alt=\"\"></a>
        <div class=\"card-body\">
            <h5 class=\"size\"> <a href=/playNow/{{ item.id }}>{{ item.snippet.title}}</a></h5>
            {#<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>#}
        </div>
    </div>
    </div>

    {##}


        {#<div class=\"col-sm-3\" style=\"background-color:white;\">#}
            {#<div class=\"card h-100\">#}
                {#<a href=/playNow/{{ item.id }}><img class=\"card-img-top\" src={{ item.snippet.thumbnails.default.url}} alt=\"\"></a>#}
                {#<li>{{ item.player.embedHtml|raw }}</li>#}
                {#<div class=\"card-body\">#}
                    {#<h4 class=\"card-title\">#}
                        {#<a href=/playNow/{{ item.id }}>{{ item.snippet.title}}</a>#}
                    {#</h4>#}
                    {#<p class=\"size\">{{ item.snippet.localized.description }}</p>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}


    {#<div class=\"row\">#}
        {#<div class=\"col-lg-4 col-sm-6 portfolio-item\">#}
            {#<div class=\"card h-100\">#}
                {#<a href=\"#\"><img class=\"card-img-top\" src={{ item.snippet.thumbnails.default.url}} alt=\"\"></a>#}
                {#<div class=\"card-body\">#}
                    {#<h4 class=\"card-title\">#}
                        {#<a href=\"#\">Project One</a>#}
                    {#</h4>#}
                    {#<p class=\"size\">{{ item.snippet.localized.description }}</p>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}

    {#</div>#}


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
