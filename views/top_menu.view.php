<?php
$config = \Sdrdis\Templates\Midnight\loadViewConfig();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Test by sdrdis</title>
    <link rel="stylesheet" href="static/apps/sdrdis_templates_midnight/stylesheets/styles.css">
    <link rel="stylesheet" href="static/apps/sdrdis_templates_midnight/stylesheets/pygment_trac.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="static/apps/sdrdis_templates_midnight/javascripts/respond.js"></script>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="static/apps/sdrdis_templates_midnight/stylesheets/ie.css">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

</head>
<body>
<div id="header">
        <?= \View::forge('sdrdis_templates_midnight::subviews/menu', $config["menu"]); ?>
</div><!-- end header -->

<div class="wrapper">

    <section>
        <h1><?= $title ?></h1>

        <?= $wysiwyg['content'] ?>
    </section>

</div>
<!--[if !IE]><script>fixScale(document);</script><![endif]-->

</body>
</html>