<?php foreach ($expensivePets as $pet): ?>
    <tr>
        <td><?php echo $pet->type;?></td>
        <td><?php echo $pet->getname();?></td>
        <td><?php echo $pet->getPrice();?></td>
        <td><?php echo $pet->isColor();?></td>
        <td><?php echo $pet->fluffy;?></td>
    </tr>
<?php endforeach; ?>
