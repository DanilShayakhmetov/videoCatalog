<?php

/* base.html.twig */
class __TwigTemplate_7dad07631f8afbc5ed5821f54a94c2c9909640f33a4418120572680d0de45617 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'player' => array($this, 'block_player'),
            'namesList' => array($this, 'block_namesList'),
            'catalog' => array($this, 'block_catalog'),
            'search' => array($this, 'block_search'),
            'list' => array($this, 'block_list'),
            'about' => array($this, 'block_about'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 3
        echo "
    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "
    ";
        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "
";
        // line 18
        echo "
";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 28
        echo "

";
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 38
        echo "


<html lang=\"en\">
<head>
    <title>Tutorials</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <script src=\"/js/bootstrap.min.js\"></script>

</head>



<body>
";
        // line 55
        echo "    ";
        // line 56
        echo "        ";
        // line 57
        echo "        ";
        // line 58
        echo "            ";
        // line 59
        echo "        ";
        // line 60
        echo "        ";
        // line 61
        echo "            ";
        // line 62
        echo "                ";
        // line 63
        echo "                    ";
        // line 64
        echo "                        ";
        // line 65
        echo "                    ";
        // line 66
        echo "                ";
        // line 67
        echo "                ";
        // line 68
        echo "                    ";
        // line 69
        echo "                ";
        // line 70
        echo "                ";
        // line 71
        echo "                    ";
        // line 72
        echo "                ";
        // line 73
        echo "                ";
        // line 74
        echo "                    ";
        // line 75
        echo "                ";
        // line 76
        echo "                ";
        // line 77
        echo "                    ";
        // line 78
        echo "                ";
        // line 79
        echo "                ";
        // line 80
        echo "                    ";
        // line 81
        echo "                ";
        // line 82
        echo "            ";
        // line 83
        echo "        ";
        // line 84
        echo "    ";
        // line 86
        echo "

<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">LamaTutor</a>
        ";
        // line 93
        echo "        ";
        // line 94
        echo "        ";
        // line 95
        echo "        ";
        // line 96
        echo "        ";
        // line 97
        echo "        ";
        // line 98
        echo "        ";
        // line 99
        echo "        ";
        // line 100
        echo "        ";
        // line 101
        echo "        ";
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        // line 104
        echo "        ";
        // line 105
        echo "        ";
        // line 106
        echo "        ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        // line 109
        echo "        ";
        // line 110
        echo "        ";
        // line 111
        echo "        ";
        // line 112
        echo "        ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        // line 115
        echo "        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"/default\">Home</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/randomList\">random catalog</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/autocat\">video catalog</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/video\">upload catalog</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/name\">play list's</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/search\">search</a></li>
        </ul>
    </div>
    </div>
</nav>

";
        // line 127
        $this->displayBlock('player', $context, $blocks);
        // line 129
        $this->displayBlock('namesList', $context, $blocks);
        // line 131
        $this->displayBlock('catalog', $context, $blocks);
        // line 133
        $this->displayBlock('search', $context, $blocks);
        // line 135
        $this->displayBlock('list', $context, $blocks);
        // line 137
        $this->displayBlock('about', $context, $blocks);
        // line 139
        echo "
</body>
</html>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_player($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "player"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "player"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_namesList($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "namesList"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "namesList"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_catalog($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_search($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_about($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "about"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  350 => 137,  333 => 135,  316 => 133,  299 => 131,  282 => 129,  265 => 127,  248 => 139,  246 => 137,  244 => 135,  242 => 133,  240 => 131,  238 => 129,  236 => 127,  222 => 115,  220 => 114,  218 => 113,  216 => 112,  214 => 111,  212 => 110,  210 => 109,  208 => 108,  206 => 107,  204 => 106,  202 => 105,  200 => 104,  198 => 103,  196 => 102,  194 => 101,  192 => 100,  190 => 99,  188 => 98,  186 => 97,  184 => 96,  182 => 95,  180 => 94,  178 => 93,  170 => 86,  168 => 84,  166 => 83,  164 => 82,  162 => 81,  160 => 80,  158 => 79,  156 => 78,  154 => 77,  152 => 76,  150 => 75,  148 => 74,  146 => 73,  144 => 72,  142 => 71,  140 => 70,  138 => 69,  136 => 68,  134 => 67,  132 => 66,  130 => 65,  128 => 64,  126 => 63,  124 => 62,  122 => 61,  120 => 60,  118 => 59,  116 => 58,  114 => 57,  112 => 56,  110 => 55,  92 => 38,  90 => 36,  88 => 35,  86 => 34,  84 => 33,  82 => 32,  78 => 28,  76 => 26,  74 => 25,  72 => 24,  70 => 23,  68 => 22,  66 => 21,  64 => 20,  61 => 18,  58 => 16,  56 => 15,  54 => 14,  52 => 13,  50 => 12,  47 => 10,  44 => 8,  42 => 7,  40 => 6,  38 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<html lang=\"en\">#}
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

{#</head>#}

{#<head>#}
    {#<title>Tutorials</title>#}
    {#<meta charset=\"utf-8\">#}
    {#<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">#}
    {#<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">#}
    {#<script src=\"/js/bootstrap.min.js\"></script>#}
    {#<link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">#}
    {#<link href=\"css/3-col-portfolio.css\" rel=\"stylesheet\">#}
{#</head>#}


{#<html lang=\"en\">#}
{#<head>#}
    {#<title>Tutorials</title>#}
    {#<meta charset=\"utf-8\">#}
    {#<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">#}
    {#<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">#}
    {#<script src=\"/js/bootstrap.min.js\"></script>#}
{#</head>#}



<html lang=\"en\">
<head>
    <title>Tutorials</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <script src=\"/js/bootstrap.min.js\"></script>

</head>



<body>
{#<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">#}
    {#<div class=\"container\">#}
        {#<a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>#}
        {#<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">#}
            {#<span class=\"navbar-toggler-icon\"></span>#}
        {#</button>#}
        {#<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">#}
            {#<ul class=\"navbar-nav ml-auto\">#}
                {#<li class=\"nav-item active\">#}
                    {#<a class=\"nav-link\" href=\"#\">Home#}
                        {#<span class=\"sr-only\">(current)</span>#}
                    {#</a>#}
                {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link\" href=\"/search\">search</a>#}
                {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link\" href=\"/name\">play list's</a>#}
                {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link\" href=\"/video\">upload catalog</a>#}
                {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link\" href=\"/autocat\">video catalog</a>#}
                {#</li>#}
                {#<li class=\"nav-item\">#}
                    {#<a class=\"nav-link\" href=\"/randomList\">random catalog</a>#}
                {#</li>#}
            {#</ul>#}
        {#</div>#}
    {#</div>#}
{#</nav>#}


<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">LamaTutor</a>
        {#</div>#}
        {#<ul class=\"navbar-nav ml-auto\">#}
        {#<li class=\"nav-item active\">#}
        {#<a class=\"nav-link\" href=\"#\">Home#}
        {#<span class=\"sr-only\">(current)</span>#}
        {#</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a class=\"nav-link\" href=\"/search\">search</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a class=\"nav-link\" href=\"/name\">play list's</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a class=\"nav-link\" href=\"/video\">upload catalog</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a class=\"nav-link\" href=\"/autocat\">video catalog</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a class=\"nav-link\" href=\"/randomList\">random catalog</a>#}
        {#</li>#}
        {#</ul>#}
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"/default\">Home</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/randomList\">random catalog</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/autocat\">video catalog</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/video\">upload catalog</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/name\">play list's</a></li>
            <li class=\"active\"><a class=\"nav-link\" href=\"/search\">search</a></li>
        </ul>
    </div>
    </div>
</nav>

{% block player %}
{% endblock %}
{% block namesList %}
{% endblock %}
{% block catalog %}
{% endblock %}
{% block search %}
{% endblock %}
{% block list %}
{% endblock %}
{% block about %}
{% endblock %}

</body>
</html>




", "base.html.twig", "/videoCatalog/app/Resources/views/base.html.twig");
    }
}
