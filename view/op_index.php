<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center">
    <div class="content">
        <header>
            <a href="index.php" title="Edit"><p class="header_text">Simple CRUD application </p></a>
        </header>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Warehouse</th>
                <th>Price</th>
                <th>Number</th>
                <th></th>
            </tr>
            <?php foreach ($goo as $repo) : ?>
                <tr>
                    <td><?php print htmlspecialchars($repo['id']); ?></td>
                    <td><?php print htmlspecialchars($repo['name']); ?></td>
                    <td><?php print htmlspecialchars($repo['warehouses']); ?></td>
                    <td><?php print htmlspecialchars($repo['price']); ?></td>
                    <td><?php print htmlspecialchars($repo['number']); ?></td>
                    <td>
                        <a href="index.php?op=update&id=<?php print htmlspecialchars($repo['id']); ?>" title="Edit">
                            <img src="img/edit.png" alt="Edit"></a>
                        <a href="index.php?op=delete&id=<?php print htmlspecialchars($repo['id']); ?>" title="Delete">
                            <img src="img/del.png" alt="Delete">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="create">
            <a href="index.php?op=create" title="Create item" > <img src="img/add.png" alt="Create item">Create new item</a>
        </div>
        <div class="create">
            <a href="index.php?op=add_warehouse" title="Create item" > <img src="img/home_add.png" alt="Add warehouse"> Add new warehouse</a>
        </div>
    </div>
</div>
</body>
</html>