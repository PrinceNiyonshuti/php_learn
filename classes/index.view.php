<html>
<head>
    <title>Classes in PHP</title>
</head>
<body>

    <ul>
        <?php foreach ($task as $tasks) : ?>
            <li>
                <!-- Will make a line through the text if the task is completed -->
                <?php if($tasks->completed) : ?>
                    <s><?= $tasks->description; ?></s>
                <?php else: ?>
                    <?= $tasks->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>

    <ul>
        <!-- Will check if the user is an admin and make him/her font bold -->
        <?php foreach ($users as $user) : ?>
            <li>
                <?php if($user->isAdmin) : ?>
                    <b>
                        Email: <?= $user->email; ?><br>
                        username: <?= $user->username; ?>
                    </b>
                <?php else: ?>
                    Email: <?= $user->email; ?><br>
                    username: <?= $user->username; ?>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>