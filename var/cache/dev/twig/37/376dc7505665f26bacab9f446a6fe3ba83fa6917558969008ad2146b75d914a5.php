<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_313fa38e36a94ce13b3d94a12c9f3429550c32a9da5f028c0712f526bffa404c extends Twig_Template
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
        $__internal_9409591ee7a07bf2c393afccf353a0d42e6f460edc145185fea9f171def4c162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9409591ee7a07bf2c393afccf353a0d42e6f460edc145185fea9f171def4c162->enter($__internal_9409591ee7a07bf2c393afccf353a0d42e6f460edc145185fea9f171def4c162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_93bb568556c90f41ffc4077e82b7c79f3fec1e276b7ef700daefe6d820332f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bb568556c90f41ffc4077e82b7c79f3fec1e276b7ef700daefe6d820332f9e->enter($__internal_93bb568556c90f41ffc4077e82b7c79f3fec1e276b7ef700daefe6d820332f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9409591ee7a07bf2c393afccf353a0d42e6f460edc145185fea9f171def4c162->leave($__internal_9409591ee7a07bf2c393afccf353a0d42e6f460edc145185fea9f171def4c162_prof);

        
        $__internal_93bb568556c90f41ffc4077e82b7c79f3fec1e276b7ef700daefe6d820332f9e->leave($__internal_93bb568556c90f41ffc4077e82b7c79f3fec1e276b7ef700daefe6d820332f9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75d39c074e7e754387ddc5196da16797409066a2c93e4570c8e1bc238f12a403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d39c074e7e754387ddc5196da16797409066a2c93e4570c8e1bc238f12a403->enter($__internal_75d39c074e7e754387ddc5196da16797409066a2c93e4570c8e1bc238f12a403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f95c497ac9cd1fb66d08d8da2b715f65a4a1d6b0a7bd38a4cd8b15237ce99327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95c497ac9cd1fb66d08d8da2b715f65a4a1d6b0a7bd38a4cd8b15237ce99327->enter($__internal_f95c497ac9cd1fb66d08d8da2b715f65a4a1d6b0a7bd38a4cd8b15237ce99327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f95c497ac9cd1fb66d08d8da2b715f65a4a1d6b0a7bd38a4cd8b15237ce99327->leave($__internal_f95c497ac9cd1fb66d08d8da2b715f65a4a1d6b0a7bd38a4cd8b15237ce99327_prof);

        
        $__internal_75d39c074e7e754387ddc5196da16797409066a2c93e4570c8e1bc238f12a403->leave($__internal_75d39c074e7e754387ddc5196da16797409066a2c93e4570c8e1bc238f12a403_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_01bc5f3d5f201ff773b7b6deb8b5627a57caceb7a5e7cfdc53a27590d855bdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bc5f3d5f201ff773b7b6deb8b5627a57caceb7a5e7cfdc53a27590d855bdc1->enter($__internal_01bc5f3d5f201ff773b7b6deb8b5627a57caceb7a5e7cfdc53a27590d855bdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8798a6469a01f12a1a4a431c9f4ce69c624666ed692567406e5d1a9334e2fbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8798a6469a01f12a1a4a431c9f4ce69c624666ed692567406e5d1a9334e2fbe7->enter($__internal_8798a6469a01f12a1a4a431c9f4ce69c624666ed692567406e5d1a9334e2fbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8798a6469a01f12a1a4a431c9f4ce69c624666ed692567406e5d1a9334e2fbe7->leave($__internal_8798a6469a01f12a1a4a431c9f4ce69c624666ed692567406e5d1a9334e2fbe7_prof);

        
        $__internal_01bc5f3d5f201ff773b7b6deb8b5627a57caceb7a5e7cfdc53a27590d855bdc1->leave($__internal_01bc5f3d5f201ff773b7b6deb8b5627a57caceb7a5e7cfdc53a27590d855bdc1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc7352eee3b1dad77a20c5dd1389126e9ee33acd5c36f65263f969359b197c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7352eee3b1dad77a20c5dd1389126e9ee33acd5c36f65263f969359b197c4d->enter($__internal_dc7352eee3b1dad77a20c5dd1389126e9ee33acd5c36f65263f969359b197c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14459b864f2610fa2928f7c066d7c47188698f8ff5604d8e4869e8f5dd27b4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14459b864f2610fa2928f7c066d7c47188698f8ff5604d8e4869e8f5dd27b4d6->enter($__internal_14459b864f2610fa2928f7c066d7c47188698f8ff5604d8e4869e8f5dd27b4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_14459b864f2610fa2928f7c066d7c47188698f8ff5604d8e4869e8f5dd27b4d6->leave($__internal_14459b864f2610fa2928f7c066d7c47188698f8ff5604d8e4869e8f5dd27b4d6_prof);

        
        $__internal_dc7352eee3b1dad77a20c5dd1389126e9ee33acd5c36f65263f969359b197c4d->leave($__internal_dc7352eee3b1dad77a20c5dd1389126e9ee33acd5c36f65263f969359b197c4d_prof);

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
