<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e73bf87ceaefaf7a9d3c7ea5d525c137f24f306f0cf5f5a6e1f608053dbc7562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf58562d9dc2e7d3f53f107327951275233db7c58e9fd45d18f0ef43fdef5264 = $this->env->getExtension("native_profiler");
        $__internal_bf58562d9dc2e7d3f53f107327951275233db7c58e9fd45d18f0ef43fdef5264->enter($__internal_bf58562d9dc2e7d3f53f107327951275233db7c58e9fd45d18f0ef43fdef5264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf58562d9dc2e7d3f53f107327951275233db7c58e9fd45d18f0ef43fdef5264->leave($__internal_bf58562d9dc2e7d3f53f107327951275233db7c58e9fd45d18f0ef43fdef5264_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_124d78e235221486804d6f7caee370d830605fcef1048a47994d51786b3a6289 = $this->env->getExtension("native_profiler");
        $__internal_124d78e235221486804d6f7caee370d830605fcef1048a47994d51786b3a6289->enter($__internal_124d78e235221486804d6f7caee370d830605fcef1048a47994d51786b3a6289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_124d78e235221486804d6f7caee370d830605fcef1048a47994d51786b3a6289->leave($__internal_124d78e235221486804d6f7caee370d830605fcef1048a47994d51786b3a6289_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_664afc646f81f781631df14f90940d16a68b207b82a21cdb6baaeacf90a5fbb6 = $this->env->getExtension("native_profiler");
        $__internal_664afc646f81f781631df14f90940d16a68b207b82a21cdb6baaeacf90a5fbb6->enter($__internal_664afc646f81f781631df14f90940d16a68b207b82a21cdb6baaeacf90a5fbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_664afc646f81f781631df14f90940d16a68b207b82a21cdb6baaeacf90a5fbb6->leave($__internal_664afc646f81f781631df14f90940d16a68b207b82a21cdb6baaeacf90a5fbb6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79518783763db355f03ebe915fd3efd7768a2f81610b850ca6b708b8c33e1dc0 = $this->env->getExtension("native_profiler");
        $__internal_79518783763db355f03ebe915fd3efd7768a2f81610b850ca6b708b8c33e1dc0->enter($__internal_79518783763db355f03ebe915fd3efd7768a2f81610b850ca6b708b8c33e1dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79518783763db355f03ebe915fd3efd7768a2f81610b850ca6b708b8c33e1dc0->leave($__internal_79518783763db355f03ebe915fd3efd7768a2f81610b850ca6b708b8c33e1dc0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
