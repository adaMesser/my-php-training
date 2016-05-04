<form method="post">
    <div>
        <label for="name">Name:</label>
        <input name="name" type="text" value="<?php print htmlspecialchars($goods['name']); ?>" id="name">
    </div>

    <div>
        <label for="price">Price:</label>
        <input name="price" type="text" value="<?php print htmlspecialchars($goods['price']); ?>" id="price">
    </div>

    <div>
        <label for="number">Number:</label>
        <input name="number" type="text" value="<?php print htmlspecialchars($goods['number']); ?>" id="number">
    </div>

    <div>
        <label for="warehouse">Warehouse</label>
        <select id="warehouse" name="id_warehouse">
            <?php foreach ($warehouses as $warehouses) : ?>
                <option
                    value="<?php print htmlspecialchars($warehouses['id']); ?>"><?php print htmlspecialchars($warehouses['name']); ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <input type="submit" name="save" value="Save">
    </div>
</form>
