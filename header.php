<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>

</head>
<body>
    <header class="site-header">
        <h1 class="site-header__main-link"><i class="fas fa-code dev-icon"></i><?= get_bloginfo('name'); ?></h1>
    </header>