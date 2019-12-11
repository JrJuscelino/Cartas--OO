<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cartas - OO</title>
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <?php include('classes.php'); 
        session_start();
        if(!isset($_SESSION['cartas'])){
            $_SESSION['cartas'] = $cartas;
        }
        ?>
        <form action ="" method="post" id="reiniciar"> <input type="submit" value="Atualizar"></form> <br>
        <div id = "cartas">
        <?php
            foreach($_SESSION['cartas'] as $carta):
                geraCarta($carta);
            endforeach;
        ?>        
        </div>
        <div>
            <h1>BATALHA</h1>
            <form action ="" method ="post" id="batalhar">
                <select name = "carta1" id="carta1">
                    <?php 
                        foreach ($_SESSION['cartas'] as $i=>$value):
                            echo "<option value=",$i,">",$value->nome,"</option>";
                        endforeach; 
                    ?>
                </select>
            VS
                <select name = "carta2" id="carta2">
                    <?php 
                        foreach ($_SESSION['cartas'] as  $i=>$value):
                            echo "<option value=",$i,">",$value->nome,"</option>";
                        endforeach; 
                    ?>
                </select>
                <input type="submit" name="batalhar" value="Batalhar">
            </form>

            <div id="resultado"></div>

            <br>

            <h1>Adicionar Personagem</h2>
            <form action = " " method = "post" id="personagem">
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
                    <?php 
                        foreach ($armas as $i=>$value):
                            echo "<option value=",$i,">",$value->nome,"</option>";
                        endforeach; 
                    ?>
                </select>
                <input type="submit" name="personagem" value="Adicionar">
            </form>

            <h1>Adicionar Local</h2>
            <form action = " " method = "post" id="local">
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
            <form action = " " method = "post" id="veiculo">
                ID: <input type="text" name="id"> <br>
                Nome: <input type="text" name="nome"> <br>
                Level: <input type="text" name="level"> <br>
                Cor: <input type="text" name="cor"> <br>
                Imagem: <input type="text" name="imagem"> <br>
                Velocidade: <input type="text" name="velocidade"> <br>
                Voa: <input type="text" name="voa"> <br>
                Capacidade: <input type="text" name="capacidade"> <br>
                <input type="submit" name="veiculo" value="Adicionar">
            </form>
        </div>     
    </body>
</html>