<html>
    <body>
    <h1 style="text-align: center">Laboratory #1</h1>
    <a href="/insert">Add New</a>
    <?php if($users):?>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Product Desciption</th>
        <th>Product Category</th>
        <th>Product Quantity</th>
        <th>Product Price</th>
    </tr>
         <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id']?></td>
        <td><?= $user['last_Name']?></td>
        <td><?= $user['gender']?></td>
        <td><?= $user['age']?></td>
        <td>
            <a href="/update/<?=$user['id']?>">Update</a>
            <a href="/delete/<?=$user['id']?>">Delete</a>

        </td>        
    </tr>
    <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </body>
</html>