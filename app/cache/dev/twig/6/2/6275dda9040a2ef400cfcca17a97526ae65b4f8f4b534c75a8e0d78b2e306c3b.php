<?php

/* base.html.twig */
class __TwigTemplate_f0c2bf528ad67c41a5626a45ecd6969fe6f1ebf9eaa1ac93755e8d0fbe31174f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9fefc93eaae12f6b4cfbcfc7a7d7da3cc7f218cd166ee0e29c4bf3ac55720dc = $this->env->getExtension("native_profiler");
        $__internal_d9fefc93eaae12f6b4cfbcfc7a7d7da3cc7f218cd166ee0e29c4bf3ac55720dc->enter($__internal_d9fefc93eaae12f6b4cfbcfc7a7d7da3cc7f218cd166ee0e29c4bf3ac55720dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d9fefc93eaae12f6b4cfbcfc7a7d7da3cc7f218cd166ee0e29c4bf3ac55720dc->leave($__internal_d9fefc93eaae12f6b4cfbcfc7a7d7da3cc7f218cd166ee0e29c4bf3ac55720dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5ac467e713745b660c98325a8ee7567436afab9514ee99395c75888f42d8a73 = $this->env->getExtension("native_profiler");
        $__internal_e5ac467e713745b660c98325a8ee7567436afab9514ee99395c75888f42d8a73->enter($__internal_e5ac467e713745b660c98325a8ee7567436afab9514ee99395c75888f42d8a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e5ac467e713745b660c98325a8ee7567436afab9514ee99395c75888f42d8a73->leave($__internal_e5ac467e713745b660c98325a8ee7567436afab9514ee99395c75888f42d8a73_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2af275070475e5f0284ce9e84408d424348db9108966e7ad61a8a23fe7cb0534 = $this->env->getExtension("native_profiler");
        $__internal_2af275070475e5f0284ce9e84408d424348db9108966e7ad61a8a23fe7cb0534->enter($__internal_2af275070475e5f0284ce9e84408d424348db9108966e7ad61a8a23fe7cb0534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2af275070475e5f0284ce9e84408d424348db9108966e7ad61a8a23fe7cb0534->leave($__internal_2af275070475e5f0284ce9e84408d424348db9108966e7ad61a8a23fe7cb0534_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e334fe0e7c4a329ebf8c123a9c5eadc3965a67ea790b366d4ad501f3cf08f89 = $this->env->getExtension("native_profiler");
        $__internal_9e334fe0e7c4a329ebf8c123a9c5eadc3965a67ea790b366d4ad501f3cf08f89->enter($__internal_9e334fe0e7c4a329ebf8c123a9c5eadc3965a67ea790b366d4ad501f3cf08f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e334fe0e7c4a329ebf8c123a9c5eadc3965a67ea790b366d4ad501f3cf08f89->leave($__internal_9e334fe0e7c4a329ebf8c123a9c5eadc3965a67ea790b366d4ad501f3cf08f89_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d05182710c5d1ba40c5d0e51bbd29e6fe83ef0f5d89972ab7ed511ad8c202338 = $this->env->getExtension("native_profiler");
        $__internal_d05182710c5d1ba40c5d0e51bbd29e6fe83ef0f5d89972ab7ed511ad8c202338->enter($__internal_d05182710c5d1ba40c5d0e51bbd29e6fe83ef0f5d89972ab7ed511ad8c202338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d05182710c5d1ba40c5d0e51bbd29e6fe83ef0f5d89972ab7ed511ad8c202338->leave($__internal_d05182710c5d1ba40c5d0e51bbd29e6fe83ef0f5d89972ab7ed511ad8c202338_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
