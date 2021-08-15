<?php
require_once('autoload.php');
$content = $pages->getPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloader</title>
</head>
<body>
    <h1><?php echo $content['title']; ?></h1>
    <?php echo $content['content']; ?>
</body>
</html>