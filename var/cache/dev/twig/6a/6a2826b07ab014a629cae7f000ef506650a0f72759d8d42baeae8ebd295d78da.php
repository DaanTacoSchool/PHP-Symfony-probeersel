<?php

/* search/test.html.twig */
class __TwigTemplate_d3cea3ad7b57eb2667e1f7c70866546f072d1299c3924157d856cc30e51dc439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/test.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'body_menu' => array($this, 'block_body_menu'),
            'body_text_content' => array($this, 'block_body_text_content'),
            'body_results' => array($this, 'block_body_results'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3db1da106c1fcc9d76f177713234349fc095b52bf88c870b1048eca755d03a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3db1da106c1fcc9d76f177713234349fc095b52bf88c870b1048eca755d03a5->enter($__internal_d3db1da106c1fcc9d76f177713234349fc095b52bf88c870b1048eca755d03a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/test.html.twig"));

        $__internal_4fb37a28ccb191ae26b3b1fda4883b940505ba63e0a2746284e44c65bce6c991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb37a28ccb191ae26b3b1fda4883b940505ba63e0a2746284e44c65bce6c991->enter($__internal_4fb37a28ccb191ae26b3b1fda4883b940505ba63e0a2746284e44c65bce6c991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3db1da106c1fcc9d76f177713234349fc095b52bf88c870b1048eca755d03a5->leave($__internal_d3db1da106c1fcc9d76f177713234349fc095b52bf88c870b1048eca755d03a5_prof);

        
        $__internal_4fb37a28ccb191ae26b3b1fda4883b940505ba63e0a2746284e44c65bce6c991->leave($__internal_4fb37a28ccb191ae26b3b1fda4883b940505ba63e0a2746284e44c65bce6c991_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_762f787fb5efb4dcf0c97c0d9db6b402c64b8e35b4bf1ad0c43d2497e8f9ca71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762f787fb5efb4dcf0c97c0d9db6b402c64b8e35b4bf1ad0c43d2497e8f9ca71->enter($__internal_762f787fb5efb4dcf0c97c0d9db6b402c64b8e35b4bf1ad0c43d2497e8f9ca71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d3a8ad45cee04baf7326961d82f34610e6a2556caccd423a757a82c68deb1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3a8ad45cee04baf7326961d82f34610e6a2556caccd423a757a82c68deb1bb->enter($__internal_7d3a8ad45cee04baf7326961d82f34610e6a2556caccd423a757a82c68deb1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">

";
        // line 6
        $this->displayBlock('body_menu', $context, $blocks);
        // line 9
        $this->displayBlock('body_text_content', $context, $blocks);
        // line 11
        $this->displayBlock('body_results', $context, $blocks);
        // line 18
        echo "        </div>
    </div>
";
        
        $__internal_7d3a8ad45cee04baf7326961d82f34610e6a2556caccd423a757a82c68deb1bb->leave($__internal_7d3a8ad45cee04baf7326961d82f34610e6a2556caccd423a757a82c68deb1bb_prof);

        
        $__internal_762f787fb5efb4dcf0c97c0d9db6b402c64b8e35b4bf1ad0c43d2497e8f9ca71->leave($__internal_762f787fb5efb4dcf0c97c0d9db6b402c64b8e35b4bf1ad0c43d2497e8f9ca71_prof);

    }

    // line 6
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_889b04d9f36a0c231c178a123d07fda4b4c5cd7d6e41e51bfb306700aee651e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889b04d9f36a0c231c178a123d07fda4b4c5cd7d6e41e51bfb306700aee651e8->enter($__internal_889b04d9f36a0c231c178a123d07fda4b4c5cd7d6e41e51bfb306700aee651e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_952f88026ee10706ab0b016a46d8d15bd27b851aef89184bf3e5e9185292cf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952f88026ee10706ab0b016a46d8d15bd27b851aef89184bf3e5e9185292cf38->enter($__internal_952f88026ee10706ab0b016a46d8d15bd27b851aef89184bf3e5e9185292cf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 7
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_952f88026ee10706ab0b016a46d8d15bd27b851aef89184bf3e5e9185292cf38->leave($__internal_952f88026ee10706ab0b016a46d8d15bd27b851aef89184bf3e5e9185292cf38_prof);

        
        $__internal_889b04d9f36a0c231c178a123d07fda4b4c5cd7d6e41e51bfb306700aee651e8->leave($__internal_889b04d9f36a0c231c178a123d07fda4b4c5cd7d6e41e51bfb306700aee651e8_prof);

    }

    // line 9
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_bb22fbd8ae19efe8d5a8e0f3b27bb9019c19a6adfff9962bed8bec35833f7351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb22fbd8ae19efe8d5a8e0f3b27bb9019c19a6adfff9962bed8bec35833f7351->enter($__internal_bb22fbd8ae19efe8d5a8e0f3b27bb9019c19a6adfff9962bed8bec35833f7351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_a8220b1f3a7cbc6d8f3eb084dc30cc6acbc1e7144b72dafc804f9280d18be2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8220b1f3a7cbc6d8f3eb084dc30cc6acbc1e7144b72dafc804f9280d18be2ac->enter($__internal_a8220b1f3a7cbc6d8f3eb084dc30cc6acbc1e7144b72dafc804f9280d18be2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_a8220b1f3a7cbc6d8f3eb084dc30cc6acbc1e7144b72dafc804f9280d18be2ac->leave($__internal_a8220b1f3a7cbc6d8f3eb084dc30cc6acbc1e7144b72dafc804f9280d18be2ac_prof);

        
        $__internal_bb22fbd8ae19efe8d5a8e0f3b27bb9019c19a6adfff9962bed8bec35833f7351->leave($__internal_bb22fbd8ae19efe8d5a8e0f3b27bb9019c19a6adfff9962bed8bec35833f7351_prof);

    }

    // line 11
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_9fb00d6b160a6a28d0069f504325c4b7be0ca6fe6cdf822dce684c51bcd3ed8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb00d6b160a6a28d0069f504325c4b7be0ca6fe6cdf822dce684c51bcd3ed8c->enter($__internal_9fb00d6b160a6a28d0069f504325c4b7be0ca6fe6cdf822dce684c51bcd3ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_91efb58977f0ea49e9f8b343f72ce914eadd4d82149e3f11a86e92a9329c76ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91efb58977f0ea49e9f8b343f72ce914eadd4d82149e3f11a86e92a9329c76ff->enter($__internal_91efb58977f0ea49e9f8b343f72ce914eadd4d82149e3f11a86e92a9329c76ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 12
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cookies"]) ? $context["cookies"] : $this->getContext($context, "cookies")));
        foreach ($context['_seq'] as $context["_key"] => $context["cookie"]) {
            // line 13
            echo "     <p>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cookie"], "Name", array(), "method"), "html", null, true);
            echo "</p> 
      <p>  ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["cookie"], "Value", array(), "method"), "html", null, true);
            echo "</p> 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cookie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "   
";
        
        $__internal_91efb58977f0ea49e9f8b343f72ce914eadd4d82149e3f11a86e92a9329c76ff->leave($__internal_91efb58977f0ea49e9f8b343f72ce914eadd4d82149e3f11a86e92a9329c76ff_prof);

        
        $__internal_9fb00d6b160a6a28d0069f504325c4b7be0ca6fe6cdf822dce684c51bcd3ed8c->leave($__internal_9fb00d6b160a6a28d0069f504325c4b7be0ca6fe6cdf822dce684c51bcd3ed8c_prof);

    }

    public function getTemplateName()
    {
        return "search/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 16,  132 => 14,  127 => 13,  122 => 12,  113 => 11,  96 => 9,  84 => 7,  75 => 6,  63 => 18,  61 => 11,  59 => 9,  57 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
{% block body %}
<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">

{% block body_menu %}
{{parent()}}
{% endblock %}
{% block body_text_content %}
{% endblock %}
{% block body_results %}
 {% for cookie in cookies %}
     <p>  {{cookie.Name()}}</p> 
      <p>  {{cookie.Value()}}</p> 
 {% endfor %}
   
{% endblock %}
        </div>
    </div>
{% endblock %}", "search/test.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\test.html.twig");
    }
}
