<!DOCTYPE html>
<html>
<head>
    <title><?= $this->fetch("title") ?> - HelpDesk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <?= $this->Html->css("css.css") ?>
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'> -->
    <!-- CSS Libs -->
    <?= $this->Html->css(
        ["bootstrap.min.css", "font-awesome.min.css", "animate.min.css", 
        "bootstrap-switch.min.css", "checkbox3.min.css", "jquery.dataTables.min.css",
        "dataTables.bootstrap.css", "select2.min.css"
    ]) ?>
    <!-- CSS App -->
    <?= $this->Html->css(["style.css", "flat-blue.css"]) ?>
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <?= $this->element('navbar') ?>
            <?= $this->element('sidebar') ?>
            <!-- Main Content -->
            <div class="container-fluid">
                <?= $this->fetch("content"); ?>
            </div>
        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
            </div>
        </footer>
        <div>
            <!-- Javascript Libs -->
            <?= $this->Html->script([
                "jquery.min.js", 
                "bootstrap.min.js", 
                "Chart.min.js", 
                "bootstrap-switch.min.js",
                "jquery.matchHeight-min.js",
                "jquery.dataTables.min.js",
                "dataTables.bootstrap.min.js",
                "select2.full.min.js",
                "ace/ace.js",
                "ace/mode-html.js",
                "ace/theme-github.js",
                "app.js",
                "index.js"
            ]) ?>
            <!-- Javascript -->
            <?= $this->Html->script([
                "app.js",
                "index.js"
            ]) ?>
        </div>
    </div>
</body>
</html>