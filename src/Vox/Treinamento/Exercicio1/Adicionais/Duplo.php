<?php

namespace Vox\Treinamento\Exercicio1\Adicionais;

use Vox\Treinamento\Exercicio1\AbstractAdicional;

class Duplo extends AbstractAdicional
{

    public function __construct()
    {
        $this->valor = 30;
        $this->nome = 'Duplo';
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