<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cartas - OO</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <?php include('classes.php'); ?>
    <div>
        <h1>BATALHA</h1>
        <form action = " " method = "post">
            <select name = "carta1">
                <?php foreach ($cartas as $value): ?>
                    <?php echo "<option value=",$value->nome,">",$value->nome,"</option>"; ?>
                <?php endforeach; ?>
            </select>
        </form>
        "VS"
        <form action = " " method = "post">
            <select name = "carta2">
                <?php foreach ($cartas as $value): ?>
                    <?php echo "<option value=",$value->nome,">",$value->nome,"</option>"; ?>
                <?php endforeach; ?>
            </select>
        </form>
    </div> 
  </body>
</html>