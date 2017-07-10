<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'body_menu' => array($this, 'block_body_menu'),
            'body_content' => array($this, 'block_body_content'),
            'body_text_title' => array($this, 'block_body_text_title'),
            'body_text_content' => array($this, 'block_body_text_content'),
            'body_content_other' => array($this, 'block_body_content_other'),
            'body_footer' => array($this, 'block_body_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289329f29fd1d9bf8b05906db3b02a450c3efcd286b6e8f60a0e6161b6b785f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289329f29fd1d9bf8b05906db3b02a450c3efcd286b6e8f60a0e6161b6b785f3->enter($__internal_289329f29fd1d9bf8b05906db3b02a450c3efcd286b6e8f60a0e6161b6b785f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9a31b1a94d007048e489b79ef9269b6b0885d3406197847c6fe855e758417e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a31b1a94d007048e489b79ef9269b6b0885d3406197847c6fe855e758417e0c->enter($__internal_9a31b1a94d007048e489b79ef9269b6b0885d3406197847c6fe855e758417e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_289329f29fd1d9bf8b05906db3b02a450c3efcd286b6e8f60a0e6161b6b785f3->leave($__internal_289329f29fd1d9bf8b05906db3b02a450c3efcd286b6e8f60a0e6161b6b785f3_prof);

        
        $__internal_9a31b1a94d007048e489b79ef9269b6b0885d3406197847c6fe855e758417e0c->leave($__internal_9a31b1a94d007048e489b79ef9269b6b0885d3406197847c6fe855e758417e0c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_29c4f0d756d7d2975f03d56db417644d73de5a7575cd587f16b154915a1a6c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c4f0d756d7d2975f03d56db417644d73de5a7575cd587f16b154915a1a6c59->enter($__internal_29c4f0d756d7d2975f03d56db417644d73de5a7575cd587f16b154915a1a6c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_870dd7f97c78eb789e9243fc425172c2ca735dafc3dd49249906ca6dcccc5a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870dd7f97c78eb789e9243fc425172c2ca735dafc3dd49249906ca6dcccc5a63->enter($__internal_870dd7f97c78eb789e9243fc425172c2ca735dafc3dd49249906ca6dcccc5a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies";
        
        $__internal_870dd7f97c78eb789e9243fc425172c2ca735dafc3dd49249906ca6dcccc5a63->leave($__internal_870dd7f97c78eb789e9243fc425172c2ca735dafc3dd49249906ca6dcccc5a63_prof);

        
        $__internal_29c4f0d756d7d2975f03d56db417644d73de5a7575cd587f16b154915a1a6c59->leave($__internal_29c4f0d756d7d2975f03d56db417644d73de5a7575cd587f16b154915a1a6c59_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b97f30580be4ea84f593671a76a90174cc45d60124da99c550492f21914a00e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97f30580be4ea84f593671a76a90174cc45d60124da99c550492f21914a00e2->enter($__internal_b97f30580be4ea84f593671a76a90174cc45d60124da99c550492f21914a00e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8aca7d19542b12527e40814ea4cd726e7f9823b96d8e35401843e6e282864c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8aca7d19542b12527e40814ea4cd726e7f9823b96d8e35401843e6e282864c4->enter($__internal_b8aca7d19542b12527e40814ea4cd726e7f9823b96d8e35401843e6e282864c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cover.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_b8aca7d19542b12527e40814ea4cd726e7f9823b96d8e35401843e6e282864c4->leave($__internal_b8aca7d19542b12527e40814ea4cd726e7f9823b96d8e35401843e6e282864c4_prof);

        
        $__internal_b97f30580be4ea84f593671a76a90174cc45d60124da99c550492f21914a00e2->leave($__internal_b97f30580be4ea84f593671a76a90174cc45d60124da99c550492f21914a00e2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_79d1d64c6b91c78e304ea73d3f500933c4fa0d917fafc112a59cb2a04312f37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d1d64c6b91c78e304ea73d3f500933c4fa0d917fafc112a59cb2a04312f37a->enter($__internal_79d1d64c6b91c78e304ea73d3f500933c4fa0d917fafc112a59cb2a04312f37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b158fdca71edbb882deae477c7b63528384bdbcfbdc593901d099b2365fc49ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b158fdca71edbb882deae477c7b63528384bdbcfbdc593901d099b2365fc49ef->enter($__internal_b158fdca71edbb882deae477c7b63528384bdbcfbdc593901d099b2365fc49ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "\t\t<div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        
";
        // line 22
        $this->displayBlock('body_menu', $context, $blocks);
        // line 36
        echo "<div class=\"cover-container\">
";
        // line 37
        $this->displayBlock('body_content', $context, $blocks);
        // line 44
        $this->displayBlock('body_footer', $context, $blocks);
        // line 51
        echo "        </div>

      </div>

    </div>

";
        
        $__internal_b158fdca71edbb882deae477c7b63528384bdbcfbdc593901d099b2365fc49ef->leave($__internal_b158fdca71edbb882deae477c7b63528384bdbcfbdc593901d099b2365fc49ef_prof);

        
        $__internal_79d1d64c6b91c78e304ea73d3f500933c4fa0d917fafc112a59cb2a04312f37a->leave($__internal_79d1d64c6b91c78e304ea73d3f500933c4fa0d917fafc112a59cb2a04312f37a_prof);

    }

    // line 22
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_0041c777f55bcf898955f8e320edc03b3f687c4339826b4f102d1bca5cddb0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0041c777f55bcf898955f8e320edc03b3f687c4339826b4f102d1bca5cddb0d4->enter($__internal_0041c777f55bcf898955f8e320edc03b3f687c4339826b4f102d1bca5cddb0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_fca588b1f128f68017a0d891ee5e46b371a148094a651da40da2417981c552db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca588b1f128f68017a0d891ee5e46b371a148094a651da40da2417981c552db->enter($__internal_fca588b1f128f68017a0d891ee5e46b371a148094a651da40da2417981c552db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 23
        echo "          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"";
        // line 28
        if ((is_string($__internal_12ad7610a80bbfc6dacb7cc83078e1990adf8a6589193bc280b6beade484bbf7 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_563b040e241ec8090afe514ec3346f5d5aaa9b63db2ed55362d248da1f0848b5 = "homepage") && ('' === $__internal_563b040e241ec8090afe514ec3346f5d5aaa9b63db2ed55362d248da1f0848b5 || 0 === strpos($__internal_12ad7610a80bbfc6dacb7cc83078e1990adf8a6589193bc280b6beade484bbf7, $__internal_563b040e241ec8090afe514ec3346f5d5aaa9b63db2ed55362d248da1f0848b5)))) {
            echo "active";
        }
        echo "\"><a href=\"../../\">Home</a></li>
                  <li class=\"";
        // line 29
        if ((is_string($__internal_8f53a6dab3875f5164d2c7386281f84fff6b09c3572ef28cd408db906dd902bb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b898b7607f315df6ac8e59dfe9c20830b77c2bbb76c0d0f759f63f8721496c06 = "lucky") && ('' === $__internal_b898b7607f315df6ac8e59dfe9c20830b77c2bbb76c0d0f759f63f8721496c06 || 0 === strpos($__internal_8f53a6dab3875f5164d2c7386281f84fff6b09c3572ef28cd408db906dd902bb, $__internal_b898b7607f315df6ac8e59dfe9c20830b77c2bbb76c0d0f759f63f8721496c06)))) {
            echo "active";
        }
        echo "\"><a href=\"../../lucky/number\">Lucky number</a></li>
                  <li class=\"";
        // line 30
        if ((is_string($__internal_27b1afab90d0edc2b82ecf2bbb95f1160f062e24e48e559ff4f670e4908c7b19 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ab4fa1167d1ff8185c5b0f7eb45c9b83db9dda79bc3072e84c543dd883f1d453 = "search") && ('' === $__internal_ab4fa1167d1ff8185c5b0f7eb45c9b83db9dda79bc3072e84c543dd883f1d453 || 0 === strpos($__internal_27b1afab90d0edc2b82ecf2bbb95f1160f062e24e48e559ff4f670e4908c7b19, $__internal_ab4fa1167d1ff8185c5b0f7eb45c9b83db9dda79bc3072e84c543dd883f1d453)))) {
            echo "active";
        }
        echo "\"><a href=\"../../search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  ";
        
        $__internal_fca588b1f128f68017a0d891ee5e46b371a148094a651da40da2417981c552db->leave($__internal_fca588b1f128f68017a0d891ee5e46b371a148094a651da40da2417981c552db_prof);

        
        $__internal_0041c777f55bcf898955f8e320edc03b3f687c4339826b4f102d1bca5cddb0d4->leave($__internal_0041c777f55bcf898955f8e320edc03b3f687c4339826b4f102d1bca5cddb0d4_prof);

    }

    // line 37
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_500ccbd0553a1c9c1f1446a5346c4b6fabb2a18be503047bc9f071ad920c33ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500ccbd0553a1c9c1f1446a5346c4b6fabb2a18be503047bc9f071ad920c33ee->enter($__internal_500ccbd0553a1c9c1f1446a5346c4b6fabb2a18be503047bc9f071ad920c33ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_1551341d9e2628f51818961888eb2b38b11cb83f739111ac15c5c341e9b13079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1551341d9e2628f51818961888eb2b38b11cb83f739111ac15c5c341e9b13079->enter($__internal_1551341d9e2628f51818961888eb2b38b11cb83f739111ac15c5c341e9b13079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 38
        echo "          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">";
        // line 39
        $this->displayBlock('body_text_title', $context, $blocks);
        echo "</h1>
            <p class=\"lead\">";
        // line 40
        $this->displayBlock('body_text_content', $context, $blocks);
        echo "</p>
              ";
        // line 41
        $this->displayBlock('body_content_other', $context, $blocks);
        // line 42
        echo "          </div>
";
        
        $__internal_1551341d9e2628f51818961888eb2b38b11cb83f739111ac15c5c341e9b13079->leave($__internal_1551341d9e2628f51818961888eb2b38b11cb83f739111ac15c5c341e9b13079_prof);

        
        $__internal_500ccbd0553a1c9c1f1446a5346c4b6fabb2a18be503047bc9f071ad920c33ee->leave($__internal_500ccbd0553a1c9c1f1446a5346c4b6fabb2a18be503047bc9f071ad920c33ee_prof);

    }

    // line 39
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_492282141f1e90f36a42234bcfebdd73edeca79716ec70c8b62047a34148e36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492282141f1e90f36a42234bcfebdd73edeca79716ec70c8b62047a34148e36a->enter($__internal_492282141f1e90f36a42234bcfebdd73edeca79716ec70c8b62047a34148e36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_af6226141c84c7a8e6bd87ae0619d8056cc6397db82a1ec87c6682e7c61a65a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6226141c84c7a8e6bd87ae0619d8056cc6397db82a1ec87c6682e7c61a65a7->enter($__internal_af6226141c84c7a8e6bd87ae0619d8056cc6397db82a1ec87c6682e7c61a65a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        
        $__internal_af6226141c84c7a8e6bd87ae0619d8056cc6397db82a1ec87c6682e7c61a65a7->leave($__internal_af6226141c84c7a8e6bd87ae0619d8056cc6397db82a1ec87c6682e7c61a65a7_prof);

        
        $__internal_492282141f1e90f36a42234bcfebdd73edeca79716ec70c8b62047a34148e36a->leave($__internal_492282141f1e90f36a42234bcfebdd73edeca79716ec70c8b62047a34148e36a_prof);

    }

    // line 40
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_b5287994cee6e249a5b827d542c1c9704a0cc59cc41f9ccb98601d27d7d95b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5287994cee6e249a5b827d542c1c9704a0cc59cc41f9ccb98601d27d7d95b59->enter($__internal_b5287994cee6e249a5b827d542c1c9704a0cc59cc41f9ccb98601d27d7d95b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_3ab1eda5d266beb15e3edbed3370074dbf4006cc78c72881a8176c3d8c4ad8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab1eda5d266beb15e3edbed3370074dbf4006cc78c72881a8176c3d8c4ad8a7->enter($__internal_3ab1eda5d266beb15e3edbed3370074dbf4006cc78c72881a8176c3d8c4ad8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_3ab1eda5d266beb15e3edbed3370074dbf4006cc78c72881a8176c3d8c4ad8a7->leave($__internal_3ab1eda5d266beb15e3edbed3370074dbf4006cc78c72881a8176c3d8c4ad8a7_prof);

        
        $__internal_b5287994cee6e249a5b827d542c1c9704a0cc59cc41f9ccb98601d27d7d95b59->leave($__internal_b5287994cee6e249a5b827d542c1c9704a0cc59cc41f9ccb98601d27d7d95b59_prof);

    }

    // line 41
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_a8a8fff54d0edb450ebf136f43c2cf682f0054a5550ba8edd77f94151d88384c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a8fff54d0edb450ebf136f43c2cf682f0054a5550ba8edd77f94151d88384c->enter($__internal_a8a8fff54d0edb450ebf136f43c2cf682f0054a5550ba8edd77f94151d88384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_bf6cc8d1106bccb5cf0f8a403eed5ce8a1eaa8ace3f5b8d60b4f53f77158e964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6cc8d1106bccb5cf0f8a403eed5ce8a1eaa8ace3f5b8d60b4f53f77158e964->enter($__internal_bf6cc8d1106bccb5cf0f8a403eed5ce8a1eaa8ace3f5b8d60b4f53f77158e964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        
        $__internal_bf6cc8d1106bccb5cf0f8a403eed5ce8a1eaa8ace3f5b8d60b4f53f77158e964->leave($__internal_bf6cc8d1106bccb5cf0f8a403eed5ce8a1eaa8ace3f5b8d60b4f53f77158e964_prof);

        
        $__internal_a8a8fff54d0edb450ebf136f43c2cf682f0054a5550ba8edd77f94151d88384c->leave($__internal_a8a8fff54d0edb450ebf136f43c2cf682f0054a5550ba8edd77f94151d88384c_prof);

    }

    // line 44
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_532276a785160770eca2833dee8faa35118dfd74e992f7de2469147ab20003fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532276a785160770eca2833dee8faa35118dfd74e992f7de2469147ab20003fe->enter($__internal_532276a785160770eca2833dee8faa35118dfd74e992f7de2469147ab20003fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_4c5e2246d8a965bb99ba9f92fe6268355c699d4a6d065238b5a59aab43935072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5e2246d8a965bb99ba9f92fe6268355c699d4a6d065238b5a59aab43935072->enter($__internal_4c5e2246d8a965bb99ba9f92fe6268355c699d4a6d065238b5a59aab43935072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        // line 45
        echo "          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
";
        
        $__internal_4c5e2246d8a965bb99ba9f92fe6268355c699d4a6d065238b5a59aab43935072->leave($__internal_4c5e2246d8a965bb99ba9f92fe6268355c699d4a6d065238b5a59aab43935072_prof);

        
        $__internal_532276a785160770eca2833dee8faa35118dfd74e992f7de2469147ab20003fe->leave($__internal_532276a785160770eca2833dee8faa35118dfd74e992f7de2469147ab20003fe_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0805d5ba215a057749401642173f81552856116d1d67de2b193867dc235fd26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0805d5ba215a057749401642173f81552856116d1d67de2b193867dc235fd26f->enter($__internal_0805d5ba215a057749401642173f81552856116d1d67de2b193867dc235fd26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c4120be98c4c0090dbb43d1dae5e26adeb6ee12ee9d9d3ab2071705737282f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4120be98c4c0090dbb43d1dae5e26adeb6ee12ee9d9d3ab2071705737282f7e->enter($__internal_c4120be98c4c0090dbb43d1dae5e26adeb6ee12ee9d9d3ab2071705737282f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>";
        
        $__internal_c4120be98c4c0090dbb43d1dae5e26adeb6ee12ee9d9d3ab2071705737282f7e->leave($__internal_c4120be98c4c0090dbb43d1dae5e26adeb6ee12ee9d9d3ab2071705737282f7e_prof);

        
        $__internal_0805d5ba215a057749401642173f81552856116d1d67de2b193867dc235fd26f->leave($__internal_0805d5ba215a057749401642173f81552856116d1d67de2b193867dc235fd26f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 59,  320 => 58,  305 => 45,  296 => 44,  279 => 41,  262 => 40,  245 => 39,  234 => 42,  232 => 41,  228 => 40,  224 => 39,  221 => 38,  212 => 37,  194 => 30,  188 => 29,  182 => 28,  175 => 23,  166 => 22,  150 => 51,  148 => 44,  146 => 37,  143 => 36,  141 => 22,  134 => 17,  125 => 16,  113 => 11,  109 => 10,  105 => 9,  100 => 8,  91 => 7,  73 => 6,  61 => 67,  58 => 58,  56 => 16,  49 => 13,  47 => 7,  43 => 6,  40 => 5,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {# THIS IS THE MASTER TEMPLATE #}
        <meta charset=\"utf-8\">
        <title>{% block title %}Movies{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/cover.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
\t\t<div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        
{% block body_menu %}
          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'homepage' %}active{% endif %}\"><a href=\"../../\">Home</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'lucky' %}active{% endif %}\"><a href=\"../../lucky/number\">Lucky number</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'search' %}active{% endif %}\"><a href=\"../../search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  {% endblock %}{# end of body_menu block #}
<div class=\"cover-container\">
{% block body_content %}
          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">{% block body_text_title %}{% endblock %}</h1>
            <p class=\"lead\">{% block body_text_content %}{% endblock %}</p>
              {% block body_content_other %}{% endblock %}
          </div>
{% endblock %}{# end of body_content block #}
{% block body_footer %}
          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
{% endblock %}{# end of body_footer block #}
        </div>

      </div>

    </div>

{% endblock %}{# end of body block #}
        {% block javascripts %}
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\base.html.twig");
    }
}
