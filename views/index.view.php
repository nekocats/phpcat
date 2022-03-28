<?php require_once('partials/head.php'); ?>

<ul>
    <?php foreach ( $tasks as $task ) : ?>
        
        <?php if ( $task->completed ) : ?>
            <strike>
        <?php endif; ?>

            <li><?= $task->description; ?></li>

        <?php if ( $task->completed ) : ?>
            </strike>
        <?php endif; ?>

    <?php endforeach; ?>
</ul>

<?php require_once('partials/footer.php'); ?>
