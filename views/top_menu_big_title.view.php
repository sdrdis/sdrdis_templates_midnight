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
        <?php /*
        <li class="fork"><a href="https://github.com/sdrdis/test">View On GitHub</a></li>
        <li class="downloads"><a href="https://github.com/sdrdis/test/zipball/master">ZIP</a></li>
        <li class="downloads"><a href="https://github.com/sdrdis/test/tarball/master">TAR</a></li>
        <li class="title">DOWNLOADS</li>
        */ ?>
</div><!-- end header -->

<div class="wrapper">

    <section>
        <div id="title">
            <h1>Test</h1>
            <p>testings on github</p>
            <hr>
            <span class="credits left">Project maintained by <a href="https://github.com/sdrdis">sdrdis</a></span>
            <span class="credits right">Hosted on GitHub Pages &mdash; Theme by <a href="http://twitter.com/#!/michigangraham">mattgraham</a></span>
        </div>

        <h2><?= $title ?></h2>

        <?= $wysiwyg['content'] ?>
    </section>

</div>
<!--[if !IE]><script>fixScale(document);</script><![endif]-->

</body>
</html>