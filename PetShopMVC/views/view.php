<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PetShop</title>
</head>
<body>
<h1>White and fluffy pets</h1>
<ul>
    <?php foreach ($fluffyOrWhite as $pet): ?>
        <li><?php echo $pet;?></li>
    <?php endforeach; ?>
</ul>
<h1>Expensive pets</h1>
<ul>
    <?php foreach ($expensivePets as $pet): ?>
        <li><?php echo $pet;?></li>
    <?php endforeach; ?>
</ul>
<h1>Cats</h1>
<ul>
    <?php foreach ($cats as $cat): ?>
        <li><?php echo $cat;?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>