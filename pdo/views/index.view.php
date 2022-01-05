<?php require('partials/head.php') ?>

    <h2>Submit your name</h2>

    <form method="POST" action="/names">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

    <h2>List of names</h2>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach ?>
    </ul>

<?php require('partials/footer.php') ?>
