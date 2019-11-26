<?php

abstract class Carta {
    public $id;
    public $nome;
    public $level;
    public $cor;
    public $imagem;

    abstract function forca();
}

class Arma{
    public $nome;
    public $capacidade;
    function __construct($nome, $capacidade){
        $this->nome = $nome;
        $this->capacidade = $capacidade;
    }
}
class Local extends Carta{
    public $area;
    public $populacao;
    public $status;
    function __construct($id, $nome, $level, $cor, $imagem, $area, $populacao, $status){
        $this->id   = $id;
        $this->nome   = $nome;
        $this->level = $level;
        $this->cor = $cor;
        $this->imagem = $imagem;
        $this->area = $area;
        $this->populacao = $populacao;
        $this->status = $status;
    }
    public function forca(){
        return ($this->area/200 + $this->populacao/4 + $this->status + $this->level)/4;
    }
}

class Veiculo extends Carta{
    public $velocidade;
    public $voa;
    public $capacidade;
    function __construct($id, $nome, $level, $cor, $imagem, $velocidade, $voa, $capacidade){
        $this->id   = $id;
        $this->nome   = $nome;
        $this->level = $level;
        $this->cor = $cor;
        $this->imagem = $imagem;
        $this->nome = $nome;
        $this->velocidade = $velocidade;
        $this->voa = $voa;
        $this->capacidade = $capacidade;
    }
    public function forca(){
        return ($this->velocidade/200 + $this->capacidade/200 + $this->level)/3;
    }

}
class Personagem extends Carta{
    public $idade;
    public $raca;
    public $luta;
    public $magia;
    public $sobrehumano;
    public $arma;

    function __construct($id, $nome, $level, $cor, $imagem, $idade, $raca, $luta, $magia, $sobrehumano, $arma) {
        $this->id   = $id;
        $this->nome   = $nome;
        $this->level = $level;
        $this->cor = $cor;
        $this->imagem = $imagem;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->luta = $luta;
        $this->magia = $magia;
        $this->sobrehumano = $sobrehumano;
        $this->arma = $arma;
	}

    public function forca(){
        return ($this->luta*2 + $this->magia*3 + $this->sobrehumano*3 + $this->level)/9;
    }
}

$armas[] = new Arma("Mjolnir", 4);
$armas[] = new Arma("Escudo do Capitaum", 4);
$armas[] = new Arma("Gume do Infinito", 4);

$cartas[] = new Personagem(0, "Goku Fake", 2, "red", "https://esferasdodragao.com.br/wp-content/uploads/2019/03/goku_super_saiyan_4_by_chronofz-dcgekiz-743x1024.png",
20, "Humano", 3, 2, 1, $armas[0]);

$cartas[] = new Personagem(1, "Capitão Brasil", 5, "green", "https://esferasdodragao.com.br/wp-content/uploads/2019/03/goku_super_saiyan_4_by_chronofz-dcgekiz-743x1024.png",
40, "Humano", 5, 0, 0, $armas[1]);

$cartas[] = new Personagem(2, "Dr. Estranho", 5, "red", "https://esferasdodragao.com.br/wp-content/uploads/2019/03/goku_super_saiyan_4_by_chronofz-dcgekiz-743x1024.png",
45, "Humano", 4, 5, 4, $armas[2]);

$cartas[] = new Local(3, "Latveria", 3, "yellow", "https://esferasdodragao.com.br/wp-content/uploads/2019/03/goku_super_saiyan_4_by_chronofz-dcgekiz-743x1024.png", 
100, 1, 3);

$cartas[] = new Veiculo(4, "SpiderMovel", 4, "red", "https://esferasdodragao.com.br/wp-content/uploads/2019/03/goku_super_saiyan_4_by_chronofz-dcgekiz-743x1024.png",
 90, False, 1);

echo "ID: ", $cartas[0]->id, " Nome: ", $cartas[0]->nome, " Level: ", $cartas[0]->level, " Cor: ", $cartas[0]->cor,
" Imagem: ", $cartas[0]->imagem, " Idade: ", $cartas[0]->idade, " Raça: ", $cartas[0]->raca, " Luta: ", $cartas[0]->luta,
" Magia: ", $cartas[0]->magia, " Sobrehumano: ", $cartas[0]->sobrehumano, " Nome Arma: ", $cartas[0]->arma->nome, " Capacidade Arma: ", $cartas[0]->arma->capacidade,
" Força: ", $cartas[0]->forca();

echo "<br> <br> ID: ", $cartas[1]->id, " Nome: ", $cartas[1]->nome, " Level: ", $cartas[1]->level, " Cor: ", $cartas[1]->cor,
" Imagem: ", $cartas[1]->imagem, " Idade: ", $cartas[1]->idade, " Raça: ", $cartas[1]->raca, " Luta: ", $cartas[1]->luta,
" Magia: ", $cartas[1]->magia, " Sobrehumano: ", $cartas[1]->sobrehumano, " Nome Arma: ", $cartas[1]->arma->nome, " Capacidade Arma: ", $cartas[1]->arma->capacidade,
" Força: ", $cartas[1]->forca();

echo "<br> <br> ID: ", $cartas[2]->id, " Nome: ", $cartas[2]->nome, " Level: ", $cartas[2]->level, " Cor: ", $cartas[2]->cor,
" Imagem: ", $cartas[2]->imagem, " Idade: ", $cartas[2]->idade, " Raça: ", $cartas[2]->raca, " Luta: ", $cartas[2]->luta,
" Magia: ", $cartas[2]->magia, " Sobrehumano: ", $cartas[2]->sobrehumano, " Nome Arma: ", $cartas[2]->arma->nome, " Capacidade Arma: ", $cartas[2]->arma->capacidade,
" Força: ", $cartas[2]->forca();

echo "<br> <br> ID: ", $cartas[3]->id, " Nome: ", $cartas[3]->nome, " Level: ", $cartas[3]->level, " Cor: ", $cartas[3]->cor,
" Imagem: ", $cartas[3]->imagem, " Área: ", $cartas[3]->area, " População: ", $cartas[3]->area, " Status: ", $cartas[3]->status, 
"Força: ", $cartas[3]->forca();

echo "<br> <br> ID: ", $cartas[4]->id, " Nome: ", $cartas[4]->nome, " Level: ", $cartas[4]->level, " Cor: ", $cartas[4]->cor, 
" Força: ", $cartas[4]->forca(), " Imagem: ", $cartas[4]->imagem, " Velocidade: ", $cartas[4]->velocidade, " Voa? "; 

if($cartas[4]->voa){
    echo "Sim";
} else{
    echo "Não";
}
echo " Capacidade: ", $cartas[4]->capacidade;

?>