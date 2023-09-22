<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insert your Product</h1>
    <form action="/actioninsert" method="post">
        <label">Product Name:</label>
        <br>
        <input type="text" name="ProductName" placeholder="Product Name" value="<?=$user['ProductName']?>">
        <br><br>
        <label">Product Description:</label>
        <br>
        <input type="text" name="ProductDescription" placeholder="Product Description" value="<?=$user['ProductDescription']?>">
        <br><br>
        <label">Product Category:</label>
        <br>
        <input type="number" name="ProductCategory" placeholder="Product Category" value="<?=$user['ProductCategory']?>">
        <br><br>
        <label">Product Quantity:</label>
        <br>
        <input type="number" name="ProductQuantity" placeholder="Product Quantity" value="<?=$user['ProductQuantity']?>">
        <br><br>
        <label">Product Price:</label>
        <br>
        <input type="number" name="ProductPrice" placeholder="Product Price" value="<?=$user['ProductPrice']?>">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
