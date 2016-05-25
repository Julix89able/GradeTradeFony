<?php

/* gt/login.html.twig */
class __TwigTemplate_65566feafc3430dd0620d50bd047f7db803613e071b3d832efbb263dceadc71c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gt/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d41e7b08b368c2711092363ae2c22310b4372abe7b36c308ec3b3ccd3bf00533 = $this->env->getExtension("native_profiler");
        $__internal_d41e7b08b368c2711092363ae2c22310b4372abe7b36c308ec3b3ccd3bf00533->enter($__internal_d41e7b08b368c2711092363ae2c22310b4372abe7b36c308ec3b3ccd3bf00533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gt/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41e7b08b368c2711092363ae2c22310b4372abe7b36c308ec3b3ccd3bf00533->leave($__internal_d41e7b08b368c2711092363ae2c22310b4372abe7b36c308ec3b3ccd3bf00533_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a005056c3b90b63c803e4cbe5e4de6dfc33815e442c1d00bc6cd52482ce5143 = $this->env->getExtension("native_profiler");
        $__internal_5a005056c3b90b63c803e4cbe5e4de6dfc33815e442c1d00bc6cd52482ce5143->enter($__internal_5a005056c3b90b63c803e4cbe5e4de6dfc33815e442c1d00bc6cd52482ce5143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row centered-form\">
            <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please sign up for GradeTrader <small>It's fun!</small></h3>
                    </div>
                    <div class=\"panel-body\">
                        <form role=\"form\">
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control input-sm\" placeholder=\"First Name\">
                                    </div>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control input-sm\" placeholder=\"Last Name\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-sm\" placeholder=\"Email Address\">
                            </div>

                            <div class=\"row\">
                                <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-sm\" placeholder=\"Password\">
                                    </div>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password_confirmation\" id=\"password_confirmation\" class=\"form-control input-sm\" placeholder=\"Confirm Password\">
                                    </div>
                                </div>
                            </div>

                            <input type=\"submit\" value=\"Register\" class=\"btn btn-info btn-block\">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_5a005056c3b90b63c803e4cbe5e4de6dfc33815e442c1d00bc6cd52482ce5143->leave($__internal_5a005056c3b90b63c803e4cbe5e4de6dfc33815e442c1d00bc6cd52482ce5143_prof);

    }

    public function getTemplateName()
    {
        return "gt/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row centered-form">*/
/*             <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Please sign up for GradeTrader <small>It's fun!</small></h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form role="form">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-sm-6 col-md-6">*/
/*                                     <div class="form-group">*/
/*                                         <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-sm-6 col-md-6">*/
/*                                     <div class="form-group">*/
/*                                         <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-sm-6 col-md-6">*/
/*                                     <div class="form-group">*/
/*                                         <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-sm-6 col-md-6">*/
/*                                     <div class="form-group">*/
/*                                         <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <input type="submit" value="Register" class="btn btn-info btn-block">*/
/* */
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
