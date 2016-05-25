<?php

/* base.html.twig */
class __TwigTemplate_869c7bfa4dce5ba33a588100a6a79bfcc7ab0091e2a12b63f07f8145bdcf26ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f64f5bfa2c54095de7ab40befce707bc48582794a11b322d1969aecb7b8707 = $this->env->getExtension("native_profiler");
        $__internal_24f64f5bfa2c54095de7ab40befce707bc48582794a11b322d1969aecb7b8707->enter($__internal_24f64f5bfa2c54095de7ab40befce707bc48582794a11b322d1969aecb7b8707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/freelancer.css\" rel=\"stylesheet\">
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"details.css\" type=\"text/css\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "


</head>

<body>

    <div class=\"navbar-wrapper\">
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container\">
                <form class=\"form-inline\">
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"exampleInputEmail3\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Email\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"exampleInputPassword3\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword3\" placeholder=\"Password\">
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\"> Remember me
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                </form>
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\"><span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\">
                        </span> GradeTrader</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <a class=\"navbar-brand\" href=\"/gt/play\"><span class=\"glyphicon glyphicon-knight\" aria-hidden=\"true\"></span>Spielen</a>
                        <a class=\"navbar-brand\" href=\"/gt/login/2\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>Profil</a>
                        <a class=\"navbar-brand\" href=\"/\"><span class=\"glyphicon glyphicon-indent-left\" aria-hidden=\"true\"></span>Statistik</a>
                </div>


            </div>

        </nav>

    </div>
    <header>

            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "



    </header>

    </div>



    </div>
";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "</body>
</html>
";
        
        $__internal_24f64f5bfa2c54095de7ab40befce707bc48582794a11b322d1969aecb7b8707->leave($__internal_24f64f5bfa2c54095de7ab40befce707bc48582794a11b322d1969aecb7b8707_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0cdc73878f03c6157b2d0ac699da4ccf5fe1584ff0a6552b0c88b02e19393b6 = $this->env->getExtension("native_profiler");
        $__internal_f0cdc73878f03c6157b2d0ac699da4ccf5fe1584ff0a6552b0c88b02e19393b6->enter($__internal_f0cdc73878f03c6157b2d0ac699da4ccf5fe1584ff0a6552b0c88b02e19393b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GradeTrader!";
        
        $__internal_f0cdc73878f03c6157b2d0ac699da4ccf5fe1584ff0a6552b0c88b02e19393b6->leave($__internal_f0cdc73878f03c6157b2d0ac699da4ccf5fe1584ff0a6552b0c88b02e19393b6_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d6cbdf116e8c477cf93ef56606b882dfc6a65ed8eaf84a554c30fa1675416eb = $this->env->getExtension("native_profiler");
        $__internal_0d6cbdf116e8c477cf93ef56606b882dfc6a65ed8eaf84a554c30fa1675416eb->enter($__internal_0d6cbdf116e8c477cf93ef56606b882dfc6a65ed8eaf84a554c30fa1675416eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_0d6cbdf116e8c477cf93ef56606b882dfc6a65ed8eaf84a554c30fa1675416eb->leave($__internal_0d6cbdf116e8c477cf93ef56606b882dfc6a65ed8eaf84a554c30fa1675416eb_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a073247df0f2cbd6adac375519fa75cb5b8c40b0530ee4ae865a028ea41c79e = $this->env->getExtension("native_profiler");
        $__internal_8a073247df0f2cbd6adac375519fa75cb5b8c40b0530ee4ae865a028ea41c79e->enter($__internal_8a073247df0f2cbd6adac375519fa75cb5b8c40b0530ee4ae865a028ea41c79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a073247df0f2cbd6adac375519fa75cb5b8c40b0530ee4ae865a028ea41c79e->leave($__internal_8a073247df0f2cbd6adac375519fa75cb5b8c40b0530ee4ae865a028ea41c79e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_106875983d97123269920071d159bcd04356a15a411fb3b156e5b3359870ad2a = $this->env->getExtension("native_profiler");
        $__internal_106875983d97123269920071d159bcd04356a15a411fb3b156e5b3359870ad2a->enter($__internal_106875983d97123269920071d159bcd04356a15a411fb3b156e5b3359870ad2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_106875983d97123269920071d159bcd04356a15a411fb3b156e5b3359870ad2a->leave($__internal_106875983d97123269920071d159bcd04356a15a411fb3b156e5b3359870ad2a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 88,  162 => 76,  150 => 23,  138 => 13,  129 => 89,  127 => 88,  114 => 77,  112 => 76,  58 => 24,  56 => 23,  52 => 22,  40 => 13,  26 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}GradeTrader!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="css/freelancer.css" rel="stylesheet">*/
/*     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     <link rel="stylesheet" href="details.css" type="text/css" />*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     {% block stylesheets %} {% endblock %}*/
/* */
/* */
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div class="navbar-wrapper">*/
/*         <nav class="navbar navbar-inverse navbar-static-top">*/
/*             <div class="container">*/
/*                 <form class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="exampleInputEmail3">Email address</label>*/
/*                         <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="exampleInputPassword3">Password</label>*/
/*                         <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox"> Remember me*/
/*                         </label>*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default">Sign in</button>*/
/*                 </form>*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"*/
/*                             data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-education" aria-hidden="true">*/
/*                         </span> GradeTrader</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <a class="navbar-brand" href="/gt/play"><span class="glyphicon glyphicon-knight" aria-hidden="true"></span>Spielen</a>*/
/*                         <a class="navbar-brand" href="/gt/login/2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profil</a>*/
/*                         <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>Statistik</a>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/*         </nav>*/
/* */
/*     </div>*/
/*     <header>*/
/* */
/*             {% block body %}{% endblock %}*/
/* */
/* */
/* */
/* */
/*     </header>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/*     </div>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
