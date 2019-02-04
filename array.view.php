<html>
    <head>
        <title>PHP ARRAY</title>
    </head>
    <body>
        
        
        <ul>
            <?php foreach($age as $pname => $page) : ?>
                <li>Name= <?= $pname . ', '?>    Age= <?= $page?></li>
            <?php endforeach ; ?>

        </ul>
    </body>
</html>