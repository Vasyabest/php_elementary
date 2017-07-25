<?php include_once 'header.php';?>
<?php foreach ($cats as $cat): ?>
    <tr>
        <td><?php echo $cat->kind;?></td>
        <td><?php echo $cat->name;?></td>
        <td><?php echo $cat->price;?></td>
        <td><?php echo $cat->color;?></td>
        <td><?php echo $cat->fluffiness;?></td>
    </tr>
<?php endforeach; ?>
<?php include_once 'footer.php';?>