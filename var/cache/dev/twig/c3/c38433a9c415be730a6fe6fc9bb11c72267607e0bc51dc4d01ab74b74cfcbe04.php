<?php

/* base.html.twig */
class __TwigTemplate_b54c99e1954ad0c9cbdba3a8435bf86bd8330d79e119b51bd063a80239849cc5 extends Twig_Template
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
            'body_results' => array($this, 'block_body_results'),
            'body_footer' => array($this, 'block_body_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce76c74332d76523d3d933e994d498b26aa1ea14535e38a5bdee75b0fbc103b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce76c74332d76523d3d933e994d498b26aa1ea14535e38a5bdee75b0fbc103b9->enter($__internal_ce76c74332d76523d3d933e994d498b26aa1ea14535e38a5bdee75b0fbc103b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0369193ca6f5c5bf37318d4f6fb8953333f7fb51d3bae409fc22c271395ceb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0369193ca6f5c5bf37318d4f6fb8953333f7fb51d3bae409fc22c271395ceb04->enter($__internal_0369193ca6f5c5bf37318d4f6fb8953333f7fb51d3bae409fc22c271395ceb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 62
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_ce76c74332d76523d3d933e994d498b26aa1ea14535e38a5bdee75b0fbc103b9->leave($__internal_ce76c74332d76523d3d933e994d498b26aa1ea14535e38a5bdee75b0fbc103b9_prof);

        
        $__internal_0369193ca6f5c5bf37318d4f6fb8953333f7fb51d3bae409fc22c271395ceb04->leave($__internal_0369193ca6f5c5bf37318d4f6fb8953333f7fb51d3bae409fc22c271395ceb04_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3278932c769544150c18f04eb74818e0f72c99aed917cdeb1bb17cc648f833b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3278932c769544150c18f04eb74818e0f72c99aed917cdeb1bb17cc648f833b3->enter($__internal_3278932c769544150c18f04eb74818e0f72c99aed917cdeb1bb17cc648f833b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d50ba19e33249fed411ba51d61ac1bf9b56cccb57c6b8d1235cd1b2fcc00b48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50ba19e33249fed411ba51d61ac1bf9b56cccb57c6b8d1235cd1b2fcc00b48c->enter($__internal_d50ba19e33249fed411ba51d61ac1bf9b56cccb57c6b8d1235cd1b2fcc00b48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies";
        
        $__internal_d50ba19e33249fed411ba51d61ac1bf9b56cccb57c6b8d1235cd1b2fcc00b48c->leave($__internal_d50ba19e33249fed411ba51d61ac1bf9b56cccb57c6b8d1235cd1b2fcc00b48c_prof);

        
        $__internal_3278932c769544150c18f04eb74818e0f72c99aed917cdeb1bb17cc648f833b3->leave($__internal_3278932c769544150c18f04eb74818e0f72c99aed917cdeb1bb17cc648f833b3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09e13ddc5f17017795e0f152da9cf1bc85eadb82e0cc8e53cb7c175f6f6ef45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e13ddc5f17017795e0f152da9cf1bc85eadb82e0cc8e53cb7c175f6f6ef45b->enter($__internal_09e13ddc5f17017795e0f152da9cf1bc85eadb82e0cc8e53cb7c175f6f6ef45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3d7ad446e0d6c1494ca34ba233fb07d77380883db14bf5e654ebc60ccd5d0af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7ad446e0d6c1494ca34ba233fb07d77380883db14bf5e654ebc60ccd5d0af0->enter($__internal_3d7ad446e0d6c1494ca34ba233fb07d77380883db14bf5e654ebc60ccd5d0af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3d7ad446e0d6c1494ca34ba233fb07d77380883db14bf5e654ebc60ccd5d0af0->leave($__internal_3d7ad446e0d6c1494ca34ba233fb07d77380883db14bf5e654ebc60ccd5d0af0_prof);

        
        $__internal_09e13ddc5f17017795e0f152da9cf1bc85eadb82e0cc8e53cb7c175f6f6ef45b->leave($__internal_09e13ddc5f17017795e0f152da9cf1bc85eadb82e0cc8e53cb7c175f6f6ef45b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_50d72cc339f64440a398a30dca76f40f45e55f3c3fe24667fa614a0030147999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d72cc339f64440a398a30dca76f40f45e55f3c3fe24667fa614a0030147999->enter($__internal_50d72cc339f64440a398a30dca76f40f45e55f3c3fe24667fa614a0030147999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_841ba89e56dfb5646e6079738ed963abdf9e001e4368c318940d756e8ababc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841ba89e56dfb5646e6079738ed963abdf9e001e4368c318940d756e8ababc2a->enter($__internal_841ba89e56dfb5646e6079738ed963abdf9e001e4368c318940d756e8ababc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "        
\t\t<div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">
          
        
";
        // line 23
        $this->displayBlock('body_menu', $context, $blocks);
        // line 37
        echo "<div class=\"cover-container\">
";
        // line 38
        $this->displayBlock('body_content', $context, $blocks);
        // line 47
        $this->displayBlock('body_footer', $context, $blocks);
        // line 54
        echo "        </div>";
        // line 55
        echo "         
      </div>

    </div>
       

";
        
        $__internal_841ba89e56dfb5646e6079738ed963abdf9e001e4368c318940d756e8ababc2a->leave($__internal_841ba89e56dfb5646e6079738ed963abdf9e001e4368c318940d756e8ababc2a_prof);

        
        $__internal_50d72cc339f64440a398a30dca76f40f45e55f3c3fe24667fa614a0030147999->leave($__internal_50d72cc339f64440a398a30dca76f40f45e55f3c3fe24667fa614a0030147999_prof);

    }

    // line 23
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_2167d633cf6e3cb8183a489cff58145e0e6425e89a4be9ecfb79531c93324ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2167d633cf6e3cb8183a489cff58145e0e6425e89a4be9ecfb79531c93324ce4->enter($__internal_2167d633cf6e3cb8183a489cff58145e0e6425e89a4be9ecfb79531c93324ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_f4022c0f39eb64ccbc007d25c411db652e1e4f552a37a6b19b6638a50aedb89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4022c0f39eb64ccbc007d25c411db652e1e4f552a37a6b19b6638a50aedb89f->enter($__internal_f4022c0f39eb64ccbc007d25c411db652e1e4f552a37a6b19b6638a50aedb89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 24
        echo "          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\"><a href=\"/\" class=\"noDecoration\">Movie assignment</a></h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"";
        // line 29
        if ((is_string($__internal_ecbc040ea40583f4ff4778357ed474f9832803d5a97d0bc3e785e9395eec02ca = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0e25de3f21295f90db47abff10341b7aeef30d80bce3876840efb942befef5f0 = "homepage") && ('' === $__internal_0e25de3f21295f90db47abff10341b7aeef30d80bce3876840efb942befef5f0 || 0 === strpos($__internal_ecbc040ea40583f4ff4778357ed474f9832803d5a97d0bc3e785e9395eec02ca, $__internal_0e25de3f21295f90db47abff10341b7aeef30d80bce3876840efb942befef5f0)))) {
            echo "active";
        }
        echo "\"><a href=\"/\">Home</a></li>
                  <li class=\"";
        // line 30
        if ((is_string($__internal_c8338660a033c968c830ee51513f78f6d8ea37d669451128d4b81e096982dc92 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7ef63c54eeb94ef522e87ee0f258062cd7964aa2a80ea747862f7f435aa415a1 = "lucky") && ('' === $__internal_7ef63c54eeb94ef522e87ee0f258062cd7964aa2a80ea747862f7f435aa415a1 || 0 === strpos($__internal_c8338660a033c968c830ee51513f78f6d8ea37d669451128d4b81e096982dc92, $__internal_7ef63c54eeb94ef522e87ee0f258062cd7964aa2a80ea747862f7f435aa415a1)))) {
            echo "active";
        }
        echo "\"><a href=\"/lucky/number\">Lucky number</a></li>
                  <li class=\"";
        // line 31
        if ((is_string($__internal_414faa94eb35536d26ebfaea62fb3e64e50bb6e91e5fcd719e13c830b56c2d8f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_53ad347853e186b0ecbce866646a9eb3ae9572c7146040c9aae7a27769217365 = "search") && ('' === $__internal_53ad347853e186b0ecbce866646a9eb3ae9572c7146040c9aae7a27769217365 || 0 === strpos($__internal_414faa94eb35536d26ebfaea62fb3e64e50bb6e91e5fcd719e13c830b56c2d8f, $__internal_53ad347853e186b0ecbce866646a9eb3ae9572c7146040c9aae7a27769217365)))) {
            echo "active";
        }
        echo "\"><a href=\"/search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  ";
        
        $__internal_f4022c0f39eb64ccbc007d25c411db652e1e4f552a37a6b19b6638a50aedb89f->leave($__internal_f4022c0f39eb64ccbc007d25c411db652e1e4f552a37a6b19b6638a50aedb89f_prof);

        
        $__internal_2167d633cf6e3cb8183a489cff58145e0e6425e89a4be9ecfb79531c93324ce4->leave($__internal_2167d633cf6e3cb8183a489cff58145e0e6425e89a4be9ecfb79531c93324ce4_prof);

    }

    // line 38
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_12c3c61842ab3b3df0287b7422a6c6251c6ed1ec313893a0f97d8b3483b07527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c3c61842ab3b3df0287b7422a6c6251c6ed1ec313893a0f97d8b3483b07527->enter($__internal_12c3c61842ab3b3df0287b7422a6c6251c6ed1ec313893a0f97d8b3483b07527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_a989f0a526bfbe0bbe46340930639041612fbb51b541feac4ea1b860416b5103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a989f0a526bfbe0bbe46340930639041612fbb51b541feac4ea1b860416b5103->enter($__internal_a989f0a526bfbe0bbe46340930639041612fbb51b541feac4ea1b860416b5103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 39
        echo "          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">";
        // line 40
        $this->displayBlock('body_text_title', $context, $blocks);
        echo "</h1>
            <p class=\"lead\">";
        // line 41
        $this->displayBlock('body_text_content', $context, $blocks);
        echo "</p>
              ";
        // line 42
        $this->displayBlock('body_content_other', $context, $blocks);
        // line 43
        echo "          </div>
    ";
        // line 44
        $this->displayBlock('body_results', $context, $blocks);
        
        $__internal_a989f0a526bfbe0bbe46340930639041612fbb51b541feac4ea1b860416b5103->leave($__internal_a989f0a526bfbe0bbe46340930639041612fbb51b541feac4ea1b860416b5103_prof);

        
        $__internal_12c3c61842ab3b3df0287b7422a6c6251c6ed1ec313893a0f97d8b3483b07527->leave($__internal_12c3c61842ab3b3df0287b7422a6c6251c6ed1ec313893a0f97d8b3483b07527_prof);

    }

    // line 40
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_3f6f80e3b801fd2d8710a90e319063761400af94d687973804a176997f351f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6f80e3b801fd2d8710a90e319063761400af94d687973804a176997f351f02->enter($__internal_3f6f80e3b801fd2d8710a90e319063761400af94d687973804a176997f351f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_008442e4b1ddeda058e94aaa9fdb5bcd00e096419dd2c7f6a0b0ca09c4535dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008442e4b1ddeda058e94aaa9fdb5bcd00e096419dd2c7f6a0b0ca09c4535dc0->enter($__internal_008442e4b1ddeda058e94aaa9fdb5bcd00e096419dd2c7f6a0b0ca09c4535dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        
        $__internal_008442e4b1ddeda058e94aaa9fdb5bcd00e096419dd2c7f6a0b0ca09c4535dc0->leave($__internal_008442e4b1ddeda058e94aaa9fdb5bcd00e096419dd2c7f6a0b0ca09c4535dc0_prof);

        
        $__internal_3f6f80e3b801fd2d8710a90e319063761400af94d687973804a176997f351f02->leave($__internal_3f6f80e3b801fd2d8710a90e319063761400af94d687973804a176997f351f02_prof);

    }

    // line 41
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_f95f2ae2ebb13771d6790985f2d336b6fba10909c6379c91a705558ffab77f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95f2ae2ebb13771d6790985f2d336b6fba10909c6379c91a705558ffab77f23->enter($__internal_f95f2ae2ebb13771d6790985f2d336b6fba10909c6379c91a705558ffab77f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_263033727da36453489d1d3a6e825f97efc77ce6a60d47f09ea85c2ff9e5c270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263033727da36453489d1d3a6e825f97efc77ce6a60d47f09ea85c2ff9e5c270->enter($__internal_263033727da36453489d1d3a6e825f97efc77ce6a60d47f09ea85c2ff9e5c270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_263033727da36453489d1d3a6e825f97efc77ce6a60d47f09ea85c2ff9e5c270->leave($__internal_263033727da36453489d1d3a6e825f97efc77ce6a60d47f09ea85c2ff9e5c270_prof);

        
        $__internal_f95f2ae2ebb13771d6790985f2d336b6fba10909c6379c91a705558ffab77f23->leave($__internal_f95f2ae2ebb13771d6790985f2d336b6fba10909c6379c91a705558ffab77f23_prof);

    }

    // line 42
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_ba603283144ceac482dce2da06b410f783721d0d4a29c9744374ecc0ab8aa245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba603283144ceac482dce2da06b410f783721d0d4a29c9744374ecc0ab8aa245->enter($__internal_ba603283144ceac482dce2da06b410f783721d0d4a29c9744374ecc0ab8aa245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_61d1c3f7b4a1d1d16cc2978702ec03b63a54b0ac7b82fba5b94015e1884f310c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d1c3f7b4a1d1d16cc2978702ec03b63a54b0ac7b82fba5b94015e1884f310c->enter($__internal_61d1c3f7b4a1d1d16cc2978702ec03b63a54b0ac7b82fba5b94015e1884f310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        
        $__internal_61d1c3f7b4a1d1d16cc2978702ec03b63a54b0ac7b82fba5b94015e1884f310c->leave($__internal_61d1c3f7b4a1d1d16cc2978702ec03b63a54b0ac7b82fba5b94015e1884f310c_prof);

        
        $__internal_ba603283144ceac482dce2da06b410f783721d0d4a29c9744374ecc0ab8aa245->leave($__internal_ba603283144ceac482dce2da06b410f783721d0d4a29c9744374ecc0ab8aa245_prof);

    }

    // line 44
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_42503b8be762f3dd8259399dd7c1292bd5614ff59d86fc7dad1dbec7884870cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42503b8be762f3dd8259399dd7c1292bd5614ff59d86fc7dad1dbec7884870cc->enter($__internal_42503b8be762f3dd8259399dd7c1292bd5614ff59d86fc7dad1dbec7884870cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_64e154ed8ede40a34e5e88a8d144e5f55bb241d21478d8d45dba1a1b0d8e6bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e154ed8ede40a34e5e88a8d144e5f55bb241d21478d8d45dba1a1b0d8e6bcd->enter($__internal_64e154ed8ede40a34e5e88a8d144e5f55bb241d21478d8d45dba1a1b0d8e6bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 45
        echo "    ";
        
        $__internal_64e154ed8ede40a34e5e88a8d144e5f55bb241d21478d8d45dba1a1b0d8e6bcd->leave($__internal_64e154ed8ede40a34e5e88a8d144e5f55bb241d21478d8d45dba1a1b0d8e6bcd_prof);

        
        $__internal_42503b8be762f3dd8259399dd7c1292bd5614ff59d86fc7dad1dbec7884870cc->leave($__internal_42503b8be762f3dd8259399dd7c1292bd5614ff59d86fc7dad1dbec7884870cc_prof);

    }

    // line 47
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_34324455ff02c3b09594c478ffc309536e1ba1fb140841b29c84e06438ab1e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34324455ff02c3b09594c478ffc309536e1ba1fb140841b29c84e06438ab1e83->enter($__internal_34324455ff02c3b09594c478ffc309536e1ba1fb140841b29c84e06438ab1e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_916ec6784307f9bc9af1a159723093c0df861119f08ed2f9caf82af806afd44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916ec6784307f9bc9af1a159723093c0df861119f08ed2f9caf82af806afd44e->enter($__internal_916ec6784307f9bc9af1a159723093c0df861119f08ed2f9caf82af806afd44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        // line 48
        echo "          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
";
        
        $__internal_916ec6784307f9bc9af1a159723093c0df861119f08ed2f9caf82af806afd44e->leave($__internal_916ec6784307f9bc9af1a159723093c0df861119f08ed2f9caf82af806afd44e_prof);

        
        $__internal_34324455ff02c3b09594c478ffc309536e1ba1fb140841b29c84e06438ab1e83->leave($__internal_34324455ff02c3b09594c478ffc309536e1ba1fb140841b29c84e06438ab1e83_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2563d0387848108a85586fc48bcfdd511c2f3dd179dba07a572c692fb13e5374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2563d0387848108a85586fc48bcfdd511c2f3dd179dba07a572c692fb13e5374->enter($__internal_2563d0387848108a85586fc48bcfdd511c2f3dd179dba07a572c692fb13e5374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ea81d1eb1e4b7ea5238b443fd9cf21d9455728edde0f5d5c7eab422d6c04fee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea81d1eb1e4b7ea5238b443fd9cf21d9455728edde0f5d5c7eab422d6c04fee3->enter($__internal_ea81d1eb1e4b7ea5238b443fd9cf21d9455728edde0f5d5c7eab422d6c04fee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
        ";
        
        $__internal_ea81d1eb1e4b7ea5238b443fd9cf21d9455728edde0f5d5c7eab422d6c04fee3->leave($__internal_ea81d1eb1e4b7ea5238b443fd9cf21d9455728edde0f5d5c7eab422d6c04fee3_prof);

        
        $__internal_2563d0387848108a85586fc48bcfdd511c2f3dd179dba07a572c692fb13e5374->leave($__internal_2563d0387848108a85586fc48bcfdd511c2f3dd179dba07a572c692fb13e5374_prof);

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
        return array (  354 => 63,  345 => 62,  330 => 48,  321 => 47,  311 => 45,  302 => 44,  285 => 42,  268 => 41,  251 => 40,  241 => 44,  238 => 43,  236 => 42,  232 => 41,  228 => 40,  225 => 39,  216 => 38,  198 => 31,  192 => 30,  186 => 29,  179 => 24,  170 => 23,  154 => 55,  152 => 54,  150 => 47,  148 => 38,  145 => 37,  143 => 23,  135 => 17,  126 => 16,  114 => 11,  110 => 10,  106 => 9,  101 => 8,  92 => 7,  74 => 6,  62 => 72,  59 => 62,  57 => 16,  50 => 13,  48 => 7,  44 => 6,  41 => 5,  36 => 1,);
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
              <h3 class=\"masthead-brand\"><a href=\"/\" class=\"noDecoration\">Movie assignment</a></h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'homepage' %}active{% endif %}\"><a href=\"/\">Home</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'lucky' %}active{% endif %}\"><a href=\"/lucky/number\">Lucky number</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'search' %}active{% endif %}\"><a href=\"/search/searchpage\">Search</a></li>
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
    {% block body_results %}
    {% endblock %}
{% endblock %}{# end of body_content block #}
{% block body_footer %}
          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
{% endblock %}{# end of body_footer block #}
        </div>{# cover container , contains body content and body footer, directly below body#}
         
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
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\base.html.twig");
    }
}
