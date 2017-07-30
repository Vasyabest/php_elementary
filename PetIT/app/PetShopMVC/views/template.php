<?php 
require_once 'header.php';

foreach ($cats as $cat): ?>
    <tr>
        <td><?php echo $cat->getType();?></td>
        <td><?php echo $cat->getName();?></td>
        <td><?php echo $cat->getPrice();?></td>
        <td><?php echo $cat->isColor();?></td>
        <td><?php echo $cat->isFluffy();?></td>
    </tr>
<?php endforeach; ?>

<?php include_once 'footer.php';?>