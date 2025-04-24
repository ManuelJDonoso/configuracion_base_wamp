<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Browser</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="file-browser">
        <h1 class="file-browser__title">Índice de Archivos</h1>

        <?php
        // Separar directorios y ficheros
        $dirs = array_filter($items, fn($i) => $i['isDir']);
        $files = array_filter($items, fn($i) => !$i['isDir']);
        ?>

        <?php if (count($dirs) > 0): ?>
            <h2 class="file-browser__subtitle">Proyectos</h2>
            <ul class="file-browser__list">
                <?php foreach ($dirs as $item): ?>
                    <li class="file-browser__item file-browser__item--directory">
                        <a class="file-browser__link" href="<?php echo $item['name']; ?>/"><?php echo $item['name']; ?>/</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if (count($files) > 0): ?>
            <h2 class="file-browser__subtitle file-browser__subtitle--files">Archivos</h2>
            <ul class="file-browser__list">
                <?php foreach ($files as $item): ?>
                    <li class="file-browser__item file-browser__item--file">
                        <a class="file-browser__link" href="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
