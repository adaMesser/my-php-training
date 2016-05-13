<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Warehouse</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center">
    <div class="content">
        <header>
            <a href="../index.php">Simple CRUD application</a>
        </header>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="name">Name:</label>
                    </td>
                    <td>
                        <input name="name" type="text" id="name">
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