<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="center">
    <div class="content">
        <form action="" method="post" role="form">


            <div class="form-group">
                <label for="command">Введите команду </label>
                <input id="command" type="text" name="command" value="throw 5 d6 filter > 3 sort desc" min="1" max="6" class="form-control">
            </div>

            <div class="btn_center">
                <input type="submit" value="Играть" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>
</body>
</html>

