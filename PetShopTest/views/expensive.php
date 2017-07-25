<?php foreach ($expensivePets as $pet): ?>
    <tr>
        <td><?php echo $pet->kind;?></td>
        <td><?php echo $pet->name;?></td>
        <td><?php echo $pet->price;?></td>
        <td><?php echo $pet->color;?></td>
        <td><?php echo $pet->fluffiness;?></td>
    </tr>
<?php endforeach; ?>
