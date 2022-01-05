<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <!-- different way to pass a variable throught the address bar by using one line or multiple lines -->
        
        <!-- By using multiple line-->
        <h1>
            <?php  
                echo "Hello $name";
            ?>  
        </h1>

        <!-- By using one single line-->
        <h1> 
            <?php echo "Hello $name, I am $age years old <br>"; ?> 
                <!-- or -->
            <?="Good Morning " . htmlspecialchars($name); ?>
        </h1>

        <p>
            <?="<br> Hello Mr. <b> $pname</b>, I am here by telling you that at <b> $time </b>, we
            are going to host a meeting to welcome you to our company called <b> $company </b>"; ?>
        
        <!-- How you pass variables in the address bar 
            http://localhost/training/Php/home.php?pname=Walter&time=3PM&company=Zatec 
        -->    
    </p>

    </header>

</body>
</html>