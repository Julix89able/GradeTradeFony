<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4080f3fc6c43345a9293a9f7ff88eaf7c0f68dcae7bf5f30eacaeb38fd569ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_313ec3f948d18c7b05370a4d254b6239ee2066b9575a54a07db6a74a861fbf35 = $this->env->getExtension("native_profiler");
        $__internal_313ec3f948d18c7b05370a4d254b6239ee2066b9575a54a07db6a74a861fbf35->enter($__internal_313ec3f948d18c7b05370a4d254b6239ee2066b9575a54a07db6a74a861fbf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313ec3f948d18c7b05370a4d254b6239ee2066b9575a54a07db6a74a861fbf35->leave($__internal_313ec3f948d18c7b05370a4d254b6239ee2066b9575a54a07db6a74a861fbf35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7ce81b92fa1722fa5f136c1ceb63b9b8e38a25ab0cda72f3536df95f65d1558 = $this->env->getExtension("native_profiler");
        $__internal_b7ce81b92fa1722fa5f136c1ceb63b9b8e38a25ab0cda72f3536df95f65d1558->enter($__internal_b7ce81b92fa1722fa5f136c1ceb63b9b8e38a25ab0cda72f3536df95f65d1558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b7ce81b92fa1722fa5f136c1ceb63b9b8e38a25ab0cda72f3536df95f65d1558->leave($__internal_b7ce81b92fa1722fa5f136c1ceb63b9b8e38a25ab0cda72f3536df95f65d1558_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bd480d1475bf63e804dd7a9e08fd763e271bdef6f8f393ab25acae62e3406f1 = $this->env->getExtension("native_profiler");
        $__internal_1bd480d1475bf63e804dd7a9e08fd763e271bdef6f8f393ab25acae62e3406f1->enter($__internal_1bd480d1475bf63e804dd7a9e08fd763e271bdef6f8f393ab25acae62e3406f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bd480d1475bf63e804dd7a9e08fd763e271bdef6f8f393ab25acae62e3406f1->leave($__internal_1bd480d1475bf63e804dd7a9e08fd763e271bdef6f8f393ab25acae62e3406f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ebc7ab503e12c3ef6f468634a7204495ca38a4dad577814c6420b61b9c76a85 = $this->env->getExtension("native_profiler");
        $__internal_5ebc7ab503e12c3ef6f468634a7204495ca38a4dad577814c6420b61b9c76a85->enter($__internal_5ebc7ab503e12c3ef6f468634a7204495ca38a4dad577814c6420b61b9c76a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5ebc7ab503e12c3ef6f468634a7204495ca38a4dad577814c6420b61b9c76a85->leave($__internal_5ebc7ab503e12c3ef6f468634a7204495ca38a4dad577814c6420b61b9c76a85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
