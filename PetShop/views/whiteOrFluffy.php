<?php foreach ($whiteOrFluffy as $pet): ?>
    <tr>
        <td><?php echo $pet->getType();?></td>
        <td><?php echo $pet->getName();?></td>
        <td><?php echo $pet->getPrice();?></td>
        <td><?php echo $pet->isColor();?></td>
        <td><?php echo $pet->fluffy;?></td>
    </tr>
<?php endforeach; ?>