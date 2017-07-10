<?php

/* search/searchpage.html.twig */
class __TwigTemplate_539fcd87ceb1cae68bc6d6655a8bc2f94212f13e625ca1b52c7bd85e0ac64524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/searchpage.html.twig", 1);
        $this->blocks = array(
            'body_text_title' => array($this, 'block_body_text_title'),
            'body_text_content' => array($this, 'block_body_text_content'),
            'body_content_other' => array($this, 'block_body_content_other'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce04379617c9bfbe34b03ba999d5e5f0a2f545db1c90942acab804f4bf834184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce04379617c9bfbe34b03ba999d5e5f0a2f545db1c90942acab804f4bf834184->enter($__internal_ce04379617c9bfbe34b03ba999d5e5f0a2f545db1c90942acab804f4bf834184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchpage.html.twig"));

        $__internal_694228bffbc11d1b25b6cc2732a9357446b3bc134115e9ac336542f6933a5d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694228bffbc11d1b25b6cc2732a9357446b3bc134115e9ac336542f6933a5d3f->enter($__internal_694228bffbc11d1b25b6cc2732a9357446b3bc134115e9ac336542f6933a5d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce04379617c9bfbe34b03ba999d5e5f0a2f545db1c90942acab804f4bf834184->leave($__internal_ce04379617c9bfbe34b03ba999d5e5f0a2f545db1c90942acab804f4bf834184_prof);

        
        $__internal_694228bffbc11d1b25b6cc2732a9357446b3bc134115e9ac336542f6933a5d3f->leave($__internal_694228bffbc11d1b25b6cc2732a9357446b3bc134115e9ac336542f6933a5d3f_prof);

    }

    // line 3
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_e41923f869202f6b499d513e2e23adeea1080a742430efbf8b89298a18cc2290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41923f869202f6b499d513e2e23adeea1080a742430efbf8b89298a18cc2290->enter($__internal_e41923f869202f6b499d513e2e23adeea1080a742430efbf8b89298a18cc2290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_fef06ebc3f9de3ac267e7d1a584230faef0761960ec35bc529e41bd013c82eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef06ebc3f9de3ac267e7d1a584230faef0761960ec35bc529e41bd013c82eba->enter($__internal_fef06ebc3f9de3ac267e7d1a584230faef0761960ec35bc529e41bd013c82eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        echo "Search for your movie here!";
        
        $__internal_fef06ebc3f9de3ac267e7d1a584230faef0761960ec35bc529e41bd013c82eba->leave($__internal_fef06ebc3f9de3ac267e7d1a584230faef0761960ec35bc529e41bd013c82eba_prof);

        
        $__internal_e41923f869202f6b499d513e2e23adeea1080a742430efbf8b89298a18cc2290->leave($__internal_e41923f869202f6b499d513e2e23adeea1080a742430efbf8b89298a18cc2290_prof);

    }

    // line 4
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_5d6417fbf536a3de1d9980d079c4c3c7e9f66de31aac726e41a0acae4a014cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6417fbf536a3de1d9980d079c4c3c7e9f66de31aac726e41a0acae4a014cce->enter($__internal_5d6417fbf536a3de1d9980d079c4c3c7e9f66de31aac726e41a0acae4a014cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_9839d7683ec788bdb17e5f4c58a2cc3f06d3593749b8874f6aa819876b1b69f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9839d7683ec788bdb17e5f4c58a2cc3f06d3593749b8874f6aa819876b1b69f8->enter($__internal_9839d7683ec788bdb17e5f4c58a2cc3f06d3593749b8874f6aa819876b1b69f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        // line 5
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 6
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        
        $__internal_9839d7683ec788bdb17e5f4c58a2cc3f06d3593749b8874f6aa819876b1b69f8->leave($__internal_9839d7683ec788bdb17e5f4c58a2cc3f06d3593749b8874f6aa819876b1b69f8_prof);

        
        $__internal_5d6417fbf536a3de1d9980d079c4c3c7e9f66de31aac726e41a0acae4a014cce->leave($__internal_5d6417fbf536a3de1d9980d079c4c3c7e9f66de31aac726e41a0acae4a014cce_prof);

    }

    // line 10
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_ecfdf4cb89cabd1b8399a27b75a9501f6651b2b90eab4ceefbbb9e152fddb531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfdf4cb89cabd1b8399a27b75a9501f6651b2b90eab4ceefbbb9e152fddb531->enter($__internal_ecfdf4cb89cabd1b8399a27b75a9501f6651b2b90eab4ceefbbb9e152fddb531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_4023215b45e570103ff0f3567a8665f311588b2b03b6c17bebed1f4822a4d02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4023215b45e570103ff0f3567a8665f311588b2b03b6c17bebed1f4822a4d02d->enter($__internal_4023215b45e570103ff0f3567a8665f311588b2b03b6c17bebed1f4822a4d02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        // line 11
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'label', array("label_attr" => array("class" => "searchLabel"), "label" => "Search "));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'widget', array("attr" => array("class" => "searchBar")));
        echo "
    </div>

  

    <div>
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "searchButton")));
        echo "
    </div>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_4023215b45e570103ff0f3567a8665f311588b2b03b6c17bebed1f4822a4d02d->leave($__internal_4023215b45e570103ff0f3567a8665f311588b2b03b6c17bebed1f4822a4d02d_prof);

        
        $__internal_ecfdf4cb89cabd1b8399a27b75a9501f6651b2b90eab4ceefbbb9e152fddb531->leave($__internal_ecfdf4cb89cabd1b8399a27b75a9501f6651b2b90eab4ceefbbb9e152fddb531_prof);

    }

    public function getTemplateName()
    {
        return "search/searchpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 26,  133 => 24,  124 => 18,  120 => 17,  116 => 16,  110 => 13,  106 => 12,  103 => 11,  94 => 10,  83 => 8,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_text_title %}Search for your movie here!{% endblock %}
{% block body_text_content %}
 {% for movie in movies %}
       {{ movie.title }}
    {% endfor %}

{% endblock %}
{% block body_content_other %}

{{ form_start(form) }}
  {{ form_errors(form) }}

    <div>
        {{ form_label(form.searchObject, 'Search ', {'label_attr': {'class': 'searchLabel'}}) }}
        {{ form_errors(form.searchObject) }}
        {{ form_widget(form.searchObject, {'attr': {'class': 'searchBar'}}) }}
    </div>

  

    <div>
        {{ form_widget(form.save, {'attr': {'class': 'searchButton'}}) }}
    </div>
{{ form_end(form) }}
{% endblock %}

", "search/searchpage.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchpage.html.twig");
    }
}
