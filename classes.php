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
    public $raio;
    public $populacao;
    public $status;
    function __construct($raio, $populacao, $status){
        $this->raio = $raio;
        $this->populacao = $populacao;
        $this->status = $status;
    }
    public function forca(){
        return ($raio/200 + $populacao/4 + $status + $level)/4;
    }
}

class Veiculo extends Carta{
    public $velocidade;
    public $voa;
    public $capacidade;
    function __construct($velocidade, $voa, $capacidade){
        $this->velocidade = $velocidade;
        $this->voa = $voa;
        $this->capacidade = $capcacidade;
    }
    public function forca(){
        return ($velocidade/200 + $capacidade/200 + $level)/3;
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
        return ($idade + $luta*2 + $magia*3 + $sobrehumano*3 + $level)/10;
    }
}

$armaH = new Arma("Mjolnir", 4);

$heroi = new Personagem(0, "Goku Fake", 2, "red", "https://esferasdodragao.com.br/wp-content/uploads/2019/03/goku_super_saiyan_4_by_chronofz-dcgekiz-743x1024.png",
20, "Humano", 3, 2, 1, $armaH);

echo "ID: ", $heroi->id, " Nome: ", $heroi->nome, " Level: ", $heroi->level, " Cor: ", $heroi->cor,
" Imagem: ", $heroi->imagem, " Idade: ", $heroi->idade, " Raça: ", $heroi->raca, " Luta: ", $heroi->luta,
" Magia: ", $heroi->magia, " Sobrehumano: ", $heroi->sobrehumano, " Nome Arma: ", $heroi->arma->nome, " Capacidade Arma: ", $heroi->arma->capacidade;

?>