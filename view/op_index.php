<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Warehouse</th>
        <th>Price</th>
        <th>Number</th>
    </tr>
    <?php foreach ($goo as $repo) : ?>
        <tr>
            <td><?php print htmlspecialchars($repo['id']); ?></td>
            <td><?php print htmlspecialchars($repo['name']); ?></td>
            <td><?php print htmlspecialchars($repo['warehouses']); ?></td>
            <td><?php print htmlspecialchars($repo['price']); ?></td>
            <td><?php print htmlspecialchars($repo['number']); ?></td>
            <td>
                <a href="index.php?op=update&id=<?php print htmlspecialchars($repo['id']); ?>">Edit</a>
                <a href="index.php?op=delete&id=<?php print htmlspecialchars($repo['id']); ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<div>
    <a href="index.php?op=create">Create</a>
</div>
