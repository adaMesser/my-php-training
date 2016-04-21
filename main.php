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
        <label for="inp-facet">Выберите количество граней</label>
        <input id="inp-facet" type="number" name="facet" value="1" min="1" max="6" class="form-control">
      </div>
      <div class="form-group">
        <label for="inp-throw">Выберите количество бросков кубика</label>
        <input id="inp-throw" type="number" name="throw" value="1" min="1" max="20" class="form-control">
      </div>
      <div class="form-group">
        <label for="inp-minvalue">Меньше какого значения не выводить</label>
        <input id="inp-minvalue" type="number" name="min_value" value="1" min="1" max="6" class="form-control">
      </div>
      <div class="btn_center">
        <input type="submit" value="Играть" class="btn btn-danger">
      </div>
    </form>

    <?php $results = filter_wrapper($options['dice_type'], $options['count'], $options['trigger']); ?>
    <?php foreach ($results as $result): ?>
      <!--Меняем значене класа в зависимоти от возвращаемого значения-->
      <?php if ($result >= $options['min_value']): ?>
        <div class="dice-<?php echo $result; ?> dices"></div><br/>
      <?php endif; ?>
    <?php endforeach; ?>

  </div>
</div>
</body>
</html>