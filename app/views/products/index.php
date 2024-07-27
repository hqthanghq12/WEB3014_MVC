<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
        <?php
        //var_dump($listCate);
        foreach ($listCate as $item){
        ?>

        <tr>
            <th><?php echo $item['id']?></th>
            <th><?php echo $item['name']?></th>
            <th><?php echo $item['status']?></th>
        </tr>
        <?php } ?>
    </table>
</body>
</html>