<?php foreach ($expensivePets as $pet): ?>
    <tr>
        <td><?php echo $pet->type;?></td>
        <td><?php echo $pet->name;?></td>
        <td><?php echo $pet->price;?></td>
        <td><?php echo $pet->color;?></td>
        <td><?php echo $pet->fluffy;?></td>
    </tr>
<?php endforeach; ?>
