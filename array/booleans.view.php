<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booleans</title>
</head>
<body>
        <!-- displaying element from the associative array from todo array -->
        <ul>
            <h3>List of Todo Task:</h3>
           
           <!-- <?php 
            foreach ($todo as $key => $todos) : ?>
                <li>
                    <strong><?= ucwords($key); ?></strong> : <?= $todos; ?> 
                </li>   
            <?php endforeach; ?> -->

            <li>
                <strong>Todo Name: </strong><?= $todo['title'] ?>
            </li>
            <li>
                <strong>Todo Due_date: </strong><?= $todo['due'] ?>
            </li>
            <li>
                <strong>Assigned_to: </strong><?= $todo['assigned_to'] ?>
            </li>
            <li>
                <strong>Status: </strong>  
                <?php if($todo['completed']) : ?>
                    <span>&#10004;</span>    
                <?php else : ?>
                    <span>&#10071;</span>    
                <?php endif ?>
            </li>
            <li>
                <strong>Delete: </strong>  
                <?php if($todo['completed'] && $todo['close']) : ?>
                    <span>&#10062;</span>    
                <?php elseif (!$todo['completed'] && $todo['close']) : ?>
                    <span>&#10067;</span>    
                <?php elseif ($todo['completed'] && !$todo['close']) : ?>
                    <span>&#10062;</span> 
                <?php else : ?>
                    <span>&#10067;</span>       
                <?php endif ?>
            </li>

        </ul>

</body>
</html>