<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
  public $nome;
  public $idade;

  function __construct($nome, $idade) {
    echo 'Construtor invocado!<br>';
    $this->nome = $nome;
    $this->idade = $idade;
  }

  function __destruct() {
    echo '<br>E morreu!';
  }

  public function __toString() {
    return "{$this->nome} tem {$this->idade} anos.";
  }

  public function apresentar() {
    echo $this . "<br>";
  }

  public function __get($atrib) {
    echo "Lendo atributo não declarado: {$atrib}<br>";
  }

  public function __set($atrib, $valor) {
    echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
  }

  public function __call($metodo, $params) {
    echo "Tentando executar método '${metodo}'";
    echo ", com os parametros: ";
    print_r($params);
  }
}

$pessoa = new Pessoa('Ricardo', 40);
$pessoa->apresentar();
echo $pessoa, '<br>';
$pessoa->nome = 'Reinaldo';

$pessoa->apresentar();

$pessoa->nomeCompleto = 'Muito Legal!!!';
$pessoa->nomeCompleto;

echo $pessoa->nome;

//pq o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1, 2, 3]);

$pessoa = null; 
