<?php

/* catalog/search.html.twig */
class __TwigTemplate_b56f34d065872dcfb8e24d537c78c244a071cc28be65d119c4580ad4e60994ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalog/search.html.twig", 1);
        $this->blocks = array(
            'search' => array($this, 'block_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_search($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), array(0 => "bootstrap_3_horizontal_layout.html.twig"), true);
        // line 5
        echo "
<head>

    <title>W3.CSS Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <style>
        body {font-family: \"Lato\", sans-serif}
        .mySlides {display: none}
    </style>








    <title>Tutorials</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <script src=\"/js/bootstrap.min.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        .button {
            position: relative;
            background-color: Red;
            border: none;
            font-size: 28px;
            color: black;
            padding: 20px;
            width: 200px;
            text-align: center;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            text-decoration: none;
            overflow: hidden;
            cursor: pointer;
        }

        .button:after {
            content: \"\";
            background: red;
            display: block;
            position: absolute;
            padding-top: 300%;
            padding-left: 350%;
            margin-left: -20px!important;
            margin-top: -120%;
            opacity: 0;
            transition: all 0.8s
        }

        .button:active:after {
            padding: 0;
            margin: 0;
            opacity: 1;
            transition: 0s
        }
    </style>

<body>

<p><img src=\"Font1.jpg\" width=\"100%\"
        height=\"100%\" alt=\"__\"></p>

<div class=\"centered\">    <div class=\"form-group\">


        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), 'form_start');
        echo "
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), 'widget');
        echo "
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-dark\"><span class=\"glyphicon glyphicon-search\"></span></button>
            </div>
        </div>

        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
    </div>
</div>















</body>







    <!-- The Contact Section -->
    <div class=\"w3-container w3-content w3-padding-64\" style=\"max-width:800px\" id=\"contact\">
        <h2 class=\"w3-wide w3-center\">CONTACT</h2>
        <p class=\"w3-opacity w3-center\"><i>Ошибки при пользовании и рессурсрм</i></p>
        <div class=\"w3-row w3-padding-32\">
            <div class=\"w3-col m6 w3-large w3-margin-bottom\">
                <i class=\"fa fa-map-marker\" style=\"width:30px\"></i> Saints Petersburg Russia<br>
                <i class=\"fa fa-phone\" style=\"width:30px\"></i> Phone:+ 7 999 669 52 38<br>
                <i class=\"fa fa-envelope\" style=\"width:30px\"> </i> Email: d396285@rambler.ru<br>
            </div>
            <div class=\"w3-col m6\">
                <form action=\"/action_page.php\" target=\"_blank\">
                    <div class=\"w3-row-padding\" style=\"margin:0 -16px 8px -16px\">
                        <div class=\"w3-half\">
                            <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Name\" required name=\"Name\">
                        </div>
                        <div class=\"w3-half\">
                            <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Email\" required name=\"Email\">
                        </div>
                    </div>
                    <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Message\" required name=\"Message\">
                    <button class=\"w3-button w3-black w3-section w3-right\" type=\"submit\">SEND</button>
                </form>
            </div>
        </div>
    </div>






    <!-- End Page Content -->
    </div>
    <!-- Add Google Maps -->
    <div id=\"googleMap\" style=\"height:400px;\" class=\"w3-grayscale-max\"></div>
    <script>
        function myMap() {
            myCenter=new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions= {
                center:myCenter,
                zoom:12, scrollwheel: false, draggable: false,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4337.282211259757!2d30.325270204642695!3d59.88733984310676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469630130356660b%3A0xe289f7a7db3c961c!2z0JDQstGC0L7QvNCw0YHRjw!5e0!3m2!1sru!2sru!4v1527449289386\" width=\"1330\" height=\"1000
    0\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    <!-- Footer -->
    <footer class=\"w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge\">
        <i class=\"fa fa-facebook-official w3-hover-opacity\"></i>
        <i class=\"fa fa-instagram w3-hover-opacity\"></i>
        <i class=\"fa fa-snapchat w3-hover-opacity\"></i>
        <i class=\"fa fa-pinterest-p w3-hover-opacity\"></i>
        <i class=\"fa fa-twitter w3-hover-opacity\"></i>
        <i class=\"fa fa-linkedin w3-hover-opacity\"></i>
        <p class=\"w3-medium\">Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" target=\"_blank\">w3.css</a></p>
    </footer>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName(\"mySlides\");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = \"none\";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = \"block\";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById(\"navDemo\");
            if (x.className.indexOf(\"w3-show\") == -1) {
                x.className += \" w3-show\";
            } else {
                x.className = x.className.replace(\" w3-show\", \"\");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = \"none\";
            }
        }
    </script>




";
        // line 217
        echo "

        ";
        // line 220
        echo "        ";
        // line 221
        echo "        ";
        // line 222
        echo "            ";
        // line 223
        echo "                ";
        // line 224
        echo "            ";
        // line 225
        echo "        ";
        // line 226
        echo "        ";
        // line 227
        echo "        ";
        // line 228
        echo "    ";
        // line 229
        echo "








";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalog/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 229,  299 => 228,  297 => 227,  295 => 226,  293 => 225,  291 => 224,  289 => 223,  287 => 222,  285 => 221,  283 => 220,  279 => 217,  146 => 86,  136 => 79,  132 => 78,  57 => 5,  55 => 4,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block search %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

<head>

    <title>W3.CSS Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <style>
        body {font-family: \"Lato\", sans-serif}
        .mySlides {display: none}
    </style>








    <title>Tutorials</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <script src=\"/js/bootstrap.min.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        .button {
            position: relative;
            background-color: Red;
            border: none;
            font-size: 28px;
            color: black;
            padding: 20px;
            width: 200px;
            text-align: center;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            text-decoration: none;
            overflow: hidden;
            cursor: pointer;
        }

        .button:after {
            content: \"\";
            background: red;
            display: block;
            position: absolute;
            padding-top: 300%;
            padding-left: 350%;
            margin-left: -20px!important;
            margin-top: -120%;
            opacity: 0;
            transition: all 0.8s
        }

        .button:active:after {
            padding: 0;
            margin: 0;
            opacity: 1;
            transition: 0s
        }
    </style>

<body>

<p><img src=\"Font1.jpg\" width=\"100%\"
        height=\"100%\" alt=\"__\"></p>

<div class=\"centered\">    <div class=\"form-group\">


        {{ form_start(form) }}
        {{ form_widget(form) }}
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-dark\"><span class=\"glyphicon glyphicon-search\"></span></button>
            </div>
        </div>

        {{ form_end(form) }}
    </div>
</div>















</body>







    <!-- The Contact Section -->
    <div class=\"w3-container w3-content w3-padding-64\" style=\"max-width:800px\" id=\"contact\">
        <h2 class=\"w3-wide w3-center\">CONTACT</h2>
        <p class=\"w3-opacity w3-center\"><i>Ошибки при пользовании и рессурсрм</i></p>
        <div class=\"w3-row w3-padding-32\">
            <div class=\"w3-col m6 w3-large w3-margin-bottom\">
                <i class=\"fa fa-map-marker\" style=\"width:30px\"></i> Saints Petersburg Russia<br>
                <i class=\"fa fa-phone\" style=\"width:30px\"></i> Phone:+ 7 999 669 52 38<br>
                <i class=\"fa fa-envelope\" style=\"width:30px\"> </i> Email: d396285@rambler.ru<br>
            </div>
            <div class=\"w3-col m6\">
                <form action=\"/action_page.php\" target=\"_blank\">
                    <div class=\"w3-row-padding\" style=\"margin:0 -16px 8px -16px\">
                        <div class=\"w3-half\">
                            <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Name\" required name=\"Name\">
                        </div>
                        <div class=\"w3-half\">
                            <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Email\" required name=\"Email\">
                        </div>
                    </div>
                    <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"Message\" required name=\"Message\">
                    <button class=\"w3-button w3-black w3-section w3-right\" type=\"submit\">SEND</button>
                </form>
            </div>
        </div>
    </div>






    <!-- End Page Content -->
    </div>
    <!-- Add Google Maps -->
    <div id=\"googleMap\" style=\"height:400px;\" class=\"w3-grayscale-max\"></div>
    <script>
        function myMap() {
            myCenter=new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions= {
                center:myCenter,
                zoom:12, scrollwheel: false, draggable: false,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4337.282211259757!2d30.325270204642695!3d59.88733984310676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469630130356660b%3A0xe289f7a7db3c961c!2z0JDQstGC0L7QvNCw0YHRjw!5e0!3m2!1sru!2sru!4v1527449289386\" width=\"1330\" height=\"1000
    0\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    <!-- Footer -->
    <footer class=\"w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge\">
        <i class=\"fa fa-facebook-official w3-hover-opacity\"></i>
        <i class=\"fa fa-instagram w3-hover-opacity\"></i>
        <i class=\"fa fa-snapchat w3-hover-opacity\"></i>
        <i class=\"fa fa-pinterest-p w3-hover-opacity\"></i>
        <i class=\"fa fa-twitter w3-hover-opacity\"></i>
        <i class=\"fa fa-linkedin w3-hover-opacity\"></i>
        <p class=\"w3-medium\">Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" target=\"_blank\">w3.css</a></p>
    </footer>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName(\"mySlides\");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = \"none\";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = \"block\";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById(\"navDemo\");
            if (x.className.indexOf(\"w3-show\") == -1) {
                x.className += \" w3-show\";
            } else {
                x.className = x.className.replace(\" w3-show\", \"\");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = \"none\";
            }
        }
    </script>




{#<div class=\"form-group\">#}


        {#{{ form_start(form) }}#}
        {#{{ form_widget(form) }}#}
        {#<div class=\"form-group\">#}
            {#<div class=\"col-sm-offset-2 col-sm-10\">#}
                {#<button type=\"submit\" class=\"btn btn-dark\">Search</button>#}
            {#</div>#}
        {#</div>#}
        {#<button type=\"submit\" class=\"btn btn-default\">Submit</button>#}
        {#{{ form_end(form) }}#}
    {#</div>#}









{% endblock %}", "catalog/search.html.twig", "/videoCatalog/app/Resources/views/catalog/search.html.twig");
    }
}
