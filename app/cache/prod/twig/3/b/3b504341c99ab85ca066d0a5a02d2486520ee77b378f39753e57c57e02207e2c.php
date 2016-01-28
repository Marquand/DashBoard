<?php

/* PointWebAdminBundle:Default:dropzone.html.twig */
class __TwigTemplate_da543acabcfa4d8d988d333f559536424892b5786b401bd7dd5cb5f99e3b2aa5 extends Twig_Template
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
        // line 1
        echo "<html>
<head>
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
</head>
<body style=\"width: 100%; height: 125px\">
<form enctype=\"multipart/form-data\" class=\"dropzone\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\" method=\"post\"
      id=\"pointweb_dropzone_form\">
    <input type=\"file\" name=\"dropzoneFiles[]\" multiple/>
</form>
<script>
    var form = \$(\"#pointweb_dropzone_form\");
    var input = form.find(\"input\");
    input.on('change', function (event) {
        var progressBar = \$('<div class=\"col-lg-12 progress progress-striped active\" id=\"progressBarFile\"><div class=\"progress-bar\" style=\"width: 100%\"></div></div>');
        \$(parent.document).find('#dropZoneFile').after(progressBar);
        files = event.target.files;
        var data = new FormData();
        \$.each(files, function (key, value) {
            data.append(key, value);
        });
        \$.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: data,
            cache: false,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (result) {
                progressBar.remove();
                parent.prepareNewFileForm(result);
            }
        });
    });
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:dropzone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css" media="all"/>*/
/* </head>*/
/* <body style="width: 100%; height: 125px">*/
/* <form enctype="multipart/form-data" class="dropzone" action="{{ path('point_web_admin_update') }}" method="post"*/
/*       id="pointweb_dropzone_form">*/
/*     <input type="file" name="dropzoneFiles[]" multiple/>*/
/* </form>*/
/* <script>*/
/*     var form = $("#pointweb_dropzone_form");*/
/*     var input = form.find("input");*/
/*     input.on('change', function (event) {*/
/*         var progressBar = $('<div class="col-lg-12 progress progress-striped active" id="progressBarFile"><div class="progress-bar" style="width: 100%"></div></div>');*/
/*         $(parent.document).find('#dropZoneFile').after(progressBar);*/
/*         files = event.target.files;*/
/*         var data = new FormData();*/
/*         $.each(files, function (key, value) {*/
/*             data.append(key, value);*/
/*         });*/
/*         $.ajax({*/
/*             url: form.attr('action'),*/
/*             type: form.attr('method'),*/
/*             data: data,*/
/*             cache: false,*/
/*             dataType: 'json',*/
/*             processData: false,*/
/*             contentType: false,*/
/*             success: function (result) {*/
/*                 progressBar.remove();*/
/*                 parent.prepareNewFileForm(result);*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
/* </body>*/
/* </html>*/
