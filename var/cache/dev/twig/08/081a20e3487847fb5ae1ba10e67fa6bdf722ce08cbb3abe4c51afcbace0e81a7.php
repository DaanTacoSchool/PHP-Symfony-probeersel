<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_72fd49833c537459418532413276ef6a6dc228e9b1dd47c36dfe0d78f2e3b0c1 extends Twig_Template
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
        $__internal_2cbc21399b20adf3e2d3cc6a5d350173a1902f74cab1cc9837213e8c66e313b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbc21399b20adf3e2d3cc6a5d350173a1902f74cab1cc9837213e8c66e313b5->enter($__internal_2cbc21399b20adf3e2d3cc6a5d350173a1902f74cab1cc9837213e8c66e313b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_40b9c34a67c2f4d4dfa777e95cdcd0a39095229e7e12fe70b4c1d831d93fd457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b9c34a67c2f4d4dfa777e95cdcd0a39095229e7e12fe70b4c1d831d93fd457->enter($__internal_40b9c34a67c2f4d4dfa777e95cdcd0a39095229e7e12fe70b4c1d831d93fd457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_2cbc21399b20adf3e2d3cc6a5d350173a1902f74cab1cc9837213e8c66e313b5->leave($__internal_2cbc21399b20adf3e2d3cc6a5d350173a1902f74cab1cc9837213e8c66e313b5_prof);

        
        $__internal_40b9c34a67c2f4d4dfa777e95cdcd0a39095229e7e12fe70b4c1d831d93fd457->leave($__internal_40b9c34a67c2f4d4dfa777e95cdcd0a39095229e7e12fe70b4c1d831d93fd457_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
