<?php
include 'contagem.php';
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{  
    public $num = 100;

    public function testArrayFinal()
    {
        //O memsmo número de entrada é o número de saída.
        $contagem = new Contagem($this->num);
        $final = count($contagem->final);
        $this->assertEquals($this->num, $final);
    }

    public function testArray3()
    {
        //O número de saída precisa ser a divisão da entrada por 3.
        $contagem = new Contagem($this->num);
        $esperamos = intval($this->num / 3);
        $final = count($contagem->arraym3);
        $this->assertEquals($esperamos, $final);
    }

    public function testArray5()
    {
        //O número de saída precisa ser a divisão da entrada por 5.
        $contagem = new Contagem($this->num);
        $esperamos = intval($this->num / 5);
        $final = count($contagem->arraym5);
        $this->assertEquals($esperamos, $final);
    }

    public function testArray35()
    {
        //O número de saída precisa ser a divisão da entrada por 15.
        $contagem = new Contagem($this->num);
        $esperamos = intval($this->num / 15);
        $final = count($contagem->bhutti);
        $this->assertEquals($esperamos, $final);
    }

    public function testNumNotString()
    {
        //O construtor espera um valor interiro.
        $this->assertInternalType("int", $this->num);
    }
    
}
?>