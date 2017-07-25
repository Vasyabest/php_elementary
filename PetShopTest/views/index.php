<?php require_once '../models/main.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PetShop</title>
        <link href="../styles/main.css" rel="stylesheet">
    </head>
    <body>
        <table>
            <caption><h1>White and fluffy pets</h1></caption>
            <tr>
                <th>Pet</th>
                <th>Name</th>
                <th>Color</th>
                <th>Price</th>
                <th>Fluffy</th>
            </tr>

            <?php foreach ($petShop->getWhiteOrFluffyPets() as $pet): ?>
            <tr>
                <td><?php echo get_class($pet);?></td>
                <td><?php echo $pet->getName();?></td>
                <td><?php echo $pet->isColor();?></td>
                <td><?php echo $pet->getPrice();?></td>
                <td><?php echo $pet->isFluffy();?></td>
            <tr>
            <?php endforeach; ?>
        </table>

        <table>
            <caption><h1>Expensive pets</h1></caption>
            <tr>
                <th>Pet</th>
                <th>Name</th>
                <th>Color</th>
                <th>Price</th>
                <th>Fluffy</th>
            </tr>

            <?php foreach ($petShop->getExpensivePets() as $pet): ?>
            <tr>
                <td><?php echo get_class($pet);?></td>
                <td><?php echo $pet->getName();?></td>
                <td><?php echo $pet->isColor();?></td>
                <td><?php echo $pet->getPrice();?></td>
                <td><?php echo $pet->isFluffy();?></td>
            <tr>
            <?php endforeach; ?>
        </table>

        <table>
            <caption><h1>Cats</h1></caption>
            <tr>
                <th>Pet</th>
                <th>Name</th>
                <th>Color</th>
                <th>Price</th>
                <th>Fluffy</th>
            </tr>

            <?php foreach ($petShop->getCats() as $pet): ?>
            <tr>
                <td><?php echo get_class($pet);?></td>
                <td><?php echo $pet->getName();?></td>
                <td><?php echo $pet->isColor();?></td>
                <td><?php echo $pet->getPrice();?></td>
                <td><?php echo $pet->isFluffy();?></td>
            <tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>