<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
<?php if(!\AllClass\CreateItem::$error):?>
<table border="1">
    <tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Category</b></td><td><b>Price</b></td><td><b>Qty</b></td></tr>
    <?php foreach ($allCategory as $cat): ?>

        <?php foreach ($allItem as $it): ?>

            <?php if($cat->id == $it->id_category): ?>
                <tr><td><?= $it->id?></td><td><?= $it->name ?></td><td><?= $cat->name ?></td><td><?= $it->price ?></td><td><?= $it->qty ?></td></tr>
            <?php endif ?>

        <?php endforeach ?>

    <?php endforeach ?>
    <table>
        <?php else: ?>
            <h3>Error - no parameters: name, id category, price, quantity</h3>
        <?php endif ?>
</body>
</html>