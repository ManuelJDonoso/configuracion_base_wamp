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
        <ul class="file-browser__list">
            <?php
            $printedSubtitle = false;
            foreach ($items as $item):
                if ($item['isDir'] && !$printedSubtitle):
                    // Print subtitle before first directory
                    echo '<h2 class="file-browser__subtitle">Proyectos</h2>';
                    $printedSubtitle = true;
                endif;
            ?>
                <?php if ($item['isDir']): ?>
                    <li class="file-browser__item file-browser__item--directory">
                        <a class="file-browser__link" href="<?php echo $item['name']; ?>/"><?php echo $item['name']; ?>/</a>
                    </li>
                <?php else: ?>
                    <li class="file-browser__item file-browser__item--file">
                        <a class="file-browser__link" href="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>