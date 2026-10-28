<?php
/*
Uma classe eh outro jeito de agrupar dados. Ela eh um modelo:diz quais informacoes
todo carro vai ter, mas ainda n eh um carro de verdade (usando carro para esse exemplo)
*/
class Carro {
    protected $marca;
    protected $ano;
    // para nao usar uma linha para adicionar cada propriedade de carro vamos usar o construct
    public function __construct($marca, $ano){ 
        $this->marca = $marca;
        $this->ano = $ano;
    }
    //metodos (funcoes dentro de uma classe). uma classe tbm pode ter funcoes. dentro da classe, funcao se chama metodo
    public function descrever() {
        echo "$this->marca - $this->ano<br>";
        // o $this quer dizer "o carro que chamou esse metodo"
    }

    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano) {
        if ($ano > 1900) {
            $this->ano = $ano;
        }
    }
}
// heranca
//digamos que queremos criar um carroEletrico, n precisamos criar uma nova class
//mas sim umas heranca, e eletrico tem tudo que o normal tem mas agr uma bateria
//carro eh classe mae e carroEletrico eh classe filha
class CarroEletrico extends Carro {
    private $bateria;
    public function info(){
        echo "$this->marca eh eletrico<br>";
    }
}
/*
criar objeto com new
agora sim vamos criar um carro de verdade, a partir do nosso modelo, isso se chama objeto
ISSO EH SEM O CONSTRUCT
$carro1 = new Carro();
$carro2 = new Carro();
$carro1->marca = "Fiat";
$carro1->ano = 2020;
$carro2->marca = "Honda";
$carro2->ano = 2018;
*/ 
$carro1 = new Carro("Fiat", 2020);
$carro2 = new Carro("Honda", 2018);
$carro1->descrever(); //o $this eh carro1
$carro2->descrever(); //o $this eh carro2
$carro1->setAno(2026);
$carro1->descrever();


$tesla = new CarroEletrico("Tesla", 2024);
$tesla->descrever();
$tesla->info();
?>