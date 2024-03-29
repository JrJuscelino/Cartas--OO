<?php

abstract class Carta {
    public $id;
    public $nome;
    public $level;
    public $cor;
    public $imagem;

    abstract function forca();
    abstract function toString();
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

    public function getClassName(){
        return get_class($this);
    }
    public function forca(){
        return ($this->area/200 + $this->populacao/4 + $this->status + $this->level)/4;
    }
    public function toString(){
        echo
        "<div class='cartas--carta' style = 'background-color: ", $this->cor,"; color: white; width: 200px; text-align: center'>
        <img src=",$this->imagem," width='100px' height='100px'> <br>",
            "ID: ", $this->id,"<br>",
            "Nome: ", $this->nome, "<br>",
            "Level: ", $this->level, "<br>",
            "Força: ", round($this->forca(),2), "<br>",
            "Área: ", $this->area," km² <br>",
            "População: ", $this->populacao, " milhões <br>",
            "Status: ", $this->status, "<br>",
        "</div> <br>";
    }
}

class Veiculo extends Carta{
    public $velocidade;
    private $voa;
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

    public function getClassName(){
        return get_class($this);
    }

    public function voar(){
        if($this->voa == True){
            return "Sim";
        }else{
            return "Não";
        }
    }

    public function forca(){
        return ($this->velocidade/200 + $this->capacidade/200 + $this->level)/3;
    }

    public function toString(){
        echo
        "<div class='cartas--carta' style = 'background-color: ", $this->cor,"; color: white; width: 200px; text-align: center'>
        <img src=",$this->imagem," width='100px' height='100px'> <br>",
            "ID: ", $this->id,"<br>",
            "Nome: ", $this->nome, "<br>",
            "Level: ", $this->level, "<br>",
            "Força: ", round($this->forca(),2), "<br>",
            "Velocidade: ", $this->velocidade," km/h<br>",
            "Voa? ", $this->voar(), "<br>",
            "Capacidade: ", $this->capacidade, " pessoas<br>",
        "</div> <br>";
    }

}
class Personagem extends Carta{
    public $idade;
    public $raca;
    private $luta;
    private $magia;
    private $sobrehumano;
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
    
    public function getClassName(){
        return get_class($this);
    }

    public function forca(){
        return ($this->luta*2 + $this->magia*3 + $this->sobrehumano*3 + $this->level)/9;
    }
    public function toString(){
        echo
        "<div class='cartas--carta' style = 'background-color: ", $this->cor,"; color: white; width: 200px; text-align: center'>
        <img src=",$this->imagem," width='100px' height='100px'> <br>",
            "ID: ", $this->id,"<br>",
            "Nome: ", $this->nome, "<br>",
            "Level: ", $this->level, "<br>",
            "Força: ", round($this->forca(),2), "<br>",
            "Idade: ", $this->idade,"<br>",
            "Raça: ", $this->raca, "<br>",
            "Arma: ", $this->arma->nome, "<br>",
        "</div> <br>";
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
            $this->c1->toString();
        }else if($this->c2->forca() > $this->c1->forca()){
            $this->c2->toString();
        }else{
            echo "Empate";
        }
    }
}

$armas[] = new Arma("Granada", 4);
$armas[] = new Arma("Escudo do Capitão", 4);
$armas[] = new Arma("Bastão do Infinito", 5);
$armas[] = new Arma("Mjolnir", 5);
$armas[] = new Arma("Pistola", 5);
$armas[] = new Arma("Cubo Cósmico", 5);
$armas[] = new Arma("Olho de Agamotto", 5);
$armas[] = new Arma("Caixa Materna", 5);

$cartas[] = new Personagem(0, "Kitty Pryde", 4, "black", "img\kitty.jpeg",
20, "Humano", 3, 2, 1, $armas[0]);

$cartas[] = new Personagem(1, "Capitão América", 5, "blue", "img\capAmerica.png",
40, "Humano", 5, 0, 4, $armas[1]);

$cartas[] = new Personagem(2, "Dr. Estranho", 5, "red", "img\drEstranho.jpg",
45, "Humano", 4, 5, 4, $armas[6]);

$cartas[] = new Local(3, "Latveria", 3, "green", "img\latveria.jpg", 
100, 2, 3);

$cartas[] = new Veiculo(4, "Batmóvel", 4, "red", "img\batmovel.jpg",
 90, False, 2);

?>