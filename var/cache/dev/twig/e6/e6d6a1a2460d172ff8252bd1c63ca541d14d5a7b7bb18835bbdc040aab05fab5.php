<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bc51b2d3958c1f8912f6d4b62e438f35e4bbce1b32fb28e8f71ec43aba124be2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8bc23f3193e393345de3b6b41d9ab55e229bcf9ea8d7676c9efdb319a8e8be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bc23f3193e393345de3b6b41d9ab55e229bcf9ea8d7676c9efdb319a8e8be3->enter($__internal_d8bc23f3193e393345de3b6b41d9ab55e229bcf9ea8d7676c9efdb319a8e8be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4fe071790213573acbf78540e662e671406ce3190bb68c1bcd0e1d11bb810322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe071790213573acbf78540e662e671406ce3190bb68c1bcd0e1d11bb810322->enter($__internal_4fe071790213573acbf78540e662e671406ce3190bb68c1bcd0e1d11bb810322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d8bc23f3193e393345de3b6b41d9ab55e229bcf9ea8d7676c9efdb319a8e8be3->leave($__internal_d8bc23f3193e393345de3b6b41d9ab55e229bcf9ea8d7676c9efdb319a8e8be3_prof);

        
        $__internal_4fe071790213573acbf78540e662e671406ce3190bb68c1bcd0e1d11bb810322->leave($__internal_4fe071790213573acbf78540e662e671406ce3190bb68c1bcd0e1d11bb810322_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
