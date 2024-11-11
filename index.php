<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="display_discount.php" method="post">
        <div>
            <label>Product description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label>List Price</label>
            <input type="text" name="price">
        </div>
        <div>
            <label>Discount amount(%)</label>
            <input type="text" name="amount">
        </div>
        <div>
            <input type="submit" name="Calculate Discount">
        </div>
    </form>
</body>

</html>