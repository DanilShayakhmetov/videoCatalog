<?php

/* catalog/player.html.twig */
class __TwigTemplate_00e280601910c1ac35e997de1134b1797138725c43a7670dd7186d4a8799848e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalog/player.html.twig", 1);
        $this->blocks = array(
            'player' => array($this, 'block_player'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/player.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/player.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_player($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "player"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "player"));

        // line 4
        echo "

    <head>

        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
        <style>
            .size {
                width:500px;
                height: 100px;
                overflow: hidden; /* Обрезаем содержимое */
                padding: 5px; /* Поля */
                text-overflow: ellipsis; /* Многоточие */
            }
            .Titlesize {
                width:500px;
                height: 50px;
                overflow: hidden; /* Обрезаем содержимое */
                padding: 5px; /* Поля */
                text-overflow: ellipsis; /* Многоточие */
            }

        </style>
    </head>

    <body>


        <h1 class=\"my-4\">Tutoria's
            <small>Education video's</small>
        </h1>

        ";
        // line 39
        if ((isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "
        <div class=\"row\">

            <div class=\"col-sm-4\"> </div>
            <div class=\"col-sm-4\">

                <p  class=\"Titlesize\"><kbd>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 46, $this->source); })()), "snippet", array()), "title", array()), "html", null, true);
            echo "</kbd></p></a></h5>
                ";
            // line 48
            echo "
                    <li>";
            // line 49
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 49, $this->source); })()), "player", array()), "embedHtml", array());
            echo "</li>
                    <p <p class=\"size\">>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["full"]) || array_key_exists("full", $context) ? $context["full"] : (function () { throw new Twig_Error_Runtime('Variable "full" does not exist.', 50, $this->source); })()), "snippet", array()), "localized", array()), "description", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 51
        echo "</div>
            <div class=\"col-sm-4\"> </div>
        </div>

        ";
        // line 56
        echo "                        ";
        // line 57
        echo "        ";
        // line 58
        echo "

</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalog/player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 58,  124 => 57,  122 => 56,  116 => 51,  111 => 50,  107 => 49,  104 => 48,  100 => 46,  92 => 40,  90 => 39,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block player %}


    <head>

        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
        <style>
            .size {
                width:500px;
                height: 100px;
                overflow: hidden; /* Обрезаем содержимое */
                padding: 5px; /* Поля */
                text-overflow: ellipsis; /* Многоточие */
            }
            .Titlesize {
                width:500px;
                height: 50px;
                overflow: hidden; /* Обрезаем содержимое */
                padding: 5px; /* Поля */
                text-overflow: ellipsis; /* Многоточие */
            }

        </style>
    </head>

    <body>


        <h1 class=\"my-4\">Tutoria's
            <small>Education video's</small>
        </h1>

        {% if full %}

        <div class=\"row\">

            <div class=\"col-sm-4\"> </div>
            <div class=\"col-sm-4\">

                <p  class=\"Titlesize\"><kbd>{{ full.snippet.title}}</kbd></p></a></h5>
                {#<p>{{ full.snippet.title}}</p>#}

                    <li>{{ full.player.embedHtml|raw }}</li>
                    <p <p class=\"size\">>{{ full.snippet.localized.description }}</p>
                {% endif %}</div>
            <div class=\"col-sm-4\"> </div>
        </div>

        {#{% if full %}#}
                        {#<li>{{ full.player.embedHtml|raw }}</li>#}
        {#{% endif %}#}


</body>

{% endblock %}", "catalog/player.html.twig", "/videoCatalog/app/Resources/views/catalog/player.html.twig");
    }
}
