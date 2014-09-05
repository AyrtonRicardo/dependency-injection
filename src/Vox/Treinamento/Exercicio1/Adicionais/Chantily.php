<?php

namespace Vox\Treinamento\Exercicio1\Adicionais;

use Vox\Treinamento\Exercicio1\AbstractAdicional;

class Chantily extends AbstractAdicional
{

    public function __construct()
    {
        $this->valor = 10;
        $this->nome = 'Chantili';
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