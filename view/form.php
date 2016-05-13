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
            <a href="index.php">Simple CRUD application   </a>
        </header>

        <?php
        if(empty($goods)) {
            $goods = array(
                'name' => 'Name',
                'id_warehouse' => 1,
                'price' => 0,
                'number' => 1,
            );
        }
        ?>

        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="name">Name:</label>
                    </td>
                    <td>
                        <input name="name" type="text" value="<?php print htmlspecialchars($goods['name']); ?>"
                               id="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="price">Price:</label>
                    </td>
                    <td>
                        <input name="price" type="text" value="<?php print htmlspecialchars($goods['price']); ?>"
                               id="price">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="number">Number:</label>
                    </td>
                    <td>
                        <input name="number" type="text" value="<?php print htmlspecialchars($goods['number']); ?>"
                               id="number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="warehouse">Warehouse</label>
                    </td>
                    <td>

                        <select id="warehouse" name="id_warehouse" >
                            <?php foreach ($warehouses as $warehouses) : ?>
                                <option
                                    <?php
                                    if($warehouses['id']==$goods['id_warehouse']){
                                        ?>
                                        selected
                                        <?php
                                    }
                                    ?>
                                    value="<?php print htmlspecialchars($warehouses['id']); ?>"><?php print htmlspecialchars($warehouses['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>

            <div class="center_button">
                <div>
                    <input type="submit" name="save" value="Save">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>