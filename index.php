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
            <select name = "carta1" value="valor">
                <?php foreach ($cartas as $i=>$value): ?>
                    <?php echo "<option value=",$i,">",$value->nome,"</option>"; ?>
                <?php endforeach; ?>
            </select>
        VS
            <select name = "carta2">
                <?php foreach ($cartas as  $i=>$value): ?>
                <?php echo "<option value=",$i,">",selectedC2($value),"</option>"; ?>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="batalhar" value="Batalhar">
        </form>
       
        <?php 
        if(isset($_POST["batalhar"])){
            $batalha = new Batalha($cartas[$_POST["carta1"]], $cartas[$_POST["carta2"]]);
            echo $batalha->vencedor();
        }
        ?>
    </div>     
  </body>
</html>