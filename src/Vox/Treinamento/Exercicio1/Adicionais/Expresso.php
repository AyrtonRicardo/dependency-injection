<?php

namespace Vox\Treinamento\Exercicio1\Adicionais;

use Vox\Treinamento\Exercicio1\AbstractAdicional;

class Expresso extends AbstractAdicional
{

    public function __construct()
    {
        $this->valor = 20;
        $this->nome = 'Expresso';
    }

    public function build()
    {
        return new \Easy\Collections\Dictionary(array(
            'produto' => $this->nome,
            'valor' => $this->valor
        ));
    }

    public function getValorTotal()
    {
        return $this->valor;
    }
}