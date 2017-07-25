<?php include_once 'header.php';?>
<?php foreach ($petShop->getWhiteOrFluffyPets() as $pet): ?>
    <tr>
        <td><?php echo get_class($pet);?></td>
        <td><?php echo $pet->getName();?></td>
        <td><?php echo $pet->isColor();?></td>
        <td><?php echo $pet->getPrice();?></td>
        <td><?php echo $pet->isFluffy();?></td>
    <tr>
<?php endforeach; ?>
<?php include_once 'footer.php';?>