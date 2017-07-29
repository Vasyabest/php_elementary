<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>PetShop</title>
</head>
<body>

<div class="page-header">
    <a class="btn btn-default" href="/itCompanyIndex/before" role="button">IT Company</a>
    <h1>Pet Shop</h1>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <a href="/PetShopMVC/petShopIndex/getCats" class="list-group-item">Cats</a>
            <a href="/PetShopMVC/petShopIndex/whiteOrFluffy" class="list-group-item">White or fluffy pets</a>

            <a href="/PetShopMVC/petShopIndex/expensive" class="list-group-item">Expensive pets</a>
        </div>
    </div>
    <div class="col-md-10">
        <table class="table table-hover">
            <tr>
                <td>Kind</td>
                <td>Name</td>
                <td>Price</td>
                <td>Color</td>
                <td>Fluffiness</td>
            </tr>