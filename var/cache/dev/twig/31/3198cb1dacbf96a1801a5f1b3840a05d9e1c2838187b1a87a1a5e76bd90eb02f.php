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
            'body_footer' => array($this, 'block_body_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5d888fcf9613c7f059410e3116b3a8ad9af1545716fb0b1cc7ac1967093d345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d888fcf9613c7f059410e3116b3a8ad9af1545716fb0b1cc7ac1967093d345->enter($__internal_a5d888fcf9613c7f059410e3116b3a8ad9af1545716fb0b1cc7ac1967093d345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7891212cb1f05945f9828d4ce0e669272f92e02f100e7771481e621d97a1bc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7891212cb1f05945f9828d4ce0e669272f92e02f100e7771481e621d97a1bc81->enter($__internal_7891212cb1f05945f9828d4ce0e669272f92e02f100e7771481e621d97a1bc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 57
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_a5d888fcf9613c7f059410e3116b3a8ad9af1545716fb0b1cc7ac1967093d345->leave($__internal_a5d888fcf9613c7f059410e3116b3a8ad9af1545716fb0b1cc7ac1967093d345_prof);

        
        $__internal_7891212cb1f05945f9828d4ce0e669272f92e02f100e7771481e621d97a1bc81->leave($__internal_7891212cb1f05945f9828d4ce0e669272f92e02f100e7771481e621d97a1bc81_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8294bbbab6b13c42992087c1d649c8a47157cb354f9be8e507221e719c511cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8294bbbab6b13c42992087c1d649c8a47157cb354f9be8e507221e719c511cd0->enter($__internal_8294bbbab6b13c42992087c1d649c8a47157cb354f9be8e507221e719c511cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfd06f69a5d459a0a9c9566f192ad48a8283b6e00828926fc243915a4df35887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd06f69a5d459a0a9c9566f192ad48a8283b6e00828926fc243915a4df35887->enter($__internal_bfd06f69a5d459a0a9c9566f192ad48a8283b6e00828926fc243915a4df35887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies";
        
        $__internal_bfd06f69a5d459a0a9c9566f192ad48a8283b6e00828926fc243915a4df35887->leave($__internal_bfd06f69a5d459a0a9c9566f192ad48a8283b6e00828926fc243915a4df35887_prof);

        
        $__internal_8294bbbab6b13c42992087c1d649c8a47157cb354f9be8e507221e719c511cd0->leave($__internal_8294bbbab6b13c42992087c1d649c8a47157cb354f9be8e507221e719c511cd0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a7354cec26ef68ca59280bfaa007db0d00f194f63d41ee2178f89c94a2ce6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7354cec26ef68ca59280bfaa007db0d00f194f63d41ee2178f89c94a2ce6fe->enter($__internal_7a7354cec26ef68ca59280bfaa007db0d00f194f63d41ee2178f89c94a2ce6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2215399e3da73c969a806fbb3d960a24e2c9dd8376b07082acfe5994a51649d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2215399e3da73c969a806fbb3d960a24e2c9dd8376b07082acfe5994a51649d9->enter($__internal_2215399e3da73c969a806fbb3d960a24e2c9dd8376b07082acfe5994a51649d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2215399e3da73c969a806fbb3d960a24e2c9dd8376b07082acfe5994a51649d9->leave($__internal_2215399e3da73c969a806fbb3d960a24e2c9dd8376b07082acfe5994a51649d9_prof);

        
        $__internal_7a7354cec26ef68ca59280bfaa007db0d00f194f63d41ee2178f89c94a2ce6fe->leave($__internal_7a7354cec26ef68ca59280bfaa007db0d00f194f63d41ee2178f89c94a2ce6fe_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_7516b1e6c66a7b5e37a5e2a41ec8978b47633b5b6fa94b023ae21866aba4b303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7516b1e6c66a7b5e37a5e2a41ec8978b47633b5b6fa94b023ae21866aba4b303->enter($__internal_7516b1e6c66a7b5e37a5e2a41ec8978b47633b5b6fa94b023ae21866aba4b303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7eb5ee4fb214356ad30b1902baed4bbf8367f7aceda33d32642e40dfd46ef88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7eb5ee4fb214356ad30b1902baed4bbf8367f7aceda33d32642e40dfd46ef88->enter($__internal_e7eb5ee4fb214356ad30b1902baed4bbf8367f7aceda33d32642e40dfd46ef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 43
        $this->displayBlock('body_footer', $context, $blocks);
        // line 50
        echo "        </div>

      </div>

    </div>

";
        
        $__internal_e7eb5ee4fb214356ad30b1902baed4bbf8367f7aceda33d32642e40dfd46ef88->leave($__internal_e7eb5ee4fb214356ad30b1902baed4bbf8367f7aceda33d32642e40dfd46ef88_prof);

        
        $__internal_7516b1e6c66a7b5e37a5e2a41ec8978b47633b5b6fa94b023ae21866aba4b303->leave($__internal_7516b1e6c66a7b5e37a5e2a41ec8978b47633b5b6fa94b023ae21866aba4b303_prof);

    }

    // line 22
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_700fd94cfb352fe5db9b3083ba5d43aec3392deb30c80856524ebb0cca656441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700fd94cfb352fe5db9b3083ba5d43aec3392deb30c80856524ebb0cca656441->enter($__internal_700fd94cfb352fe5db9b3083ba5d43aec3392deb30c80856524ebb0cca656441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_914767cb2cacd79c4d948da528e6fdc10587e27ff97b856ca94bb273c128aa5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914767cb2cacd79c4d948da528e6fdc10587e27ff97b856ca94bb273c128aa5c->enter($__internal_914767cb2cacd79c4d948da528e6fdc10587e27ff97b856ca94bb273c128aa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 23
        echo "          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"";
        // line 28
        if ((is_string($__internal_2e49ea06f13380c691e444c4caed7d9baf28c6848fe45b77f50fb5fe9b8a9668 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_48bb714646a89540018a57b6a5b6756a3a178031cc92fc3d646579c710ec0c92 = "homepage") && ('' === $__internal_48bb714646a89540018a57b6a5b6756a3a178031cc92fc3d646579c710ec0c92 || 0 === strpos($__internal_2e49ea06f13380c691e444c4caed7d9baf28c6848fe45b77f50fb5fe9b8a9668, $__internal_48bb714646a89540018a57b6a5b6756a3a178031cc92fc3d646579c710ec0c92)))) {
            echo "active";
        }
        echo "\"><a href=\"../../\">Home</a></li>
                  <li class=\"";
        // line 29
        if ((is_string($__internal_890f07af20992085d430a537efea6d5258f5f2c868fa94948440e58c24c890ae = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_95bb1f878c78c173af741e5b7ce05281969b5d4a4426f865e661487f0c7d971e = "lucky") && ('' === $__internal_95bb1f878c78c173af741e5b7ce05281969b5d4a4426f865e661487f0c7d971e || 0 === strpos($__internal_890f07af20992085d430a537efea6d5258f5f2c868fa94948440e58c24c890ae, $__internal_95bb1f878c78c173af741e5b7ce05281969b5d4a4426f865e661487f0c7d971e)))) {
            echo "active";
        }
        echo "\"><a href=\"../../lucky/number\">Lucky number</a></li>
                  <li><a href=\"#\">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  ";
        
        $__internal_914767cb2cacd79c4d948da528e6fdc10587e27ff97b856ca94bb273c128aa5c->leave($__internal_914767cb2cacd79c4d948da528e6fdc10587e27ff97b856ca94bb273c128aa5c_prof);

        
        $__internal_700fd94cfb352fe5db9b3083ba5d43aec3392deb30c80856524ebb0cca656441->leave($__internal_700fd94cfb352fe5db9b3083ba5d43aec3392deb30c80856524ebb0cca656441_prof);

    }

    // line 37
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_af4db070451475a97a7814129f5f73c46839b4d5ed8ade3425dc40e2a1d261a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4db070451475a97a7814129f5f73c46839b4d5ed8ade3425dc40e2a1d261a5->enter($__internal_af4db070451475a97a7814129f5f73c46839b4d5ed8ade3425dc40e2a1d261a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_e0a121b7337431a6f54f4fe2d1cd9e2c400be97525a3bc33561f9238eb33f245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a121b7337431a6f54f4fe2d1cd9e2c400be97525a3bc33561f9238eb33f245->enter($__internal_e0a121b7337431a6f54f4fe2d1cd9e2c400be97525a3bc33561f9238eb33f245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

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
          </div>
";
        
        $__internal_e0a121b7337431a6f54f4fe2d1cd9e2c400be97525a3bc33561f9238eb33f245->leave($__internal_e0a121b7337431a6f54f4fe2d1cd9e2c400be97525a3bc33561f9238eb33f245_prof);

        
        $__internal_af4db070451475a97a7814129f5f73c46839b4d5ed8ade3425dc40e2a1d261a5->leave($__internal_af4db070451475a97a7814129f5f73c46839b4d5ed8ade3425dc40e2a1d261a5_prof);

    }

    // line 39
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_5ecfd07df1247e3163320d57f08552b1aaeaf206cd537d5b025d4fbe736e6746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecfd07df1247e3163320d57f08552b1aaeaf206cd537d5b025d4fbe736e6746->enter($__internal_5ecfd07df1247e3163320d57f08552b1aaeaf206cd537d5b025d4fbe736e6746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_d559bcde49ad4fa5b10a5b0146e8d1cc672a359648b92544f568fa655f3c1202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d559bcde49ad4fa5b10a5b0146e8d1cc672a359648b92544f568fa655f3c1202->enter($__internal_d559bcde49ad4fa5b10a5b0146e8d1cc672a359648b92544f568fa655f3c1202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        
        $__internal_d559bcde49ad4fa5b10a5b0146e8d1cc672a359648b92544f568fa655f3c1202->leave($__internal_d559bcde49ad4fa5b10a5b0146e8d1cc672a359648b92544f568fa655f3c1202_prof);

        
        $__internal_5ecfd07df1247e3163320d57f08552b1aaeaf206cd537d5b025d4fbe736e6746->leave($__internal_5ecfd07df1247e3163320d57f08552b1aaeaf206cd537d5b025d4fbe736e6746_prof);

    }

    // line 40
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_2602350080aef4d80aa7a98debca4312dcaa1995e36778861392ba9148e4ad4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2602350080aef4d80aa7a98debca4312dcaa1995e36778861392ba9148e4ad4a->enter($__internal_2602350080aef4d80aa7a98debca4312dcaa1995e36778861392ba9148e4ad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_5d263f71b4f63ef862a524cd945078244de6f37a3180ec3d3b988b07a5893b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d263f71b4f63ef862a524cd945078244de6f37a3180ec3d3b988b07a5893b8b->enter($__internal_5d263f71b4f63ef862a524cd945078244de6f37a3180ec3d3b988b07a5893b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_5d263f71b4f63ef862a524cd945078244de6f37a3180ec3d3b988b07a5893b8b->leave($__internal_5d263f71b4f63ef862a524cd945078244de6f37a3180ec3d3b988b07a5893b8b_prof);

        
        $__internal_2602350080aef4d80aa7a98debca4312dcaa1995e36778861392ba9148e4ad4a->leave($__internal_2602350080aef4d80aa7a98debca4312dcaa1995e36778861392ba9148e4ad4a_prof);

    }

    // line 43
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_68facabb1aaa5679ba2fe976cd2e640f088444f632122b013abc7190fbfa9a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68facabb1aaa5679ba2fe976cd2e640f088444f632122b013abc7190fbfa9a03->enter($__internal_68facabb1aaa5679ba2fe976cd2e640f088444f632122b013abc7190fbfa9a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_628288546e2c3653bf7972ba60fcce33ee59657f344e8c8850887765f10f1e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628288546e2c3653bf7972ba60fcce33ee59657f344e8c8850887765f10f1e1b->enter($__internal_628288546e2c3653bf7972ba60fcce33ee59657f344e8c8850887765f10f1e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        // line 44
        echo "          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
";
        
        $__internal_628288546e2c3653bf7972ba60fcce33ee59657f344e8c8850887765f10f1e1b->leave($__internal_628288546e2c3653bf7972ba60fcce33ee59657f344e8c8850887765f10f1e1b_prof);

        
        $__internal_68facabb1aaa5679ba2fe976cd2e640f088444f632122b013abc7190fbfa9a03->leave($__internal_68facabb1aaa5679ba2fe976cd2e640f088444f632122b013abc7190fbfa9a03_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01c0a6f5a2b06579bbbbd7213c4c6b6052d013af0b79572f5bbe39add11dfb87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c0a6f5a2b06579bbbbd7213c4c6b6052d013af0b79572f5bbe39add11dfb87->enter($__internal_01c0a6f5a2b06579bbbbd7213c4c6b6052d013af0b79572f5bbe39add11dfb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cc4422e6a1e458f238632983d30d8a089292437558f2d6c14e3f08df06074857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4422e6a1e458f238632983d30d8a089292437558f2d6c14e3f08df06074857->enter($__internal_cc4422e6a1e458f238632983d30d8a089292437558f2d6c14e3f08df06074857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>";
        
        $__internal_cc4422e6a1e458f238632983d30d8a089292437558f2d6c14e3f08df06074857->leave($__internal_cc4422e6a1e458f238632983d30d8a089292437558f2d6c14e3f08df06074857_prof);

        
        $__internal_01c0a6f5a2b06579bbbbd7213c4c6b6052d013af0b79572f5bbe39add11dfb87->leave($__internal_01c0a6f5a2b06579bbbbd7213c4c6b6052d013af0b79572f5bbe39add11dfb87_prof);

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
        return array (  302 => 58,  293 => 57,  278 => 44,  269 => 43,  252 => 40,  235 => 39,  222 => 40,  218 => 39,  215 => 38,  206 => 37,  187 => 29,  181 => 28,  174 => 23,  165 => 22,  149 => 50,  147 => 43,  145 => 37,  142 => 36,  140 => 22,  133 => 17,  124 => 16,  112 => 11,  108 => 10,  104 => 9,  99 => 8,  90 => 7,  72 => 6,  60 => 66,  57 => 57,  55 => 16,  48 => 13,  46 => 7,  42 => 6,  39 => 5,  34 => 1,);
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
                  <li><a href=\"#\">Contact</a></li>
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
