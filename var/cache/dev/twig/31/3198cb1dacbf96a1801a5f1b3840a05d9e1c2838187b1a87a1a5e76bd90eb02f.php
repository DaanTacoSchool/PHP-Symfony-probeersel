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
        $__internal_ef923e5aad5da8c3cd4b6737bef1f17283bbf013d5d89610ba9517a84145d1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef923e5aad5da8c3cd4b6737bef1f17283bbf013d5d89610ba9517a84145d1d9->enter($__internal_ef923e5aad5da8c3cd4b6737bef1f17283bbf013d5d89610ba9517a84145d1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_81687f46dff233e6df1a9000912e2ff528e41a544c3d51f7cc43310419314dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81687f46dff233e6df1a9000912e2ff528e41a544c3d51f7cc43310419314dc4->enter($__internal_81687f46dff233e6df1a9000912e2ff528e41a544c3d51f7cc43310419314dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ef923e5aad5da8c3cd4b6737bef1f17283bbf013d5d89610ba9517a84145d1d9->leave($__internal_ef923e5aad5da8c3cd4b6737bef1f17283bbf013d5d89610ba9517a84145d1d9_prof);

        
        $__internal_81687f46dff233e6df1a9000912e2ff528e41a544c3d51f7cc43310419314dc4->leave($__internal_81687f46dff233e6df1a9000912e2ff528e41a544c3d51f7cc43310419314dc4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc71db8b9041156b801b09acf1868c28b931351bd34def051bb3c5192b7be3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc71db8b9041156b801b09acf1868c28b931351bd34def051bb3c5192b7be3ae->enter($__internal_cc71db8b9041156b801b09acf1868c28b931351bd34def051bb3c5192b7be3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e81a0741298250faaffb920a724983cc48fae7821a1bf17e7ed269ea9f7bd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e81a0741298250faaffb920a724983cc48fae7821a1bf17e7ed269ea9f7bd99->enter($__internal_8e81a0741298250faaffb920a724983cc48fae7821a1bf17e7ed269ea9f7bd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies";
        
        $__internal_8e81a0741298250faaffb920a724983cc48fae7821a1bf17e7ed269ea9f7bd99->leave($__internal_8e81a0741298250faaffb920a724983cc48fae7821a1bf17e7ed269ea9f7bd99_prof);

        
        $__internal_cc71db8b9041156b801b09acf1868c28b931351bd34def051bb3c5192b7be3ae->leave($__internal_cc71db8b9041156b801b09acf1868c28b931351bd34def051bb3c5192b7be3ae_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c77d3b01799f42d8a9cad17b8d3fc78828a8a5caa5f26f3148b5b96788dc0ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77d3b01799f42d8a9cad17b8d3fc78828a8a5caa5f26f3148b5b96788dc0ab2->enter($__internal_c77d3b01799f42d8a9cad17b8d3fc78828a8a5caa5f26f3148b5b96788dc0ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_17345ba327f9596f7eee1d532e1bf089a5d108c72839794ba692df0e612f4594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17345ba327f9596f7eee1d532e1bf089a5d108c72839794ba692df0e612f4594->enter($__internal_17345ba327f9596f7eee1d532e1bf089a5d108c72839794ba692df0e612f4594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_17345ba327f9596f7eee1d532e1bf089a5d108c72839794ba692df0e612f4594->leave($__internal_17345ba327f9596f7eee1d532e1bf089a5d108c72839794ba692df0e612f4594_prof);

        
        $__internal_c77d3b01799f42d8a9cad17b8d3fc78828a8a5caa5f26f3148b5b96788dc0ab2->leave($__internal_c77d3b01799f42d8a9cad17b8d3fc78828a8a5caa5f26f3148b5b96788dc0ab2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_23bb5b00570bc6f7019c42ed245c79f045d55522ae6e9e25467eb27d3e62daff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bb5b00570bc6f7019c42ed245c79f045d55522ae6e9e25467eb27d3e62daff->enter($__internal_23bb5b00570bc6f7019c42ed245c79f045d55522ae6e9e25467eb27d3e62daff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9940c958e8fb962a63e76940f374ac65f480a42e31cfb0539c5280251d3757d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9940c958e8fb962a63e76940f374ac65f480a42e31cfb0539c5280251d3757d7->enter($__internal_9940c958e8fb962a63e76940f374ac65f480a42e31cfb0539c5280251d3757d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9940c958e8fb962a63e76940f374ac65f480a42e31cfb0539c5280251d3757d7->leave($__internal_9940c958e8fb962a63e76940f374ac65f480a42e31cfb0539c5280251d3757d7_prof);

        
        $__internal_23bb5b00570bc6f7019c42ed245c79f045d55522ae6e9e25467eb27d3e62daff->leave($__internal_23bb5b00570bc6f7019c42ed245c79f045d55522ae6e9e25467eb27d3e62daff_prof);

    }

    // line 22
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_4cd654a7abe640988114b8fec729dada8b160547c3b2f1174969ff69a2fd8dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd654a7abe640988114b8fec729dada8b160547c3b2f1174969ff69a2fd8dbb->enter($__internal_4cd654a7abe640988114b8fec729dada8b160547c3b2f1174969ff69a2fd8dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_12122327a173ca1f44c409db0f832bc1ea636d74528a6f92d3bdff128d4ad177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12122327a173ca1f44c409db0f832bc1ea636d74528a6f92d3bdff128d4ad177->enter($__internal_12122327a173ca1f44c409db0f832bc1ea636d74528a6f92d3bdff128d4ad177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 23
        echo "          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"";
        // line 28
        if ((is_string($__internal_a5bf13a4cb4dd3d90dd1c2d22fd4ce64fcd445e2db1c5098f95e8b599acecdbf = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f90817671b55703ea5715a49150a1641bac8ef4d08dca71066b1e0c228758306 = "homepage") && ('' === $__internal_f90817671b55703ea5715a49150a1641bac8ef4d08dca71066b1e0c228758306 || 0 === strpos($__internal_a5bf13a4cb4dd3d90dd1c2d22fd4ce64fcd445e2db1c5098f95e8b599acecdbf, $__internal_f90817671b55703ea5715a49150a1641bac8ef4d08dca71066b1e0c228758306)))) {
            echo "active";
        }
        echo "\"><a href=\"../../\">Home</a></li>
                  <li class=\"";
        // line 29
        if ((is_string($__internal_4cedbc5f3fe64eef21636b9201878c30de2b847071d222af0252aabe5e92c17f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c34373678a1075004f28f95ec73585536cc1810e5f3d35dbedf92cca5669d64b = "lucky") && ('' === $__internal_c34373678a1075004f28f95ec73585536cc1810e5f3d35dbedf92cca5669d64b || 0 === strpos($__internal_4cedbc5f3fe64eef21636b9201878c30de2b847071d222af0252aabe5e92c17f, $__internal_c34373678a1075004f28f95ec73585536cc1810e5f3d35dbedf92cca5669d64b)))) {
            echo "active";
        }
        echo "\"><a href=\"../../lucky/number\">Lucky number</a></li>
                  <li class=\"";
        // line 30
        if ((is_string($__internal_b2e2d1bafb1dc0fb8ae871c745d9c28e1c13bcd04b93fcf71ad8eae2cfcb5b5a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_9b1bad2d246e8a1bd6cacb9e32faf8bb0aa4e8358f18a9d6247fafd0d44522d4 = "search") && ('' === $__internal_9b1bad2d246e8a1bd6cacb9e32faf8bb0aa4e8358f18a9d6247fafd0d44522d4 || 0 === strpos($__internal_b2e2d1bafb1dc0fb8ae871c745d9c28e1c13bcd04b93fcf71ad8eae2cfcb5b5a, $__internal_9b1bad2d246e8a1bd6cacb9e32faf8bb0aa4e8358f18a9d6247fafd0d44522d4)))) {
            echo "active";
        }
        echo "\"><a href=\"../../search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  ";
        
        $__internal_12122327a173ca1f44c409db0f832bc1ea636d74528a6f92d3bdff128d4ad177->leave($__internal_12122327a173ca1f44c409db0f832bc1ea636d74528a6f92d3bdff128d4ad177_prof);

        
        $__internal_4cd654a7abe640988114b8fec729dada8b160547c3b2f1174969ff69a2fd8dbb->leave($__internal_4cd654a7abe640988114b8fec729dada8b160547c3b2f1174969ff69a2fd8dbb_prof);

    }

    // line 37
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_1aa6211e32d65d409b85ac4b35173eb84a57630f232c11f53d47ecee627cad29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa6211e32d65d409b85ac4b35173eb84a57630f232c11f53d47ecee627cad29->enter($__internal_1aa6211e32d65d409b85ac4b35173eb84a57630f232c11f53d47ecee627cad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_f8d5d20366fa8cfcb68c211aa7b3abfeb7eccc8d73dd0309599edbc6da9bb820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d5d20366fa8cfcb68c211aa7b3abfeb7eccc8d73dd0309599edbc6da9bb820->enter($__internal_f8d5d20366fa8cfcb68c211aa7b3abfeb7eccc8d73dd0309599edbc6da9bb820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

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
        
        $__internal_f8d5d20366fa8cfcb68c211aa7b3abfeb7eccc8d73dd0309599edbc6da9bb820->leave($__internal_f8d5d20366fa8cfcb68c211aa7b3abfeb7eccc8d73dd0309599edbc6da9bb820_prof);

        
        $__internal_1aa6211e32d65d409b85ac4b35173eb84a57630f232c11f53d47ecee627cad29->leave($__internal_1aa6211e32d65d409b85ac4b35173eb84a57630f232c11f53d47ecee627cad29_prof);

    }

    // line 39
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_60d7d2fb3d465025f6c58e11daa1ce5f2a949a8bcde4ae99ee4ab08a59ac7366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d7d2fb3d465025f6c58e11daa1ce5f2a949a8bcde4ae99ee4ab08a59ac7366->enter($__internal_60d7d2fb3d465025f6c58e11daa1ce5f2a949a8bcde4ae99ee4ab08a59ac7366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_82500cddaa30312ddeaef8421e906dd5afa04ebd5075f4227564adcd6d773a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82500cddaa30312ddeaef8421e906dd5afa04ebd5075f4227564adcd6d773a9f->enter($__internal_82500cddaa30312ddeaef8421e906dd5afa04ebd5075f4227564adcd6d773a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        
        $__internal_82500cddaa30312ddeaef8421e906dd5afa04ebd5075f4227564adcd6d773a9f->leave($__internal_82500cddaa30312ddeaef8421e906dd5afa04ebd5075f4227564adcd6d773a9f_prof);

        
        $__internal_60d7d2fb3d465025f6c58e11daa1ce5f2a949a8bcde4ae99ee4ab08a59ac7366->leave($__internal_60d7d2fb3d465025f6c58e11daa1ce5f2a949a8bcde4ae99ee4ab08a59ac7366_prof);

    }

    // line 40
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_21abbd397a3c9e8dab48d3bc58d346851686296b9de189bc2ebd441144487dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21abbd397a3c9e8dab48d3bc58d346851686296b9de189bc2ebd441144487dd2->enter($__internal_21abbd397a3c9e8dab48d3bc58d346851686296b9de189bc2ebd441144487dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_3c02cb328de4cf235f83589cf5eee54b9ef5767855f20d18a002d5f7c87b0ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c02cb328de4cf235f83589cf5eee54b9ef5767855f20d18a002d5f7c87b0ea6->enter($__internal_3c02cb328de4cf235f83589cf5eee54b9ef5767855f20d18a002d5f7c87b0ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_3c02cb328de4cf235f83589cf5eee54b9ef5767855f20d18a002d5f7c87b0ea6->leave($__internal_3c02cb328de4cf235f83589cf5eee54b9ef5767855f20d18a002d5f7c87b0ea6_prof);

        
        $__internal_21abbd397a3c9e8dab48d3bc58d346851686296b9de189bc2ebd441144487dd2->leave($__internal_21abbd397a3c9e8dab48d3bc58d346851686296b9de189bc2ebd441144487dd2_prof);

    }

    // line 41
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_18179cccb5f57819deaeab1b20775ee73a4cbcfdf80c9f3a9c3d58d6877c7376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18179cccb5f57819deaeab1b20775ee73a4cbcfdf80c9f3a9c3d58d6877c7376->enter($__internal_18179cccb5f57819deaeab1b20775ee73a4cbcfdf80c9f3a9c3d58d6877c7376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_525d4aed8524ab98ca1a332a169c19ac9013356bcc0a4f84b672dd57c9e9613d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525d4aed8524ab98ca1a332a169c19ac9013356bcc0a4f84b672dd57c9e9613d->enter($__internal_525d4aed8524ab98ca1a332a169c19ac9013356bcc0a4f84b672dd57c9e9613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        
        $__internal_525d4aed8524ab98ca1a332a169c19ac9013356bcc0a4f84b672dd57c9e9613d->leave($__internal_525d4aed8524ab98ca1a332a169c19ac9013356bcc0a4f84b672dd57c9e9613d_prof);

        
        $__internal_18179cccb5f57819deaeab1b20775ee73a4cbcfdf80c9f3a9c3d58d6877c7376->leave($__internal_18179cccb5f57819deaeab1b20775ee73a4cbcfdf80c9f3a9c3d58d6877c7376_prof);

    }

    // line 44
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_bf8a37c9867d3ecd928fd41cd1767dc0523cea43b0dc3dd4bbc5eddcb4c47409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8a37c9867d3ecd928fd41cd1767dc0523cea43b0dc3dd4bbc5eddcb4c47409->enter($__internal_bf8a37c9867d3ecd928fd41cd1767dc0523cea43b0dc3dd4bbc5eddcb4c47409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_64cfa642bf2881a0c2f8d2376fc8861503df7d70dbbfee9db3984fb227425182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cfa642bf2881a0c2f8d2376fc8861503df7d70dbbfee9db3984fb227425182->enter($__internal_64cfa642bf2881a0c2f8d2376fc8861503df7d70dbbfee9db3984fb227425182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        // line 45
        echo "          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
";
        
        $__internal_64cfa642bf2881a0c2f8d2376fc8861503df7d70dbbfee9db3984fb227425182->leave($__internal_64cfa642bf2881a0c2f8d2376fc8861503df7d70dbbfee9db3984fb227425182_prof);

        
        $__internal_bf8a37c9867d3ecd928fd41cd1767dc0523cea43b0dc3dd4bbc5eddcb4c47409->leave($__internal_bf8a37c9867d3ecd928fd41cd1767dc0523cea43b0dc3dd4bbc5eddcb4c47409_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06f9745c932d2cabf1999a74f60b1cf6b953bb848d5dd923b0dc19d780935e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f9745c932d2cabf1999a74f60b1cf6b953bb848d5dd923b0dc19d780935e2f->enter($__internal_06f9745c932d2cabf1999a74f60b1cf6b953bb848d5dd923b0dc19d780935e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b57ade63b652196a7bd776df39fb9ed9ebb7caab50690111ef7940623c36699d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57ade63b652196a7bd776df39fb9ed9ebb7caab50690111ef7940623c36699d->enter($__internal_b57ade63b652196a7bd776df39fb9ed9ebb7caab50690111ef7940623c36699d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>";
        
        $__internal_b57ade63b652196a7bd776df39fb9ed9ebb7caab50690111ef7940623c36699d->leave($__internal_b57ade63b652196a7bd776df39fb9ed9ebb7caab50690111ef7940623c36699d_prof);

        
        $__internal_06f9745c932d2cabf1999a74f60b1cf6b953bb848d5dd923b0dc19d780935e2f->leave($__internal_06f9745c932d2cabf1999a74f60b1cf6b953bb848d5dd923b0dc19d780935e2f_prof);

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
