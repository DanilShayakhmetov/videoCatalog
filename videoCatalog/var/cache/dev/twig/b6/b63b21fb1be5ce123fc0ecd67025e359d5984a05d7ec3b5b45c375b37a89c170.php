<?php

/* catalog/basicLanguages.html.twig */
class __TwigTemplate_bbb1e5c5e74e5cacdda85868f5a5182abde3c1730d5812d9a0b831cd7d3edb17 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalog/basicLanguages.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/basicLanguages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/basicLanguages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 6
        echo "

    <head>
        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
    </head>
<body>

<div class=\"container-fluid\">

    <div class=\"row\">
        <div class=\"col-sm-3\" style=\"background-color:lightskyblue;\">

            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpTTNp7HBYzCBByaE1h54ruW\">Python</a></div>
            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpQutUr7qYIunvm04cqdr5mx\">Algorithms</a></div>
            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpRSBWi5jbGjIe-v_CjRO_Ug\">JAVA</a></div>
            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpQJpe8sWD2kIQ51Lx74H2FH\">C++</a></div>

        </div>
        <div class=\"col-sm-3\" style=\"background-color:darkgrey;\">



            <p>VIDEO</p>


        </div>

        <div class=\"col-sm-3\" style=\"background-color:darkgrey;\">



            <p>VIDEO</p>

        </div>


        <div class=\"col-sm-3\" style=\"background-color:darkgrey;\">



            <p>VIDEO</p>


        </div>



    </div>
</div>




    ";
        // line 64
        echo "    ";
        // line 65
        echo "    ";
        // line 66
        echo "    ";
        // line 67
        echo "
</body>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalog/basicLanguages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 67,  116 => 66,  114 => 65,  112 => 64,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block list %}


    <head>
        <title>Tutorials</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <script src=\"/js/bootstrap.min.js\"></script>
    </head>
<body>

<div class=\"container-fluid\">

    <div class=\"row\">
        <div class=\"col-sm-3\" style=\"background-color:lightskyblue;\">

            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpTTNp7HBYzCBByaE1h54ruW\">Python</a></div>
            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpQutUr7qYIunvm04cqdr5mx\">Algorithms</a></div>
            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpRSBWi5jbGjIe-v_CjRO_Ug\">JAVA</a></div>
            <div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpQJpe8sWD2kIQ51Lx74H2FH\">C++</a></div>

        </div>
        <div class=\"col-sm-3\" style=\"background-color:darkgrey;\">



            <p>VIDEO</p>


        </div>

        <div class=\"col-sm-3\" style=\"background-color:darkgrey;\">



            <p>VIDEO</p>

        </div>


        <div class=\"col-sm-3\" style=\"background-color:darkgrey;\">



            <p>VIDEO</p>


        </div>



    </div>
</div>




    {#<div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpTTNp7HBYzCBByaE1h54ruW\">Python</a></div>#}
    {#<div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpQutUr7qYIunvm04cqdr5mx\">Algorithms</a></div>#}
    {#<div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpRSBWi5jbGjIe-v_CjRO_Ug\">JAVA</a></div>#}
    {#<div class=\"well well-lg\"><a href=\"/list/PLlb7e2G7aSpQJpe8sWD2kIQ51Lx74H2FH\">C++</a></div>#}

</body>


{% endblock %}", "catalog/basicLanguages.html.twig", "/videoCatalog/app/Resources/views/catalog/basicLanguages.html.twig");
    }
}
