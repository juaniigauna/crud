<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $route['title'] ?></title>
</head>
<body> 
    <div id="root">
        <?php include $route['content'] ?>
    </div>
</body>
</html>