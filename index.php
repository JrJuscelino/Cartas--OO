<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cartas - OO</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <?php include('classes.php'); ?>
    <div class = "cartas">
    <?php
        foreach($cartas as $carta):
            geraCarta($carta);
        endforeach;
        if(isset($_POST["personagem"])){
            $cartas[] = new Personagem($_POST["id"], $_POST["nome"],$_POST["level"], 
           $_POST["cor"], $_POST["imagem"], $_POST["idade"], $_POST["raca"], $_POST["luta"],
           $_POST["magia"], $_POST["sobrehumano"], $armas[$_POST["arma"]]);
            geraCarta(end($cartas));
        }
        if(isset($_POST["local"])){
            $cartas[] = new Local($_POST["id"], $_POST["nome"],$_POST["level"], 
           $_POST["cor"], $_POST["imagem"], $_POST["area"], $_POST["populacao"], $_POST["status"]);
            geraCarta(end($cartas));
        }
        if(isset($_POST["veiculo"])){
            $cartas[] = new Veiculo($_POST["id"], $_POST["nome"],$_POST["level"], 
           $_POST["cor"], $_POST["imagem"], $_POST["velocidade"], $_POST["voa"], $_POST["capacidade"]);
            geraCarta(end($cartas));
        }  
    ?>        
    </div>
    <div>
        <h1>BATALHA</h1>
        <form action = " " method = "post">
            <select name = "carta1">
                <?php foreach ($cartas as $i=>$value): ?>
                    <?php echo "<option value=",$i,">",$value->nome,"</option>"; ?>
                <?php endforeach; ?>
            </select>
        VS
            <select name = "carta2">
                <?php foreach ($cartas as  $i=>$value): ?>
                    <?php echo "<option value=",$i,">",$value->nome,"</option>"; ?>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="batalhar" value="Batalhar">
        </form>
        <br>

        <h1>Adicionar Personagem</h2>
        <form action = " " method = "post">
            ID: <input type="text" name="id"> <br>
            Nome: <input type="text" name="nome"> <br>
            Level: <input type="text" name="level"> <br>
            Cor: <input type="text" name="cor"> <br>
            Imagem: <input type="text" name="imagem"> <br>
            Idade: <input type="text" name="idade"> <br>
            Raça: <input type="text" name="raca"> <br>
            Magia: <input type="text" name="magia"> <br>
            Luta: <input type="text" name="luta"> <br>
            Sobrehumano: <input type="text" name="sobrehumano"> <br>
            Arma:
            <select name = "arma">
                <?php foreach ($armas as $i=>$value): ?>
                    <?php echo "<option value=",$i,">",$value->nome,"</option>"; ?>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="personagem" value="Adicionar">
        </form>

        <h1>Adicionar Local</h2>
        <form action = " " method = "post">
            ID: <input type="text" name="id"> <br>
            Nome: <input type="text" name="nome"> <br>
            Level: <input type="text" name="level"> <br>
            Cor: <input type="text" name="cor"> <br>
            Imagem: <input type="text" name="imagem"> <br>
            Área: <input type="text" name="area"> <br>
            População: <input type="text" name="populacao"> <br>
            Status: <input type="text" name="status"> <br>
            <input type="submit" name="local" value="Adicionar">
        </form>

        <h1>Adicionar Veículo</h2>
        <form action = " " method = "post">
            ID: <input type="text" name="id"> <br>
            Nome: <input type="text" name="nome"> <br>
            Level: <input type="text" name="level"> <br>
            Cor: <input type="text" name="cor"> <br>
            Imagem: <input type="text" name="imagem"> <br>
            Velocidade: <input type="number" name="velocidade"> <br>
            Voa: <input type="text" name="voa"> <br>
            Capacidade: <input type="number" name="capacidade"> <br>
            <input type="submit" name="veiculo" value="Adicionar">
        </form>
       
        <?php 
        if(isset($_POST["batalhar"])){
            $batalha = new Batalha($cartas[$_POST["carta1"]], $cartas[$_POST["carta2"]]);
            $batalha->vencedor();
        }
        ?>
    </div>     
  </body>
</html>