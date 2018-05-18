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

    // line 4
    public function block_catalog($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalog"));

        // line 5
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", array())) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "
    ";
        }
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "


    ";
            // line 12
            if ($context["item"]) {
                // line 13
                echo "        <div class=\"col-sm-3\" style=\"background-color:white;\">


            <h3>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "title", array()), "html", null, true);
                echo "</h3>
            <li>";
                // line 17
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "player", array()), "embedHtml", array());
                echo "</li>
            <li>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "localized", array()), "description", array()), "html", null, true);
                echo "</li>
            <li>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "snippet", array()), "title", array()), "html", null, true);
                echo "</li>



        </div>
    ";
            }
            // line 25
            echo "
    ";
            // line 27
            echo "    ";
            // line 28
            echo "    ";
            // line 29
            echo "    ";
            // line 30
            echo "    ";
            // line 31
            echo "




";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

";
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        // line 45
        echo "        ";
        // line 46
        echo "        ";
        // line 47
        echo "    ";
        // line 48
        echo "
    ";
        // line 50
        echo "    ";
        // line 51
        echo "        ";
        // line 52
        echo "        ";
        // line 53
        echo "        ";
        // line 54
        echo "    ";
        // line 55
        echo "
    ";
        // line 57
        echo "    ";
        // line 58
        echo "        ";
        // line 59
        echo "            ";
        // line 60
        echo "            ";
        // line 61
        echo "        ";
        // line 62
        echo "        ";
        // line 63
        echo "    ";
        // line 67
        echo "
";
        // line 69
        echo "    ";
        // line 70
        echo "        ";
        // line 71
        echo "            ";
        // line 72
        echo "            ";
        // line 73
        echo "                ";
        // line 74
        echo "                ";
        // line 75
        echo "                ";
        // line 76
        echo "                ";
        // line 77
        echo "            ";
        // line 78
        echo "            ";
        // line 79
        echo "                ";
        // line 80
        echo "                ";
        // line 81
        echo "          ";
        // line 82
        echo "            ";
        // line 83
        echo "          ";
        // line 84
        echo "        ";
        // line 85
        echo "            ";
        // line 86
        echo "        ";
        // line 87
        echo "
        ";
        // line 89
        echo "            ";
        // line 90
        echo "            ";
        // line 91
        echo "            ";
        // line 92
        echo "            ";
        // line 93
        echo "            ";
        // line 94
        echo "            ";
        // line 95
        echo "            ";
        // line 96
        echo "
            ";
        // line 98
        echo "            ";
        // line 99
        echo "            ";
        // line 100
        echo "            ";
        // line 101
        echo "            ";
        // line 102
        echo "            ";
        // line 103
        echo "            ";
        // line 104
        echo "
            ";
        // line 106
        echo "            ";
        // line 107
        echo "                ";
        // line 108
        echo "                    ";
        // line 109
        echo "                ";
        // line 110
        echo "                ";
        // line 111
        echo "            ";
        // line 112
        echo "            ";
        // line 113
        echo "
            ";
        // line 115
        echo "
            ";
        // line 117
        echo "                ";
        // line 118
        echo "                    ";
        // line 119
        echo "                ";
        // line 120
        echo "                ";
        // line 121
        echo "                    ";
        // line 122
        echo "                    ";
        // line 123
        echo "                    ";
        // line 124
        echo "                ";
        // line 125
        echo "                ";
        // line 126
        echo "                    ";
        // line 127
        echo "                ";
        // line 128
        echo "                ";
        // line 129
        echo "                    ";
        // line 130
        echo "                    ";
        // line 131
        echo "                    ";
        // line 132
        echo "                    ";
        // line 133
        echo "                    ";
        // line 134
        echo "                        ";
        // line 135
        echo "                            ";
        // line 136
        echo "                        ";
        // line 137
        echo "                        ";
        // line 138
        echo "                            ";
        // line 139
        echo "                            ";
        // line 140
        echo "                            ";
        // line 141
        echo "                        ";
        // line 142
        echo "                    ";
        // line 143
        echo "                ";
        // line 144
        echo "            ";
        // line 145
        echo "        ";
        // line 146
        echo "    ";
        // line 148
        echo "
";
        // line 150
        echo "    ";
        // line 152
        echo "


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
        return array (  329 => 152,  327 => 150,  324 => 148,  322 => 146,  320 => 145,  318 => 144,  316 => 143,  314 => 142,  312 => 141,  310 => 140,  308 => 139,  306 => 138,  304 => 137,  302 => 136,  300 => 135,  298 => 134,  296 => 133,  294 => 132,  292 => 131,  290 => 130,  288 => 129,  286 => 128,  284 => 127,  282 => 126,  280 => 125,  278 => 124,  276 => 123,  274 => 122,  272 => 121,  270 => 120,  268 => 119,  266 => 118,  264 => 117,  261 => 115,  258 => 113,  256 => 112,  254 => 111,  252 => 110,  250 => 109,  248 => 108,  246 => 107,  244 => 106,  241 => 104,  239 => 103,  237 => 102,  235 => 101,  233 => 100,  231 => 99,  229 => 98,  226 => 96,  224 => 95,  222 => 94,  220 => 93,  218 => 92,  216 => 91,  214 => 90,  212 => 89,  209 => 87,  207 => 86,  205 => 85,  203 => 84,  201 => 83,  199 => 82,  197 => 81,  195 => 80,  193 => 79,  191 => 78,  189 => 77,  187 => 76,  185 => 75,  183 => 74,  181 => 73,  179 => 72,  177 => 71,  175 => 70,  173 => 69,  170 => 67,  168 => 63,  166 => 62,  164 => 61,  162 => 60,  160 => 59,  158 => 58,  156 => 57,  153 => 55,  151 => 54,  149 => 53,  147 => 52,  145 => 51,  143 => 50,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  129 => 42,  127 => 41,  125 => 40,  121 => 37,  110 => 31,  108 => 30,  106 => 29,  104 => 28,  102 => 27,  99 => 25,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  73 => 13,  71 => 12,  66 => 9,  62 => 8,  56 => 6,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block catalog %}
    {% if app.user %}
        {{ app.user.username }}
    {% endif %}
{% for item in full %}



    {% if item %}
        <div class=\"col-sm-3\" style=\"background-color:white;\">


            <h3>{{ item.snippet.title}}</h3>
            <li>{{ item.player.embedHtml|raw }}</li>
            <li>{{ item.snippet.localized.description }}</li>
            <li>{{ item.snippet.title}}</li>



        </div>
    {% endif %}

    {##}
    {#<h3>{{ item.snippet.title}}</h3>#}
    {#<li>{{ item.player.embedHtml|raw }}</li>#}
    {#<li>{{ item.snippet.localized.description }}</li>#}
    {#<li>{{ item.snippet.title}}</li>#}





{% endfor %}


{#<style>#}
    {#/* Set height of the grid so .sidenav can be 100% (adjust if needed) */#}
    {#.row.content {height: 1500px}#}

    {#/* Set gray background color and 100% height */#}
    {#.sidenav {#}
        {#background-color: #f1f1f1;#}
        {#height: 100%;#}
    {#}#}

    {#/* Set black background color, white text and some padding */#}
    {#footer {#}
        {#background-color: #555;#}
        {#color: white;#}
        {#padding: 15px;#}
    {#}#}

    {#/* On small screens, set height to 'auto' for sidenav and grid */#}
    {#@media screen and (max-width: 767px) {#}
        {#.sidenav {#}
            {#height: auto;#}
            {#padding: 15px;#}
        {#}#}
        {#.row.content {height: auto;}#}
    {#}#}
{#</style>#}
{#</head>#}
{#<body>#}

{#<div class=\"container-fluid\">#}
    {#<div class=\"row content\">#}
        {#<div class=\"col-sm-3 sidenav\">#}
            {#<h4>John's Blog</h4>#}
            {#<ul class=\"nav nav-pills nav-stacked\">#}
                {#<li class=\"active\"><a href=\"#section1\">Home</a></li>#}
                {#<li><a href=\"#section2\">Friends</a></li>#}
                {#<li><a href=\"#section3\">Family</a></li>#}
                {#<li><a href=\"#section3\">Photos</a></li>#}
            {#</ul><br>#}
            {#<div class=\"input-group\">#}
                {#<input type=\"text\" class=\"form-control\" placeholder=\"Search Blog..\">#}
                {#<span class=\"input-group-btn\">#}
          {#<button class=\"btn btn-default\" type=\"button\">#}
            {#<span class=\"glyphicon glyphicon-search\"></span>#}
          {#</button>#}
        {#</span>#}
            {#</div>#}
        {#</div>#}

        {#<div class=\"col-sm-9\">#}
            {#<h4><small>RECENT POSTS</small></h4>#}
            {#<hr>#}
            {#<h2>I Love Food</h2>#}
            {#<h5><span class=\"glyphicon glyphicon-time\"></span> Post by Jane Dane, Sep 27, 2015.</h5>#}
            {#<h5><span class=\"label label-danger\">Food</span> <span class=\"label label-primary\">Ipsum</span></h5><br>#}
            {#<p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>#}
            {#<br><br>#}

            {#<h4><small>RECENT POSTS</small></h4>#}
            {#<hr>#}
            {#<h2>Officially Blogging</h2>#}
            {#<h5><span class=\"glyphicon glyphicon-time\"></span> Post by John Doe, Sep 24, 2015.</h5>#}
            {#<h5><span class=\"label label-success\">Lorem</span></h5><br>#}
            {#<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>#}
            {#<hr>#}

            {#<h4>Leave a Comment:</h4>#}
            {#<form role=\"form\">#}
                {#<div class=\"form-group\">#}
                    {#<textarea class=\"form-control\" rows=\"3\" required></textarea>#}
                {#</div>#}
                {#<button type=\"submit\" class=\"btn btn-success\">Submit</button>#}
            {#</form>#}
            {#<br><br>#}

            {#<p><span class=\"badge\">2</span> Comments:</p><br>#}

            {#<div class=\"row\">#}
                {#<div class=\"col-sm-2 text-center\">#}
                    {#<img src=\"bandmember.jpg\" class=\"img-circle\" height=\"65\" width=\"65\" alt=\"Avatar\">#}
                {#</div>#}
                {#<div class=\"col-sm-10\">#}
                    {#<h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>#}
                    {#<p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>#}
                    {#<br>#}
                {#</div>#}
                {#<div class=\"col-sm-2 text-center\">#}
                    {#<img src=\"bird.jpg\" class=\"img-circle\" height=\"65\" width=\"65\" alt=\"Avatar\">#}
                {#</div>#}
                {#<div class=\"col-sm-10\">#}
                    {#<h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>#}
                    {#<p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>#}
                    {#<br>#}
                    {#<p><span class=\"badge\">1</span> Comment:</p><br>#}
                    {#<div class=\"row\">#}
                        {#<div class=\"col-sm-2 text-center\">#}
                            {#<img src=\"bird.jpg\" class=\"img-circle\" height=\"65\" width=\"65\" alt=\"Avatar\">#}
                        {#</div>#}
                        {#<div class=\"col-xs-10\">#}
                            {#<h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>#}
                            {#<p>Me too! WOW!</p>#}
                            {#<br>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}
{#</div>#}

{#<footer class=\"container-fluid\">#}
    {#<p>Footer Text</p>#}
{#</footer>#}



{% endblock %}




{#

<p>ОПИСАНИЕ:</p>
<p>{{ description }}</p>

<p>{{ picture}}</p>
#}

", "catalog/catalog.html.twig", "/videoCatalog/app/Resources/views/catalog/catalog.html.twig");
    }
}
