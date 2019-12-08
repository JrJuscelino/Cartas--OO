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

class Batalha{
    public $c1;
    public $c2;

    function __construct($c1,$c2){
        $this->c1 = $c1;
        $this->c2 = $c2;
    }

    public function vencedor(){
        if($this->c1->forca() > $this->c2->forca()){
            return $this->c1->nome;
        }else if($this->c2->forca() > $this->c1->forca()){
            return $this->c1->nome;
        }else{
            return "Empate";
        }
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

$batalha[] = new Batalha($cartas[0], $cartas[1]);

$batalha[] = new Batalha($cartas[2], $cartas[3]);

?>