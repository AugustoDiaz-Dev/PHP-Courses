<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
</head>
<body>
    <!-- Integrate PHP with HTML -->
    
    <h1><?php echo 'Hello World'; ?></h1>
    <!-- If you need to process some php then this way is going to be used -->

    <h2><?= 'Hello Augusto' ?></h2> 
    <!-- This second version is used just to print smt -->

    <?php
    echo '<h3>'.'PHP is great'.'</h3>';
    ?>
    <!-- Printing HTML within PHP -->
</body>
</html>