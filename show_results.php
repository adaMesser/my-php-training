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
    <?php $results = filter_wrapper($options['dice_type'], $options['count'], $options['trigger']); ?>

    <?php foreach ($results as $result): ?>
      <!--Меняем значене класа в зависимоти от возвращаемого значения-->
      <?php if ($result >= $options['min_value']): ?>
        <div class="dice-<?php echo $result; ?> dices"></div><br/>
      <?php endif; ?>
    <?php endforeach; ?>

    <form action="index.php" method="get" role="form">
      <div class="btn_center">
        <input type="submit" value="На главную" class="btn btn-danger">
      </div>
    </form>
  </div>
</div>
</body>
</html>
