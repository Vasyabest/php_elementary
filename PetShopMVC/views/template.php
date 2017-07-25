<?php foreach ($cats as $cat): ?>
    <tr>
        <td><?php echo $cat->type;?></td>
        <td><?php echo $cat->name;?></td>
        <td><?php echo $cat->price;?></td>
        <td><?php echo $cat->color;?></td>
        <td><?php echo $cat->fluffy;?></td>
    </tr>
<?php endforeach; ?>