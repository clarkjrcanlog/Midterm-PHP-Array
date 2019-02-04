<html>
    <head>
        <title>PHP ARRAY</title>
    </head>
    <body>
        <?php
            $age = [
                "Peter" => "35",
                "Ben" => "37",
                "Joe" => "43"
            ];
        ?>
        
        <ul>
            <?php foreach($age as $pname => $page) : ?>
                <li>Name= <?= $pname . ', '?>    Age= <?= $page?></li>
            <?php endforeach ; ?>

        </ul>
    </body>
</html>