<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08eda9fd8f4586963fcd9b6037d2dd27f2cf59667da62654227fb0c8ec97dfd0 extends Twig_Template
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
        $__internal_5457d7891b1bedd0e40b4f96ea3769e9d224fb066c202d0b88cebacf6bdf3cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5457d7891b1bedd0e40b4f96ea3769e9d224fb066c202d0b88cebacf6bdf3cc3->enter($__internal_5457d7891b1bedd0e40b4f96ea3769e9d224fb066c202d0b88cebacf6bdf3cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_99ec3811792bfbf2bfa9bb1e8e19a509c9c445e12830ce23bdc7374a3270f2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ec3811792bfbf2bfa9bb1e8e19a509c9c445e12830ce23bdc7374a3270f2b4->enter($__internal_99ec3811792bfbf2bfa9bb1e8e19a509c9c445e12830ce23bdc7374a3270f2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5457d7891b1bedd0e40b4f96ea3769e9d224fb066c202d0b88cebacf6bdf3cc3->leave($__internal_5457d7891b1bedd0e40b4f96ea3769e9d224fb066c202d0b88cebacf6bdf3cc3_prof);

        
        $__internal_99ec3811792bfbf2bfa9bb1e8e19a509c9c445e12830ce23bdc7374a3270f2b4->leave($__internal_99ec3811792bfbf2bfa9bb1e8e19a509c9c445e12830ce23bdc7374a3270f2b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc7c5090638d21eb186ca2064aa03a8e59094435ec528898a668553a98620aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7c5090638d21eb186ca2064aa03a8e59094435ec528898a668553a98620aa1->enter($__internal_dc7c5090638d21eb186ca2064aa03a8e59094435ec528898a668553a98620aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eebaab8a39923d114785c0a5cc66bc1f0e1c3265bc44208cf39dedc7ab71f75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebaab8a39923d114785c0a5cc66bc1f0e1c3265bc44208cf39dedc7ab71f75e->enter($__internal_eebaab8a39923d114785c0a5cc66bc1f0e1c3265bc44208cf39dedc7ab71f75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_eebaab8a39923d114785c0a5cc66bc1f0e1c3265bc44208cf39dedc7ab71f75e->leave($__internal_eebaab8a39923d114785c0a5cc66bc1f0e1c3265bc44208cf39dedc7ab71f75e_prof);

        
        $__internal_dc7c5090638d21eb186ca2064aa03a8e59094435ec528898a668553a98620aa1->leave($__internal_dc7c5090638d21eb186ca2064aa03a8e59094435ec528898a668553a98620aa1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3e8ac3342f4d31cfad15b4572dc353aa3634efb1f3cb9e1320ce65776a0c0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e8ac3342f4d31cfad15b4572dc353aa3634efb1f3cb9e1320ce65776a0c0f3->enter($__internal_d3e8ac3342f4d31cfad15b4572dc353aa3634efb1f3cb9e1320ce65776a0c0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44fb663d77cd02fed9ecd3a1b3388b5625c93544a7dd282ac0bbc0cd05f8072a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fb663d77cd02fed9ecd3a1b3388b5625c93544a7dd282ac0bbc0cd05f8072a->enter($__internal_44fb663d77cd02fed9ecd3a1b3388b5625c93544a7dd282ac0bbc0cd05f8072a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44fb663d77cd02fed9ecd3a1b3388b5625c93544a7dd282ac0bbc0cd05f8072a->leave($__internal_44fb663d77cd02fed9ecd3a1b3388b5625c93544a7dd282ac0bbc0cd05f8072a_prof);

        
        $__internal_d3e8ac3342f4d31cfad15b4572dc353aa3634efb1f3cb9e1320ce65776a0c0f3->leave($__internal_d3e8ac3342f4d31cfad15b4572dc353aa3634efb1f3cb9e1320ce65776a0c0f3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_03d51452660f647dc285f892e91a75e9fef4134d14c8a77eca3d3069a006a1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d51452660f647dc285f892e91a75e9fef4134d14c8a77eca3d3069a006a1a9->enter($__internal_03d51452660f647dc285f892e91a75e9fef4134d14c8a77eca3d3069a006a1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b5fb50f5882eeecb7ec2898a06b6bae7a8a5f4186df3d26fdc9f272e5219879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5fb50f5882eeecb7ec2898a06b6bae7a8a5f4186df3d26fdc9f272e5219879->enter($__internal_9b5fb50f5882eeecb7ec2898a06b6bae7a8a5f4186df3d26fdc9f272e5219879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9b5fb50f5882eeecb7ec2898a06b6bae7a8a5f4186df3d26fdc9f272e5219879->leave($__internal_9b5fb50f5882eeecb7ec2898a06b6bae7a8a5f4186df3d26fdc9f272e5219879_prof);

        
        $__internal_03d51452660f647dc285f892e91a75e9fef4134d14c8a77eca3d3069a006a1a9->leave($__internal_03d51452660f647dc285f892e91a75e9fef4134d14c8a77eca3d3069a006a1a9_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
