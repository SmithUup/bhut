<?php

class Contagem
{
    public $num;
    public $final = array();
    public $arraym3 = array();
    public $arraym5 = array();
    public $bhutti = array();

    //Cria um array onde one os números multiplos de 3 viram BHUT, os números multiplos de 5 viram IT os números múltiplos de 3 e 5 viram BHUT IT
    public function __construct($num)
    {
        $this->num = $num;

        //Popula o arraya iniciado com seu valor e chave em 1 até o valor recebido no construtct.
        for($m=1;$m<=$this->num;$m++)
        {
            $this->final[$m] = $m;
        }

        //Altera os valores para BHUT e mantem as chaves apenas dos números múltiplos por 3.
        for($m3=3;$m3<=$this->num;$m3+=3)
        {
            $this->arraym3[$m3] = $m3;
            $this->final[$m3] = "BHUT";
        }

        //Altera os valores para IT e mantem as chaves apenas dos números múltiplos por 5.
        for($m5=5;$m5<=$this->num;$m5+=5)
        {
            $this->arraym5[$m5] = $m5;
            $this->final[$m5] = "TI";
        }

        //Nerge do array de BHUT e IT retornando apenas os valore duplicados, os BHUT IT.
        $m3m5 = array_uintersect($this->arraym3, $this->arraym5, "strcasecmp");
        $cm3m5 = count($m3m5);

        //Altera os valores para BHUT IT mantendo as chaves, apenas dos números múltiplos por 3 e 5.
        foreach ($m3m5 as $conta35)
        {
            for($conte=0;$conte<=$cm3m5;$conte++)
            {
                $this->final[$conta35] = "BHUT TI";
                $this->bhutti[$conta35] = "BHUT TI";
            }
        }

        return $this->final;
    }
}

?>