<html>
    <head>
        <title>PDO Assignment</title>
    </head>
    <body>
        <ul>
            <?php foreach ($user as $users) : ?>
                <li>
                    <?php if($users->isAdmin) : ?>
                        <b>
                            <?= $users->username; ?><br>
                            <?= $users->email; ?><br>
                            <?= $users->password; ?>
                        </b>
                    <?php else: ?>
                        <?= $users->username; ?><br>
                        <?= $users->email; ?><br>
                        <?= $users->password; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>