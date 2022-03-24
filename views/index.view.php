<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&family=Josefin+Sans&family=Montserrat:wght@300&family=Red+Hat+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            color: pink;
            background-color: black;
            font-family: 'Fira Mono', monospace;
            font-size: 20pt;
        }
        a {
            color: pink;
            background-color: black;
            font-family: 'Fira Mono', monospace;
            font-size: 20pt;
            text-decoration: underline;
        }
        h1 {
            text-align: center;
            background-color: #e3e3e3;
            padding: 2em;
        }
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="views/contact.view.php">Kontakt</a></li>
            <li><a href="views/about.view.php">Meist</a></li>
        </ul>
    </nav>

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

</body>
</html>