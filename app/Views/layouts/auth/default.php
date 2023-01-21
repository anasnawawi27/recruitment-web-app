<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Tekpak Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/plugin.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">

    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/img/favicon') ?>/android-icon-192x192.png">
    <link rel="manifest" href="<?= base_url('assets/img/favicon') ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/line.css">

    <?php $this->renderSection('plugin_css') ?>
    <?php $this->renderSection('custom_css') ?>
</head>

<body>
    <main class="main-content">
        <div class="admin">
            <?php $this->renderSection('content') ?>
        </div>
    </main>

    <script src="<?= base_url('assets/js/plugins/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/jquery.form.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.min.js') ?>"></script>
    <?php $this->renderSection('plugin_js') ?>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <?php $this->renderSection('custom_js') ?>
</body>

</html>