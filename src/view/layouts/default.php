
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $this->e($title ?? 'Home') ?></title>
        <link href="<?= $this->asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?= $this->asset('css/default.css'); ?>" rel="stylesheet">
        <?= $this->section('style'); ?>
    </head>
    <body>
        <header></header>
        <main>
            <?= $this->section('main_c'); ?>
        </main>
        <footer>
            <?= $this->section('footer_c'); ?>
        </footer>

        <script src="<?= $this->asset('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <?= $this->section('scripts'); ?>
    </body>
</html>