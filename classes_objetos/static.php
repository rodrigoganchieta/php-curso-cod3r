<div class="titulo">Membros Estáticos</div>

<?php
class A {
  public $naoStatic = 'Variável de instância';
  public static $static = 'Variável de classe (estática)';

  public function mostrarA() {
    echo "Não estática = {$this->naoStatic}<br>";
    echo "Estática = " . self::$static . "<br>";
  }

  public static function mostrarStaticA() {
    echo "Estática = " . self::$static . "<br>";
  }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA();

echo '<br>';
echo A::$static, '<br>';
A::mostrarStaticA();

A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>';
