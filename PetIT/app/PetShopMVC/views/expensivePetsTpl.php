<?php
require_once 'header.php';

foreach ($expensivePets as $pet): ?>
    <tr>
        <td><?php echo $pet->getType();?></td>
        <td><?php echo $pet->getName();?></td>
        <td><?php echo $pet->getPrice();?></td>
        <td><?php echo $pet->isColor();?></td>
        <td><?php echo $pet->isFluffy();?></td>
    </tr>
<?php endforeach; ?>

<?php include_once 'footer.php';?>
