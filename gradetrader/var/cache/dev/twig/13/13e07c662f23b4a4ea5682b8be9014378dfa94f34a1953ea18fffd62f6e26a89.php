<?php

/* gt/play.html.twig */
class __TwigTemplate_f45e775dced3f3e66be57569dc8a22435824771b8fb624d5cc4d10cc08191f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gt/play.html.twig", 1);
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
        $__internal_e6f28292b49f6f9a3cdde0d4ace3d94e0d2a87fb592fbe679f3df69c0c98a72f = $this->env->getExtension("native_profiler");
        $__internal_e6f28292b49f6f9a3cdde0d4ace3d94e0d2a87fb592fbe679f3df69c0c98a72f->enter($__internal_e6f28292b49f6f9a3cdde0d4ace3d94e0d2a87fb592fbe679f3df69c0c98a72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gt/play.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f28292b49f6f9a3cdde0d4ace3d94e0d2a87fb592fbe679f3df69c0c98a72f->leave($__internal_e6f28292b49f6f9a3cdde0d4ace3d94e0d2a87fb592fbe679f3df69c0c98a72f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a67fe158602ca19fe6c023653dd379798cc73bf7b6dcc343ec0dcce1cf389e0 = $this->env->getExtension("native_profiler");
        $__internal_7a67fe158602ca19fe6c023653dd379798cc73bf7b6dcc343ec0dcce1cf389e0->enter($__internal_7a67fe158602ca19fe6c023653dd379798cc73bf7b6dcc343ec0dcce1cf389e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_7a67fe158602ca19fe6c023653dd379798cc73bf7b6dcc343ec0dcce1cf389e0->leave($__internal_7a67fe158602ca19fe6c023653dd379798cc73bf7b6dcc343ec0dcce1cf389e0_prof);

    }

    public function getTemplateName()
    {
        return "gt/play.html.twig";
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
/* */
/* {% endblock %}*/
