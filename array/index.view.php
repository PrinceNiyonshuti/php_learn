<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arrays</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
        <!-- Possible ways to display items from the array -->
        <ul>
            <?php 
                foreach ($names as $name) {
                    echo "<li>$name</li>";
                }
            ?>
        </ul>
                <!-- or -->
        <ul>
            <?php foreach ($names as $name) : ?>
                <li><?= $name; ?></li>
            <?php endforeach; ?>
        </ul>

        <!-- displaying,counting the element found in the liverpoolPlayers array -->
        <ul>
            <h3>List of Liverpool Players:</h3>
            <?php 
            $count = 0;
            foreach ($liverpoolPlayers as $players) : $count = $count + 1; ?>
                <li> <?= $players; ?> </li>   
            <?php endforeach; ?>
            <?="<br><h3>There are $count players listed.</h3>"; ?>
        </ul>

        <!-- displaying element from the associative array -->
        <ul>
            <h3>Personal Information:</h3>
            <?php 
            foreach ($person as $key => $feature) : ?>
                <li> <strong><?= "$key = "; ?></strong><?= $feature; ?> </li>   
            <?php endforeach; ?>
        </ul>

        <!-- displaying element from the associative array -->
        <ul>
            <h3>List of Liverpool Players:</h3>
            <?php 
            foreach ($liverpoolPlayer as $key => $players) : ?>
                <li><strong><?= "$key = "; ?></strong><?= $players; ?> </li>   
            <?php endforeach; ?>
        </ul>

        <!-- displaying element from the associative array from todo array -->
        <ul>
            <h3>List of Todo Task:</h3>
            <?php 
            foreach ($todo as $key => $todos) : ?>
                <li><strong><?= "$key = "; ?></strong><?= $todos; ?> </li>   
            <?php endforeach; ?>
        </ul>

</body>
</html>